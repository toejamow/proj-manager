<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'descr', 'date_start', 'date_end', 'status'];
    
    public function user() {
        return $this->belongsTo(User::class);
    } 

    public function task() {
        return $this->hasMany(Task::class);
    } 

}
