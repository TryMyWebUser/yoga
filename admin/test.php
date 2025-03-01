<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Calendar</title>
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
        }
        .calendar-table td {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<?php
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

    <!-- Navigation -->
    <div class="d-flex justify-content-center mb-3">
        <a href="?y=<?php echo ($month == 1 ? $year - 1 : $year); ?>&m=<?php echo ($month == 1 ? 12 : $month - 1); ?>" class="btn btn-outline-primary me-2">Prev</a>
        <a href="?y=<?php echo ($month == 12 ? $year + 1 : $year); ?>&m=<?php echo ($month == 12 ? 1 : $month + 1); ?>" class="btn btn-outline-primary">Next</a>
    </div>

    <!-- Calendar Table -->
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
                // Print blank spaces for days before the first day
                $blankDays = $firstDayOfMonth - 1;
                for ($i = 0; $i < $blankDays; $i++) {
                    echo "<td></td>";
                }

                // Print days of the month
                for ($d = 1; $d <= $daysInMonth; $d++) {
                    if (($blankDays + $d - 1) % 7 == 0 && $d > 1) {
                        echo "</tr><tr>";
                    }
                    echo "<td>$d</td>";
                }

                // Fill remaining blank spaces
                while (($blankDays + $daysInMonth) % 7 != 0) {
                    echo "<td></td>";
                    $blankDays++;
                }
                ?>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>