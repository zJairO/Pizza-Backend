<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMan extends Model
{
    use HasFactory;
    # Database
    protected $table = 'delivery_men';
    protected $primaryKey = 'delivery_man_id';
}
