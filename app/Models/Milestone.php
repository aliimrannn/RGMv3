<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    protected $fillable = [
        'research_grant_id', 'MilestoneName', 'TargetCompletionDate', 'Status', 'Remarks', 'Deliverable'
    ];

    public function researchGrant()
    {
        return $this->belongsTo(ResearchGrant::class);
    }
}
