<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdata extends Model
{
    use HasFactory;
    public function run(): void
{
    userdata::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
}
}

