<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = [
        'links' => [
            'about' => [
                'text' => 'about',
                'route' => 'about'
            ],
            'more_info' => [
                'text' => 'more info',
                'route' => 'more-info'
            ],
            'contact_us' => [
                'text' => 'contact us',
                'route' => 'contact-us'
            ]
        ],
        'texts' => [
            'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, consectetur qui molestiae dolorum fugiat quam et possimus iusto quidem repellendus recusandae, impedit ea quos vitae hic, ad assumenda incidunt voluptatibus?',
            'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore sunt praesentium nulla consequuntur provident. Odio accusamus, doloribus eos nesciunt quis quam quas minima nisi cupiditate atque dolor eaque, dolorum delectus.',
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deleniti, dolor cum accusamus, repellendus, blanditiis hic maiores consectetur unde voluptate dignissimos expedita tenetur labore eum molestias doloremque quae nihil! In?',
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique voluptatum consequatur dolorem illum. Placeat quos voluptas commodi quasi numquam. Rerum maxime ut tenetur officia dolore, molestias numquam cupiditate veniam ipsam!',
            'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae labore vel rem voluptatum facilis. Itaque, rem fugiat vitae dicta deleniti soluta? Porro ad dicta itaque repellendus illo tempore error qui!'
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {

    return view('about');

})->name('about');

Route::get('/more_info', function () {

    return view('moreinfo');

})->name('more-info');

Route::get('/contact_us', function () {

    return view('contactus');

})->name('contact-us');
