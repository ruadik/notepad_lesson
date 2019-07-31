<?php $this->layout('layout') ?>

    <h1>My tasks</h1>
<?php foreach ($tasksInView as $item):  ?>
<?php echo $item; ?>
<?php endforeach; ?>
