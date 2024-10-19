<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'subject',
        'description',
        'department',
        'priority',
        'category',
        'file_path',
        'user_id', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
