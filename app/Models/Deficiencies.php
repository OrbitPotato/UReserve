<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deficiencies extends Model
{
    use HasFactory;

    protected $table = 'deficiencies';
    protected $primaryKey = 'defi_id';
}
