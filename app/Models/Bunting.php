<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunting extends Model
{
    protected $table = 'buntings';
    protected $primaryKey = 'id';
    protected $fillable = ['type', 'type_text', 'start_sell', 'end_sell', 'price', 'capacity'];
}
