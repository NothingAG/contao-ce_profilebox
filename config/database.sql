-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
	`profile_name` varchar(255) NOT NULL default '',
	`profile_role` varchar(255) NOT NULL default '',
	`profile_career` mediumtext NULL,
	`profile_email` varchar(255) NOT NULL default '',
	`profile_phone` varchar(64) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
