<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersChange extends Model
{
    use HasFactory;
    protected $table = 'user_changes';

    protected $fillable = [
        'change_id',
        'user_id',

    ];
    protected $updated_at = "null";
    protected $created_at = "null";
}
