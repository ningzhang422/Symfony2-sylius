<<<<<<< HEAD

<?php
umask(0000);
=======
<?php

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;

/*
 * Sylius front controller.
 * Live (production) environment.
 */

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';

//$loader = new ApcClassLoader('sylius', $loader);
//$loader->register(true);

require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';

<<<<<<< HEAD
$kernel = new AppKernel('prod', false);
=======
$kernel = new AppKernel('prod', true);
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
//$kernel = new AppCache($kernel);

$request = Request::createFromGlobals();

Request::enableHttpMethodParameterOverride();

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
