<?php

use Image;
use File;

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