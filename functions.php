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
	/* Add featured store checkbox */
    $meta_fields[__( 'Location', 'wpsl' )] = array(
        'featured_dealer' => array(
            'label' => __( 'Featured', 'wpsl' ),
            'type'  => 'checkbox'
        ),
        'address' => array(
            'label'    => __( 'Address', 'wpsl' ),
            'required' => true
        ),
        'address2' => array(
            'label' => __( 'Address 2', 'wpsl' )
        ),
        'city' => array(
            'label'    => __( 'City', 'wpsl' ),
            'required' => true
        ),
        'state' => array(
            'label' => __( 'State', 'wpsl' )
        ),
        'zip' => array(
            'label' => __( 'Zip Code', 'wpsl' )
        ),
        'country' => array(
            'label'    => __( 'Country', 'wpsl' ),
            'required' => true
        ),
        'country_iso' => array(
            'type' => 'hidden'
        ),
        'lat' => array(
            'label' => __( 'Latitude', 'wpsl' )
        ),
        'lng' => array(
            'label' => __( 'Longitude', 'wpsl' )
        )
    );

    return $meta_fields;
}
/* Add field to JSON response */
add_filter( 'wpsl_frontend_meta_fields', 'custom_frontend_meta_fields' );

function custom_frontend_meta_fields( $store_fields ) {
	/* Featued store */
	$store_fields['wpsl_featured_dealer'] = array(
        'name' => 'featured_dealer'
		);
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
	
	// Show the phone, fax or email data if they exist.
	/*
    if ( $wpsl_settings['show_contact_details'] ) {
        $listing_template .= "\t\t\t" . '<p class="wpsl-contact-details">' . "\r\n";
        $listing_template .= "\t\t\t" . '<% if ( phone ) { %>' . "\r\n";
        $listing_template .= "\t\t\t" . '<span><strong>' . esc_html( $wpsl->i18n->get_translation( 'phone_label', __( 'Phone', 'wpsl' ) ) ) . '</strong>: <%= formatPhoneNumber( phone ) %></span>' . "\r\n";
        $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
        $listing_template .= "\t\t\t" . '<% if ( fax ) { %>' . "\r\n";
        $listing_template .= "\t\t\t" . '<span><strong>' . esc_html( $wpsl->i18n->get_translation( 'fax_label', __( 'Fax', 'wpsl' ) ) ) . '</strong>: <%= fax %></span>' . "\r\n";
        $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
        $listing_template .= "\t\t\t" . '<% if ( email ) { %>' . "\r\n";
        $listing_template .= "\t\t\t" . '<span><strong>' . esc_html( $wpsl->i18n->get_translation( 'email_label', __( 'Email', 'wpsl' ) ) ) . '</strong>: <%= email %></span>' . "\r\n";
        $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
        $listing_template .= "\t\t\t" . '</p>' . "\r\n";
    }
	*/
	
    // Course data
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

    $listing_template .= "\t\t\t" . wpsl_more_info_template() . "\r\n"; // Check if we need to show the 'More Info' link and info
    $listing_template .= "\t\t" . '</div>' . "\r\n";
    $listing_template .= "\t\t" . '<div class="wpsl-direction-wrap">' . "\r\n";

    if ( !$wpsl_settings['hide_distance'] ) {
        $listing_template .= "\t\t\t" . '<%= distance %> ' . esc_html( $wpsl_settings['distance_unit'] ) . '' . "\r\n";
    }

    $listing_template .= "\t\t\t" . '<%= createDirectionUrl() %>' . "\r\n"; 
    $listing_template .= "\t\t" . '</div>' . "\r\n";
    $listing_template .= "\t" . '</li>';

    return $listing_template;
}
/* Add favorite store to results */
add_filter( 'wpsl_store_data', 'custom_store_data_sort' );

function custom_store_data_sort( $stores ) {

    // Create the array that holds the featured locations
    $featured_list = array();

    // Loop over the collected location list
    foreach ( $stores as $k => $store ) {

        // Check if the location is a featured one
        if ( isset( $store['featured_dealer'] ) && $store['featured_dealer'] ) {

            // Move the featured locations to a new array
            $featured_list[] = $store;

            // Remove the featured location from the existing $stores array
            unset( $stores[$k] );
        }
    }

    /**
     * Merge the list of premium locations with the existing list.
     * This will make sure the premium location show up before the normal locations.
     */
    $results = array_merge( $featured_list, $stores );

    return $results;
}
?>