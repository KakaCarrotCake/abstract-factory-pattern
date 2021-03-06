<?php
namespace App\Factories;

use App\Classes\Medals\DragonMedal;
use App\Classes\Parts\RangedMedabotArm;
use App\Classes\Parts\RangedMedabotHead;
use App\Classes\Parts\RangedMedabotLeg;
use App\Classes\RangedMedabot;
use App\Contracts\MedabotFactoryInterface;
use App\Contracts\Part;

class RangedMedabotFactory implements MedabotFactoryInterface
{
    public function build(): \App\Contracts\Medabot
    {
        $medabot = new RangedMedabot();
        $medabot->setMedal(new DragonMedal());
        $medabot->setHead(new RangedMedabotHead());
        $medabot->setArm('left', new RangedMedabotArm());
        $medabot->setArm('right', new RangedMedabotArm());
        $medabot->setLeg('left', new RangedMedabotLeg());
        $medabot->setLeg('right', new RangedMedabotLeg());

        $colours = ['red', 'blue', 'white'];
        $medabot->setColour($colours[array_rand($colours, 1)]);

        return $medabot;
    }
}