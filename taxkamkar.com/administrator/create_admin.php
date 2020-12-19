<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Admin</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="admins.php">Admin</a></li>
                        <li class="breadcrumb-item active">Create Admin</li>
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
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    </div>
    <?php } ?>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Add new admin</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <form role="form" action="control/controller.php" method="POST">
                            <input type="hidden" name="form_type" value="create_admin">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first_name">First name</label>
                                            <input required type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter first name">
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last name</label>
                                            <input required type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter last name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input required type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="roles">Roles</label>
                                            <?php
                                            $query_roles = "SELECT * FROM `roles` WHERE id != 4 AND id != 5";
                                            $result_roles = $conn->query($query_roles);
                                            ?>
                                            <select class="form-control select2bs4" name="roles" id="roles" style="width: 100%;">
                                                <option selected="selected">Select Role</option>
                                                <?php
                                                if ($result_roles->num_rows > 0) {
                                                    while($row_roles = $result_roles->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row_roles['id'] ?>"><?= $row_roles['role_name'] ?></option>
                                                <?php } } ?>
                                             </select>
                                        </div>
                                        <p class="text-info">After creation admins will be emailed with an email and password to login in the portal.</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create Admin</button>
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