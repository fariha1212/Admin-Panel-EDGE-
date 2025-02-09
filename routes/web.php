<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index')->with('posts', session('posts', []));
})->name('post.index');

Route::get('/post/create', function () {
    return view('create');
})->name('post.create');

Route::post('/post/store', function (Request $request) {
    $post = [
        'id' => uniqid(),
        'title' => $request->title,
        'description' => $request->description,
    ];

    $posts = session('posts', []);
    $posts[] = $post;

    session(['posts' => $posts]);

    return redirect()->route('post.index');
})->name('post.store');

Route::get('/post/{id}', function ($id) {
    $posts = session('posts', []);
    $post = collect($posts)->firstWhere('id', $id);

    return view('show', compact('post'));
})->name('post.show');
;