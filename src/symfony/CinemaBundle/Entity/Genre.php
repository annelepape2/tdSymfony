<?php

namespace symfony\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity(repositoryClass="symfony\CinemaBundle\Repository\GenreRepository")
 */
class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     * @ORM\OneToMany(targetEntity="Film", mappedBy="genre")
     */
    private $Films;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Genre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add film
     *
     * @param \symfony\CinemaBundle\Entity\Film $film
     *
     * @return Genre
     */
    public function addFilm(\symfony\CinemaBundle\Entity\Film $film)
    {
        $this->Films[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \symfony\CinemaBundle\Entity\Film $film
     */
    public function removeFilm(\symfony\CinemaBundle\Entity\Film $film)
    {
        $this->Films->removeElement($film);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilms()
    {
        return $this->Films;
    }
}
