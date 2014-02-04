<?php foreach ($images as $image_item):

    echo '<h2> Image No: '.$image_item['SNo'].'</h2>'; ?>
    <div id="main">
        <?php echo '<img src="'.base_url().'/'.$image_item['image'].'" alt="image_no_'.$image_item['SNo'].'">'; ?>
    </div>

<?php endforeach ?>