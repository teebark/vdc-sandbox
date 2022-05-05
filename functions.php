<?php
/* Adds page name to classes for page */
add_filter('body_class','page_class');
function page_class($classes) {
   global $wp_query;
   $page = '';
   $page = $wp_query->query_vars['pagename'];
   // add 'pagename' to the $classes array
   $classes[] = $page;
   // return the $classes array
   return $classes;
}
/* Add course tab */
add_filter( 'wpsl_meta_box_fields', 'custom_meta_box_fields' );
function custom_meta_box_fields( $meta_fields ) {
	
	$meta_fields[__( 'Course 1', 'wpsl' )] = array(
        'course_title_1' => array(
            'label' => __( 'Course Title', 'wpsl' )
		),
		'course_contact_1' => array(
            'label' => __( 'Course Contact', 'wpsl' )
        ),
		'course_email_1' => array(
            'label' => __( 'Course Email', 'wpsl' )
		),
		'course_notes_1' => array(
            'label' => __( 'Notes', 'wpsl' )
		)
    );
	$meta_fields[__( 'Course 2', 'wpsl' )] = array(
        'course_title_2' => array(
            'label' => __( 'Course Title', 'wpsl' )
		),
		'course_contact_2' => array(
            'label' => __( 'Course Contact', 'wpsl' )
        ),
		'course_email_2' => array(
            'label' => __( 'Course Email', 'wpsl' )
		),
		'course_notes_2' => array(
            'label' => __( 'Notes', 'wpsl' )
		)
    );
	$meta_fields[__( 'Course 3', 'wpsl' )] = array(
        'course_title_3' => array(
            'label' => __( 'Course Title', 'wpsl' )
		),
		'course_contact_3' => array(
            'label' => __( 'Course Contact', 'wpsl' )
        ),
		'course_email_3' => array(
            'label' => __( 'Course Email', 'wpsl' )
		),
		'course_notes_3' => array(
            'label' => __( 'Notes', 'wpsl' )
		)
    );
	$meta_fields[__( 'Course 4', 'wpsl' )] = array(
        'course_title_4' => array(
            'label' => __( 'Course Title', 'wpsl' )
		),
		'course_contact_4' => array(
            'label' => __( 'Course Contact', 'wpsl' )
        ),
		'course_email_4' => array(
            'label' => __( 'Course Email', 'wpsl' )
		),
		'course_notes_4' => array(
            'label' => __( 'Notes', 'wpsl' )
		)
    );
	$meta_fields[__( 'Course 5', 'wpsl' )] = array(
        'course_title_5' => array(
            'label' => __( 'Course Title', 'wpsl' )
		),
		'course_contact_5' => array(
            'label' => __( 'Course Contact', 'wpsl' )
        ),
		'course_email_5' => array(
            'label' => __( 'Course Email', 'wpsl' )
		),
		'course_notes_5' => array(
            'label' => __( 'Notes', 'wpsl' )
		)
    );

    return $meta_fields;
}
/* Add field to JSON response */
add_filter( 'wpsl_frontend_meta_fields', 'custom_frontend_meta_fields' );

function custom_frontend_meta_fields( $store_fields ) {

    $store_fields['wpsl_course_title_1'] = array( 
        'name' => 'course_title_1',
        'type' => 'text'
		);
	$store_fields['wpsl_course_contact_1'] = array( 
        'name' => 'course_contact_1',
        'type' => 'text'
		);
	$store_fields['wpsl_course_email_1'] = array( 
        'name' => 'course_email_1',
        'type' => 'text'
		);
	$store_fields['wpsl_course_notes_1'] = array( 
        'name' => 'course_notes_1',
        'type' => 'text'
		);

    $store_fields['wpsl_course_title_2'] = array( 
        'name' => 'course_title_2',
        'type' => 'text'
		);
	$store_fields['wpsl_course_contact_2'] = array( 
        'name' => 'course_contact_2',
        'type' => 'text'
		);
	$store_fields['wpsl_course_email_2'] = array( 
        'name' => 'course_email_2',
        'type' => 'text'
		);
	$store_fields['wpsl_course_notes_2'] = array( 
        'name' => 'course_notes_2',
        'type' => 'text'
		);
		
    $store_fields['wpsl_course_title_3'] = array( 
        'name' => 'course_title_3',
        'type' => 'text'
		);
	$store_fields['wpsl_course_contact_3'] = array( 
        'name' => 'course_contact_3',
        'type' => 'text'
		);
	$store_fields['wpsl_course_email_3'] = array( 
        'name' => 'course_email_3',
        'type' => 'text'
		);
	$store_fields['wpsl_course_notes_3'] = array( 
        'name' => 'course_notes_3',
        'type' => 'text'
		);
		
    $store_fields['wpsl_course_title_4'] = array( 
        'name' => 'course_title_4',
        'type' => 'text'
		);
	$store_fields['wpsl_course_contact_4'] = array( 
        'name' => 'course_contact_4',
        'type' => 'text'
		);
	$store_fields['wpsl_course_email_4'] = array( 
        'name' => 'course_email_4',
        'type' => 'text'
		);
	$store_fields['wpsl_course_notes_4'] = array( 
        'name' => 'course_notes_4',
        'type' => 'text'
		);

    $store_fields['wpsl_course_title_5'] = array( 
        'name' => 'course_title_5',
        'type' => 'text'
		);
	$store_fields['wpsl_course_contact_5'] = array( 
        'name' => 'course_contact_5',
        'type' => 'text'
		);
	$store_fields['wpsl_course_email_5'] = array( 
        'name' => 'course_email_5',
        'type' => 'text'
		);
	$store_fields['wpsl_course_notes_5'] = array( 
        'name' => 'course_notes_5',
        'type' => 'text'
		);
    return $store_fields;
}
/* Show the output in search results */
add_filter( 'wpsl_listing_template', 'custom_listing_template' );

function custom_listing_template() {

    global $wpsl_settings;

    $listing_template = '<li data-store-id="<%= id %>">' . "\r\n";
    $listing_template .= "\t\t" . '<div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><%= thumb %>' . "\r\n";
    $listing_template .= "\t\t\t\t" . wpsl_store_header_template( 'listing' ) . "\r\n";
    $listing_template .= "\t\t\t\t" . '<span class="wpsl-street"><%= address %></span>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<% if ( address2 ) { %>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<span class="wpsl-street"><%= address2 %></span>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<% } %>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<span>' . wpsl_address_format_placeholders() . '</span>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<span class="wpsl-country"><%= country %></span>' . "\r\n";
    $listing_template .= "\t\t\t" . '</p>' . "\r\n";
    
    // Check if the variable contains data before including it.
	$listing_template .= "\t\t\t" . '<% if ( course_title_1) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Title: <%= course_title_1 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_contact_1) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Contact: <%= course_contact_1 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_email_1) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Email: <a href="mailto:<%= course_email_1 %>"><%= course_email_1 %>'  . '</a></p>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_notes_1 ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Notes: <%= course_notes_1 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
	
	$listing_template .= "\t\t\t" . '<p>' . "\r\n";
	
	$listing_template .= "\t\t\t" . '<% if ( course_title_2) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Title: <%= course_title_2 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_contact_2) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Contact: <%= course_contact_2 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_email_2) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Email: <a href="mailto:<%= course_email_2 %>"><%= course_email_2 %>'  . '</a></p>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_notes_2 ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Notes: <%= course_notes_2 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
	
	$listing_template .= "\t\t\t" . '<p>' . "\r\n";

	$listing_template .= "\t\t\t" . '<% if ( course_title_3) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Title: <%= course_title_3 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_contact_3) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Contact: <%= course_contact_3 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_email_3) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Email: <a href="mailto:<%= course_email_3 %>"><%= course_email_3 %>'  . '</a></p>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_notes_3 ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Notes: <%= course_notes_3 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
	
	$listing_template .= "\t\t\t" . '<p>' . "\r\n";
	
	$listing_template .= "\t\t\t" . '<% if ( course_title_4) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Title: <%= course_title_4 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_contact_4) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Contact: <%= course_contact_4 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_email_4) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Email: <a href="mailto:<%= course_email_4 %>"><%= course_email_4 %>'  . '</a></p>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_notes_4 ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Notes: <%= course_notes_4 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
	
	$listing_template .= "\t\t\t" . '<p>' . "\r\n";
	
	$listing_template .= "\t\t\t" . '<% if ( course_title_5) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Title: <%= course_title_5 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_contact_5) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Contact: <%= course_contact_5 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_email_5) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Email: <a href="mailto:<%= course_email_5 %>"><%= course_email_5 %>'  . '</a></p>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n"; 
	$listing_template .= "\t\t\t" . '<% if ( course_notes_5 ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<div>Course Notes: <%= course_notes_5 %></div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
	
	$listing_template .= "\t\t\t" . '<p>' . "\r\n";

    $listing_template .= "\t\t" . '</div>' . "\r\n";
	
    // Check if we need to show the distance.
    if ( !$wpsl_settings['hide_distance'] ) {
        $listing_template .= "\t\t" . '<%= distance %> ' . esc_html( $wpsl_settings['distance_unit'] ) . '' . "\r\n";
    }
 
    $listing_template .= "\t\t" . '<%= createDirectionUrl() %>' . "\r\n"; 
    $listing_template .= "\t" . '</li>' . "\r\n"; 

    return $listing_template;
}
?>