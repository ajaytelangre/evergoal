<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subregistration extends Model
{
    use HasFactory;

    protected $table = "subregistrations";
    protected $fillable = [
        'name',
        'phone',
        'address',
        'aadhar',
        'bankname',
        'passbookno',
        'imgurl'
       ];

}
