<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;
    # Database
    protected $table = 'order_statuses';
    protected $primaryKey = 'order_status_id';
}
