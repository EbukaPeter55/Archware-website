<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'post_applied',
        'nationality',
        'qualification',
        'major_in',
        'school_name',
        'date_graduated',
        'saudi_council_question',
        'sce_number',
        'sce_validity_date',
        'certificate_training',
        'resume',
        'work_experience_yrs',
        'field_experience_yrs',
        'qc_inspection_experience',
        'qc_inspection_experience_count',
        'aramco_qa_qc_approval',
        'aramcosap_no_or_id',
        'english_skills',
        'current_salary',
        'expected_salary',
        'id_no',
        'transferrable_iqama',
        'driving_license',
        'dob',
        'country',
        'city',
        'notice_period',
        'contact_no',
        'whatsapp_or_imo',
        'skype_id',
        'email',
    ];

    public function credentials() {
        return $this->hasMany(Credential::class);
    }
}
