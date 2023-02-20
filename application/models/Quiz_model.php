<?php
/*select preguntasyrespuestas.id_respuesta, respuestas.texto_respuesta
from preguntasyrespuestas
inner join respuestas on preguntasyrespuestas.id_respuesta = respuestas.id_respuesta 
where preguntasyrespuestas.id_pregunta =1;*/

class Quiz_model extends CI_Model {

public $pregunta;
public $respuesta1="r1";
public $respuesta2="r2";
public $respuesta3="r3";
public $respuesta4="r4";



public function get_question()
{
        $query = $this->db->get('preguntas', 2);
        return $query->result();
}

public function getAnswers(){
        $query = $this->db->query('SELECT * FROM RESPUESTAS');
        /*$query = [
               "respuesta1" => "R1",
               "respuesta2" => "R2",
        ];*/
        return $query;
}

}

?>