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
        'blog_content_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
    ];
});

$factory->define(App\AdminFeedbackQuestion::class, function (Faker $faker) {
    static $number = 1;
    return [
        'admin_id' => $number,//$faker->randomDigit,
        'feedback_question_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
    ];
});

$factory->define(App\AdminAssessmentQuestion::class, function (Faker $faker) {
    static $number = 1;
    return [
        'admin_id' => $number,//$faker->randomDigit,
        'assessment_question_id' => $number++,//$faker->unique()->numberBetween($min = 1, $max = 9000),
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
    //type = Vital / Environmental
    //category = Community / Workplace / Environmental / Marketplace
    //key_area = Key Area title
    //title = Question title
    $questions = 
    [
        //Community Questions
        //KA1
        //Contribution for the needy 
        ['Donate to hardcore poor Muslims', 1, 1, 1, 1],
        ['Donate to victims of environmental disasters', 1, 1, 1, 1],
        ['Donate to the less fortunate (e.g. victims of crimes, accidents, etc.)', 2, 1, 1, 1],
        //Community involvement
        ['Engage with the community to understand their needs and expectations', 2, 1, 1, 2],
        ['Undertake activities related to community safety and security', 2, 1, 1, 2],
        ['Organise and/or sponsor sports programmes or events', 2, 1, 1, 2],
        ['Organise Family Days and social gatherings', 2, 1, 1, 2],
        ['Organize community activities (e.g. Qurban activities, Public talks, Iftar, Blood donations, Health/Medical screening programmes)', 2, 1, 1, 2],
        ['Collaborate with NGOs and community to promote sustainable business practices', 2, 1, 1, 2],
        ['Construct and restore public premises (e.g amenities, public area, parks and playgrounds etc)', 2, 1, 1, 2],
        //Culture
        ['Promote, preserve and conserve Islamic culture and heritage', 2, 1, 1, 3],
        ['Sponsor and/or promote inter-faith dialogues (respect other religions and indigenous beliefs)', 2, 1, 1, 3],
        ['Sponsor culture-related community functions', 2, 1, 1, 3],
        //Contribution to the eligible recipients
        ['Contribute to NGOs involved in assisting the community and the needy', 2, 1, 1, 4],
        //Promoting Islamic values
        ['Initiate religious functions and activities (e.g. Tilawah, TV programmes, etc.)', 2, 1, 1, 5],
        ['Conduct and/or sponsor Fardhu ain classes', 2, 1, 1, 5],
        ['Donate to suraus/mosques/madrasahs/religious schools', 2, 1, 1, 5],
        //KA2
        //Education
        ['Participate in promote and/or sponsor Love the Earth Campaign', 2, 1, 2, 6],
        ['Conduct Entrepreneurship workshops (e.g for graduates, single mothers and the needy)', 2, 1, 2, 6],
        ['Provide scholarships in critical areas of expertise for Muslims.', 2, 1, 2, 6],
        ['Create awareness on new Islamic products and instruments (e.g. takaful, sukuk, ar-rahnu, Islamic wealth planning etc.)', 2, 1, 2, 6],
        ['Create awareness against unhealthy activities (e.g. gambling, drugs, alcohol, illegal investments etc.)', 2, 1, 2, 6],
        ['Conduct educational programmes (e.g. training/seminar/workshop, provide tuition, motivational talk, tazkirah; receive educational visits, etc.)', 2, 1, 2, 6],
        ['Donate to and/or sponsor educational institutions, educational related facilities, products and activities (e.g. intellect facilities, computers for schools, mobile libraries etc.)', 2, 1, 2, 6],
        ['Provide education-related financial assistance (e.g. exam fees, tuition fees, scholarships etc.)', 2, 1, 2, 6],
        ['Provide internship training programmes for college/university students', 2, 1, 2, 6],
        //KA3
        //Economic Development
        ['Facilitate financial aid for the poor (e.g. micro financing, soft loans etc.)', 2, 1, 3, 7],
        ['Allocate assets as wakaf (e.g cash, land, building etc.)', 2, 1, 3, 7],
        ['Assist new Muslim entrepreneurs', 2, 1, 3, 7],
        //Employment opportunity
        ['Create job opportunities for the handicapped and disabled', 2, 1, 3, 8],
        ['Create job opportunities for unemployed youths/ poor/needy', 2, 1, 3, 8],
        //KA4
        //Health programmes for the public and the needy
        ['Facilitate and/or sponsor special health-care programmes for the needy, hardcore poor (e.g free rural medi-care services, mobile hospitals, flying doctors)', 2, 1, 4, 9],
        ['Conduct awareness programmes on health matters', 2, 1, 4, 9],
        ['Provide health related financial assistance to the needy (e.g. surgery fees, hospitalization fees, continuous treatment)', 2, 1, 4, 9],
        //Workplace questions
        //KA1
        //Spiritual and Motivational Enhancement
        ['Conduct tazkirah session on fardhu ain', 1, 2, 5, 10],
        ['Conduct tazkirah session on fardhu kifayah', 2, 2, 5, 10],
        ['Perform daily morning doa', 1, 2, 5, 10],
        ['Organise motivation- and stress- related management programmes (e.g counselling services, staff rejuvenation programmes, study trips etc.)', 2, 2, 5, 10],
        //Skill Enhancement
        ['Conduct life essential skills programmes (e.g. health talks, parenting, financial management etc.)', 1, 2, 5, 11],
        ['Provide job-related training programmes (e.g. job competencies seminars, multi-skilling programmes, IT related training etc.)', 1, 2, 5, 11],
        ['Provide Shariah reference point', 2, 2, 5, 11],
        //Self-Development
        ['Organise team building initiative', 1, 2, 5, 12],
        ['Necessitate external apprenticeship programmes', 1, 2, 5, 12],
        ['Facilitate career planning development programmes (e.g work-related qualification; structured career path, succession planning, job enrichment programmes etc.)', 2, 2, 5, 12],
        //KA2
        //Health and safety requirements
        ['Provide a safe working environment (e.g. first-aid kits; fire extinguishers, safety evacuation zones etc.)', 1, 2, 6, 13],
        ['Provide free medical check-up for employees', 2, 2, 6, 13],
        ['Conduct regular (quarterly) audit and review of Organizational Health and Safety Regulation', 2, 2, 6, 13],
        ['Set up special health and safety committee/unit', 2, 2, 6, 13],
        ['Establish health and safety related policy', 2, 2, 6, 13],
        //KA3
        //Diversity of Workforce
        ['Establish employers – employees charter', 2, 2, 7, 14],
        ['Practice equal opportunity among employees (based on gender, religion, race, qualification etc.)', 2, 2, 7, 14],
        //KA4
        //Remuneration and Benefits
        ['Pay Remuneration – On-Time', 1, 2, 8, 15],
        ['Provide medical benefits inclusive of immediate family members', 1, 2, 8, 15],
        ['Provide fringe benefits (e.g takaful protection; payment of holiday benefits, travelling allowances, housing allowances etc.)', 2, 2, 8, 15],
        ['Subsidise umrah/haj expenses for employees and family members', 2, 2, 8, 15],
        ['Provide maternity leave', 1, 2, 8, 15],
        ['Provide special leave (e.g to take care of elderly parents, sick children, paternity leave)', 1, 2, 8, 15],
        //Facilities and Working Conditions
        ['Provide surau / prayer room', 1, 2, 8, 16],
        ['Provide conducive surau/prayer room (e.g. air-conditioning, carpets, ablution area etc.)', 2, 2, 8, 16],
        ['Provide facilities to improve working environment (e.g library, nursery/child care centre etc.)', 2, 2, 8, 16],
        ['Provide devices to improve working environment (e.g WIFI access, i-pads, hand phones etc.)', 2, 2, 8, 16],
        ['Allow flexible working hours', 2, 2, 8, 16],
        //Employees Volunteerism
        ['Encourage employee involvement in volunteering programs', 1, 2, 8, 17],
        ['Allow replacement leave for volunteerism work', 1, 2, 8, 17],
        //Healthy Working Environment
        ['Ensure hygienic practices in the work environment', 1, 2, 8, 18],
        ['Conduct health and/or safety awareness programs', 2, 2, 8, 18],
        ['Provide supplementary equipment/devices/materials for healthy working environment (e.g ionizer, sanitizer etc)', 2, 2, 8, 18],
        //KA5
        //Incentives and Bonuses
        ['Offer attractive incentives for excellent employees (e.g. bonuses, travel packages, shares etc.)', 2, 2, 9, 19], 
        //Innovative Ideas and Awards
        ['Offer reward for employees innovativeness and creativeness', 2, 2, 9, 20],        
        //Loyalty Packages
        ['Provide loyalty packages (e.g ESOS, long service awards)', 1, 2, 9, 21],        
        //KA6
        //Emplyees-Management Engagement
        ['Participate in Islamic-related celebrations (e.g Awal Muharam, Maulidur Rasul, etc )', 2, 2, 10, 22],        
        ['Assure transparency of employees\’ rights', 1, 2, 10, 22], 
        ['Organise employee-employer special activities (e.g. dinner, family day, sports competition)', 2, 2, 10, 22], 
        //Communication
        ['Encourage open door policy (access to appropriate channel of communication for feedback and grievance procedure)', 2, 2, 10, 23], 
        ['Establish whistle-blowing policies and procedures', 2, 2, 10, 23], 
        //Environmental
        //KA1
        //Policy Formulation
        ['Incorporate pollution prevention practices in business activities (e.g. recycling, saving water & energy, emission reduction, water discharge/leakage,recycling kiosksetc.)', 1, 3, 11, 24],
        //KA2
        //Energy Consumption
        ['Ensure efficient consumption of energy and water', 1, 3, 12, 25],
        //Sustainable Initiatives
        ['Tree-planting (or replanting) programmes and initiatives (within business surrounding)', 1, 3, 12, 26],
        ['Carry out environmental conservation activities (e.g. river/beach/park clean-up, tree-planting/replanting)', 2, 3, 12, 26],
        ['Practice sustainable waste management', 2, 3, 12, 26],
        ['Use cleaner or alternative technology in managing business operation (e.g. solar, wind, wave)', 2, 3, 12, 26],
        ['Encourage the deployment of eco-friendly corporate fleet vehicles', 2, 3, 12, 26],
        ['Reduce greenhouse gas emissions through green initiatives (e.g. installation of energy-saving lift systems, re-engineered ventilation and air-conditioning systems, efficient energy-saving lightings)', 2, 3, 12, 26],
        //Research and Development Programme
        ['Involvement in environmentally oriented R&D programmes (e.g. research on the management of and improvements to company’s products, by-products, production wastes etc.)', 2, 3, 12, 27],
        //Stakeholder Engagement
        ['Develop networking with ‘green’ stakeholder groups (e.g. professional bodies, NGOs)', 2, 3, 12, 28],
        ['Engage in community outreach programmes related to the environmental management operations of the company', 2, 3, 12, 28],
        //Continuous Monitoring Initiatives
        ['Benchmark best practices on environmental management and practice (e.g. Global Reporting Initiatives, ACCA-Malaysian environmental guidelines, corporate plans and policies, peer practices)', 2, 3, 12, 29],
        //Climate Change Policy
        ['Establish an environmental policy geared towards reducing adverse impacts on the environment (e.g. guidelines on use of green resources, green practices, zero waste)', 2, 3, 12, 30],
        //KA3
        //Prevention Initiaves
        ['Incorporate pollution prevention practices in business activities (e.g. recycling, saving water & energy, emission reduction, water discharge/leakage,recycling kiosksetc.)', 1, 3, 13, 31],
        ['Promote environmental-related practices among employees (carpooling, use of public transportation, recycling, saving water & energy etc.)', 2, 3, 13, 31],
        //Virtual Communication
        ['Conduct IT-related meeting [e.g. tele and video conferencing (board conference), webinar (web seminar)]', 2, 3, 13, 32],
        //KA4
        //Products
        ['Offer safe/green products and/or services (e.g. green credit card, green packaging, no animal testing)', 1, 3, 14, 33],
        ['Obtain related products and/or services certifications and/or awards', 2, 3, 14, 33],
        //Virtual Marketing
        ['Enhance e-marketing channels, web-marketing', 2, 3, 14, 34],
        //KA5
        //Environmental Preservation
        ['Conduct and/or sponsor activities to conserve biological diversity (e.g. protect endangered animal and plants)', 2, 3, 15, 35],
        //Education and Training
        ['Incorporate ibadah concept in environmental programmes for employees (e.g. workshops etc.)', 1, 3, 15, 36],
        //Marketplace
        //KA1
        //Policy Formulation
        ['Incorporate Islamic principles and values in all market-related policies', 1, 4, 16, 37], 
        //KA2
        //Shariah Compliant Products
        ['Ensure products and services are halal and safe (e.g. be vetted by Shariah Council Board, SIRIM etc.)', 1, 4, 17, 38], 
        ['Obtain related certifications (e.g. ISO standards, halal certificates etc.)', 1, 4, 17, 38], 
        ['Ensure Shariah compliant supply chain', 1, 4, 17, 38],
        ['Adopt adequate return policy (time, cost and delivery)', 2, 4, 17, 38],
        ['Ensure products are innovative and convenient to the customers', 2, 4, 17, 38], 
        //Fair and Ethical Emplyment Practices
        ['Create efficient, effective, clean, innovative, safe working environment within Shariah compliance process', 1, 4, 17, 39], 
        ['Promote fair and ethical employment practices (e.g. no child labour, minimum wages, indigenous rights, no forced and compulsory labour etc.)', 2, 4, 17, 39], 
        //KA3
        //Advertisement
        ['Ensure advertisement concepts are Shariah compliant (e.g. storyline, models, accurate information, suitable language, moderate spending etc.)', 1, 4, 18, 40], 
        ['Ensure accurate and precise advertisement (e.g. product description, product safety, product usage etc.)', 1, 4, 18, 40], 
        ['Provide full disclosure/ transparent information (e.g. product description, usage, ingredients etc.)', 1, 4, 18, 40], 
        ['Provide wider coverage through the use of multiple mediums', 2, 4, 18, 40], 
        //Pricing
        ['Promote affordable pricing to ensure fair distribution to all market segments', 2, 4, 18, 41],
        //Customers' Confidentiality Policy
        ['Obtain proper authorisation/consent from client or customer before releasing information', 2, 4, 18, 42], 
        //Customer Appreciation
        ['Offer additional benefits to customers (e.g. loyalty programmes, rewards etc.)', 2, 4, 18, 43], 
        //KA4
        ['Obtain product and/or services related feedbacks from customers (e.g. interviews, surveys, dialogues, websites, etc.)', 2, 4, 19, 44], 
        ['Engage in Islamic related forum/dialogue with stakeholders', 2, 4, 19, 44], 
        ['Conduct social engagement with customers (e.g. festive gatherings etc.)', 2, 4, 19, 44], 
    ];
    static $number = -1;
    return [
        'statement' => $questions[++$number][0],
        'type' => $questions[$number][1],
        'category' => $questions[$number][2],
        'key_area' => $questions[$number][3],
        'title' => $questions[$number][4],
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

$factory->define(App\LibraryContent::class, function (Faker $faker) {
    static $id = 1;

    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'src' => $faker->url,
        'publication' => $id,
        'author' => $id++,
    ];
});

$factory->define(App\LookupAssessmentCategory::class, function (Faker $faker) {
    $category = ['COMMUNITY', 'WORKPLACE', 'ENVIRONMENTAL', 'MARKETPLACE'];
    static $number = 0;
    return [
        'name' => $category[$number++],//$faker->word,
    ];
});

$factory->define(App\LookupAssessmentKeyArea::class, function (Faker $faker) {
    $key = ['SOCIAL DEVELOPMENT', 'EDUCATION AND AWARENESS', 'ECONOMIC DEVELOPMENT', 'HEALTH', 'TRAINING AND EDUCATION',
        'OCCUPATIONAL SAFETY AND HEALTH ADMINISTRATION (OSHA)', 'EQUITABLE OPPORTUNITY', 'EMPLOYMENT', 'AWARDS AND RECOGNITION',
        'LABOUR AND MANAGEMENT RELATIONS', 'ENVIRONMENTAL RELATED POLICY', 'CLIMATE CHANGE MITIGATION AND ADAPTATION', 'PREVENTION OF POLLUTION', 'GREEN PRODUCTS AND SERVICES',
        'PROTECTION AND RESTORATION OF THE NATURAL ENVIRONMENT', 'MARKET RELATED POLICIES', 'PRODUCT AND SERVICES', 'MARKETING', 'STAKEHOLDER ENGAGEMENT'];
    static $number = 0;
    return [
        'name' => $key[$number],//$faker->word,
        'lookup_assessment_title_id' => $number++
    ];
});

$factory->define(App\LookupAssessmentTitle::class, function (Faker $faker) {
    $title = [
        'Contribution for the needy', 
        'Community involvement', 
        'Culture', 
        'Contribution to the eligble recipients', 
        'Promoting Islamic values', 
        'Education', 
        'Economic development', 
        'Employment opportunity',
        'Health programmes for the public and the needy', 
        'Spiritual and Motivational Enhancement', 
        'Skill Enhancement',
        'Self-Development', 
        'Health and Safety Requirements', 
        'Diversity of Workforce', 
        'Remuneration and Benefits', 
        'Facilities and Working Conditions',
        'Employee Volunteerism',
        'Healthy Working Environment', 
        'Incentives and Bonuses', 
        'Innovative Ideas and Awards',
        'Loyalty Packages',
        'Employees-Management Engagement', 
        'Communication', 
        'Policy Formulation', 
        'Energy Consumption', 
        'Sustainable Initiatives', 
        'Research and Development Programme', 
        'Stakeholder Engagement', 
        'Continuous Monitoring Initiatives', 
        'Climate Change Policy',
        'Prevention Initiatives', 
        'Virtual Communication', 
        'Products', 
        'Virtual Marketing', 
        'Environmental Preservation', 
        'Education and Training',
        'Policy Formulation', 
        'Shariah Compliant Products', 
        'Fair and Ethical Employment Practices', 
        'Advertisement', 
        'Pricing', 
        'Customers\' Confidentiality Policy', 
        'Customer Appreciation',
        ''];
    static $number = 0;
    return [
        'name' => $title[$number],//$faker->word,
        'lookup_assessment_category_id' => $number++
    ];
});

$factory->define(App\LookupAssessmentType::class, function (Faker $faker) {
    $type = ['Vital', 'Recommended'];
    static $number = -1;
    return [
        'name' =>$type[++$number], //$faker->word,
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

$factory->define(App\LookupEntityType::class, function (Faker $faker) {
    static $number = 0;
    $name = [
        'admin',
        'user'
    ];

    return [
        'name' => $name[$number++]
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

$factory->define(App\Entity::class, function (Faker $faker) {
    static $number = 0;
    $emails = [ 'admin@gmail.com', 'user@gmail.com' ];
    $password = [ 'admin', 'user' ];
    $entityType = [ 1, 2 ];

    return [
        'email' => $emails[$number],
        'password' => Hash::make($password[$number]),
        'entity_type' => $entityType[$number++]
    ];
});

$factory->define(App\Admin::class, function (Faker $faker) {
    $number = 0;
    $entityId = [ 1 ];
    
    return [
        'name' => $faker->name,
        'staff_id' => str_random(15),
        'entity_id' => $entityId[$number]
    ];
});

$factory->define(App\User::class, function (Faker $faker) {
    $number = 0;
    $entityId = [ 2 ];

    return [
        'name' => $faker->name,
        'tel_no' => $faker->unique()->e164PhoneNumber,
        'fax_no' => $faker->unique()->e164PhoneNumber,
        'entity_id' => $entityId[$number]
    ];
});
