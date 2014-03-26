<html>
<head>
<title>Display Report</title>
</head>
<!-- <script type="text/javascript" src='<?php //echo base_url()?>assets/js/table.js'> -->
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script>
        $(document).ready(function()  { 
        var $rows = $('#table tr[id^=row]');
        //console.log($rows);
        //var col_len = $rows.first().children("td").length;
        //console.log(col_len);
         $("input[id^=search]").keyup(function() {
                var id = $(this).attr('id');
                i = id.match(/search(\d)/)[1];
                //console.log(i);
                //console.log("i="+i);
                var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                //console.log(val);
                $rows.show().filter(function() {
                    var col = $(this).children("td")[i];
                    var text = $(col).text().replace(/\s+/g,' ').toLowerCase();
                    //console.log(!~text.indexOf(val));
                    return !~text.indexOf(val);
                }).hide();
            });
        });
            //console.log(val);
            //console.log("done with val");
                //console.log("text to be checked is ");
                //console.log($(this).text());
                //console.log($(this).children("td").);
                //console.log($(cols)[0].text());
                //$.each($(this).children("td"), function (index, column) {
                //  var $column = $(column);
                //  console.log(index);
                //});
                //console.log("starting with new row\n");
                //var temp = 0;
                //  if (index == 0) {
                //  var text = $(column).text().replace(/\s+/g, ' ').toLowerCase();
                //    //console.log(!~text.indexOf(val));
                //    return !~text.indexOf(val);
                //  }
                //});
                
                //console.log("result is ");
                //console.log(!~text.indexOf(val));
</script>
<body>

<?php //echo form_open("upload/mylogout");?>
   <p><?php //echo form_submit('submit', 'Logout');?></p>
<?php //echo form_close();?>

<p id="vivek"> Testing para </p>

<h3>Viewing The table below!</h3>

   
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

<!-- <button type="button" onclick="myFunction()">Try it</button> -->
</body>

</html>