<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    protected $primaryKey = 'MilestoneID'; 
    protected $fillable = [
        'MilestoneName', 'TargetCompletionDate', 'Deliverable', 'research_grant_id',
    ];

    public function researchGrant()
    {
        return $this->belongsTo(ResearchGrant::class, 'research_grant_id');
    }
}
