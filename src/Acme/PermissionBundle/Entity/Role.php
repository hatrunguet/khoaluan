<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role implements \Symfony\Component\Security\Core\Role\RoleInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=45, nullable=true)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Acme\PermissionBundle\Entity\Groupfunction", mappedBy="role")
     */
    private $groupfunction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\PermissionBundle\Entity\User", mappedBy="role")
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\PermissionBundle\Entity\Functions", inversedBy="role")
     * @ORM\JoinTable(name="role_has_functions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Role_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Functions_idFunctions", referencedColumnName="idFunctions")
     *   }
     * )
     */
    private $functionsfunctions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupfunction = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->functionsfunctions = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Role
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
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

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
     * Add groupfunction
     *
     * @param \Acme\PermissionBundle\Entity\Groupfunction $groupfunction
     * @return Role
     */
    public function addGroupfunction(\Acme\PermissionBundle\Entity\Groupfunction $groupfunction)
    {
        $this->groupfunction[] = $groupfunction;

        return $this;
    }

    /**
     * Remove groupfunction
     *
     * @param \Acme\PermissionBundle\Entity\Groupfunction $groupfunction
     */
    public function removeGroupfunction(\Acme\PermissionBundle\Entity\Groupfunction $groupfunction)
    {
        $this->groupfunction->removeElement($groupfunction);
    }

    /**
     * Get groupfunction
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroupfunction()
    {
        return $this->groupfunction;
    }

    /**
     * Add user
     *
     * @param \Acme\PermissionBundle\Entity\User $user
     * @return Role
     */
    public function addUser(\Acme\PermissionBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Acme\PermissionBundle\Entity\User $user
     */
    public function removeUser(\Acme\PermissionBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add functionsfunctions
     *
     * @param \Acme\PermissionBundle\Entity\Functions $functionsfunctions
     * @return Role
     */
    public function addFunctionsfunction(\Acme\PermissionBundle\Entity\Functions $functionsfunctions)
    {
        $this->functionsfunctions[] = $functionsfunctions;

        return $this;
    }

    /**
     * Remove functionsfunctions
     *
     * @param \Acme\PermissionBundle\Entity\Functions $functionsfunctions
     */
    public function removeFunctionsfunction(\Acme\PermissionBundle\Entity\Functions $functionsfunctions)
    {
        $this->functionsfunctions->removeElement($functionsfunctions);
    }

    /**
     * Get functionsfunctions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFunctionsfunctions()
    {
        return $this->functionsfunctions;
    }
}
