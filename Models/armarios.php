<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class armarios extends Model
{
    protected $fillable =['cor','nome','compartimento1','compartimento2','compartimento3'];
    use HasFactory;
}
