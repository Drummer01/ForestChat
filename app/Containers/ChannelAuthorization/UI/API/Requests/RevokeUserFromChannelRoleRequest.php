<?php

namespace App\Containers\ChannelAuthorization\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class RevokeUserFromChannelRoleRequest.
 */
class RevokeUserFromChannelRoleRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'manage-staff-access',
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
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'id'                => 'required|integer|exists:channels,id',
            'channel_roles_ids' => 'array|required',
            'channel_roles_ids.*' => 'integer|exists:channel_roles,id',
            'user_id'           => 'required|exists:users,id'
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
