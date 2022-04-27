<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskHelp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'title',
        'content'

    ];
}