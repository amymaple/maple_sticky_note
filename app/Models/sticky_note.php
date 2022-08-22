<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class sticky_note extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'user_id'];
    //protected $guarded = [];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
