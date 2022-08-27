<?php

//Funções de assertativa

use PHPUnit\Framework\TestCase;

class AssertativeTest extends TestCase
{
    //++++++++++++++++++++++++++++ARRAY++++++++++++++++++++++++
    //Para saber se contém a chave no array
    public function testArrayHasKey()
    {
        $assertative = new Assertative();

        $this->assertArrayHasKey('nome', $assertative->getArray());
    }

    //Para verificar a quantidade de elementos no array
    public function testCount()
    {
        $assertative = new Assertative();

        $this->assertCount(2, $assertative->getArray());
    }

    //Para testar se está vazio
    public function testEmpty()
    {
        $assertative = new Assertative();
//        $assertative->getArray();
        $this->assertEmpty(array());
    }

    //Verifica se contém um determinado valor
    public function testContain()
    {
        $arr = [1,2,3,4,5,'Lucas'];

        $this->assertContains('Lucas', $arr);
    }

    //Verifica só um determinado tipo
    public function testContaionOnly()
    {
        $arr = [1,2,3,4,5,6];

        $this->assertContainsOnly('int',$arr);
    }

    //+++++++++++++++++++++++++++classe++++++++++++++++++++++++=

    //Verifica se existe um atributo em uma classe espacifíca
    public function testAttributeExists()
    {
        $this->assertClassHasAttribute('name',Assertative::class);
    }

    //+++++++++++++++++++++++++++Expressão regular+++++++++++++++++++++

    //Verifica se o resultado tem match com uma expressão regular
    public function testRegex()
    {
        $this->assertMatchesRegularExpression('/^[a-z]{3}\-[0-9]{3}$/', 'abc-123');
    }

    //++++++++++++++++++++++Diretórios++++++++++++++++++++++++++++++++++
    //Verificando diretórios baseado no dirotório raiz do projeto
    public function testDirExists()
    {
        $this->assertDirectoryExists('App');
    }

    //Verificando as permissões do diretório
    public function testDirPermission()
    {
//        $this->assertDirectoryIsNotWritable('App');
        $this->assertDirectoryIsReadable('App');
        $this->assertDirectoryIsWritable('App');
    }

    //++++++++++++++++++++++++++Arquivos+++++++++++++++++++++

    //Compara o conteúdo de dois arquivos
    public function testFileEquals()
    {
        $this->assertFileEquals('lista1.txt', 'lista2.txt');
    }

    //++++++++++++++++++++++++++++++++++Tipos+++++++++++++++++++++
    //asserts para tipos
    public function testBooelan()
    {
        $bool = true;
        $this->assertTrue($bool);
//        $this->assertFalse($bool);
    }

//Varirica se o valor é nulo
    public function testNull()
    {
        $name = null;
//        $name = 'null';
        $this->assertNull($name);
    }

    //Verifica o tipo do retorno
    //assertInternalType está depreciada
    public function testVarType()
    {
//        $arr = '';
        $assertative = new Assertative();
        $this->assertIsArray($assertative->getArray());
        //Contém diversos métodos para verificar o resultado dos retornos
    }

    //++++++++++++++++++++++++valores
    //Veririca se o resultado é igual ao esperado
    public function testEqual()
    {
        $name = 'Lucas';
        $this->assertEquals('Lucas',$name);
    }

    //++++++++++++++++++++++++++++String++++++++++++++++++++++++++=

    //Verifica as ocorrências de determinadas strings
    public function testString()
    {
        $text = 'Lucas Alves tem 26 anos';

        $this->assertStringStartsWith('Lucas',$text);
        $this->assertStringEndsWith('anos', $text);
    }

    //++++++++++++++++++++++++++numero+++++++++++++

    public function testNumberGreater()
    {
        //Se o primeito número é maior do que o segundo
        $this->assertGreaterThan(8,9);
        $this->assertGreaterThanOrEqual(10, 10);
    }

    public function testNumberLess()
    {
        //Se o primeito número é maior do que o segundo
        $this->assertLessThan(2, 1);
        $this->assertLessThanOrEqual(5, 5);
    }
}