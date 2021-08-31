CREATE TABLE IF NOT EXISTS `#__rspagebuilder` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `bootstrap_version` tinyint(3) NOT NULL DEFAULT '2',
  `full_width` tinyint(3) NOT NULL DEFAULT '1',
  `animate` tinyint(3) NOT NULL DEFAULT '1',
  `content_plugins` tinyint(3) NOT NULL DEFAULT '0',
  `open_graph_title` varchar(255) NOT NULL,
  `open_graph_image` varchar(255) NOT NULL,
  `open_graph_description` varchar(255) NOT NULL,
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `robots` text NOT NULL,
  `published` tinyint(3) NOT NULL DEFAULT '1',
  `access` int(10) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` bigint(20) NOT NULL DEFAULT '0',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` bigint(20) NOT NULL DEFAULT '0',
  `language` char(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;