<?php
declare(strict_types=1);

namespace Src\Tests\Models;

use PHPUnit\Framework\TestCase;
use Src\Aposentadoria\Models\Usuario;

class UsuarioTest extends TestCase {
  protected Usuario $user;

  public function testShouldBeTired() 
  {
    $this->user = new Usuario(64, 30);
    $this->assertTrue($this->user->checkIsRetired());
  }
}
