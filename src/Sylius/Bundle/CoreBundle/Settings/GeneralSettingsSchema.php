<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Settings;

use Sylius\Bundle\SettingsBundle\Schema\SchemaInterface;
use Sylius\Bundle\SettingsBundle\Schema\SettingsBuilderInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Locale;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints\Currency;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

/**
 * General settings schema.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class GeneralSettingsSchema implements SchemaInterface
{
    /**
<<<<<<< HEAD
     * @var array
     */
    protected $defaults;

    /**
     * @param array $defaults
     */
    public function __construct(array $defaults = array())
    {
        $this->defaults = $defaults;
    }

    /**
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     * {@inheritdoc}
     */
    public function buildSettings(SettingsBuilderInterface $builder)
    {
        $builder
<<<<<<< HEAD
            ->setDefaults(array_merge(array(
=======
            ->setDefaults(array(
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
                'title'            => 'Sylius - Modern ecommerce for Symfony2',
                'meta_keywords'    => 'symfony, sylius, ecommerce, webshop, shopping cart',
                'meta_description' => 'Sylius is modern ecommerce solution for PHP. Based on the Symfony2 framework.',
                'locale'           => 'en',
<<<<<<< HEAD
                'currency'         => 'USD',
            ), $this->defaults))
=======
                'currency'         => 'EUR',
            ))
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
            ->setAllowedTypes(array(
                'title'            => array('string'),
                'meta_keywords'    => array('string'),
                'meta_description' => array('string'),
                'locale'           => array('string'),
                'currency'         => array('string'),
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('title', 'text', array(
                'label'       => 'sylius.form.settings.general.title',
                'constraints' => array(
                    new NotBlank()
                )
            ))
            ->add('meta_keywords', 'text', array(
                'label'       => 'sylius.form.settings.general.meta_keywords',
                'constraints' => array(
                    new NotBlank()
                )
            ))
            ->add('meta_description', 'textarea', array(
                'label'       => 'sylius.form.settings.general.meta_description',
                'constraints' => array(
                    new NotBlank()
                )
            ))
            ->add('locale', 'locale', array(
                'label'       => 'sylius.form.settings.general.locale',
                'constraints' => array(
                    new NotBlank(),
                    new Locale(),
                )
            ))
<<<<<<< HEAD
            ->add('currency', 'currency', array(
                'label'       => 'sylius.form.settings.general.currency',
                'constraints' => array(
                    new NotBlank(),
                    new Currency(),
=======
            ->add('currency', 'text', array( // TODO: use currency type when we upgrade to 2.3
                'label'       => 'sylius.form.settings.general.currency',
                'constraints' => array(
                    new NotBlank()
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
                )
            ))
        ;
    }
}
