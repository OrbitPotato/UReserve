<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'room';
    protected $primaryKey = 'room_id';

    protected $fillable = [
        'room_type',
        'date_from',
        'date_to',
        'time_from',
        'time_to',
        'user_id',
        'status',
        'is_ready',
    ];

    public $timestamps = false;

}
