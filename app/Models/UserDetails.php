<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $table = 'user_details';
    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'username', 'birthDate', 'bank', 'hair', 'height', 'weight', 'address'];
    

    
}
