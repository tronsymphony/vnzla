<?php

/**
 * Add custom post types.
 */
function custom_register_post_type_init()
{
    register_post_type( 'promociones', [
        'labels' => [
            'name'                      => 'Promotions',
            'singular_name'             => 'Promotion',
            'menu_name'                 => 'Promotions',
            'name_admin_bar'            => 'Promotion',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Promotion',
            'new_item'                  => 'New Promotion',
            'edit_item'                 => 'Edit Promotion',
            'view_item'                 => 'View Promotion',
            'view_items'                => 'View Promotions',
            'all_items'                 => 'All Promotions',
            'search_items'              => 'Search Promotions',
            'parent_item_colon'         => 'Parent Promotion:',
            'not_found'                 => 'No promotions found.',
            'not_found_in_trash'        => 'No promotions found in Trash.',
            'archives'                  => 'Promotion Archives',
            'attributes'                => 'Promotion Attributes',
            'insert_into_item'          => 'Insert into promotion',
            'uploaded_to_this_item'     => 'Uploaded to this promotion',
            'filter_items_list'         => 'Filter promotions list',
            'items_list_navigation'     => 'Promotions list navigation',
            'items_list'                => 'Promotions list',
            'item_published'            => 'Promotion published.',
            'item_published_privately'  => 'Promotion published privately.',
            'item_reverted_to_draft'    => 'Promotion reverted to draft.',
            'item_scheduled'            => 'Promotion scheduled.',
            'item_updated'               => 'Promotion updated.',
            'item_link'                  => 'Promotion Link',
            'item_link_description'     => 'A link to a promotion.',
        ],
        'description'        => 'Promotion custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => false, 'slug' => 'promociones'],
        'has_archive'        => 'archive-promociones',
        'capability_type'    => 'page',
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-tag',
        'menu_position'      => 3,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true
    ]);
    
    register_post_type( 'locations', [
        'labels' => [
            'name'                      => 'Locations',
            'singular_name'             => 'Location',
            'menu_name'                 => 'Locations',
            'name_admin_bar'            => 'Location',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Location',
            'new_item'                  => 'New Location',
            'edit_item'                 => 'Edit Location',
            'view_item'                 => 'View Location',
            'view_items'                => 'View Locations',
            'all_items'                 => 'All Locations',
            'search_items'              => 'Search Locations',
            'parent_item_colon'         => 'Parent Location:',
            'not_found'                 => 'No locations found.',
            'not_found_in_trash'        => 'No locations found in Trash.',
            'archives'                  => 'Location Archives',
            'attributes'                => 'Location Attributes',
            'insert_into_item'          => 'Insert into location',
            'uploaded_to_this_item'     => 'Uploaded to this location',
            'filter_items_list'         => 'Filter locations list',
            'items_list_navigation'     => 'Locations list navigation',
            'items_list'                => 'Locations list',
            'item_published'            => 'Location published.',
            'item_published_privately'  => 'Location published privately.',
            'item_reverted_to_draft'    => 'Location reverted to draft.',
            'item_scheduled'            => 'Location scheduled.',
            'item_updated'               => 'Location updated.',
            'item_link'                  => 'Location Link',
            'item_link_description'     => 'A link to a location.',
        ],
        'description'        => 'Location custom post type.',
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => true, 'slug' => 'locations'],
        'has_archive'        => 'archive-locations',
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-location-alt',
        'menu_position'      => 50,
        'supports'           => ['title'],
        'show_in_rest'       => true
    ]);
    
    register_post_type( 'cards', [
        'labels' => [
            'name'                      => 'Cards',
            'singular_name'             => 'Card',
            'menu_name'                 => 'Cards',
            'name_admin_bar'            => 'Card',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Card',
            'new_item'                  => 'New Card',
            'edit_item'                 => 'Edit Card',
            'view_item'                 => 'View Card',
            'view_items'                => 'View Cards',
            'all_items'                 => 'All Cards',
            'search_items'              => 'Search Cards',
            'parent_item_colon'         => 'Parent Card:',
            'not_found'                 => 'No cards found.',
            'not_found_in_trash'        => 'No cards found in Trash.',
            'archives'                  => 'Card Archives',
            'attributes'                => 'Card Attributes',
            'insert_into_item'          => 'Insert into card',
            'uploaded_to_this_item'     => 'Uploaded to this card',
            'filter_items_list'         => 'Filter cards list',
            'items_list_navigation'     => 'Cards list navigation',
            'items_list'                => 'Cards list',
            'item_published'            => 'Card published.',
            'item_published_privately'  => 'Card published privately.',
            'item_reverted_to_draft'    => 'Card reverted to draft.',
            'item_scheduled'            => 'Card scheduled.',
            'item_updated'               => 'Card updated.',
            'item_link'                  => 'Card Link',
            'item_link_description'     => 'A link to a card.',
        ],
        'description'        => 'Card custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => false, 'slug' => 'cards'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-embed-generic',
        'menu_position'      => 7,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true
    ]);
    
    register_post_type( 'events', [
        'labels' => [
            'name'                      => 'Events',
            'singular_name'             => 'Event',
            'menu_name'                 => 'Events',
            'name_admin_bar'            => 'Event',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Event',
            'new_item'                  => 'New Event',
            'edit_item'                 => 'Edit Event',
            'view_item'                 => 'View Event',
            'view_items'                => 'View Events',
            'all_items'                 => 'All Events',
            'search_items'              => 'Search Events',
            'parent_item_colon'         => 'Parent Event:',
            'not_found'                 => 'No events found.',
            'not_found_in_trash'        => 'No events found in Trash.',
            'archives'                  => 'Event Archives',
            'attributes'                => 'Event Attributes',
            'insert_into_item'          => 'Insert into event',
            'uploaded_to_this_item'     => 'Uploaded to this event',
            'filter_items_list'         => 'Filter events list',
            'items_list_navigation'     => 'Events list navigation',
            'items_list'                => 'Events list',
            'item_published'            => 'Event published.',
            'item_published_privately'  => 'Event published privately.',
            'item_reverted_to_draft'    => 'Event reverted to draft.',
            'item_scheduled'            => 'Event scheduled.',
            'item_updated'               => 'Event updated.',
            'item_link'                  => 'Event Link',
            'item_link_description'     => 'A link to a event.',
        ],
        'description'        => 'Event custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => true, 'slug' => 'eventos'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
        'menu_position'      => 7,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true
    ]);
    
    register_post_type( 'services', [
        'labels' => [
            'name'                      => 'Services',
            'singular_name'             => 'Service',
            'menu_name'                 => 'Services',
            'name_admin_bar'            => 'Service',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Service',
            'new_item'                  => 'New Service',
            'edit_item'                 => 'Edit Service',
            'view_item'                 => 'View Service',
            'view_items'                => 'View Services',
            'all_items'                 => 'All Services',
            'search_items'              => 'Search Services',
            'parent_item_colon'         => 'Parent Service:',
            'not_found'                 => 'No services found.',
            'not_found_in_trash'        => 'No services found in Trash.',
            'archives'                  => 'Service Archives',
            'attributes'                => 'Service Attributes',
            'insert_into_item'          => 'Insert into service',
            'uploaded_to_this_item'     => 'Uploaded to this service',
            'filter_items_list'         => 'Filter services list',
            'items_list_navigation'     => 'Services list navigation',
            'items_list'                => 'Services list',
            'item_published'            => 'Service published.',
            'item_published_privately'  => 'Service published privately.',
            'item_reverted_to_draft'    => 'Service reverted to draft.',
            'item_scheduled'            => 'Service scheduled.',
            'item_updated'               => 'Service updated.',
            'item_link'                  => 'Service Link',
            'item_link_description'     => 'A link to a service.',
        ],
        'description'        => 'Service custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => true, 'slug' => 'productos-y-servicios'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-image-filter',
        'menu_position'      => 8,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true
    ]);
    
    register_post_type( 'responsibilities', [
        'labels' => [
            'name'                      => 'Responsibilities',
            'singular_name'             => 'Responsibility',
            'menu_name'                 => 'Responsibilities',
            'name_admin_bar'            => 'Responsibility',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Responsibility',
            'new_item'                  => 'New Responsibility',
            'edit_item'                 => 'Edit Responsibility',
            'view_item'                 => 'View Responsibility',
            'view_items'                => 'View Responsibilities',
            'all_items'                 => 'All Responsibilities',
            'search_items'              => 'Search Responsibilities',
            'parent_item_colon'         => 'Parent Responsibility:',
            'not_found'                 => 'No responsibilities found.',
            'not_found_in_trash'        => 'No responsibilities found in Trash.',
            'archives'                  => 'Responsibility Archives',
            'attributes'                => 'Responsibility Attributes',
            'insert_into_item'          => 'Insert into responsibility',
            'uploaded_to_this_item'     => 'Uploaded to this responsibility',
            'filter_items_list'         => 'Filter responsibilities list',
            'items_list_navigation'     => 'Responsibilities list navigation',
            'items_list'                => 'Responsibilities list',
            'item_published'            => 'Responsibility published.',
            'item_published_privately'  => 'Responsibility published privately.',
            'item_reverted_to_draft'    => 'Responsibility reverted to draft.',
            'item_scheduled'            => 'Responsibility scheduled.',
            'item_updated'               => 'Responsibility updated.',
            'item_link'                  => 'Responsibility Link',
            'item_link_description'     => 'A link to a responsibility.',
        ],
        'description'        => 'Responsibility custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => true, 'slug' => 'responsabilidad-social-empresarial'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-shield-alt',
        'menu_position'      => 50,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true
    ]);
    
    register_post_type( 'nota-de-prensa', [
        'labels' => [
            'name'                      => 'Press Releases',
            'singular_name'             => 'Press Release',
            'menu_name'                 => 'Press Releases',
            'name_admin_bar'            => 'Press Release',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Press Release',
            'new_item'                  => 'New Press Release',
            'edit_item'                 => 'Edit Press Release',
            'view_item'                 => 'View Press Release',
            'view_items'                => 'View Press Releases',
            'all_items'                 => 'All Press Releases',
            'search_items'              => 'Search Press Releases',
            'parent_item_colon'         => 'Parent Press Release:',
            'not_found'                 => 'No Press Releases found.',
            'not_found_in_trash'        => 'No Press Releases found in Trash.',
            'archives'                  => 'Press Release Archives',
            'attributes'                => 'Press Release Attributes',
            'insert_into_item'          => 'Insert into Press Release',
            'uploaded_to_this_item'     => 'Uploaded to this Press Release',
            'filter_items_list'         => 'Filter Press Releases list',
            'items_list_navigation'     => 'Press Releases list navigation',
            'items_list'                => 'Press Releases list',
            'item_published'            => 'Press Release published.',
            'item_published_privately'  => 'Press Release published privately.',
            'item_reverted_to_draft'    => 'Press Release reverted to draft.',
            'item_scheduled'            => 'Press Release scheduled.',
            'item_updated'               => 'Press Release updated.',
            'item_link'                  => 'Press Release Link',
            'item_link_description'     => 'A link to a Press Release.',
        ],
        'description'        => 'Press Release custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => true, 'slug' => 'nota-de-prensa'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-megaphone',
        'menu_position'      => 50,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true
    ]);

    register_taxonomy( 'categoria-de-nota-de-prensa', [ 'nota-de-prensa' ], [
        'hierarchical'    => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'label'          => 'Categories',
        'singular_label' => 'Category',
        'rewrite'        =>  [
            'slug'          => 'categoria-de-nota-de-prensa',
            'with_front'   => false,
        ]
    ]);

    register_post_type( 'library', [
        'labels' => [
            'name'                      => 'Library',
            'singular_name'             => 'File',
            'menu_name'                 => 'Library',
            'name_admin_bar'            => 'File',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New File',
            'new_item'                  => 'New File',
            'edit_item'                 => 'Edit File',
            'view_item'                 => 'View File',
            'view_items'                => 'View Library',
            'all_items'                 => 'All Files',
            'search_items'              => 'Search Files',
            'parent_item_colon'         => 'Parent File:',
            'not_found'                 => 'No files found.',
            'not_found_in_trash'        => 'No files found in Trash.',
            'archives'                  => 'File Archives',
            'attributes'                => 'File Attributes',
            'insert_into_item'          => 'Insert into file',
            'uploaded_to_this_item'     => 'Uploaded to this file',
            'filter_items_list'         => 'Filter files list',
            'items_list_navigation'     => 'Files list navigation',
            'items_list'                => 'Files list',
            'item_published'            => 'File published.',
            'item_published_privately'  => 'File published privately.',
            'item_reverted_to_draft'    => 'File reverted to draft.',
            'item_scheduled'            => 'File scheduled.',
            'item_updated'               => 'File updated.',
            'item_link'                  => 'File Link',
            'item_link_description'     => 'A link to a file.',
        ],
        'description'        => 'Library custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => true, 'slug' => 'biblioteca-digital'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-book-alt',
        'menu_position'      => 9,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true,
        'template'           => [
            [
                'banescocontigo/pdf'
            ]
        ],
    ]);
    
    register_taxonomy( 'categoria-de-libros', [ 'library' ], [
        'hierarchical'    => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'label'          => 'Categories',
        'singular_label' => 'Category',
        'rewrite'        =>  [
            'slug'          => 'categoria-de-libros',
            'with_front'   => false,
        ]
    ]);
    
    register_taxonomy( 'promociones-categories', [ 'promociones' ], [
        'hierarchical'    => true,
        'label'          => 'Categories',
        'singular_label' => 'Category',
        'rewrite'        =>  [
            'slug'          => 'promociones-categories',
            'with_front'   => false,
        ]
    ]);
    
    register_taxonomy( 'locations-categories', [ 'locations' ], [
        'hierarchical'    => true,
        'label'          => 'Categories',
        'singular_label' => 'Category',
        'rewrite'        =>  [
            'slug'          => 'locations-categories',
            'with_front'   => false,
        ]
    ]);
    
    register_post_type( 'popups', [
        'labels' => [
            'name'                      => 'Popups',
            'singular_name'             => 'Popup',
            'menu_name'                 => 'Popups',
            'name_admin_bar'            => 'Popup',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Popup',
            'new_item'                  => 'New Popup',
            'edit_item'                 => 'Edit Popup',
            'view_item'                 => 'View Popup',
            'view_items'                => 'View Popup',
            'all_items'                 => 'All Popups',
            'search_items'              => 'Search Popups',
            'parent_item_colon'         => 'Parent Popup:',
            'not_found'                 => 'No popups found.',
            'not_found_in_trash'        => 'No popups found in Trash.',
            'archives'                  => 'Popup Archives',
            'attributes'                => 'Popup Attributes',
            'insert_into_item'          => 'Insert into popup',
            'uploaded_to_this_item'     => 'Uploaded to this popup',
            'filter_items_list'         => 'Filter popups list',
            'items_list_navigation'     => 'Popups list navigation',
            'items_list'                => 'Popups list',
            'item_published'            => 'Popup published.',
            'item_published_privately'  => 'Popup published privately.',
            'item_reverted_to_draft'    => 'Popup reverted to draft.',
            'item_scheduled'            => 'Popup scheduled.',
            'item_updated'               => 'Popup updated.',
            'item_link'                  => 'Popup Link',
            'item_link_description'     => 'A link to a popup.',
        ],
        'description'        => 'Popup custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => true, 'slug' => 'popups'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-testimonial',
        'menu_position'      => 9,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true
    ]);
    
    register_post_type( 'sidebars', [
        'labels' => [
            'name'                      => 'Sidebars',
            'singular_name'             => 'Sidebar',
            'menu_name'                 => 'Sidebars',
            'name_admin_bar'            => 'Sidebar',
            'add_new'                   => 'Add New',
            'add_new_item'              => 'Add New Sidebar',
            'new_item'                  => 'New Sidebar',
            'edit_item'                 => 'Edit Sidebar',
            'view_item'                 => 'View Sidebar',
            'view_items'                => 'View Sidebar',
            'all_items'                 => 'All Sidebars',
            'search_items'              => 'Search Sidebars',
            'parent_item_colon'         => 'Parent Sidebar:',
            'not_found'                 => 'No sidebars found.',
            'not_found_in_trash'        => 'No sidebars found in Trash.',
            'archives'                  => 'Sidebar Archives',
            'attributes'                => 'Sidebar Attributes',
            'insert_into_item'          => 'Insert into sidebar',
            'uploaded_to_this_item'     => 'Uploaded to this sidebar',
            'filter_items_list'         => 'Filter sidebars list',
            'items_list_navigation'     => 'Sidebars list navigation',
            'items_list'                => 'Sidebars list',
            'item_published'            => 'Sidebar published.',
            'item_published_privately'  => 'Sidebar published privately.',
            'item_reverted_to_draft'    => 'Sidebar reverted to draft.',
            'item_scheduled'            => 'Sidebar scheduled.',
            'item_updated'              => 'Sidebar updated.',
            'item_link'                 => 'Sidebar Link',
            'item_link_description'     => 'A link to a sidebar.',
        ],
        'description'        => 'Sidebar custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['with_front' => true, 'slug' => 'sidebars'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-editor-outdent',
        'menu_position'      => 9,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true
    ]);
}

add_action( 'init', 'custom_register_post_type_init' );
