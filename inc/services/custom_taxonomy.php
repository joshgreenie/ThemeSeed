<?php

class CustomTaxonomy {

    public $slug;
    public $label_singular;
    public $label_plural;
    public $post_types;

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
        $obj->post_types = ($this->post_types) ? $this->post_types : array();
        return $obj;
    }

    public function register() {
        $params = $this->get();

        $labels = array(
            'name'                       => __($params->label_plural),
            'singular_name'              => __($params->label_singular),
            'menu_name'                  => __($params->label_plural),
            'all_items'                  => __( 'All '. $params->label_plural ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'capabilities' => array (
	            'manage_terms' => 'manage_categories'
            )
        );

        register_taxonomy( $params->slug, $params->post_types, $args );
    }
}

