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
        factory(App\BlogContent::class, 10)->create();
        factory(App\Company::class, 10)->create();
        factory(App\Address::class, 10)->create();
        factory(App\PIC::class, 10)->create();
        factory(App\AdminBlogContent::class, 10)->create();
        factory(App\AdminFeedbackQuestion::class, 10)->create();
        factory(App\AdminAssessmentQuestion::class, 10)->create();
        factory(App\AdminLibraryContent::class, 10)->create();
        factory(App\AssessmentQuestion::class, 114)->create();
        factory(App\AssessmentResult::class, 10)->create();
        //factory(App\Assessment::class, 10)->create();
        factory(App\FeedbackQuestion::class, 10)->create();
        factory(App\Feedback::class, 10)->create();
        factory(App\LibraryContent::class, 10)->create();
        factory(App\LookupAssessmentCategory::class, 4)->create();
        factory(App\LookupAssessmentKeyArea::class, 19)->create();
        factory(App\LookupAssessmentTitle::class, 44)->create();
        factory(App\LookupAssessmentType::class, 2)->create();
        factory(App\LookupAuthor::class, 10)->create();
        factory(App\LookupBank::class, 5)->create();
        factory(App\LookupCountry::class, 10)->create();
        factory(App\LookupPaymentMethod::class, 10)->create();
        factory(App\LookupPublication::class, 10)->create();
        factory(App\LookupEntityType::class, 2)->create();
        factory(App\Payment::class, 10)->create();
        factory(App\Entity::class, 2)->create();
        factory(App\Admin::class, 1)->create();
        factory(App\User::class, 1)->create();
    }
}
