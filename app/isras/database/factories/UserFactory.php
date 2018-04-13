<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Address::class, function (Faker $faker){
    static $number = 1;
    return [
        'company_id' => $number++,//$faker->randomNumber($nbDigits = NULL, $strict = false),
        'addr_1' => $faker->address,
        'addr_2' => "",
        'city' => $faker->city,
        'postcode' => $faker->postcode,
        'country' => $faker->country,
    ];
});

$factory->define(App\AdminBlogContent::class, function (Faker $faker) {
    static $number = 1;
    return [
        'admin_id' => $number,//$faker->randomDigit,
        'assessment_question_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
    ];
});

$factory->define(App\AdminFeedbackQuestion::class, function (Faker $faker) {
    static $number = 1;
    return [
        'admin_id' => $number,//$faker->randomDigit,
        'feedback_question_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
    ];
});

$factory->define(App\AdminLibraryContent::class, function (Faker $faker) {
    static $number = 1;
    return [
        'admin_id' => $number,//$faker->randomDigit,
        'library_content_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
    ];
});

$factory->define(App\AssessmentQuestion::class, function (Faker $faker) {
    return [
        'statement' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'type' => $faker->unique()->numberBetween($min = 1, $max = 9000),
        'category' => $faker->unique()->numberBetween($min = 1, $max = 9000),
        'key_area' => $faker->unique()->numberBetween($min = 1, $max = 9000),
        'title' => $faker->unique()->numberBetween($min = 1, $max = 9000),
    ];
});

$factory->define(App\AssessmentResult::class, function (Faker $faker) {
    return [
        'result' => $faker->numberBetween($min = 1, $max = 100),
    ];
});

$factory->define(App\Assessment::class, function (Faker $faker) {
    static $number = 1;
    return [
        'user_id' => $number,//$faker->unique()->numberBetween($min = 1, $max = 9000),
        'assessment_question_id' => $number,//$faker->unique()->numberBetween($min = 1, $max = 9000),
        'assessment_result_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
        'score' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
    ];
});

$factory->define(App\BlogContent::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text,
    ];
});

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'ref_no' => $faker->word.$faker->randomNumber($nbDigits = NULL, $strict = false),//sentence($nbWords = 6, $variableNbWords = true),
    ];
});

$factory->define(App\FeedbackQuestion::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});

$factory->define(App\Feedback::class, function (Faker $faker) {
    static $number = 1;
    return [
        'user_id' => $number,//$faker->unique()->numberBetween($min = 1, $max = 9000),
        'feedback_question_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
        'score' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
    ];
});

$factory->define(App\LibraryContent::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'src' => $faker->url,
        'publication' => $faker->unique()->numberBetween($min = 1, $max = 9000),
        'author' => $faker->unique()->numberBetween($min = 1, $max = 9000),
    ];
});

$factory->define(App\LookupAssessmentCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\LookupAssessmentKeyArea::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\LookupAssessmentTitle::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\LookupAssessmentType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\LookupAuthor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\LookupBank::class, function (Faker $faker) {
    $bank = ['Bank Islam', 'Maybank', 'Bank Rakyat', 'Bank Simpanan Nasional', 'RHB Bank'];
    static $number = -1;
    return [
        'name' => $bank[++$number],//$faker->bank,
    ];
});

$factory->define(App\LookupCountry::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
    ];
});

$factory->define(App\LookupPaymentMethod::class, function (Faker $faker) {
    return [
        'name' => $faker->creditCardType,
    ];
});

$factory->define(App\LookupPublication::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Payment::class, function (Faker $faker) {
    static $number = 1;
    return [
        'user_id' => $number,//$faker->unique()->numberBetween($min = 1, $max = 9000),
        'company_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
        'amount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10000),
        'method' => $faker->unique()->numberBetween($min = 1, $max = 9000),
        'bank' => $faker->unique()->numberBetween($min = 1, $max = 9000),
    ];
});

$factory->define(App\PIC::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
    ];
});

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'tel_no' => $faker->unique()->e164PhoneNumber,
        'fax_no' => $faker->unique()->e164PhoneNumber,
        'password' => str_random(15),
    ];
});

//$faker->unique()->safeEmail,
        //'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        //'remember_token' => str_random(10),