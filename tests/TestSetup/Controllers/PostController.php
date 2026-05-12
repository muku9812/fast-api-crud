<?php

namespace Muku9812\FastApiCrud\Tests\TestSetup\Controllers;

use Muku9812\FastApiCrud\Http\Controllers\BaseController;
use Muku9812\FastApiCrud\Tests\TestSetup\Models\PostModel;
use Muku9812\FastApiCrud\Tests\TestSetup\Requests\Post\StorePostRequest;
use Muku9812\FastApiCrud\Tests\TestSetup\Requests\Post\UpdatePostRequest;
use Muku9812\FastApiCrud\Tests\TestSetup\Resources\PostResource;
use Exception;

class PostController extends BaseController
{
    /**
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct(
            model: PostModel::class,
            storeRequest: StorePostRequest::class,
            updateRequest: UpdatePostRequest::class,
            resource: PostResource::class
        );
    }
}
