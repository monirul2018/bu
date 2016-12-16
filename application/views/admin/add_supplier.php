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
        Add Supplier
        <small> </small>
      </h1>
      
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="box">
                <div class="box-header">
                    <div class="box-body">
                        <?php echo form_open('add_supplier_controller'); ?>
                        <?php if (isset($message)) { ?>
                            <h3 style="color:green;">Data inserted successfully</h3><br>
                        <?php } ?>
                        <?php echo form_input(
                            array(
                                'type' => "hidden",
                                'name' => 'csrfmiddlewaretoken',
                                'value' => '2LeaJdOuCsVf2p1FlpTWeVrm2JKQj1J8'
                                ));
                        ?>
                        <?php echo form_input(
                            array(
                                'type' => "hidden",
                                'value' => '3',
                                'name' => 'user_id'
                            ));
                        ?>
                        <table align="center" class="table table-bordered table-striped">
                            <tbody><tr>

                                <td><?php echo form_label('Supplier Name :'); ?> <?php echo form_error('s_name'); ?></td>
                                <td>
                                    <?php echo form_input(
                                        array(
                                            'class' => "form-control",
                                            'data-parsley-maxlength' => '45',
                                            'id' => 'id_name',
                                            'maxlength' => '45',
                                            'name' => 's_name',
                                            'required type' => 'text'));
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo form_label('Supplier Email :'); ?> <?php echo form_error('s_email'); ?></td>
                                <td>
                                    <?php echo form_input(
                                        array(
                                            'class' => "form-control",
                                            'data-parsley-type' => 'email',
                                            'id' => 'email',
                                            'name' => 's_email',
                                            'type' => 'email',
                                            'required type' => 'required'

                                            ));
                                    ?>
                                </td>
                            </tr>

                            <tbody><tr>
                                <td><?php echo form_label('Supplier Contact No. :'); ?> <?php echo form_error('s_contact'); ?> </td>
                                <td>
                                    <?php echo form_input(
                                        array(
                                            'class' => "form-control",
                                            'data-parsley-type' => 'digits',
                                            'id' => 'id_contact',
                                            'min' => '0',
                                            'name' => 's_contact',
                                            'required' => 'required',
                                            'type' => 'number'

                                        ));
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo form_label('Supplier Address :'); ?> <?php echo form_error('s_address'); ?> </td>
                                <td>
                                    <?php echo form_textarea(
                                        array(
                                            'class' => "form-control",
                                            'cols' => '40',
                                            'required id' => 'id_address',
                                            'name' => 's_address',
                                            'rows' => '10',
                                            'required' => 'required',
                                            'type' => 'text'));
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php echo form_submit(
                                        array(
                                            'class' => 'btn bg-navy btn-flat margin',
                                            'type' => 'submit',
                                            'value' => 'Add Members'
                                        ));
                                    ?>
                                    <?php echo form_submit(
                                        array(
                                            'class' => 'btn bg-navy btn-flat margin',
                                            'type' => 'reset',
                                            'onClick' => 'window.location.reload()',
                                            'value' => 'Reset'
                                        ));
                                    ?>

                                    <br>
                                    <br>

                                </td>
                            </tr>
                            </tbody></table>
                        <?php echo form_close(); ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- FOoter -->
<?php include 'foote.php'; ?>
<!-- FOoter -->