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
        Collections
        <small> </small>
      </h1>
      
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
      <div class="col-md-12">
       <div class="box box-default">
           <div class="box-body report">
               <?php echo form_open('Add_collections_Controllers'); ?>
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
                                        <?php echo form_label('Collections From :'); ?> <?php echo form_error('c_name'); ?>
                                    </td>
                                    <td>
                                        <select name="c_name" class="form-control">
                                            <option value="none" selected="selected">------------Select Members------------</option>
                                            <!----- Displaying fetched cities in options using foreach loop ---->
                                            <?php foreach($members as $members):?>
                                                <option value="<?php echo $members->m_id?>"><?php echo $members->m_name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </td>
                                    <td>
                                       <?php echo form_label('Date :'); ?> <?php echo form_error('c_date'); ?>
                                    </td>
                                    <td>
                                       <?php echo form_input(
                                           array(
                                               'class' => "form-control",
                                               'required id' => 'id_contact1',
                                               'name' => 'c_date',
                                               'required' => 'datetime',
                                               'type' => 'datetime-local'));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        <?php echo form_label('Amount :'); ?> <?php echo form_error('c_amount'); ?>
                                    </td>
                                    <td>
                                        <?php echo form_input(
                                            array(
                                                'class' => "form-control",
                                                'data-parsley-maxlength' => "45",
                                                'id' => 'id_name',
                                                'maxlength' => '45',
                                                'name' => 'c_amount',
                                                'required' => 'number',
                                                'type' => 'number'));
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo form_label('Select Step:'); ?> <?php echo form_error('c_step'); ?>
                                    </td>
                                    <td>
                                        <?php $options = array(
                                            ' ' => '--',
                                            'Step1' => 'Step1',
                                            'Step2' => 'Step2',
                                            'Step3' => 'Step3',
                                            'Step4' => 'Step4',
                                            'Step5' => 'Step5',
                                            'Step6' => 'Step6'
                                        );
                                        echo form_dropdown(
                                            array(
                                                'class' => "form-control",
                                                'dropdown_menu' => 'dropdown_menu',
                                                'options' => $options,
                                                'name' => 'c_step',
                                            ));
                                        ?>
                                    </td>
                                    </tr>
                                   <tbody>
                                    <tr>
                                    <td>
                                        <?php echo form_label('Narration:'); ?> <?php echo form_error('c_narration'); ?>
                                    <td colspan="3">
                                            <?php echo form_textarea(
                                                array(
                                                    'class' => "form-control",
                                                    'cols' => '40',
                                                    'required id' => 'id_address',
                                                    'name' => 'c_narration',
                                                    'rows' => '3',
                                                    'required' => 'required',
                                                    'type' => 'text'));
                                            ?>
                                    </td>
                                    </tr>
                                   
                                    <td colspan="4">
                                        <?php echo form_submit(
                                            array(
                                                'class' => 'btn bg-navy btn-flat margin',
                                                'type' => 'submit',
                                                'value' => 'CONFIRM'
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


 <!-- FOoter -->
<?php include 'foote.php'; ?>
<!-- FOoter -->