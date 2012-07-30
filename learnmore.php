<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav  learnList">
                <ul class ="nav nav-list learnList">
                    <li>
                        <a href="index.php?page=learnmore&tab=1" > Claims and Definitions </a>
                    </li>
                    <li>
                        <a href="index.php?page=learnmore&tab=2" > Common Cattle Breeds </a>
                    </li>
                    <li>
                        <a href="index.php?page=learnmore&tab=3" > Descriptions of Types of Livestock Feeds </a>
                    </li>
                    <li>
                        <a href="index.php?page=learnmore&tab=4" > Understanding Weights and Pricing </a>
                    </li>
                    <li>
                        <a href="index.php?page=learnmore&tab=5" > USDA and NYS Regulations</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="span9">
            <?php
            $tab = $_GET['tab'];
            if ($tab == 1) :
                ?>
                <div class="learnHeader">
                    <h2>CLAIMS AND DEFINITIONS</h2>
                    <h3 class="subtitle">Commonly Used Claims and Definitions for Meats</h3>
                </div>
                <div>
                    <p><div class="firstWord">Natural</div>The USDA's definition is only "minimally processed". The term is commonly used on products raised without antibiotics in the feed or hormone implants.</p>

                    <p><div class="firstWord">Organic</div>Certified organic meats require certified organic feed, certain humane treatment of the animals, and the processing must be done at a certified facility. Antibiotics and artificial growth hormones are not allowed.</p>

                    <p><div class="firstWord">Grass-fed/pasture raised</div>  Use of these terms varies widely.  The USDA defines "grass-fed" as: "grass and/or forage shall be the feed source consumed for the lifetime of the ruminant animal, with the exception of milk consumed prior to weaning. The diet shall be derived solely from forage and animals cannot be fed grain or grain by-products and must have continuous access to pasture during the growing season."  Despite this definition, use of the term may include animals which are fed some grain.  In an effort to differentiate from grain-fed products, the term is sometimes prefaced by 100% or "strictly".</p>

                    <p><div class="firstWord">Humane/Free range</div>   The definition also varies widely.  Some programs offer their own definition as "certified".  Generally, these terms imply that the animals have access to the outdoors and are less confined than conventional commercial production.</p>

                    <p><div class="firstWord">Certified</div>   Subject to specific protocols and third party inspections.  For example, "certified organic" or "certified humane".</p>

                    <p><div class="firstWord">Dry-aged</div>  Beef which is stored in a temperature and humidity controlled environment for 20 or more days. The ageing enhances the flavor and tenderness of the beef.</p>
                </div>
<?php elseif ($tab == 2) : ?>
                <div class="learnHeader">
                    <h2 class="title">COMMON CATTLE BREEDS</h2>
                </div>
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
                </div>
<?php elseif ($tab == 3) : ?>
                <div class="learnHeader">
                    <h2 class="title">DESCRIPTIONS OF TYPES OF LIVESTOCK FEEDS</h2>
                </div>
                <div class="marginize">

                    <p><div class="firstWord">Hay</div>Hay which is stored "wet" and fermented. Usually seen as long white tubes under white plastic. Ensiled hay.</p>

                    <p><div class="firstWord">Haylage</div>Dried grasses and legumes stored for feed.</p>

                    <p><div class="firstWord">Bailage</div>Large wrapped bales of hay stored "wet" and fermented. Ensiled hay.</p>

                    <p><div class="firstWord">Silage, corn silage</div>The entire corn plant chopped and stored "wet", fermented. Ensiled corn plants.</p>

                    <p><div class="firstWord">Shelled corn</div>Dry whole kernel corn.</p>

                    <p><div class="firstWord">Cracked corn</div>Dry, whole kernel corn which is ground into smaller pieces.</p>
                </div>
<?php elseif ($tab == 4) : ?>
                <div class="learnHeader">
                    <h2 class="title">UNDERSTANDING WEIGHTS AND PRODUCTS</h2>
                    <h3 class="subtitle">Learn about Local Meats Weights and Pricing</h3>
                </div>
                <div class="marginize">

                    Farmers may discuss three different weights with consumers: Live weight, hot carcass weight (HCW) (also called hanging weight), and Final weight (also called retail weight and take home weight).

                    <p><div class="firstWord">Live Weight</div>The weight of the entire, living animal.</p>

                    <p><div class="firstWord">HCW</div>The weight taken immediately after slaughter, but before final trim.  HCW �is approximately 60% of live weight</p>

                    <p><div class="firstWord">Final Weight</div>The "take home" weight after trim and cutting into useable portions.  Final weight  � 65% of HCW.</p>
                </div>
<?php elseif ($tab == 5) : ?>
                <div class="learnHeader">
                    <h2 class="title">USDA AND NYS REGULATIONS</h2>
                    <h3 class="subtitle">USDA and NYS Regulations for meat sales</h3>
                </div>
                <div class="marginize">

                    <p><div class="firstWord">USDA Inspected Facility </div>Processed livestock (beef, pork, sheep, goat) meat can be sold to the public.</p>

                    <p><div class="firstWord">NYS 5A</div> Can kill & process livestock (not to be sold). So, if you buy a live animal from a farmer, it can processed for your consumption.  Also can process farm-raised game (bison, venison) and poultry for legal resale.</p>

                    <p><div class="firstWord">NYS 20C</div>Can process (butcher) & sell livestock which were killed at USDA inspected facility.  Sales are essentially limited to retail (farm to consumer), not wholesale.</p>

                    <p><div class="firstWord">NYS 20C</div>Can slaughter and sell poultry, fowl, and rabbits they raise (Limited to 1,000 birds/year). (Whole bird only, no cuts).</p>
                </div>
            <?php else : ?>
                <p>You can learn more about Tompkins Farms from the links to the left </p>
<?php endif; ?>
        </div>
    </div>
</div>