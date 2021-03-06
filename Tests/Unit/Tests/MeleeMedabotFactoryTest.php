<?php

namespace Tests;

use App\Contracts\MedabotFactoryInterface;
use App\Factories\MeleeMedabotFactory;
use PHPUnit\Framework\TestCase;

class MeleeMedabotFactoryTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->sut = new MeleeMedabotFactory();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(MedabotFactoryInterface::class, $this->sut);
    }
}
