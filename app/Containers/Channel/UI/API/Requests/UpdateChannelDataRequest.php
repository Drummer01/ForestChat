<?php

namespace App\Containers\Channel\UI\API\Requests;

use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateChannelDataRequest.
 */
class UpdateChannelDataRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'update-channel',
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
            'id'   => 'required|integer',
            'name' => 'min:4|max:40',
            'password'   => 'min:6|max:40',
            'image_url'   => 'url'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess|hasChannelAccess'
        ]);
    }
}
