<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
$consumer = new Dummy();
$consumer->setNombre('Willy');
$consumer->setApellido('Ruz');
$result = $consumer->nombreCompleto();
$this->assertEquals('Willy Ruz', $result);
    }

    /**
    * Probar email válido
    */
    }
}
