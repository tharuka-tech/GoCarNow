<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'start_date_time',
        'end_date_time',
        'customer_id',
        'post_id',
        'phone_number',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    use HasFactory;
}
