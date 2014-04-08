<?php

namespace Acme\PermissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
//    public function menuCreateAction()
//    {
//        $usr = $this->get('security.context')->getToken()->getUser();
//        $em = $this->getDoctrine()->getManager();
//        $functions = array();
//        foreach ($usr->getRole() as $role){
//            $temp = $em->createQuery('SELECT f from AcmePermissionBundle:Functions f '
//                    . 'JOIN f.groupfunction g '
//                    . 'JOIN g.role r '
//                    . 'WHERE r.id = :id')->setParameter('id',$role->getId())->getResult();
//            $functions = array_merge($temp,$functions);
//        }
//        return $this->render('AcmePermissionBundle:Default:menu.html.twig',array('functions' => $functions));
//    }
    
    
     public function groupFuncViewAction()
    {
        $usr = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
         $gfunc = array();
        foreach ($usr->getRole() as $role){
            $temp = $em->createQuery('SELECT g from AcmePermissionBundle:Groupfunction g '
                    . 'JOIN g.role r '
                    . 'WHERE r.id = :id')->setParameter('id',$role->getId())->getResult();
            $gfunc = array_merge($temp,$gfunc);
        }
        
        return $this->render('AcmePermissionBundle:Default:groupFuncView.html.twig',array('gfunc' => $gfunc));
    }
    
    public function indexAction(){
        return $this->render('AcmePermissionBundle:Admin:baseAdmin.html.twig');
    }
}
