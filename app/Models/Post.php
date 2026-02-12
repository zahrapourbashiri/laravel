<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class Post extends Model
{
    use HasFactory;
    public function getdateattribute(){
        return Jalalian::fromCarbon(Carbon::parse($this->created_at))->format('Y-m-d H:i');
    }
    public function category(){

        return $this->belongsTo(Category::class);
    }

}

