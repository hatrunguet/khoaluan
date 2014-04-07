<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class createFuncType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('name','text')
                ->add('path','text')
                ->add('groupfunction','entity',array(
                    'class'=>'AcmePermissionBundle:Groupfunction',
                    'property'=>'name',
                    'multiple'=>FALSE,
                    'attr' => array('class'=>'styled'),
                    'expanded'=>FALSE
                ))
                ->add('role','entity',array(
                    'class'=>'AcmePermissionBundle:Role',
                    'property'=>'Role',
                    'multiple'=>FALSE,
                    'attr' => array('class'=>'styled'),
                    'expanded'=>FALSE
                ))
                ->add('submit','submit')
            ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'Acme\PermissionBundle\Entity\Functions'
        ));
    }
    public function getName()
    {
        return 'functions';
    }    
}



