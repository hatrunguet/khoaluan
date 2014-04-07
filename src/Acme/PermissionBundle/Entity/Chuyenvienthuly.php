<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chuyenvienthuly
 *
 * @ORM\Table(name="chuyenvienthuly", indexes={@ORM\Index(name="FK_CanBo_DVThuLy_idx", columns={"idDonViThuLy"})})
 * @ORM\Entity
 */
class Chuyenvienthuly
{
    /**
     * @var string
     *
     * @ORM\Column(name="NameCB", type="string", length=45, nullable=false)
     */
    private $namecb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NgaySinh", type="date", nullable=false)
     */
    private $ngaysinh;

    /**
     * @var integer
     *
     * @ORM\Column(name="idChuyenVienThuLy", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchuyenvienthuly;

    /**
     * @var \Acme\PermissionBundle\Entity\Donvithuly
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Donvithuly")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDonViThuLy", referencedColumnName="idDonViThuLy")
     * })
     */
    private $iddonvithuly;



    /**
     * Set namecb
     *
     * @param string $namecb
     * @return Chuyenvienthuly
     */
    public function setNamecb($namecb)
    {
        $this->namecb = $namecb;

        return $this;
    }

    /**
     * Get namecb
     *
     * @return string 
     */
    public function getNamecb()
    {
        return $this->namecb;
    }

    /**
     * Set ngaysinh
     *
     * @param \DateTime $ngaysinh
     * @return Chuyenvienthuly
     */
    public function setNgaysinh($ngaysinh)
    {
        $this->ngaysinh = $ngaysinh;

        return $this;
    }

    /**
     * Get ngaysinh
     *
     * @return \DateTime 
     */
    public function getNgaysinh()
    {
        return $this->ngaysinh;
    }

    /**
     * Get idchuyenvienthuly
     *
     * @return integer 
     */
    public function getIdchuyenvienthuly()
    {
        return $this->idchuyenvienthuly;
    }

    /**
     * Set iddonvithuly
     *
     * @param \Acme\PermissionBundle\Entity\Donvithuly $iddonvithuly
     * @return Chuyenvienthuly
     */
    public function setIddonvithuly(\Acme\PermissionBundle\Entity\Donvithuly $iddonvithuly = null)
    {
        $this->iddonvithuly = $iddonvithuly;

        return $this;
    }

    /**
     * Get iddonvithuly
     *
     * @return \Acme\PermissionBundle\Entity\Donvithuly 
     */
    public function getIddonvithuly()
    {
        return $this->iddonvithuly;
    }
}
