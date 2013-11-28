<?php

namespace Acme\Bundle\ShopBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Sylius\Bundle\CoreBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // Add default fields.
        $builder->add('mobile', 'text', array('label' => 'acme.form.user.mobile'));
    }

    public function getName()
    {
        return 'acme_user_registration';
    }
}
