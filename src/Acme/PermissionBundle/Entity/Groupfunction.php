<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupfunction
 *
 * @ORM\Table(name="groupfunction")
 * @ORM\Entity
 */
class Groupfunction
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
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="idGroupFunction", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroupfunction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Acme\PermissionBundle\Entity\Functions", mappedBy="groupfunction")
     */
    private $functions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->functions = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Groupfunction
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
     * Set description
     *
     * @param string $description
     * @return Groupfunction
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get idgroupfunction
     *
     * @return integer 
     */
    public function getIdgroupfunction()
    {
        return $this->idgroupfunction;
    }

    /**
     * Add functions
     *
     * @param \Acme\PermissionBundle\Entity\Functions $functions
     * @return Groupfunction
     */
    public function addFunction(\Acme\PermissionBundle\Entity\Functions $functions)
    {
        $this->functions[] = $functions;

        return $this;
    }

    /**
     * Remove functions
     *
     * @param \Acme\PermissionBundle\Entity\Functions $functions
     */
    public function removeFunction(\Acme\PermissionBundle\Entity\Functions $functions)
    {
        $this->functions->removeElement($functions);
    }

    /**
     * Get functions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFunctions()
    {
        return $this->functions;
    }
}
