<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    protected $fillable = [
        'user_id',
        'lat',
        'lng'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
