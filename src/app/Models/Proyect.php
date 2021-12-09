<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    use HasFactory;
    #protected  $fillable = ['title', 'url', 'description'];
    protected $guarded = [];

    function getRouteKeyName()
    {
        return 'url';
    }
    
}
