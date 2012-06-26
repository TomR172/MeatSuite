<div class="Pages">

	<?php global $page; ?>
	<ul>
		<li> 
			<?php if ($page == "Home"): ?>
				<a class = "currentPage"
				href="index.php?page=Home&pageFile=home">Home</a>
			<?php else: ?>
				<a href="index.php?page=Home&pageFile=home">Home</a>
				<?php endif ?>
		</li>
		<li> 
			<?php if ($page == "About"): ?>
				<a class = "currentPage" 
				href="index.php?page=About&pageFile=about">About</a>
			<?php else: ?>
				<a href="index.php?page=About&pageFile=about">About</a>
				<?php endif ?>
		</li>
		<li> 
			<?php if ($page == "Common Cattle Breeds"): ?>
				<a class = "currentPage" 
				href="index.php?page=Common Cattle Breeds&pageFile=commonCattleBreeds">Common Cattle Breeds</a>
			<?php else: ?>
				<a href="index.php?page=Common Cattle Breeds&pageFile=commonCattleBreeds">Common Cattle Breeds</a>
				<?php endif ?>
		</li>
		<li> 
			<?php if ($page == "Contact Information"): ?>
				<a class = "currentPage" 
				href="index.php?page=Contact Information&pageFile=contactInfo">Contact Information</a>
			<?php else: ?>
				<a href="index.php?page=Contact Information&pageFile=contactInfo">Contact Information</a>
				<?php endif ?>
		</li>
	</ul>
</div>