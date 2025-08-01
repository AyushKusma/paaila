<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


trait ImageStorageTrait
{
    public function set($path, $file, $name, $exists = null)
    {
        if (isset($exists)) {
            $this->remove($path, $exists);
        }
        $name = $name . Str::slug(Carbon::now()) . '.' . $file->getClientOriginalExtension();
        Storage::disk(config('filesystems.path'))->putFileAs($path, $file, $name);
        return $name;
    }

    public function get($path, $name)
    {
        return Storage::disk(config('filesystems.path'))->url($path . '/' . $name);
    }

    public function remove($path, $name = null)
    {
        if ($name)
            return Storage::disk(config('filesystems.path'))->delete($path . '/' . $name);
        else
            return Storage::disk(config('filesystems.path'))->deleteDirectory($path);
    }

    public function bulkStorage($path, $files, $name)
    {
        $fileNames = [];
        foreach ($files as $key => $file) {
            array_push($fileNames, $this->set($path, $file, $name . $key));
        }
        return $fileNames;
    }
}
