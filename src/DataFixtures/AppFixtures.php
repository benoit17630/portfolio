<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
       $admin = new User();
       $admin
           ->setEmail("test@test.fr")
           ->setCgu(true)
           ->setCreatedAt(new \DateTimeImmutable())
           ->setRoles(['ROLE_ADMIN'])
           ->setPassword($this->passwordHasher->hashPassword($admin, 'test'))
       ;

        $manager->flush();
    }
}
