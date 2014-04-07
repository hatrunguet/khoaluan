<?php

namespace EnhancedProxyd8391c92_feaa30eb00c5b07b42198467e8d8e188acb73cff\__CG__\Acme\PermissionBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class StaffController extends \Acme\PermissionBundle\Controller\StaffController
{
    private $__CGInterception__loader;

    public function statisticProfileAction()
    {
        $ref = new \ReflectionMethod('Acme\\PermissionBundle\\Controller\\StaffController', 'statisticProfileAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}