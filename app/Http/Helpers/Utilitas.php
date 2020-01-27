<?php

if (!function_exists('unggah')) {
    function unggahCanvas($file, $tempat, $dimensi = null, $namaFile = null)
    {
        $lokasi = storage_path($tempat);
        if (!File::isDirectory($lokasi)) {
            File::makeDirectory($lokasi);
        }

        if (!empty($namaFile)) {
            $simpan = $lokasi . '/' . $namaFile . '.' . $file->getClientOriginalExtension();
            hapus($simpan);
            Image::make($file)->save($simpan);
        } else {
            $simpan = $lokasi . '/' . 'img.' . $file->getClientOriginalExtension();
            hapus($simpan);
            Image::make($file)->save($simpan);
        }

        if (!empty($dimensi)) {
            $canvas = Image::canvas($dimensi[0], $dimensi[1]);
            $resizeImage  = Image::make($file)->fit($dimensi[0], $dimensi[1]);
            $canvas->insert($resizeImage, 'center');
            $simpan = $lokasi . '/' . $dimensi[0] . '.' . $file->getClientOriginalExtension();
            hapus($simpan);
            $canvas->save($simpan);
        }
    }
    
}
if (!function_exists('unggahResize')) {
    function unggahResize($file, $tempat, $dimensi = null, $namaFile = null, $hapus = false)
    {
        $lokasi = storage_path($tempat);
        if ($hapus)
            File::deleteDirectory($lokasi);
        if (!File::isDirectory($lokasi)) {
            File::makeDirectory($lokasi);
        }

        if (!empty($namaFile)) {
            $simpan = $lokasi . '/' . $namaFile . '.' . $file->getClientOriginalExtension();
            hapus($simpan);
            Image::make($file)->save($simpan);
        } else {
            $simpan = $lokasi . '/' . 'img.' . $file->getClientOriginalExtension();
            hapus($simpan);
            Image::make($file)->save($simpan);
        }

        if (!empty($dimensi)) {
            $simpan = $lokasi . '/' . $dimensi[0] . '.' . $file->getClientOriginalExtension();
            hapus($simpan);
            Image::make($file)->resize($dimensi[0], $dimensi[1],function ($constraint) {
                $constraint->aspectRatio();
            })
            ->resizeCanvas($dimensi[0], $dimensi[1])
            ->save($simpan);
            
        }
    }
}
if (!function_exists('hapus')) {
    function hapus($file)
    {
        if (\File::exists($file)) {
            \File::delete($file);
        }
    }
}
if (!function_exists('hapusFolder')) {
    function hapusFolder($folder)
    {
        if (\File::exists($folder)) {
            \File::deleteDirectory($folder);
        }
    }
}
