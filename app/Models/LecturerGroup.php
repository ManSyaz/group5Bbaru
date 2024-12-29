<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerGroup extends Model
{
    use HasFactory;

    public $table = 'lecturer_groups';

    protected $fillable = [
        'name',
        'part',
    ];
}
