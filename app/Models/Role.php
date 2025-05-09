<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'tbrole';

    protected $fillable = ['rolename', 'desc', 'permissionid'];

    protected $casts = [
        'permissionid' => 'integer',
    ];
}
