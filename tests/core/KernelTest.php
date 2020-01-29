<?php

namespace Core;

use PHPUnit\Framework\TestCase;

class KernelTest extends TestCase {
    /**
     * @dataprovider jsonProvider
     */
    public function testRequestBodyParseJSON(string $json) : void {
        $body_parsed = (new Kernel)->bodyParseJSON($json);
        $this->assertEquals(json_encode($body_parsed), $json);
    }

    private function jsonProvider() : string{
        $stdObject = new stdClass;

        $stdObject->name  = 'Douglas';
        $stdObject->email = 'douglasfanucchi@gmail.com';
        $stdObject->pass  = 'test123';

        return json_encode( $stdObject );
    }
}
