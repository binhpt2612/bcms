<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $this->imagesUrl ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Binh Pham Thanh</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
<!--            <li class="header">HEADER</li>-->
            <!-- Optionally, you can add icons to the links -->
            <li><a href="<?php echo $this->baseUrl('/admin/index');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="<?php echo $this->baseUrl('/admin/group/');?>"><i class="fa fa-user-plus"></i> <span>Members</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->baseUrl('/admin/group/');?>"> <i class="fa fa-users"></i> <span>Group Manager</span></a></li>
                    <li><a href="<?php echo $this->baseUrl('/admin/users/');?>"><i class="fa fa-user"></i> <span>User manager</span></a></li>
                    <li><a href="<?php echo $this->baseUrl('/admin/permission');?>"><i class="fa fa-bolt"></i> <span>Permission</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-cart-plus"></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"> <i class="fa fa-archive"></i> <span>Category Manager</span></a></li>
                    <li><a href="#"><i class="fa fa-automobile"></i> <span>Products Manager</span></a></li>
                    <li><a href="#"><i class="fa fa-cc"></i> <span>Bill</span></a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>