<?php


use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('shop.index', function ($trail) {
    $trail->push('Home', route('shop.index'));
});

// Home > [Category]
Breadcrumbs::for('shop.category.first', function ($trail, $category) {
    $trail->parent('shop.index');
    $trail->push($category->name, route('shop.category.first', $category->slug));
});

// Home > [Category] > [Subcategory]
Breadcrumbs::for('shop.category.second', function ($trail, $category) {
    $trail->parent('shop.index');
    $trail->push($category->parentCategory->name, route('shop.category.first', $category->parentCategory->slug));
    $trail->push($category->name, route(
        'shop.category.second',
        [
            'topLevelCategorySlug' => $category->parentCategory->slug,
            'secondLevelCategorySlug' => $category->slug
        ]
    ));
});

// Home > [Category] > [Subcategory] > [Product Type]
Breadcrumbs::for('shop.category.third', function ($trail, $category, $parentCategory) {
    $trail->parent('shop.index');
    $trail->push($parentCategory->parentCategory->name, route('shop.category.first', $parentCategory->parentCategory->slug));
    $trail->push($parentCategory->name, route(
        'shop.category.second',
        [
            'topLevelCategorySlug' => $parentCategory->parentCategory->slug,
            'secondLevelCategorySlug' => $parentCategory->slug
        ]
    ));
    $trail->push($category->name, route(
        'shop.category.third',
        [
            'topLevelCategorySlug' => $parentCategory->parentCategory->slug,
            'secondLevelCategorySlug' => $parentCategory->slug,
            'productTypeSlug' => $category->slug
        ]
    ));
});

include('breadcrumbs/management.php');
