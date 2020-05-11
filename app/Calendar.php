<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{   
    protected $fillable = ['name'];
    
    public static function makeNewName () {
        $name = self::generateStr();
        $isexist = Calendar::where('name', $name)->first();
        if ($isexist) {
            return makeNewName();
        }
        return $name;
    }
    
    public static function generateStr () {
        /*
         * генерируем случайную строку $str 
         * $num - число символов
         */
        $num = 10;
        $str = '';
        $charset = '0123456789abcdefghjklmnopqastuwxyz';
        $sizeStr = strlen($charset);
        for ($i = 0; $i <= $num; $i++){
            $generatedNum = rand(0, $sizeStr-1);
            $str .= $charset[$generatedNum];
        }
        return $str;
    }
}
