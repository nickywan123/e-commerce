<?php


use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// // Home
// Breadcrumbs::for('shop.index', function ($trail) {
//     $trail->push('Home', route('shop.index'));
// });

// // Home > [Category]
// Breadcrumbs::for('shop.category', function ($trail, $category) {
//     $trail->parent('shop.index');
//     $trail->push($category->name, route('shop.category', $category->slug));
// });

// // Home > [Category] > [Subcategory]
// Breadcrumbs::for('shop.category.subcategory', function ($trail, $category, $subcategory) {
//     $trail->parent('shop.index');
//     $trail->push($category->name, route('shop.category', $category->slug));
//     $trail->push($subcategory->name, route(
//         'shop.category.subcategory',
//         [
//             'categorySlug' => $category->slug,
//             'subcategorySlug' => $subcategory->slug
//         ]
//     ));
// });

// // Home > [Category] > [Subcategory] > [Product Type]
// Breadcrumbs::for('shop.category.subcategory.type', function ($trail, $category, $subcategory, $type) {
//     $trail->parent('shop.index');
//     $trail->push($category->name, route('shop.category', $category->slug));
//     $trail->push($subcategory->name, route(
//         'shop.category.subcategory',
//         [
//             'categorySlug' => $category->slug,
//             'subcategorySlug' => $subcategory->slug
//         ]
//     ));
//     $trail->push($type->name, route(
//         'shop.category.subcategory.type',
//         [
//             'categorySlug' => $category->slug,
//             'subcategorySlug' => $subcategory->slug,
//             'productTypeSlug' => $type->slug
//         ]
//     ));
// });

// Home > [Category] > [Subcategory]> [Product]
// Breadcrumbs::for('shop.product', function ($trail, $product) {
//     $trail->parent('shop.index');
//     $trail->push($product->)
// })

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
include('breadcrumbs/management.php');
