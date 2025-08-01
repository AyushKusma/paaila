<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait GenerateSlug
{
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
            $i = 1;
            while (static::where('slug', $model->slug)->exists()) {
                $model->slug = Str::slug($model->name) . '-' . $i;
                $i++;
            }
        });
    }
}
