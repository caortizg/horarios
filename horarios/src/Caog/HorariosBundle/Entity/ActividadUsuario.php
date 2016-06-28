<?php

namespace Caog\HorariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ActividadUsuario
 *
 * @ORM\Table(name="actividad_usuario")
 * @ORM\Entity
 */
class ActividadUsuario
{
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
     * @var \Caog\HorariosBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Caog\HorariosBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $usuario;

    
    /**
     * @ORM\OneToMany(targetEntity="Caog\HorariosBundle\Entity\ActividadFranja", mappedBy="Caog\HorariosBundle\Entity\ActividadUsuario")
     */
    protected $franjas;
    
    function __construct() {
        $this->franjas = new ArrayCollection();
    }
        
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
     * @var \Caog\HorariosBundle\Entity\ActividadEmpresa
     *
     * @ORM\ManyToOne(targetEntity="Caog\HorariosBundle\Entity\ActividadEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $actividadEmpresa;
    
    
    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ActividadUsuario
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
     * @return ActividadUsuario
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
     * @return ActividadUsuario
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
     * @return ActividadUsuario
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
     * @return ActividadUsuario
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
     * @return ActividadUsuario
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
     * @return ActividadUsuario
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
     * @return ActividadUsuario
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
     * Set usuario
     *
     * @param \Caog\HorariosBundle\Entity\Usuario $usuario
     *
     * @return Usuario
     */
    public function setUsuario(\Caog\HorariosBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Caog\HorariosBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Add franja
     *
     * @param \Caog\HorariosBundle\Entity\ActividadFranja $franja
     *
     * @return ActividadUsuario
     */
    public function addFranja(\Caog\HorariosBundle\Entity\ActividadFranja $franja)
    {
        $this->franjas[] = $franja;

        return $this;
    }
    
    /**
     * Remove franja
     *
     * @param \Caog\HorariosBundle\Entity\ActividadFranja $franja
     */
    public function removeFranja(\Caog\HorariosBundle\Entity\ActividadFranja $franja)
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
        
     /**
     * Set empresa
     *
     * @param \Caog\HorariosBundle\Entity\Empresa $empresa
     *
     * @return Empresa
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
     * Set actividadEmpresa
     *
     * @param \Caog\HorariosBundle\Entity\ActividadEmpresa $actividadEmpresa
     *
     * @return ActividadEmpresa
     */
    public function setActividadEmpresa(\Caog\HorariosBundle\Entity\ActividadEmpresa $actividadEmpresa = null)
    {
        $this->actividadEmpresa = $actividadEmpresa;
        return $this;
    }

    /**
     * Get actividadEmpresa
     *
     * @return \Caog\HorariosBundle\Entity\ActividadEmpresa
     */
    public function getActividadEmpresa()
    {
        return $this->actividadEmpresa;
    }
    /**
     * @var boolean
     */
    private $estado;


    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return ActividadUsuario
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
