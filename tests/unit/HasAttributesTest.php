<?php declare(strict_types=1);

namespace BoneTest;

use Bone\Server\Traits\HasAttributesTrait;
use Codeception\TestCase\Test;

class HasAttributesTest extends Test
{
    public function testAttributes()
    {
        $class = new class {
          use HasAttributesTrait;
        };

        $class->setAttribute('test', 'value');
        $this->assertTrue($class->hasAttribute('test'));
        $this->assertEquals('value', $class->getAttribute('test'));

        $class->setAttributes([0,1,2,3,4,5,6]);
        $attributes = $class->getAttributes();
        $this->assertCount(7, $attributes);
    }
}
