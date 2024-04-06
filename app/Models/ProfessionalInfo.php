<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @mixin IdeHelperProfessionalInfo
 */
class ProfessionalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'company',
        'competence',
        'experience',
        'languages',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}


