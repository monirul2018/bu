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
        Collections List
        <small> </small>
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
                                <th>Step</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Narration</th>
                                <th>Total</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <?php foreach($collections as $collections):?>
                            <tbody>

                                <tr> 
                                    <td><?php echo $collections->c_id?></td>
                                    <td ><?php echo $collections->c_name?></td>
                                    <td><?php echo $collections->c_step?></td>
                                    <td ><?php echo $collections->c_date?></td>
                                    <td><?php echo $collections->c_amount?></td>
                                    <td ><?php echo $collections->c_narration?></td>
                                    <td><?php echo $collections->c_amount?></td>
                                   <td><a href="34">UPDATE</a></td>
                                </tr>

                            </tbody>
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