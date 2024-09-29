<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';


    
    protected $fillable = [
        'modelname',
        'vehiNo',
        'NoOfPassanger',
        'image',
        'price',
        'about',
        'user_id',
    ];


    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'post_id');
    }
    
    use HasFactory;
}
