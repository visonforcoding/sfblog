<?php

namespace Cwp\UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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

    public function __construct()
    {
        parent::__construct();
        // your own logic
         $this->blogs = new ArrayCollection();
    }
}