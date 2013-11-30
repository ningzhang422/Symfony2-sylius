<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Model;

class VariantImage extends Image implements VariantImageInterface
{
<<<<<<< HEAD
    /**
     * The associated variant
     *
     * @var VariantInterface
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    protected $variant;

    /**
     * {@inheritdoc}
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * {@inheritdoc}
     */
    public function setVariant(VariantInterface $variant = null)
    {
        $this->variant = $variant;
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }
}
