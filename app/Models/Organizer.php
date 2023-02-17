<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $table = 'organizers';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'organizertext', 'phone', 'homepage', 'email', 'userid'];
}
