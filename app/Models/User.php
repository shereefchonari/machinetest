<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasOne(Department::class, 'fk_department');
    }
    public function designation()
    {
        return $this->hasOne(Designation::class, 'fk_designation');
    }
}
