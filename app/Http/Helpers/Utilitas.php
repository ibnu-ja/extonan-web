<?php

use Image;
use File;
use Illuminate\Support\Str;

if (!function_exists('unggah')) {
    function unggah($file, $namaFile, $tempat, $dimensi)
    {        
        $lokasi = storage_path($tempat);
        if (File::isDirectory($lokasi)) {
            File::deleteDirectory($lokasi);
        }

        if (!File::isDirectory($lokasi)) {
            File::makeDirectory($lokasi);
        }

        Image::make($file)->save($lokasi . '/' . $namaFile);

        foreach ($dimensi as $row) {
            $canvas = Image::canvas($row[0], $row[1]);
            $resizeImage  = Image::make($file)->fit($row[0], $row[1]);

            if (!File::isDirectory($lokasi . '/' . $row[0])) {
                File::makeDirectory($lokasi . '/' . $row[0]);
            }

            $canvas->insert($resizeImage, 'center');
            $canvas->save($lokasi . '/' . $row[0] . '/' . $namaFile);
        }
    }
}



function createSlug($title, $id = 0, $allSlugs)
{
    // Normalize the title
    $slug = Str::slug($title, '-');

    // Get any that could possibly be related.
    // This cuts the queries down by doing it once.

    // If we haven't used it before then we are all good.
    if (!$allSlugs->contains('id', $slug)) {
        return $slug;
    }
    // Just append numbers like a savage until we find not used.
    for ($i = 1; $i <= 10; $i++) {
        $newSlug = $slug . '-' . $i;
        if (!$allSlugs->contains('slug', $newSlug)) {
            return $newSlug;
        }
    }

    throw new \Exception('Can not create a unique slug');
}