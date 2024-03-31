<?php declare(strict_types=1);

namespace Barnacle\Tests;

use Bone\Server\Environment;
use Bone\Server\SiteConfig;
use Codeception\Test\Unit;

class SiteConfigTest extends Unit
{
    public function testRouter()
    {
        $config = [
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
            ]
        ];
        $env = new Environment(['serverGlobal' => 'variable']);
        $siteConfig = new SiteConfig($config, $env);

        foreach ($config['site'] as $method => $value) {
            $method = 'get' . ucwords($method);
            $this->assertEquals($value, $siteConfig->$method());
        }

        $this->assertInstanceOf(Environment::class, $siteConfig->getEnvironment());
    }
}
