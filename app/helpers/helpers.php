<?php
use Intervention\Image\Facades\Image;

if (!function_exists('editorContent')) {
    function editorContent($content)
    {
        $dom = new \DomDocument();
        $dom->loadHtml(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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
        if(!$filename)
            return "";

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
        return "cache/". $pathInfo['filename']. "_". $width . 'x' . $height.'.' . $pathInfo['extension'];
    }
}
