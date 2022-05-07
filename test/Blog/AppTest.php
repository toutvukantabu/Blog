<?php

namespace Tests\Framework;

use Framework\App;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\ServerRequest;

class appTest extends TestCase
{

    public function testRedirectTrailingSlash()
    {

        $app = new App();
        $request = new ServerRequest('GET','/demoslash/');
        $response = $app->run($request);
        $this->assertContains('/demoslash', $response->getHeader('Location'));
        $this->assertEquals(301, $response->getStatusCode());
    }


}
