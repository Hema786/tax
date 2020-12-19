<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Site Settings</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="admins.php">Settings</a></li>
                        <li class="breadcrumb-item active">Site Settings</li>
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
                            <h3 class="card-title">Site Settings</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <?php
                            $query_settings = "SELECT * FROM `site_settings`";
                            $result_settings = $conn->query($query_settings);
                            $result = $result_settings->fetch_all(MYSQLI_ASSOC);
                            //print_r($result);
                        ?>
                        <!-- /.card-header -->
                        <form role="form" action="control/controller.php" method="POST">
                            <input type="hidden" name="form_type" value="site_settings">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Generic CA Availability</label>
                                            <input type="time" id="from" name="from_time" value="<?php echo $result[0]['meta_value']; ?>"> to
                                            <input type="time" id="to" name="to_time" value="<?php echo $result[1]['meta_value']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Select WeekEnds (optional)</label>
                                            <select name="weekends" id="weekends">
                                                <option value="">Select one...</option>
                                                <option <?php if($result[2]['meta_value'] == 1) echo "selected"; ?> value="1">Sunday</option>
                                                <option <?php if($result[2]['meta_value'] == 2) echo "selected"; ?> value="2">Monday</option>
                                                <option <?php if($result[2]['meta_value'] == 3) echo "selected"; ?> value="3">Tuesday</option>
                                                <option <?php if($result[2]['meta_value'] == 4) echo "selected"; ?> value="4">Wednesday</option>
                                                <option <?php if($result[2]['meta_value'] == 5) echo "selected"; ?> value="5">Thursday</option>
                                                <option <?php if($result[2]['meta_value'] == 6) echo "selected"; ?> value="6">Friday</option>
                                                <option <?php if($result[2]['meta_value'] == 7) echo "selected"; ?> value="7">Saturday</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Default Booking Slots (in Mins)</label>
                                            <select name="booking_time" id="booking_time">
                                                <option value="">Select one...</option>
                                                <option <?php if($result[3]['meta_value'] == 15) echo "selected"; ?> value="15">15 Min</option>
                                                <option <?php if($result[3]['meta_value'] == 30) echo "selected"; ?> value="30">30 Min</option>
                                                <option <?php if($result[3]['meta_value'] == 60) echo "selected"; ?> value="60">60 Min</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div> 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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