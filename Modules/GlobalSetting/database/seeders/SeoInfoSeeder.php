<?php

namespace Modules\GlobalSetting\database\seeders;

use Illuminate\Database\Seeder;
use Modules\GlobalSetting\app\Models\SeoSetting;

class SeoInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item1 = new SeoSetting();
        $item1->page_name = 'home_page';
        $item1->seo_title = 'Home';
        $item1->seo_description = 'Home';
        $item1->save();

        $item2 = new SeoSetting();
        $item2->page_name = 'about_page';
        $item2->seo_title = 'About';
        $item2->seo_description = 'About';
        $item2->save();

        $item2 = new SeoSetting();
        $item2->page_name = 'course_page';
        $item2->seo_title = 'Course';
        $item2->seo_description = 'Course';
        $item2->save();

        $item2 = new SeoSetting();
        $item2->page_name = 'blog_page';
        $item2->seo_title = 'Blog';
        $item2->seo_description = 'Blog';
        $item2->save();

        $item2 = new SeoSetting();
        $item2->page_name = 'contact_page';
        $item2->seo_title = 'Contact';
        $item2->seo_description = 'Contact';
        $item2->save();
    }
}
