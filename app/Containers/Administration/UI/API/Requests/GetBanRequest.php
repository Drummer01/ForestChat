<?php

namespace App\Containers\Administration\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetBanRequest.
 */
class GetBanRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'manage-channel-bans',
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
        'ban_id'
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'id'   => 'required|integer|exists:channels,id',
            'ban_id'   => 'required|integer|exists:channel_bans,id'
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
