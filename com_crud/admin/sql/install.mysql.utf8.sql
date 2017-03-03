CREATE TABLE IF NOT EXISTS `#__crud` ( 
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT, 
	`name` varchar(50) NOT NULL DEFAULT '', 
	`birth` date NOT NULL DEFAULT '0000-00-00', 
	`address` varchar(255) NOT NULL DEFAULT '', 
	PRIMARY KEY (`id`) ) 
ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


INSERT INTO `#__crud` (`id`, `name`, `birth`, `address`) VALUES
('', 'Sukijan', '1981-07-24', 'Malang'),
('', 'Ahmad Yani', '1973-09-24', 'Solo'),
('', 'Tarmijo', '1967-03-24', 'Medan'),
('', 'Murtinah', '1945-05-24', 'Pamulang'),
('', 'Haryadi', '1988-04-24', 'Kebumen'),
('', 'Sulastri', '1966-08-24', 'Banten'),
('', 'Nur Hasanah', '1977-11-24', 'Yogyakarta'),

('', 'Sukiran', '1976-04-24', 'Brebes'),
('', 'Ahmad Hutomo', '1956-04-24', 'Sorong'),
('', 'Taryono', '1974-07-24', 'Kebumen'),
('', 'Murtiah', '1978-08-24', 'Makassar'),
('', 'Haryono', '1934-04-24', 'Banjarmasin'),
('', 'Sumantri', '1989-03-24', 'Timika'),
('', 'Nur Hamdi', '1955-02-24', 'Lombok'),

('', 'Sukirman', '1953-07-24', 'Blora'),
('', 'Ahmad Sastro', '1988-08-24', 'Talaud'),
('', 'Taryanto', '1964-09-24', 'Gunung Kidul'),
('', 'Murniah', '1978-12-24', 'Payakumbuh'),
('', 'Hartanto', '1951-04-24', 'Pidie'),
('', 'Susiana', '1974-09-24', 'Bener Meriah'),
('', 'Nur Ismiyati', '1948-07-24', 'Pontianak'),

('', 'Sakiran', '1971-08-24', 'Bantul'),
('', 'Ahmad Jaelani', '1978-04-24', 'Brebes'),
('', 'Tarsiman', '1960-05-24', 'Bantul'),
('', 'Muryani', '1970-11-24', 'Kulon Progo'),
('', 'Hardono', '1980-03-24', 'Wates'),
('', 'Sumiyati', '1964-06-24', 'Ungaran'),
('', 'Nur Afni', '1959-04-24', 'Banyumas'),

('', 'Sudirman', '1955-09-24', 'Purworejo'),
('', 'Ahmad Sutarjo', '1987-07-24', 'Wonosobo'),
('', 'Tarjono', '1986-08-24', 'Cilacap'),
('', 'Murinah', '1953-09-24', 'Semarang'),
('', 'Harjono', '1962-11-24', 'Bandung'),
('', 'Sukarmi', '1986-03-24', 'Jakarta'),
('', 'Nur Wahid', '1988-06-24', 'Surabaya')