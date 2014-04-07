<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class AddQuyenlinhvucType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){
        $quyenlinhvuc = $event->getData();
        $form = $event->getForm();
        if ($quyenlinhvuc != NULL){
            $form->add('quyenhan','entity',array(
                'class'=>'AcmePermissionBundle:Quyenhan',
                'property'=>'ten',
                'label'=>'Quyền hạn',
            ))
            ->add('linhvuc','entity',array(
                'class'=>'AcmePermissionBundle:Linhvuc',
                'property'=>'name',
                'label'=>'Lĩnh vực',
            ))   
            ->add('submit','submit');        
            }
        });
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {        
        $resolver->setDefaults(array(
            'data_class' => 'Acme\PermissionBundle\Entity\Quyenlinhvuc',
        ));
    }
    public function getName()
    {
        return 'quyenlinhvuc';
    }    
}

