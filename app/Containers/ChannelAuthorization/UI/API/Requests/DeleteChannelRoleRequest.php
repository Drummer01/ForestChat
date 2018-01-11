<?php

namespace App\Containers\ChannelAuthorization\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class DeleteChannelRoleRequest.
 */
class DeleteChannelRoleRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'manage-channel-roles',
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
        'id',
        'role_id'
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'id' => 'required|integer|exists:channels,id',
            'role_id' => 'required|integer|exists:channel_roles,id'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess|hasChannelAccess',
        ]);
    }
}
