<?php
namespace Caog\HorariosBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="empresa")
 */
class Empresa {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
 
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;
 
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $pais;
 
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $departamento;
 
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $ciudad;
 
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $localidad;
 
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $direccion;
    
    /**
     * @ORM\OneToMany(targetEntity="ActividadEmpresa", mappedBy="empresa")
     */
    protected $actividadesEmpresa;
    
    public function __construct()
    {
        $this->Actividades = new ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empresa
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
     * Set pais
     *
     * @param string $pais
     *
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * Add actividadesEmpresa
     *
     * @param \Caog\HorariosBundle\Entity\ActividadEmpresa $actividadesEmpresa
     *
     * @return Empresa
     */
    public function addActividadesEmpresa(\Caog\HorariosBundle\Entity\ActividadEmpresa $actividadesEmpresa)
    {
        $this->actividadesEmpresa[] = $actividadesEmpresa;

        return $this;
    }

    /**
     * Remove actividadesEmpresa
     *
     * @param \Caog\HorariosBundle\Entity\ActividadEmpresa $actividadesEmpresa
     */
    public function removeActividadesEmpresa(\Caog\HorariosBundle\Entity\ActividadEmpresa $actividadesEmpresa)
    {
        $this->actividadesEmpresa->removeElement($actividadesEmpresa);
    }

    /**
     * Get actividadesEmpresa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActividadesEmpresa()
    {
        return $this->actividadesEmpresa;
    }
}
