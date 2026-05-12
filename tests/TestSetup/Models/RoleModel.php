<?php

namespace Muku9812\FastApiCrud\Tests\TestSetup\Models;

use Muku9812\FastApiCrud\Concerns\AnonymizesOnDelete;
use Muku9812\FastApiCrud\Concerns\HasDateScopes;
use Muku9812\FastApiCrud\Concerns\ReplicatesWithRelations;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use AnonymizesOnDelete;
    use HasDateScopes;
    use ReplicatesWithRelations;

    protected $table = 'roles';

    protected $fillable = [
        'name',
    ];
}
