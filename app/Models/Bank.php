<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table="banks";
    protected $fillable=[
        'id',
        'account_type',
        'account_no',
        'bank',
        'branch_name',
        'ifsc',
        'pan',

    ];

}
