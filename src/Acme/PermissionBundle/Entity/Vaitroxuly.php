<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vaitroxuly
 *
 * @ORM\Table(name="vaitroxuly", indexes={@ORM\Index(name="fk_Vaitroxuly_User1_idx", columns={"User"}), @ORM\Index(name="fk_Vaitroxuly_TTHC1_idx", columns={"TTHC"}), @ORM\Index(name="fk_Vaitroxuly_Vaitro1_idx", columns={"Vaitro"})})
 * @ORM\Entity
 */
class Vaitroxuly
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\PermissionBundle\Entity\Vaitro
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Vaitro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Vaitro", referencedColumnName="id")
     * })
     */
    private $vaitro;

    /**
     * @var \Acme\PermissionBundle\Entity\Tthc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Tthc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TTHC", referencedColumnName="idTTHC")
     * })
     */
    private $tthc;

    /**
     * @var \Acme\PermissionBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vaitro
     *
     * @param \Acme\PermissionBundle\Entity\Vaitro $vaitro
     * @return Vaitroxuly
     */
    public function setVaitro(\Acme\PermissionBundle\Entity\Vaitro $vaitro = null)
    {
        $this->vaitro = $vaitro;

        return $this;
    }

    /**
     * Get vaitro
     *
     * @return \Acme\PermissionBundle\Entity\Vaitro 
     */
    public function getVaitro()
    {
        return $this->vaitro;
    }

    /**
     * Set tthc
     *
     * @param \Acme\PermissionBundle\Entity\Tthc $tthc
     * @return Vaitroxuly
     */
    public function setTthc(\Acme\PermissionBundle\Entity\Tthc $tthc = null)
    {
        $this->tthc = $tthc;

        return $this;
    }

    /**
     * Get tthc
     *
     * @return \Acme\PermissionBundle\Entity\Tthc 
     */
    public function getTthc()
    {
        return $this->tthc;
    }

    /**
     * Set user
     *
     * @param \Acme\PermissionBundle\Entity\User $user
     * @return Vaitroxuly
     */
    public function setUser(\Acme\PermissionBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\PermissionBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
