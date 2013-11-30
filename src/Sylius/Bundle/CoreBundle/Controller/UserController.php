<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Controller;

use Sylius\Bundle\ResourceBundle\Controller\ResourceController;
use Symfony\Component\HttpFoundation\Request;

class UserController extends ResourceController
{
    /**
     * Render user filter form.
     */
    public function filterFormAction(Request $request)
    {
<<<<<<< HEAD
        return $this->renderResponse('SyliusWebBundle:Backend/User:filterForm.html.twig', array(
            'form' => $this->get('form.factory')->createNamed('criteria', 'sylius_user_filter', $request->query->get('criteria'))->createView()
        ));
=======
        // $form = $this->getFormFactory()->createNamed('criteria', 'sylius_user_filter', $request->query->get('criteria'));
        
        return $this->renderResponse('SyliusWebBundle:Backend/User:filterForm.html.twig', 
                                       array(
                                            'form' => $this->get('form.factory')->createNamed('criteria', 'sylius_user_filter', $request->query->get('criteria'))->createView()
                                    ));
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }
}
