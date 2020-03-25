<?php

// // Home > About
// Breadcrumbs::for('about', function ($trail) {
//     $trail->parent('home');
//     $trail->push('About', route('about'));
// });

// // Home > Blog
// Breadcrumbs::for('blog', function ($trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });

// Home
Breadcrumbs::for('management.home', function ($trail) {
    $trail->push('Home', route('management.home'));
});

// Home > Product
Breadcrumbs::for('management.product', function ($trail) {
    $trail->parent('management.home');
    $trail->push('Product', route('management.product'));
});

// Home > Product > Create
Breadcrumbs::for('management.product.create', function ($trail) {
    $trail->parent('management.product');
    $trail->push('Create', route('management.product.create'));
});


