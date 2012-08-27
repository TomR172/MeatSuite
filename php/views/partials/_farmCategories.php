<?php $categories = array('organic', 'beef', 'chicken', 'pork'); ?>

<?php foreach($categories as $category) : ?>
    <?php if($farm[$category] == 1) : ?>
        <span class="label label-success"><?php echo ucfirst($category); ?></span>
    <?php endif ?>
<?php endforeach ?>
