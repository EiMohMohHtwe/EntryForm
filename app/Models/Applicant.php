<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function families()
    {
        return $this->hasMany(Family_Structure::class);
    }
}
