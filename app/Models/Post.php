<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $slug;
    public $date;
    public $excerpt;
    public $body;

    public function __construct($title, $slug, $date, $excerpt, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
    }

    static function all()
    {
        return cache()->rememberForever(
            'posts.all',
            function () {
                return collect(File::files(resource_path("posts")))
                    ->map(fn($file) => YamlFrontMatter::parseFile($file))
                    ->map(fn($document) => new Post(
                        $document->title,
                        $document->slug,
                        $document->date,
                        $document->excerpt,
                        $document->body()
                    ))
                    ->sortByDesc('date');
            }
        );
    }

    static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);

        /*$path = resource_path("/posts/{$slug}.html");

        if (!file_exists($path)) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", now()->addSecond(10), fn() => file_get_contents($path));*/
    }
}
