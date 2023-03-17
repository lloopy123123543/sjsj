<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'usluga',
        'user_id',
        'order_status',

    ];
    protected $updated_at = "null";
    protected $created_at = "null";


}
