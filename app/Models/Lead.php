<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    // Menentukan kolom mana saja yang boleh diisi melalui form
    protected $fillable = ['name', 'school_name', 'phone_email', 'message'];
}