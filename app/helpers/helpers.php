<?php
use Intervention\Image\Facades\Image;

if (!function_exists('editorContent')) {
    function editorContent($content)
    {
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                $filename = uniqid();
                $filepath = "images/$filename.$mimetype";

                $image = Image::make($src)
                  ->encode($mimetype, 100)
                  ->save(public_path($filepath));
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }


        return $dom->saveHTML();
    }
}
if (!function_exists('resizeImage')) {
    function resizeImage($filename, $width, $height)
    {
        $pathInfo = pathinfo($filename);

        $newImage = public_path('images/cache'). "/".  $pathInfo['filename']. "_". $width . 'x' . $height.'.' . $pathInfo['extension'];

        if (is_file($newImage)) {
            return "cache/". $pathInfo['filename']. "_". $width . 'x' . $height .'.'. $pathInfo['extension'];
        }
        if(!file_exists(public_path('images'). "/". $filename)) {
            return "";
        }
        $image = Image::make(public_path('images'). "/". $filename);
        $image->resize($width, $height);
        $image->save($newImage);
<<<<<<< HEAD
        return "cache/". $pathInfo['filename']. "_". $width . 'x' . $height . '.'. $pathInfo['extension'];
=======
        return "cache/". $pathInfo['filename']. "_". $width . 'x' . $height.'.' . $pathInfo['extension'];
>>>>>>> ae41688249fd49b3b822ed9f3005050a0b9ad2ea
    }
}
