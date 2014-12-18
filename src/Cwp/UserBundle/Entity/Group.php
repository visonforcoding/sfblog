<?php

/* 
 * fosuserbundle group entity
 */

namespace Cwp\UserBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="cwp_group",options={"comment"="后台菜单节点"})
 */
class Group extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;
     
     
    /**
     * @ORM\ManyToMany(targetEntity="Cwp\UtilBundle\Entity\Menu")
     * @ORM\JoinTable(name="cwp_group_menu",
     *      joinColumns={@ORM\JoinColumn(name="GroupId", referencedColumnName="Id",onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="MenuId", referencedColumnName="id")}
     * )
     */
     protected $nodes;
     
     public function __construct($name, $roles = array()) {
         parent::__construct($name, $roles);
         $this->nodes = new ArrayCollection();
     }
     
     public function getNodes(){
         return $this->nodes;
     }
     
     public function addNode($nodes){
        if (!$this->getNodes()->contains($nodes)) {
            $this->getNodes()->add($nodes);
        }
        return $this;
     }
     
    public function removeNode($nodes)
    {
        if ($this->getNodes()->contains($nodes)) {
            $this->getNodes()->removeElement($nodes);
        }

        return $this;
    }
     
}

