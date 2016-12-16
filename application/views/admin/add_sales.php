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
       Add Meals
        <small>Optional description</small>
      </h1>
      
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
      <div class="col-md-12">
       <div class="box box-default">
           <div class="box-body report">
                       <?php echo form_open('Add_New_Sales_Controller'); ?>
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
                                    <td>
                                        <?php echo form_label('Name:'); ?> <?php echo form_error('s_name'); ?>
                                    </td>
                                    <td>
                                        <select name="s_name" class="form-control">
                                            <option value="none" selected="selected">------------Select Members------------</option>
                                            <!----- Displaying fetched cities in options using foreach loop ---->
                                            <?php foreach($members as $members):?>
                                                <option value="<?php echo $members->m_id?>"><?php echo $members->m_name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </td>
                                    <td>
                                        <?php echo form_label('QTY :'); ?> <?php echo form_error('s_qty'); ?>
                                    </td>
                                    <td>
                                        <?php echo form_input(
                                            array(
                                                'class' => "form-control",
                                                'data-parsley-type' => 'digits',
                                                'required id' => 'id_contact1',
                                                'name' => 's_qty',
                                                'min' => '0',
                                                'required' => 'required',
                                                'type' => 'number'));
                                        ?>

                                    </td>
                                    <td>
                                        <?php echo form_label('Date :'); ?> <?php echo form_error('s_date'); ?>
                                    </td>
                                    <td>
                                        <?php echo form_input(
                                            array(
                                                'class' => "form-control",
                                                'required id' => 'id_contact1',
                                                'name' => 's_date',
                                                'required' => 'datetime',
                                                'type' => 'datetime-local'));
                                        ?>
                                    </td>
                                    </tr>
                                   
                                    <tr>
                                    <td>
                                        <?php echo form_label('Nots :'); ?> <?php echo form_error('s_nots'); ?>
                                    </td>
                                    <td colspan="6">
                                        <?php echo form_textarea(
                                            array(
                                                'class' => "form-control",
                                                'cols' => '40',
                                                'required id' => 'id_address',
                                                'name' => 's_nots',
                                                'rows' => '3',
                                                'required' => 'required',
                                                'type' => 'text'));
                                        ?>
                                    </td>
                                    </tr>
                                   
                                    <td colspan="6">
                                        <?php echo form_submit(
                                            array(
                                                'class' => 'btn bg-navy btn-flat margin',
                                                'type' => 'submit',
                                                'value' => 'Add Meal'
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
                 </tbody>
           </table>
               <?php echo form_close(); ?>
           <br>
            <br>
             <br>
         </div>
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