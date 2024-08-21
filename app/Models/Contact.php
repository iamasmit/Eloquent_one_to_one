<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    // inverse Relationship from the student table belongsTo
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
