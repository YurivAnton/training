<?php


class File
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $_SERVER['DOCUMENT_ROOT'].'/'.$filePath;
    }
    public function getPath()
    {
        if(file_exists($this->filePath)){
            return $this->filePath;
        } else {
            return 'File not exist';
        }
    }
    public function getDir()
    {
        if(file_exists($this->filePath)){
            $dir = array_reverse(explode('/', $this->filePath));
            return $dir[1];
            //return preg_replace('##', '', $this->filePath);
        } else {
            return 'File not exist';
        }
    }
    public function getName()
    {
        if(file_exists($this->filePath)){
            $dir = array_reverse(explode('/', $this->filePath));
            return $dir[0];
            //return preg_replace('#.+/#', '', $this->filePath);
        } else {
            return 'File not exist';
        }
    }
    public function getExt()
    {
        if(file_exists($this->filePath)){
            $arr = array_reverse(explode('/', $this->filePath));
            return preg_replace('#.+\.#', '', $arr[0]);
            //return preg_replace('#.+\.#', '', $this->filePath);
        }
    }
    public function getSize()
    {
        if(file_exists($this->filePath)){
            return filesize($this->filePath);
        }
    }
    public function getText()
    {
        if(file_exists($this->filePath)){
            return file_get_contents($this->filePath);
        }
    }
    public function setText($text)
    {
        if(file_exists($this->filePath)){
            file_put_contents($this->filePath, $text);
        }
    }
    public function appendText($text)
    {
        if(file_exists($this->filePath)){
            file_put_contents($this->filePath, self::getText().$text);
        }
    }
    public function copy($copyPath)
    {
        if(file_exists($this->filePath)){
            copy($this->filePath, $copyPath);
        }
    }
    public function delete()
    {
        return unlink($this->filePath);
    }
    public function rename($newName)
    {
        return rename($this->filePath, $newName);
    }
    public function replace($newPath)
    {
        return rename($this->filePath, $newPath);
    }
}