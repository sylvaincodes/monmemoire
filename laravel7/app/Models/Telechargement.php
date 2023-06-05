<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telechargement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'document_id',
    ];
}