<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity(repositoryClass=EmployeeRepository::class)
 */
class Employee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="Date")
     */
    private $startDate;

    /**
     * @ORM\Column(type="Date")
     */
    private $endDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $empID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
    public function setStartDate(Date $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }
    public function getStartDate(): ?Date
    {
        return $this->startDate;
    }

    public function setEndDate(Date $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getEndDate(): ?Date
    {
        return $this->endDate;
    }
    public function getEmpID(): ?int
    {
        return $this->empID;
    }

    public function setEmpID(int $empID): self
    {
        $this->empID = $empID;

        return $this;
    }
}
