<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
  public function testCanBeCreatedFromValidEmailAddress(): void
  {
    $this->assertInstanceOf(
      Email::class,
      Email::fromString('user@example.com')
    );
  }

  public function testCannotBeCreatedFromInvalidEmailAddress(): void
  {
    $this->expectException(InvalidArgumentException::class);

    Email::fromString('invalid');
  }

  public function testCanBeUsedAsString(): void
  {
    $this->assertEquals(
      'user@example.com',
      Email::fromString('user@example.com')
    );
  }


  public function testAnotherEmail(): void
  {
    $this->assertEquals(
      'juan@makingdevs.com',
      Email::fromString('juan@makingdevs.com')
    );
  }

  public function testManuelFromValidEmailAddress(): void
  {
    $this->assertInstanceOf(
      Email::class,
      Email::fromString('manuel.anzola@peopletech.com.co')
    );
  }
}
