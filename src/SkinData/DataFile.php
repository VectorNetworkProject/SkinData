<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/08/03
 * Time: 8:48
 */

namespace SkinData;


class DataFile
{
    private $path;

    public function __construct(string $file)
    {
        $this->path = Main::$path . '/' . $file . '/';
        if(!file_exists($this->path)){
            mkdir($this->path, 0755, true);
        }
    }

    public function write(string $file, string $data) {
        file_put_contents($this->path.$file, $data, 9);
    }
}