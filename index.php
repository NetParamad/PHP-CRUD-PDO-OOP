<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-CRUD-PDO-OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="modal fade" tabindex="-1" id="addNewUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-header">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="add-user-form" class="p-2" novalidate>
                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <input type="text" name="fname" id="" class="form-control form-control-lg" placeholder="Enter First Name" required>
                                <div class="invalid-feedback">Fist name is required!</div>
                            </div>
                            <div class="col">
                                <input type="text" name="lname" id="" class="form-control form-control-lg" placeholder="Enter last Name" required>
                                <div class="invalid-feedback">Last name is required!</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="Email" name="email" id="" class="form-control form-control-lg" placeholder="Enter E-mail" required>
                            <div class="invalid-feedback">E-mail is required!</div>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="phone" id="" class="form-control form-control-lg" placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required!</div>
                        </div>
                        <div class="mb-3">
                            <input type="submit" id="add-user-btn" value="Add User" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" tabindex="-1" id="editUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-header">Edit This User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="edit-user-form" class="p-2" novalidate>
                        <input type="hidden" name="id" id="id">
                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <input type="text" name="fname" id="fname" class="form-control form-control-lg" placeholder="Enter First Name" required>
                                <div class="invalid-feedback">Fist name is required!</div>
                            </div>
                            <div class="col">
                                <input type="text" name="lname" id="lname" class="form-control form-control-lg" placeholder="Enter last Name" required>
                                <div class="invalid-feedback">Last name is required!</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="Email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter E-mail" required>
                            <div class="invalid-feedback">E-mail is required!</div>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="phone" id="phone" class="form-control form-control-lg" placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required!</div>
                        </div>
                        <div class="mb-3">
                            <input type="submit" id="edit-user-btn" value="Edit User" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div class="">
                    <h4 class="text-primary">All users in the Database</h4>
                </div>
                <div class="">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewUserModal">Add New User</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div id="showAlert"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>TimeUpdate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>
</html>