CREATE TABLE `members` (
`id` int(4) NOT NULL auto_increment,
`username` varchar(65) NOT NULL default '',
`password` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
);

-- 
-- Dumping data for table `members`
-- 

INSERT INTO `members` VALUES (1, 'justin', 'hellsten');
INSERT INTO `members` VALUES (2, 'michael', 'burnie');

