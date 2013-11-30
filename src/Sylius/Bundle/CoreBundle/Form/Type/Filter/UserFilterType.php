<?php

/*
* This file is part of the Sylius package.
*
* (c) Paweł Jędrzejewski
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Sylius\Bundle\CoreBundle\Form\Type\Filter;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * User filter form type.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class UserFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('query', 'text', array(
<<<<<<< HEAD
=======
                'required' => false,
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
                'label' => 'sylius.form.user_filter.query',
                'attr'  => array(
                    'placeholder' => 'sylius.form.user_filter.query'
                )
            ))
<<<<<<< HEAD
=======
            ->add('enabled','checkbox',array(
                'label' => 'sylius.form.user.enabled',
                'required' => false
            ))
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ;
    }

    public function getName()
    {
        return 'sylius_user_filter';
    }
}
