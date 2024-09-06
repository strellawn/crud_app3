<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cod-ped',
        'cliente',
        'produto',
        'quantidade',
        'valor_ped',
        'valor_desc',
    ];
}
