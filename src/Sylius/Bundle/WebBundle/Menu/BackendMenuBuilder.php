<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\WebBundle\Menu;

use Knp\Menu\ItemInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Main menu builder.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class BackendMenuBuilder extends MenuBuilder
{
    /**
     * Builds backend main menu.
     *
     * @param Request $request
     *
     * @return ItemInterface
     */
    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes' => array(
                'class' => 'nav navbar-nav navbar-right'
            )
        ));

        $childOptions = array(
            'attributes'         => array('class' => 'dropdown'),
            'childrenAttributes' => array('class' => 'dropdown-menu'),
            'labelAttributes'    => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'href' => '#')
        );

        $menu->addChild('dashboard', array(
            'route' => 'sylius_backend_dashboard'
        ))->setLabel($this->translate('sylius.backend.menu.main.dashboard'));

        $this->addAssortmentMenu($menu, $childOptions, 'main');
        $this->addSalesMenu($menu, $childOptions, 'main');
        $this->addConfigurationMenu($menu, $childOptions, 'main');
        $this->addCustomersMenu($menu, $childOptions, 'main');

        $menu->addChild('homepage', array(
            'route' => 'sylius_homepage'
        ))->setLabel($this->translate('sylius.backend.menu.main.homepage'));

        $menu->addChild('logout', array(
            'route' => 'fos_user_security_logout'
        ))->setLabel($this->translate('sylius.backend.logout'));

        return $menu;
    }

    /**
     * Builds backend sidebar menu.
     *
     * @param Request $request
     *
     * @return ItemInterface
     */
    public function createSidebarMenu(Request $request)
    {
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes' => array(
                'class' => 'nav'
            )
        ));

        $childOptions = array(
            'childrenAttributes' => array('class' => 'nav'),
            'labelAttributes'    => array('class' => 'nav-header')
        );

        $this->addAssortmentMenu($menu, $childOptions, 'sidebar');
        $this->addSalesMenu($menu, $childOptions, 'sidebar');
        $this->addCustomersMenu($menu, $childOptions, 'sidebar');
        $this->addConfigurationMenu($menu, $childOptions, 'sidebar');

        return $menu;
    }

    /**
     * Add assortment menu.
     *
     * @param ItemInterface $menu
     * @param array         $childOptions
     * @param string        $section
     */
    protected function addAssortmentMenu(ItemInterface $menu, array $childOptions, $section)
    {
        $child = $menu
            ->addChild('assortment', $childOptions)
            ->setLabel($this->translate(sprintf('sylius.backend.menu.%s.assortment', $section)))
        ;

        $child->addChild('taxonomies', array(
            'route' => 'sylius_backend_taxonomy_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-folder-close'),
=======
            'labelAttributes' => array('icon' => 'icon-tags'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.taxonomies', $section)));

        $child->addChild('products', array(
            'route' => 'sylius_backend_product_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-th-list'),
=======
            'labelAttributes' => array('icon' => 'icon-folder-open'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.products', $section)));

        $child->addChild('inventory', array(
            'route' => 'sylius_backend_inventory_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-tasks'),
=======
            'labelAttributes' => array('icon' => 'icon-tasks'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.stockables', $section)));

        $child->addChild('options', array(
            'route' => 'sylius_backend_option_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-th'),
=======
            'labelAttributes' => array('icon' => 'icon-th'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.options', $section)));

        $child->addChild('properties', array(
            'route' => 'sylius_backend_property_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-list-alt'),
=======
            'labelAttributes' => array('icon' => 'icon-cog'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.properties', $section)));

        $child->addChild('prototypes', array(
            'route' => 'sylius_backend_prototype_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-compressed'),
=======
            'labelAttributes' => array('icon' => 'icon-cogs'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.prototypes', $section)));
    }

    /**
     * Add sales menu.
     *
     * @param ItemInterface $menu
     * @param array         $childOptions
     * @param string        $section
     */
    protected function addSalesMenu(ItemInterface $menu, array $childOptions, $section)
    {
        $child = $menu
            ->addChild('sales', $childOptions)
            ->setLabel($this->translate(sprintf('sylius.backend.menu.%s.sales', $section)))
        ;

        $child->addChild('orders', array(
            'route' => 'sylius_backend_order_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-shopping-cart'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.orders', $section)));
        $child->addChild('new_order', array(
            'route' => 'sylius_backend_order_create',
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-plus-sign'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.new_order', $section)));
        $child->addChild('payments', array(
            'route' => 'sylius_backend_payment_index',
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-credit-card'),
=======
            'labelAttributes' => array('icon' => 'icon-shopping-cart'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.orders', $section)));
        $child->addChild('new_order', array(
            'route' => 'sylius_backend_order_create',
            'labelAttributes' => array('icon' => 'icon-plus-sign'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.new_order', $section)));
        $child->addChild('payments', array(
            'route' => 'sylius_backend_payment_index',
            'labelAttributes' => array('icon' => 'icon-money'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.payments', $section)));

        $child->addChild('promotions', array(
            'route' => 'sylius_backend_promotion_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-bullhorn'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.promotions', $section)));
        $child->addChild('new_promotion', array(
            'route' => 'sylius_backend_promotion_create',
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-plus-sign'),
=======
            'labelAttributes' => array('icon' => 'icon-bullhorn'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.promotions', $section)));
        $child->addChild('new_promotion', array(
            'route' => 'sylius_backend_promotion_create',
            'labelAttributes' => array('icon' => 'icon-plus-sign'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.new_promotion', $section)));
    }

    /**
     * Add customers menu.
     *
     * @param ItemInterface $menu
     * @param array         $childOptions
     * @param string        $section
     */
    protected function addCustomersMenu(ItemInterface $menu, array $childOptions, $section)
    {
        $child = $menu
            ->addChild('customer', $childOptions)
            ->setLabel($this->translate(sprintf('sylius.backend.menu.%s.customer', $section)))
        ;

        $child->addChild('users', array(
            'route' => 'sylius_backend_user_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-user'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.users', $section)));
        $child->addChild('groups', array(
            'route' => 'sylius_backend_group_index',
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-home'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.groups', $section)));
=======
            'labelAttributes' => array('icon' => 'icon-user'),
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.users', $section)));
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }

    /**
     * Add configuration menu.
     *
     * @param ItemInterface $menu
     * @param array         $childOptions
     * @param string        $section
     */
    protected function addConfigurationMenu(ItemInterface $menu, array $childOptions, $section)
    {
        $child = $menu
            ->addChild('configuration', $childOptions)
            ->setLabel($this->translate(sprintf('sylius.backend.menu.%s.configuration', $section)))
        ;

        $child->addChild('general_settings', array(
            'route' => 'sylius_backend_general_settings',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-info-sign'),
=======
            'labelAttributes' => array('icon' => 'icon-cog'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.general_settings', $section)));

        $child->addChild('payment_methods', array(
            'route' => 'sylius_backend_payment_method_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-credit-card'),
=======
            'labelAttributes' => array('icon' => 'icon-credit-card'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.payment_methods', $section)));

        $child->addChild('exchange_rates', array(
            'route' => 'sylius_backend_exchange_rate_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-usd'),
=======
            'labelAttributes' => array('icon' => 'icon-money'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.exchange_rates', $section)));

        $child->addChild('taxation_settings', array(
            'route' => 'sylius_backend_taxation_settings',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-cog'),
=======
            'labelAttributes' => array('icon' => 'icon-cog'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.taxation_settings', $section)));

        $child->addChild('tax_categories', array(
            'route' => 'sylius_backend_tax_category_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-cog'),
=======
            'labelAttributes' => array('icon' => 'icon-book'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.tax_categories', $section)));

        $child->addChild('tax_rates', array(
            'route' => 'sylius_backend_tax_rate_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-cog'),
=======
            'labelAttributes' => array('icon' => 'icon-adjust'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.tax_rates', $section)));

        $child->addChild('shipping_categories', array(
            'route' => 'sylius_backend_shipping_category_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-cog'),
=======
            'labelAttributes' => array('icon' => 'icon-book'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.shipping_categories', $section)));

        $child->addChild('shipping_methods', array(
            'route' => 'sylius_backend_shipping_method_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-cog'),
=======
            'labelAttributes' => array('icon' => 'icon-truck'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.shipping_methods', $section)));

        $child->addChild('shipments', array(
            'route' => 'sylius_backend_shipment_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-plane'),
=======
            'labelAttributes' => array('icon' => 'icon-plane'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.shipments', $section)));

        $child->addChild('countries', array(
            'route' => 'sylius_backend_country_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-flag'),
=======
            'labelAttributes' => array('icon' => 'icon-flag'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.countries', $section)));

        $child->addChild('zones', array(
            'route' => 'sylius_backend_zone_index',
<<<<<<< HEAD
            'labelAttributes' => array('icon' => 'glyphicon glyphicon-globe'),
=======
            'labelAttributes' => array('icon' => 'icon-globe'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        ))->setLabel($this->translate(sprintf('sylius.backend.menu.%s.zones', $section)));
    }
}
