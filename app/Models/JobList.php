<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\JobList as Joblistmodel;
class JobList extends Model
{
    //
      use HasFactory;
 protected $table = 'job_details';
  
    protected $fillable = [
        'title',
        'job_type',
        'location',
        'job_description',
        'details',
        'salary',
        'forwhome',
        'position_filled',
        'created_at'
    ];
    protected $casts = [
        'position_filled' => 'boolean',
        'created_at' => 'datetime'
    ];
      public $timestamps = false;
}
