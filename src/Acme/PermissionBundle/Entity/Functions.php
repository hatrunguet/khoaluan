<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Functions
 *
 * @ORM\Table(name="functions", indexes={@ORM\Index(name="fk_Function_GroupFunction1_idx", columns={"GroupFunction"}), @ORM\Index(name="fk_Function_Role1_idx", columns={"Role"})})
 * @ORM\Entity
 */
class Functions
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=45, nullable=false)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFunction", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfunction;

    /**
     * @var \Acme\PermissionBundle\Entity\Role
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Role", referencedColumnName="id")
     * })
     */
    private $role;

    /**
     * @var \Acme\PermissionBundle\Entity\Groupfunction
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Groupfunction", inversedBy="functions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GroupFunction", referencedColumnName="idGroupFunction")
     * })
     */
    private $groupfunction;



    /**
     * Set name
     *
     * @param string $name
     * @return Functions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Functions
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Get idfunction
     *
     * @return integer 
     */
    public function getIdfunction()
    {
        return $this->idfunction;
    }

    /**
     * Set role
     *
     * @param \Acme\PermissionBundle\Entity\Role $role
     * @return Functions
     */
    public function setRole(\Acme\PermissionBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Acme\PermissionBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set groupfunction
     *
     * @param \Acme\PermissionBundle\Entity\Groupfunction $groupfunction
     * @return Functions
     */
    public function setGroupfunction(\Acme\PermissionBundle\Entity\Groupfunction $groupfunction = null)
    {
        $this->groupfunction = $groupfunction;

        return $this;
    }

    /**
     * Get groupfunction
     *
     * @return \Acme\PermissionBundle\Entity\Groupfunction 
     */
    public function getGroupfunction()
    {
        return $this->groupfunction;
    }
}
