<html>
<head>
<title>Upload Form</title>
</head>
<body>

 <!-- Main Div -->
    <?php echo validation_errors(); ?>
    
        <?php echo form_open_multipart('ireport/create_report');?>
        <h3>Welcome to the Upload section</h3>
                Title* : <input type="text" name="title" value="<?php echo set_value('title'); ?>" size="40" /> <br />
                Image File* : <input type="file" name="userfile" size="20" /> <br />
                Severity:
                            <select name="severity">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                            </select>
                            <br />
                Department Category:
                            <select name="category">
                                    <option value="water">Water Board</option>
                                    <option value="elec">Electricity Board</option>
                                    <option value="road" selected>Road and Transportation</option>
                                    <option value="garbage">Garbage</option>
                            </select>
                            <br />

                * fields are compulsory
                <br/>
                <br/>
        <input type="submit" value="Create Report" />
</body>
</html>