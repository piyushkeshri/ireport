<html>
<head>
<title>Upload Form</title>
</head>
<body>

 <!-- Main Div -->
    <?php echo validation_errors(); ?>
    
        <?php echo form_open_multipart('ireport/update_status');?>
        <h3>Welcome to the Update section</h3>
                Report ID* : <input type="number" name="reportID" /> <br />
                Status Description* : <input type="text" name="desc" size="90" /> <br />

                * fields are compulsory
                <br/>
                <br/>
        <input type="submit" value="Update Status" />
</body>
</html>