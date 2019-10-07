<?php

namespace JGI\Paxml\Model;

class SalaryTransaction
{
    /**
     * @var string
     */
    private $identityNumber;

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
     * @param string $identityNumber
     * @param string $article
     * @param float $quantity
     */
    public function __construct(string $identityNumber, string $article, float $quantity)
    {
        $this->identityNumber = $identityNumber;
        $this->article = $article;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getIdentityNumber(): string
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
     * @param int|null $unitPrice
     */
    public function setUnitPrice(?int $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }
}
