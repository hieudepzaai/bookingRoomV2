<?php

namespace App\Service;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileService
{
    public static function UploadFile(string $path ,UploadedFile $file) :string {
        return $path = "/".Storage::putFileAs($path, $file, $file->getClientOriginalName());
    }
    public static function UploadFileAs(string $path ,UploadedFile $file , $name) :string {
        return $path = "/".Storage::putFileAs($path, $file, $name.".".$file->getClientOriginalExtension());
    }
}
