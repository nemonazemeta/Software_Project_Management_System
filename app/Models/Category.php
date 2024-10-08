<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
   

    protected $fillable = [
          'cat_name',
    ];

    public function creator(){
        return $this->hasOne('App\Models\User', 'id', 'created_by');
    }

    public function updater(){
        return $this->hasOne('App\Models\User', 'id', 'updated_by');
    }
   
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_categories');
    }
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}

