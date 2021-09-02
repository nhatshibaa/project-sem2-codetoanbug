<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AboutUsModel extends Model
{
    use HasFactory;

    public static function getAboutData()
    {
        $value = DB::table('configs')->get();
        return $value;
    }
}
