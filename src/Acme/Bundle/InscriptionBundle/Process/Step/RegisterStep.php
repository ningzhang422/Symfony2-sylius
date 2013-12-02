<?php
namespace Acme\Bundle\InscriptionBundle\Process\Step;

use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
use Sylius\Bundle\FlowBundle\Process\Step\ControllerStep;

class RegisterStep extends ControllerStep
{
    public function displayAction(ProcessContextInterface $context)
    {
        return $this->render('AcmeInscriptionBundle:Process/Step:register.html.twig');
    }

    public function forwardAction(ProcessContextInterface $context)
    {
        return $this->complete();
    }
}