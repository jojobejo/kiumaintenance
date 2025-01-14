<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CSV Import</title>
</head>

<body>
    <h2>Import CSV File</h2>
    <form method="post" enctype="multipart/form-data" action="<?= base_url('csv_import') ?>">
        <input type="file" name="csv_file" required>
        <button type="submit">Upload</button>
    </form>
    <p><?php echo $this->session->flashdata('message'); ?></p>
</body>

</html>