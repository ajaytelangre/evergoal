<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet_amount extends Model
{
    use HasFactory;
    protected $table="wallet_amounts";
    protected $fillable = [
        "*"
     ];

}
