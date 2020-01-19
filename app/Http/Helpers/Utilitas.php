<?php

if (!function_exists('unggah')) {
    function unggah($file, $tempat, $dimensi = null, $namaFile = null)
    {
        $lokasi = storage_path($tempat);
        if (File::isDirectory($lokasi)) {
            File::deleteDirectory($lokasi);
        }
        if (!empty($namaFile)) {
            Image::make($file)->save($lokasi . '/' . $namaFile);
        }
        else {
            Image::make($file)->save($lokasi . '/' . 'original.' . $file->getClientOriginalExtension());
        }

        if (is_array($dimensi)) {
            foreach ($this->dimensions as $row) {
                $canvas = Image::canvas($row[0], $row[1]);
                $resizeImage  = Image::make($file)->fit($row[0], $row[1]);
                $canvas->insert($resizeImage, 'center');
                $canvas->save($lokasi . '/' . $row[0] . '.' . $file->getClientOriginalExtension());
            }
        }
    }
}