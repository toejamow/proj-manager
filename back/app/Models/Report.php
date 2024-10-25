<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['date_created', 'statistic'];

    public function project() {
        return $this->belongsTo(Project::class);
    } 
    public function user() {
        return $this->belongsTo(User::class);
    } 
}

