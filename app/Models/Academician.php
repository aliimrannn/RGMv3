<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academician extends Model
{
    use HasFactory;

    protected $table = 'academicians';
    protected $primaryKey = 'StaffID'; // Specify primary key
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'StaffID',
        'name',
        'Position',
        'Email',
        'College',
        'Department',
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
