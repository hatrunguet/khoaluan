<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TTHCType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('nametthc','text',array(
            'label'=>'Tên TTHC'
        ))    
        ->add('idlinhvuc','entity',array(
            'class'=>'AcmePermissionBundle:Linhvuc',
            'property'=>'namedv',
            'label'=>'Lĩnh vực',
            'multiple'=>FALSE,
            'attr' => array('class'=>'styled'),
            'expanded'=>FALSE
        ))
        ->add('iddonvithuly','entity',array(
            'class'=>'AcmePermissionBundle:Donvithuly',
            'property'=>'namedonvithuly',
            'label'=>'Tên Đơn Vị Thụ Lý',
            'multiple'=>FALSE,
            'attr' => array('class'=>'styled'),
            'expanded'=>FALSE
        ))     
            ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'Acme\PermissionBundle\Entity\Tthc'
        ));
    }
    public function getName()
    {
        return 'tthc';
    }    
}

