<?php
use PHPUnit\Framework\TestCase;
require "Estudiantes.php";
class EstudiantesTest extends TestCase{

    public function testValorNegativo()
    {
        $estudiantes = new Estudiantes();
        $this->assertEquals("ingrese un valor valido", $estudiantes->obtenerGrado(-2));
    }


    public function testSuperiorLimite()
    {
        $estudiantes = new Estudiantes();
        $this->assertEquals("ingrese un valor valido", $estudiantes->obtenerGrado(110));
        
    }

    public function testObtenerPrimera()
    {
        $estudiantes = new Estudiantes();
        $this->assertEquals("primera division", $estudiantes->obtenerGrado(64));
    }


    public function testObtenerSegunda()
    {
        $estudiantes = new Estudiantes();
        $this->assertEquals("segunda division", $estudiantes->obtenerGrado(46));
    }


    public function testObtenerTercera()
    {
        $estudiantes = new Estudiantes();
        $this->assertEquals("tercera division", $estudiantes->obtenerGrado(36));
    }

    public function testReprobar()
    {
        $estudiantes = new Estudiantes();
        $this->assertEquals("reprobaste", $estudiantes->obtenerGrado(24));
    }




    
}

?>