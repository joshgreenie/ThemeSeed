<?php
    class CustomPostType {

        public $slug;
        public $label_singular;
        public $label_plural;
        public $taxonomies;

        public function update($args){
            foreach($args as $key => $value){
                $this->{$key} = $value;
            }
        }

        public function get(){
            $obj = (object)NULL;
            $obj->label_singular = $this->label_singular;
            $obj->label_plural = $this->label_plural;
            $obj->slug = $this->slug;
            $obj->taxonomies = ($this->taxonomies) ? $this->taxonomies : array();
            return $obj;
        }

        public function register() {
            $params = $this->get();

            $labels = array(
                'name'                  => _x( $params->label_plural, 'Post Type General Name', 'text_domain' ),
                'singular_name'         => _x( $params->label_singular, 'Post Type Singular Name', 'text_domain' ),
                'menu_name'             => __( $params->label_plural, 'text_domain' ),
                'name_admin_bar'        => __( $params->label_plural, 'text_domain' ),
                'archives'              => __( $params->label_plural . ' Archives', 'text_domain' ),
                'attributes'            => __( $params->label_plural . ' Attributes', 'text_domain' ),
                'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                'all_items'             => __( 'All ' . $params->label_plural, 'text_domain' ),
                'add_new_item'          => __( 'Add New ' . $params->label_singular, 'text_domain' ),
                'add_new'               => __( 'Add ' . $params->label_singular, 'text_domain' ),
                'new_item'              => __( 'New ' . $params->label_singular, 'text_domain' ),
                'edit_item'             => __( 'Edit ' . $params->label_singular, 'text_domain' ),
                'update_item'           => __( 'Update ' . $params->label_singular, 'text_domain' ),
                'view_item'             => __( 'View ' . $params->label_singular, 'text_domain' ),
                'view_items'            => __( 'View '.$params->label_plural, 'text_domain' ),
                'search_items'          => __( 'Search '.$params->label_plural, 'text_domain' ),
                'not_found'             => __( 'Not found', 'text_domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                'featured_image'        => __( 'Featured Image', 'text_domain' ),
                'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                'items_list'            => __( $params->label_plural . ' list', 'text_domain' ),
                'items_list_navigation' => __( $params->label_plural . ' list navigation', 'text_domain' ),
                'filter_items_list'     => __( 'Filter people list', 'text_domain' ),
            );
            $rewrite = array(
                'slug'                  => $params->slug,
                'with_front'            => true,
                'pages'                 => true,
                'feeds'                 => true,
            );
            $args = array(
                'label'                 => __( '' . $params->label_plural, 'text_domain' ),
                'description'           => __( $params->label_plural . '', 'text_domain' ),
                'labels'                => $labels,
                'supports'              => array( 'title', 'editor' ),
                'taxonomies'            => $params->taxonomies,
                'hierarchical'          => true,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 5,
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => true,
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'rewrite'               => $rewrite,
                'capability_type'       => 'page',
                'menu_icon'             => 'dashicons-media-spreadsheet'
            );

            register_post_type($params->slug, $args);
        }
    }
