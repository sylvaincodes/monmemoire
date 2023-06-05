<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'filiere_id',
        'matricule',
        'whatsapp',
        'password',
        'is_verified',
        'type',
        'avatar',
        'created_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // RELATIONSHIP ---------------------

    /**
     * Get the documents for user auth.
     */
    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere');
    }

    /**
     * Get the documents for user auth.
     */
    public function documents()
    {
        return $this->hasMany('App\Models\Document');
    }

    /**
     * Get the documents for user auth.
     */
    public function telechargements()
    {
        return $this->hasMany('App\Models\Telechargement');
    }

}