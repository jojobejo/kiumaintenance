<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload CSV</title>
</head>

<body>
    <h2>Upload CSV</h2>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>

    <?php if (isset($success)) { ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php } ?>

    <?php echo form_open_multipart('process-csv');
    $now = date('Y-m-d H:i:s');
    
    ?>

    <input type="file" name="csv_file" required>
    <input type="text" class="form-control" name="kdgenerates" value="<?= $kd ?>">
    <input type="text" class="form-control" name="dateupload" value="<?= $now ?>">
    <button type="submit">Upload</button>
    <?php echo form_close(); ?>
</body>

</html>