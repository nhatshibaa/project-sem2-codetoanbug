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

    public function cityName()
    {
        return $this->hasOne(City::class, 'matp', 'city');
    }

    public function districtName()
    {
        return $this->hasOne(District::class, 'maqh', 'district');
    }

    public function wardName()
    {
        return $this->hasOne(Ward::class, 'xaid', 'ward');
    }

    protected $table='users';
}
