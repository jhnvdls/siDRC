<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "events";
    protected $primaryKey = "id";

    protected $fillable = [
        'title',
        'content',
        'image',
        'start_date',
        'end_date',
        'status',
    ];
}
