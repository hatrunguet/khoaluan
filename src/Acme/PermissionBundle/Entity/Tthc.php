<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tthc
 *
 * @ORM\Table(name="tthc", indexes={@ORM\Index(name="FK_TTHC_DichVu_idx", columns={"idLinhVuc"}), @ORM\Index(name="FK_TTHC_DVThuLy_idx", columns={"idDonViThuLy"}), @ORM\Index(name="FK_TTHC_DinhKem_idx", columns={"idDinhKem"}), @ORM\Index(name="FK_TTHC_VBLQ_idx", columns={"idVanBanLienQuan"})})
 * @ORM\Entity
 */
class Tthc
{
    /**
     * @var string
     *
     * @ORM\Column(name="NameTTHC", type="string", length=45, nullable=false)
     */
    private $nametthc;

    /**
     * @var string
     *
     * @ORM\Column(name="NoiDungThucHien", type="string", length=255, nullable=true)
     */
    private $noidungthuchien;

    /**
     * @var string
     *
     * @ORM\Column(name="GiayToHoSo", type="string", length=45, nullable=true)
     */
    private $giaytohoso;

    /**
     * @var string
     *
     * @ORM\Column(name="ThoiGianGiaiQuyet", type="string", length=45, nullable=true)
     */
    private $thoigiangiaiquyet;

    /**
     * @var integer
     *
     * @ORM\Column(name="PhanQuyen", type="integer", nullable=true)
     */
    private $phanquyen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsHide", type="boolean", nullable=true)
     */
    private $ishide;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTTHC", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtthc;

    /**
     * @var \Acme\PermissionBundle\Entity\Vanbanlienquan
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Vanbanlienquan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVanBanLienQuan", referencedColumnName="idVanBanLienQuan")
     * })
     */
    private $idvanbanlienquan;

    /**
     * @var \Acme\PermissionBundle\Entity\Dinhkemtthc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Dinhkemtthc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDinhKem", referencedColumnName="idDinhKemTTHC")
     * })
     */
    private $iddinhkem;

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
     * @var \Acme\PermissionBundle\Entity\Linhvuc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Linhvuc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLinhVuc", referencedColumnName="idLinhVuc")
     * })
     */
    private $idlinhvuc;



    /**
     * Set nametthc
     *
     * @param string $nametthc
     * @return Tthc
     */
    public function setNametthc($nametthc)
    {
        $this->nametthc = $nametthc;

        return $this;
    }

    /**
     * Get nametthc
     *
     * @return string 
     */
    public function getNametthc()
    {
        return $this->nametthc;
    }

    /**
     * Set noidungthuchien
     *
     * @param string $noidungthuchien
     * @return Tthc
     */
    public function setNoidungthuchien($noidungthuchien)
    {
        $this->noidungthuchien = $noidungthuchien;

        return $this;
    }

    /**
     * Get noidungthuchien
     *
     * @return string 
     */
    public function getNoidungthuchien()
    {
        return $this->noidungthuchien;
    }

    /**
     * Set giaytohoso
     *
     * @param string $giaytohoso
     * @return Tthc
     */
    public function setGiaytohoso($giaytohoso)
    {
        $this->giaytohoso = $giaytohoso;

        return $this;
    }

    /**
     * Get giaytohoso
     *
     * @return string 
     */
    public function getGiaytohoso()
    {
        return $this->giaytohoso;
    }

    /**
     * Set thoigiangiaiquyet
     *
     * @param string $thoigiangiaiquyet
     * @return Tthc
     */
    public function setThoigiangiaiquyet($thoigiangiaiquyet)
    {
        $this->thoigiangiaiquyet = $thoigiangiaiquyet;

        return $this;
    }

    /**
     * Get thoigiangiaiquyet
     *
     * @return string 
     */
    public function getThoigiangiaiquyet()
    {
        return $this->thoigiangiaiquyet;
    }

    /**
     * Set phanquyen
     *
     * @param integer $phanquyen
     * @return Tthc
     */
    public function setPhanquyen($phanquyen)
    {
        $this->phanquyen = $phanquyen;

        return $this;
    }

    /**
     * Get phanquyen
     *
     * @return integer 
     */
    public function getPhanquyen()
    {
        return $this->phanquyen;
    }

    /**
     * Set ishide
     *
     * @param boolean $ishide
     * @return Tthc
     */
    public function setIshide($ishide)
    {
        $this->ishide = $ishide;

        return $this;
    }

    /**
     * Get ishide
     *
     * @return boolean 
     */
    public function getIshide()
    {
        return $this->ishide;
    }

    /**
     * Get idtthc
     *
     * @return integer 
     */
    public function getIdtthc()
    {
        return $this->idtthc;
    }

    /**
     * Set idvanbanlienquan
     *
     * @param \Acme\PermissionBundle\Entity\Vanbanlienquan $idvanbanlienquan
     * @return Tthc
     */
    public function setIdvanbanlienquan(\Acme\PermissionBundle\Entity\Vanbanlienquan $idvanbanlienquan = null)
    {
        $this->idvanbanlienquan = $idvanbanlienquan;

        return $this;
    }

    /**
     * Get idvanbanlienquan
     *
     * @return \Acme\PermissionBundle\Entity\Vanbanlienquan 
     */
    public function getIdvanbanlienquan()
    {
        return $this->idvanbanlienquan;
    }

    /**
     * Set iddinhkem
     *
     * @param \Acme\PermissionBundle\Entity\Dinhkemtthc $iddinhkem
     * @return Tthc
     */
    public function setIddinhkem(\Acme\PermissionBundle\Entity\Dinhkemtthc $iddinhkem = null)
    {
        $this->iddinhkem = $iddinhkem;

        return $this;
    }

    /**
     * Get iddinhkem
     *
     * @return \Acme\PermissionBundle\Entity\Dinhkemtthc 
     */
    public function getIddinhkem()
    {
        return $this->iddinhkem;
    }

    /**
     * Set iddonvithuly
     *
     * @param \Acme\PermissionBundle\Entity\Donvithuly $iddonvithuly
     * @return Tthc
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
     * Set idlinhvuc
     *
     * @param \Acme\PermissionBundle\Entity\Linhvuc $idlinhvuc
     * @return Tthc
     */
    public function setIdlinhvuc(\Acme\PermissionBundle\Entity\Linhvuc $idlinhvuc = null)
    {
        $this->idlinhvuc = $idlinhvuc;

        return $this;
    }

    /**
     * Get idlinhvuc
     *
     * @return \Acme\PermissionBundle\Entity\Linhvuc 
     */
    public function getIdlinhvuc()
    {
        return $this->idlinhvuc;
    }
}
