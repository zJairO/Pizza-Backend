<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    # Database
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = ['pizza_id', 'client_id', 'delivery_man_id', 'status_id'];
}
