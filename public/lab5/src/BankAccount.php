<?php
declare(strict_types=1);

require_once __DIR__ . '/AccountInterface.php';

class BankAccount implements AccountInterface
{
    public const MIN_BALANCE = 0.0;

    protected float $balance;
    protected string $currency;

    public function __construct(float $initialBalance = 0.0, string $currency = "UAH")
    {
        if ($initialBalance < self::MIN_BALANCE) {
            throw new Exception("Початковий баланс не може бути від’ємним.");
        }

        $this->balance = $initialBalance;
        $this->currency = $currency;
    }

    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            throw new Exception("Сума поповнення має бути більшою за 0.");
        }
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new Exception("Сума зняття має бути більшою за 0.");
        }
        if ($amount > $this->balance) {
            throw new Exception("Недостатньо коштів на рахунку.");
        }
        $this->balance -= $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getInfo(): string
    {
        return "Баланс: " . number_format($this->balance, 2) . " " . $this->currency;
    }
}

