<?php

namespace App\DataFixtures;

use App\Entity\Squirell;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SquirrelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $squirrel = new Squirell();
            $squirrel->setName('name' . $i);
            $manager->persist($squirrel);
        }
        $manager->flush();
    }
}
