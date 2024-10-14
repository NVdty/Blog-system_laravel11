<?php

Namespace App\Models;
use Illuminate\Support\Arr;




class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'nvdty',
                'body' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima voluptas id, incidunt cum beatae in!
                Dolorem placeat harum inventore quibusdam eaque nisi aut adipisci. Corrupti accusantium velit molestias est
                nisi.'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'nvdtyaaa',
                'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda at sit numquam vero non officiis delectus
                voluptas, repellat magni corrupti! Officiis ea vero assumenda eum eligendi consectetur praesentium corporis
                libero!'
            ],
        ];
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post){
            abort(404);
        }
        return $post;
    }
}