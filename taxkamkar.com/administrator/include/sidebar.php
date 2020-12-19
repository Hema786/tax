<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="http://taxkamkar.com/admin-panel/assets/images/logo-icon.png" alt="homepage" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Taxkamkar</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!--<div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>-->
            <div class="info nav-item">
                <a href="profile.php" class="d-block nav-link">
                    <i class="nav-icon fa fa-id-badge"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $user[0]['first_name'].' '.$user[0]['last_name'] ?>
                </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/index.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/admins.php' || $_SERVER["REQUEST_URI"] == '/administrator/create_admin.php' || $_SERVER["REQUEST_URI"] == '/administrator/roles.php' || $_SERVER["REQUEST_URI"] == '/administrator/create_role.php') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/admins.php' || $_SERVER["REQUEST_URI"] == '/administrator/create_admin.php' || $_SERVER["REQUEST_URI"] == '/administrator/roles.php' || $_SERVER["REQUEST_URI"] == '/administrator/create_role.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fa fa-user-cog"></i>
                        <p>
                            Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admins.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/admins.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="create_admin.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/create_admin.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="roles.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/roles.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="create_role.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/create_role.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new role</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/plans.php' || $_SERVER["REQUEST_URI"] == '/administrator/all_plans.php' || $_SERVER["REQUEST_URI"] == '/administrator/create_plan.php') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/plans.php' || $_SERVER["REQUEST_URI"] == '/administrator/all_plans.php' || $_SERVER["REQUEST_URI"] == '/administrator/create_plan.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fa fa-rupee-sign"></i>
                        <p>
                            Pricing Plan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="plans.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/plans.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All plans</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="create_plan.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/create_plan.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create plan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/registered_user.php' || $_SERVER["REQUEST_URI"] == '/administrator/all_prospects.php' || $_SERVER["REQUEST_URI"] == '/administrator/create_user.php') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/registered_user.php' || $_SERVER["REQUEST_URI"] == '/administrator/all_prospects.php' || $_SERVER["REQUEST_URI"] == '/administrator/create_user.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="registered_user.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/registered_user.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All registered users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="all_prospects.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/all_prospects.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All prospects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="create_user.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/create_user.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create users</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/site_setting.php' || $_SERVER["REQUEST_URI"] == '/administrator/payment_settings.php' || $_SERVER["REQUEST_URI"] == '/administrator/general_settings.php') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/site_setting.php' || $_SERVER["REQUEST_URI"] == '/administrator/payment_settings.php' || $_SERVER["REQUEST_URI"] == '/administrator/general_settings.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fa fa-tools"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="site_settings.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/site_settings.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Site Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="payment_settings.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/payment_settings.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="general_settings.php" class="nav-link <?php echo ($_SERVER["REQUEST_URI"] == '/administrator/general_settings.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General settings</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>