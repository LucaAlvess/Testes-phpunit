<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{ //TESTE DE SAÍDA
    public function testExpectedFullName()
    {
        $this->expectOutputString('Lucas Alves');

        $user = new User();
        $user->setName('Lucas');
        $user->setLastName('Alves');
        $user->getFullName();
    }
//TESTE INCOmPLETOS
    public function testAge()
    {
        $user = new User();
        $user->setAge(90);

        $this->assertEquals(90, $user->getAge());
        //Para marcar que está incompleto
//        $this->markTestIncomplete('Falta implementar o set e get de IDADE');
    }

    public function testAgeString()
    {
        $user = new User();
        $user->setAge(90);

        $this->assertEquals('90 Anos', $user->getAge(true));

//        $this->markTestIncomplete('Falta criar o método na classe');
    }
}
