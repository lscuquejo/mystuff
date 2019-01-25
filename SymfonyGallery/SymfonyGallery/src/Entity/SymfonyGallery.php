<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SymfonyGalleryRepository")
 */
class SymfonyGallery
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=28)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uploaded_image;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $view_c;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $download_c;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUploadedImage(): ?string
    {
        return $this->uploaded_image;
    }

    public function setUploadedImage(string $uploaded_image): self
    {
        $this->uploaded_image = $uploaded_image;

        return $this;
    }

    public function getViewC(): ?int
    {
        return $this->view_c;
    }

    public function setViewC(?int $view_c): self
    {
        $this->view_c = $view_c;

        return $this;
    }

    public function getDownloadC(): ?int
    {
        return $this->download_c;
    }

    public function setDownloadC(?int $download_c): self
    {
        $this->download_c = $download_c;

        return $this;
    }
}
