DROP DATABASE IF EXISTS `db_robotpintar`;
CREATE DATABASE db_robotpintar;

USE db_robotpintar;

DROP TABLE IF EXISTS `merek`;
CREATE TABLE merek (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nama VARCHAR(100) NOT NULL
)ENGINE=INNODB;
/* Chang name to Brand */

DROP TABLE IF EXISTS `jenis`;
CREATE TABLE jenis (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nama VARCHAR(100) NOT NULL
)ENGINE=INNODB;
/* Change name to Usability */
/* Add description */

DROP TABLE IF EXISTS `robot`;
CREATE TABLE robot (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	id_merek INT NOT NULL,
	id_jenis INT NOT NULL,
	id_admin INT NOT NULL,
	nama VARCHAR(255) NOT NULL,
	deskripsi VARCHAR(255) NOT NULL,
	stok INT NOT NULL,
	harga DECIMAL(5, 2),
	gambar VARCHAR(100) NOT NULL,
	FOREIGN KEY (id_merek) REFERENCES merek(id) ON UPDATE RESTRICT,
	FOREIGN KEY (id_jenis) REFERENCES jenis(id) ON UPDATE RESTRICT,
	FOREIGN KEY (id_admin) REFERENCES admin(id) ON UPDATE RESTRICT
)ENGINE=INNODB;
`pembeli`
DROP TABLE IF EXISTS `admin`;
CREATE TABLE admin (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	email VARCHAR(255) UNIQUE NOT NULL,
	sandi VARCHAR(255) NOT NULL,
	nama VARCHAR(255) NOT NULL
)ENGINE=INNODB;

DROP TABLE IF EXISTS `pembeli`;
CREATE TABLE pembeli (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	email VARCHAR(255) NOT NULL,
	sandi VARCHAR(255) NOT NULL,
	nama VARCHAR(255) NOT NULL
)ENGINE=INNODB;

DROP TABLE IF EXISTS `transaksi_pembelian`;
CREATE TABLE transaksi_pembelian (
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	id_robot INT NOT NULL,
	id_pembeli INT NOT NULL,
	tgl_transaksi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	jumlah INT NOT NULL,
	FOREIGN KEY (id_robot) REFERENCES robot(id) ON UPDATE CASCADE,
	FOREIGN KEY (id_pembeli) REFERENCES pembeli(id) ON UPDATE CASCADE
)ENGINE=INNODB;


/* ===================================== VIEW =========================================== */

DROP VIEW IF EXISTS `daftar_robot`;
CREATE VIEW daftar_robot AS
SELECT 	robot.`id`,
	robot.`nama`,
	robot.`deskripsi`,
	robot.`stok`,
	robot.`gambar`,
	jenis.`nama` AS 'kegunaan',
	merek.`nama` AS 'merek'
FROM robot
INNER JOIN jenis ON robot.`id_jenis` = jenis.`id`
INNER JOIN merek ON robot.`id_merek` = merek.`id`;
