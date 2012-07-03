<div class="Pages">
    <ul>
	<?php foreach($pages as $page => $values) : ?>
            <?php if(!isset($values['showInMenu']) || $values['showInMenu']) : ?>
		<li>
			<a class=
				"<?php if($page == $currentPage) echo 'currentPage'; ?>"
				href="index.php?page=<?php echo $page; ?>"><?php echo $values["header"]; ?>
			</a>
		</li>
            <?php endif; ?>
	<?php endforeach; ?>
    </ul>	
</div>