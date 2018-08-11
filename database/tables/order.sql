DROP TABLE IF EXISTS `la_order_queue`;
CREATE TABLE IF NOT EXISTS `la_order_queue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单的id号',
  `order_id` int(11) NOT NULL DEFAULT 0,
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '用户的手机号',
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '当前状态，0 未处理，1 已处理，2处理中',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单消息队列表';

DROP TABLE IF EXISTS `la_redis_queue`;
CREATE TABLE `la_redis_queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `time_stamp` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;