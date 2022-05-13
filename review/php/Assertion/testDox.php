<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

/**
 * @testdox A bank account
 */
final class BankAccountTest extends TestCase
{
    /**
     * @testdox has an initial balance of zero
     */
    public function balanceIsInitiallyZero(): void
    {
        $this->assertSame(0, $this->ba->getBalance());
    }
}
