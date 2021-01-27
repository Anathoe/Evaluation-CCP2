<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\MainAdminRepository;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass=MainAdminRepository::class)
 * @Vich\Uploadable()
 */
class MainAdmin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @var File|null
     * @Assert\Image(mimeTypes={"image/jpeg", "image/jpg", "image/png"})
     * @Vich\UploadableField(mapping="upload", fileNameProperty="image")
     *
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TitleShop;

    /**
     * @ORM\Column(type="text")
     */
    private $SubtitleShop;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TitleEx;

    /**
     * @ORM\Column(type="text")
     */
    private $SubtitleEx;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleShop(): ?string
    {
        return $this->TitleShop;
    }

    public function setTitleShop(string $TitleShop): self
    {
        $this->TitleShop = $TitleShop;

        return $this;
    }

    public function getSubtitleShop(): ?string
    {
        return $this->SubtitleShop;
    }

    public function setSubtitleShop(string $SubtitleShop): self
    {
        $this->SubtitleShop = $SubtitleShop;

        return $this;
    }

    public function getTitleEx(): ?string
    {
        return $this->TitleEx;
    }

    public function setTitleEx(string $TitleEx): self
    {
        $this->TitleEx = $TitleEx;

        return $this;
    }

    public function getSubtitleEx(): ?string
    {
        return $this->SubtitleEx;
    }

    public function setSubtitleEx(string $SubtitleEx): self
    {
        $this->SubtitleEx = $SubtitleEx;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }


    public function setImage(?string $image)
    {
        $this->image = $image;
        return $this;
    }


    /**
     * @ORM\Column(type="datetime")
     * @var null|DateTime
     */
    private $updated_at;


    public function getImageFile()
    {
        return $this->imageFile;
    }



    public function setImageFile( ?File $imageFile ): void {
        $this->imageFile = $imageFile;
        if($this->imageFile instanceof UploadedFile){
            $this->updated_at = new \DateTime('now');
        }
        //return $this;
    }
}
