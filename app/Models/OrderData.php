<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderData extends Model {

    protected $table = 'order_data';

    protected $fillable = [
        'first_name',
        'last_name',
        'country',
        'city',
        'street',
        'house_number',
        'apartment_number',
        'email',
        'phone'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
