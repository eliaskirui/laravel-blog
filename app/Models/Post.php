<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'user_id',
        'body'
    ];

    protected $appends = [
        'imageLink'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function imageLink(): Attribute
    {
        $image = url('/images/default.jpeg');

        if ($url = $this->getFirstMediaUrl('image')) {
            $image = url($url);
        }

        return Attribute::make(
            get: fn() => $image
        );
    }
}
