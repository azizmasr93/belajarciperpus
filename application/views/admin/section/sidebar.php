<!-- SIDEBAR -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/admin')?>/dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
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
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{admin}daftar/profil"><i class="fa fa-user"></i>Profil</a></li>
            <li class="active"><a href="{admin}daftar/user"><i class="fa fa-user"></i>User</a></li>
            <li class="active"><a href="{admin}daftar/status"><i class="fa fa-user"></i>Status</a></li>
            <li class="active"><a href="{admin}daftar/buku"><i class="fa fa-user"></i>Buku</a></li>
             <li class="active"><a href="{admin}daftar/kategori"><i class="fa fa-user"></i>Kategori Buku</a></li>
            <li class="active"><a href="{admin}daftar/pengunjung"><i class="fa fa-user"></i>Pengunjung</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- SIDEBAR -->