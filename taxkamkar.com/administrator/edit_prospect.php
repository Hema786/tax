<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update User</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="registered_user.php">Users</a></li>
                        <li class="breadcrumb-item active">Update User</li>
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
    <?php if(isset($_SESSION['success'])) { ?>
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
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
                            <h3 class="card-title">Update user</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <?php
                            $query_users = "SELECT * FROM `users` where id=".$_GET['id'];
                            $result_users = $conn->query($query_users);
                            $result = $result_users->fetch_assoc();
                            //print_r($result);
                        ?>
                        <!-- /.card-header -->
                        <form role="form" action="control/controller.php" method="POST">
                            <input type="hidden" name="form_type" value="update_user">
                            <input type="hidden" name="user_id" value="<?= $_GET['id'] ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first_name">First name</label>
                                            <input required type="text" name="first_name" value="<?= $result['first_name'] ?>" class="form-control" id="first_name" placeholder="Enter first name">
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last name</label>
                                            <input required type="text" name="last_name" value="<?= $result['last_name'] ?>" class="form-control" id="last_name" placeholder="Enter last name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input required type="email" name="email" value="<?= $result['email'] ?>" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="number" name="phone" class="form-control" value="<?= $result['phone'] ?>" id="phone" placeholder="Enter phone without '0' or '+91'">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update user</button>
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