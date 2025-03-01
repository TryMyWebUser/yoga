<?php

include "../libs/load.php";

// Start a session
Session::start();

if (!Session::get('Loggedin'))
{
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Title -->
        <title>Thirumandhiram - Dashboard</title>
        
        <?php include "temp/head.php"; ?>

    </head>
    <body>
        
        <?php include "temp/header.php"; ?>
        <?php include "temp/sideheader.php"; ?>
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">AVM List</div>
                        <div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
                            <!-- Start::header-link -->
                            <div class="autoComplete_wrapper" role="combobox" aria-owns="autoComplete_list_1" aria-haspopup="true" aria-expanded="false">
                                <input
                                    type="text"
                                    class="header-search-bar form-control search-input"
                                    id="header-search"
                                    placeholder="Search data"
                                    spellcheck="false"
                                    autocomplete="off"
                                    autocapitalize="off"
                                    aria-controls="autoComplete_list_1"
                                    aria-autocomplete="both"
                                />
                                <ul id="autoComplete_list_1" role="listbox" hidden=""></ul>
                            </div>
                            <a href="javascript:void(0);" class="header-search-icon border-0"> <i class="ri-search-line"></i> </a>
                            <!-- End::header-link -->
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $datas = Operations::getTeams();
                                        if (!empty($datas)) {
                                            foreach ($datas as $data) {
                                    ?>
                                    <tr class="row-data" data-name="<?= $data['name']; ?>">
                                        <td><?= $data['name']; ?></td>
                                        <td><?= $data['role']; ?></td>
                                        <td><img src="<?= $data['img']; ?>" style="width: 5rem;" alt="Image Not Found"></td>
                                        <td>
                                            <div class="btn-list">
                                                <a href="editTeam.php?edit_id=<?= $data['id']; ?>"><button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line"></i></button></a>
                                                <a href="deleteTeam.php?delete_id=<?= $data['id']; ?>"><button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } } else { echo "<tr><td>No Data Found</td></tr>"; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "temp/footer.php"; ?>

    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let searchInput = document.querySelector('.search-input');
            let dataTable = document.querySelector('.table tbody');
            let dataRows = document.querySelectorAll('.row-data');

            searchInput.addEventListener('keyup', function (e) {
                let searchTerm = e.target.value.toLowerCase();
                let found = false;

                dataRows.forEach((row) => {
                    let dataname = row.getAttribute('data-name').toLowerCase();

                    if (dataname.includes(searchTerm)) {
                        row.style.display = 'table-row'; // Show row
                        found = true;
                    } else {
                        row.style.display = 'none'; // Hide row
                    }
                });

                // If no datas match, display the "No datas found" message inside the table
                let nodatasRow = document.getElementById('no-datas-row');

                if (!found) {
                    if (!nodatasRow) {
                        nodatasRow = document.createElement('tr');
                        nodatasRow.id = 'no-datas-row';
                        nodatasRow.innerHTML = `<td colspan="7" style="text-align: center;">No Data Found</td>`;
                        dataTable.appendChild(nodatasRow);
                    }
                } else {
                    if (nodatasRow) {
                        nodatasRow.remove(); // Remove the message when datas are found
                    }
                }
            });
        });
    </script>
</html>