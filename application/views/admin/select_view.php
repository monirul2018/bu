<html>
<head>
    <title> Create And Validate Select Option Field (using for each loop) In CodeIgniter</title>
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/select.css" ?>">
</head>
<body>
<div id="container">
    <?php echo form_open('select_ctrl/error'); ?>

    <select name="city">
        <option value="none" selected="selected">------------Select Members------------</option>
        <!----- Displaying fetched cities in options using foreach loop ---->
        <?php foreach($students as $student):?>
            <option value="<?php echo $student->m_id?>"><?php echo $student->m_name?></option>
        <?php endforeach;?>
    </select>
    <?php echo form_close(); ?>
</div>
</body>
</html>