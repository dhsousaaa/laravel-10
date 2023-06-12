<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    /**
     * Campos aceitos para cadastrar quando passado via array
     */
    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
}
