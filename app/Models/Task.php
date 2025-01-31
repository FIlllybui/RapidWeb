<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'completed','category_id'];

    public function taskCategory()
    {
        return $this->belongsTo(TaskCategory::class, 'category_id');
    }
}
