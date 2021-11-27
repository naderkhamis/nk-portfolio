<?php

namespace App\Http\Traits;

trait UploadFileTrait
{
    public function upload($request, $data)
    {
        if ($request->hasFile('image')) {
            $destination = 'uploads/images/';
            $file = $request->file('image');
        } elseif ($request->hasFile('pdf')) {
            $destination = 'uploads/files/';
            $file = $request->file('pdf');
        } else {
            return $data;
        }
        $file->move($destination, date('mdy-his') . '.' . $file->getClientOriginalExtension());
        return ($destination . date('mdy-his') . '.' . $file->getClientOriginalExtension());
    }
}