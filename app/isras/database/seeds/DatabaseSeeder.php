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
        //1 . factory(App\blog_content::class, 10)->create();
        //2 . factory(App\company::class, 10)->create();
        //3 . factory(App\address::class, 10)->create();
        //4 . factory(App\pic::class, 10)->create();
        //5 . factory(App\admin_blog_content::class, 10)->create();
        //6 . factory(App\admin_feedback_question::class, 10)->create();
        //7 . factory(App\admin_library_content::class, 10)->create();
        //8 . factory(App\assessment_question::class, 10)->create();
        //9 . factory(App\assessment_result::class, 10)->create();
        //10 . factory(App\assessment::class, 10)->create();
        //11 . factory(App\feedback_question::class, 10)->create();
        //12 . factory(App\feedback::class, 10)->create();
        //13 . factory(App\library_content::class, 10)->create();
        //14 . factory(App\lookup_assessment_category::class, 10)->create();
        //15 . factory(App\lookup_assessment_key_area::class, 10)->create();
        //16 . factory(App\lookup_assessment_title::class, 10)->create();
        //17 . factory(App\lookup_assessment_type::class, 10)->create();
        //18 . factory(App\lookup_author::class, 10)->create();
        //19 . factory(App\lookup_bank::class, 10)->create();
        //20 . factory(App\lookup_country::class, 10)->create();
        //21 . factory(App\lookup_payment_method::class, 10)->create();
        //22 . factory(App\lookup_publication::class, 10)->create();
        //23 . factory(App\payment::class, 10)->create();
        factory(App\User::class, 10)->create();
    }
}
