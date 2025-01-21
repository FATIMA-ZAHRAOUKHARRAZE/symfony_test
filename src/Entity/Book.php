<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    private ?BookStatus $status = null;

    #[ORM\ManyToOne(inversedBy: 'books')]
    private ?Editor $editor = null;
    // …
    
    public function getStatus(): ?BookStatus
    {
        // …
    }
    
    public function setStatus(BookStatus $status): static
    {
        // …
    }

    public function getEditor(): ?Editor
    {
        return $this->editor;
    }

    public function setEditor(?Editor $editor): static
    {
        $this->editor = $editor;

        return $this;
    }
}
