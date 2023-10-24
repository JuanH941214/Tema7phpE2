<?php 
class Estudiantes
{
    public function obtenerGrado($int_nota)
    {
        if ($int_nota >= 60 && $int_nota <= 100) {
            return "primera division";
        } elseif ($int_nota >= 45 && $int_nota <= 59) {
            return "segunda division";
        } elseif ($int_nota >= 33 && $int_nota <= 44) {
            return "tercera division";
        } elseif ($int_nota <= 33) {
            return "reprobaste";
        }
    }
}
?>
