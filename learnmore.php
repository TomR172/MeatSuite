<div class="subMenu">
    <ul>
		<li>
			<a href="index.php?page=learnmore&tab=1" > Claims and Definitions </a>
		</li>
		<li>
			<a href="index.php?page=learnmore&tab=2" > Common Cattle Breeds </a>
		</li>
		<li>
			<a href="index.php?page=learnmore&tab=3" > Third Site </a>
		</li>
    </ul>	
</div>


<?php 
	$tab = $_GET['tab'];
	if ($tab==1){
		echo '<h3 class="title">CLAIMS AND DEFINITIONS<h3>

<h4 class="subtitle">Commonly Used Claims and Definitions for Meats</h4>
<div class="marginize">
<p><div class="firstWord">Natural</div>The USDA\'s definition is only "minimally processed". The term is commonly used on products raised without antibiotics in the feed or hormone implants.</p>

<p><div class="firstWord">Organic</div>Certified organic meats require certified organic feed, certain humane treatment of the animals, and the processing must be done at a certified facility. Antibiotics and artificial growth hormones are not allowed.</p>

<p><div class="firstWord">Grass-fed/pasture raised</div>  Use of these terms varies widely.  The USDA defines "grass-fed" as: "grass and/or forage shall be the feed source consumed for the lifetime of the ruminant animal, with the exception of milk consumed prior to weaning. The diet shall be derived solely from forage and animals cannot be fed grain or grain by-products and must have continuous access to pasture during the growing season."  Despite this definition, use of the term may include animals which are fed some grain.  In an effort to differentiate from grain-fed products, the term is sometimes prefaced by 100% or "strictly".</p>

<p><div class="firstWord">Humane/Free range</div>   The definition also varies widely.  Some programs offer their own definition as "certified".  Generally, these terms imply that the animals have access to the outdoors and are less confined than conventional commercial production.</p>

<p><div class="firstWord">Certified</div>   Subject to specific protocols and third party inspections.  For example, "certified organic" or "certified humane".</p>

<p><div class="firstWord">Dry-aged</div>  Beef which is stored in a temperature and humidity controlled environment for 20 or more days. The ageing enhances the flavor and tenderness of the beef.</p>
</div>';
}
	else if ($tab==2){
		echo '<h3 class="title">COMMON CATTLE BREEDS</h3>
<div class="marginize">
<p>Consumers may wish to be aware of the various breeds of livestock that are raised by local producers.  Some of the more widely available breeds are listed below.  For information on these breeds, visit to the Oklahoma State University Department of Animal Science which maintains comprehensive descriptions of livestock breeds.</p>

<div class="firstWord">Beef</div>

<ul>
<li>Angus (Red & Black)</li>
<li>Hereford</li>
<li>Limousine</li>
<li>Charolais</li>
<li>Simmental</li>
<li>Highland</li>
<li>Galloway (Belted & Solid)</li>
<li>Shorthorn</li>
</ul>

<div class="firstWord">Dairy</div>

<ul>
<li>Holstein</li>
<li>Jersey</li>
<li>Ayrshire</li>
<li>Brown Swiss</li>
<li>Guernsey</li>
<li>Milking Shorthorn</li>
</ul>
</div>';
}
	else if ($tab==3){
		echo '<p>TAB THREE </p>';
}
	else {
		echo '<p>You can learn more about Tompkins Farms from the links to the left </p>';
}
?>
<!--<ul style="list-style:none;">
	<li>
		<a href ="http://ccetompkins.org/agriculture/buy-local/local-meats" class ="sites">Cooperative Extension Tompkins County</a>
	</li>
</ul>-->