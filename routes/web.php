<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post_id}', [PostController::class, 'show']);

Route::get('/prueba', function(){
    /* Crear nuevo post

    $post = new Post;
    
    $post->title = 'Titulo de prueba 3';
    $post->content = 'Contenido de prueba 3';
    $post->category = 'Categoria de prueba 3';

    $post->save();

    return $post;
    */

    /* Recuperar post por ID 
    $post = Post::find(1);
    */

    /*
    // Recuperar post por el valor de la columna especificada y recuperar la primera coincidencia
    $post = Post::where('title', 'Titulo de prueba 1')->first();
    // Modificar propiedades del post recuperado
    $post->category = 'Desarrollo Web';
    $post->save();
    return $post;
    */

    /* Recuperar posts con ID mayor o igual que 2
    $posts = Post::where('id', '>=', '2')->get();
    return $posts;
    */

    /* Recuperar todos los registros y listarlos de manera descendente de acuerdo a la columna ID
    $posts = Post::orderBy('id', 'desc')->get();
    return $posts;
    */

    /* Recuperar todos los registros, listarlos de manera ascendente segun la categoria y tomar solo los 2 primeros registros
    $posts = Post::orderBy('category', 'asc')->select('title', 'category')->take(2)->get();
    return $posts;
    */

    // Eliminar un registro
    $post = Post::find(1);
    $post->delete();
    return "Eliminado";
});