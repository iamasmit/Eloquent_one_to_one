<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = [];

    // create a one to one relationship with contact Model
    public function contact(){
        return $this->hasOne(Contact::class);
    }
}
