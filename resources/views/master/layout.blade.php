<!DOCTYPE html>
<html class='no-js' lang='en'>
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>iTracker</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='jewelrana.dev' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link href="/dashb/assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
    <link href="/dashb/assets/images/favicon.ico" rel="icon" type="image/ico" />
    
  </head>
  <body class='main page'>
    <!-- Navbar -->
   
    <div id="app" class='wrapper'>
      
      <!-- Sidebar -->
      <section id='sidebar'>
        <i class='fa fa-align-justify icon-large' id='toggle'></i>
        <ul id='dock' style="margin-top:25px;">
          <li class='active launcher'>
            <i class='fa fa-plus'></i>
            <router-link to="/dashboard">Add new</router-link>
          </li>
          <li class='launcher'>
            <i class='fa fa-project-diagram'></i>
            <router-link to="/dashboard/project">Projects</router-link>
          </li>
          <li class='launcher'>
            <i class='fa fa-layer-group'></i>
            <router-link to="/dashboard/department">Departments</router-link>
          </li>
          <li class='launcher'>
            <i class='fa fa-users'></i>
            <router-link to="/dashboard/team">Teams</router-link>
          </li>
          <li class='launcher dropdown hover'>
            <i class='fa fa-cog'></i>
            <router-link to='/dashboard/management'>Management</router-link>
            <ul class='dropdown-menu'>
              <li class='dropdown-header'>Management</li>
              <li>
                <router-link to="/dashboard/management/user">Users</router-link>
              </li>
              <li>
                <router-link to="/dashboard/management/role">Roles</router-link>
              </li>
              <li>
                <router-link to="/dashboard/management/permission">Permissions</router-link>
              </li>
            </ul>
          </li>
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      
      <section id='tools'>
          <nav class="navbar navbar-expand-lg" id='navbar'>
  <a class="navbar-brand" href="#">iTrack</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto navbar-right">
                <li class='dropdown'>
                  <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                    <i class='fa fa-envelope'></i>
                    <span class='badge'>5</span>
                  </a>
                  <ul class='dropdown-menu'>
                    <li>
                      <a href='#'>New message</a>
                    </li>
                    <li>
                      <a href='#'>Inbox</a>
                    </li>
                    <li>
                      <a href='#'>Out box</a>
                    </li>
                    <li>
                      <a href='#'>Trash</a>
                    </li>
                  </ul>
                </li>
                <li class='dropdown user'>
                  <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                    <i class='fa fa-user'></i>
                  </a>
                  <ul class='dropdown-menu'>
                    <li>
                      <a href='#'>Edit Profile</a>
                    </li>
                    <li class='divider'></li>
                    <li>
                      <a href="http://lab2023.github.io/">Sign out</a>
                    </li>
                  </ul>
                </li>
    </ul>
  </div>
</nav>          
      </section>
      <!-- Content -->
      <div id='content'>

        <router-view></router-view>
        <vue-progress-bar></vue-progress-bar>

      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script type="text/javascript" src="/js/app.js"></script>
    <script src="dashb/assets/javascripts/application-985b892b.js" type="text/javascript"></script>
  </body>

</html>
