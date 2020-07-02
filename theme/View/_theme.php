<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title><?= $this->e($title)?></title>
</head>
<body>
    <?php 
        if($this->section('sidebar')): 
            echo $this->section('sidebar')
    ?>
    <?php 
        else:
    ?>

        

    <?php 
        endif;
    ?>

    <?php 
        $this->section('container');
    ?>
    <script src="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"></script>
</body>
</html>