<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentLog extends Model
{
    use HasFactory;
    //table
    protected $table = 'sent_logs';
    //fillable
    protected $fillable = ['email_id', 'user_id', 'sent_at'];
}
