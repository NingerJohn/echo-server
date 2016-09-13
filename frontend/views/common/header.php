<?php
use \yii\web\View;
use frontend\assets\AppAsset;


AppAsset::register($this);  // $this 代表视图对象

$this->registerJsFile('b.js', ['depends'=>['frontend\assets\AppAsset'], 'position'=>View::POS_HEAD]);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->title; ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody(); ?>
    
