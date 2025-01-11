<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchGrant extends Model
{
    use HasFactory;

    protected $table = 'research_grants';
    protected $primaryKey = 'GrantID';
    public $timestamps = true;

    protected $fillable = [
        'ProjectTitle',
        'GrantAmount',
        'GrantProvider',
        'StartDate',
        'Duration',
        'project_leader_id',
    ];

    protected $keyType = 'string'; // since GrantID is a string

    public function projectLeader()
    {
        return $this->belongsTo(Academician::class, 'project_leader_id', 'StaffID');
    }
}
