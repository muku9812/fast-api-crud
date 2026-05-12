<?php

namespace Tests\Unit\Models;

use Muku9812\FastApiCrud\Concerns\AnonymizesOnDelete;
use Muku9812\FastApiCrud\Concerns\HasDateScopes;
use Muku9812\FastApiCrud\Concerns\ReplicatesWithRelations;
use Muku9812\FastApiCrud\Tests\TestSetup\Models\RoleModel;

describe('RoleModelUnitTest', function () {
    it('has used traits', function () {
        expect(class_uses(RoleModel::class))->toContain(HasDateScopes::class)
            ->and(class_uses(RoleModel::class))->toContain(AnonymizesOnDelete::class)
            ->and(class_uses(RoleModel::class))->toContain(ReplicatesWithRelations::class);
    });
});
