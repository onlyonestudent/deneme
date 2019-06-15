<?php

/**
 * Kullanici Model sınıfı
 *
 * @author Alexander
 */
class kullanici_model extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

    function kullanici_ekle($kullanici_ad,$parola,$email)
    {
        $sql = "INSERT INTO kullanicilar (kullanici_ad, password, email) VALUES(?,?,?)";
        $this->db->query($sql, array($kullanici_ad,$parola,$email));

        if ( $this->db->insert_id() > 0 )
            return $this->db->insert_id();

        return FALSE;
    }

    function kullanici_ad_parola_ile_al($kullanici_ad,$parola)
    {
        $sql = "SELECT * FROM kullanicilar  WHERE kullanici_ad=? AND password=?";
        $query = $this->db->query( $sql, array($kullanici_ad, $parola ));

        if( $query->num_rows() > 0 )
            return $query->row();

        return FALSE;
    }

    function kullanici_al($ozellik,$deger)
    {
        $sql = "SELECT * FROM kullanicilar  WHERE $ozellik=?";
        $query = $this->db->query( $sql, $deger);

        if( $query->num_rows() > 0 )
            return $query->result();
        
        return FALSE;
    }
}
