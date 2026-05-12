<?php

namespace Muku9812\FastApiCrud\Tests\TestSetup\Controllers;

use Muku9812\FastApiCrud\Http\Controllers\BaseController;
use Muku9812\FastApiCrud\Tests\TestSetup\Models\TagModel;
use Muku9812\FastApiCrud\Tests\TestSetup\Requests\Tag\StoreTagRequest;
use Muku9812\FastApiCrud\Tests\TestSetup\Requests\Tag\UpdateTagRequest;
use Muku9812\FastApiCrud\Tests\TestSetup\Resources\TagResource;
use Exception;

class TagController extends BaseController
{
    /**
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct(
            model: TagModel::class,
            storeRequest: StoreTagRequest::class,
            updateRequest: UpdateTagRequest::class,
            resource: TagResource::class
        );
    }
}
