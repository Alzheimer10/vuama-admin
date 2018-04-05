<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Project extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'type',
        'status',
        'schedule',
        'maximum',
        'service_id',
        'user_id'
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
