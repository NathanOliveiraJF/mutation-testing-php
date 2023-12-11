<?php
declare(strict_types=1);

namespace Src\Tests\Models;

use PHPUnit\Framework\TestCase;
use Src\Aposentadoria\Models\Usuario;

class UsuarioTest extends TestCase
{
  protected Usuario $user;

  public function testCheckIsRetiredWhenAgeAndTimeAreEnough()
  {
    // Arrange
    $usuario = new Usuario(65, 30);

    // Act
    $result = $usuario->checkIsRetired();

    // Assert
    $this->assertTrue($result);
  }

  public function testCheckIsRetiredWhenOnlyAgeIsEnough()
  {
    // Arrange
    $usuario = new Usuario(65, 20);

    // Act
    $result = $usuario->checkIsRetired();

    // Assert
    $this->assertTrue($result);
  }
}
