<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $num_contract
 * @property string $type_contract
 * @property string $date_start
 * @property string $date_end
 * @property string $salary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereNumContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereTypeContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperContract {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperDocument {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Historique newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique query()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperHistorique {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $last_name
 * @property string|null $first_name
 * @property string|null $nci
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $date_of_birth
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo whereNci($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInfo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPersonalInfo {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $job_title
 * @property string|null $company
 * @property string|null $competence
 * @property string|null $experience
 * @property string|null $other
 * @property string|null $languages
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereCompetence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereLanguages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereOther($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalInfo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperProfessionalInfo {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

