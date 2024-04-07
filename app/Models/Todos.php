<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    use HasFactory;
    protected $table = 'todos';
    public $fillable =[
        'title',
        'status',
        'description'
    ];
}
