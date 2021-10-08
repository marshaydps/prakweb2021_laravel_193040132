<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Marsha Yunita Dwi Putri Sarjono",
        "email" => "193040132.marsha@mail.unpas.ac.id",
        "image" => "kucing.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marsha Yunita DPS",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam ex autem veritatis aspernatur possimus porro error illum non fugit, est quia reprehenderit ipsum esse officia consequatur unde? Accusamus rem labore blanditiis aut incidunt natus tempora fugit vero! Sapiente aliquid explicabo quasi totam laudantium, mollitia nesciunt numquam consequatur necessitatibus soluta velit odit nam accusantium vitae? Praesentium officiis qui aspernatur doloremque saepe distinctio? Laboriosam qui magnam nam expedita atque unde et quas. Tenetur ducimus maiores unde saepe dolorem, blanditiis temporibus perferendis omnis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "DPS, Marshay",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam necessitatibus eius optio omnis molestiae officia aspernatur, beatae cum explicabo officiis neque labore esse tempora, laborum ex temporibus nemo, veniam accusamus at totam consequatur nobis. Quibusdam nostrum non saepe fugit, commodi provident doloremque velit dolorum nesciunt aliquam quasi odit suscipit! Esse blanditiis possimus saepe ducimus maxime veniam ab, sint non a. Ullam minus beatae similique, aperiam distinctio fuga commodi ea harum, quo, perferendis odio deleniti dicta quis eligendi sint sunt quod soluta adipisci doloribus. Corrupti ratione, praesentium odit, eius ut veritatis amet nihil quo dolorum iusto eum, quaerat veniam sed aliquid?"
        ],
    
    ];


    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route:: get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marsha Yunita DPS",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam ex autem veritatis aspernatur possimus porro error illum non fugit, est quia reprehenderit ipsum esse officia consequatur unde? Accusamus rem labore blanditiis aut incidunt natus tempora fugit vero! Sapiente aliquid explicabo quasi totam laudantium, mollitia nesciunt numquam consequatur necessitatibus soluta velit odit nam accusantium vitae? Praesentium officiis qui aspernatur doloremque saepe distinctio? Laboriosam qui magnam nam expedita atque unde et quas. Tenetur ducimus maiores unde saepe dolorem, blanditiis temporibus perferendis omnis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "DPS, Marshay",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam necessitatibus eius optio omnis molestiae officia aspernatur, beatae cum explicabo officiis neque labore esse tempora, laborum ex temporibus nemo, veniam accusamus at totam consequatur nobis. Quibusdam nostrum non saepe fugit, commodi provident doloremque velit dolorum nesciunt aliquam quasi odit suscipit! Esse blanditiis possimus saepe ducimus maxime veniam ab, sint non a. Ullam minus beatae similique, aperiam distinctio fuga commodi ea harum, quo, perferendis odio deleniti dicta quis eligendi sint sunt quod soluta adipisci doloribus. Corrupti ratione, praesentium odit, eius ut veritatis amet nihil quo dolorum iusto eum, quaerat veniam sed aliquid?"
        ],
    
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;

        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});