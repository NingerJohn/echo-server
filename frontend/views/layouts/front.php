<?php $this->beginPage(); ?>
<?php $this->beginBody(); ?>
<?php echo $this->renderFile('@frontend/views/common/header.php') ?>


<?php echo $content; ?>


<?php echo $this->renderFile('@frontend/views/common/footer.php') ?>

<?php $this->endBody(); ?>
<?php $this->endPage(); ?>
