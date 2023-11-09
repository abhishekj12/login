<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message_users extends Model
{
    use HasFactory;
    protected $table = 'messages_users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'sender_id', 'reciever_id'
    ];
}
