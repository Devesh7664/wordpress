<?php
/*
 Plugin Name: Books Plugin
 Description: A plugin to manage books with custom post types, meta boxes, and taxonomies.
 Version: 1.0
 Author: Your Name
*/

// Custom Post Type
function create_book_post_type() {
    register_post_type('book',
        array(
            'labels' => array(
                'name' => __('Books'),
                'singular_name' => __('Book')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'books'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'create_book_post_type');

// Meta Box
function book_meta_box() {
    add_meta_box(
        'book_info',
        'Book Information',
        'book_meta_box_callback',
        'book',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'book_meta_box');

function book_meta_box_callback($post) {
    $author_name = get_post_meta($post->ID, '_author_name', true);
    $isbn = get_post_meta($post->ID, '_isbn', true);
    $started_reading = get_post_meta($post->ID, '_started_reading', true);
    $finished_reading = get_post_meta($post->ID, '_finished_reading', true);
    ?>
    <p>
        <label for="author_name">Author Name</label>
        <input type="text" id="author_name" name="author_name" value="<?php echo esc_attr($author_name); ?>" />
    </p>
    <p>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" value="<?php echo esc_attr($isbn); ?>" />
    </p>
    <p>
        <label for="started_reading">Started Reading Date</label>
        <input type="date" id="started_reading" name="started_reading" value="<?php echo esc_attr($started_reading); ?>" />
    </p>
    <p>
        <label for="finished_reading">Finished Reading Date</label>
        <input type="date" id="finished_reading" name="finished_reading" value="<?php echo esc_attr($finished_reading); ?>" />
    </p>
    <?php
}

function save_book_meta_box_data($post_id) {
    if (array_key_exists('author_name', $_POST)) {
        update_post_meta($post_id, '_author_name', $_POST['author_name']);
    }
    if (array_key_exists('isbn', $_POST)) {
        update_post_meta($post_id, '_isbn', $_POST['isbn']);
    }
    if (array_key_exists('started_reading', $_POST)) {
        update_post_meta($post_id, '_started_reading', $_POST['started_reading']);
    }
    if (array_key_exists('finished_reading', $_POST)) {
        update_post_meta($post_id, '_finished_reading', $_POST['finished_reading']);
    }
}
add_action('save_post', 'save_book_meta_box_data');

// Custom Taxonomy
function create_book_genre_taxonomy() {
    register_taxonomy(
        'genre',
        'book',
        array(
            'label' => __('Genre'),
            'rewrite' => array('slug' => 'genre'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'create_book_genre_taxonomy');
