<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    # Database
    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $fillable = ['name', 'last_name', 'address', 'phone', 'email'];
    
}
