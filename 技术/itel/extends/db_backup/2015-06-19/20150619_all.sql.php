<?php exit;?>DROP TABLE IF EXISTS itel_admin
CREATE TABLE `itel_admin` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `username` varchar(50) NOT NULL,  `password` varchar(200) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO itel_admin VALUES('1','admin','afcjbghcefidh5ee094ebfb232d40d88452f38de7a011fhdgiefcfcgeaddhdfb')
DROP TABLE IF EXISTS itel_news
CREATE TABLE `itel_news` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `title` varchar(200) NOT NULL,  `content` text NOT NULL,  `pic_big` varchar(255) NOT NULL,  `pic_small` varchar(255) NOT NULL,  `author` varchar(50) NOT NULL,  `pubtime` datetime NOT NULL,  `tags` varchar(255) NOT NULL,  `isPop` int(11) NOT NULL,  `link` varchar(255) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
INSERT INTO itel_news VALUES('8','itel Mobile Easter Promotion Lucky Stars','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Congratulations\nto the Lucky Stars in the </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">itel</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> Mobile\nEaster Promotions</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">!!-12th, Apr, 2015</span> \n</p>','extends/uploads/14346189911433.png','','itel','2015-04-12 17:17:08','Promotion','0','')
INSERT INTO itel_news VALUES('9','Choose it2100, choose these affordable dunda services!','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Choose\nit2100, choose these affordable </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">dunda</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> services! wink emoticon</span> \n</p>\n<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">1.\nPrice: Only at kshs999</span> \n</p>\n<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">2. FREE\nCALL to Orange Mobile</span> \n</p>\n<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">3. FREE\nSMS to Orange Mobile</span> \n</p>\n<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">4. FREE\nFacebook! </span> \n</p>','extends/uploads/14346193547032.png','','itel','2015-04-17 17:22:57','','0','')
INSERT INTO itel_news VALUES('10','\"itel Mobile India\" page has been launched','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Now\n\"</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">itel</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> Mobile\nIndia\" page has been launched, quickly \"LIKE\" this new page and\n\"SHARE\" the great </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">news </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">with\nall your friends!</span> \n</p>\n<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">https://www.facebook.com/pages/itel-Mobile-India/1434527300196208</span> \n</p>\n<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">More\ncampaigns will await for you!! </span> \n</p>\n<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Just\njoin us and enjoy</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">!</span>','extends/uploads/14346194232241.png','','itel','2015-05-07 17:24:03','','0','')
INSERT INTO itel_news VALUES('11',' ‎itel Mobile Win and FREE on Mother\'sDay','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Congratulations </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">to </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">the\nLucky Stars </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">of </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">itel</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> Mobile\n-- Happy Mother\'s Day!! </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">You </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">guys\nwill win big gifts!!!&nbsp;</span>\n</p>','extends/uploads/14346195298084.png','','itel','2015-05-21 17:25:56','','0','')
INSERT INTO itel_news VALUES('14','itel promotion in Teofilo kisanji university, Mbeya, Tanzania!','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">We are\nhaving the promotion in </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Teofilo</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">kisanji</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> university, Mbeya, Tanzania</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">!</span> \n</p>','extends/uploads/14346198263273.png','','itel','2015-06-01 17:30:45','','0','')
INSERT INTO itel_news VALUES('12','itel Promotion at masaka, Uganda! ','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">itel</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> Promotion at </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">masaka</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">,\nUganda! Just join and enjoy</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">!!-29th, May, 2015</span> \n</p>','extends/uploads/14346196348059.png','','itel','2015-05-29 00:00:00','','0','')
INSERT INTO itel_news VALUES('13','itel Promotion is still going on at Kaunda street in Kenya!','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">itel</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> Promotion is still going on at Kaunda street in Kenya! Buy </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Smartphone </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">and\nget those Free Spree!! Just join and enjoy</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">.</span> \n</p>','extends/uploads/14346196901256.png','','itel','2015-05-29 17:28:27','','0','')
INSERT INTO itel_news VALUES('15','itel Mobile page has exceeded 170,000 likes!','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">itel</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> Mobile\npage has exceeded 170,000 likes! Thank YOU all for your </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">support!! </span> \n</p>\n<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">We will\ncontinue to provide </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">better </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">services. </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Just </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Join\nus and </span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Enjoy!!! </span> \n</p>','extends/uploads/14346198961842.jpg','','itel','2015-06-02 17:31:54','','0','')
INSERT INTO itel_news VALUES('16','Winners who have won ‪#‎Xmasgift‬ from ‪#‎itel‬ Mobile! ','<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Congratulations\nto the winners who have won #</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">Xmasgift</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> from #</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">itel</span><span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\"> Mobile! </span> \n</p>\n<p style=\"margin-left:0in;\">\n	<br />\n</p>\n<p style=\"margin-left:0in;\">\n	<span style=\"font-size:18.0pt;font-family:微软雅黑;color:red;\">X-Gift:\nA smart phone + airtime + power bank!! </span> \n</p>\n<p style=\"margin-left:0in;\">\n	<br />\n</p>','extends/uploads/14346199777816.png','','itel','2015-01-04 17:33:22','','0','')
DROP TABLE IF EXISTS itel_product
CREATE TABLE `itel_product` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `type` int(11) NOT NULL,  `pic` varchar(255) NOT NULL,  `title` varchar(200) NOT NULL,  `content` varchar(200) NOT NULL,  `system` varchar(50) NOT NULL,  `screen_size` varchar(50) NOT NULL,  `memory` varchar(50) NOT NULL,  `camera` varchar(50) NOT NULL,  `smart_series` varchar(50) NOT NULL,  `selling_point` varchar(50) NOT NULL,  `param_feature` text NOT NULL,  `param_spec` text NOT NULL,  `pubtime` datetime NOT NULL,  `link` varchar(255) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;
