<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role' => $faker->word,

        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title'       => $faker->sentence,
        'type'       => $faker->word,
        'description'  => $faker->text,
        'status'      => $faker->boolean,
        'image'       => $faker->imageUrl($width = 640, $height = 480),
        'user_id'     => $faker->numberBetween($min = 1, $max =50),

    ];
});


$factory->define(App\Item::class,function(Faker\Generator $faker){
    return [
        'title'       => $faker->sentence,
        'descripion'  => $faker->text,
        'status'      => $faker->boolean,
        'image'       => $faker->imageUrl($width = 640, $height = 480),
        'price'       =>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'menu_id'     => $faker->numberBetween($min = 1, $max =10),
        'user_id'     => $faker->numberBetween($min = 1, $max =50),

    ];
});

$factory->define(App\Meal::class,function(Faker\Generator $faker){
    return [
        'title'       => $faker->sentence,
        'price'       =>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'descripion'  => $faker->text,
        'status'      => $faker->boolean,
        'image'       => $faker->imageUrl($width = 640, $height = 480),
        'user_id'     => $faker->numberBetween($min = 1, $max =10),

    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,

        'address' => $faker->address,
        'city' => $faker->city,
        'phone' => $faker->e164PhoneNumber,

        'password' => $password ?: $password = bcrypt('secret'),

    ];
});


$factory->define(App\Order::class,function(Faker\Generator $faker){
    return [
        'total'         =>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'status'        => $faker->boolean,
        'cashIn'        =>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'payment'       =>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'change'        =>$faker->randomNumber($nbDigits = NULL, $strict = false),
        //'customer_id'   => $faker->numberBetween($min = 1, $max =100),

    ];
});

$factory->define(App\Comment::class,function(Faker\Generator $faker){
    return [
        'title'       => $faker->sentence,
        'descripion'  => $faker->text,
        'status'      => $faker->boolean,
        'image'       => $faker->imageUrl($width = 640, $height = 480),
        'customer_id'     => $faker->numberBetween($min =1, $max =100),
        'order_id'     => $faker->numberBetween($min = 1, $max =100),
        'rate'     => $faker->numberBetween($min = 1, $max =5),

    ];
});

$factory->define(App\MealItem::class, function (Faker\Generator $faker) {
    return [
        'discount'     => $faker->numberBetween($min = 1, $max =5),
        'meal_id'     => $faker->numberBetween($min =1, $max =100),
        'item_id'     => $faker->numberBetween($min = 1, $max =100),

    ];
});

$factory->define(App\OrderItem::class, function (Faker\Generator $faker) {
    return [
        
        'order_id'     => $faker->numberBetween($min =1, $max =100),
        'item_id'     => $faker->numberBetween($min = 1, $max =100),

    ];
});

$factory->define(App\OrderUser::class, function (Faker\Generator $faker) {
    return [
        
        'order_id'    => $faker->numberBetween($min =1, $max =100),
        'user_id'     => $faker->numberBetween($min = 1, $max =100),
        'type'        => $faker->word,

    ];
});