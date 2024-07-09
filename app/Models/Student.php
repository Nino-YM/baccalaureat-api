<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_student';
    
    protected $fillable = [
        'name', 'email',
    ];

    public function results()
    {
        return $this->hasMany(Result::class, 'student_id');
    }
}
