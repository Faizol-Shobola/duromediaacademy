<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package duromediaacademy
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function dmacademy_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'dmacademy_pingback_header' );


/*
* Set post views count using post meta
*/
function setPostViews($postID) {
	$countKey = 'post_views_count';
	$count = get_post_meta($postID, $countKey, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $countKey);
		add_post_meta($postID, $countKey, '0');
	}else{
		$count++;
		update_post_meta($postID, $countKey, $count);
	}
}



//Register Sidebars 
function my_sidebars() {

	register_sidebar(
		array(
		'name' => 'Blog sidebar',
		'id' => 'blog-sidebar',
		)
   );
  
   register_sidebar(
		array(
		'name' => 'Footer 1',
		'id' => 'footer-1',
		)
	);
  
	register_sidebar(
	  array(
		'name' => 'Footer 2',
		'id' => 'footer-2',
	  )
	);

	register_sidebar(
		array(
		  'name' => 'Footer 3',
		  'id' => 'footer-3',
		)
	  );
  
  }
  add_action('widgets_init','my_sidebars');

  
   
  
  
  //custom post (courses)
  function courses_post_type() {
   $args = array(
	  'labels'      => array(
		'name'          => 'Courses',
		'singular_name' => 'Course',
	  ),
	  'public'      => true,
	  'hierarchical' => true,
	  'has_archive' => true,
	  'rewrite'     => array( 'slug' => 'courses' ),
	  'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
	  
	);
	register_post_type('courses', $args );
  }
  add_action('init', 'courses_post_type');
  
  //course taxonomies(courses)
  function course_taxonomy() {
	$labels = array(
		'name'              => 'Courses Category', 
		'singular_name'     => 'category',
		'search_items'      => __( 'Search courses' ),
		'all_items'         => __( 'All Courses' ),
		'parent_item'       => __( 'Parent course' ),
		'parent_item_colon' => __( 'Parent course:' ),
		'edit_item'         => __( 'Edit course' ),
		'update_item'       => __( 'Update course' ),
		'add_new_item'      => __( 'Add New course' ),
		'new_item_name'     => __( 'New course Name' ),
		'menu_name'         => __( 'Course' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'course' ],
	);
	register_taxonomy( 'course', [ 'courses' ], $args );
  }
  add_action( 'init', 'course_taxonomy' );
  
  
  //custom post (projects)
  function projects_post_type() {
	$args = array(
		'labels'      => array(
		  'name'          => 'Projects',
		  'singular_name' => 'Project',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'projects' ),
		'supports' =>  array('title', 'editor', 'tag', 'thumbnail', 'custom-fields'),
		
	  );
	  register_post_type('projects', $args );
	}
	add_action('init', 'projects_post_type');
  
  //project taxonomies(projects)
  function project_taxonomy() {
	$labels = array(
		'name'              => 'Projects Category', 
		'singular_name'     => 'category',
		'search_items'      => __( 'Search projects' ),
		'all_items'         => __( 'All Projects' ),
		'parent_item'       => __( 'Parent project' ),
		'parent_item_colon' => __( 'Parent project:' ),
		'edit_item'         => __( 'Edit project' ),
		'update_item'       => __( 'Update project' ),
		'add_new_item'      => __( 'Add New project' ),
		'new_item_name'     => __( 'New project Name' ),
		'menu_name'         => __( 'Project' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'project' ],
	);
	register_taxonomy( 'project', [ 'projects' ], $args );
  }
  add_action( 'init', 'project_taxonomy' );
  
  //project gallery taxonomy
  function jss_create_gallery_taxonomies(){
  register_taxonomy(
	'phototype', 'project', 
	$args = array(
	  'hierarchical'=> true, 
	  'label' => 'Photo Types',
	  'singular_label' => 'Photo Type',
	  'rewrite' => true
	  )
	);	
	// register_taxonomy( 'project', [ 'projects' ], $args );
  
  }
  add_action( 'init', 'jss_create_gallery_taxonomies', 0);
  
  // custom post(students)
  function students_post_type() {
	$args = array(
	   'labels'      => array(
		 'name'          => 'Students',
		 'singular_name' => 'Student',
	   ),
	   'public'      => true,
	   'hierarchical' => true,
	   'has_archive' => true,
	   'rewrite'     => array( 'slug' => 'students' ),
	   'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
	   
	 );
	 register_post_type('students', $args );
   }
   add_action('init', 'students_post_type');
  
   //student taxonomies(students)
  // function student_taxonomy() {
  //   $labels = array(
  //       'name'              => 'Students Category', 
  //       'singular_name'     => 'category',
  //       'search_items'      => __( 'Search students' ),
  //       'all_items'         => __( 'All students' ),
  //       'parent_item'       => __( 'Parent student' ),
  //       'parent_item_colon' => __( 'Parent student:' ),
  //       'edit_item'         => __( 'Edit student' ),
  //       'update_item'       => __( 'Update student' ),
  //       'add_new_item'      => __( 'Add New student' ),
  //       'new_item_name'     => __( 'New student Name' ),
  //       'menu_name'         => __( 'student' ),
  //   );
  //   $args   = array(
  //       'hierarchical'      => true, // make it hierarchical (like categories)
  //       'labels'            => $labels,
  //       'show_ui'           => true,
  //       'show_admin_column' => true,
  //       'query_var'         => true,
  //       'rewrite'           => [ 'slug' => 'student' ],
  //   );
  //   register_taxonomy( 'student', [ 'students' ], $args );
  // }
  // add_action( 'init', 'student_taxonomy' );
  
  
  //custom post (books)
  function books_post_type() {
	$args = array(
	   'labels'      => array(
		 'name'          => 'Books',
		 'singular_name' => 'Book',
	   ),
	   'public'      => true,
	   'hierarchical' => true,
	   'has_archive' => true,
	   'rewrite'     => array( 'slug' => 'books' ),
	   'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
	   
	 );
	 register_post_type('books', $args );
   }
   add_action('init', 'books_post_type');
   
   //book taxonomies(books)
   function book_taxonomy() {
	 $labels = array(
		 'name'              => 'Books Category', 
		 'singular_name'     => 'category',
		 'search_items'      => __( 'Search books' ),
		 'all_items'         => __( 'All Books' ),
		 'parent_item'       => __( 'Parent book' ),
		 'parent_item_colon' => __( 'Parent book:' ),
		 'edit_item'         => __( 'Edit book' ),
		 'update_item'       => __( 'Update book' ),
		 'add_new_item'      => __( 'Add New book' ),
		 'new_item_name'     => __( 'New book Name' ),
		 'menu_name'         => __( 'book' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'book' ],
	 );
	 register_taxonomy( 'book', [ 'books' ], $args );
   }
   add_action( 'init', 'book_taxonomy' );
  
   //custom post (tools)
  function tools_post_type() {
	$args = array(
	   'labels'      => array(
		 'name'          => 'Tools',
		 'singular_name' => 'Book',
	   ),
	   'public'      => true,
	   'hierarchical' => true,
	   'has_archive' => true,
	   'rewrite'     => array( 'slug' => 'tools' ),
	   'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
	   
	 );
	 register_post_type('tools', $args );
   }
   add_action('init', 'tools_post_type');
  
  //custom post (instructors)
  function instructors_post_type() {
	$args = array(
	   'labels'      => array(
		 'name'          => 'Instructors',
		 'singular_name' => 'Instructor',
	   ),
	   'public'      => true,
	   'hierarchical' => true,
	   'has_archive' => true,
	   'rewrite'     => array( 'slug' => 'instructors' ),
	   'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
	   
	 );
	 register_post_type('instructors', $args );
   }
   add_action('init', 'instructors_post_type');
  
  
  
  ?>