<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'phone',
        'nic',
        'address',
        'contact_person'

    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
