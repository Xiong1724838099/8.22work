<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

这是一个测试页面

<?php foreach ( $data as $v){ ?>
<ul>
    <li><?php echo $v["name"] ?></li>
    <li><?php echo $v["age"] ?></li>
    <li><?php echo $v["sex"] ?></li>
</ul>
<?php } ?>

</body>
</html>