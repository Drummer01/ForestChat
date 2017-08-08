<?php

namespace App\Containers\Channel\UI\API\Requests;

use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Requests\Request;

/**
 * Class CreateChannelRequest.
 */
class CreateChannelRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        //'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            // put your rules here
             'name' => 'required|min:4|max:40'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->user()->can('create', Channel::class);
    }
}
