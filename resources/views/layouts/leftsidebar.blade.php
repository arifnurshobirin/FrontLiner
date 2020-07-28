<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
      <!-- Brand Logo -->
      <a href="home" class="brand-link navbar-danger">
        <img src="img/TPLogo2.png" alt="TP Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">CashLiner TP</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="img/userarif160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }} online</a>
            <!-- <i class="fas fa-asymmetrik"></i> -->
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">MAIN NAVIGATION</li>
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="#" id="contentdashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentdashboardv1" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentsales" class="nav-link">
                    <i class="nav-icon fas fa-meteor"></i>
                    <p>Sales</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="#" id="contenthelpdesk" class="nav-link">
                    <i class="nav-icon fas fa-handshake"></i>
                    <p>Help Desk</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" id="contentmonitoring" class="nav-link">
                <i class="nav-icon fas fa-desktop"></i>
                <p>
                  Monitoring
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" id="contentactivity" class="nav-link">
                <i class="nav-icon fas fa-running"></i>
                <p>
                  Activity
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentchronology" class="nav-link">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p>Chronology</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentreminder" class="nav-link">
                    <i class="nav-icon fas fa-stopwatch"></i>
                    <p>Reminder</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentperformance" class="nav-link">
                  <i class="nav-icon fas fa-trophy"></i>
                  <p>Performance</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" id="contentterminal" class="nav-link">
                <i class="nav-icon fas fa-cash-register"></i>
                <p>
                  Terminal
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentcounter" class="nav-link">
                    <i class="nav-icon fas fa-box"></i>
                    <p>Counter</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentpos" class="nav-link">
                    <i class="nav-icon fas fa-hdd"></i>
                    <p>POS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentedc" class="nav-link">
                    <i class="nav-icon fas fa-fax"></i>
                    <p>EDC</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" id="contentusers"  class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Users
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentadmin"  class="nav-link">
                    <i class="nav-icon fas fa-user-astronaut"></i>
                    <p>Super Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentcashier"  class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Cashier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentmanagement"  class="nav-link">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>Management</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" id="contentschedule"  class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Schedule
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentschedulecreate"  class="nav-link">
                    <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>Create Schedule</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentscheduledatatable"   class="nav-link">
                    <i class="nav-icon fas fa-calendar-check"></i>
                    <p>Datatable Schedule</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" id="contenttraining"  class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Training
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">5</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentmateri"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Materi Training</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentelearning"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>e-Learning</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../UI/buttons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pratice</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentquestion"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Question</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentscore"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Score</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" id="contentdaily"  class="nav-link">
                <i class="nav-icon fas fa-clipboard-check"></i>
                <p>
                  Daily Report
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" id="contentconsolidate"  class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Consolidate</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentpicasso"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Picasso</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentdeposit"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Deposit Form</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentbanana"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Banana Media</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">EXTRA NAVIGATION</li>
            <li class="nav-item has-treeview">
              <a href="#" id="contentreport"  class="nav-link">
                <i class="nav-icon fas fa-file-download"></i>
                <p>
                  Report Download
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentopening"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Opening Toko</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentclosing"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Closing Toko</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contenteod"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>EOD</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
            <a href="#" id="contentform"  class="nav-link">
                <i class="nav-icon fas fa-file-signature"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" id="contentformsenior"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cashier Head</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentformsenior"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Senior Cashier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentformtdr"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>TDR</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentformcs"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Customer Service</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" id="contentmailbox"  class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  E-mail
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="content"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inbox</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="content" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compose</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="content" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Read</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" id="content" class="nav-link">
                <i class="nav-icon far fa-smile-beam"></i>
                <p>
                  Extras
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" id="contentcalendar"  class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>Calendar
                      <span class="right badge badge-success">Beta</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentgallery" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Multimedia
                      <span class="right badge badge-success">Beta</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="content" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Game</p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
              <a href="#" id="contentform"  class="nav-link">
                <i class="nav-icon fas fa-file-signature"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" id="contentformsenior"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cashier Head</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentformsenior"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Senior Cashier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentformtdr"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>TDR</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" id="contentformcs"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Customer Service</p>
                  </a>
                </li>
              </ul>
            </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
