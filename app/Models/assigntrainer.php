<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\trainer;
class assigntrainer extends Model
{
    use HasFactory;
    public function trainer(){

        return $this->belongsTo(trainer::class);

    }
}
