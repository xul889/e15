<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    //fillable fields
    protected $fillable = ['title', 'content','updated_at'];

    //table name is emails
    protected $table = 'emails'; 

    //many to many relationship with users
    public function users()
    {
        return $this->belongsToMany(User::class,'email_user')->withTimestamps();
    }
}
