<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'section_name'
    ];

    public function pages(){
        return $this->belongsToMany(Page::class,"page_sections");
    }
}
