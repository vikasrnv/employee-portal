<?php

namespace App\Models\HR;

use App\Models\HR\ApplicationRound;
use Illuminate\Database\Eloquent\Model;

class ApplicationRoundReview extends Model
{
    protected $fillable = ['hr_applicant_round_id', 'hr_application_round_id', 'review_key', 'review_value'];

    protected $table = 'hr_application_round_reviews';

    public function applicationRound()
    {
    	return $this->belongsTo(ApplicationRound::class, 'hr_application_round_id');
    }
}
