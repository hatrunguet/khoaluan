<?php

namespace Acme\PermissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\PermissionBundle\Entity\Tthc;
use Acme\PermissionBundle\Entity\User;
use Acme\PermissionBundle\Entity\Linhvuc;
use Acme\PermissionBundle\Entity\QuyenLinhvuc;
use Acme\PermissionBundle\Form\UserType;
use Acme\PermissionBundle\Form\LinhvucType;
use Acme\PermissionBundle\Form\QuyenlinhvucType;
use Acme\PermissionBundle\Form\AddQuyenlinhvucType;
use Acme\PermissionBundle\Form\viewVaitroType;
use Acme\PermissionBundle\Form\createFuncType;
use Acme\PermissionBundle\Form\TTHCType;
use Acme\PermissionBundle\Form\QuyenTTHCType;
use Symfony\Component\HttpFoundation\Request;
use JMS\SecurityExtraBundle\Annotation\Secure;
class PermissionController extends Controller
{    
  
    public function intinialDataAction(){
        return $this->render('AcmePermissionBundle:Admin:initialData.html.twig');
    }    
    public function createUserAction(Request $request)
    {
        $alert = NULL;
        $user = new User();
        $form = $this->createForm(new UserType(),$user,array(
            'action'=>$this->generateUrl('createUser')
        ));
        $form->handleRequest($request);
        if ($form->isValid()){            
            $em = $this->getDoctrine()->getManager();
//            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
//            $password12 = $encoder->encodePassword($form->get('password')->getData(),$user->getSalt());
//            $user->setPassword($password12);
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('initialData'));
        }
        return $this->render('AcmePermissionBundle:Admin:createUser.html.twig',array('form'=>$form->createView(),'alert'=>$alert));
    }
    public function createLinhvucAction(Request $request)
    {
        $linhvuc = new Linhvuc();
        $form = $this->createForm(new LinhvucType(),$linhvuc,array(
            'action'=>$this->generateUrl('createLinhvuc')
        ));
        $form->handleRequest($request);
        if ($form->isValid()){        
            $em = $this->getDoctrine()->getManager();
            $em->persist($linhvuc);
            $em->flush();
//            return $this->render('AcmePermissionBundle:Admin:initialData.html.twig');
            return $this->redirect($this->generateUrl('initialData'));
        }
        return $this->render('AcmePermissionBundle:Admin:createLinhvuc.html.twig',array('form'=>$form->createView()));
    }
    public function createQuyenTTHCAction(Request $request)
    {
        $vaitro = new \Acme\PermissionBundle\Entity\Quyentthc();
        $form = $this->createForm(new QuyenTTHCType(),$vaitro,array(
            'action'=>  $this->generateUrl('createTTHC')
        ));
        $form->handleRequest($request);
        if ($form->isValid()){            
            $em = $this->getDoctrine()->getManager();
            $tthc = $form->getData();
            $user = $form->get('user')->getData();
            $em->persist($tthc->getTthc());
            $em->persist($vaitro);
            $em->flush();
            return $this->redirect($this->generateUrl('initialData'));
        }
        return $this->render('AcmePermissionBundle:Admin:createTTHC.html.twig',array('form'=>$form->createView()));
    }
    public function permissionAction(Request $request)
    {
           $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:Quyentthc');
           $vaitro = $resposity->findAll();
           $form = $this->createFormBuilder()// tao checkbox xoa
                   ->add('quyenhan','entity',array(
                       'class'=>'AcmePermissionBundle:Quyentthc',
                       'property'=>'id',
                       'multiple'=>TRUE,
                       'expanded'=>TRUE
                   ))
                   ->add('submit','submit')
                   ->getForm();
           $form->handleRequest($request);        
           if ($form->isValid()){
               $em = $this->getDoctrine()->getManager();
               $func = $form->getData()['vaitro'];
               foreach ($func as $f){
                   $em->remove($f);
               }
               $em->flush();
               return $this->redirect($this->generateUrl('permission'));
           }
           return $this->render('AcmePermissionBundle:Admin:permission.html.twig',array('vaitroxuly'=>$vaitro,'form'=>$form->createView()));
    }
    
    public function editPermissionAction($id,Request $request){
        $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:Quyentthc');
        $vaitro = $resposity->find($id);
        $form = $this->createForm(new QuyenTTHCType(),$vaitro);
        $form->handleRequest($request);
        if ($form->isValid()){            
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('permission'));
        }
        return $this->render('AcmePermissionBundle:Admin:editPermission.html.twig',array('form'=>$form->createView(),'vaitro'=>$vaitro));
    }
   
    public function addPermissionAction($id,Request $request){
        $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:User');
        $user = $resposity->findOneById($id);
        $quyenlinhvuc = new Quyenlinhvuc();
        $quyenlinhvuc->setUser($user);
        $form = $this->createForm(new AddQuyenlinhvucType(),$quyenlinhvuc);
        $form->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($quyenlinhvuc);
            $em->flush();
//            return $this->redirect($this->generateUrl('permission'));
        }
        return $this->render('AcmePermissionBundle:Admin:addPermission.html.twig',array('form'=>$form->createView(),'user'=>$user));
    }
   
    public function statisticAction(){
        $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:User');
        $users = $resposity->findAll();
        return $this->render('AcmePermissionBundle:Admin:statistic.html.twig',array('users'=>$users));
    }
//    public function createFuncAction(Request $request){
//        $func = new \Acme\PermissionBundle\Entity\Functions();
//        $form = $this->createForm(new createFuncType(),$func,array(
//            'action'=>  $this->generateUrl('createFunc')
//        ));
//        $form->handleRequest($request);
//        if ($form->isValid()){            
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($func);
//            $em->flush();
//            return $this->redirect($this->generateUrl('initialData'));
//        }
//        return $this->render('AcmePermissionBundle:Admin:createFunc.html.twig',array('form'=>$form->createView()));
//    }
    
    
    public function tableUserAction(Request $request)
    {
           $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:User');
           $vaitro = $resposity->findAll();
           $form = $this->createFormBuilder()// tao checkbox xoa
                   ->add('vaitro','entity',array(
                       'class'=>'AcmePermissionBundle:User',
                       'property'=>'id',
                       'multiple'=>FALSE,
                       'expanded'=>TRUE
                   ))
//                   ->add('username','text',array(
//                        'label'=>'Username:',
//                        'attr'=>array(
//                         'class'=>'form-control'
//                         )
//                   ))
                   ->add('submit','submit')
                   ->getForm();
           $form->handleRequest($request);        
           if ($form->isValid()){
               $em = $this->getDoctrine()->getManager();
               $func = $form->getData()['vaitro'];
               $em->flush();
               return $this->redirect($this->generateUrl('tableUser'));
           }
           return $this->render('AcmePermissionBundle:Admin:tableUser.html.twig',array('vaitro'=>$vaitro,'form'=>$form->createView()));
    }
    
}
