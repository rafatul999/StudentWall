<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo"><a  class="simple-text logo-normal">
    StudentWall
  </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/student*')? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin.student.index') }}">
          <i class="material-icons">person</i>
          <p>Student</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/teacher*')? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin.teacher.index') }}">
          <i class="material-icons">person</i>
          <p>Teacher</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/class*')? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin.class.index') }}">
          <i class="material-icons">class</i>
          <p>Class</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/library*')? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin.library.index') }}">
          <i class="material-icons">book</i>
          <p>Library</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="material-icons">group</i>
          <p>Group</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="material-icons">group</i>
          <p>Blog</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="material-icons">group</i>
          <p>Find Hostel</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="material-icons">job</i>
          <p>Find Job</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/about*')? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin.about.index') }}">
          <i class="material-icons">About</i>
          <p>About</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/calender*')? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin.calender.index') }}">
          <i class="material-icons">Calendar</i>
          <p>Academic Calender</p>
        </a>
      </li> 
    </ul>
  </div>
</div>