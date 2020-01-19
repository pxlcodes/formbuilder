<?php

return [

    /*
    |--------------------------------------------------------------------------
    | MenuBuilder Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default menu builder
    |
    */

    'form_builder_enable' => true,
    'form_tag' => true,
    'use_route_url' => false,
    'display_form_title' => false,
    'display_submit_button' => true,
    'dynamic_submit_button_name' => true,
    'display_validation_error' => true,
    'client_side_validation' => false,
    'server_side_validation' => true,
    'rule_validation' => false,

    /*
    |--------------------------------------------------------------------------
    | Define Form Model
    |--------------------------------------------------------------------------
    |
    |   You need to specify the action field inside model
    |   Must follow hierarchy
    |   model => {model_name} => route => curd {{ route_name }}
    |   model => {model_name} => field => html form fields
    */

    'model' => [
        // Post Model
        'post' => [
            // Actions for Post Model
            'action' => [
                // CURD route for Post Model
                'route' =>
                    [
                        'store' => 'create',
                        'update' => 'post.update',
                        'delete' => 'post.destroy'
                    ],
                // Multipart form type
                'file' => false
            ],
            // Fields For Post Model
            'field' => [
                //Title field
                [
                    'tag' => 'input',
                    'type' => 'text',
                    'label' => 'Title',
                    'name' => 'title',
                    'placeholder' => 'Your Title Here',
                    'class' => '',
                    'rule' => 'required'

                ],
                // Body Field
                [
                    'tag' => 'textarea',
                    'type' => 'text',
                    'label' => 'Body',
                    'name' => 'body',
                    'placeholder' => 'Your Body',
                    'class' => '',
                ]
                // Some other Field Here
            ]
        ],
        //  Contact Model
        'contact' => [
            // Actions for Post Model
            'action' => [
                // CURD route for Post Model
                'route' => [
                    [
                        'store' => 'contact.store',
                        'update' => 'post.update',
                        'destroy' => 'post.destroy'
                    ]
                ],
                'url' => [
                    [
                        'store' => 'admin/contact',
                        'update' => 'admin/contact',
                        'destroy' => 'admin/contact'
                    ]

                ],
                // Multipart form type
                'file' => true,
            ],
            'field' => [
                [
                    'name' => 'name',
                    'label' => 'Name',
                    'placeholder' => 'Enter your name',
                    'class' => 'form-control col-6',
                    'rule' => 'required|max:25'
                ],
                [
                    'type' => 'email',
                    'name' => 'email',
                    'label' => 'Email',
                    'placeholder' => 'Enter your email',
                    'class' => 'form-control col-6',
                    'rule' => 'required|max:25'
                ],
                [
                    'tag' => 'textarea',
                    'name' => 'body',
                    'label' => 'Body',
                    'placeholder' => 'Enter your Message',
                    'class' => 'textarea form-control col-6',
                    'rule' => 'required|max:25'
                ],
            ]
        ],
        //  Register Model
        'register' => [
            'field' => [
                [
                    'tag' => 'input',
                    'type' => 'email',
                    'label' => 'Name',
                    'name' => 'name',
                    'placeholder' => 'Your Title Here',
                    'class' => 'form-control col-6 ',
                    'rule' => 'required|max:255'

                ],
                [
                    'tag' => 'input',
                    'type' => 'password',
                    'label' => 'Password',
                    'name' => 'password',
                    'placeholder' => 'Password',
                    'class' => 'form-control col-6 ',
                    'display' => '', // hidden|blocked
                ],
                [
                    'tag' => 'input',
                    'type' => 'file',
                    'label' => 'Password',
                    'name' => 'password',
                    'placeholder' => 'Password',
                    'class' => 'form-control col-6 ',
                    'display' => '', // hidden|blocked
                ],
                [
                    'tag' => 'input',
                    'type' => 'radio',
                    'label' => 'Password',
                    'name' => 'password',
                    'placeholder' => 'Password',
                    'class' => '',
                    'display' => '', // hidden|blocked
                ]
            ]
        ],
        'gallery' => [
            'action' => [
                'route' =>
                    [
                        'store' => 'gallery.store',
                        'update' => 'gallery.update',
                        'delete' => 'gallery.destroy'
                    ],
                'file' => true
            ],

            'field' => [
                [
                    'tag' => 'input',
                    'name' => 'title',
                    'title' => 'Title',
                    'label' => 'Title',
                    'type' => 'text',
                ],
                [
                    'tag' => 'textarea',
                    'name' => 'description',
                    'placeholder' => 'Description',
                    'title' => ''

                ],

            ]

        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Define attribute for form
    |--------------------------------------------------------------------------
    |
    */

    'attribute' => [
        'input_error_class' => 'is-invalid',
        'input_success_class' => 'is-valid',
        'form' => [
            'class' => ''
        ],

    ],

];