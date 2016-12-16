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
                   Meal List
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
                    <div class="box-body" style="overflow: scroll;">
                       <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>QTY</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Nots</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                           <?php foreach($sales as $sales):?>
                            <tr>
                                <th><?php echo $sales->s_id?></th>
                                <th><?php echo $sales->s_name?></th>
                                <th><?php echo $sales->s_qty?></th>
                                <th><?php echo $sales->s_date?></th>
                                <th><?php echo $sales->s_qty?></th>
                                <th><?php echo $sales->s_nots?></th>
                                <td><a href="34">UPDATE</a></td>
                            </tr>
                           <?php endforeach;?>
                            </tbody>
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