<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public  function hospital()
    {
        return $this->belongsTo(Hospitals::class, 'hospital_id', 'id');

    }
}
