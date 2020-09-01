<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class RoleValidator.
 *
 * @package namespace App\Validators;
 */
class RoleValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
        	'name' => 'required|unique:roles|minlength:5',
    	],
        ValidatorInterface::RULE_UPDATE => [],
    ];
    protected $messages = [
        'name.required' => 'Vui lòng nhập vào',
        'name.minlength' => 'Tên quá ngắn'
        
    ];
}
