<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <?php if(isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fa fa-ban"></i> Alert!</h5>
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php } ?>
    <?php if(isset($_SESSION['success'])) { ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fa fa-check"></i> Alert!</h5>
            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
    <?php } ?>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Online Visitors</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">820</span>
                                    <span>Visitors Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 12.5%
                                    </span>
                                    <span class="text-muted">Since last week</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="position-relative mb-4">
                                <canvas id="visitors-chart" height="200"></canvas>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This Week
                                </span>
                                <span>
                                <i class="fas fa-square text-gray"></i> Last Week
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Recent Guests</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Visited Page</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>test@yopmail.com</td>
                                        <td>Tax Calculator</td>
                                        <td>23 Oct 2020</td>
                                        <td>10:50 AM</td>
                                    </tr>
                                    <tr>
                                        <td>test2@yopmail.com</td>
                                        <td>Tax Planner</td>
                                        <td>23 Oct 2020</td>
                                        <td>10:50 AM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Tax Filling Requests</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">820</span>
                                    <span>Visitors Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 12.5%
                                    </span>
                                    <span class="text-muted">Since last week</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="position-relative mb-4">
                                <canvas id="filling-requests-chart" height="200"></canvas>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This Week
                                </span>
                                <span>
                                <i class="fas fa-square text-gray"></i> Last Week
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Site Overview</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-success text-xl">
                                    <i class="fa fa-calculator"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-success"></i> 12%
                                    </span>
                                    <span class="text-muted">Tax Planner</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-warning text-xl">
                                    <i class="fa fa-file-import"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                    </span>
                                    <span class="text-muted">Tax Filling</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-warning text-xl">
                                    <i class="fa fa-campground"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                    </span>
                                    <span class="text-muted">Rent Calculator</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <p class="text-danger text-xl">
                                    <i class="fa fa-users"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-down text-danger"></i> 1%
                                    </span>
                                    <span class="text-muted">REGISTRATION RATE</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
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