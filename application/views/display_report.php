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
   <th>Date of Creation</th>
   <th>GPS Location</th>
   <th>Category</th>
   <th>Severity</th>
   <th>Latest Status</th>
   <th>Link to Image<th>
</tr>

<tr>
   <?php foreach ($dummy as $item) :?>
   <td>
       <?php echo $item;?>
   </td>    
   <?php endforeach; ?>
</tr>
</table>

</body>
</html>