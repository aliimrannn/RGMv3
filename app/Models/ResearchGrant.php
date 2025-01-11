<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchGrant extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_leader_id', 'GrantAmount', 'GrantProvider', 'ProjectTitle', 'StartDate', 'Duration'
    ];

    public function projectLeader()
    {
        return $this->belongsTo(Academician::class, 'project_leader_id');
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function milestones()
    {
        return $this->hasMany(Milestone::class);
    }
}
