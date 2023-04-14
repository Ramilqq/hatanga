<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTour extends Model
{
    use HasFactory;

    public const STATUS_NEW = 'НОВЫЙ';

    protected $fillable = [
        'tour_id',
        'name',
        'familie',
        'mail',
        'phone',
        'promo_code',
        'status',
    ];
}
