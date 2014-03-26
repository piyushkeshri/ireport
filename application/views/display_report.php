<html>
<head>
<title>Display Report</title>
</head>
<!-- <script type="text/javascript" src='<?php //echo base_url()?>assets/js/table.js'> -->
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script>
/*    Coded by Vivek;
 *    Code below is to run a jquery on the input tabs at the header of each table.
 *    It expects the input box to have id like "search0", "search1", etc.
 *    Also, it expects the id of the table to be "table"
 *    Also, it expects the id of all rows in the table to be like "row1","row2","row3", etc.
 *
 *    $(document).ready(function()  { 
        var $rows = $('#table tr[id^=row]');
         $("input[id^=search]").keyup(function() {
                var id = $(this).attr('id');
                i = id.match(/search(\d)/)[1];
                var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                $rows.show().filter(function() {
                    var col = $(this).children("td")[i];
                    var text = $(col).text().replace(/\s+/g,' ').toLowerCase();
                    return !~text.indexOf(val);
                }).hide();
            });
        });
*/        
</script>
<body>

<?php //echo form_open("upload/mylogout");?>
   <p><?php //echo form_submit('submit', 'Logout');?></p>
<?php //echo form_close();?>

<p id="vivek"> Testing para </p>

<h3>Viewing The table below!</h3>



<!--
   Coded by Vivek;
   The code below is to print the data in tabular format.    
<table border=1 id="table">
<tr>
<?php $array_keys = array_keys($dummy[0]);
      $temp =0;
      foreach ($array_keys as $element) : ?>
         <?php
            if($element != "username") { 
               echo "<th class=\"table-autofilter\">".$element." <p><input type=\"text\" id=\"search".$temp."\" placeholder=\"Type to search\"></p>"."</th>";
               $temp+=1;
            }   
         ?>
      <?php endforeach; ?>
</tr>

<?php $rownum=1; ?>
<?php foreach ($dummy as $row) :?>
<?php echo "<tr id=\"row".$rownum."\">";
      $colnum =0; ?>
    <?php foreach ($row as $key => $column) :?>
        <?php  if($key == "imagePath") {
                  echo "<td id=\"column".$colnum."\"><a href=\"".base_url()."uploads/".$column."\">$column</a></td>";
               }elseif ($key == "username") {
               } else {    
                  echo "<td id=\"column".$colnum."\">".$column."</td>";
               }
               $colnum +=1;
         ?>
    <?php endforeach; ?>
</tr>
<?php $rownum+=1; ?>
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
-->
<!-- <button type="button" onclick="myFunction()">Try it</button> -->
</body>

</html>