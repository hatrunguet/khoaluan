<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hosotthc
 *
 * @ORM\Table(name="hosotthc", indexes={@ORM\Index(name="FK_HSTTHC_CongDan_idx", columns={"idCongDan"}), @ORM\Index(name="FK_HSTTHC_TTHC_idx", columns={"idTTHC"}), @ORM\Index(name="FK_HSTTHC_DVThuLy_idx", columns={"idDonViThuLy"}), @ORM\Index(name="FK_HSTTHC_TTTL_idx", columns={"idTinhTrangThuLy"}), @ORM\Index(name="FK_HSTTHC_DKNhan_idx", columns={"idDinhKemNhan"}), @ORM\Index(name="FK_HSTTHC_DKGui_idx", columns={"idDinhKemGui"})})
 * @ORM\Entity
 */
class Hosotthc
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NgayNhan", type="date", nullable=false)
     */
    private $ngaynhan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NgayHenTra", type="date", nullable=false)
     */
    private $ngayhentra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsSentDVTL", type="boolean", nullable=true)
     */
    private $issentdvtl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsRecieveDVTL", type="boolean", nullable=true)
     */
    private $isrecievedvtl;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHoSoTTHC", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhosotthc;

    /**
     * @var \Acme\PermissionBundle\Entity\Tthc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Tthc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTTHC", referencedColumnName="idTTHC")
     * })
     */
    private $idtthc;

    /**
     * @var \Acme\PermissionBundle\Entity\Tinhtrangthuly
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Tinhtrangthuly")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTinhTrangThuLy", referencedColumnName="idTinhTrangThuLy")
     * })
     */
    private $idtinhtrangthuly;

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
     * @var \Acme\PermissionBundle\Entity\Dinhkemnhanhs
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Dinhkemnhanhs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDinhKemNhan", referencedColumnName="idDinhKemNhanHS")
     * })
     */
    private $iddinhkemnhan;

    /**
     * @var \Acme\PermissionBundle\Entity\Dinhkemguihs
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Dinhkemguihs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDinhKemGui", referencedColumnName="idDinhKemGuiHS")
     * })
     */
    private $iddinhkemgui;

    /**
     * @var \Acme\PermissionBundle\Entity\Congdan
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Congdan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCongDan", referencedColumnName="idCongDan")
     * })
     */
    private $idcongdan;



    /**
     * Set ngaynhan
     *
     * @param \DateTime $ngaynhan
     * @return Hosotthc
     */
    public function setNgaynhan($ngaynhan)
    {
        $this->ngaynhan = $ngaynhan;

        return $this;
    }

    /**
     * Get ngaynhan
     *
     * @return \DateTime 
     */
    public function getNgaynhan()
    {
        return $this->ngaynhan;
    }

    /**
     * Set ngayhentra
     *
     * @param \DateTime $ngayhentra
     * @return Hosotthc
     */
    public function setNgayhentra($ngayhentra)
    {
        $this->ngayhentra = $ngayhentra;

        return $this;
    }

    /**
     * Get ngayhentra
     *
     * @return \DateTime 
     */
    public function getNgayhentra()
    {
        return $this->ngayhentra;
    }

    /**
     * Set issentdvtl
     *
     * @param boolean $issentdvtl
     * @return Hosotthc
     */
    public function setIssentdvtl($issentdvtl)
    {
        $this->issentdvtl = $issentdvtl;

        return $this;
    }

    /**
     * Get issentdvtl
     *
     * @return boolean 
     */
    public function getIssentdvtl()
    {
        return $this->issentdvtl;
    }

    /**
     * Set isrecievedvtl
     *
     * @param boolean $isrecievedvtl
     * @return Hosotthc
     */
    public function setIsrecievedvtl($isrecievedvtl)
    {
        $this->isrecievedvtl = $isrecievedvtl;

        return $this;
    }

    /**
     * Get isrecievedvtl
     *
     * @return boolean 
     */
    public function getIsrecievedvtl()
    {
        return $this->isrecievedvtl;
    }

    /**
     * Get idhosotthc
     *
     * @return integer 
     */
    public function getIdhosotthc()
    {
        return $this->idhosotthc;
    }

    /**
     * Set idtthc
     *
     * @param \Acme\PermissionBundle\Entity\Tthc $idtthc
     * @return Hosotthc
     */
    public function setIdtthc(\Acme\PermissionBundle\Entity\Tthc $idtthc = null)
    {
        $this->idtthc = $idtthc;

        return $this;
    }

    /**
     * Get idtthc
     *
     * @return \Acme\PermissionBundle\Entity\Tthc 
     */
    public function getIdtthc()
    {
        return $this->idtthc;
    }

    /**
     * Set idtinhtrangthuly
     *
     * @param \Acme\PermissionBundle\Entity\Tinhtrangthuly $idtinhtrangthuly
     * @return Hosotthc
     */
    public function setIdtinhtrangthuly(\Acme\PermissionBundle\Entity\Tinhtrangthuly $idtinhtrangthuly = null)
    {
        $this->idtinhtrangthuly = $idtinhtrangthuly;

        return $this;
    }

    /**
     * Get idtinhtrangthuly
     *
     * @return \Acme\PermissionBundle\Entity\Tinhtrangthuly 
     */
    public function getIdtinhtrangthuly()
    {
        return $this->idtinhtrangthuly;
    }

    /**
     * Set iddonvithuly
     *
     * @param \Acme\PermissionBundle\Entity\Donvithuly $iddonvithuly
     * @return Hosotthc
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

    /**
     * Set iddinhkemnhan
     *
     * @param \Acme\PermissionBundle\Entity\Dinhkemnhanhs $iddinhkemnhan
     * @return Hosotthc
     */
    public function setIddinhkemnhan(\Acme\PermissionBundle\Entity\Dinhkemnhanhs $iddinhkemnhan = null)
    {
        $this->iddinhkemnhan = $iddinhkemnhan;

        return $this;
    }

    /**
     * Get iddinhkemnhan
     *
     * @return \Acme\PermissionBundle\Entity\Dinhkemnhanhs 
     */
    public function getIddinhkemnhan()
    {
        return $this->iddinhkemnhan;
    }

    /**
     * Set iddinhkemgui
     *
     * @param \Acme\PermissionBundle\Entity\Dinhkemguihs $iddinhkemgui
     * @return Hosotthc
     */
    public function setIddinhkemgui(\Acme\PermissionBundle\Entity\Dinhkemguihs $iddinhkemgui = null)
    {
        $this->iddinhkemgui = $iddinhkemgui;

        return $this;
    }

    /**
     * Get iddinhkemgui
     *
     * @return \Acme\PermissionBundle\Entity\Dinhkemguihs 
     */
    public function getIddinhkemgui()
    {
        return $this->iddinhkemgui;
    }

    /**
     * Set idcongdan
     *
     * @param \Acme\PermissionBundle\Entity\Congdan $idcongdan
     * @return Hosotthc
     */
    public function setIdcongdan(\Acme\PermissionBundle\Entity\Congdan $idcongdan = null)
    {
        $this->idcongdan = $idcongdan;

        return $this;
    }

    /**
     * Get idcongdan
     *
     * @return \Acme\PermissionBundle\Entity\Congdan 
     */
    public function getIdcongdan()
    {
        return $this->idcongdan;
    }
}
