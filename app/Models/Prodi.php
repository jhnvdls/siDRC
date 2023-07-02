<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodis';
    protected $fillable = ['namaProdi'];
    //primary key
    protected $primaryKey = 'id';

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
