<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = ['id'];
    
    public function admins(){
        return $this->belongsToMany(Admin::class);
    }
    
     public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    
    public function hasAnyPermission($per){
      return null !== $this->permissions()->whereIn('permissions.id', $per)->first();
    }
    
    public function hasPermission($per){
      return null !== $this->permissions()->where('permissions.id', $per)->first();
    }
}
