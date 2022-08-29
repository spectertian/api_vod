<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Parser\Tokens;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setUuid(1);
        $user->setPassword(456);
        $user->setEmail('test.com');
        $user->setToken(Tokens::T_ARRAY_CAST);
        $manager->persist($user);

        $manager->flush();
    }
}
