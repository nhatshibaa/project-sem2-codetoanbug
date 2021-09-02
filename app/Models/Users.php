<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        "idNumber",
        "username",
        "password",
        "fullName",
        "gender",
        "age",
        "phone",
        "address",
        "status",
        "imgIdCardFront",
        "imgIdCardBack",
        "created_at",
        "updated_at"
    ];
}
