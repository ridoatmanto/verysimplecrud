CREATE TABLE IF NOT EXISTS `#__crud` ( 
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT, 
	`name` varchar(50) NOT NULL DEFAULT '', 
	`birth` date NOT NULL DEFAULT '0000-00-00', 
	`address` varchar(255) NOT NULL DEFAULT '', 
	PRIMARY KEY (`id`) ) 
ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 