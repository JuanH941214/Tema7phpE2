<?php
use PHPUnit\Framework\TestCase;
require "Estudiantes.php";
class EstudiantesTest extends TestCase{

    public function testObtenerGrado()
    {
        $estudiantes = new Estudiantes();
        $this->assertEquals("primera division", $estudiantes->obtenerGrado(64));
        $this->assertEquals("segunda division", $estudiantes->obtenerGrado(46));
        $this->assertEquals("tercera division", $estudiantes->obtenerGrado(36));
        $this->assertEquals("reprobaste", $estudiantes->obtenerGrado(24));
 
    }
    
}

?>