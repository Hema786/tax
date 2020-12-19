<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Plan</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="plans.php">Plans</a></li>
                        <li class="breadcrumb-item active">Create Plan</li>
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
                            <h3 class="card-title">Add new plan</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <form role="form" action="control/controller.php" method="POST">
                            <input type="hidden" name="form_type" value="create_plan">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input required type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input required type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label for="tenure">Tenure (in Months / 0 means lifetime)</label>
                                            <input type="number" name="tenure" class="form-control" id="tenure" placeholder="Enter tenure in months">
                                        </div>
                                        <div class="form-group">
                                            <label for="recommended">Recommended</label>
                                            <input style="width:30px" type="checkbox" name="recommended" class="form-control" id="recommended" value="1">
                                        </div>
                                        <div class="form-group">
                                            <label for="line1">Line 1</label>
                                            <input type="text" name="line1" class="form-control" id="line1">
                                        </div>
                                        <div class="form-group">
                                            <label for="line1">Line 2</label>
                                            <input type="text" name="line2" class="form-control" id="line2">
                                        </div>
                                        <div class="form-group">
                                            <label for="line1">Line 3</label>
                                            <input type="text" name="line3" class="form-control" id="line3">
                                        </div>
                                        <div class="form-group">
                                            <label for="line1">Line 4</label>
                                            <input type="text" name="line4" class="form-control" id="line4">
                                        </div>
                                        <div class="form-group">
                                            <label for="line1">Line 5</label>
                                            <input type="text" name="line5" class="form-control" id="line5">
                                        </div>
                                        <div class="form-group">
                                            <label for="line1">Line 6</label>
                                            <input type="text" name="line6" class="form-control" id="line6">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create Plan</button>
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