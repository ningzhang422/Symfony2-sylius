<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ResourceBundle\Twig;

<<<<<<< HEAD
use Pagerfanta\Pagerfanta;
use Symfony\Component\DependencyInjection\Container;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Routing\RouterInterface;
use Twig_Extension;
use Twig_Function_Method;

/**
 * Sylius resource twig helper.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 * @author Saša Stamenković <umpirsky@gmail.com>
<<<<<<< HEAD
 * @author Arnaud Langlade <arn0d.dev@gmail.com>
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
 */
class SyliusResourceExtension extends Twig_Extension
{
    /**
<<<<<<< HEAD
     * @var string
     */
    private $paginateTemplate;

    /**
     * @var string
     */
    private $sortingTemplate;

    /**
     * @var array
     */
    private $syliusRouteParams = array();

    /**
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     * @var \Symfony\Component\HttpFoundation\Request
     */
    private $request;

    /**
<<<<<<< HEAD
     * @var Container
     */
    private $container;

    public function __construct(Container $container, $paginateTemplate, $sortingTemplate)
    {
        $this->container = $container;
        $this->paginateTemplate = $paginateTemplate;
        $this->sortingTemplate = $sortingTemplate;
=======
     * @var RouterInterface
     */
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'sylius_resource_sort' => new Twig_Function_Method($this, 'renderSortingLink', array('is_safe' => array('html'))),
<<<<<<< HEAD
            'sylius_resource_paginate' => new Twig_Function_Method($this, 'renderPaginateSelect', array('is_safe' => array('html'))),
        );
    }

    /**
     * @param GetResponseEvent $event
     */
=======
        );
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function fetchRequest(GetResponseEvent $event)
    {
        if (HttpKernel::MASTER_REQUEST != $event->getRequestType()) {
            return;
        }

        $this->request = $event->getRequest();
<<<<<<< HEAD

        $routeParams = $this->request->attributes->get('_route_params', array());
        if (array_key_exists('_sylius', $routeParams)) {
            $this->syliusRouteParams = $routeParams['_sylius'];
        }
    }

    /**
     * @param string$property
     * @param mixed $label
     * @param string $order
     * @param array $options
     * @return string
     */
    public function renderSortingLink($property, $label = null, $order = 'asc', array $options = array())
    {
        if (array_key_exists('sortable', $this->syliusRouteParams) &&
            !$this->syliusRouteParams['sortable']) {
            return $label;
        }

        if ('asc' !== $order && 'desc' !== $order) {
            $order ='asc';
        }

        $options = $this->getOptions($options, $this->sortingTemplate);
        $label = null === $label ? $property : $label;
        $sorting = $this->request->get('sorting', array());
        $currentOrder = isset($sorting[$property]) ? $sorting[$property] : null;

        if (null !== $currentOrder) {
            $order = 'asc' === $currentOrder ? 'desc' : 'asc';
        }

        $url = $this->container->get('router')->generate(
            $this->getRouteName($options['route']),
            $this->getRouteParams(
                array('sorting' => array($property => $order)),
                $options['route_params']
            )
        );

        return $this->container->get('templating')->render(
            $options['template'],
            array(
                'url' => $url,
                'label' => $label,
                'icon' => $property == key($sorting),
                'currentOrder' => $currentOrder,
            )
        );
    }

    /**
     * @param \Pagerfanta\Pagerfanta $paginator
     * @param array $limitOptions
     * @param array $options
     * @return string
     */
    public function renderPaginateSelect(Pagerfanta $paginator, array $limitOptions, array $options = array())
    {
        if (array_key_exists('paginate', $this->syliusRouteParams) &&
            is_string($this->syliusRouteParams['paginate'])) {
            $options = $this->getOptions($options, $this->paginateTemplate);
            $paginateName = substr($this->syliusRouteParams['paginate'], 1);

            foreach ($limitOptions as $limit) {
                $routeParams = $this->getRouteParams(
                    array($paginateName => $limit),
                    $options['route_params']
                );

                if (array_key_exists('page', $routeParams)) {
                    $routeParams['page'] = 1;
                }

                $limits[$limit] = $this->container->get('router')->generate(
                    $this->getRouteName($options['route']),
                    $routeParams
                );
            }

            return $this->container->get('templating')->render(
                $options['template'],
                array(
                    'paginator' => $paginator,
                    'limits' => $limits,
                )
            );
        }
=======
    }

    public function renderSortingLink($property, $label = null, $order = null, $route = null, array $routeParameters = array())
    {
        $label = null === $label ? $property : $label;
        $route = null === $route ? $this->request->attributes->get('_route') : $route;

        $routeParameters = empty($routeParameters) ? $this->request->attributes->get('_route_parameters', array()) : $routeParameters;

        $sorting = $this->request->get('sorting', array());

        if (null === $order && isset($sorting[$property])) {
            $currentOrder = $sorting[$property];

            $order = 'asc' === $currentOrder ? 'desc' : 'asc';
        }

        $order = null === $order ? 'asc' : $order;

        $url = $this->router->generate($route, array_merge(
            array('sorting' => array($property => $order)), $routeParameters
        ));

        // @TODO: Move this to templates when we refactor resource bundle.
        $active = $property == key($sorting) ? ($currentOrder === 'desc' ? ' <i class="icon icon-chevron-down"></i>' : ' <i class="icon icon-chevron-up"></i>'): '';

        return sprintf('<a href="%s">%s%s</a>', $url, $label, $active);
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_resource';
    }
<<<<<<< HEAD

    /**
     * @param array $params
     * @param array $default
     * @return array
     */
    private function getRouteParams(array $params = array(), array $default = array())
    {
        return array_merge(
            $this->request->query->all(),
            $this->request->attributes->get('_route_params'),
            array_merge($params, $default)
        );
    }

    /**
     * @param null $route
     * @return mixed|null
     */
    private function getRouteName($route = null)
    {
        return (null === $route) ? $this->request->attributes->get('_route') : $route;
    }

    /**
     * @param array $options
     * @param $defaultTemplate
     * @return array
     */
    private function getOptions(array $options, $defaultTemplate)
    {
        if (!array_key_exists('template', $options)) {
            $options['template'] = $defaultTemplate;
        }

        if (!array_key_exists('route', $options)) {
            $options['route'] = null;
        }

        if (!array_key_exists('route_params', $options)) {
            $options['route_params'] = array();
        }

        return $options;
    }
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
}
