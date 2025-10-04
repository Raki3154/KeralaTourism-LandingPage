create database if not exists 'kerala' default character set latin1
collate latin1_swdish_ci;
use kerala;
CREATE TABLE IF NOT EXISTS `admin` (
  `AId` INT(11) NOT NULL AUTO_INCREMENT,
  `AName` VARCHAR(150) NOT NULL,
  `APass` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`AId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
CREATE TABLE IF NOT EXISTS `Traveller` ( 
`Id` INT(11) NOT NULL AUTO_INCREMENT, 
`Name` varchar(150) NOT NULL,  
`Mail` varchar(150) NOT NULL, 
`Dest` varchar(150) NOT NULL, PRIMARY KEY (`Id`) ,
`Start` date,
`End` date
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
