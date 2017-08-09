<?php

namespace App\Containers\Channel\UI\API\Requests;

use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Requests\Request;

/**
 * Class RestoreChannelRequest.
 */
class RestoreChannelRequest extends Request
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
        'id'
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
             'id' => 'required|integer'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        $channel = Channel::find($this->id);
        return $this->user()->can('restore', $channel);
    }
}
