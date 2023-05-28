<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Keluarga extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_keluarga as keluarga JOIN tb_kk as kk ON keluarga.kel_id_kk=kk.kk_id JOIN tb_penduduk as penduduk ON keluarga.kel_id_penduduk=penduduk.pen_id ORDER BY keluarga.kel_id_kk ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $kel_id_kk = $_POST['kel_id_kk'];
        $kel_id_penduduk = $_POST['kel_id_penduduk'];
        

        $sql = "INSERT INTO tb_keluarga (kel_id_kk, kel_id_penduduk) VALUES (:kel_id_kk, :kel_id_penduduk)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kel_id_kk", $kel_id_kk);
        $stmt->bindParam(":kel_id_penduduk", $kel_id_penduduk);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_keluarga as keluarga JOIN tb_kk as kk ON keluarga.kel_id_kk=kk.kk_id JOIN tb_penduduk as penduduk ON keluarga.kel_id_penduduk=penduduk.pen_id WHERE keluarga.kel_id=:kel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kel_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $kel_id_kk = $_POST['kel_id_kk'];
        $kel_id_penduduk = $_POST['kel_id_penduduk'];
        $kel_id = $_POST['kel_id'];

        $sql = "UPDATE tb_keluarga SET kel_id_kk=:kel_id_kk, kel_id_penduduk=:kel_id_penduduk WHERE kel_id=:kel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kel_id_kk", $kel_id_kk);
        $stmt->bindParam(":kel_id_penduduk", $kel_id_penduduk);
        $stmt->bindParam(":kel_id", $kel_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_keluarga WHERE kel_id=:kel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kel_id", $id);
        $stmt->execute();

    }
}