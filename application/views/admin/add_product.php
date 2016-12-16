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
        Purchaset Product
        <small> </small>
      </h1>
      
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="box">
                <div class="box-header">
                    <div class="box-body">
        
         
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
             <td>
                    <?php echo form_label('Supplier'); ?> <?php echo form_error('c_name'); ?>
             </td>
            </tr>
            <tr>
                <td>
				<?php echo form_open('add_product_controller'); ?>
                    <select name="c_name" class="form-control">
                        <option value="none" selected="selected">------------Select Supplier------------</option>
                        <!----- Displaying fetched cities in options using foreach loop ---->
                        <?php foreach($supplier as $supplier):?>
                            <option value="<?php echo $supplier->s_id?>"><?php echo $supplier->s_name?></option>
                        <?php endforeach;?>
                    </select>
                  <?php echo form_close(); ?>
                </td>
            </tr>
        </tbody></table>
    </div>
    
    <div class="box">
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
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>SL.No</th>
                        <th>Product</th>
                        <th>QTY</th>
                        <th>Unit</th>
                        <th>Unit Price</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody id='TextBoxesGroup'>
                      <tr id="TextBoxDiv1">
                        <td><label>1.</label></td>
                        <td>
                            <select name="c_name"  id="p_items"  class="form-control">
                            <option value="none" selected="selected">------------Select Supplier------------</option>
                            <!----- Displaying fetched cities in options using foreach loop ---->
                            <?php foreach($items as $items):?>
                                <option value="<?php echo $items->pi_id?>"><?php echo $items->p_items?></option>
                            <?php endforeach;?>
                            </select>
                        </td>
                        <td><input class="form-control" id="p_qty" name="column" type="number" min="0" onblur="sum()"></td>
                        <td>
                            <?php echo form_input(
                                array(
                                    'class' => "form-control",
                                    'type' => "text",
                                    'name' => 'rate',
                                    'id' => 'p_unit',
                                    'data-bind' => 'data-bind',
                                    'readonly' => 'readonly',
                                    'value' => '2LeaJdOuCsVf2p1FlpTWeVrm2JKQj1J8'
                                ));
                            ?>

                         </td>
                        <td><input class="form-control" id="u_price" min="0" name="price" type="number" onblur="sum()"></td>
                        <td><input type="text" class="form-control" name="order_media[total_amount]" id="amount" value="0.00" readonly onchange="total_cal(this.value)"></td>
                      </tr>
                      <tr>
                          <td colspan="13"> <input type='button' value='Add' id='addButton'>
<input type='button' value='Remove' id='removeButton'></td>
                      </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                  <?php echo form_close(); ?>
                </div>
            </div>
                </div>
            </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
 function sum(){
      //grab the values
      qty = document.getElementById('p_qty').value;
      price = document.getElementById('u_price').value;

      document.getElementById('amount').value = parseFloat(qty) * parseFloat(price);
  }
</script>



<!-- FOoter -->
<?php include 'foote.php'; ?>
<!-- FOoter -->