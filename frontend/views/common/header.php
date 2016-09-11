<?php
use \yii\web\View;
use frontend\assets\AppAsset;


AppAsset::register($this);  // $this 代表视图对象

$this->registerJsFile('b.js', ['depends'=>['frontend\assets\AppAsset'], 'position'=>View::POS_HEAD]);

?>

<?php //$this->render('@app/views/test/one.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php $this->head() ?>

</head>
<body>
    
</body>
</html>