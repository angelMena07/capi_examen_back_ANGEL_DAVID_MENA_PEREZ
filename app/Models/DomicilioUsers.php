<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomicilioUsers extends Model
{
    use HasFactory;
    protected $table = 'user_domicilio';

    protected $guarded = ['id'];

    public function users() {
        return $this->belongsTo(User::class); 
    }
}
