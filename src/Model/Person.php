<?php

namespace JGI\Paxml\Model;

class Person
{
    /**
     * @var string|null
     */
    private $employmentNumber;

    /**
     * @var string|null
     */
    private $identityNumber;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $address1;

    /**
     * @var string|null
     */
    private $address2;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $mobilePhoneNumber;

    /**
     * @var string|null
     */
    private $homePhoneNumber;

    /**
     * @var string|null
     */
    private $workPhoneNumber;

    /**
     * @var string|null
     */
    private $homeEmail;

    /**
     * @var string|null
     */
    private $workEmail;

    /**
     * @var string|null
     */
    private $workerType;

    /**
     * @var string|null
     */
    private $bankClearingNumber;

    /**
     * @var string|null
     */
    private $bankAccountNumber;

    /**
     * @return string|null
     */
    public function getEmploymentNumber(): ?string
    {
        return $this->employmentNumber;
    }

    /**
     * @param string|null $employmentNumber
     */
    public function setEmploymentNumber(?string $employmentNumber): void
    {
        $this->employmentNumber = $employmentNumber;
    }

    /**
     * @return string|null
     */
    public function getIdentityNumber(): ?string
    {
        return $this->identityNumber;
    }

    /**
     * @param string|null $identityNumber
     */
    public function setIdentityNumber(?string $identityNumber): void
    {
        $this->identityNumber = $identityNumber;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * @param string|null $address1
     */
    public function setAddress1(?string $address1): void
    {
        $this->address1 = $address1;
    }

    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * @param string|null $address2
     */
    public function setAddress2(?string $address2): void
    {
        $this->address2 = $address2;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string|null
     */
    public function getMobilePhoneNumber(): ?string
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * @param string|null $mobilePhoneNumber
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber): void
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
    }

    /**
     * @return string|null
     */
    public function getHomePhoneNumber(): ?string
    {
        return $this->homePhoneNumber;
    }

    /**
     * @param string|null $homePhoneNumber
     */
    public function setHomePhoneNumber(?string $homePhoneNumber): void
    {
        $this->homePhoneNumber = $homePhoneNumber;
    }

    /**
     * @return string|null
     */
    public function getWorkPhoneNumber(): ?string
    {
        return $this->workPhoneNumber;
    }

    /**
     * @param string|null $workPhoneNumber
     */
    public function setWorkPhoneNumber(?string $workPhoneNumber): void
    {
        $this->workPhoneNumber = $workPhoneNumber;
    }

    /**
     * @return string|null
     */
    public function getHomeEmail(): ?string
    {
        return $this->homeEmail;
    }

    /**
     * @param string|null $homeEmail
     */
    public function setHomeEmail(?string $homeEmail): void
    {
        $this->homeEmail = $homeEmail;
    }

    /**
     * @return string|null
     */
    public function getWorkEmail(): ?string
    {
        return $this->workEmail;
    }

    /**
     * @param string|null $workEmail
     */
    public function setWorkEmail(?string $workEmail): void
    {
        $this->workEmail = $workEmail;
    }

    /**
     * @return string|null
     */
    public function getWorkerType(): ?string
    {
        return $this->workerType;
    }

    /**
     * @param string|null $workerType
     */
    public function setWorkerType(?string $workerType): void
    {
        $this->workerType = $workerType;
    }

    /**
     * @return string|null
     */
    public function getBankClearingNumber(): ?string
    {
        return $this->bankClearingNumber;
    }

    /**
     * @param string|null $bankClearingNumber
     */
    public function setBankClearingNumber(?string $bankClearingNumber): void
    {
        $this->bankClearingNumber = $bankClearingNumber;
    }

    /**
     * @return string|null
     */
    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    /**
     * @param string|null $bankAccountNumber
     */
    public function setBankAccountNumber(?string $bankAccountNumber): void
    {
        $this->bankAccountNumber = $bankAccountNumber;
    }
}
