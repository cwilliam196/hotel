<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'amount'
    ];

    public const PAYMENT_CHANNELS = [
        'credit_card'
    ];

    public $timestamps = false;
}
