<div id="aside" class="app-aside fade nav-dropdown black">
      <!-- fluid app aside -->
      <div class="navside dk" data-layout="column">
        <div class="navbar no-radius">
          <!-- brand -->
          <a href="index.html" class="navbar-brand">
           <div data-ui-include="'images/logo.svg'"></div>
           <img src="images/logo.png" alt="." class="hide">
           <span class="hidden-folded inline">aside</span>
         </a>
         <!-- / brand -->
       </div>
       <div data-flex class="hide-scroll">
        <nav class="scroll nav-stacked nav-stacked-rounded nav-color">

          <ul class="nav" data-ui-nav>
            <li class="nav-header hidden-folded">
              <span class="text-xs">Main</span>
            </li>
            <li>
              <a href="dashboard.html" class="b-danger">
                <span class="nav-icon text-white no-fade">
                  <i class="ion-filing"></i>
                </span>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="app.project.html" class="b-success">
                <span class="nav-icon text-white no-fade">
                  <i class="ion-android-apps"></i>
                </span>
                <span class="nav-text">Projects</span>
              </a>
            </li>
            <li>
              <a href="app.inbox.html" class="b-info">
                <span class="nav-icon text-white no-fade">
                  <i class="ion-email"></i>
                </span>
                <span class="nav-text">Inbox</span>
              </a>
            </li>
            <li>
              <a href="app.message.html" class="b-default">
                <span class="nav-label">
                  <b class="label label-xs rounded danger"></b>
                </span>
                <span class="nav-icon">
                  <i class="ion-chatbubble-working"></i>
                </span>
                <span class="nav-text">Messages</span>
              </a>
            </li>
            <li>
              <a href="app.contact.html" class="b-default">
                <span class="nav-icon">
                  <i class="ion-person"></i>
                </span>
                <span class="nav-text">Contacts</span>
              </a>
            </li>
            
            <li>
              <a href="{{url('admin/people')}}" class="b-default">
                <span class="nav-icon">
                  <i class="ion-ios-photos"></i>
                </span>
                <span class="nav-text">People</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div data-flex-no-shrink>
        <div class="nav-fold dropup">
          <a data-toggle="dropdown">
            <div class="pull-left">
              <div class="inline"><span class="avatar w-40 grey">JR</span></div>
              <img src="images/a0.jpg" alt="..." class="w-40 img-circle hide">
            </div>
            <div class="clear hidden-folded p-x">
              <span class="block _500 text-muted">Jean Reyes</span>
              <div class="progress-xxs m-y-sm lt progress">
                <div class="progress-bar info" style="width: 15%;">
                </div>
              </div>
            </div>
          </a>
          <div class="dropdown-menu w dropdown-menu-scale ">
            <a class="dropdown-item" href="profile.html">
              <span>Profile</span>
            </a>
            <a class="dropdown-item" href="setting.html">
              <span>Settings</span>
            </a>
            <a class="dropdown-item" href="app.inbox.html">
              <span>Inbox</span>
            </a>
            <a class="dropdown-item" href="app.message.html">
              <span>Message</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="docs.html">
              Need help?
            </a>
            <a class="dropdown-item" href="signin.html">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </div>