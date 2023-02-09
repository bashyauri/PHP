<?php
class FileHelper{
    static function hasData($file):bool
    {
        if(!file_exists($file)){
            echo "File {$file} does not exist".PHP_EOL;
            return False;
        }
        $content = file_get_contents($file);
        if(empty($content)){
            return False;
        }else{
            return True;
        }
    }
}
if(FileHelper::hasData("Test.txt")){
    echo "Data Found";
}
else{
    echo "Data Not Found";
}