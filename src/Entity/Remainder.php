<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RemainderRepository")
 */
class Remainder
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $remember_date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Task", inversedBy="remainders")
     */
    private $task;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRememberDate(): ?\DateTimeInterface
    {
        return $this->remember_date;
    }

    public function getTask(): ?Task
    {
        return $this->task;
    }

    public function setTask(?Task $task): self
    {
        $this->task = $task;

        return $this;
    }


}
