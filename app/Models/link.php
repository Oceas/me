<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    use HasFactory;

    public function count_visit()
    {
        $this->count++;
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
