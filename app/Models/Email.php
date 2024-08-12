<?php

//User Emails store here

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Email extends Model
{
    use HasFactory;
    use HasApiTokens;
    protected $guarded = [];
    protected $table = 'emails';
    
}
