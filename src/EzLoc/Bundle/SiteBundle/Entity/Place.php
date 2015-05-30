<?php

namespace EzLoc\Bundle\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @Assert\File(maxSize="6000000")
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
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
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


    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../../web/bundles/ezlocsite/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'images/uploads';
    }

    public function upload()
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->img) {
            return;
        }

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->img->move($this->getUploadRootDir(), $this->img->getClientOriginalName());

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->path = $this->img->getClientOriginalName();

        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->img = null;
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
