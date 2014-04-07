<?php

namespace Acme\PermissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;
class StaffController extends Controller
{
    /**
    * @Secure(roles="ROLE_STAFF")
    */
    public function statisticProfileAction()
    {
        $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:Hosotthc');
        $profiles = $resposity->findAll();
        return $this->render('AcmePermissionBundle:Staff:statistic.html.twig',array('profiles'=>$profiles));
    }
}
