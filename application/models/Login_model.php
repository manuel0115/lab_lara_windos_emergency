<?php

class Login_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function loginUsuario($obj) {

        $query = "SELECT U.ID AS ID_USUARIO,
        CONCAT(U.NOMBRE,' ',U.APELLIDO) AS NOMBRE_USUARIO,
        U.CORREO AS CORREO,
        U.PASS AS PASSWORD,
        U.ROL AS ROL,
        U.ID_SUCURSAL AS ID_SUSCURSAL,
        S.NOMBRE AS NOMBRE_SUCURSAL,
        L.NOMBRE AS NOMBRE_LABORATORIO,
        S.LABORATORIO
        FROM USUARIO AS U
        JOIN SUCURSALES AS S ON S.ID = U.ID_SUCURSAL
        JOIN LABORATORIO AS L ON L.ID = S.ID WHERE U.CORREO = '$obj->email';";

        $result = $this->db->query($query);


        log_message('ERROR', $query . "loginUsuario\n<pre>" . print_r($result, TRUE) . "</pre>");
        
        $filas = $result->num_rows();

        //return $filas;

        if (!$filas > 0) {
            return false ;
        
        } else {
            $result = $result->result_array();
            
            if (!password_verify($obj->pass, $result[0]['PASSWORD'])) {
                return false;
            } else {
                return $result;
            }
        }
    }

}
