<?php

namespace App\GrabberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contents
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contents
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     *
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="subtopic", type="string", length=255)
     */
    private $subtopic;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="post", type="text")
     */
    private $post;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbimg", type="string", length=255)
     */
    private $thumbimg;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="string", length=255)
     */
    private $img_url;

    /**
     * @var string
     *
     * @ORM\Column(name="author_name", type="string", length=255)
     */
    private $author_name;

    /**
     * @var string
     *
     * @ORM\Column(name="author_avatar_url", type="string", length=255)
     */
    private $author_avatar_url;

    /**
     * @var string
     *
     * @ORM\Column(name="author_category", type="string", length=255)
     */
    private $author_category;


    /**
     * Set id
     *
     * @param string $id
     * @return Contents
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subtopic
     *
     * @param string $subtopic
     * @return Contents
     */
    public function setSubtopic($subtopic)
    {
        $this->subtopic = $subtopic;

        return $this;
    }

    /**
     * Get subtopic
     *
     * @return string 
     */
    public function getSubtopic()
    {
        return $this->subtopic;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Contents
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Contents
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set post
     *
     * @param string $post
     * @return Contents
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return string 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set img_url
     *
     * @param string $imgUrl
     * @return Contents
     */
    public function setImgUrl($imgUrl)
    {
        $this->img_url = $imgUrl;

        return $this;
    }

    /**
     * Get img_url
     *
     * @return string 
     */
    public function getImgUrl()
    {
        return $this->img_url;
    }

    /**
     * Set author_name
     *
     * @param string $authorName
     * @return Contents
     */
    public function setAuthorName($authorName)
    {
        $this->author_name = $authorName;

        return $this;
    }

    /**
     * Get author_name
     *
     * @return string 
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * Set author_avatar_url
     *
     * @param string $authorAvatarUrl
     * @return Contents
     */
    public function setAuthorAvatarUrl($authorAvatarUrl)
    {
        $this->author_avatar_url = $authorAvatarUrl;

        return $this;
    }

    /**
     * Get author_avatar_url
     *
     * @return string 
     */
    public function getAuthorAvatarUrl()
    {
        return $this->author_avatar_url;
    }

    /**
     * Set author_category
     *
     * @param string $authorCategory
     * @return Contents
     */
    public function setAuthorCategory($authorCategory)
    {
        $this->author_category = $authorCategory;

        return $this;
    }

    /**
     * Get author_category
     *
     * @return string 
     */
    public function getAuthorCategory()
    {
        return $this->author_category;
    }

    /**
     * Set thumbimg
     *
     * @param string $thumbimg
     * @return Contents
     */
    public function setThumbimg($thumbimg)
    {
        $this->thumbimg = $thumbimg;

        return $this;
    }

    /**
     * Get thumbimg
     *
     * @return string 
     */
    public function getThumbimg()
    {
        return $this->thumbimg;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Contents
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }
}
