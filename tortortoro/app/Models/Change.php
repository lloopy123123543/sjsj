<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    use HasFactory;
    protected $table = 'changes';

    protected $fillable = [
        'date_start',
        'date_end',
        'closed',

    ];
    protected $updated_at = "null";
    protected $created_at = "null";

}
