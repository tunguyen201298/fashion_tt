<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class User.
 *
 * @package namespace App\Models;
 */
class User extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name',
    	'email',
    	'email-verified-at',
    	'password',
    	'phone',
    	'role_id',
    	'birth_date',
    	'remember_token'
    ];

}
