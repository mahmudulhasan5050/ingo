<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    protected $primaryKey = 'id';
    protected $fillable = ['coupon_code', 'coupon_text', 'status', 'date_time', 'discount_type', 'discount_amount', 'capacity'];
}
