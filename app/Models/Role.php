<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * Mass Assignable Attributes
     * @var string[]
     */
    protected $fillable = [
        'name',
        'company_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function responsibilities(){
        return $this->belongsToMany(Responsibility::class);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
