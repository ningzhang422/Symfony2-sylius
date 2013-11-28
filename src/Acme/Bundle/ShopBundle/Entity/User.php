<?php

namespace Acme\Bundle\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Sylius\Bundle\CoreBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_user")
 */
class User extends BaseUser
{
  /**
     * @var string
     *
     * @ORM\Column(name="moblile", type="string", length=10)
     */
  protected $mobile;

  
  public function setMobile($mobile)
  {
    $this->mobile = $mobile;
  }
  
  public function getMobile()
  {
    return $this->mobile;
  }
}