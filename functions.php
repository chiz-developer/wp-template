<?php 

	function wpbootstrap_scripts_with_jquery()
	{
		// Register the script like this for a theme:
		wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
		// For either a plugin or a theme, you can then enqueue the script:
		wp_enqueue_script( 'custom-script' );
	}
	add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

	/*
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
	*/

	/* Отключаем админ панель для всех пользователей. */
	  show_admin_bar(false);

	  
	// подключение бутстрап меню класса
	require_once('wp_bootstrap_navwalker.php');

	// новое меню
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'THEMENAME' ),
	) );
	
	
	//Тип поста
	function my_custom_post_product() {
		$labels = array(
			'name'               => _x( 'Книги', 'post type general name' ),
			'singular_name'      => _x( 'Книга', 'post type singular name' ),
			'add_new'            => _x( 'Добавить новую', 'book' ),
			'add_new_item'       => __( 'Добавить новую книгу' ),
			'edit_item'          => __( 'Редактировать книгу' ),
			'new_item'           => __( 'Новая книга' ),
			'all_items'          => __( 'Все книги' ),
			'view_item'          => __( 'Просмотр книг' ),
			'search_items'       => __( 'Поиск книг' ),
			'not_found'          => __( 'Книга не найдена' ),
			'not_found_in_trash' => __( 'Книга не найдена в Корзине' ), 
			'parent_item_colon'  => '',
			'menu_name'          => 'Книги'
		);
		$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our products and product specific data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		);
		register_post_type( 'product', $args );    
	}
	add_action( 'init', 'my_custom_post_product' );

	
	
	
?>
