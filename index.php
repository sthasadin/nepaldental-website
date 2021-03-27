<?php
ob_start();
//include header.php file
include('header.php');

?>

<?php
//include banner-area
//include _banner-area.php file
include('Template/_banner-area.php');
//closing include _banner-area.php file

//include new-arrival;
//include _new-arrival.php file
include('Template/_new-arrival.php');
//closing include _new-arrival.php file

//include special-offer;
//include _special-offer.php file
include('Template/_special-offer.php');
//closing include _special-offer.php file

//include banner-adds;
//include _banner__adds.php file
include('Template/_banner__adds.php');
// closing include _banner__adds.php file

//include new-proucts
//include _new-products.php file
include('Template/_new-products.php');
// closing include _new-products.php file

//include blogs
//include _blogs.php file
include('Template/_blogs.php');
//closing include _blogs.php file
?>

    <?php
//include footer.php file
include('footer.php');

?>