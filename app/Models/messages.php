<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $foreignKey = 'message_user_id';

    protected $fillable = [
        'message_users_id','message'
    ];
}
