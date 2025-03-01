<?php

    include "../libs/load.php";

    Session::start();

    if (!Session::get('Loggedin')) {
        header("Location: index.php");
        exit;
    }

    $year = isset($_GET['y']) ? (int)$_GET['y'] : date('Y');
    $month = isset($_GET['m']) ? (int)$_GET['m'] : date('m');

    $calendar = new Calendar($year, $month);
    $daysInMonth = $calendar->getDaysInMonth();
    $firstDayOfMonth = $calendar->getFirstDayOfMonth();
    $months = $calendar->getMonths();
    $daysOfWeek = $calendar->getDaysOfWeek();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thirumandhiram - Dashboard</title>
        <?php include "temp/head.php"; ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
                /* position: absolute; */
                top: 5px;
                left: 5px;
                right: 5px;
            }

            div:where(.swal2-container) h2:where(.swal2-title) {
                padding: .8em 1em 0 !important;
                font-size: 1.875em !important;
            }

            div:where(.swal2-container) div:where(.swal2-html-container) {
                margin: 0 !important;
                color: inherit !important;
                font-size: 1.125em !important;
            }

            div:where(.swal2-container) div:where(.swal2-popup)
            {
                padding: 0 0 1.25em !important;
            }

            div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-confirm) {
                border: 0 !important;
                border-radius: .25em !important;
                background: initial !important;
                background-color: #7066e0 !important;
                color: #fff !important;
                font-size: 1em !important;
            }

            div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-cancel)
            {
                font-size: 1em !important;
                box-shadow: 0 0 3px !important;
            }
        </style>
    </head>
    <body>
        <?php include "temp/header.php"; ?>
        <?php include "temp/sideheader.php"; ?>
        <div class="container calendar-container mt-4">
            <h2 class="mb-3"><?php echo $months[$month - 1] . " " . $year; ?></h2>
            <div class="d-flex justify-content-center mb-3">
                <a href="?y=<?= $month == 1 ? $year - 1 : $year; ?>&m=<?= $month == 1 ? 12 : $month - 1; ?>" class="btn btn-outline-primary me-2">Prev</a>
                <a href="?y=<?= $month == 12 ? $year + 1 : $year; ?>&m=<?= $month == 12 ? 1 : $month + 1; ?>" class="btn btn-outline-primary">Next</a>
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
                            echo "<td data-date='$date' class='td'>$d<div class='event-container'></div></td>";
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
        <?php include "temp/footer.php"; ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function () {
                function loadEvents() {
                    $.ajax({
                        url: "fetchAtten.php?m=<?php echo $month; ?>&y=<?php echo $year; ?>",
                        type: "GET",
                        dataType: "json",
                        success: function (events) {

                            $(".calendar-table td.td").each(function () {
                                // In index.php
                                let date = $(this).attr("data-date");
                                date = new Date(date).toISOString().split('T')[0]; // Ensure consistent format

                                if (events[date]) {
                                    let eventData = events[date];
                                    let eventHtml = `
                                        <div class='event'>
                                            ${eventData.title} (${eventData.start_time} - ${eventData.end_time})
                                            <button class='btn btn-danger btn-sm delete-btn' data-id='${eventData.id}' style='margin-left:5px;'>X</button>
                                        </div>`;

                                    $(this).find(".event-container").html(eventHtml);
                                    // console.log("Event HTML Added for Date:", date, eventHtml); // Debug: Log added HTML
                                } 
                                // else {
                                //     console.log("No Event Found for Date:", date); // Debug: Log if no event is found
                                // }
                            });
                        },
                        error: function (xhr, status, error) {
                            console.error("AJAX Error:", status, error);
                            console.log("Response Text:", xhr.responseText); // Debug: Log AJAX error response
                        }
                    });
                }

                $(document).on("click", ".delete-btn", function (event) {
                    event.preventDefault();
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
                            $.post("deleteAtten.php", { id: eventId }, function (response) {
                                let res = JSON.parse(response);
                                if (res.status === "success") {
                                    Swal.fire("Deleted!", "Your event has been deleted.", "success").then(() => {
                                        loadEvents();
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire("Error!", "Event deletion failed.", "error");
                                }
                            });
                        }
                    });
                });

                $(".calendar-table td").click(function () {
                    let date = $(this).data("date");
                    Swal.fire({
                        title: "Add Event",
                        html: '<input type="text" id="title" class="swal2-input" placeholder="Name?" required><br>' +
                            'IN <input type="time" id="start_time" class="swal2-input" required><br>' +
                            'OUT <input type="time" id="end_time" class="swal2-input" required>',
                        showCancelButton: true,
                        confirmButtonText: "Save",
                    }).then((result) => {
                        if (result.value) {
                            $.post("addAtten.php", { title: $("#title").val(), start_time: $("#start_time").val(), end_time: $("#end_time").val(), date: date }, function () {
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