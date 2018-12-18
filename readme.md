//把https://github.com/modood/Administrative-divisions-of-China四级联动（https://raw.githubusercontent.com/modood/Administrative-divisions-of-China/master/dist/pcas.json）转为数据库,精简id

DROP TABLE IF EXISTS `je_region`;
CREATE TABLE IF NOT EXISTS `je_region` (
	`region_id` 	smallint(5) unsigned NOT NULL AUTO_INCREMENT 		COMMENT '表示该地区的id',
	`parent_id` 	smallint(5) unsigned NOT NULL DEFAULT '0' 			COMMENT '该地区的上一个节点的地区id',
	`region_name` 	varchar(120) NOT NULL DEFAULT ''					COMMENT '地区的名字',
	`region_type` 	tinyint(1) NOT NULL DEFAULT '2' 					COMMENT '0顶级 1省 2市 3县三级',
	`agency_id` 	smallint(5) unsigned NOT NULL DEFAULT '0' 			COMMENT '办事处的id,这里有一个bug,同一个省不能有多个办事处,该字段只记录最新的那个办事处的id',
	`area_id` 		smallint(5) unsigned NOT NULL DEFAULT '0' 			COMMENT '属于哪个区域 1华东 2华北 3华中 4华南 5东北  6西北 7西南',
	`sort_order` 	tinyint(3) unsigned NOT NULL DEFAULT '0' 			COMMENT '显示顺序 升序',
	PRIMARY KEY (`region_id`),
	UNIQUE KEY `region_name` (`parent_id`,`region_name`),
	KEY `region_type` (`region_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='地区列表' AUTO_INCREMENT=1 ;



sql中包含3级与4级两个表