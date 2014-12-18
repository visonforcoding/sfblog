<?php

namespace Cwp\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="cwp_menu",options={"comment"="后台菜单节点"})
 * @ORM\Entity(repositoryClass="Cwp\UtilBundle\Entity\MenuRepository")
 */
class Menu {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name",nullable=true, type="string", length=50,options={"comment":"节点名称"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="node",nullable=true, type="string", length=50,options={"comment"="路径"})
     */
    private $node;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer",options={"comment"="父ID"})
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\Column(name="class",nullable=true,type="string", length=50,options={"comment"="样式"})
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank",nullable=true,type="smallint",options={"comment"="排序"})
     */
    private $rank;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_menu", type="boolean",options={"comment"="是否在菜单显示","default"="0"})
     */
    private $isMenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean",options={"comment"="状态","default"="1"})
     */
    private $status;

    /**
     *
     * @ORM\Column(name="remark",nullable=true, type="string", length=100,options={"comment"="备注"})
     * @var type 
     */
    private $remark;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Menu
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
     * Set path
     *
     * @param string $node
     * @return Menu
     */
    public function setNode($node) {
        $this->node = $node;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getNode() {
        return $this->node;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return Menu
     */
    public function setPid($pid) {
        $this->pid = $pid;

        return $this;
    }

    public function setRemark($remark) {
        $this->remark = $remark;
        return $this;
    }
    
    public function getRemark(){
        return $this->remark;
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
     * Set class
     *
     * @param string $class
     * @return Menu
     */
    public function setClass($class) {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass() {
        return $this->class;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return Menu
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
     * Set isMenu
     *
     * @param boolean $isMenu
     * @return Menu
     */
    public function setIsMenu($isMenu) {
        $this->isMenu = $isMenu;

        return $this;
    }

    /**
     * Get isMenu
     *
     * @return boolean 
     */
    public function getIsMenu() {
        return $this->isMenu;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Menu
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus() {
        return $this->status;
    }

    public function toArray() {
        $results = array();
        foreach ($this as $key => $value) {
            $results[$key] = $value;
        }
        return $results;
    }

}
