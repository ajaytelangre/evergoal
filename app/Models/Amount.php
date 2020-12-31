<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    use HasFactory;
    protected $table="amounts";
    protected $fillable=[
        'id',
        'total_amount',
        'withdraw_amount',
        'withdraw_date',
        'updated_amount_time',
        'transaction_id'

    ];

    public $timestamps = false;
}
