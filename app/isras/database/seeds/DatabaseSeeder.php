<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\blog_content::class, 10)->create();
        factory(App\company::class, 10)->create();
        factory(App\address::class, 10)->create();
        factory(App\pic::class, 10)->create();
        factory(App\admin_blog_content::class, 10)->create();
        factory(App\admin_feedback_question::class, 10)->create();
        factory(App\admin_library_content::class, 10)->create();
        factory(App\assessment_question::class, 10)->create();
        factory(App\assessment_result::class, 10)->create();
        factory(App\assessment::class, 10)->create();
        factory(App\feedback_question::class, 10)->create();
        factory(App\feedback::class, 10)->create();
        factory(App\library_content::class, 10)->create();
        factory(App\lookup_assessment_category::class, 10)->create();
        factory(App\lookup_assessment_key_area::class, 10)->create();
        factory(App\lookup_assessment_title::class, 10)->create();
        factory(App\lookup_assessment_type::class, 10)->create();
        factory(App\lookup_author::class, 10)->create();
        factory(App\lookup_bank::class, 10)->create();
        factory(App\lookup_country::class, 10)->create();
        factory(App\lookup_payment_method::class, 10)->create();
        factory(App\lookup_publication::class, 10)->create();
        factory(App\payment::class, 10)->create();
        factory(App\User::class, 10)->create();
    }
}
