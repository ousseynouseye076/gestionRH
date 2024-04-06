<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @mixin IdeHelperPersonalInfo
 */
class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'nci',
        'phone',
        'address',
        'date_of_birth',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
