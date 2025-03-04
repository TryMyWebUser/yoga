<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Calendar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        .calendar-container {
            max-width: 800px;
            margin: auto;
            text-align: center;
        }
        .calendar-table th, .calendar-table td {
            width: 14.28%;
            height: 80px;
            text-align: center;
            vertical-align: middle;
            font-size: 16px;
            position: relative;
        }
        .calendar-table td {
            border: 1px solid #ddd;
            cursor: pointer;
        }
        .event {
            background-color: #ff8c00;
            color: white;
            padding: 5px;
            font-size: 14px;
            border-radius: 5px;
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
        }
    </style>
</head>
<body>

<?php
    include 'db.php';
    date_default_timezone_set('UTC');

    $year = isset($_GET['y']) ? (int)$_GET['y'] : date('Y');
    $month = isset($_GET['m']) ? (int)$_GET['m'] : date('m');

    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDayOfMonth = date('N', strtotime("$year-$month-01"));
    $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    $daysOfWeek = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
?>

<div class="container calendar-container mt-4">
    <h2 class="mb-3"><?php echo $months[$month - 1] . " " . $year; ?></h2>

    <div class="d-flex justify-content-center mb-3">
        <a href="?y=<?php echo ($month == 1 ? $year - 1 : $year); ?>&m=<?php echo ($month == 1 ? 12 : $month - 1); ?>" class="btn btn-outline-primary me-2">Prev</a>
        <a href="?y=<?php echo ($month == 12 ? $year + 1 : $year); ?>&m=<?php echo ($month == 12 ? 1 : $month + 1); ?>" class="btn btn-outline-primary">Next</a>
    </div>

    <table class="table table-bordered calendar-table">
        <thead>
            <tr>
                <?php foreach ($daysOfWeek as $day) : ?>
                    <th><?php echo $day; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $blankDays = $firstDayOfMonth - 1;
                for ($i = 0; $i < $blankDays; $i++) {
                    echo "<td></td>";
                }

                for ($d = 1; $d <= $daysInMonth; $d++) {
                    $date = "$year-$month-" . str_pad($d, 2, '0', STR_PAD_LEFT);
                    if (($blankDays + $d - 1) % 7 == 0 && $d > 1) {
                        echo "</tr><tr>";
                    }
                    echo "<td data-date='$date'>$d<div class='event-container'></div></td>";
                }

                while (($blankDays + $daysInMonth) % 7 != 0) {
                    echo "<td></td>";
                    $blankDays++;
                }
                ?>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        function loadEvents() {
            $.get("fetch_events.php?m=<?php echo $month; ?>&y=<?php echo $year; ?>", function (data) {
                let events = JSON.parse(data);
                $(".calendar-table td").each(function () {
                    let date = $(this).data("date");
                    if (events[date]) {
                        let eventHtml = `<div class='event'>
                                            ${events[date].title} (${events[date].start_time} - ${events[date].end_time})
                                            <button class='btn btn-danger btn-sm delete-btn' data-id='${events[date].id}' style='margin-left:5px;'>X</button>
                                        </div>`;
                        $(this).find(".event-container").html(eventHtml);
                    }
                });
            });
        }

        // $(document).on("click", ".delete-btn", function (e) {
        //     e.stopPropagation();
        //     let eventId = $(this).data("id");

        //     Swal.fire({
        //         title: "Are you sure?",
        //         text: "You won't be able to revert this!",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonText: "Yes, delete it!"
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.post("delete_event.php", { id: eventId }, function (response) {
        //                 let res = JSON.parse(response);
        //                 if (res.status === "success") {
        //                     Swal.fire("Deleted!", "Your event has been deleted.", "success");
        //                     loadEvents(); // Reload events after deletion
        //                 } else {
        //                     Swal.fire("Error!", "Event deletion failed.", "error");
        //                 }
        //             });
        //         }
        //     });
        // });
        // Call loadEvents() on page load
        $(document).ready(function () {
            loadEvents();

            // Delete event function
            $(document).on("click", ".delete-btn", function (event) {
                event.preventDefault(); // Prevent page reload if inside a form
                
                let eventId = $(this).data("id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.post("delete_event.php", { id: eventId }, function (response) {
                            try {
                                let res = JSON.parse(response);

                                if (res.status === "success") {
                                    Swal.fire("Deleted!", "Your event has been deleted.", "success").then(() => {
                                        loadEvents(); // Reload event list dynamically
                                        location.reload(); // This will reload the page
                                    });
                                } else {
                                    Swal.fire("Error!", "Event deletion failed.", "error");
                                }
                            } catch (error) {
                                console.error("JSON parsing error:", error);
                                Swal.fire("Error!", "Invalid server response.", "error");
                            }
                        });
                    }
                });
            });
            });

        $(".calendar-table td").click(function () {
            let date = $(this).data("date");
            if (!date) return;

            Swal.fire({
                title: "Add Event",
                html: '<input type="text" id="title" class="swal2-input" placeholder="Event Title"><br>' +
                    'IN <input type="time" id="start_time" class="swal2-input"><br>' +
                    'OUT <input type="time" id="end_time" class="swal2-input">',
                showCancelButton: true,
                confirmButtonText: "Save",
            }).then((result) => {
                if (result.value) {
                    $.post("add_event.php", { title: $("#title").val(), start_date: date, start_time: $("#start_time").val(), end_date: date, end_time: $("#end_time").val() }, function () {
                        loadEvents();
                    });
                }
            });
        });

        loadEvents();
    });
</script>

</body>
</html>