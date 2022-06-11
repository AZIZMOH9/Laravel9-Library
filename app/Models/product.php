<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    #many to one
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function borrows(){
        return $this->belongsToMany(Borrow::class,'borrows');
    }
}
