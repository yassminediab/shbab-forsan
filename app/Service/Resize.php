<?php
namespace App\Service;

class Image
{
    protected static function getImageDirectory()
    {
        return public_path('images'). '/';
    }

    public function resize($filename, $width, $height)
    {
        if (!is_file(self::getImageDirectory() . $filename) || substr(str_replace('\\', '/', realpath(self::getImageDirectory() . $filename)), 0, strlen(self::getImageDirectory())) != str_replace('\\', '/', self::getImageDirectory())) {
            return;
        }

        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        $image_old = $filename;
        $image_new = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . $extension;

        if (!is_file(self::getImageDirectory() . $image_new) || (filemtime(self::getImageDirectory() . $image_old) > filemtime(self::getImageDirectory() . $image_new))) {
            list($width_orig, $height_orig, $image_type) = getimagesize(self::getImageDirectory() . $image_old);
                 
            if (!in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF))) {
                return self::getImageDirectory() . $image_old;
            }
                        
            $path = '';

            $directories = explode('/', dirname($image_new));

            foreach ($directories as $directory) {
                $path = $path . '/' . $directory;

                if (!is_dir(self::getImageDirectory() . $path)) {
                    @mkdir(self::getImageDirectory() . $path, 0777);
                }
            }

            if ($width_orig != $width || $height_orig != $height) {
                $image = new Image(self::getImageDirectory() . $image_old);
                $image->resize($width, $height);
                $image->save(self::getImageDirectory() . $image_new);
            } else {
                copy(self::getImageDirectory() . $image_old, self::getImageDirectory() . $image_new);
            }
        }
        
        $image_new = str_replace(' ', '%20', $image_new);  // fix bug when attach image on email (gmail.com). it is automatic changing space " " to +
        
        return $image_new;
    }
}
