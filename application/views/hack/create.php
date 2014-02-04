<h2>Register a new complaint</h2>

<?php echo validation_errors(); ?>
<?php echo $error;?>

<?php //echo form_open('hack/create') ?>
<?php echo form_open_multipart('hack/create');?>



<br /><br />

	<label for="desc">Description</label>
	<textarea name="text"></textarea><br />

        <input type="file" name="userfile" size="20" />

	<label for="geo_lat">Latitude</label>
	<input type="input" name="geo_lat" /><br />
        
	<label for="geo_lon">Longitude</label>
	<input type="input" name="geo_lon" /><br />

        <div id="checkboxes" class="widget-container content-area vertical-col">

          <button type="button" class="btn widget uib_w_3 d-margins btn-lg btn-info" data-uib="twitter%20bootstrap/button" id="Camera" ontouchstart="Capture();">Take a Picture<i class="glyphicon glyphicon-camera button-icon-right" data-position="right"></i>
          </button>
          <label class="checkbox widget uib_w_4 d-margins" data-uib="twitter%20bootstrap/checkbox">
            <input type="checkbox" id="issue1">Potholes</label>
          <label class="checkbox widget uib_w_5 d-margins" data-uib="twitter%20bootstrap/checkbox">
            <input type="checkbox" id="issue2">Road Block</label>
          <label class="checkbox widget uib_w_5 d-margins" data-uib="twitter%20bootstrap/checkbox">
            <input type="checkbox" id="issue3">Drainage Problem</label>
          <span class="uib_shim"></span>
        </div>

	<input type="submit" name="submit" value="Create news item" />

</form>