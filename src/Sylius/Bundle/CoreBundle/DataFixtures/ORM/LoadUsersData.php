<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
<<<<<<< HEAD
=======
use Sylius\Bundle\CoreBundle\Model\User;
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

/**
 * User fixtures.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class LoadUsersData extends DataFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
<<<<<<< HEAD
        $user = $this->getUserRepository()->createNew();
=======
        $user = new User();
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

        $user->setFirstname($this->faker->firstName);
        $user->setLastname($this->faker->lastName);
        $user->setEmail('sylius@example.com');
        $user->setPlainPassword('sylius');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_SYLIUS_ADMIN'));
        $user->setCurrency('EUR');

        $manager->persist($user);
        $manager->flush();

        $this->setReference('User-Administrator', $user);

        for ($i = 1; $i <= 15; $i++) {
<<<<<<< HEAD
            $user = $this->getUserRepository()->createNew();
=======
            $user = new User();
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

            $username = $this->faker->username;

            $user->setFirstname($this->faker->firstName);
            $user->setLastname($this->faker->lastName);
            $user->setEmail($username.'@example.com');
            $user->setPlainPassword($username);
            $user->setEnabled($this->faker->boolean());

            $manager->persist($user);

            $this->setReference('Sylius.User-'.$i, $user);
        }

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
