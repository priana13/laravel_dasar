<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'content' => $faker->sentence(100),
        'slug'=>uniqid(),
        'is_published' => 0
    ];
});





/*

1. Membuat Factory: php artisan make:factory PostFactory
2. Isi sesuai kebutuhan kemudian
3. dibagian seeder tambhkan pada method run : factory(Post::class,150)->create();
4. Jalankan perintah : php artisan db:seed

Jika ketika menjalankan gagal coba jalankan composer dum-autoload
composer dump-autoload

mudah bukan... :V

*/