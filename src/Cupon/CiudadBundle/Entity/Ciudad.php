<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ciudad\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Ciudad
 *
 * @author montillajcx
 */
/**
* @ORM\Entity
* @ORM\Table(name="Cupon_Ciudad")
*/
class Ciudad {

    /** 
     * @ORM\Column(type="integer") 
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="string", length=100) */
    protected $nombre;
    /** @ORM\Column(type="string", length=100) */
    protected $slug;
    
    public function getId()
    {
        return $this->id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }
    public function getSlug()
    {
        return $this->slug;
    }
    public function __toString()
    {
        return $this->getNombre();
    }
}
