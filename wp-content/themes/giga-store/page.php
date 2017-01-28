<?php
get_header();

if ( class_exists( 'WooCommerce' ) && get_theme_mod( 'breadcrumbs-check', 1 ) != 0 ) {
	woocommerce_breadcrumb();
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>

<p>My first paragraph.</p>

</body>
</html>


<!-- start content container -->
<?php get_template_part( 'content', 'page' ); 
echo "Hello world test1234!<br>";

?>
<!-- end content container -->

<?php

get_template_part( 'template-part', 'footernav' );

get_footer();




