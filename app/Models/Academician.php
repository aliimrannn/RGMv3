<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academician extends Model
{
    use HasFactory;

    protected $fillable = [
        'Email', 'College', 'Department', 'Position'
    ];

    public function researchGrants()
    {
        return $this->hasMany(ResearchGrant::class, 'project_leader_id');
    }

    public function projectsAsMember()
    {
        return $this->belongsToMany(ResearchGrant::class, 'members', 'academician_id', 'research_grant_id');
    }
}
