<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Tour extends Model
{
    use HasFactory;
    use Spatial;
    protected $translatable = [
        'title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_keywords',
        'status',
        'price',
        'old_price',
        'date_start',
        'date_end',
        'peoples',
        'age',
        'leavel',
    ];

    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_INACTIVE = 'INACTIVE';

    public static $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

}
