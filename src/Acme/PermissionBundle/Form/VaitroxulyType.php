<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Acme\PermissionBundle\Form\TTHCType;
class VaitroxulyType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('vaitro','entity',array(
            'class'=>'AcmePermissionBundle:Vaitro',
            'property'=>'name',
            'label'=>'Vai Trò',
            'multiple'=>FALSE,
            'attr' => array('class'=>'styled'),
            'expanded'=>FALSE
        ))     
        ->add('user','entity',array(
            'class'=>'AcmePermissionBundle:User',
            'property'=>'username',
            'label'=>'User',
            'attr' => array('class'=>'styled'),
//            'multiple'=>FALSE,
//            'expanded'=>FALSE
        ))             
        ->add('tthc', new TTHCType())
        ->add('submit','submit')
            ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'Acme\PermissionBundle\Entity\Vaitroxuly'
        ));
    }
    public function getName()
    {
        return 'vaitroxuly';
    }    
}



