<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormInfo extends Model
{
    protected $fillable = ['name', 'email', 'occupation', 'company', 'phone'];
}
