<?php
use \yii\web\View;
use frontend\assets\AppAsset;


// AppAsset::register($this);  // $this 代表视图对象

// $this->registerJsFile('/js/b.js', ['depends'=>['frontend\assets\AppAsset'], 'position'=>View::POS_HEAD]);

$this->registerJsFile('/v1/js/jquery.min.1.12.3.js', ['depends'=>[], 'position'=>View::POS_HEAD]);
$this->registerCssFile('/v1/css/bootstrap.min.css');


?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<?php echo $this->renderFile('@frontend/views/common/header.php') ?>
<body>
<?php $this->beginBody(); ?>

<?php echo $content; ?>

<?php echo $this->renderFile('@frontend/views/common/footer.php') ?>

<?php $this->endBody(); ?>

</body>
</html>
<?php $this->endPage(); ?>
