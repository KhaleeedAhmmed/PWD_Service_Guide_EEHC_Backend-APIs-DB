<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

trait FileManagement
{
    public function uploadFile($request, $key, $folder)
    {
        if (!$request->hasFile($key))
            return null;
     //   $path = $request->file($key)->store($folder, 'public');
        $image_name = rand(2000, 365840) . '_' . time() . '.' . $request->file($key)->getClientOriginalExtension();
        $path = $request->file($key)->move(public_path('../../../api.4fdev.com/basmety/storage/'.$folder),$image_name);
        return basename($path);
    }

    public function uploadImage($request, $key, $folder)
    {
        // if (!$request->hasFile($key))
        //     return null;
        $image_name = rand(2000, 365840) . '_' . time() . '.' . $request->getClientOriginalExtension();
        $path = $request->move(public_path('../../../api.4fdev.com/basmety/storage/'.$folder),$image_name);
       return basename($path);
    }

    public function uploadImages($images, $model, $foreign, $path = '')
    {
        if (is_array($images)) {
            foreach ($images as $image) {
                $name = uniqid(rand()) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $name);
                $model::create([
                    $foreign['key'] => $foreign['value'],
                    'name' => $name,
                ]);
            }
        } elseif ($images) {
            $name = uniqid(rand()) . '.' . $images->getClientOriginalExtension();
            $images->move($path, $name);
            $model::create($images);
        }
    }

    protected function deleteFile($path, $disk = "public")
    {
        return Storage::disk($disk)->delete($path);
    }

    protected function loadFile($path, $disk = "public")
    {
        return Storage::disk($disk)->url($path);
    }

    protected function uniqueName($path, $disk = "public")
    {
        $name = uniqid() . '_' . md5(Carbon::now());
        if (Storage::disk($disk)->has($path . '/' . $name)) {
            $this->uniqueName($disk, $path);
        } else {
            return $name;
        }
    }

    protected function uniqueDirName($path, $disk = "public")
    {
        $name = uniqid();
        if (Storage::disk($disk)->has($path . '/' . $name)) {
            $this->uniqueDirName($path, $disk);
        } else {
            return '/' . $path . '/' . $name;
        }
    }
}
