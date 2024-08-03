<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'primary_color',
        'secondary_color',
        'tertiary_color',
        'bg_color',
        'primary_dark_color',
        'secondary_dark_color',
        'tertiary_dark_color',
        'bg_dark_color',
    ];
}
