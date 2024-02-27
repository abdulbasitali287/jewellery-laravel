<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_section_id',
        'heading_1',
        'heading_2',
        'heading_3',
        'heading_4',
    ];

    // public function page_sections(){
    //     return $this->hasMany(PageSection::class);
    // }
}
