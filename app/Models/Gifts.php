<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gifts extends Model
{
    use HasFactory;

    public function account()
    {
        return $this->hasOne(Users::class, 'id', 'idUser');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categoryId');
    }

    protected $table = 'gifts';

    public function getListPhotoAttribute()
    {
        $array_image = [];
        if ($this->images) {
            $array_image = explode(',', $this->images);
        }
        return $array_image;
    }

    public function getFirstImgAttribute()
    {
        $array_image = $this->listPhoto;
        if (count($array_image) >0){
            return $array_image[0];
        } else {
            return 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg';
        }
    }
}
