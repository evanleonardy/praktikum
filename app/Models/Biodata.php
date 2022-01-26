<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    public $table = "biodatas";

    protected $fillable = [
        'nama',
        'lahir',
        'tgl',
        'hobi',
        'jk',
        'agama',
        'alamat',
        'telp',
        'email'
    ];

}
