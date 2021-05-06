<?php

/* *****
 * Return a compiled asset's URI
 * *****/

function pankart_asset($path): string
{
    return rtrim(get_template_directory_uri(), '/') . '/public/' . ltrim($path, '/');
}

/* *****
 * Register a custom post type
 * post_type toujours au singulier
 * *****/

add_action('init', 'pankart_custom_post_type');

function pankart_custom_post_type()
{
    register_post_type('members', [
            'label' => 'Membres',
            'labels' => [
                'singular_name' => 'Membre',
                'add_new' => 'Ajouter un membre',
                'add_new_item' => 'Ajouter un nouveau membre',
            ],
            'description' => 'Voici nos membres du groupe !',
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-groups',
            'rewrite' => [
                'slug' => 'membres'
            ]
        ]
    );
}

/* *****
 * Disable the Wordpress Gutenberg Editor
 * *****/

add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

function disable_gutenberg_editor(): bool
{
    return false;
}