<?php

namespace App\DataFixtures;
use App\Entity\Users;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
;

class UsersFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $hacher){

    }
    public function load(ObjectManager $manager): void
    {$dateTimeService = new \DateTimeImmutable();
        $faker = Factory::create();
        $admin1 = new Users();
        $admin1->setEmail('admin@gmail.com');
       $admin1->setPassword($this->hacher->hashPassword($admin1,'admin'));
       $admin1->setRoles(['ROLE_ADMIN']);
       $admin1->setFirstname('name ');
       $admin1->setlastname('lastname');
       $admin1->setAddress('arina');
       $admin1->setZipcode('2080');
       $admin1->setCreatedAt($dateTimeService);
       $admin1->setCity('ariana');
        $admin1->setStatus('admin');
        $manager->persist($admin1);
       $client = new Users();
       $client->setEmail("client@gmail.com");
       $client->setPassword($this->hacher->hashPassword($client,'client'));
       $client->setRoles(['ROLE_CLIENT']);
       $client->setFirstname('name ');
       $client->setlastname('lastname');
       $client->setAddress('arina');
       $client->setZipcode('2080');
       $client->setCreatedAt($dateTimeService);
       $client->setCity('ariana');
        $client->setStatus('client');

        $manager->persist($client);
        for ($i = 0; $i < 10; $i++) {
            $client = new Users();
            $client->setEmail("client$i@gmail.com");
            $client->setPassword($this->hacher->hashPassword($client,'client'));
            $client->setRoles(['ROLE_CLIENT']);
            $client->setFirstname($faker->firstName);
            $client->setLastname($faker->lastName);
            $client->setAddress('arina');
            $client->setZipcode('2080');
            $client->setCreatedAt($dateTimeService);
            $client->setCity('ariana');
             $client->setStatus('client');
             $manager->persist($client);
        }
       $vendeur = new Users();
       $vendeur->setEmail("vendeur@gmail.com");
       $vendeur->setPassword($this->hacher->hashPassword($vendeur,'vendeur'));
       $vendeur->setRoles(['ROLE_VENDEUR']);
       $vendeur->setFirstname('name ');
       $vendeur->setlastname('lastname');
       $vendeur->setAddress('arina');
       $vendeur->setZipcode('2080');
       $vendeur->setCreatedAt($dateTimeService);
       $vendeur->setCity('ariana');
        $vendeur->setStatus('vendeur');

        $manager->persist($vendeur);

        for ($i = 0; $i < 10; $i++) {
            $vendeur = new Users();
            $vendeur->setFirstname($faker->lastName);
            $vendeur->setEmail($faker->email);
            $vendeur->setPassword($this->hacher->hashPassword($vendeur,'vendeur'));
            $vendeur->setRoles(['ROLE_VENDEUR']);
       
            $vendeur->setLastname($faker->firstName);
            $vendeur->setAddress('arina');
            $vendeur->setZipcode('2080');
            $vendeur->setCreatedAt($dateTimeService);
            $vendeur->setCity('ariana');
             $vendeur->setStatus('vendeur');
            // Set other properties using Faker methods
            $manager->persist($vendeur);
        }

       $manager->flush();
    }
}
