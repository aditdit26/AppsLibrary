<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/img/logo satpolpp.png');?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $username ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="<?php echo base_url().'admin/index';?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <!-- <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span> -->
        </a>
      </li>
      <!-- <li class="treeview">
        <a href="<?php echo base_url().'admin/d_users';?>">
          <i class="fa fa-users"></i>
          <span>Daftar User</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="assets/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="assets/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="assets/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul>
      </li> -->

      <li>
        <a href="<?php echo base_url().'';?>">
          <i class="fa fa-users"></i> <span>Konfirm</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url().'';?>">
          <i class="fa fa-users"></i> <span>Developer</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url().'';?>">
          <i class="fa fa-users"></i> <span>Apps</span>
        </a>
      </li>
</aside>
