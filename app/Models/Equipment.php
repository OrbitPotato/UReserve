<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';
    protected $primaryKey = 'equipment_id';

    protected $fillable = [
        'quantity',
        'category',
        'item',
        'date_from',
        'date_to',
        'time_from',
        'time_to',
        'user_id',
        'status',
        'is_ready',
        'prof_id'
    ];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
