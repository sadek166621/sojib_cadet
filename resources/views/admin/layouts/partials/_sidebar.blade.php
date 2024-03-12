<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link" style="font-size: medium;text-align: center;">
      {{-- <img src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8 "> --}}
      <span class="brand-text font-weight-light">{{ getSetting()->site_name }}</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Website Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.slider.list') }}" class="nav-link">
                  <i class="fas fa-file-image ml-3"></i>
                  <p class="ml-1">Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.edit') }}" class="nav-link">
                  <i class="fas fa-edit ml-3"></i>
                  <p class="ml-1">Change Settings</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Administration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.department.list') }}" class="nav-link">
                  <i class="fas fa-building ml-3"></i>
                  <p class="ml-1">Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.teacher.list') }}" class="nav-link">
                  <i class="fas fa-edit ml-3"></i>
                  <p class="ml-1">Teachers</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('admin.student.list') }}" class="nav-link">
                  <i class="fas fa-edit ml-3"></i>
                  <p class="ml-1">Student</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{ route('admin.location.list') }}" class="nav-link">
                  <i class="fas fa-map-marker ml-3"></i>
                  <p class="ml-1">Staff Working Locations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.staff.list') }}" class="nav-link">
                  <i class="fas fa-briefcase ml-3"></i>
                  <p class="ml-1">Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.notice.list') }}" class="nav-link">
                  <i class="fas fa-bullhorn ml-3"></i>
                  <p class="ml-1">Notices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.news.list') }}" class="nav-link">
                  <i class="fas fa-book ml-3"></i>
                  <p class="ml-1">News</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Student Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.student.list') }}" class="nav-link">
                  <i class="fas fa-list-alt ml-3"></i>
                  <p class="ml-1">All Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.group.list') }}" class="nav-link">
                  <i class="fas fa-list-alt ml-3"></i>
                  <p class="ml-1">Sections</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Student Result
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.exam.list') }}" class="nav-link">
                  <i class="fas fa-list-alt ml-3"></i>
                  <p class="ml-1">Exam List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.result.list') }}" class="nav-link">
                  <i class="fas fa-list-alt ml-3"></i>
                  <p class="ml-1">Student Result List</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('admin.result.list') }}" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Student Result
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('admin.photogallery.list') }}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Photo Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.academic.list') }}" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
               Academic
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.form-download.list') }}" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
               Form-Download
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
            Routine & Syllabus
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.examroutine.list') }}" class="nav-link">
                  <i class="fas fa-edit ml-3"></i>
                  <p class="ml-1">Academic Course Plan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.classroutine.list') }}" class="nav-link">
                  <i class="fas fa-edit ml-3"></i>
                  <p class="ml-1">Routine & Syllabus</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.admission-related.list') }}" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>
                Regarding admission
              </p>
            </a>
          </li>

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
