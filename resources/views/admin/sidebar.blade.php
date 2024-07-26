<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="log1-style"><img src="dist/assets/images/log1.png" alt="logo" style="width:250px; height:150px" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="dist/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Sofia Margrette</h5>
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
            <a class="nav-link" href="{{url('home')}}">
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
          <a class="nav-link" href="{{ url('/challenge') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document"></i>
              </span>
              <span class="menu-title">Challenges</span>
            </a>
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

          <li class="nav-item menu-items {{ request()->is('view_attempts', 'view_schools', 'view_students') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('school_ranking')}}">
        <span class="menu-icon">
            <i class="mdi mdi-file-document"></i>
        </span>
        <span class="menu-title">School Ranking</span>
    </a>
      </li>

<li class="nav-item menu-items">
    <a class="nav-link" href="#" id="listsToggle">
        <span class="menu-icon">
            <i class="mdi mdi-file-document"></i>
        </span>
        <span class="menu-title">Lists</span>
        <i class="menu-arrow"></i>
    </a>
    <div id="listsSubMenu" style="display: none;">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('incomplete_challenges') }}">
                    InComplete Challenges
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('best_schools') }}">
                    Best Shchools
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('worst_schools') }}">
                    Worst School
                </a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item menu-items {{ request()->is('view_attempts', 'view_schools', 'view_students') ? 'active' : '' }}">
    <a class="nav-link" href="{{url(' ')}}">
        <span class="menu-icon">
            <i class="mdi mdi-file-document"></i>
        </span>
        <span class="menu-title">Analytics</span>
    </a>
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
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#listsToggle').click(function(e) {
            e.preventDefault(); // Prevent the default anchor click behavior
            $('#listsSubMenu').toggle(); // Toggle the sub-menu display
        });
    });
</script>


      