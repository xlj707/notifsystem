<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    //To enabled the massive assignation for all attributes excluding id
    //protected $guarded = ['id']; 

    protected $fillable = [
        'subject',
        'body',
        'from_user_id',
        'to_user_id'
    ];

}
