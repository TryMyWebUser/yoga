<?php include "../libs/load.php"; ?>

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
        
        <h4 class="mt-3">Welcome Admin User</h4>
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Users List</div>
                        <div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
                            <!-- Start::header-link -->
                            <div class="autoComplete_wrapper" role="combobox" aria-owns="autoComplete_list_1" aria-haspopup="true" aria-expanded="false">
                                <input
                                    type="text"
                                    class="header-search-bar form-control search-input"
                                    id="header-search"
                                    placeholder="Search User"
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
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Password</th>
                                        <th>Join Data & Time</th>
                                        <th>Permissions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $users = Operations::getUsers();
                                        if (!empty($users)) {
                                            foreach ($users as $user) {
                                    ?>
                                    <tr class="row-user" data-name="<?= $user['username']; ?>">
                                        <td><?= $user['username']; ?></td>
                                        <td><a href="mailto:<?= $user['email']; ?>"><?= $user['email']; ?></a></td>
                                        <td><a href="tel:<?= $user['phone']; ?>"><?= $user['phone']; ?></a></td>
                                        <td><?= $user['password']; ?></td>
                                        <td><?= $user['created_at']; ?></td>
                                        <td>
                                            <span class="badge bg-primary-transparent">
                                                <?php
                                                    if ($user['permissions'] == 'first') {
                                                ?>
                                                    Receptionist
                                                <?php } elseif ($user['permissions'] == 'team') { ?>
                                                    Team Member
                                                <?php } else { ?>
                                                    Select User Permission
                                                <?php } ?>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-list">
                                                <a href="editUser.php?edit_id=<?= $user['id']; ?>"><button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line"></i></button></a>
                                                <a href="delete.php?delete_id=<?= $user['id']; ?>"><button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } } else { echo "<tr><td>No users found</td></tr>"; } ?>
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
            let userTable = document.querySelector('.table tbody');
            let userRows = document.querySelectorAll('.row-user');

            searchInput.addEventListener('keyup', function (e) {
                let searchTerm = e.target.value.toLowerCase();
                let found = false;

                userRows.forEach((row) => {
                    let username = row.getAttribute('data-name').toLowerCase();

                    if (username.includes(searchTerm)) {
                        row.style.display = 'table-row'; // Show row
                        found = true;
                    } else {
                        row.style.display = 'none'; // Hide row
                    }
                });

                // If no users match, display the "No users found" message inside the table
                let noUsersRow = document.getElementById('no-users-row');

                if (!found) {
                    if (!noUsersRow) {
                        noUsersRow = document.createElement('tr');
                        noUsersRow.id = 'no-users-row';
                        noUsersRow.innerHTML = `<td colspan="7" style="text-align: center;">No users found</td>`;
                        userTable.appendChild(noUsersRow);
                    }
                } else {
                    if (noUsersRow) {
                        noUsersRow.remove(); // Remove the message when users are found
                    }
                }
            });
        });
    </script>
</html>