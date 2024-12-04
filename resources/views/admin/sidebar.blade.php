<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="log1-style"><img src="dist/assets/images/log1.png" alt="logo" class="w-150 h-150" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="dist/assets/images/faces/face15.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal text-white">Drago Sun</h5>
                  <span>Challenge Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-cog text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.home')}}">
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_schools_view')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document"></i>
              </span>
              <span class="menu-title">Schools</span>
            </a>
          </li>

          <!-- Your Navigation Structure -->
        <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#participantSubMenu" aria-expanded="false" aria-controls="participantSubMenu">
        <span class="menu-icon">
            <i class="mdi mdi-account-group"></i>
        </span>
        <span class="menu-title">Participant</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="participantSubMenu">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('retrieve_participants') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document"></i>
                    </span>
                    <span class="menu-title">Registered</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ url('participant_rejected') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-cancel"></i>
                    </span>
                    <span class="menu-title">Rejected</span>
                </a>
              </li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('upload_files')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document"></i>
              </span>
              <span class="menu-title">Question Uploads</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('upload_answers')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document"></i>
              </span>
              <span class="menu-title">Answer Uploads</span>
            </a>
          </li>

          <!-- Your Navigation Structure -->
<li class="nav-item menu-items">
    <a class="nav-link" data-toggle="collapse" href="#challengeSubMenu" aria-expanded="false" aria-controls="challengeSubMenu">
        <span class="menu-icon">
            <i class="mdi mdi-file-document"></i>
        </span>
        <span class="menu-title">Challenge</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="challengeSubMenu">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('get_challenges') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-plus"></i>
                    </span>
                    <span class="menu-title">Create Challenges</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('view_challenges')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-eye"></i>
                    </span>
                    <span class="menu-title">View Challenges</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-pdf"></i>
                    </span>
                    <span class="menu-title">Challenge PDF</span>
                </a>
            </li>
        </ul>
    </div>
</li>


        
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{('view_attempts')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document"></i>
              </span>
              <span class="menu-title">Attempts</span>
            </a>
          </li>

          <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#participantSubMenu" aria-expanded="false" aria-controls="participantSubMenu">
        <span class="menu-icon">
            <i class="mdi mdi-account-group"></i>
        </span>
        <span class="menu-title">View Performance</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="participantSubMenu">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('school_performance') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document"></i>
                    </span>
                    <span class="menu-title">Schools</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ url('participant_performance') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-cancel"></i>
                    </span>
                    <span class="menu-title">Participants</span>
                </a>
              </li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_reports')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document"></i>
              </span>
              <span class="menu-title">Reports</span>
            </a>
          </li>
        </ul>
      </nav>