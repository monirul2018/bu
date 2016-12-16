<!-- Main Header -->
<?php include 'head.php'; ?>
<!-- Main Header -->
<!-- Main Header -->
<?php include 'main-header.php'; ?>
<!-- Main Header -->
<!-- Sidebar Menu -->
<?php include 'sidebar_menu.php'; ?>
<!-- Sidebar Menu -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
                <h1>
                   Members List
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
                                <th>User Name</th>
                                <th>Password</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <?php foreach($members as $members):?>
                            <tbody>
                                <tr>
                                    <th><?php echo $members->m_id?></th>
                                    <th><?php echo $members->m_user_name;?></th>
                                    <td><?php echo $members->password;?></td>
                                    <td><?php echo $members->m_name;?></td>
                                    <td><?php echo $members->m_email;?></td>
                                    <td><?php echo $members->m_contact;?></td>
                                    <td><?php echo $members->m_address;?></td>
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
   <!-- FOoter -->
<?php include 'foote.php'; ?>
<!-- FOoter -->