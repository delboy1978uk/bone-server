<?php declare(strict_types=1);

namespace BoneTest;

use Bone\Server\Traits\HasSessionTrait;
use Codeception\TestCase\Test;
use Del\SessionManager;

class HasSessionTest extends Test
{
    public function testRouter()
    {
        $class = new class {
          use HasSessionTrait;
        };

        $class->setSession(SessionManager::getInstance());
        $this->assertInstanceOf(SessionManager::class, $class->getSession());
    }
}
