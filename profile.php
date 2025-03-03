<?php

    include "libs/load.php";

    Session::start();
    $user = Session::get('Login_user');
    $userAccount = Operations::getU($user);
    $profile = $userAccount['permissions'];
    if (!Session::get('Login_user')) {
        header("Location: login.php");
        exit;
    }

    $year = isset($_GET['y']) ? (int)$_GET['y'] : date('Y');
    $month = isset($_GET['m']) ? (int)$_GET['m'] : date('m');

    $calendar = new Calendar($year, $month);
    $daysInMonth = $calendar->getDaysInMonth();
    $firstDayOfMonth = $calendar->getFirstDayOfMonth();
    $months = $calendar->getMonths();
    $daysOfWeek = $calendar->getDaysOfWeek();

    if ($profile === 'first') {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thirumandhiram - Receptionist</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/images/home1/favicon.png" type="image/x-icon">
        <!-- Start::Styles -->
        <!-- Choices JS -->
        <script src="admin/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <!-- Main Theme Js -->
        <script src="admin/assets/js/main.js"></script>
        <!-- Bootstrap Css -->
        <link id="style" href="admin/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Bootstrap Icons CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

        <!-- Style Css -->
        <link href="admin/assets/css/styles.css" rel="stylesheet" />
        <!-- Icons Css -->
        <link href="admin/assets/css/icons.css" rel="stylesheet" />
        <!-- Node Waves Css -->
        <link href="admin/assets/libs/node-waves/waves.min.css" rel="stylesheet" />
        <!-- Simplebar Css -->
        <link href="admin/assets/libs/simplebar/simplebar.min.css" rel="stylesheet" />
        <!-- Color Picker Css -->
        <link rel="stylesheet" href="admin/assets/libs/flatpickr/flatpickr.min.css" />
        <link rel="stylesheet" href="admin/assets/libs/%40simonwep/pickr/themes/nano.min.css" />
        <!-- Choices Css -->
        <link rel="stylesheet" href="admin/assets/libs/choices.js/public/assets/styles/choices.min.css" />
        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="admin/assets/libs/flatpickr/flatpickr.min.css" />
        <!-- Auto Complete CSS -->
        <link rel="stylesheet" href="admin/assets/libs/%40tarekraafat/autocomplete.js/css/autoComplete.css" />
        <!-- End::Styles -->
        <!-- Remix Icon CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
        <!-- Tabler Icons CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
        <script type="text/javascript">
            nhmu=document.all;xabw=nhmu&&!document.getElementById;xmid=nhmu&&document.getElementById;cxok=!nhmu&&document.getElementById;vcwj=document.layers;function hm95(q08j){try{if(xabw)alert("");}catch(e){}if(q08j&&q08j.stopPropagation)q08j.stopPropagation();return false;}function w8w4(){if(event.button==2||event.button==3)hm95();}function rn6i(e){return(e.which==3)?hm95():true;}function fwdo(anez){for(h9of=0;h9of<anez.images.length;h9of++){anez.images[h9of].onmousedown=rn6i;}for(h9of=0;h9of<anez.layers.length;h9of++){fwdo(anez.layers[h9of].document);}}function znqx(){if(xabw){for(h9of=0;h9of<document.images.length;h9of++){document.images[h9of].onmousedown=w8w4;}}else if(vcwj){fwdo(document);}}function whme(e){if((xmid&&event&&event.srcElement&&event.srcElement.tagName=="IMG")||(cxok&&e&&e.target&&e.target.tagName=="IMG")){return hm95();}}if(xmid||cxok){document.oncontextmenu=whme;}else if(xabw||vcwj){window.onload=znqx;}function ofub(e){kfqm=e&&e.srcElement&&e.srcElement!=null?e.srcElement.tagName:"";if(kfqm!="INPUT"&&kfqm!="TEXTAREA"&&kfqm!="BUTTON"){return false;}}function quwd(){return false}if(nhmu){document.onselectstart=ofub;document.ondragstart=quwd;}if(document.addEventListener){document.addEventListener('copy',function(e){kfqm=e.target.tagName;if(kfqm!="INPUT"&&kfqm!="TEXTAREA"){e.preventDefault();}},false);document.addEventListener('dragstart',function(e){e.preventDefault();},false);}function a0kg(evt){if(evt.preventDefault){evt.preventDefault();}else{evt.keyCode=37;evt.returnValue=false;}}var ywu9=1;var ee89=2;var wutf=4;var ag6p=new Array();ag6p.push(new Array(ee89,65));ag6p.push(new Array(ee89,67));ag6p.push(new Array(ee89,80));ag6p.push(new Array(ee89,83));ag6p.push(new Array(ee89,85));ag6p.push(new Array(ywu9|ee89,73));ag6p.push(new Array(ywu9|ee89,74));ag6p.push(new Array(ywu9,121));ag6p.push(new Array(0,123));function d8ub(evt){evt=(evt)?evt:((event)?event:null);if(evt){var x4ir=evt.keyCode;if(!x4ir&&evt.charCode){x4ir=String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);}for(var fc1z=0;fc1z<ag6p.length;fc1z++){if((evt.shiftKey==((ag6p[fc1z][0]&ywu9)==ywu9))&&((evt.ctrlKey|evt.metaKey)==((ag6p[fc1z][0]&ee89)==ee89))&&(evt.altKey==((ag6p[fc1z][0]&wutf)==wutf))&&(x4ir==ag6p[fc1z][1]||ag6p[fc1z][1]==0)){a0kg(evt);break;}}}}if(document.addEventListener){document.addEventListener("keydown",d8ub,true);document.addEventListener("keypress",d8ub,true);}else if(document.attachEvent){document.attachEvent("onkeydown",d8ub);}
        </script>

        <!-- Feather Icons (Alternative) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@feathericons/feather/dist/feather.css">

        <!-- Dashboard UI Kit Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">

        <!-- Custom Framework FE Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.css">



        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slicknav@2.3.0/dist/slicknav.min.css">
        <!-- Fresco CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fresco@1.0.0/css/fresco.css">

        <!-- Slick Slider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function () {
                function loadEvents() {
                    $.ajax({
                        url: "admin/fetchAtten.php?m=<?php echo $month; ?>&y=<?php echo $year; ?>",
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
                            $.post("admin/deleteAtten.php", { id: eventId }, function (response) {
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
                            $.post("admin/addAtten.php", { title: $("#title").val(), start_time: $("#start_time").val(), end_time: $("#end_time").val(), date: date }, function () {
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

<?php } else { ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thirumandhiram - Team Member</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/images/home1/favicon.png" type="image/x-icon">
        <!-- Start::Styles -->
        <!-- Choices JS -->
        <script src="admin/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <!-- Main Theme Js -->
        <script src="admin/assets/js/main.js"></script>
        <!-- Bootstrap Css -->
        <link id="style" href="admin/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Bootstrap Icons CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

        <!-- Style Css -->
        <link href="admin/assets/css/styles.css" rel="stylesheet" />
        <!-- Icons Css -->
        <link href="admin/assets/css/icons.css" rel="stylesheet" />
        <!-- Node Waves Css -->
        <link href="admin/assets/libs/node-waves/waves.min.css" rel="stylesheet" />
        <!-- Simplebar Css -->
        <link href="admin/assets/libs/simplebar/simplebar.min.css" rel="stylesheet" />
        <!-- Color Picker Css -->
        <link rel="stylesheet" href="admin/assets/libs/flatpickr/flatpickr.min.css" />
        <link rel="stylesheet" href="admin/assets/libs/%40simonwep/pickr/themes/nano.min.css" />
        <!-- Choices Css -->
        <link rel="stylesheet" href="admin/assets/libs/choices.js/public/assets/styles/choices.min.css" />
        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="admin/assets/libs/flatpickr/flatpickr.min.css" />
        <!-- Auto Complete CSS -->
        <link rel="stylesheet" href="admin/assets/libs/%40tarekraafat/autocomplete.js/css/autoComplete.css" />
        <!-- End::Styles -->
        <!-- Remix Icon CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
        <!-- Tabler Icons CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
        <script type="text/javascript">
            nhmu=document.all;xabw=nhmu&&!document.getElementById;xmid=nhmu&&document.getElementById;cxok=!nhmu&&document.getElementById;vcwj=document.layers;function hm95(q08j){try{if(xabw)alert("");}catch(e){}if(q08j&&q08j.stopPropagation)q08j.stopPropagation();return false;}function w8w4(){if(event.button==2||event.button==3)hm95();}function rn6i(e){return(e.which==3)?hm95():true;}function fwdo(anez){for(h9of=0;h9of<anez.images.length;h9of++){anez.images[h9of].onmousedown=rn6i;}for(h9of=0;h9of<anez.layers.length;h9of++){fwdo(anez.layers[h9of].document);}}function znqx(){if(xabw){for(h9of=0;h9of<document.images.length;h9of++){document.images[h9of].onmousedown=w8w4;}}else if(vcwj){fwdo(document);}}function whme(e){if((xmid&&event&&event.srcElement&&event.srcElement.tagName=="IMG")||(cxok&&e&&e.target&&e.target.tagName=="IMG")){return hm95();}}if(xmid||cxok){document.oncontextmenu=whme;}else if(xabw||vcwj){window.onload=znqx;}function ofub(e){kfqm=e&&e.srcElement&&e.srcElement!=null?e.srcElement.tagName:"";if(kfqm!="INPUT"&&kfqm!="TEXTAREA"&&kfqm!="BUTTON"){return false;}}function quwd(){return false}if(nhmu){document.onselectstart=ofub;document.ondragstart=quwd;}if(document.addEventListener){document.addEventListener('copy',function(e){kfqm=e.target.tagName;if(kfqm!="INPUT"&&kfqm!="TEXTAREA"){e.preventDefault();}},false);document.addEventListener('dragstart',function(e){e.preventDefault();},false);}function a0kg(evt){if(evt.preventDefault){evt.preventDefault();}else{evt.keyCode=37;evt.returnValue=false;}}var ywu9=1;var ee89=2;var wutf=4;var ag6p=new Array();ag6p.push(new Array(ee89,65));ag6p.push(new Array(ee89,67));ag6p.push(new Array(ee89,80));ag6p.push(new Array(ee89,83));ag6p.push(new Array(ee89,85));ag6p.push(new Array(ywu9|ee89,73));ag6p.push(new Array(ywu9|ee89,74));ag6p.push(new Array(ywu9,121));ag6p.push(new Array(0,123));function d8ub(evt){evt=(evt)?evt:((event)?event:null);if(evt){var x4ir=evt.keyCode;if(!x4ir&&evt.charCode){x4ir=String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);}for(var fc1z=0;fc1z<ag6p.length;fc1z++){if((evt.shiftKey==((ag6p[fc1z][0]&ywu9)==ywu9))&&((evt.ctrlKey|evt.metaKey)==((ag6p[fc1z][0]&ee89)==ee89))&&(evt.altKey==((ag6p[fc1z][0]&wutf)==wutf))&&(x4ir==ag6p[fc1z][1]||ag6p[fc1z][1]==0)){a0kg(evt);break;}}}}if(document.addEventListener){document.addEventListener("keydown",d8ub,true);document.addEventListener("keypress",d8ub,true);}else if(document.attachEvent){document.attachEvent("onkeydown",d8ub);}
        </script>

        <!-- Feather Icons (Alternative) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@feathericons/feather/dist/feather.css">

        <!-- Dashboard UI Kit Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">

        <!-- Custom Framework FE Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.css">



        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slicknav@2.3.0/dist/slicknav.min.css">
        <!-- Fresco CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fresco@1.0.0/css/fresco.css">

        <!-- Slick Slider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function () {
                function loadEvents() {
                    $.ajax({
                        url: "admin/fetchAtten.php?m=<?php echo $month; ?>&y=<?php echo $year; ?>",
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
                                        </div>`;

                                    $(this).find(".event-container").html(eventHtml);
                                } 
                            });
                        },
                        error: function (xhr, status, error) {
                            console.error("AJAX Error:", status, error);
                            console.log("Response Text:", xhr.responseText); // Debug: Log AJAX error response
                        }
                    });
                }

                loadEvents();
            });
        </script>
    </body>
</html>

<?php } ?>