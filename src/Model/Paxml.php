<?php

namespace JGI\Paxml\Model;

class Paxml
{
    /**
     * @var Header|null
     */
    private $header;

    /**
     * @var SalaryTransaction[]|null
     */
    private $salaryTransactions;

    /**
     * @var Person[]|null
     */
    private $persons;

    /**
     * @return Header|null
     */
    public function getHeader(): ?Header
    {
        return $this->header;
    }

    /**
     * @param Header|null $header
     */
    public function setHeader(?Header $header): void
    {
        $this->header = $header;
    }

    /**
     * @return SalaryTransaction[]|null
     */
    public function getSalaryTransactions(): ?array
    {
        return $this->salaryTransactions;
    }

    /**
     * @param SalaryTransaction $salaryTransaction
     */
    public function addSalaryTransaction(SalaryTransaction $salaryTransaction): void
    {
        if (is_null($this->salaryTransactions)) {
            $this->salaryTransactions = [];
        }
        $this->salaryTransactions[] = $salaryTransaction;
    }

    /**
     * @return Person[]|null
     */
    public function getPersons(): ?array
    {
        return $this->persons;
    }

    /**
     * @param Person $person
     */
    public function addPerson(Person $person): void
    {
        if (is_null($this->persons)) {
            $this->persons = [];
        }
        $this->persons[] = $person;
    }
}
