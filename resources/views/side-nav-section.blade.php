<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('tle')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Session::get('admin_username')}}</p>
         
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       
  
        <li>
          <a href="/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            <span>Customer Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/customer-registration"><i class="fa fa-circle-o"></i>Add Customer</a></li>
            <li><a href="/customer-details"><i class="fa fa-circle-o"></i> Customer List</a></li>
           
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i>
            <span>Bank Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/bank-registration"><i class="fa fa-circle-o"></i>Add Bank</a></li>
            <li><a href="/bank-details"><i class="fa fa-circle-o"></i> Bank List</a></li>
           
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Product Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/pro-registration"><i class="fa fa-circle-o"></i>Add Product</a></li>
            <li><a href="/pro-details"><i class="fa fa-circle-o"></i> Product List</a></li>
           
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-exchange"></i>
            <span>Sales Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/sales-registration"><i class="fa fa-circle-o"></i>Add Sales Contract</a></li>
            <li><a href="/sales-details"><i class="fa fa-circle-o"></i> Sales Contract List</a></li>
           
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>Invoice Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/sales-contract-page"><i class="fa fa-circle-o"></i>Generate Invoices</a></li>
      
           
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>