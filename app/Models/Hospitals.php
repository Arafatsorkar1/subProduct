<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function departments()
    {
        return $this->hasMany(Department::class, 'hospital_id');
    }

}
