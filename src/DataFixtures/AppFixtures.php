<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne(['email' => 'user1@local.host']);
        UserFactory::createOne(['email' => 'user2@local.host']);
        UserFactory::createOne(attributes: ['password' => 'my_password']);

        UserFactory::createMany(10);

        $manager->flush();
    }
}
