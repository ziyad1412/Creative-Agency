<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectOrder extends Model
{
    use HasFactory, SoftDeletes;

    // guard id
    protected $guarded = ['id'];
}
