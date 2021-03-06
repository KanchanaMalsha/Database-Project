<?php

namespace ApplicantBundle\Entity;

/**
 * School
 */
class School
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $totStudents;

    /**
     * @var integer
     */
    private $totVacancies;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $applicant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->applicant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return School
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return School
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set totStudents
     *
     * @param integer $totStudents
     *
     * @return School
     */
    public function setTotStudents($totStudents)
    {
        $this->totStudents = $totStudents;

        return $this;
    }

    /**
     * Get totStudents
     *
     * @return integer
     */
    public function getTotStudents()
    {
        return $this->totStudents;
    }

    /**
     * Set totVacancies
     *
     * @param integer $totVacancies
     *
     * @return School
     */
    public function setTotVacancies($totVacancies)
    {
        $this->totVacancies = $totVacancies;

        return $this;
    }

    /**
     * Get totVacancies
     *
     * @return integer
     */
    public function getTotVacancies()
    {
        return $this->totVacancies;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return School
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

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
     * Add applicant
     *
     * @param \ApplicantBundle\Entity\Applicant $applicant
     *
     * @return School
     */
    public function addApplicant(\ApplicantBundle\Entity\Applicant $applicant)
    {
        $this->applicant[] = $applicant;

        return $this;
    }

    /**
     * Remove applicant
     *
     * @param \ApplicantBundle\Entity\Applicant $applicant
     */
    public function removeApplicant(\ApplicantBundle\Entity\Applicant $applicant)
    {
        $this->applicant->removeElement($applicant);
    }

    /**
     * Get applicant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApplicant()
    {
        return $this->applicant;
    }
}
