<div class="Pages">
    <ul>
	<?php foreach($pages as $page => $values) : ?>
            <?php if(!isset($values['showInMenu']) || $values['showInMenu']) : ?>
		<li>
			<a class=
				"<?php if($page == $currentPage) echo 'currentPage'; ?>"
				href="index.php?page=<?php echo $page; if ($page == 'learnmore'){ echo '&tab=0';} ?>"><?php echo $values["header"]; ?>
			</a>
		</li>
            <?php endif; ?>
	<?php endforeach; ?>
    </ul>	
</div>