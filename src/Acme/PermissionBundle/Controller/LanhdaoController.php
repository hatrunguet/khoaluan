<?php

namespace Acme\PermissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\PermissionBundle\Entity\Tthc;
use Acme\PermissionBundle\Entity\User;
use Acme\PermissionBundle\Entity\Linhvuc;
use Acme\PermissionBundle\Entity\QuyenLinhvuc;
use Acme\PermissionBundle\Entity\Groupfunc;
use Acme\PermissionBundle\Form\UserType;
use Acme\PermissionBundle\Form\LinhvucType;
use Acme\PermissionBundle\Form\QuyenlinhvucType;
use Acme\PermissionBundle\Form\AddQuyenlinhvucType;
use Acme\PermissionBundle\Form\TTHCType;
use Symfony\Component\HttpFoundation\Request;
use JMS\SecurityExtraBundle\Annotation\Secure;
class LanhdaoController extends Controller
{
    public function xulyhosoAction()
    {
        return $this->render('AcmePermissionBundle:Lanhdao:xulyhoso.html.twig');
    }
    public function thongkehosoAction()
    {
        return $this->render('AcmePermissionBundle:Lanhdao:xulyhoso.html.twig');
    }
    public function changeStatus()
    {
        
    }
}
