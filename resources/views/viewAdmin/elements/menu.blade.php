<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('images/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>User
        </p>
        <!-- Status -->
        <a href="#">
          <i class="fa fa-circle text-success">
          </i> Online
        </a>
      </div>
    </div>
    <!-- search form (Optional) -->
    <!--<form action="#" method="get" class="sidebar-form">
<div class="input-group">
<input type="text" name="q" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
</button>
</span>
</div>
</form>-->
    <!-- /.search form -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Menu
      </li>
      <li>
        <a href="{!! url('/api/dashboard/') !!}">
          <i class="fa fa-bar-chart">
          </i>
          <span>Index
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder-open">
          </i>
          <span>IT-Jobs Manager
          </span>
          <i class="fa fa-angle-left pull-right">
          </i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{!! url('/api/admin_skill/') !!}">
              <i class="fa fa-folder-open-o">
              </i>
              <span>Skill
              </span>
            </a>
          </li>
          <li>
            <a href="{!! url('/api/admin_location/') !!}">
              <i class="fa fa-map-marker">
              </i>
              <span>Location
              </span>
            </a>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cart-arrow-down"> 
          </i>
          <span>Post Manager
          </span>
          <i class="fa fa-angle-left pull-right">
          </i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{!! url('/api/admin_post/') !!}">
              <i class="fa fa-shopping-cart">
              </i>
              <span>Post list
              </span>
            </a>
          </li>
          <li>
            <a href="{!! url('/api/admin_applied_job/') !!}">
              <i class="fa fa-asterisk">
              </i>
              <span>Post applied
              </span>
            </a>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-group">
          </i>
          <span>Customer Manager
          </span>
          <i class="fa fa-angle-left pull-right">
          </i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{!! url('/api/admin_employer/') !!}">
              <i class="fa fa-users">
              </i>
              <span>Employer
              </span>
            </a>
          </li>
          <li>
            <a href="{!! url('/api/admin_employer_detail/') !!}">
              <i class="fa fa-info-circle">
              </i>
              <span>Employer Detail
              </span>
            </a>
          </li>
          <li>
            <a href="{!! url('/api/admin_candidate/') !!}">
              <i class="fa fa-user">
              </i>
              <span>Candidate
              </span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{!! url('/api/admin_follow/') !!}">
          <i class="fa fa-thumbs-up">
          </i>
          <span>Follow
          </span>
        </a>
      </li>
      <li>
        <a href="{!! url('/api/admin_reviews/') !!}">
          <i class="fa fa-comments-o">
          </i>
          <span>Reviews
          </span>
        </a>
      </li>
      <li>
        <a href="{!! url('/api/admin_contact/') !!}">
          <i class="fa fa-fax">
          </i>
          <span>Contact of WEB 
          </span>
        </a>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
