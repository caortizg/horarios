<?php

namespace Caog\HorariosBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="ActividadUsuario")
 */
class ActividadUsuario {
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
     * @ORM\Column(type="integer", length=2)
     */
    protected $tipo;
 
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="integer", length=10)
     */
    protected $prioridad;
 
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
}
