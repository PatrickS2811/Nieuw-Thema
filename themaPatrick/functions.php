<?php 

function themaPatrick_bronnen() {
	wp_enqueue_script('style', get_theme_file_uri('submenu.js'), NULL, '1.0', true);
	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'themaPatrick_bronnen');
?>

<?php


// registreer menu's van het thema
register_nav_menus(array(
'hoofd' => __('Hoofd menu'),
'footer' => __('Menu in footer'),
));

?>