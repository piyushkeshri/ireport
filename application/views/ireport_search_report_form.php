<h1><?php echo "Kutte";?></h1>


<?php echo form_open("ireport/view_reports");?>

 <p>
   <?php echo "Username";?>
   <?php echo form_input('username');?>
 </p>


  <p>
    <?php echo "Select atleast one Criteria to search"; ?>
    <?php echo "Category"; ?>
    <?php
      $options = array(
                  'all'               => 'All',                 
                  'road'              => 'Road and Transportation',
                  'electricity'       => 'Electricity',
                  'water'             => 'Water',
                  'garbage'           => 'Garbage',
                );
      echo form_dropdown('category', $options);
    ?>
  </p>
  
  <p>
    <?php echo "Severity"; ?>
    <?php
      $options = array(
                  'all'     => 'All', 
                  '1'       => '1',
                  '2'       => '2',
                  '3'       => '3',
                  '4'       => '4',
                  '5'       => '5',
                );
      echo form_dropdown('severity', $options);
    ?>
  </p>
  
  <p>
    <?php echo "Report ID";?>
    <?php echo form_input('reportID');?>
  </p>
  

 <p><?php echo form_submit('', "Search");?></p>

<?php echo form_close();?>
