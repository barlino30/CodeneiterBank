<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

    //-------------------------------recarga-----------------------------------------------------------
    public function registrarRecargas($conjunto)
    {
        $this->db->insert('tb_recarga',$conjunto);
        return $this->db->insert_id();

    }
    public function traer_registroRecargas()
    {
        $traer="SELECT re.id_recarga, op.nameOperador, re.numero, re.valor, usu.nombre  
        FROM tb_recarga re, tb_operadores op, registro usu WHERE re.id_operador = op.id_operador 
        AND re.id_usuario = usu.id_usuario";
        $query=$this->db->query($traer);

        return $query->result();
       // return $query->result();
    }

    //----------------------------------------------Donacion----------------------------------------------
    public function registrarDonacion($conjunto)
    {
        $this->db->insert('tb_donacion',$conjunto);
        return $this->db->insert_id();

    }
    public function traer_registroDonacion()
    {
        $traer="SELECT dona.id_donacion, fun.nameFunda, meto.nameMetodo, dona.cantidad, usu.nombre 
        FROM registro usu, tb_donacion dona, tb_fundacion fun, tb_metodopago meto
        WHERE dona.id_fundacion = fun.id_fundacion
        AND dona.id_metodopago = meto.id_metodopago
        AND dona.id_usuario = usu.id_usuario";
        $query=$this->db->query($traer);

        return $query->result();
       // return $query->result();
    }
    //--------------------------------------------------------------------------------------------
}