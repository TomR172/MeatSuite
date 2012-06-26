<div class="Pages">

	<ul>
		<li> 
			<?php if ($currentPage == "home"): ?>
				<a class = "currentPage"
				href="index.php?page=home">Home</a>
			<?php else: ?>
				<a href="index.php?page=home">Home</a>
				<?php endif ?>
		</li>
		<li> 
			<?php if ($currentPage == "about"): ?>
				<a class = "currentPage" 
				href="index.php?page=about">About</a>
			<?php else: ?>
				<a href="index.php?page=about">About</a>
				<?php endif ?>
		</li>
		<li> 
			<?php if ($currentPage == "commonCattleBreeds"): ?>
				<a class = "currentPage" 
				href="index.php?page=commonCattleBreeds">Common Cattle Breeds</a>
			<?php else: ?>
				<a href="index.php?page=commonCattleBreeds">Common Cattle Breeds</a>
				<?php endif ?>
		</li>
		<li> 
			<?php if ($currentPage == "contactInfo"): ?>
				<a class = "currentPage" 
				href="index.php?page=contactInfo">Contact Information</a>
			<?php else: ?>
				<a href="index.php?page=contactInfo">Contact Information</a>
				<?php endif ?>
		</li>
	</ul>
</div>