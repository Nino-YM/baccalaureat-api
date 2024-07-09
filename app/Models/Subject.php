<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_subject';

    protected $fillable = [
        'name',
    ];

    public function results()
    {
        return $this->hasMany(Result::class, 'subject_id');
    }
}
