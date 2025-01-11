<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'research_grant_id', 'academician_id'
    ];

    public function researchGrant()
    {
        return $this->belongsTo(ResearchGrant::class);
    }

    public function academician()
    {
        return $this->belongsTo(Academician::class, 'academician_id');
    }
}
