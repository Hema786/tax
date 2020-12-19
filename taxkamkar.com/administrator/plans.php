<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Plans</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="plans.php">Plans</a></li>
                        <li class="breadcrumb-item active">All plans</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Plans</h3>
                        </div>
                        <!-- /.card-header -->
                        <?php
                            $query_reg_users = "SELECT * FROM `pricingplan`";
                            $result_reg_users = $conn->query($query_reg_users);
                        ?>
                        <div class="card-body">
                            <table id="admins_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SrNo.</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Tenure(in Months)</th>
                                        <th>Recommended</th>
                                        <th>View/Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                    if ($result_reg_users->num_rows > 0) {
                                        while($row = $result_reg_users->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $row['title'] ?></td>
                                        <td><?= '₹'.$row['price'] ?></td>
                                        <td><?php if($row['tenure'] == 0) { echo "Lifetime"; } else { echo $row['tenure'].' Months'; } ?></td>
                                        <td><?php if($row['recommended'] == 1) { echo "Yes"; } else { echo "No"; } ?></td>
                                        <?php /*
                                            $query_user_timeline = "SELECT * FROM `user_timeline` WHERE user_id=".$row['id']." ORDER BY id DESC LIMIT 1";
                                            $result_user_timeline = $conn->query($query_user_timeline);
                                            if ($result_user_timeline->num_rows > 0) {
                                                while($row_user_timeline = $result_user_timeline->fetch_assoc()) {
                                        ?>
                                        <td><?= $row_user_timeline['browsed'] ?></td>
                                        <?php
                                                }
                                            }
                                        */ ?>
                                        <td>
                                            <a href="edit_plan.php?id=<?= $row['id'] ?>">
                                                <span>
                                                    <i class="fas fa-highlighter"></i> View/Edit
                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="control/controller.php?action=delete_plan&id=<?= $row['id'] ?>">
                                                <span>
                                                    <i class="fas fa-eraser"></i> Delete
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; } } else { ?>
                                    <tr>
                                        <td>No Results</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">
    <!-- Modal content-->
    <div class="modal-content" id="modal-content">
      
    </div>
  </div>
</div>
<!-- Include footer -->
<?php require_once('include/footer.php'); ?>
<script>
  $(function () {
    $('#userinfo').click(function(){
        var userid = $(this).data('id');
        // AJAX request
        $.ajax({
            url: 'control/controller.php',
            type: 'post',
            data: { userid: userid, form_type:'view_user' },
            success: function(response){ 
                // Add response in Modal body
                $('#modal-content').html(response);
                // Display Modal
                $('#myModal').modal('show'); 
            }
        });
    });  
      
    $('#admins_table').DataTable({
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>