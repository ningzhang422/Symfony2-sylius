<?php

namespace Sylius\Bundle\ShopBundle\Model;

use Sylius\Bundle\CoreBundle\Model\User as BaseUser;

class User extends BaseUser
{
  protected $mobile;
  
  /**
   * {@inheritdoc}
   */
  public function setMobile($mobile)
  {
    $this->mobile = $mobile;
  }
  /**
   * {@inheritdoc}
   */
  public function getMobile()
  {
    return $this->mobile;
  }
}