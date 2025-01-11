<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'StaffID',
        'name',       
        'Email',
        'College',
        'Department',
        'Position'
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
