<?php

namespace JGI\Paxml\Model;

class SalaryTransaction
{
    /**
     * @var string|null
     */
    private $identityNumber;

    /**
     * @var string|null
     */
    private $employmentNumber;

    /**
     * @var string
     */
    private $article;

    /**
     * @var float
     */
    private $quantity;

    /**
     * @var int|null
     *
     * Price in öre
     */
    private $unitPrice;

    /**
     * @var \DateTimeInterface|null
     */
    private $date;

    /**
     * @param string|null $employmentNumber
     * @param string|null $identityNumber
     * @param string $article
     * @param float $quantity
     */
    public function __construct(?string $employmentNumber, ?string $identityNumber, string $article, float $quantity)
    {
        $this->employmentNumber = $employmentNumber;
        $this->identityNumber = $identityNumber;
        $this->article = $article;
        $this->quantity = $quantity;
    }

    /**
     * @return string|null
     */
    public function getEmploymentNumber(): ?string
    {
        return $this->employmentNumber;
    }

    /**
     * @return string|null
     */
    public function getIdentityNumber(): ?string
    {
        return $this->identityNumber;
    }

    /**
     * @return string
     */
    public function getArticle(): string
    {
        return $this->article;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @return int|null
     */
    public function getUnitPrice(): ?int
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     */
    public function setUnitPrice(int $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     */
    public function setDate(\DateTimeInterface $date): void
    {
        $this->date = $date;
    }
}
