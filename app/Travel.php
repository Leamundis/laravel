<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public static function getOneTravel($id)
    {
        return Travel::findOrFail($id);
    }

    public static function getAllTravels()
    {
        $travels = Travel::All();
        return $travels;
    }
}
