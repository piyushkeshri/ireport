<h1><?php echo "Kutte";?></h1>


<?php echo form_open("ireport/view_reports");?>

 <p>
   <?php echo "Username";?>
   <?php echo form_input('identity');?>
 </p>

 <p>
   <?php echo "Select the Criteria to search"; ?>
   <?php
     $options = array(
                 'category'  => 'Category',
                 'gps'       => 'GPS location',
                 'severity'  => 'Severity',
               );
     echo form_dropdown('criteria', $options);
   ?>
 </p>

 <p>
   <?php echo "Value";?>
   <?php echo form_input('value');?>
 </p>
 
<!--  <p>
   <?php if($this->input->post('criteria') == "category") {
             $category_options = array (
                   'road'    => 'Road',
                   'electricity' => 'Electricity',
                   'redlight'    => 'Red Light',
                   'all'     => 'All',
             );
             echo form_dropdoown('category',$category_options);
             //echo "Category has been selected Do something about it now";
   }
   ?>
 </p>-->

 <p><?php echo form_submit('', "Search");?></p>

<?php echo form_close();?>