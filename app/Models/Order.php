<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'lng',
        'lat',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
