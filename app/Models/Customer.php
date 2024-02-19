<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $primarykey = 'id';

    protected $keyType = 'integer';

    protected $fillable = [
        'id',
        'name',
        'address',
        'status',
        'gender',
    ];
}