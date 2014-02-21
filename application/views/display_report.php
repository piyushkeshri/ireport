<html>
<head>
<title>Display Report</title>
</head>
<body>

<?php //echo form_open("upload/mylogout");?>
   <p><?php //echo form_submit('submit', 'Logout');?></p>
<?php //echo form_close();?>



<h3>Viewing The table below!</h3>
<?php //print_r ($dummy); ?>

<table border=1>
<tr>
   <th>ReportID</th>
   <th>UserName</th>
   <th>GPS Location</th>
   <th>Latest Status</th>
   <th>Category</th>
   <th>Date of Creation</th>
   <th>Severity</th>
   <th>Link to Image<th>
</tr>

<?php foreach ($dummy as $row) :?>
<tr>
    <?php foreach ($row as $column) :?>
    <td>
        <?php echo $column;?>
    </td>    
    <?php endforeach; ?>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>