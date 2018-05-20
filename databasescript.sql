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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE admin (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	email VARCHAR(255) UNIQUE NOT NULL,
	sandi VARCHAR(255) NOT NULL,
	nama VARCHAR(255) NOT NULL
)ENGINE=INNODB;

DROP TABLE IF EXISTS `robot`;
CREATE TABLE robot (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	id_merek INT NOT NULL,
	id_jenis INT NOT NULL,
	id_admin INT NOT NULL,
	nama VARCHAR(255) NOT NULL,
	deskripsi TEXT NOT NULL,
	stok INT NOT NULL,
	harga DECIMAL(5, 2),
	gambar VARCHAR(100) NOT NULL,
	FOREIGN KEY (id_merek) REFERENCES merek(id),
	FOREIGN KEY (id_jenis) REFERENCES jenis(id),
	FOREIGN KEY (id_admin) REFERENCES admin(id)
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
	FOREIGN KEY (id_robot) REFERENCES robot(id) ,
	FOREIGN KEY (id_pembeli) REFERENCES pembeli(id)
)ENGINE=INNODB;


/* ===================================== VIEW =========================================== */

DROP VIEW IF EXISTS `daftar_robot`;
CREATE VIEW daftar_robot AS
SELECT 	robot.`id`,
	robot.`nama`,
	robot.`deskripsi`,
	robot.`stok`,
	robot.`gambar`,
	robot.`harga`,
	jenis.`nama` AS 'kegunaan',
	merek.`nama` AS 'merek'
FROM robot
INNER JOIN jenis ON robot.`id_jenis` = jenis.`id`
INNER JOIN merek ON robot.`id_merek` = merek.`id`;

DROP VIEW IF EXISTS `transaction_data`;
CREATE VIEW transaction_data AS
SELECT 	robot.`nama`,
	tr.tgl_transaksi AS 'tgl',
	robot.`harga`,
	tr.jumlah AS 'qty',
	tr.jumlah * robot.`harga` AS 'total'
FROM transaksi_pembelian AS tr
INNER JOIN robot ON tr.`id_robot` = robot.`id`;

DROP VIEW IF EXISTS `top_sales`;
CREATE VIEW `top_sales`  AS
SELECT tr.*, SUM(tr.qty)
FROM transaction_data AS tr
GROUP BY tr.qty
ORDER BY tr.`qty` DESC;


/* ======================== PROCEDURE ======================== */
DROP PROCEDURE IF EXISTS `get_monthly_profit`;
DELIMITER $$
CREATE PROCEDURE `db_robotpintar`.`get_monthly_profit`(target_month INT)
	BEGIN
		SELECT SUM(transaction_data.total) AS 'result'
		FROM transaction_data
		WHERE MONTH(transaction_data.tgl)=target_month;
	END$$
DELIMITER ;

/* ======================== INSERT BASE DATA ======================== */
INSERT INTO merek VALUES(1, 'Motoman');
INSERT INTO merek VALUES(2, 'ABB');
INSERT INTO merek VALUES(3, 'Kawasaki');
INSERT INTO merek VALUES(4, 'Kuka');
INSERT INTO merek VALUES(5, 'Denso');
INSERT INTO merek VALUES(6, 'Adept Techogy');

INSERT INTO jenis VALUES(1, 'Robots to Build & Experiment');
INSERT INTO jenis VALUES(2, 'Robots for the House & Recreation');
INSERT INTO jenis VALUES(3, 'Robots Toys');
INSERT INTO jenis VALUES(4, 'Professional & Service Robots');
INSERT INTO jenis VALUES(5, 'Wearable Technology');
INSERT INTO jenis VALUES(6, 'RobotShop App Store');

INSERT INTO admin VALUES(1, 'karya.tiosaputra@gmail.com', MD5('123'), 'Tio Saputra');

INSERT INTO robot(id_merek, id_jenis, id_admin, nama, deskripsi, stok, harga, gambar) 
	VALUES(1, 1, 1, 'Arduino Mega 2560 Microcontroller Rev3', 'User friendly USB programmable', 15, 499, 'arduino.jpg');
INSERT INTO robot(id_merek, id_jenis, id_admin, nama, deskripsi, stok, harga, gambar)
	VALUES(2, 1, 1, '400 Tie Point Interlocking Solderless Breadboard', 'Need no solder', 30, 130, 'tiepoint.jpg');
INSERT INTO robot (id_merek, id_jenis, id_admin, nama, deskripsi, stok, harga, gambar) 
	VALUES(3, 2, 1, 'Litter-Robot III Open Air Automatic Self-Cleaning Litter Box', '', 15, 350, 'litter-robot.jpg');
INSERT INTO robot (id_merek, id_jenis, id_admin, nama, deskripsi, stok, harga, gambar) 
	VALUES(4, 2, 1, 'iRobot Roomba 880 Vacuum Cleaning Robot', 'Robot to clean house floor', 10, 350, 'floor.jpg');
	
/* OUT OF STOCK PRODUCT */
INSERT INTO robot (id_merek, id_jenis, id_admin, nama, deskripsi, stok, harga, gambar) 
	VALUES(3, 2, 1, 'Ageless Innovations Tabby Cat Interactive Companion', 'A Cute cat robot', 0, 350, 'out-of-stock.jpg');
INSERT INTO robot (id_merek, id_jenis, id_admin, nama, deskripsi, stok, harga, gambar) 
	VALUES(4, 2, 1, 'Ozobot Bit 2.0 Interactive Robot Dual Set', 'Robot to safeguard your house', 0, 250, 'out-of-stock.jpg');
INSERT INTO robot (id_merek, id_jenis, id_admin, nama, deskripsi, stok, harga, gambar) 
	VALUES(2, 2, 1, 'Makeblock mBot v1.1 Blue STEM Educational Programmable Robot (Bluetooth)', 'Comes with bluetooth', 0, 550, 'out-of-stock.jpg');
INSERT INTO robot (id_merek, id_jenis, id_admin, nama, deskripsi, stok, harga, gambar) 
	VALUES(4, 2, 1, 'The MostUseless Machine Kit', 'Well its useless anyway', 0, 150, 'out-of-stock.jpg');