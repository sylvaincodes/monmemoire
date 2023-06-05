<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'resume',
        'description_courte',
        'thumball',
        'pdf',
        'doc',
        'preuve',
        'status',
        'user_id',
        'filiere_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
       
    ];

    // RELATIONSHIP ---------------------

    /**
     * Get the user for the document.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    
    /**
     * Get the filiere for the document.
     */
    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere');
    }

}
