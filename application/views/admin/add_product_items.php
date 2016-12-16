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
        Add Product Items
        <small> </small>
      </h1>
      
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="box">
                <div class="box-header">
                    <div class="box-body">
                        <?php echo form_open('Add_Product_Items_Controller'); ?>
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
                                'name' => 'pi_id'
                            ));
                        ?>
                        <table align="center" class="table table-bordered table-striped">
                            <tbody>
                            <tr>

                                <td><?php echo form_label('Product Items:'); ?> <?php echo form_error('p_items'); ?></td>
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
                                <td><?php echo form_label('Unit Name :'); ?> <?php echo form_error('unit_name'); ?></td>
                                <td>
                                    <?php $options = array(
										' ' => '--',
										'kg' => 'kg',
										'gm' => 'gm',
										'ml' => 'ml',
										'liter' => 'liter',
										'pcs' => 'pcs'
                                      );
                                    echo form_dropdown(
                                        array(
                                            'class' => "form-control",
                                            'dropdown_menu' => 'dropdown_menu',
                                            'options' => $options,
                                            'name' => 'unit_name',
                                            '0' => '0'
                                            ));
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <?php echo form_submit(
                                        array(
                                            'class' => 'btn bg-navy btn-flat margin',
                                            'type' => 'submit',
                                            'value' => 'Add Items'
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



<!-- FOoter -->
<?php include 'foote.php'; ?>
<!-- FOoter -->