<!-- ************************************************************************************************
                    MAIN SIDEBAR MENU
************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
      	     <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
      	     <h5 class="centered"><?php echo $this->session->userdata('username'); ?></h5>
            <li class="mt">
                <a class="active" href="<?php echo base_url('/dashboard'); ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="" href="<?php echo base_url();?>calendar">
                    <i class="fa fa-calendar"></i>
                    <span>Calendar</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="" href="<?php echo base_url();?>Examples">
                    <i class="fa fa-calendar"></i>
                    <span>Grosary Crud</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                  <i class="fa fa-desktop"></i>
                  <span>Attendence Register</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?php echo base_url(); ?>Staff">Staffs</a></li>
                    <li><a  href="#">Students</a></li>
                    <li><a  href="<?php echo base_url(); ?>ckeditor">CKEditor</a></li>
                </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-cogs"></i>
                  <span>Library</span>
              </a>
              <ul class="sub">
                  <li><a  href="#">Calendar</a></li>
                  <li><a  href="#">Gallery</a></li>
                  <li><a  href="#">Todo List</a></li>
              </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                  <i class="fa fa-book"></i>
                  <span>Hostel</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">Blank Page</a></li>
                    <li><a  href="#">Login</a></li>
                    <li><a  href="#">Lock Screen</a></li>
                </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-tasks"></i>
                  <span>Canteen</span>
              </a>
              <ul class="sub">
                  <li><a  href="#">Form Components</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-tasks"></i>
                  <span>Message</span>
              </a>
              <ul class="sub">
                  <li><a  href="#">Form Components</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-tasks"></i>
                  <span>Forum</span>
              </a>
              <ul class="sub">
                  <li><a  href="#">Add</a></li>
                  <li><a  href="#">List</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-user"></i>
                  <span>Users</span>
              </a>
              <ul class="sub">
                  <li><a  href="#">Add</a></li>
                  <li><a  href="#">List</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                  <i class=" fa fa-bar-chart-o"></i>
                  <span>Defaults</span>
              </a>
              <ul class="sub">
                  <li><a  href="<?php echo base_url(); ?>country">Country</a></li>
                  <li><a  href="<?php echo base_url(); ?>profile-update">Update Profile</a></li>
                  <li><a  href="#">Change Password</a></li>
              </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
