<?php declare(strict_types=1);

namespace BoneTest;

use Bone\Server\Environment;
use Bone\Server\SiteConfig;
use Bone\Server\Traits\HasSiteConfigTrait;
use Codeception\Test\Unit;

class HasSiteConfigTest extends Unit
{
    public function testConfig()
    {
        $class = new class {
          use HasSiteConfigTrait;
        };

        $class->setSiteConfig(new SiteConfig([
            'site' => [
                'title' => 'Bone MVC Framework',
                'domain' => 'awesome.scot',
                'baseUrl' => 'https://awesome.scot',
                'contactEmail' => 'abc@awesome.scot',
                'serverEmail' => 'noreply@awesome.scot',
                'company' => 'Pirates Inc.',
                'address' => '1 Big Tree, Booty Island',
                'logo' => '/img/skull_and_crossbones.png',
                'emailLogo' => '/img/emails/logo.png',
            ],
        ], new Environment([])));
        $this->assertInstanceOf(SiteConfig::class, $class->getSiteConfig());
    }
}
