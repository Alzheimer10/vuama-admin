<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'province',
        'country',
        'city',
        'sector',
        'street',
        'residential',
        'cpostal',
        'map'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
