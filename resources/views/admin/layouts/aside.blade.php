<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="{{ url('/admin/users') }}">
                  <i class="fa fa-user"></i>
                  <span>Users</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
          </li>
      </ul>


        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Admin</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/admins') }}"><i class="fa fa-circle-o"></i>
                    Display Admins
                    </a></li>
                  <li><a href="{{ url('/admin/admins/create') }}"><i class="fa fa-circle-o"></i>
                    Add Admin
                  </a></li>
              </ul>
          </li>
      </ul>

        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Notifications</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/notifications') }}"><i class="fa fa-circle-o"></i>
                    Display Notifications
                    </a></li>
                  <li><a href="{{ url('/admin/notifications/create') }}"><i class="fa fa-circle-o"></i>
                    Send Notification
                  </a></li>
              </ul>
          </li>
      </ul>
        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Categories</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/categories') }}"><i class="fa fa-circle-o"></i>
                    Display Category
                    </a></li>
                  <li><a href="{{ url('/admin/categories/create') }}"><i class="fa fa-circle-o"></i>
                    Add Category
                  </a></li>
              </ul>
          </li>
      </ul>

        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Shops</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/shops') }}"><i class="fa fa-circle-o"></i>
                    Display Shop
                    </a></li>
                  <li><a href="{{ url('/admin/shops/create') }}"><i class="fa fa-circle-o"></i>
                    Add Shop
                  </a></li>
              </ul>
          </li>
      </ul>

        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Shop Branches</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/shopBranches') }}"><i class="fa fa-circle-o"></i>
                    Display Branch
                    </a></li>
                  <li><a href="{{ url('/admin/shopBranches/create') }}"><i class="fa fa-circle-o"></i>
                    Add Branch
                  </a></li>
              </ul>
          </li>
      </ul>

        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Categories in Shops</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/categoryServices') }}"><i class="fa fa-circle-o"></i>
                    Display Categories
                    </a></li>
                  <li><a href="{{ url('/admin/categoryServices/create') }}"><i class="fa fa-circle-o"></i>
                    Add Categories
                  </a></li>
              </ul>
          </li>
      </ul>

        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Services</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/services') }}"><i class="fa fa-circle-o"></i>
                    Display Services
                    </a></li>
                  <li><a href="{{ url('/admin/services/create') }}"><i class="fa fa-circle-o"></i>
                    Add Services
                  </a></li>
              </ul>
          </li>
      </ul>

        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Offers</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/offers') }}"><i class="fa fa-circle-o"></i>
                    Display offers
                    </a></li>
                  <li><a href="{{ url('/admin/offers/create') }}"><i class="fa fa-circle-o"></i>
                    Add offers
                  </a></li>
              </ul>
          </li>
      </ul>
        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Settings</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/terms') }}"><i class="fa fa-circle-o"></i>
                     Terms and Conditions
                    </a></li>
                  <li><a href="{{ url('/admin/about') }}"><i class="fa fa-circle-o"></i>
                    About us
                  </a></li>

                  <li><a href="{{ url('/admin/privacy') }}"><i class="fa fa-circle-o"></i>
                    Privacy & Policy
                  </a></li>

                  <li><a href="{{ url('/admin/contact') }}"><i class="fa fa-circle-o"></i>
                    Our Contact
                  </a></li>
              </ul>
          </li>
      </ul>

        <ul class="sidebar-menu ">
          <li class="header"></li>
          <li class="treeview ">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Contact Messages</span>
                  <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu ">
                  <li><a href="{{ url('/admin/contactMessages') }}"><i class="fa fa-circle-o"></i>
                    Display
                    </a></li>
              </ul>
          </li>
      </ul>

  </section>
    <!-- /.sidebar -->
</aside>
