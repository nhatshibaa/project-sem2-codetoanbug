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

    public function getListPhotoAttribute(){
        $array_image = [];
        if ($this->images) {
            $array_image = explode(',', $this->images);
        }
        return $array_image;
    }
}
