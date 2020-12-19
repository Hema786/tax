<?php require_once('include/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Admin Roles</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="admins.php">Admin</a></li>
                        <li class="breadcrumb-item active">Roles</li>
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
                            <h3 class="card-title">All Roles</h3>
                        </div>
                        <!-- /.card-header -->
                        <?php
                            $query_roles = "SELECT * FROM `roles` WHERE id != 4 AND id !=5";
                            $result_roles = $conn->query($query_roles);
                        ?>
                        <div class="card-body">
                            <table id="admins_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SrNo.</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                    if ($result_roles->num_rows > 0) {
                                        while($row = $result_roles->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $row['role_name'] ?></td>
                                        <td>
                                            <a href="edit_role.php?id=<?= $row['id'] ?>">
                                                <span>
                                                    <i class="fas fa-highlighter"></i> Edit
                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <? if($row['id'] == 1 || $row['id'] == 2 || $row['id'] == 3) { ?>
                                            <span>Not permissible</span>
                                            <?php } else { ?>
                                            <a href="control/controller.php?action=delete_role&id=<?= $row['id'] ?>">
                                                <span>
                                                    <i class="fas fa-eraser"></i> Delete
                                                </span>
                                            </a>
                                            <?php } ?>
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
<!-- Include footer -->
<?php require_once('include/footer.php'); ?>
<script>
  $(function () {
    $('#admins_table').DataTable({
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>