<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
class workshop extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(category::class);
    }
}
