<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sticky_note extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
