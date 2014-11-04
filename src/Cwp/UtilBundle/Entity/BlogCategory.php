<?php

namespace Cwp\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BlogCategory
 *
 * @ORM\Table(name="cwp_blogcat",options={"comment"="博客类别表"})
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity
 */
class BlogCategory {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer",options={"comment"="父id"})
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\Column(name="name",type="string", length=100,options={"comment"="类别名"})
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", nullable=true,type="smallint",options={"comment"="同级排名"})
     */
    private $rank;

    /**
     * @var integer
     *
     * @ORM\Column(name="depth",nullable=true, type="smallint",options={"comment"="级别"})
     */
    private $depth;

    /**
     * @var datetime
     *
     * @ORM\Column(name="ctime",nullable=true, type="datetime",options={"comment"="创建时教"})
     */
    private $ctime;

    /**
     * @ORM\OneToMany(targetEntity="Cwp\BlogBundle\Entity\Blog", mappedBy="category")
     */
    protected $blogs;

    public function __construct() {
        $this->blogs = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return BlogCategory
     */
    public function setPid($pid) {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid() {
        return $this->pid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return BlogCategory
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return BlogCategory
     */
    public function setRank($rank) {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank() {
        return $this->rank;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     * @return BlogCategory
     */
    public function setDepth($depth) {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth() {
        return $this->depth;
    }

    /**
     * 
     * @param type $ctime
     * @return \Cwp\UtilBundle\Entity\BlogCategory
     */
    public function setCtime($ctime) {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getCtime() {
        return $this->ctime;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCtimeAtValue() {
        $this->ctime = new \DateTime();
    }

}
