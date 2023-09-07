<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'first_name',
        'email',
        'tel',
        'company',
        'activity',
        'showcase_site',
        'e_commerce',
        'web_app',
        'mobile_app',
        'seo',
        'other',
        'description',
        'promo_code',
        'status'
    ];
}
