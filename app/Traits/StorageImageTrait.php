<?php

namespace App\Traits;
use Storage;
use Illuminate\Support\Str;
trait StorageImageTrait{
	public function storageTraitUpload($request,$fieldName,$folderName)
	{
		if ($request->hasFile($fieldName)) {
			$file = $request->$fieldName;
        $fileNameOrigin = $file->getClientOriginalName();
        $fileNameMash=  Str::random(20).'.'.$file->getClientOriginalExtension();
        $filepath = $request->file($fieldName)->storeAs('public/'.$folderName . '/' . auth()->id(),$fileNameMash);
        $dataUploadTrait=[
            'file_name'=>$fileNameOrigin,
            'file_path'=>Storage::url($filepath)
        ];	
         return $dataUploadTrait;	

		}
		return null;
	}
}