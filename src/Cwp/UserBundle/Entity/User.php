<?php

namespace Cwp\UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="cwp_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
     /**
     * @ORM\OneToMany(targetEntity="Cwp\BlogBundle\Entity\Blog", mappedBy="author")
     */
    protected $blogs;

        
    /**
     * @ORM\ManyToMany(targetEntity="Cwp\UserBundle\Entity\Group")
     * @ORM\JoinTable(name="cwp_user_group",
     *      joinColumns={@ORM\JoinColumn(name="UserId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="GroupId", referencedColumnName="Id")}
     * )
     */
    protected $groups;
    public function __construct()
    {
        parent::__construct();
        // your own logic
         $this->blogs = new ArrayCollection();
         $this->groups = new ArrayCollection();
    }



}