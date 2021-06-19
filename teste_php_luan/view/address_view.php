<?php
$addresses=$_REQUEST['addresses'];
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html" />
    <title> MEU CEP </title>
</head>
<body>
<div>
    <?php foreach ($addresses as $address): ?>
    <?php echo $address->getRua(); ?>
    <?php endforeach;?>
</div>
</body>
</html>