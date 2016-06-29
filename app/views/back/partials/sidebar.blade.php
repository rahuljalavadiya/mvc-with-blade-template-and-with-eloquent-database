<!-- main sidebar -->
<?php
$current_request = Request::segment(2);
?>
<!-- aside -->
  <aside id="aside" class="app-aside modal fade " role="menu">
    <div class="left">
      <div class="box bg-white">
        <div class="navbar md-whiteframe-z1 no-radius blue">
            <!-- brand -->
            <a class="navbar-brand">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
                    width: 24px; height: 24px;">
                  <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
                  <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
                  <path d="M 8 80 L 50 0 L 50 100 Z" fill="#f3f3f3"></path>
                  <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(220, 220, 220, 0.6)"></path>
                </svg>
              <img src="images/logo.png" alt="." style="max-height: 36px; display:none">
              <span class="hidden-folded m-l inline">{{ HTML_Helpers::app_name() }}</span>
            </a>
            <!-- / brand -->
        </div>
        <div class="box-row">
          <div class="box-cell scrollable hover">
            <div class="box-inner">
              <div class="p hidden-folded blue-50" style="background-image:url({{ HTML_Helpers::asset_url('backend/images/default-bg-image.jpg')  }}); background-size:cover">
                <div class="rounded w-64 bg-white inline pos-rlt">
                  <img src="{{ HTML_Helpers::get_user_profile_pic()  }}" id="side_profile_pic" class="img-responsive rounded">
                </div>
                <a class="block m-t-sm" ui-toggle-class="hide, show" target="#nav, #account">
                  <span class="block font-bold">{{ Auth::user()->name }}</span>
                  <span class="pull-right auto">
                    <i class="fa inline fa-caret-down"></i>
                    <i class="fa none fa-caret-up"></i>
                  </span>
                  {{ Auth::user()->email }}
                </a>
              </div>
              <div id="nav">
                <nav ui-nav>
                  <ul class="nav">
                    
                   <li>
                          <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix()) }}"><i class="icon mdi-action-settings-input-svideo i-20"></i>Dashboard</a>
                        </li>
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-action-subject i-20"></i>
                        <span class="font-normal">Email List</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/email_list') }}">Emails List</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/email_groups') }}">Groups</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/email_list/templates') }}">Templates</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/email_list/send_email') }}">Send Email</a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-action-subject i-20"></i>
                        <span class="font-normal">Phone no. List</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/phone_list') }}">Phone no. List</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/phone_groups') }}">Groups</a>
                        </li>
                        
                      </ul>
                    </li>
                      <li>
                      <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/users') }}">
                        <i class="icon mdi-action-perm-contact-cal i-20"></i>
                        <span>Users</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div id="account" class="hide m-v-xs">
                <nav>
                  <ul class="nav">
                    <li>
                      <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/profile') }}">
                        <i class="icon mdi-action-perm-contact-cal i-20"></i>
                        <span>My Profile</span>
                      </a>
                    </li>
                    
                    <li>
                      <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/logout') }}">
                        <i class="icon mdi-action-exit-to-app i-20"></i>
                        <span>Logout</span>
                      </a>
                    </li>
                    
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <ul class="nav b-t b">
            <li>
               <a md-ink-ripple href="{{ url(HTML_Helpers::admin_prefix().'/logout') }}">
                        <i class="icon mdi-action-exit-to-app i-20"></i>
                        <span>Logout</span>
                      </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </aside>
  <!-- / aside -->