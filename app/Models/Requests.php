<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;
    protected $table = 'requests';

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function gift()
    {
        return $this->hasOne(Gifts::class, 'id', 'giftId');
    }

    public function user()
    {
        return $this->hasOne(Users::class, 'id', 'idUser');
    }

    public function userRequest()
    {
        return $this->hasOne(Users::class, 'id', 'idUserRequest');
    }

    public function getButtonAttribute(){
        $statusRequest = $this->status;
        if ($statusRequest == -1 || $statusRequest == 1){
            return 'disabled';
        }else{
            return '';
        }
    }

    public function getAcceptButtonAttribute(){

    }

    public function getCancelButtonAttribute(){

    }
}
