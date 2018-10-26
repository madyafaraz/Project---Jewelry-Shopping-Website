<?php
require_once('../includes/config.php');
include('../includes/adminHeader.php'); ?>


<main>
   <div class="fixedSpace"></div>


	   <div class="container">

	    <h3 class="text-center">Welcome Admin!</h3>
    <div class="admingroup">

			<p class="pl-4">JSON & XML Data Links</p>
        <ul >
            <li><a href="<?php ADMIN_URL;?>productapi.php?format=json&action=products">Products List (JSON)</a></li>
			<li ><a href="<?php ADMIN_URL;?>productapi.php?format=xml&action=products">Products List (XML)</a></li>
        </ul>

		<hr>

		<p>Product List with Matching category Name</p>
         <ul>
		 <li><a href="<?php ADMIN_URL;?>productapi.php?format=json&action=productsbycategory&category=rings">Products with category RINGS (JSON)</a>
        </li>
		<li><a href="<?php ADMIN_URL;?>productapi.php?format=xml&action=productsbycategory&category=rings">Products with category RINGS (XML)</a>
        </li>
		<li><a href="<?php ADMIN_URL;?>productapi.php?format=json&action=productsbycategory&category=bracelets">Products with category BRACELETS (JSON)</a>
        </li>
		<li><a href="<?php ADMIN_URL;?>productapi.php?format=xml&action=productsbycategory&category=bracelets">Products with category BRACELETS (XML)</a>
        </li>
		<li><a href="<?php ADMIN_URL;?>productapi.php?format=json&action=productsbycategory&category=earrings">Products with category EARRINGS (JSON)</a>
        </li>
		<li><a href="<?php ADMIN_URL;?>productapi.php?format=xml&action=productsbycategory&category=earrings">Products with category EARRINGS (XML)</a>
        </li>
		 </ul>
		 <hr>
		 <p>Products within Price Range</p>
		 <ul>
		 <li><a href="<?php ADMIN_URL;?>productapi.php?format=json&action=productsbyprice&from=0&to=100">Products between 0 to 100 (JSON)</a></li>

		 </ul>
    </div>


	   </div>


</main>

<?php include('../includes/adminFooter.php'); ?>