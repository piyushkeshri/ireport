<html>
<head>
<title>Display Report</title>
</head>
<body>

<?php //echo form_open("upload/mylogout");?>
   <p><?php //echo form_submit('submit', 'Logout');?></p>
<?php //echo form_close();?>

<h3>Viewing The table below!</h3>

<table border=1>
<tr>
<?php $array_keys = array_keys($dummy[0]);
      foreach ($array_keys as $element) : ?>
      <th>
         <?php echo $element; ?>
      </th>
      <?php endforeach; ?>
</tr>

<?php foreach ($dummy as $row) :?>
<tr>
    <?php foreach ($row as $key => $column) :?>
    <td>
        <?php  if($key == "imagePath") {
                  echo "<a href=\"".base_url()."uploads/".$column."\">$column</a>";
               }else {
                  echo $column;
               }
         ?>
    </td>    
    <?php endforeach; ?>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>