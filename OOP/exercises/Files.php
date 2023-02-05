<?php

class Files{
    public $fileName;
    public $fileHandler;
    public $fileSize;
    public $content;
    public $isFound;

    function __construct($fileName){
        $this->fileHandler = null;
        $this->isFound = false;
        //check if file exists
        if (file_exists($fileName)) {
            // is this a file
           if (is_file($fileName)){
            $this->isFound = true;
           }
        }
        if($this->isFound){
            $this->fileHandler = fopen($fileName, 'r');
            $this->fileSize = filesize($fileName);
        }
    }
    function displayContent()
    {
        if($this->isFound){
            $content = fread($this->fileHandler,$this->fileSize);
            return $content.PHP_EOL;
        }
      
        else {
            return "No content found";
        }
    }
    function __destruct(){
        if ($this->isFound){
            fclose($this->fileHandler);
            echo "File is closed".PHP_EOL;
        }
    }

}
$file1 = new Files("text1.txt");
echo $file1->displayContent();