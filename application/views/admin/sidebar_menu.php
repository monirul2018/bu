 <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Operations</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo base_url();?>sidebar_menu/admin_index"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>sidebar_menu"><i class="fa fa-user" aria-hidden="true"></i> <span>Add Members </span> </a> </li>
            <li><a href="<?php echo base_url();?>sidebar_menu/supplier"><i class="fa fa-user" aria-hidden="true"></i> <span>Add Supplier </span> </a> </li>
            <li><a href="<?php echo base_url();?>sidebar_menu/product_items"><i class="fa fa-product-hunt" aria-hidden="true"></i> <span>Add Product Items  </span> </a> </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Purchaset</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>add_sales_controller/add_product"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Add Product</span> </a> </li>
            <li><a href="product_list.html"><i class="fa fa-user" aria-hidden="true"></i> <span>Product List </span> </a> </li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Sales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>add_sales_controller"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Add Sales</span> </a> </li>
            <li><a href="<?php echo base_url();?>add_sales_controller/sales_list"><i class="fa fa-user" aria-hidden="true"></i> <span>Sales Reports </span> </a> </li>
           
          </ul>
        </li>
         <li class="treeview">
          <a href="#"><i class="fa fa-usd" aria-hidden="true"></i> <span>Collections</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>add_sales_controller/add_collections"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>New Collections</span> </a> </li>
            <li><a href="<?php echo base_url();?>add_sales_controller/collections_list"><i class="fa fa-user" aria-hidden="true"></i> <span>Collections Reports </span> </a> </li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-file-text-o"></i> <span>All Reports </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url();?>add_sales_controller/members_list"><i class="fa fa-file-text-o"></i> <span>Member Reports </span> </a></li>
          <li><a href="<?php echo base_url();?>add_sales_controller/supplier_list"><i class="fa fa-file-text-o"></i> <span>Supplier Reports </span> </a></li>
          <li><a href="product_list.html"><i class="fa fa-file-text-o"></i> <span>Product Reports </span> </a></li>
            <li><a href="<?php echo base_url();?>add_sales_controller/sales_list"><i class="fa fa-file-text-o"></i> <span>Sales Reports </span> </a></li>
            <li><a href="<?php echo base_url();?>add_sales_controller/collections_list"><i class="fa fa-file-text-o"></i> <span>Collections Reports </span></a></li>
              <li><a href="<?php echo base_url();?>home"><i class="fa fa-file-text-o"></i> <span>Collections Reports </span></a></li>

          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>