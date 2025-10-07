<?php
declare(strict_types=1);

require_once __DIR__ . '/BankAccount.php';

class SavingsAccount extends BankAccount
{
    public static float $interestRate = 5.0;

    public function applyInterest(): void
    {
        $interest = $this->balance * (self::$interestRate / 100);
        $this->balance += $interest;
    }

    public static function setInterestRate(float $rate): void
    {
        if ($rate < 0) {
            throw new Exception("Відсоткова ставка не може бути від’ємною.");
        }
        self::$interestRate = $rate;
    }
}
