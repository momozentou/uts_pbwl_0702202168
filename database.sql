CREATE TABLE tb_penduduk (
    pen_id INT(11) NOT NULL AUTO_INCREMENT,
    pen_nik VARCHAR(50) NOT NULL ,
    pen_nama VARCHAR(100) NOT NULL,
    pen_agama VARCHAR(20) NOT NULL,
    pen_kelamin VARCHAR (20) NOT NULL,
    pen_pekerjaan VARCHAR(100) NOT NULL,
    pen_kawin VARCHAR(20) NOT NULL,
    PRIMARY KEY(pen_id),
    UNIQUE KEY(pen_nik)
);
 
 CREATE TABLE tb_kk (
    kk_id INT(11) NOT NULL AUTO_INCREMENT,
    kk_id_kepala INT(11) NOT NULL,
    kk_nonik VARCHAR(50) NOT NULL,
    kk_alamat TEXT DEFAULT NULL,
    PRIMARY KEY(kk_id),
    UNIQUE KEY(kk_id_kepala),
    UNIQUE KEY(kk_nonik),
    FOREIGN KEY(kk_id_kepala) REFERENCES tb_penduduk(pen_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

 CREATE TABLE tb_keluarga (
    kel_id INT(11) NOT NULL AUTO_INCREMENT,
    kel_id_kk INT(11) NOT NULL,
    kel_id_penduduk INT(11) NOT NULL,
    PRIMARY KEY(kel_id),
    FOREIGN KEY(kel_id_kk) REFERENCES tb_kk(kk_id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(kel_id_penduduk) REFERENCES tb_penduduk(pen_id) ON UPDATE CASCADE ON DELETE RESTRICT
);