<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alldata extends Model
{
    use HasFactory;
    protected $table = 'alldata';
    protected $fillable = ['name'];


    public function setCategoryAttribute($value)
    {
        $this->attributes['hobby'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['hobby'] = json_decode($value);
    }
}
