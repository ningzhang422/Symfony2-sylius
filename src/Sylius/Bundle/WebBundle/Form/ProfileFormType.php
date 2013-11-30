<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\WebBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

/**
 * Profile form.
 *
 * @author Julien Janvier <j.janvier@gmail.com>
 */
class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', 'text', array(
                'label'    => 'sylius.form.profile.firstName'
            ))
            ->add('lastName', 'text', array(
                'label'    => 'sylius.form.profile.lastName'
            ))
            ->add('email', 'email', array(
                'label'    => 'sylius.form.profile.email'
            ))
<<<<<<< HEAD
=======
            ->add('phone', 'text', array(
                'label'    => 'sylius.form.profile.phone'
            ))
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ;
    }

    public function getName()
    {
        return 'sylius_user_profile';
    }
}
