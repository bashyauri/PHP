<?php
class StringHelper{
    
    static function countVowel(string $content= ''):int
    {
        $vowels = ['a','e','i','o','u'];
        $count = 0;
        foreach($vowels as $value){
            $count+=substr_count(strtolower($content),$value);     
            
        }
        return $count;
     
    }
}
echo StringHelper::countVowel("This is a String to Count Vowels");