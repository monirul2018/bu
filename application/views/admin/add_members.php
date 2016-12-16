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
                  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Members
        <small> </small>
      </h1>
      
    </section>

    <!-- Main content -->
   <section class="content">
            <div class="box">
                <div class="box-header">
                    <div class="box-body">
                        <?php echo form_open('add_member_controller'); ?>
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

                                <td><?php echo form_label('User Name :'); ?> <?php echo form_error('m_user_name'); ?></td>
                                <td>
                                    <?php echo form_input(
                                        array(
                                            'class' => "form-control",
                                            'data-parsley-maxlength' => '45',
                                            'id' => 'id_name',
                                            'maxlength' => '45',
                                            'name' => 'm_user_name',
                                            'required type' => 'text'));
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo form_label('Password :'); ?> <?php echo form_error('password'); ?></td>
                                <td>
                                    <?php echo form_input(
                                        array(
                                            'class' => "form-control",
                                            'data-parsley-maxlength' => '45',
                                            'id' => 'id_name',
                                            'maxlength' => '45',
                                            'name' => 'password',
                                            'type' => 'password',
                                            'required type' => 'password'

                                            ));
                                    ?>
                                </td>
                            </tr>

                            <tbody><tr>
                                <td><?php echo form_label('Name :'); ?> <?php echo form_error('m_name'); ?> </td>
                                <td>
                                    <?php echo form_input(
                                        array(
                                            'class' => "form-control",
                                            'data-parsley-maxlength' => '45',
                                            'id' => 'id_name',
                                            'maxlength' => '45',
                                            'name' => 'm_name',
                                            'required type' => 'text',
                                            'type' => 'text'

                                        ));
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo form_label('Email :'); ?> <?php echo form_error('m_email'); ?> </td>
                                <td>
                                    <?php echo form_input(
                                        array(
                                            'class' => "form-control",
                                            'data-parsley-maxlength' => '45',
                                            'id' => 'id_name',
                                            'maxlength' => '45',
                                            'name' => 'm_email',
                                            'required type' => 'email',
                                            'type' => 'email'
                                            ));
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo form_label('Contact No.:'); ?> <?php echo form_error('m_contact'); ?> </td>
                                <td>
                                    <?php echo form_input(
                                        array(
                                            'class' => "form-control",
                                            'data-parsley-type' => 'digits',
                                            'id' => 'id_name',
                                            'name' => 'm_contact',
                                            'min' => '0',
                                            'required type' => 'number',
                                            'type' => 'number'));
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo form_label('Address:'); ?> <?php echo form_error('m_address'); ?> </td>
                                <td>
                                    <?php echo form_textarea(
                                        array(
                                            'class' => "form-control",
                                            'cols' => '40',
                                            'required id' => 'id_address',
                                            'name' => 'm_address',
                                            'rows' => '10',
                                            'required type' => 'text',
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
<!-- Content Wrapper. Contains page content -->

<!-- FOoter -->
<?php include 'foote.php'; ?>
<!-- FOoter -->