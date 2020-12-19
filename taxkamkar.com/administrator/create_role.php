<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Admin Role</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="admins.php">Admin</a></li>
                        <li class="breadcrumb-item active">Create Role</li>
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
                            <h3 class="card-title">Add new admin role</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <form role="form" action="control/controller.php" method="POST">
                            <input type="hidden" name="form_type" value="create_role">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input required type="text" name="name" class="form-control" id="name" placeholder="Enter name of the role">
                                        </div>
                                        <div class="form-group">
                                            <label>Permissions</label>
                                            <?php
                                                $query_permissions = "SELECT * FROM `permissions`";
                                                $result_permissions = $conn->query($query_permissions);
                                            ?>
                                            <select class="duallistbox" name="permissions[]" multiple="multiple">
                                                <?php
                                                if ($result_permissions->num_rows > 0) {
                                                    while($row_permissions = $result_permissions->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row_permissions['id'] ?>"><?= $row_permissions['name'] ?></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create Role</button>
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
<script>
    $(function () {
        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox() 
    });
</script>