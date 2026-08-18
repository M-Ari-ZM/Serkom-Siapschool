<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $fillable = ['play_store_url', 'app_store_url', 'whatsapp_cs', 'copyright_text', 'app_screenshots'];

    protected $casts = [
        'app_screenshots' => 'array',
    ];
}
