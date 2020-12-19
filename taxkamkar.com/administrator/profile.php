<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile Update</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php if(isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php } ?>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Profile Setting</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <form role="form" action="control/controller.php" method="POST">
                            <input type="hidden" name="form_type" value="profile_update">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first_name">First name</label>
                                            <input required type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter first name" value="<?php echo ($user[0]["first_name"] != '' || $user[0]["first_name"] != null) ? $user[0]["first_name"] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last name</label>
                                            <input required type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter last name" value="<?php echo ($user[0]["last_name"] != '' || $user[0]["last_name"] != null) ? $user[0]["last_name"] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input required type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo ($user[0]["email"] != '' || $user[0]["email"] != null) ? $user[0]["email"] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input required type="number" name="phone" class="form-control" id="phone" placeholder="Enter phone" value="<?php echo ($user[0]["phone"] != '' || $user[0]["phone"] != null) ? $user[0]["phone"] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter address"><?php echo ($user[0]["address"] != '' || $user[0]["address"] != null) ? $user[0]["address"] : ''; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="male" name="gender" <?php echo ($user[0]["gender"] != '' && $user[0]["gender"] == 'male') ? 'checked' : ''; ?>>
                                                <label class="form-check-label">Male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="female" name="gender" <?php echo ($user[0]["gender"] != '' && $user[0]["gender"] == 'female') ? 'checked' : ''; ?>>
                                                <label class="form-check-label">Female</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dob">Dob</label>
                                            <input required type="date" name="dob" class="form-control" id="dob" placeholder="Enter date of birth" value="<?php echo ($user[0]["dob"] != '' || $user[0]["dob"] != null) ? $user[0]["dob"] : ''; ?>">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <form role="form" action="control/controller.php" method="POST">
                            <input type="hidden" name="form_type" value="change_password">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="current_password">Current Password</label>
                                            <input required type="password" name="current_password" class="form-control" id="current_password" placeholder="Enter current password">
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password">New password</label>
                                            <input required type="password" name="new_password" class="form-control" id="new_password" placeholder="Enter new password">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Include footer -->
<?php require_once('include/footer.php'); ?>