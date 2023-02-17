<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngoEvent extends Model
{
    protected $table = 'ingo_events';
    protected $primaryKey = 'id';
    protected $fillable = ['event', 'eventtext', 'start_date', 'start_time', 'end_date', 'end_time', 'venueid', 'organizerid', 'event_website', 'age_restriction', 'eventchain', 'ticket_amount','categoryid'];
}