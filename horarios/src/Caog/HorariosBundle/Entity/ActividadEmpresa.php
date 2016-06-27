<?php

namespace Caog\HorariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ActividadEmpresa
 *
 * @ORM\Table(name="actividad_empresa", indexes={@ORM\Index(name="IDX_881640FB521E1991", columns={"empresa_id"})})
 * @ORM\Entity
 */
class ActividadEmpresa
{
    /**
    * @ORM\ManyToMany(targetEntity="ActividadFranja", cascade={"persist"})
    */
    private $actFranja;
    
    public function __construct()
    {
        $this->actFranja = new ArrayCollection();
    }
    public function getActFranja()
    {
        return $this->actFranja;
    }
     public function addActFranja(ActividadFranja $actFranja)
    {
        $this->actFranja->add($actFranja);
    }
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prioridad", type="integer", nullable=false)
     */
    private $prioridad;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="tm_diario", type="integer", nullable=false)
     */
    private $tiempoMDiario;

    /**
     * @var integer
     *
     * @ORM\Column(name="tm_semanal", type="integer", nullable=false)
     */
    private $tiempoMSemanal;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=100, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=100, nullable=false)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=100, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=100, nullable=false)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=false)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Caog\HorariosBundle\Entity\Empresa
     *
     * @ORM\ManyToOne(targetEntity="Caog\HorariosBundle\Entity\Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $empresa;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ActividadEmpresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return ActividadEmpresa
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     *
     * @return ActividadEmpresa
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return ActividadEmpresa
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     *
     * @return ActividadEmpresa
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return ActividadEmpresa
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return ActividadEmpresa
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return ActividadEmpresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
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
     * Set empresa
     *
     * @param \Caog\HorariosBundle\Entity\Empresa $empresa
     *
     * @return ActividadEmpresa
     */
    public function setEmpresa(\Caog\HorariosBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \Caog\HorariosBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }


    /**
     * Set tiempoMDiario
     *
     * @param integer $tiempoMDiario
     *
     * @return ActividadEmpresa
     */
    public function setTiempoMDiario($tiempoMDiario)
    {
        $this->tiempoMDiario = $tiempoMDiario;

        return $this;
    }

    /**
     * Get tiempoMDiario
     *
     * @return integer
     */
    public function getTiempoMDiario()
    {
        return $this->tiempoMDiario;
    }

    /**
     * Set tiempoMSemanal
     *
     * @param integer $tiempoMSemanal
     *
     * @return ActividadEmpresa
     */
    public function setTiempoMSemanal($tiempoMSemanal)
    {
        $this->tiempoMSemanal = $tiempoMSemanal;

        return $this;
    }

    /**
     * Get tiempoMSemanal
     *
     * @return integer
     */
    public function getTiempoMSemanal()
    {
        return $this->tiempoMSemanal;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $franjas;


    /**
     * Add franja
     *
     * @param \Caog\HorariosBundle\Entity\ActividadUsuario $franja
     *
     * @return ActividadEmpresa
     */
    public function addFranja(\Caog\HorariosBundle\Entity\ActividadUsuario $franja)
    {
        $this->franjas[] = $franja;

        return $this;
    }

    /**
     * Remove franja
     *
     * @param \Caog\HorariosBundle\Entity\ActividadUsuario $franja
     */
    public function removeFranja(\Caog\HorariosBundle\Entity\ActividadUsuario $franja)
    {
        $this->franjas->removeElement($franja);
    }

    /**
     * Get franjas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFranjas()
    {
        return $this->franjas;
    }
}
