<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Acme\PermissionBundle\Form\TTHCType;
class QuyenTTHCType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('quyenhan','entity',array(
            'class'=>'AcmePermissionBundle:Quyenhan',
            'property'=>'name',
            'label'=>'Quyền Hạn',
            'multiple'=>FALSE,
            'attr' => array('class'=>'styled'),
            'expanded'=>FALSE
        ))     
        ->add('user','entity',array(
            'class'=>'AcmePermissionBundle:User',
            'property'=>'id',
            'label'=>'User',
            'attr' => array('class'=>'styled')
        ))             
        ->add('tthc', new TTHCType())
        ->add('submit','submit')
            ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'Acme\PermissionBundle\Entity\Quyentthc'
        ));
    }
    public function getName()
    {
        return 'quyentthc';
    }    
}



