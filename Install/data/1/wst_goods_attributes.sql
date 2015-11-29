SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `wst_goods_attributes`
-- ----------------------------
DROP TABLE IF EXISTS `wst_goods_attributes`;
CREATE TABLE `wst_goods_attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopId` int(11) NOT NULL,
  `goodsId` int(11) NOT NULL,
  `attrId` int(11) NOT NULL,
  `attrVal` text NOT NULL,
  `attrPrice` float(11,1) DEFAULT '0.0',
  `attrStock` int(11) DEFAULT '0',
  `isRecomm` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `shopId` (`shopId`),
  KEY `goodsId` (`goodsId`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wst_goods_attributes
-- ----------------------------
INSERT INTO `wst_goods_attributes` VALUES('20', '4', '117', '4', '一等', '700.0', '100', '0'),
('19', '4', '117', '7', '含的Ω-3脂肪酸,富含维生素D,含有丰富的不饱和脂肪酸', '0.0', '0', '0'),
('18', '4', '117', '6', '生食', '0.0', '0', '0'),
('17', '4', '117', '5', '美国', '0.0', '0', '0'),
('7', '4', '3', '2', '四川', '0.0', '0', '0'),
('8', '4', '3', '3', '每100ML鲜橙汁含:热量207焦耳,蛋白质0.9g,脂肪0.2g,氨基酸203.9mg,维生素A0.127mg', '0.0', '0', '0'),
('9', '4', '3', '1', '1等', '50.0', '100', '0'),
('10', '4', '3', '1', '2等', '40.0', '100', '1'),
('11', '4', '3', '1', '3等', '30.0', '100', '0'),
('12', '4', '5', '2', '云南', '0.0', '0', '0'),
('13', '4', '5', '3', '含有糖、蛋白质、粗纤维', '0.0', '0', '0'),
('14', '4', '5', '1', '一等', '60.0', '100', '0'),
('15', '4', '5', '1', '二等', '50.0', '100', '1'),
('16', '4', '5', '1', '三等', '40.0', '100', '0'),
('21', '4', '117', '4', '二等', '650.0', '100', '1'),
('22', '4', '117', '4', '三等', '600.0', '100', '0'),
('23', '4', '116', '5', '美国', '0.0', '0', '0'),
('24', '4', '116', '6', '生食,烧烤', '0.0', '0', '0'),
('25', '4', '116', '7', '含有丰富的蛋白质，还有较多的钙、铁、碘和维生素A等营养元素', '0.0', '0', '0'),
('26', '4', '116', '4', '一等', '50.0', '100', '0'),
('27', '4', '116', '4', '二等', '39.0', '100', '0'),
('28', '4', '116', '4', '三等', '23.0', '100', '1');
