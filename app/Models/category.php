<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    #one to many
    public function product(){
        return $this->hasMany(product::class);
    }
    public function parent(){
        return $this->belongsTo(category::class,'parent_id');
    }
    public function children(){
        return $this->hasMany(category::class,'parent_id');
    }
}
