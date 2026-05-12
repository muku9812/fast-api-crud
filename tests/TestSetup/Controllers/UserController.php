<?php

namespace Muku9812\FastApiCrud\Tests\TestSetup\Controllers;

use Muku9812\FastApiCrud\Http\Controllers\BaseController;
use Muku9812\FastApiCrud\Tests\TestSetup\Models\UserModel;
use Muku9812\FastApiCrud\Tests\TestSetup\Requests\User\StoreUserFormRequest;
use Muku9812\FastApiCrud\Tests\TestSetup\Requests\User\UpdateUserFormRequest;
use Muku9812\FastApiCrud\Tests\TestSetup\Resources\UserResource;
use Exception;

class UserController extends BaseController
{
    /**
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct(
            model: UserModel::class,
            storeRequest: StoreUserFormRequest::class,
            updateRequest: UpdateUserFormRequest::class,
            resource: UserResource::class
        );
    }
}
