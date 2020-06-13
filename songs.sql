-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 05:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sususu`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `Son_Id` varchar(10) NOT NULL,
  `Son_Name` varchar(40) DEFAULT NULL,
  `Son_Year` year(4) DEFAULT NULL,
  `Son_Lyric` varchar(1000) DEFAULT NULL,
  `Son_Long` time DEFAULT NULL,
  `Son_Address` varchar(100) DEFAULT NULL,
  `sing_id` varchar(10) DEFAULT NULL,
  `Acc_Email` varchar(40) NOT NULL,
  `Son_Pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`Son_Id`, `Son_Name`, `Son_Year`, `Son_Lyric`, `Son_Long`, `Son_Address`, `sing_id`, `Acc_Email`, `Son_Pic`) VALUES
('S000000001', '突然好想你', 2008, '最怕空氣突然安靜 最怕朋友突然的關心\r\n最怕回憶 突然翻滾絞痛著不平息 最怕突然 聽到你的消息\r\n想念如果會有聲音 不願那是悲傷的哭泣\r\n事到如今 終於讓自己屬於我自己 只剩眼淚 還騙不過自己\r\n\r\n突然好想你 你會在哪裡 過得快樂或委屈\r\n突然好想你 突然鋒利的回憶 突然模糊的眼睛\r\n\r\n我們像一首最美麗的歌曲 變成兩部悲傷的電影\r\n為什麼你 帶我走過最難忘的旅行 然後留下 最痛的紀念品\r\n\r\n我們 那麼甜那麼美那麼相信 那麼瘋那麼熱烈的曾經\r\n為何我們還是要奔向各自的幸福和遺憾中老去\r\n\r\n突然好想你 你會在哪裡 過得快樂或委屈\r\n突然好想你 突然鋒利的回憶 突然模糊的眼睛\r\n\r\n最怕空氣突然安靜 最怕朋友突然的關心\r\n最怕回憶 突然翻滾絞痛著不平息 最怕突然 聽到你的消息\r\n\r\n最怕此生 已經決心自己過沒有你 卻又突然 聽到你的消息', '00:04:46', 'https://www.youtube.com/watch?v=GtDRcXtDg-4', 'C000000001', '', 'https://img.mymusic.net.tw/mms/album/L/190/55190.jpg'),
('S000000002', '我不願讓你一個人', 2011, '你說呢 明知你不在還是會問\r\n空氣 卻不能代替你 出聲\r\n習慣 像永不癒合的固執傷痕\r\n一思念就撕裂靈魂\r\n把相片 讓你能保存多洗一本\r\n毛衣 也為你準備多 一層\r\n但是 你孤單時刻安慰的體溫\r\n怎麼為你多留一份\r\n我不願讓你一個人\r\n一個人在人海浮沉\r\n我不願你獨自走過\r\n風雨的 時分\r\n我不願讓你一個人\r\n承受這世界的殘忍\r\n我不願眼淚陪你到 永恆\r\n你走後 愛情的遺跡像是空城\r\n遺落 你杯子手套和 笑聲\r\n最後 你只帶走你脆弱和單純\r\n和我最放不下的人\r\n\r\n也許未來 你會找到 懂你疼你 更好的人\r\n下段旅程 你一定要 更幸福豐盛\r\n我不願讓你一個人\r\n一個人在人海浮沉\r\n我不願你獨自走過\r\n風雨的 時分\r\n我不願讓你一個人\r\n承受這世界的殘忍\r\n我不願眼淚陪你到 永恆\r\n你說呢 明知你不在還是會問\r\n只因 習慣你滿足的 眼神\r\n只是 我最後一個 奢求的可能\r\n只求你有快樂人生\r\n只求命運 帶你去一段全新的旅程\r\n往幸福的天涯飛奔\r\n別回頭就往前飛奔\r\n請忘了我還 一 個 人', '00:04:26', 'https://www.youtube.com/watch?v=38lcQsEMGrk', 'C000000001', '', 'https://i.kfs.io/album/global/310226,0v1/fit/500x500.jpg'),
('S000000003', '演員', 2015, '簡單點 說話的方式簡單點\r\n遞進的情緒請省略\r\n你又不是個演員\r\n別設計那些情節\r\n沒意見 我只想看看你怎麼演\r\n你難過的太表面 像沒天賦的演員\r\n觀眾一眼能看見\r\n該配合你演出的我 演視而不見\r\n在逼一個最愛你的人 即興表演\r\n什麼時候我們開始 收起了底線\r\n順應時代的改變 看那些拙劣的表演\r\n可你曾經那麼愛我 幹嘛演出細節\r\n我該變成什麼樣子 才能延緩厭倦\r\n原來當愛放下防備後的這些那些\r\n才是考驗\r\n沒意見 你想怎樣我都隨便\r\n你演技也有限 又不用說感言\r\n分開就平淡些\r\n該配合你演出的我 演視而不見\r\n別逼一個最愛你的人 即興表演\r\n什麼時候我們開始 沒有了底線\r\n順著別人的謊言 被動就不顯得可憐\r\n可你曾經那麼愛我 幹嘛演出細節\r\n我該變成什麼樣子 才能配合出演\r\n原來當愛放下防備後的這些那些\r\n都有個期限\r\n其實台下的觀眾就我一個\r\n其實我也看出你有點不捨\r\n場景也習慣我們來回拉扯\r\n還計較著什麼\r\n其實說分不開的也不見得\r\n其實感情最怕的就是拖著\r\n越演到重場戲越哭不出了\r\n是否還值得\r\n該配合你演出的我 盡力在表演\r\n像情感節目裡的嘉賓 任人挑選\r\n如果還能看出我有愛你的那面\r\n請剪掉那些情節 讓我看上去體面\r\n可你曾經那麼愛我 幹嘛演出細節\r\n不在意的樣子是我最後的表演\r\n是因為愛你我才選擇表演 這種成全', '00:04:58', 'https://www.youtube.com/watch?v=XKuL5xaKZHM', 'C000000002', '', 'https://i.kfs.io/album/global/6542696,1v1/fit/500x500.jpg'),
('S000000004', '醜八怪', 2013, '如果世界漆黑 其實我很美\r\n在愛情裡面進退 最多被消費\r\n無關痛癢的是非\r\n又怎麼不對 無所謂\r\n如果像你一樣 總有人讚美\r\n圍繞著我的卑微 也許能消退\r\n其實我並不在意 有很多機會\r\n像巨人一樣的無畏\r\n放縱我心裡的鬼\r\n可是我不配\r\n\r\n醜八怪 能否別把燈打開\r\n我要的愛 出沒在漆黑一片的舞台\r\n醜八怪 在這曖昧的時代\r\n我的存在 像意外\r\n\r\n有人用一滴淚 會紅顏禍水\r\n有人丟掉稱謂 什麼也不會\r\n只要你足夠虛偽\r\n就不怕魔鬼 對不對\r\n\r\n如果劇本寫好 誰比誰高貴\r\n我只能沉默以對 美麗本無罪\r\n當慾望開始貪杯 有很多機會\r\n像塵埃一樣的無畏\r\n化成灰 誰認得誰\r\n管他配不配\r\n\r\n醜八怪 能否別把燈打開\r\n我要的愛 出沒在漆黑一片的舞台\r\n醜八怪 在這曖昧的時代\r\n我的存在 不意外\r\n\r\n醜八怪 其實見多就不怪\r\n放肆去HIGH 用力踩\r\n那不堪一擊的潔白\r\n醜八怪 這是我們的時代\r\n我不存在 才意外', '00:04:02', 'https://www.youtube.com/watch?v=1xlASR2bfGk', 'C000000002', '', 'https://i.kfs.io/album/tw/2527177,0v1/fit/500x500.jpg'),
('S000000005', '光年之外', 2016, '感受停在我髮端的指尖\r\n如何瞬間 凍結時間\r\n記住望著我堅定的雙眼\r\n也許已經 沒有明天\r\n\r\n面對浩瀚的星海\r\n我們微小得像塵埃\r\n漂浮在 一片無奈\r\n\r\n緣份讓我們相遇亂世以外\r\n命運卻要我們危難中相愛\r\n也許未來遙遠在光年之外\r\n我願守候未知裡為你等待\r\n\r\n我沒想到 為了你 我能瘋狂到\r\n山崩海嘯 沒有你 根本不想逃\r\n我的大腦 為了你 已經瘋狂到\r\n脈搏心跳 沒有你 根本不重要\r\n\r\n一雙圍在我胸口的臂彎\r\n足夠抵擋 天旋地轉\r\n一種執迷不放手的倔強\r\n足以點燃 所有希望\r\n\r\n宇宙磅礡而冷漠\r\n我們的愛微小卻閃爍\r\n顛簸 卻如此忘我\r\n\r\n緣份讓我們相遇亂世以外\r\n命運卻要我們危難中相愛\r\n也許未來遙遠在光年之外\r\n我願守候未知裡為你等待\r\n\r\n我沒想到 為了你 我能瘋狂到\r\n山崩海嘯 沒有你 根本不想逃\r\n我的大腦 為了你 已經瘋狂到\r\n脈搏心跳 沒有你 根本不重要\r\n\r\n也許航道以外 是醒不來的夢\r\n亂世以外 是純粹的相擁\r\n\r\n我沒想到 為了你 我能瘋狂到\r\n山崩海嘯 沒有你 根本不想逃\r\n我的大腦 為了你 已經瘋狂到\r\n脈搏心跳 沒有你 根本不重要\r\n\r\n相遇亂世以外 危難中相愛\r\n相遇亂世以外 危難中相愛\r\n我沒想到', '00:03:55', 'https://www.youtube.com/watch?v=T4SimnaiktU', 'C000000003', '', 'https://data.17jita.com/attachment/portal/201903/04/143759y946stvttwvvqtdp.jpg'),
('S000000006', '來自天堂的魔鬼 AWAY', 2015, '夜裡做了美麗的惡夢\r\n想清醒我卻抵不過心動\r\n夢裡你是無底的黑洞\r\n我無力抗拒失重\r\n\r\n我的意識自控脈搏流動\r\n全被你神秘引力操控\r\n親愛的你是危險的迷宮\r\n我找不到出口\r\n\r\nYou took my heart away, away, away, away\r\nMy head is blown away, away, away, away\r\n你就是傳說來自天堂的魔鬼\r\nYou should take my heart away, away, away, away, away, away, away\r\n\r\n拜託別對我細心問候\r\n這是你也不察覺的陰謀\r\n我討厭你無心的微笑\r\n我快無可救藥\r\n\r\n你像一個漩渦慢慢讓我\r\n無法抽離一直地墜落\r\n親愛的你是優雅的惡魔\r\n一點一點把我吞沒\r\n\r\nYou took my heart away, away, away, away\r\nMy head is blown away, away, away, away\r\n你就是傳說來自天堂的魔鬼\r\nYou should take my heart away, away, away, away, away, away, away\r\n\r\n如果你是蛇的誘惑 你存心迷惑 我才能軟弱\r\n但你是牛頓頭上那顆 若無其事的蘋果\r\n\r\nYou took my heart away, away, away, away\r\nYou took my heart away, away, away, away\r\nYou took my heart away, away, away, away\r\nMy head is blown away, away, away, away\r\n你就是傳說來自天堂的魔鬼\r\nYou should take my heart away, away, away, away, away, away, away', '00:04:16', 'https://www.youtube.com/watch?v=FWtbGkpdoP4', 'C000000003', '', 'https://c-sf.smule.com/sf/s66/arr/0c/ac/c502b66b-83b8-4110-ba34-f75e9aa4a79a_512.jpg'),
('S000000007', '告白氣球', 2016, '塞納河畔 左岸的咖啡\r\n我手一杯 品嚐你的美\r\n留下唇印的嘴\r\n\r\n花店玫瑰 名字寫錯誰\r\n告白氣球 風吹到對街\r\n微笑在天上飛\r\n\r\n你說你有點難追 想讓我知難而退\r\n禮物不需挑最貴 只要香榭的落葉\r\n營造浪漫的約會 不害怕搞砸一切\r\n擁有你就擁有 全世界\r\n\r\n親愛的 愛上你 從那天起\r\n甜蜜的很輕易\r\n親愛的 別任性 你的眼睛\r\n在說我願意\r\n\r\n塞納河畔 左岸的咖啡\r\n我手一杯 品嚐你的美\r\n留下唇印的嘴\r\n\r\n花店玫瑰 名字寫錯誰\r\n告白氣球 風吹到對街\r\n微笑在天上飛\r\n\r\n你說你有點難追 想讓我知難而退\r\n禮物不需挑最貴 只要香榭的落葉\r\n營造浪漫的約會 不害怕搞砸一切\r\n擁有你就擁有 全世界\r\n\r\n親愛的 愛上你 從那天起\r\n甜蜜的很輕易\r\n親愛的 別任性 你的眼睛\r\n在說我願意\r\n\r\n親愛的 愛上你 戀愛日記\r\n飄香水的回憶\r\n一整瓶 的夢境 全都有你\r\n攪拌在一起\r\n\r\n親愛的別任性 你的眼睛\r\n在說我願意', '00:03:35', 'https://www.youtube.com/watch?v=bu7nU9Mhpyo', 'C000000004', '', 'https://i1.sndcdn.com/artworks-000280071455-0mxjld-t500x500.jpg'),
('S000000008', '說好的幸福呢', 2008, '妳的回話凌亂著 在這個時刻\r\n我想起噴泉旁的白鴿 甜蜜散落了\r\n情緒莫名的拉扯 我還愛妳呢\r\n而妳斷斷續續唱著歌 假裝沒事了\r\n時間過了 走了 愛情面臨選擇 妳冷了 倦了 我哭了\r\n離開時的不快樂 妳用卡片手寫著 有些愛只給到這 真的痛了\r\n怎麼了 妳累了 說好的 幸福呢\r\n我懂了 不說了 愛淡了 夢遠了\r\n開心與不開心一一細數著 妳再不捨\r\n那些愛過的感覺都太深刻 我都還記得\r\n妳不等了 說好的 幸福呢\r\n我錯了 淚乾了 放手了 後悔了\r\n只是回憶的音樂盒還旋轉著 要怎麼停呢\r\n妳的回話凌亂著 在這個時刻\r\n我想起噴泉旁的白鴿 甜蜜散落了\r\n情緒莫名的拉扯 我還愛妳呢\r\n而妳斷斷續續唱著歌 假裝沒事了\r\n時間過了 走了 愛情面臨選擇 妳冷了 倦了 我哭了\r\n離開時的不快樂 妳用卡片手寫著 有些愛只給到這 真的痛了\r\n怎麼了 妳累了 說好的 幸福呢\r\n我懂了 不說了 愛淡了 夢遠了\r\n開心與不開心一一細數著 妳再不捨\r\n那些愛過的感覺都太深刻 我都還記得\r\n妳不等了 說好的 幸福呢\r\n我錯了 淚乾了 放手了 後悔了\r\n只是回憶的音樂盒還旋轉著 要怎麼停呢\r\n怎麼了 妳累了 說好的 幸福呢\r\n我懂了 不說了 愛淡了 夢遠了我都還記得\r\n妳不等了 說好的 幸福呢\r\n我錯了 淚乾了 放手了 後悔了\r\n只是回憶的音樂盒還旋轉著 要怎麼停呢', '00:04:16', 'https://www.youtube.com/watch?v=mLFhTFiX0uM', 'C000000004', '', 'https://5b0988e595225.cdn.sohucs.com/images/20171102/bd46341f25c34f02af189cc7cf5bcded.jpeg'),
('S000000009', '勇氣', 2000, '終於作了這個決定 別人怎麼說我不理\r\n只要你也一樣的肯定\r\n我願意天涯海角都隨你去\r\n我知道一切不容易\r\n我的心一直溫習說服自己\r\n最怕你忽然說要放棄\r\n愛真的需要勇氣 來面對流言蜚語\r\n只要你一個眼神肯定 我的愛就有意義\r\n我們都需要勇氣 去相信會在一起\r\n人潮擁擠我能感覺你\r\n放在我手心裡 你的真心\r\n終於作了這個決定 別人怎麼說我不理\r\n只要你也一樣的肯定\r\n我願意天涯海角都隨你去\r\n我知道一切不容易\r\n我的心一直溫習說服自己\r\n最怕你忽然說要放棄\r\n愛真的需要勇氣 來面對流言蜚語\r\n只要你一個眼神肯定 我的愛就有意義\r\n我們都需要勇氣 去相信會在一起\r\n人潮擁擠我能感覺你\r\n放在我手心裡 你的真心\r\n\r\n如果我的堅強任性\r\n會不小心傷害了你\r\n你能不能溫柔提醒\r\n我雖然心太急 更害怕錯過你\r\n\r\n愛真的需要勇氣 來面對流言蜚語\r\n只要你一個眼神肯定 我的愛就有意義\r\n我們都需要勇氣 去相信會在一起\r\n人潮擁擠我能感覺你\r\n放在我手心裡 你的真心', '00:04:00', 'https://www.youtube.com/watch?v=BVpXUyXPKOg', 'C000000005', '', 'https://i.ytimg.com/vi/BVpXUyXPKOg/hqdefault.jpg'),
('S000000010', '可惜不是你', 2005, '這一刻 突然覺得好熟悉\r\n像昨天 今天同時在放映\r\n我這句語氣 原來好像你\r\n不就是我們愛過的證據\r\n差一點 騙了自己騙了你\r\n愛與被愛不一定成正比\r\n我知道被疼是一種運氣\r\n但我無法完全交出自己\r\n努力為你改變 卻變不了 預留的伏線\r\n以為在你身邊 那也算永遠\r\n彷彿還是昨天 可是昨天 已非常遙遠\r\n但閉上雙眼 我還看得見\r\n可惜不是你 陪我到最後\r\n曾一起走卻走失那路口\r\n感謝那是你 牽過我的手\r\n還能感受那溫柔\r\n那一段我們曾心貼著心\r\n我想我更有權利關心你\r\n可能你 已走進別人風景\r\n多希望也有星光的投影\r\n努力為你改變 卻變不了 預留的伏線\r\n以為在你身邊 那也算永遠\r\n彷彿還是昨天 可是昨天 已非常遙遠\r\n但閉上雙眼 我還看得見\r\n可惜不是你 陪我到最後\r\n曾一起走卻走失那路口\r\n感謝那是你 牽過我的手\r\n還能感受那溫柔\r\n可惜不是你 陪我到最後\r\n曾一起走卻走失那路口\r\n感謝那是你 牽過我的手\r\n還能感受那溫柔\r\n感謝那是你 牽過我的手\r\n還能溫暖我胸口', '00:04:47', 'https://www.youtube.com/watch?v=k_l7FVsqUyM', 'C000000005', '', 'https://lastfm-img2.akamaized.net/i/u/300x300/d8a1602c6e25414d977e7ae8397e2c6f.png'),
('S000000011', '聽海', 1997, '寫信告訴我今天 海是什麼顏色\r\n夜夜陪著你的海 心情又如何\r\n灰色是不想說 藍色是憂鬱\r\n而漂泊的你 狂浪的心 停在哪裡\r\n\r\n＊寫信告訴我今夜 你想要夢什麼\r\n夢裡外的我是否 都讓你無從選擇\r\n我揪著一顆心 整夜都閉不了眼睛\r\n為何你明明動了情 卻又不靠近\r\n\r\n聽 海哭的聲音 嘆惜著誰又被傷了心 卻還不清醒\r\n一定不是我 至少我很冷靜\r\n可是淚水 就連淚水也都不相信\r\n\r\n聽 海哭的聲音 這片海未免也太多情 悲泣到天明\r\n寫封信給我 就當最後約定\r\n說你在離開我的時候 是怎樣的心情\r\n\r\n\r\n＊寫信告訴我今夜 你想要夢什麼\r\n夢裡外的我是否 都讓你無從選擇\r\n我揪著一顆心 整夜都閉不了眼睛\r\n為何你明明動了情 卻又不靠近\r\n\r\n聽 海哭的聲音 嘆惜著誰又被傷了心 卻還不清醒\r\n一定不是我 至少我很冷靜\r\n可是淚水 就連淚水也都不相信\r\n\r\n聽 海哭的聲音 這片海未免也太多情 悲泣到天明\r\n寫封信給我 就當最後約定\r\n說你在離開我的時候 是怎樣的心情', '00:05:16', 'https://www.youtube.com/watch?v=mLk61pfiHQ0', 'C000000006', '', 'https://img.mymusic.net.tw/mms/album/L/342/342.jpg'),
('S000000012', '連名帶姓', 2017, '零七年 那一首定情曲的前奏\r\n要是依然念念不忘 太不稱頭\r\n早放生彼此 好好過 都多久\r\n你怎麼像標本 杵在我心裡頭\r\n後來的那幾個 又沒做錯什麼\r\n他們口中自私的我\r\n犯了偷竊時間的錯 複製貼上你的愛\r\n也很精彩的你 不甘寂寞\r\n這圈子不太大 多少聽說\r\n欣賞你流浪 像是種信仰\r\n我真這麼想\r\n再被你提起 已是連名帶姓\r\n謊稱是友誼 卻疏遠得可以\r\n多少人愛我 偏放不下你 是公開的秘密\r\n只剩你沒拆穿我\r\n再處心積慮 終究事不關己\r\n哪來的勇氣 我就是不灰心\r\n我且愛且走 其實在等你 是僅有的默契\r\n你會不會又錯過 我沒有把握\r\n算不清 多少個跨年夜一起過\r\n要是依然念念不忘 太不稱頭\r\n早放生彼此 好好過 都多久\r\n你怎麼像標本 杵在我心裡頭\r\n後來的那幾個 又沒做錯什麼\r\n他們口中自私的我\r\n犯了偷竊時間的錯 複製貼上你的愛\r\n也很精彩的你 不甘寂寞\r\n這圈子不太大 多少聽說\r\n欣賞你流浪 像是種信仰\r\n我真這麼想\r\n再被你提起 已是連名帶姓\r\n謊稱是友誼 卻疏遠得可以\r\n多少人愛我 偏放不下你 是公開的秘密\r\n只剩你沒拆穿我\r\n再處心積慮 終究事不關己\r\n哪來的勇氣 我就是不灰心\r\n我且愛且走 其實在等你 是最後的默契\r\n要是我們又錯過 就別再回頭', '00:05:59', 'https://www.youtube.com/watch?v=qf09H2xFq2s', 'C000000006', '', 'https://www.am1470.com/data/activities/1512363328-3.jpg'),
('S000000013', '不為誰而作的歌', 2015, '原諒我這一首 不為誰而作的歌\r\n感覺上彷彿窗外的夜色\r\n曾經有那一刻 回頭竟然認不得\r\n需要 從記憶再摸索 的人 和他們關心的\r\n的地方 和那些走過的 請等一等\r\n\r\n夢為努力澆了水 愛在背後往前推\r\n當我抬起頭才發覺 我是不是忘了誰\r\n累到整夜不能睡 夜色哪裡都是美\r\n一定有個人 她 躲過 避過 閃過 瞞過\r\n她是誰 她是誰\r\n\r\n\r\n原諒我這一首 不為誰而作的歌\r\n感覺上彷彿窗外的夜色\r\n曾經有那一刻 回頭竟然認不得\r\n需要 從記憶再摸索 的人 和他們關心的\r\n的地方 和那些走過的Ya\r\n\r\n夢為努力澆了水 愛在背後往前推\r\n當我抬起頭才發覺 我是不是忘了誰\r\n累到整夜不能睡 夜色哪裡都是美\r\n一定有個人 他 躲過 避過 閃過 瞞過\r\n他是誰 他是誰\r\n\r\n\r\n也許在真實面對自己才不顧一切\r\n去探究當初我害怕面對\r\n\r\n夢為努力澆了水 愛在背後往前推\r\n當我抬起頭才發覺 我是不是忘了誰\r\n累到整夜不能睡 夜色哪裡都是美\r\n一定有個他 躲過 避過 閃過 瞞過\r\n他是誰 他是誰 他是誰', '00:05:12', 'https://www.youtube.com/watch?v=gd38-X3HpbM', 'C000000007', '', 'https://i.kfs.io/album/global/11203226,2v1/fit/500x500.jpg'),
('S000000014', '修煉愛情', 2013, '憑什麼要失望 藏眼淚到心臟\r\n往事不會說謊 別跟他為難\r\n我們兩人之間 不需要這樣\r\n我想\r\n\r\n修煉愛情的心酸\r\n學會放好以前的渴望\r\n我們那些信仰 要忘記多難\r\n遠距離的欣賞 近距離的迷惘\r\n誰說太陽會找到月亮\r\n別人有的愛 我們不可能模仿\r\n\r\n修煉愛情的悲歡\r\n我們這些努力不簡單\r\n快樂煉成淚水 是一種勇敢\r\n幾年前的幻想 幾年後的原諒\r\n為一張臉去養一身傷\r\n別講想念我 我會受不了這樣\r\n\r\n記憶它真囂張 路燈把痛點亮\r\n情人一起看過 多少次月亮\r\n它在天空 看過多少次遺忘\r\n多少心慌\r\n\r\n修煉愛情的心酸\r\n學會放好以前的渴望\r\n我們那些信仰 要忘記多難\r\n遠距離的欣賞 近距離的迷惘\r\n誰說太陽會找到月亮\r\n別人有的愛 我們不可能模仿\r\n\r\n修煉愛情的悲歡\r\n我們這些努力不簡單\r\n快樂煉成淚水 是一種勇敢\r\n幾年前的幻想 幾年後的原諒\r\n為一張臉去養一身傷\r\n別講想念我 我會受不了這樣\r\n\r\noh~~~~\r\n\r\n笑著說愛讓人瘋狂\r\n哭著說愛讓人緊張\r\n忘不了那個人就投降 oh~\r\n\r\n修煉愛情的悲歡\r\n我們這些努力不簡單\r\n快樂煉成淚水 是一種勇敢\r\n幾年前的幻想 幾年後的原諒\r\n為一張臉去養一身傷\r\n別講想念我 我會受不了這樣\r\n\r\n幾年前的幻想 幾年後的原諒\r\n為一張臉去養一身傷\r\n別講想念我 我會受不了這樣', '00:05:53', 'https://www.youtube.com/watch?v=LWV-f6dMN3Q', 'C000000007', '', 'https://dingyue.ws.126.net/2019/10/16/164c823b1ba742c3acf1485d8a0ecdce.jpeg'),
('S000000015', '我呸', 2014, '半夜一點的無邪浪蕩睡衣姐妹\r\n清晨五點的萬人登山體操大會\r\n六零年代歐洲前衛地下導演討論會\r\n九零年代偶像復出簽名握手擁抱會\r\n零下五十度北極探險為期十幾天\r\n撒哈拉酷熱絕對崩潰生存考驗\r\n三天兩夜集體K歌歇斯底里的宣泄\r\n芳香精油深度放鬆無意識催眠\r\n文藝裝逼亂世盛裝派對\r\n女神豐乳肥臀九頭身材\r\n男神彎弓射雕六塊肌排\r\n比錢更重要的是人魚線\r\n管你小眾大眾我呸\r\n管你是小清新是重口味我呸\r\n管你是那一類甲蟲我呸 我呸 都呸 都Play\r\n什麼都喜歡什麼都會什麼都\r\n什麼都喜歡什麼都會什麼都\r\n什麼都喜歡什麼都會什麼都\r\n什麼都喜歡什麼都會\r\n什麼都呸都Play\r\n都呸都Play\r\n都呸都Play\r\n都呸都Play\r\n星期三下午與文青男友的約會\r\n全套文藝少女裝備讓他非常陶醉\r\n星期五二十四小時洗衣店讀海明威\r\n網路上五十個分身匿名一點都不累\r\n文藝裝逼亂世盛裝派對\r\n女神豐乳肥臀九頭身材\r\n男神彎弓射雕六塊肌排\r\n比錢更重要的是馬甲線\r\n管你小眾大眾我呸\r\n管你是小清新是重口味我呸\r\n管你是那一類甲蟲我呸 我呸 都呸 都Play\r\n什麼都喜歡什麼都會什麼都\r\n什麼都喜歡什麼都會什麼都\r\n什麼都喜歡什麼都會\r\n什麼都呸都Play\r\n都呸都Play\r\n管你後衛前衛我呸\r\n管你原創拷貝我play\r\n管你是那一種馬鈴薯我呸 我呸 都呸 都Play\r\n什麼都喜歡什麼都會什麼都\r\n什麼都喜歡什麼都會什麼都\r\n什麼都喜歡什麼都會\r\n什麼都呸都Play\r\n都呸都Play', '00:03:20', 'https://www.youtube.com/watch?v=c86t8hoVw8E', 'C000000008', '', 'https://i.kfs.io/album/global/31807520,0v1/fit/500x500.jpg'),
('S000000016', '第三人稱', 2014, '主觀鏡頭太靠近 難過太立體\r\n用遠景保持疏離\r\n我冷眼旁觀 霧中風景\r\n不偏不倚 一鏡到底\r\n第二張臉很吃力 笑容很僵硬\r\n用一號表情面對失去\r\n我開始用第三人稱的口氣\r\n不疾不徐 全事不關己\r\n看著他 自成一局歇斯底里\r\n看著他 雙人床上Solo抽泣\r\n第三人稱的自己 有病就呻吟\r\n那麼神經 那麼入戲\r\n第二張臉很吃力 笑容很僵硬\r\n用一號表情面對失去\r\n我開始用第三人稱的口氣\r\n不疾不徐 全事不關己\r\n看著他 自成一局歇斯底里\r\n看著他 雙人床上Solo抽泣\r\n第三人稱的自己 有病就呻吟\r\n那麼神經 那麼入戲\r\n隨便他 自成一局歇斯底里\r\n隨便他 雙人床上Solo抽泣\r\n第三人稱的自己 罵得好過癮\r\n這點破事 什麼玩意\r\n漸漸他平靜 漸漸我走遠\r\n那些瘋狂也漸漸不見\r\n某一天回頭 看見他還站在原地\r\n收留著 那年打包好的眼淚\r\n謝謝他 曾歇斯底里\r\n謝謝他 一直在那裡\r\n第三人稱的自己 我慢慢走近\r\n抱著他忍不住哭泣\r\n那些曾經 都在心裡', '00:05:29', 'https://www.youtube.com/watch?v=2BrzK4fZ45k', 'C000000008', '', 'https://i.ytimg.com/vi/8QxQeCNl2zo/hqdefault.jpg'),
('S000000017', '小幸運', 2015, '我聽見雨滴 落在青青草地\r\n我聽見遠方 下課鐘聲響起\r\n可是我沒有聽見你的聲音 認真呼喚我姓名\r\n\r\n愛上你的時候 還不懂感情\r\n離別了 才覺得刻骨銘心\r\n為什麼沒有發現 遇見了你 是生命最好的事情\r\n\r\n也許當時忙著微笑和哭泣\r\n忙著追逐天空中的流星\r\n人理所當然的忘記\r\n是誰風裡 雨裡 一直默默守護在原地\r\n\r\n原來你是 我最想留住的幸運\r\n原來我們 和愛情曾經靠得那麼近\r\n那為我對抗世界的決定 那陪我淋的雨\r\n一幕幕都是你 一塵不染的真心\r\n\r\n與你相遇 好幸運\r\n可我已失去 為你淚流滿面的權利\r\n但願在我看不到的天際 你張開了雙翼\r\n遇見你的註定 她會有多幸運\r\n\r\n青春是段跌跌撞撞的旅行\r\n擁有著後知後覺的美麗\r\n來不及感謝 是你給我勇氣 讓我能做回我自己\r\n\r\n也許當時忙著微笑和哭泣\r\n忙著追逐天空中的流星\r\n人理所當然的忘記\r\n是誰風裡 雨裡 一直默默守護在原地\r\n\r\n原來你是 我最想留住的幸運\r\n原來我們 和愛情曾經靠得那麼近\r\n那為我對抗世界的決定 那陪我淋的雨\r\n一幕幕都是你 一塵不染的真心\r\n\r\n與你相遇 好幸運\r\n可我已失去為你淚流滿面的權利\r\n但願在我看不到的天際 你張開了雙翼\r\n遇見你的註定 Woooo~\r\n她會有多幸運', '00:04:48', 'https://www.youtube.com/watch?v=_sQSXwdtxlY', 'C000000009', '', 'https://img.mymusic.net.tw/mms/album/L/410/277410.jpg'),
('S000000018', '還是要幸福', 2011, '不確定就別親吻 感情很容易毀了一個人\r\n一個人若不夠狠 愛淡了不離不棄多殘忍\r\n\r\n你留下來的垃圾 我一天一天總會丟完的\r\n我甚至真心真意的祝福 永恆在你的身上先發生\r\n\r\n你還是要幸福 你千萬不要再招惹別人哭\r\n所有錯誤從我這裏落幕 別跟著我 銘心 刻骨\r\n\r\n你還是要幸福 我才能確定我還得很清楚\r\n確定自己再也不會佔據 你的篇幅\r\n明天 開始 這一切都結束\r\n\r\n還我鑰匙的備份 我覺得再見可以很單純\r\n我甚至真心真意的祝福 永恆在你的身上先發生\r\n\r\n你還是要幸福 你千萬不要再招惹別人哭\r\n所有錯誤從我這裏落幕 別跟著我 銘心 刻骨\r\n\r\n你還是要幸福 我才能確定我還得很清楚\r\n確定自己再也不會佔據 你的篇幅\r\n明天 開始 這一切都結束\r\n\r\n你還是要幸福 你千萬不要再招惹別人哭\r\n所有錯誤從我這裏落幕 別跟著我 銘心 刻骨\r\n\r\n你如果很幸福 半夜的簡訊我就無需回覆\r\n因為你的悲喜已經有了 容身之處\r\n我也 能有 最純粹的孤獨\r\n\r\n最孤獨 的孤獨', '00:04:43', 'https://www.youtube.com/watch?v=1CcQDuuhdXA', 'C000000009', '', 'https://www.jgospel.net/jgospel_media/120508/.jpg'),
('S000000019', '愛', 2017, '道德 得到 道德\r\n打了疫苗讓你產生了抗體\r\n恭喜你得到永生\r\n誰都想擁有最完美的情人\r\n隨時幫你捏捏肩，呵呵\r\n\r\n愛，只是一個字而已\r\n但人類千秋和萬代\r\n不明白一直到現在\r\n但 A.I.\r\n能克服所有問題\r\n但道德該放在哪裡\r\n到底道德放在哪裡\r\n到底\r\n道德 得到 道德\r\n\r\nA.I. 愛 A.I. 愛\r\n哎哎 哎呀\r\n\r\n人工智能終於完善了愛情\r\n但別挑戰它下棋\r\n全世界的問題不需再擔心\r\n它將會殖民火星\r\n\r\n愛，只是一個字而已\r\n但人類千秋和萬代\r\n不明白一直到現在\r\n但 A.I.\r\n能克服所有問題\r\n但道德該放在哪裡\r\n到底道德放在哪裡\r\n到底\r\n道德 得到 道德\r\n\r\nA.I. 愛 A.I. 愛\r\n哎哎 哎呀\r\n\r\n愛，只是一個字而已\r\n但人類千秋和萬代\r\n不明白一直到現在\r\n但 A.I.\r\n能克服所有問題\r\n但道德該放在哪裡\r\n到底道德放在哪裡\r\n\r\n到底道德放在哪裡\r\n\r\nA.I. 愛 A.I. 愛\r\n哎哎 哎呀', '00:04:05', 'https://www.youtube.com/watch?v=R4DuqEL0ChQ', 'C000000010', '', 'https://img.mymusic.net.tw/mms/album/L/288/540288.jpg'),
('S000000020', '親愛的', 2017, '親愛的還有好多話想對你說 但今晚還不是時候 喔\r\n我明白你內心還稚嫩和單純 有時候會受傷 有恐懼和困惑\r\n\r\n我能拍拍你背到呼吸變平息 悄悄地在你耳邊說我多愛你\r\n今晚只願你夢裡出現長頸鹿 以後的夢以後再做吧\r\n\r\n親愛的你永遠 會是爸爸的寶貝\r\n親吻你的臉頰 讓你安穩的入睡\r\n親愛的不管路多遙遠 我的愛相隨\r\n因為你永遠是我親愛的\r\n\r\n親愛的我會記住今晚的模樣 和你天使般的臉龐 啊\r\n整間屋子裡都是你散發的香 緊緊握我的手 久久還不放掉\r\n\r\n我能拍拍你背到呼吸變平息 悄悄地在你耳邊說我多愛你\r\n今晚只願你夢裡出現小飛象 以後的夢以後再說吧\r\n\r\n親愛的你永遠 會是爸爸的寶貝\r\n親吻你的臉頰 讓你安穩的入睡\r\n親愛的不管路多遙遠 我的愛相隨\r\n因為你永遠是我親愛的\r\n\r\n親愛的你永遠 會是爸爸的寶貝\r\n親吻你的臉頰 讓你安穩的入睡\r\n親愛的不管路多遙遠 一定充滿愛\r\n因為你永遠是我親愛的', '00:05:19', 'https://www.youtube.com/watch?v=sHNy8muYwdU', 'C000000010', '', 'https://i.ytimg.com/vi/sHNy8muYwdU/maxresdefault.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`Son_Id`),
  ADD KEY `sing_id` (`sing_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`sing_id`) REFERENCES `singer` (`sin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
