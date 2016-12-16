<!-- Main Header -->
<?php include 'head.php'; ?>
<!-- Main Header -->
<!-- Main Header -->
<?php include 'main-header.php'; ?>
<!-- Main Header -->
<!-- Sidebar Menu -->
<?php include 'sidebar_menu.php'; ?>
<!-- Sidebar Menu -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
                <h1>
                   Supplier List
                    <div class="pull-right">
                        <button class="btn btn-default"><i class="fa fa-print" aria-hidden="true"></i></button> 
                        <button class="btn btn-default"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
                        <button class="btn btn-default"> <i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </div>
                </h1>
            </section>

    <!-- Main content -->
   <section class="content">
      <div class="box">
                    <div class="box-hedader"></div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <?php foreach($supplier as $supplier):?>
                            <tbody>
                                <tr> 
                                    <td><?php echo $supplier->s_id?></td>
                                    <td><?php echo $supplier->s_name?></td>
                                    <td><?php echo $supplier->s_email?></td>
                                    <td><?php echo $supplier->s_contact?></td>
                                    <td><?php echo $supplier->s_address?></td>
                                    <td><a href="34">UPDATE</a></td>
                                </tr>
                            </tbody>
                            <?php endforeach;?>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- FOoter -->
<?php include 'foote.php'; ?>
<!-- FOoter -->