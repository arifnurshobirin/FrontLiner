<!-- Main Sidebar Container -->
<aside class="main-sidebar main-sidebar-custom sidebar-dark-danger elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('admin') }}" class="brand-link navbar-danger">
        <img src="{{ asset('img/TPLogo2.png') }}" alt="TP Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('img/userarif160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->fullname }} online</a>
            <!-- <i class="fas fa-asymmetrik"></i> -->
          </div>
        </div>

        <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">MAIN NAVIGATION</li>
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview{{ (request()->is('admin/dashboard','admin/sales','admin/helpdesk')) ? ' menu-open' : '' }}">
              <a href="#" id="contentdashboard" class="nav-link{{ (request()->is('admin/dashboard','admin/sales','admin/helpdesk')) ? ' active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('dashboard') }}" id="contentdashboardv1" class="nav-link{{ (request()->is('admin/dashboard')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('sales') }}" id="contentsales" class="nav-link{{ (request()->is('admin/sales')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-meteor"></i>
                    <p>Sales</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('helpdesk') }}" id="contenthelpdesk" class="nav-link{{ (request()->is('admin/helpdesk')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-handshake"></i>
                    <p>Help Desk</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ route('monitoring.index') }}" id="contentmonitoring" class="nav-link{{ (request()->is('admin/monitoring')) ? ' active' : '' }}">
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
                  <a href="{{ route('chronology.index') }}" id="contentchronology" class="nav-link">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p>Chronology</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('error') }}" id="contentreminder" class="nav-link">
                    <i class="nav-icon fas fa-stopwatch"></i>
                    <p>Reminder</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('performance') }}" id="contentperformance" class="nav-link">
                  <i class="nav-icon fas fa-trophy"></i>
                  <p>Performance</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview{{ (request()->is('admin/counter','admin/computer','admin/edc')) ? ' menu-open' : '' }}">
              <a href="#" id="contentterminal" class="nav-link{{ (request()->is('admin/counter','admin/computer','admin/edc')) ? ' active' : '' }}">
                <i class="nav-icon fas fa-cash-register"></i>
                <p>
                  Terminal
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contentcounter" class="nav-link{{ (request()->is('admin/counter')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-box"></i>
                    <p>Counter</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('computer.index') }}" id="contentcomputer" class="nav-link{{ (request()->is('admin/computer')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-hdd"></i>
                    <p>Computer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('edc.index') }}" id="contentedc" class="nav-link{{ (request()->is('admin/edc')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-fax"></i>
                    <p>EDC</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview{{ (request()->is('admin/superadmin','admin/cashier','admin/management')) ? ' menu-open' : '' }}">
              <a href="#" id="contentusers"  class="nav-link{{ (request()->is('admin/superadmin','admin/cashier','admin/management')) ? ' active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Users
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('cashier.index') }}" id="contentadmin" class="nav-link{{ (request()->is('admin/superadmin')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-user-astronaut"></i>
                    <p>Super Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('cashier.index') }}" id="contentcashier" class="nav-link{{ (request()->is('admin/cashier')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Cashier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('management.index') }}" id="contentmanagement" class="nav-link{{ (request()->is('admin/management')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>Management</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview{{ (request()->is('admin/schedule/create','admin/schedule')) ? ' menu-open' : '' }}">
              <a href="#" id="contentschedule"  class="nav-link{{ (request()->is('admin/schedule/create','admin/schedule')) ? ' active' : '' }}">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Schedule
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('schedule.create') }}" id="contentschedulecreate" class="nav-link{{ (request()->is('admin/schedule/create')) ? ' active' : '' }}">
                    <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>Create Schedule</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('schedule.index') }}" id="contentscheduledatatable" class="nav-link{{ (request()->is('admin/schedule')) ? ' active' : '' }}">
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
                  <a href="{{ route('training.index') }}" id="contentmateri"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Materi Training</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('elearning.index') }}" id="contentelearning"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>e-Learning</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('pratice') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pratice</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('question') }}" id="contentquestion"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Question</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('score') }}" id="contentscore"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Score</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview{{ (request()->is('admin/deposit','admin/consolidate','admin/banana')) ? ' menu-open' : '' }}">
              <a href="#" id="contentdaily"  class="nav-link{{ (request()->is('admin/deposit','admin/consolidate','admin/banana')) ? ' active' : '' }}">
                <i class="nav-icon fas fa-clipboard-check"></i>
                <p>
                  Daily Report
                  <i class="right fas fa-angle-left"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('consolidate.deposit') }}" id="contentdeposit"  class="nav-link{{ (request()->is('admin/deposit')) ? ' active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Deposit Receipt</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('consolidate.index') }}" id="contentolidate"  class="nav-link{{ (request()->is('admin/consolidate')) ? ' active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Consolidate</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('consolidate.banana') }}" id="contentbanana"  class="nav-link{{ (request()->is('admin/banana')) ? ' active' : '' }}">
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
                  <a href="{{ route('counter.index') }}" id="contentopening"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Opening Toko</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contentclosing"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Closing Toko</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contenteod"  class="nav-link">
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
                  <a href="{{ route('counter.index') }}" id="contentformsenior"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cashier Head</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contentformsenior"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Senior Cashier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contentformtdr"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>TDR</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contentformcs"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Customer Service</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview{{ (request()->is('admin/mailbox','admin/compose','admin/readmail')) ? ' menu-open' : '' }}">
              <a href="#" id="contentmailbox"  class="nav-link{{ (request()->is('admin/mailbox','admin/compose','admin/readmail')) ? ' active' : '' }}">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  E-mail
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('mailbox') }}" id="content"  class="nav-link{{ (request()->is('admin/mailbox')) ? ' active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inbox</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('compose') }}" id="content" class="nav-link{{ (request()->is('admin/compose')) ? ' active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compose</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('readmail') }}" id="content" class="nav-link{{ (request()->is('admin/readmail')) ? ' active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Read</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview{{ (request()->is('admin/calendar','admin/gallery')) ? ' menu-open' : '' }}">
              <a href="#" id="content" class="nav-link{{ (request()->is('admin/calendar','admin/gallery')) ? ' active' : '' }}">
                <i class="nav-icon far fa-smile-beam"></i>
                <p>
                  Extras
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('calendar') }}" id="contentcalendar"  class="nav-link{{ (request()->is('admin/calendar')) ? ' active' : '' }}">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>Calendar
                      <span class="right badge badge-success">Beta</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('gallery') }}" id="contentgallery" class="nav-link{{ (request()->is('admin/gallery')) ? ' active' : '' }}">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Multimedia
                      <span class="right badge badge-success">Beta</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="content" class="nav-link">
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
                  <a href="{{ route('counter.index') }}" id="contentformsenior"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cashier Head</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contentformsenior"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Senior Cashier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contentformtdr"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>TDR</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('counter.index') }}" id="contentformcs"  class="nav-link">
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

      <div class="sidebar-custom">
        <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
        <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
      </div>
      <!-- /.sidebar-custom -->
    </aside>
