<?php

namespace Cwp\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="cwp_blog",options={"comment"="博客表"})
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity
 */
class Blog {

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
     * @ORM\Column(name="title", type="string", length=120,options={"comment"="标题"})
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="guide", type="string", length=255,options={"comment"="引言"})
     */
    private $guide;

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255,options={"comment"="封面"})
     */
    private $cover;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text",options={"comment"="内容"})
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=120,options={"comment"="seo关键字"})
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200,options={"comment"="seo描述"})
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ctime", type="datetime",options={"comment"="创建时间"})
     */
    private $ctime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatetime", type="datetime",nullable=true,options={"comment"="更新时间"})
     */
    private $updatetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer",nullable=true,options={"comment"="点击量"})
     */
    private $hits;

    /**
     * @ORM\ManyToOne(targetEntity="Cwp\UtilBundle\Entity\BlogCategory", inversedBy="blogs")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\ManyToOne(targetEntity="Cwp\UserBundle\Entity\User", inversedBy="blogs")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $author;
    
    
    public function setCategory($category){
        $this->category = $category;
        return $this;
    }
    
    public function getCategory(){
        return $this->category;
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
     * Set title
     *
     * @param string $title
     * @return Blog
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set guide
     *
     * @param string $guide
     * @return Blog
     */
    public function setGuide($guide) {
        $this->guide = $guide;

        return $this;
    }

    /**
     * Get guide
     *
     * @return string 
     */
    public function getGuide() {
        return $this->guide;
    }

    /**
     * Set cover
     *
     * @param string $cover
     * @return Blog
     */
    public function setCover($cover) {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string 
     */
    public function getCover() {
        return $this->cover;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Blog
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Blog
     */
    public function setKeywords($keywords) {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords() {
        return $this->keywords;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Blog
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set ctime
     *
     * @param \DateTime $ctime
     * @return Blog
     */
    public function setCtime($ctime) {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return \DateTime 
     */
    public function getCtime() {
        return $this->ctime;
    }

    /**
     * Set updatetime
     *
     * @param \DateTime $updatetime
     * @return Blog
     */
    public function setUpdatetime($updatetime) {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return \DateTime 
     */
    public function getUpdatetime() {
        return $this->updatetime;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     * @return Blog
     */
    public function setHits($hits) {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer 
     */
    public function getHits() {
        return $this->hits;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCtimeAtValue() {
        $this->ctime = new \DateTime();
    }
    
    /**
     * @ORM\PreUpdate
     */
    public function setUpdatetimeAtValue(){
        $this->updatetime = new \DateTime();
    }

}
