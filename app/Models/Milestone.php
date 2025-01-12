<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    protected $primaryKey = 'MilestoneID'; 
    protected $fillable = [
        'research_grant_id',
        'MilestoneName',
        'TargetCompletionDate',
        'Deliverable',
        'Status',
        'Remarks',
        'DateUpdated',
    ];

    public function researchGrant()
    {
        return $this->belongsTo(ResearchGrant::class, 'research_grant_id');
    }
}
