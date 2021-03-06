<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5e1d8f163f200',
    'title' => __('Modularity Contact Banner', 'modularity-contact-banner'),
    'fields' => array(
        0 => array(
            'key' => 'field_5e1d90c31ee10',
            'label' => __('Main content', 'modularity-contact-banner'),
            'name' => 'mod_contactbanner_main_content',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 3,
            'new_lines' => '',
        ),
        1 => array(
            'key' => 'field_5e1e26c283a52',
            'label' => __('Header - Business hours', 'modularity-contact-banner'),
            'name' => 'mod_contactbanner_header_business_hours',
            'type' => 'text',
            'instructions' => __('Enter business hours header', 'modularity-contact-banner'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        2 => array(
            'key' => 'field_5e1e309814335',
            'label' => __('Hours list', 'modularity-contact-banner'),
            'name' => 'mod_contactbanner_hours_list',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'row',
            'button_label' => __('Add business weekdays and hours', 'modularity-contact-banner'),
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_5e1e315214337',
                    'label' => __('Weekdays', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_weekdays',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                1 => array(
                    'key' => 'field_5e1e318814338',
                    'label' => __('Hours from', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_hours_from',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 5,
                ),
                2 => array(
                    'key' => 'field_5e1e31bf14339',
                    'label' => __('Hours to', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_hours_to',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 5,
                ),
            ),
        ),
        3 => array(
            'key' => 'field_5e1e28733a316',
            'label' => __('Abnormalities - Business hours', 'modularity-contact-banner'),
            'name' => 'mod_contactbanner_abnormalities_business_hours',
            'type' => 'text',
            'instructions' => __('Enter business hours abnormalities', 'modularity-contact-banner'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        4 => array(
            'key' => 'field_5e1ed6113cdb8',
            'label' => __('Call to action icon list', 'modularity-contact-banner'),
            'name' => 'mod_contactbanner_cta_list',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 4,
            'max' => 4,
            'layout' => 'block',
            'button_label' => __('Add item', 'modularity-contact-banner'),
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_5e1ed6a13cdb9',
                    'label' => __('Title', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_cta_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                1 => array(
                    'key' => 'field_5e1ed6cd3cdba',
                    'label' => __('Icon', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_cta_icon',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => 'svg',
                ),
                2 => array(
                    'key' => 'field_5e1ed7603cdbb',
                    'label' => __('Content', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_cta_content',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                3 => array(
                    'key' => 'field_5e1ed76b3cdbc',
                    'label' => __('Label - Call to action', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_cta_label',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                4 => array(
                    'key' => 'field_5e1ed8323cdbd',
                    'label' => __('URL - Call to action', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_cta_url',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                5 => array(
                    'key' => 'field_5e1ee12b3cdbe',
                    'label' => __('onClick - Call to action', 'modularity-contact-banner'),
                    'name' => 'mod_contactbanner_cta_onclick',
                    'type' => 'text',
                    'instructions' => __('Enter javascript', 'modularity-contact-banner'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
        ),
        5 => array(
            'key' => 'field_5e2011ed67f61',
            'label' => __('Label - More info (Footer)', 'modularity-contact-banner'),
            'name' => 'mod_contactbanner_label_more_info',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        6 => array(
            'key' => 'field_5e2012c96a110',
            'label' => __('Url - More info (Footer)', 'modularity-contact-banner'),
            'name' => 'mod_contactbanner_url_more_info',
            'type' => 'page_link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => '',
            'taxonomy' => '',
            'allow_null' => 0,
            'allow_archives' => 1,
            'multiple' => 0,
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-contact-banner',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));
}