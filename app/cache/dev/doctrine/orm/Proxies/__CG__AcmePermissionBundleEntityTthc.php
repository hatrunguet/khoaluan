<?php

namespace Proxies\__CG__\Acme\PermissionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tthc extends \Acme\PermissionBundle\Entity\Tthc implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'nametthc', 'noidungthuchien', 'giaytohoso', 'thoigiangiaiquyet', 'phanquyen', 'ishide', 'idtthc', 'idvanbanlienquan', 'iddinhkem', 'iddonvithuly', 'idlinhvuc');
        }

        return array('__isInitialized__', 'nametthc', 'noidungthuchien', 'giaytohoso', 'thoigiangiaiquyet', 'phanquyen', 'ishide', 'idtthc', 'idvanbanlienquan', 'iddinhkem', 'iddonvithuly', 'idlinhvuc');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tthc $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setNametthc($nametthc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNametthc', array($nametthc));

        return parent::setNametthc($nametthc);
    }

    /**
     * {@inheritDoc}
     */
    public function getNametthc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNametthc', array());

        return parent::getNametthc();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoidungthuchien($noidungthuchien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoidungthuchien', array($noidungthuchien));

        return parent::setNoidungthuchien($noidungthuchien);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoidungthuchien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoidungthuchien', array());

        return parent::getNoidungthuchien();
    }

    /**
     * {@inheritDoc}
     */
    public function setGiaytohoso($giaytohoso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGiaytohoso', array($giaytohoso));

        return parent::setGiaytohoso($giaytohoso);
    }

    /**
     * {@inheritDoc}
     */
    public function getGiaytohoso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGiaytohoso', array());

        return parent::getGiaytohoso();
    }

    /**
     * {@inheritDoc}
     */
    public function setThoigiangiaiquyet($thoigiangiaiquyet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThoigiangiaiquyet', array($thoigiangiaiquyet));

        return parent::setThoigiangiaiquyet($thoigiangiaiquyet);
    }

    /**
     * {@inheritDoc}
     */
    public function getThoigiangiaiquyet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThoigiangiaiquyet', array());

        return parent::getThoigiangiaiquyet();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhanquyen($phanquyen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhanquyen', array($phanquyen));

        return parent::setPhanquyen($phanquyen);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhanquyen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhanquyen', array());

        return parent::getPhanquyen();
    }

    /**
     * {@inheritDoc}
     */
    public function setIshide($ishide)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIshide', array($ishide));

        return parent::setIshide($ishide);
    }

    /**
     * {@inheritDoc}
     */
    public function getIshide()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIshide', array());

        return parent::getIshide();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtthc()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdtthc();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtthc', array());

        return parent::getIdtthc();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdvanbanlienquan(\Acme\PermissionBundle\Entity\Vanbanlienquan $idvanbanlienquan = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdvanbanlienquan', array($idvanbanlienquan));

        return parent::setIdvanbanlienquan($idvanbanlienquan);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdvanbanlienquan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdvanbanlienquan', array());

        return parent::getIdvanbanlienquan();
    }

    /**
     * {@inheritDoc}
     */
    public function setIddinhkem(\Acme\PermissionBundle\Entity\Dinhkemtthc $iddinhkem = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIddinhkem', array($iddinhkem));

        return parent::setIddinhkem($iddinhkem);
    }

    /**
     * {@inheritDoc}
     */
    public function getIddinhkem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIddinhkem', array());

        return parent::getIddinhkem();
    }

    /**
     * {@inheritDoc}
     */
    public function setIddonvithuly(\Acme\PermissionBundle\Entity\Donvithuly $iddonvithuly = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIddonvithuly', array($iddonvithuly));

        return parent::setIddonvithuly($iddonvithuly);
    }

    /**
     * {@inheritDoc}
     */
    public function getIddonvithuly()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIddonvithuly', array());

        return parent::getIddonvithuly();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdlinhvuc(\Acme\PermissionBundle\Entity\Linhvuc $idlinhvuc = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdlinhvuc', array($idlinhvuc));

        return parent::setIdlinhvuc($idlinhvuc);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdlinhvuc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdlinhvuc', array());

        return parent::getIdlinhvuc();
    }

}