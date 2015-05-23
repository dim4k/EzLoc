<?php

namespace EzLoc\Bundle\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Place
{
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255)
     */
    private $subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="modal_subtitle", type="string", length=255, nullable=true)
     */
    private $modalSubtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="modal_description", type="blob", nullable=true)
     */
    private $modalDescription;


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
     * Set title
     *
     * @param string $title
     * @return place
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
     * Set subtitle
     *
     * @param string $subtitle
     * @return place
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string 
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return place
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set modalSubtitle
     *
     * @param string $modalSubtitle
     * @return place
     */
    public function setModalSubtitle($modalSubtitle)
    {
        $this->modalSubtitle = $modalSubtitle;

        return $this;
    }

    /**
     * Get modalSubtitle
     *
     * @return string 
     */
    public function getModalSubtitle()
    {
        return $this->modalSubtitle;
    }

    /**
     * Set modalDescription
     *
     * @param string $modalDescription
     * @return place
     */
    public function setModalDescription($modalDescription)
    {
        $this->modalDescription = $modalDescription;

        return $this;
    }

    /**
     * Get modalDescription
     *
     * @return string 
     */
    public function getModalDescription()
    {
        return $this->modalDescription;
    }
}
