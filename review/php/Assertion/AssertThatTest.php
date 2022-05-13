<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AssertThatTest extends TestCase
{
    public function testEquals(): void
    {
        $theBiscuit = new Biscuit('Ginger');
        $myBiscuit  = new Biscuit('Ginger');

        $this->assertThat(
          $theBiscuit,
          $this->logicalOr(
            $this->equalTo($myBiscuit)
          )
        );
    }
}
