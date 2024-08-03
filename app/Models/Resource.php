<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'project_plan_id',
        'resourceName',
        'resourceType',
        'quantity',

    ];
}
