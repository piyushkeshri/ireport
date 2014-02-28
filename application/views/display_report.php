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
         <?php
            if($element != "username") { 
               echo "<th>".$element."</th>";
            }   
         ?>
      <?php endforeach; ?>
</tr>

<?php foreach ($dummy as $row) :?>
<tr>
    <?php foreach ($row as $key => $column) :?>
        <?php  if($key == "imagePath") {
                  echo "<td><a href=\"".base_url()."uploads/".$column."\">$column</a></td>";
               }elseif ($key == "username") {
               } else {    
                  echo "<td>".$column."</td>";
               }
         ?>
    <?php endforeach; ?>
</tr>
<?php endforeach; ?>
</table>

<br><br>
<h3>Viewing The table below with username just for testing purpose!</h3>
<table border=1>
<tr>
<?php $array_keys = array_keys($dummy[0]);
      foreach ($array_keys as $element) : ?>
         <?php
            echo "<th>".$element."</th>";   
         ?>
      <?php endforeach; ?>
</tr>

<?php foreach ($dummy as $row) :?>
<tr>
    <?php foreach ($row as $key => $column) :?>
        <?php  if($key == "imagePath") {
                  echo "<td><a href=\"".base_url()."uploads/".$column."\">$column</a></td>";
               } else {    
                  echo "<td>".$column."</td>";
               }
         ?>
    <?php endforeach; ?>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>