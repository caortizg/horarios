<?php

namespace Caog\HorariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadFranja
 *
 * @ORM\Table(name="actividad_franja", indexes={@ORM\Index(name="act_emp_id_idx", columns={"act_emp_id"})})
 * @ORM\Entity
 */
class ActividadFranja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="act_fra_dia", type="integer", nullable=true)
     */
    private $actFraDia;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_fra_duracion", type="integer", nullable=false)
     */
    private $actFraDuracion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="act_hora_inicio", type="datetime", nullable=true)
     */
    private $actHoraInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_responsable", type="integer", nullable=true)
     */
    private $usuResponsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_fra_estado", type="integer", nullable=true)
     */
    private $actFraEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_fra_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $actFraId;

    /**
     * @var \Caog\HorariosBundle\Entity\ActividadEmpresa
     *
     * @ORM\ManyToOne(targetEntity="Caog\HorariosBundle\Entity\ActividadEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="act_emp_id", referencedColumnName="id")
     * })
     */
    private $actEmp;
    
    /**
     * @var \Caog\HorariosBundle\Entity\ActividadUsuario
     *
     * @ORM\ManyToOne(targetEntity="Caog\HorariosBundle\Entity\ActividadUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="act_usu_id", referencedColumnName="id")
     * })
     */
    private $actUsu;



    /**
     * Set actFraDia
     *
     * @param integer $actFraDia
     *
     * @return ActividadFranja
     */
    public function setActFraDia($actFraDia)
    {
        $this->actFraDia = $actFraDia;

        return $this;
    }

    /**
     * Get actFraDia
     *
     * @return integer
     */
    public function getActFraDia()
    {
        return $this->actFraDia;
    }

    /**
     * Set actFraDuracion
     *
     * @param integer $actFraDuracion
     *
     * @return ActividadFranja
     */
    public function setActFraDuracion($actFraDuracion)
    {
        $this->actFraDuracion = $actFraDuracion;

        return $this;
    }

    /**
     * Get actFraDuracion
     *
     * @return integer
     */
    public function getActFraDuracion()
    {
        return $this->actFraDuracion;
    }

    /**
     * Set actHoraInicio
     *
     * @param \DateTime $actHoraInicio
     *
     * @return ActividadFranja
     */
    public function setActHoraInicio($actHoraInicio)
    {
        $this->actHoraInicio = $actHoraInicio;

        return $this;
    }

    /**
     * Get actHoraInicio
     *
     * @return \DateTime
     */
    public function getActHoraInicio()
    {
        return $this->actHoraInicio;
    }

    /**
     * Set usuResponsable
     *
     * @param integer $usuResponsable
     *
     * @return ActividadFranja
     */
    public function setUsuResponsable($usuResponsable)
    {
        $this->usuResponsable = $usuResponsable;

        return $this;
    }

    /**
     * Get usuResponsable
     *
     * @return integer
     */
    public function getUsuResponsable()
    {
        return $this->usuResponsable;
    }

    /**
     * Set actFraEstado
     *
     * @param integer $actFraEstado
     *
     * @return ActividadFranja
     */
    public function setActFraEstado($actFraEstado)
    {
        $this->actFraEstado = $actFraEstado;

        return $this;
    }

    /**
     * Get actFraEstado
     *
     * @return integer
     */
    public function getActFraEstado()
    {
        return $this->actFraEstado;
    }

    /**
     * Get actFraId
     *
     * @return integer
     */
    public function getActFraId()
    {
        return $this->actFraId;
    }

    /**
     * Set actEmp
     *
     * @param \Caog\HorariosBundle\Entity\ActividadEmpresa $actEmp
     *
     * @return ActividadFranja
     */
    public function setActEmp(\Caog\HorariosBundle\Entity\ActividadEmpresa $actEmp = null)
    {
        $this->actEmp = $actEmp;

        return $this;
    }

    /**
     * Get actEmp
     *
     * @return \Caog\HorariosBundle\Entity\ActividadEmpresa
     */
    public function getActEmp()
    {
        return $this->actEmp;
    }
    /**
     * Set actUsu
     *
     * @param \Caog\HorariosBundle\Entity\ActividadUsuario $actUsu
     *
     * @return ActividadUsuario
     */
    public function setActUsu(\Caog\HorariosBundle\Entity\ActividadUsuario $actUsu = null)
    {
        $this->actUsu = $actUsu;

        return $this;
    }

    /**
     * Get actEmp
     *
     * @return \Caog\HorariosBundle\Entity\ActividadUsuario
     */
    public function getActUsu()
    {
        return $this->actUsu;
    }
}
