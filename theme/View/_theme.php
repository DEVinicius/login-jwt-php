<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("theme/css/materialize.min.css")?>">
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
</body>
</html>