<?php

use Illuminate\Database\Seeder;

use App\Models\Categories\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::create([
        //     'name' => 'electrical',
        //     'slug' => 'electrical'
        // ])->image()->create([
        //     'url' => 'electrical.jpg'
        // ]);

        // Category::create([
        //     'name' => 'construction',
        //     'slug' => 'construction'
        // ])->image()->create([
        //     'url' => 'concrete.jpg'
        // ]);

        // Category::create([
        //     'name' => 'interior design',
        //     'slug' => 'interior-design'
        // ])->image()->create([
        //     'url' => 'others.jpg'
        // ]);

        // Category::create([
        //     'name' => 'ironworks',
        //     'slug' => 'ironworks'
        // ])->image()->create([
        //     'url' => 'others.jpg'
        // ]);

        // Category::create([
        //     'name' => 'external works',
        //     'slug' => 'external-works'
        // ])->image()->create([
        //     'url' => 'others.jpg'
        // ]);


        // New category structure

        // --
        $category = null;
        // --

        // -- Top Level Category
        $category = Category::create([
            'name' => 'Bedsheets & Mattresses',
            'slug' => 'bedsheets-and-mattresses',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Cupboards',
            'slug' => 'cupboards',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Tables & Chairs',
            'slug' => 'tables-and-chairs',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Carpets',
            'slug' => 'carpets',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Curtains',
            'slug' => 'curtains',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Tiles',
            'slug' => 'tiles',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Lightings',
            'slug' => 'lightings',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Wallpapers',
            'slug' => 'wallpapers',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Roofs',
            'slug' => 'roofs',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Doors',
            'slug' => 'doors',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Windows',
            'slug' => 'windows',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Auxiliary Prosperity Items',
            'slug' => 'auxiliary-prosperity-items',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Products & Services',
            'slug' => 'products-and-services',
            'parent_category_id' => 0
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // -- End Top Level Categories
        // --
        // --
        // -- Second Level Categories

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Bedsheets & Mattresses')->first();



        $category = Category::create([
            'name' => 'Pillows',
            'slug' => 'pillows',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Bedsheets',
            'slug' => 'bedsheets',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Mattresses',
            'slug' => 'mattresses',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Bedframes',
            'slug' => 'bedframes',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Cupboards')->first();

        $category = Category::create([
            'name' => 'Shoes Cabinets',
            'slug' => 'shoes-cabinets',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Storage Shelves / Units',
            'slug' => 'storage-shelves-units',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Book Cases',
            'slug' => 'book-cases',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'TV & Media Furnitures',
            'slug' => 'tv-and-media-furnitures',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Wardrobes',
            'slug' => 'wardrobes',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Kitchen Cabinets',
            'slug' => 'kitchen-cabinets',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Tables & Chairs')->first();

        $category = Category::create([
            'name' => 'Dining Sets',
            'slug' => 'dining-sets',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Chairs',
            'slug' => 'chairs',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Coffee Tables',
            'slug' => 'coffee-tables',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Sofas',
            'slug' => 'sofas',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Tian Xin Chairs',
            'slug' => 'tian-xin-chairs',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Carpets')->first();

        $category = Category::create([
            'name' => 'Office',
            'slug' => 'office',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'House',
            'slug' => 'house',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Ergonomic Design',
            'slug' => 'ergonomic-design',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Tiles')->first();

        $category = Category::create([
            'name' => 'Prosperity',
            'slug' => 'prosperity',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Elegant',
            'slug' => 'elegant',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Exclusive',
            'slug' => 'exclusive',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Mix & Match',
            'slug' => 'mix-and-match',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Lightings')->first();

        $category = Category::create([
            'name' => 'LED',
            'slug' => 'led',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Office',
            'slug' => 'office',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Wall Lights',
            'slug' => 'wall-lights',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Table Lights',
            'slug' => 'table-lights',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Pendant Lamp',
            'slug' => 'pendant-lamp',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Special',
            'slug' => 'special',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Ceiling',
            'slug' => 'ceiling',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Doors')->first();

        $category = Category::create([
            'name' => 'Main Doors',
            'slug' => 'main-doors',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Side Doors',
            'slug' => 'side-doors',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Back Doors',
            'slug' => 'back-doors',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Glass Doors',
            'slug' => 'glass-doors',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Wooden Doors',
            'slug' => 'wooden-doors',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Aluminium Glazed Doors',
            'slug' => 'aluminium-glazed-doors',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Designer Doors',
            'slug' => 'designer-doors',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Auto Doors',
            'slug' => 'auto-doors',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Door Handles',
            'slug' => 'door-handles',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Windows')->first();

        $category = Category::create([
            'name' => 'Single Hung',
            'slug' => 'single-hung',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Double Hung',
            'slug' => 'double-hung',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Arched',
            'slug' => 'arched',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Awning',
            'slug' => 'awning',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Custom',
            'slug' => 'custom',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Custom',
            'slug' => 'custom',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Auxiliary Prosperity Items')->first();

        $category = Category::create([
            'name' => 'Bowls',
            'slug' => 'bowls',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Glass Artworks',
            'slug' => 'glass-artworks',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Teapot / Tea Cup',
            'slug' => 'teapot-tea-cup',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Vase',
            'slug' => 'vase',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Sculpture',
            'slug' => 'sculpture',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        // --
        $parentCategory = null;
        //--

        $parentCategory = Category::where('name', 'Products & Services')->first();

        $category = Category::create([
            'name' => 'Renovation / Repairing',
            'slug' => 'renovation-repairing',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Electrical',
            'slug' => 'electrical',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Paint',
            'slug' => 'paint',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Plaster Ceiling / Partition',
            'slug' => 'plaster-ceiling-partition',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Hardware',
            'slug' => 'hardware',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Air Conditioning',
            'slug' => 'air-conditioning',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Interior Designer / Architect',
            'slug' => 'interior-designer-architect',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Landscapes',
            'slug' => 'landscapes',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Others',
            'slug' => 'others',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $parentCategory = Category::where('name', 'Pillows')->first();

        $category = Category::create([
            'name' => 'Memory Foam',
            'slug' => 'memory-foam',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Ergonomic',
            'slug' => 'ergonomic',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $parentCategory = Category::where('name', 'Mattresses')->first();

        $category = Category::create([
            'name' => 'Spring Mattresses',
            'slug' => 'spring-mattresses',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Foam Mattresses',
            'slug' => 'foam-mattresses',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $parentCategory = Category::where('name', 'LED')->first();

        $category = Category::create([
            'name' => 'Eyeball',
            'slug' => 'eyeball',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);

        // --
        $category = null;
        // --

        $category = Category::create([
            'name' => 'Downlight',
            'slug' => 'downlight',
            'parent_category_id' => $parentCategory->id
        ]);

        $category->image()->create([
            'path' => 'uploads/images/categories/' . $category->slug . '/',
            'filename' => $category->slug . '.jpg'
        ]);
    }
}
