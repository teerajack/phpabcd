<!DOCTYPE html>
<html>
<head>
    <title>Upload Image in Codeigniter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php echo @$error; ?> 
    <form class="form-signin" action="<?=base_url('index.php/ImageUpload/upload')?>" method="post" accept-charset="utf-8" 
    enctype="multipart/form-data">
    <?php /* echo form_open_multipart('ImageUpload/upload') action="<?=base_url('user/login') method="post" */
    ?>
	<?php echo "<input type='file' name='profile_pic' size='20' />"; ?>
	<?php echo "<input type='submit' name='submit' value='upload' /> ";?>
	<?php echo "</form>"?>
</body>
</body>
</html>