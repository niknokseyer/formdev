CREATE DATABASE  IF NOT EXISTS `formdev` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `formdev`;
-- MySQL dump 10.13  Distrib 5.1.40, for Win32 (ia32)
--
-- Host: localhost    Database: formdev
-- ------------------------------------------------------
-- Server version	5.5.8

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `idprofile` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` int(10) DEFAULT NULL,
  `batch` float NOT NULL,
  `fullname` text NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `course` text NOT NULL,
  `hometown` text NOT NULL,
  `highschool` text NOT NULL,
  `hobbies_interests` text,
  `motto` text,
  `favorite_verse` text,
  `random_stuff` text,
  `formdev_is` text,
  `email` varchar(100) NOT NULL,
  `contact` bigint(11) unsigned zerofill NOT NULL,
  `expected_term_graduation` varchar(45) NOT NULL,
  PRIMARY KEY (`idprofile`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,NULL,7.2,'Dimaunahan, Ryan Samuel','Ryan','1989-09-19','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology','Sampaloc, Manila (now residing in Las Pinas City)','Elizabeth Seton School Main','Reading books;\nWriting stories and comics;\nWatching tokusatsu, anime and other geeky stuff;\nListening to music;\nPlaying the guitar;\nPlaying video games and trading card games;\nPhotography;\nAnd many many more?','\"Words could mean a thousand things; pictures are worth a thousand words. Moments are wrought by thousands of pictures; lives are measured as thousands of moments. But a life worth living, if its truly worth living, gives worth to a thousand more.\"','1Corinthians 13:1-3','I always try to put a little bit of my identity in everything that I do.','Formdev is further proof that a God of Love exists.','dimaunahan.ryan@gmail.com',09052445599,'Term 1 A.Y. 2011-2012'),(2,NULL,7.3,'Mendoza, Mary Klindt Asuncion','Klindt/Keng','1991-01-09','BS-ICTM','Manila','Philippine Pasay Chung Hua Academy','-Reading (Sci-Fi, Mystery, General Fiction)\n-Watching movies and American series (Crime Drama, Sci-Fi, Supernatural, Sitcoms, Competitions)\n-Music\n-Shopping/Fashion\n\n','The purpose of life is a life of purpose.\n- Robert Byrne\n\nWhat lies behind us and what lies before us are tiny matters compared to what lies within us.\n- Oliver Wendell Holmes','\"For he chose us in him before the creation of the world to be holy and blameless in his sight. In love he predestined us to be adopted as his sons through Jesus Christ, in accordance with his pleasure and will -- to the praise of his glorious grace, which he has freely given us in the One he loves.\"\n\n-Ephesians 1:4-6','Creative writing is my frustration.\nMy favorite song is When You Believe by Mariah Carey and Whitney Houston.\nI prefer fruit juices than water.','FORMDEV helped me form my character, strengthen my faith and deepen my relationship with the Lord.','kamm_07@yahoo.com',09064208860,'Term 1 A.Y. 2011-2012'),(3,NULL,8.1,'Manangan, David C.','Dave','1989-04-12','Bachelor of Science in Computer Science (CS) with Specialization in Software Technology','Cainta, Rizal','Lourdes School of Mandaluyong','Running, playing guitar, walking on the beach, watching movies and listening to music.','We all have the God given right to be happy. ','Romans 6:2\n\"By no means! We are those who have died to sin; how can we live in it any longer?\"','While others are 1/2 chinese or 1/4 chinese, I am 1/16 chinese. ','a course in college that I kept on taking twice a year for three years straight... a course that I will be taking even after I graduate... a course that is leading me to Jesus.','david.manangan@delasalle.ph',09179848481,'Term 1  A.Y. 2011-2012'),(4,NULL,8.1,'Miranda, Miguel Cristobal B.','Mc','1990-11-13','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','Manila','Manila Science High School','Programming! :P;\nWatching \"How I Met Your Mother\" and \"The Big Bang Theory\";\nReading books;\nPlaying badminton, basketball, soccer and chess;\nSwimming; and\nJust hanging out with friends','\"With God, nothing is impossible!\"','\"And whatever you ask in prayer, you will receive, if you have faith.\" (Matthew 21:22)','I really really really like Gadgets!! (they\'re so gadget-y, I\'m gonna dieeee!) :))','God\'s work in action! :)','mc.miranda@delasalle.ph',09054388862,'Term 2 A.Y. 2012-2013'),(5,3,8.1,'Reyes, Nikko Erick Lee','Nikko / Erick / Niknok / Nik','1990-04-02','Bachelor of Science in Computer Science with specialization in Software Technology','Provident Villages, Marikina City','Marist School, Marikina City','Travelling, chilling, eating, anything under the sun. :)','Pag gusto maraming paraan, pag ayaw maraming dahilan.','Love is patient, kind, without envy. It is not boastful or arrogant. It is not ill-mannered nor does it seek its own interest. Love overcomes anger and forgets offenses. It does not take delight in wrong, but rejoices in truth. Love excuses everything, believes all things, hopes all things, endures all things.- 1 Cor. 13 : 4 - 7','I already have a grandson at the age of 17.','a family that I won\'t regret being into. A family that will be with you in good times and bad times. A family that will help you walk with God.','nikkoreyes_42@yahoo.com',09178004290,'2012'),(6,NULL,8.1,'Tapel, Larisse Ann','Larisse','1990-11-23','MMA','Binan, Laguna','St. Paul College, Pasig','Books, Photography, Street dance, Movies ','Passion and satisfaction go hand in hand, and without them, any happiness is only temporary, because there\'s nothing to make it last.','He keeps me functioning each and every day. Without Him, I will be nothing. But, with Christ, He strengthens me.(Phil 4:13)','I love mint flavored chocolates, cupcakes and coffee.','FORMDEV for me is a blessing.','pollykit23@yahoo.com',09165781866,'-'),(7,NULL,8.2,'Boac, Ma. Clarissa','Lexis','2011-09-20','BS-ICTM','null','null','-','-','-','-','-','zidane_lex@yahoo.com',00000000000,'-'),(8,NULL,8.2,'Esperanza, Gena Claire Fineza ','Gena/Gena Claire/Ginaclurr/Shooting Star','1991-10-01','BS-ICTM turned MMG','Las Pi?as','Bloomfield Academy','Books, tumblr, more books, watching Asian dramas, fangirling, going to the beach','No one can make you feel inferior without your consent. - Eleanor Roosevelt','For I know the plans I have for you, declares the Lord, \"plans to prosper you and not to harm you, plans to give you hope and a future. Then you will call upon me and come and pray to me, and I will listen to you. You will seek me and find me when you seek me with all your heart.\" - Jeremiah 29:11-13','I like swimming even if I don\'t know how to swim, I love California Maki, and I\'m a pocketful of sunshine!','My spiritual family, and the best part of my college life <3','genaclaire11@yahoo.com/gena.esperanza@gmail.com',09064207345,'Term 2 A.Y. 2011-2012'),(9,NULL,8.2,'Gervacio, Paolo Miguel R.','Paolo','1991-01-05','BS CS-NE','Las Pi?as City','Elizabeth Seton School','Watching movies, watching sitcoms, water sports, motor sports, playing video games, playing the guitar','Getting your butt kicked today doesn\'t mean that tomorrow can\'t be a kick-butt day. (Gervacio, 2010)','-','I like saying \"hehe\". Hehe.','A chunk of God\'s ossum family. Hehe','paolomiguel07@yahoo.com; paologervacio@gmail.com',09156144501,'Term 3 A.Y. 2012-2013'),(10,NULL,8.2,'Miranda, Angelo Crisanto B.','AC','1990-11-13','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','Manila','Manila Science High School','Programming, Playing different sports, and Watching TV Series and Movies','Always trust and follow God\'s will.','\"If you remain in me and my words in you, ask whatever you wish, and it will done for you.\" (John 15:7)','I Love YOU!!! :)','\"FORMDEV is Universal.\" (Miranda, A., 2010)','ac.miranda@delasalle.ph',09178131772,'Term 2 A.Y. 2011-2012'),(11,NULL,8.2,'Roa, Alexandra Marie Gumaru','Sandie','1989-03-27','CS-ST','Alabang','De La Salle Zobel','Reading, drawing, surfing the internet, playing video games','Come what may.','For where your treasure is, there your heart will be also. (Luke 12:34)','I love dogs!','one of a kind.','saanddiiee@yahoo.com',09283889006,'Term 1 A.Y. 2012-2013'),(12,NULL,8.2,'Tan, Brian Joseph P.','Bry','1988-12-13','BS-ICTM','Makati','Colegio San Agustin','Sci-Fi & Adventure Novels/Movies, Tv Series (Crime-Drama/Sci-Fi/Sitcom/Supernatural), RPG & MMORPG, Culinary Arts, Music, Anime/Manga, Gadgets','\'Tis a lesson you should heed,\nTry, try again.\nIf at first you don\'t succeed,\nTry, try again.\n\n                                 -William Edward Hickson','The Book of Wisdom 4:10-15 \"There were some who pleased God and were loved by Him, and while living among sinners were taken up. They were caught up so that evil might not change their understanding, or guile deceive their souls. For the fascination of wickedness obscures what is good, and roving desire perverts the innocent mind. Being perfected in a short time, they fulfilled long years; for their souls were pleasing to the Lord, therefore He took them quickly from the midst of wickedness. Yet the peoples saw and did not understand, to take such a thing to heart, that God\'s grace and mercy are with His elect, and that He watches over His Holy ones.\" ','I eat A LOT. ','the best thing that happened in my college life.','brianjosephtan@yahoo.com',09272014725,'Term 2 A.Y. 2011-2012'),(13,NULL,8.2,'Tardio, Jenna Karla','jenna','1989-07-18','bachelor of science in computer science major in instructional systems technology','Makati CIty','St Paul College Pasig','playing with nephew, dogs, watching TV, tweeting, sleeping, eating, loving nyahaha joke','Family comes First','Philippians 4:6 Don?t worry about anything; instead, pray about everything. Tell God what you need, and thank him for all he has done.','i am always masungit!!','what makes college life bearable <3','jennatardio@yahoo.com',09154375896,'Term 3 A.Y. 2011-2012'),(14,NULL,8.2,'Toyoda, Mitsuru Mike','Mike','2011-02-19','ECE','Project 8, Quezon City','St. Mary\'s College Quezon City','Long walks, jogging, keeping physically fit, planning, teaching, studying, talking about random stuff, mathematics','Hardwork breeds talent','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. \n\n- John 3:16','I am an amateur arcade person, I love to play rhythm games although I don\'t have the time to do so anymore.','a fun family','mikee_toyoda@yahoo.com',09152952172,'Term 3 A.Y. 2013-2014'),(15,NULL,9,'Ablaza, Geraldine','Gemi','1991-12-11','BS CS - ST','Las Pinas City','Elizabeth Seton School - Main','Watching anything (people watching included), photography, sleeping, eating :D','Please pass your papers. Finished or not finished.','\"However, I consider my life worth nothing to me; my only aim is to finish the race and complete the task the Lord Jesus has given me?the task of testifying to the good news of God?s grace.\" Acts 20:24\n\n','I am afraid of snakes (even pictures of them) or anything that crawls.','my family that resides in my heart.','gemi.ablaza@delasalle.ph',09161247023,'Term 1 A.Y. 2012- 2013'),(16,NULL,9,'Asoy, Camille R.','Cam','2011-11-27','BS-ICTM','-','PSHS-EVC','- Walking\n- Reading \n- Writing\n- Laughing\n- Listening to Music\n- Visual Arts\n- Cooking\n','You become responsible, forever, for what you have tamed. - Antoine de Saint-Exupery in The Little Prince','So then, just as you received Christ Jesus as Lord, continue to live your lives in him--rooted and built up to Him, strengthened in the faith as you were taught and overflowing with gratefulness. - Colossians 2:6-7','My oldest friend is a stuffed bear named Teddy--we\'ve been friends for about two decades now.','a surprising blessing from Him.','c_asoy@yahoo.com',09228355224,'2011'),(17,NULL,9,'Candano, Shaun Raphael Josef','Shaun','1990-01-06','Bachelor of Science in Computer Science with Specializations in Software Technology','Pasig City, Metro Manila','La Salle Green Hills','Bowling;\nTennis;\nSurfing the net;\nReading interesting books','?Impossible is Possible?','John 3:16-21','I like to organize things.','Formdev is family, friends, fun, learning and believing in God.','shaun_candano_09@yahoo.com',09209086355,'Term 3 A.Y. 2010-2011'),(18,NULL,9,'Catan, John Lawrence','Jacats','1991-06-24','CS-IST','Cainta,Rizal','Cainta Catholic College','playing computer games,reading novels and manga, watching t.v.,sleeping','Some succeed because they are destined to; most succeed because they are determined to.','2 Corinthians 12:9-10','I suck at basketball.Expect to lose when I am on your team. :))','FORMDEV for me is what renewed my faith in God. :)','lawrence_catan@yahoo.com, lawrence.catan@delasalle.ph',09179559593,'Term 1 A.Y. 2013-2014'),(19,NULL,9,'Clamor, George Anthony Alahan','Anjo','1989-07-06','Bachelor of Science in Computer Science with Specializations in Software Technology','Brisbane, Queensland','La Salle Green Hills','Playing football;\nPlaying basketball','?The way to conquer fear is to challenge it head on.?\n?You can?t be a hero if you?re afraid of dying.?','Psalms 27:1','I am ambidexterous; I?m supposed to be right handed, but then my parents thought that I was a leftie so they trained my left arm for writing.','Formdev is one word: LOVE.','gaclamor@gmail.com',09159826204,'Term 3 A.Y. 2010-2011'),(20,NULL,9,'Lachica, Joshua Daniel','Josh/Jude','1991-11-16','BS-CSST','Antipolo City','La Salle College Antipolo','Soccer, Basketball, Sports Games, uhh reading...and thats about it :D','Peace cannot be kept by force.\nIt can only be achieved by understanding.\n-Albert Einstein','Love is patient, love is kind and is not jealous; love does not brag and is not arrogant, does not act unbecomingly; it does not seek its own, is not provoked, does not take into account a wrong suffered, does not rejoice in unrighteousness, but rejoices with the truth; bears all things, believes all things, hopes all things, endures all things. Love never fails. \n\n- 1 Corinthians 13:4','uhh...hmm...i like collecting toys even though im too old for them :D','My Second Family','josh_lachica@yahoo.com',09266197374,'Term 1 A.Y. 2012-2013'),(21,NULL,9,'Lim, Valerie Mae','Vea','1990-10-02','BS-ICTM','Marikina City','St. Scholastica\'s Academy Marikina','Wathcing movies, facebook, twitter and tumblr, eating. :))','The worst mistake anyone can make is being too afraid to make one.','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. John 3:16','I love melted ice cream. In tagalog: tunaw na ice cream. :))','Family.','vea_kinse@yahoo.com',09277842797,'Term 2 A.Y. 2011-2012'),(22,NULL,9,'Lu, Mike','Mike','1989-01-12','CS-ST','San Juan','Xavier School','Animation, Movies, Computer Games','Inspiration does not come from the quote itself, but rather the person behind it.','Matthew 5:30 And if your right hand causes you to sin, cut it off and throw it away. It is better for you to lose one part of your body than for your whole body to go into hell.','I don\'t like giant insects','My way of escaping from school work.','deeds0l@yahoo.com',00007254827,'Term 1 A.Y. 2012-2013'),(23,NULL,9,'Orais, Cyrus Paul','TAYUT','1990-11-14','BS-ICTM','Merville, Paranaque','Don Bosco Technical Institute - Makati','Eating (Free Food), Surfin\' the Net, Tambay, Games(PC), FUN RUN! :) basketball, playing guitar, magsulat? Programming, multimedia stuffs, \n\nCommited to FORMDEV & Parish-Comission on Youth, Merville.','\"Love, It\'s like the wind. I can\'t... see it, but I feel it.\" \n- Jamie Elizabeth Sullivan (A Walk to Remeber)','\"For God did not send his Son into the world to condemn the world, but to save the world through him\" - John 3:17\n','All about in me is random. @_@\nKaya ko mag 360 reverse fade away dunk sa half court.\nKaya kong ipasok sa labas ung electric fan.\nPresident, SingleSinceBirthClub(SSBC).\n\nI\'m a dedicated, hard working, full of strussle person.','\"Not just a evolution, but a revolution of an Individual into a God-centered Community.\"\n','hypeman11@yahoo.com; orais.cyruspaul@gmail.com',09065172426,'Summer Term, AY2010-2011'),(24,NULL,9,'Pabillore, Jonathan A.','Jon','2011-09-20','BS CS-ST','null','null','-','-','-','-','-','jonathanpabillore@gmail.com',00000000000,'Term 1 A.Y. 2011-2012'),(25,NULL,9,'Pangilinan, Rae Marvin A.','Rae','1989-11-18','BS-CS-CSE','Caloocan City','Notre Dame of Greater Manila','watching movies, road tripping, computer games, drawing, playing different kinds of sports, ','Leave those past behind but as we move Forward bring the lessons it has brought your life. \n\nAng sarap simulan ng panibagong araw lalo na kung natapos ang kahapon na nakangiti ka :)','1 Timothy 2:1\n\"First of all, then, I urge you to offer petitions, prayers, intercessions, and expressions of thanks for all people, for kings, and for everyone who has authority, so that we might lead a quiet and peaceful life with all godliness and dignity.\"','\"One text away\" :))\n\"im weird and im proud :>\"','something that gives me the possibilities of unfolding what lies ahead.','rae.pangilinan@delasalle.ph',09166494475,'Term 3 A.Y. 2011-2012'),(26,NULL,9,'Quinto, Jarren James','Jar/Tiger','1989-11-07','BS CS-ST','Mandaluyong City','Lourdes School of Mandaluyong','Playing soccer\nPlaying basketball\n\"magpaulan\"\nsleeping','God has never given up on me, why should I give up on myself :D','Not only so, but we also rejoice in our sufferings, because we know that suffering produces perseverance; perseverance, character; and character hope. And hope does not disappoint us, because God has poured out his love into our heats by the Holy Spirit, whom he has given us (Rom 5: 3-5) ?','I like to program, alot.\nI\'m a shiftee from BS MTH-CAP\nI was born here, but raised at Singapore\nI can never be normal, always weird :D','a group of people where through faith and time, they will become more than a group. They\'ve become, a FAMILY','jarren.quinto@delasalle.ph',09275254174,'Term 1 A.Y. 2011-2012'),(27,NULL,9,'Teng, Grizelda','Zel','1991-11-07','Bachelor of Science in Computer Science with Specializations in Software Technology','Taguig','Chiang Kai Shek College Manila','Listening to music;\nWatching series/movies;\nHanging out with friends','?Love wins. Love always wins.?\n- Tuesdays with Morrie by Mitch Albom','Romans 5:3-5','I have weird arms. My attention span is short. I am a random person.','Formdev is the reason why I love college.','zel_teng@yahoo.com',09274775556,'Term 1 A.Y. 2011-2012'),(28,NULL,9,'Ylaya, Paolo Dominic H.','Mikey','1992-01-15','BS CS-ST','Las Pinas','Ateneo de Manila HS','playing tennis, basketball, badminton, playing the guitar, singing, dancing, beatboxing, drawing..','If at first you don\'t succeed, quality is the best policy..','\"Remain in me, as I remain in you. Just as a branch cannot bear fruit on its own unless it remains on the vine, so neither can you unless you remain in me.\"\n\nJohn 15:4','Ako ay may lobo...','like magic. It comes from within... :>','mikels233@gmail.com',09277590284,'Term 1 A.Y. 2011-2012'),(29,NULL,10.1,'Barrios, Ma. Katrina Carmela T.','KC','1991-07-16','CS-IST','Roxas City, Capiz','Capiz National High School - Special Science & Technology Class','Movies, music, food, cars, shopping, dancing','A man has only one lifetime, but history can remember him forever.','Psalm 91: 9 \n\n\"You have the Lord for your refuge; you have made the Most High your stronghold.\"','I will NEVER eat vegetables. :D','the backbone of my spiritual being.','kcbarrios@gmail.com',09177009098,'Term 3 A.Y. 2011-2012'),(30,NULL,10.1,'Iba?ez Jr., John Francis I.','John Boy','1991-01-14','BSCS-ST','Taguig','Immaculate Heart of Mary College','Tinkering Computers, Playing Basketball, Badminton, and Computer Games, Watching Movies','Our deepest fear is not that we are inadequate. Our deepest fear is that we are powerful beyond measure. It is our light, not our darkness that frightens us. We ask ourselves, who am I to be brilliant, gorgeous, talented, or fabulous? Actually, who are yo','John 1:14 - \"The Word became flesh and made his dwelling among us. We have seen his glory, the glory of the one and only Son, who came from the Father, full of grace and truth.\"','- I\'m random... :)\n- shy-type\n\nito talaga totally random... GWAPO! =))','Looooooooooooooooooove! :)','cloud_valentine14@yahoo.com',09064208893,'Term 1 A.Y. 2011-2012'),(31,NULL,10.1,'Pi?era, Rene Rose Tan','Rene','1991-12-27','BS-CS-ST','Quezon City','School of the Holy Spirit of Quezon City','Photography, Music, Drawing, Internet, Aliens, Ghosts, Sci-Fi Stuff','Be the best that you can be.','Do not get drunk on wine, which leads to debauchery. Instead, be filled with the Spirit. Ephesians 5:18','I sleep with the lights on because I\'m afraid of the dark.','an avenue to meet and grow with people who follow Christ.','renepinera@yahoo.com',09272340323,'Term 1 A.Y. 2012-2013'),(32,NULL,10.1,'Tan Sim, Eric Russell C.','Eric','1992-09-19','CS-NE','San Juan','Philippine Institute of Quezon City','Read novels, bug people, ponder on things, and mostly stare at nothingness','The early bird gets the worm, but the second mouse gets the cheese.','The Lord is my shepherd, I shall not be in want. Psalm 23:1\n*I actually like the whole chapter','I have an irrational hatred towards bean sprouts (toge). They look dull, taste dull, everything dull. Blech!\n\nI like rainy days. I feel secluded and warm whenever I stare out the window, only hearing the drops of rain fall to earth. The dark gray sky give','God\'s vessel of light to be shared out to the world. :)','e_russell2004@yahoo.com.au',00000000000,'2013'),(33,NULL,10.2,'Abad, Dennis Michael','Den','1993-04-03','CS-ST','Cavite','Don Bosco Technical Institute - Makati','Football\nBasket ball\nVolley ball\nVideo Games\nPlaying the guitar','There is always a meaning to a failed love','Therefore, if anyone is in Christ, the new creation has come: The old has gone, the new is here!\n\n[2 Corinthians 5:17]','I can rely on my nose if someone I\'m very familiar with is near.\nI sing the \"abc\" backwards. (zyx?)','Home','dennis_abad6@yahoo.com',09266853983,'Term 1 A.Y. 2012-2013'),(34,NULL,10.2,'Ablaza, Raus Kenneth','Ken','1992-11-07','CS - IST','Cavite','St. Andrew\'s School','- programming (though i\'m not that good at it, nerd -_-)\n- singing (yeah! :D)\n- doing random stuffs @_@','No crying over spilled milk..','So faith, hope, love remain, these three; but the greatest of these is love.\n\n-1 Corinthians 13:13','I am an OC (Obsessive-Compulsive) type of person.','a spice added to my life. :D','rauskenneth07@yahoo.com',09156015506,'Term 3 A.Y. 2012 - 2013'),(35,NULL,10.2,'Bo?on, Michael Louie','Michael','1993-01-15','Bachelor of Science in Computer Science with Specialization in Software Technology','Las Pi?as City','Don Carlo Cavina School','Video Gaming\nSprinting\nUltimate (sport)\nDrawing\nInterested in Chemistry and History\nPhoto Editing\nEating ;)\nListening to music','God deserves our best!','For to me, living means living for Christ, and dying is even better.\n? Philippians 1:21 (NLT)','I mix art with what I do.','FORMDEV is where I can know more about Christ, and make Him known to other people.','michael.bonon@gmail.com',09052309008,'Term 2 A.Y. 2012-2013'),(36,NULL,10.2,'Del Barrio, Jannah Therese','Jannah/Chana','1993-01-22','BS CS-ST','Bacoor, Cavite','Manila Science High School','eating lots of food =P~ \nfacebook-ing :)\n','?\"The uncertainties of the present always give way to the enchanted possibilities of the future\" -Gelsey Kirkland','Isaiah 41:10 \"fear not, for I am with you; be not dismayed, for I am your God; I will strengthen you, I will help you, I will uphold you with my righteous right hand.\"','i don\'t like bananas :P\nnatural yung pagcurl ng eyelashes ko :)','FORMDEV made me realize another side of life: the brighter one with God <3<3<3','jannahdb@gmail.com',09178370122,'Term 1 A.Y. 2012-2013'),(37,NULL,10.2,'Magdaong, Christian Kay Beltran','Tiano','1992-12-16','BS CS-NE','Daraga, Albay','Bicol University-High School','Watching Korean Series\nWatching Anime Series\nReading Manga\nDoing random computer stuff','Don\'t say, \"That\'s the way I am- it\'s my character \". It\'s your lack of character. Esto vir!- Be a man!','1 John 4:19 We love Him because HE first loved us.','Proud Bicolano!!','a new form of rest.','tiano_uragon@yahoo.com',09053347567,'Term 3 A.Y. 2012- 2013'),(38,NULL,10.2,'Musni, Charo Marie ','Chai','1993-03-20','BS CS-ST','Tabaco City, Albay','Tabaco National High School','Reading, Writing, Watching Series','Happiness is  a conscious choice, not an automatic response.','Hebrews 11:1 \"Now faith is being sure of what you hope for and  certain of what is unseen.\"','I only learned to eat red meat during my college sophomore year.\nI don\'t have double eye lids.\nI\'m from Bicol but i have never tasted Bicol express in my entire life.','God\'s love manifested in family.','i_am_chai93@yahoo.com.ph',09052309473,'Term 1 A.Y. 2012-2013'),(39,NULL,10.2,'Villena, Kedren Obinque','Ked','1993-01-06','BS-CS-ST','Muntinlupa','Southville International School and Colleges','Playing Computer Games, playing the guitar, sleeping.','Give your best and God will do the rest.','Matthew 6:33\n\"But seek first his kingdom and his righteousness, and all these things will be given to you as well.\"','random :)','a family composed of different people that all responded to God\'s call.','kedren_villena@yahoo.com',09065869247,'2012'),(40,NULL,10.2,'Yu, Sherie','Sherie','1990-06-15','MSCS ST','Philippines','Philippine Cultural College','Reading\nProgramming\nWatching anime\nPlaying piano','Experience is not what happens to you; it is what you do with what happens to you. - Aldous Huxley','I can do all thing through Christ who gives me strength. - Philippians 4:16','I love cheese. \nMy all time favorite anime is Fullmetal Alchemist Brotherhood.\nI don\'t like mayonnaise and the bun of siopao.','Awesome!!','sherie_yu@yahoo.com',09052306184,'Term 3 A.Y. 2011-2012'),(41,NULL,10.3,'Ang, Karen','Karen','1990-09-03','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','QC','Uno High School','watching series, traveling, adventure, art','Smile.:)','Matthew 6-21: For where your treasure is, there your heart will be also.','I like to be an architect.\nI like to travel and also experience snow.\nI like to learn how to play the drums, guitar and piano.\nI want to learn play tennis.\nI have a pet fish.','a place to get to know God more.','karenang0903@yahoo.com',09178988928,'2012'),(42,NULL,10.3,'Aragoncillo, Jose Gian Carlo','Carlo','2011-08-09','BS CS-NE','Las Pinas','Don Bosco Technical College - Mandaluyong','Singing, computer games, hanging out with friends, FEAST(praise and worship), reading books/novels','There is no such thing as a problem without a Divine gift hidden within it. You have these problems because you need the gifts they carry within.','John 3:30 \"He must become greater; I must become less.\"','I can sing well only if I\'m singing praise songs. :P I guess God gave me this voice so I could worship Him. :) \n\nI know how to swim but I don\'t want to because of trauma. :|','FORMDEV for me is where I was born again as God\'s child. The FORMDEV community helped me to grow to who I am now. FORMDEV made me realize how everything can be close to perfect when I serve God.','aragoncillocarlo@yahoo.com',09172473038,'Term 3 A.Y. 2012-2013'),(43,NULL,10.3,'Cantos, Sherlo Yvan Leyco','Sherlo','1992-04-07','BS-CSST','Batangas City, Batangas','Saint Bridget College','-Listening to Music\n-Playing the Ukulele\n-Watching Movies\n-Cooking :)\n-Photography\n-Hanging out with friends','\"It is better to have bad breath than no breath at all\"\n-Humans are not perfect, but imperfection should not hinder us in living our life.','There is an appointed time for everything.  And there is a time for every event under heaven. A time to give birth, and a time to die; A time to plant, and a time to uproot what is planted. A time to kill, and a time to heal; A time to tear down, and a time to build up.  A time to weep, and a time to laugh; A time to mourn, and a time to dance.  A time to throw stones, and a time to gather stones; A time to embrace, and a time to shun embracing.  A time to search, and a time to give up as lost; A time to keep, and a time to throw away. A time to tear apart, and a time to sew together; A time to be silent, and a time to speak. A time to love, and a time to hate; A time for war, and a time for peace.','-i like sleeping on the floor\n-i collect shoes.\n-i like plain shirts.','God\'s gift in leading students to the right path.','yvan_cantos@yahoo.com.ph',09064391129,'Term 1 A.Y. 2012-2013 '),(44,NULL,10.3,'De Jesus, Marion Rafael D.','Ion','1991-09-08','BS CS-ST','3 Guilder St. Meralco Village, Taytay, Rizal','La Salle Green Hills','Soccer, Volleyball, piano, games, Fun/Marathon Runs','Live life to the fullest with no regrets','matthew 6: 19-21 ','avid gamer who finds a way to complete a game to 100% as much as possible. willing to accept any challenge in any game','family connected by faith in god and by the teachings of saint la salle. a one big family','mr_dr_dj@yahoo.com',09053407355,'Term 1  A.Y. 2012-2013'),(45,NULL,10.3,'Dela Cruz, Shannen Rose Bernardo','Sheng','1993-07-25','BS CS ST','Manila','Manila Cathedral School','Sketching, Drawing,  Reading Books, Playing Computer Games, Bonding with Friends, Family and Most of all, God','It\'s better to taste the bitterness of education that to taste the hardships of ignorance.','Corinthians 16:14 Do everything with love.','I like girls','FUN! and at the same time it helps my spiritual growth','shannenrose.delacruz@yahoo.com',09052964778,'Term 1 A.Y. 2012-2013'),(46,NULL,10.3,'Duka, Ivanhur','Ivan / Cholo','1992-08-02','BSCS-CSE','Manila','Paco Citizen Academy','reading manga, watching TV series, playing badminton, hanging out in the mall, eating a lot, surfing the net','It\'s gonna be ok in the end. If it\'s not ok, then it\'s not yet the end.','Acts 20:35 \"There is more happiness in giving than in receiving.\"','OC and vain','FORMDEV made me a true servant of God.','vanhur08021992@yahoo.com',09227538401,'2012'),(47,NULL,10.3,'Garcia, Jann','Jann','1992-10-17','BS CS-ST','Puerto Princesa City, Palawan','Palawan Hope Christian School','Badminton, reading, soccer, gaming, chess, biking, and going out.','Let us not live to regret, but live life to the fullest.','John 4:13 ','I\'m random. lol','A home that helps me grow further in spirit. :)','janngg56@yahoo.com',00000000000,'Term 3 A.Y. 2013-2014'),(48,NULL,10.3,'Iglesia, Kyla','Kyla','1992-06-10','Bachelor of Science in Computer Science with Specialization in Software Technology','Paranaque','Assumption College','Drawing, singing, crafts, music (my top two favorite bands: Paramore and Anberlin)','Strive for excellence, not perfection.','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. - John 3:16','I prefer eating fruits and veggies than junk food.\nI want to give God a hug, if it were possible.\nI always wanted to learn how to play the guitar, dance, do photography, and learn how to bake.\nSadly, whenever I bake, the cookies I make end up either deadl','A place to grow in God\'s love','kyla_iglesia234@yahoo.com',09158752406,'Term 1 A.Y. 2012-2013'),(49,NULL,10.3,'Jacinto, Daniel Joseph M.','DanJo','1992-06-18','Bachelor of Science degree in Computer Science with Specialization in Software Technology','Bi?an, Laguna','Caritas Don Bosco School','Studying at times,\nWatching Anime, sometimes movies,\nPlaying video games\nPlaying guitar\nFixing stuffs\nCycling around the neighborhood\nAnd many more :D','Those who do nothing make no mistakes. ','Remain united to me and I will remain united to you. A branch cannot bear fruit by itself; it can do only so if it remains in the vine. In the same way you cannot bear fruit unless your remain in me. (John 15:4)\n','I\'m striving in getting better in everything I do','a way to show how God changed our life, actions, and words by His unselfish and amazing love.','jacinto_dj18@yahoo.com',09228219248,'Term 1 A.Y. 2012-2013'),(50,NULL,10.3,'Lim, Patricia Anne','Pat','1992-11-29','BS CS-IST','Muntinlupa City','San Beda College Alabang','Surfing the Net, Reading books, Reading Blogs, Watching TV Series, Playing Flash games','Good things come to those who wait or \"No one can make you feel inferior without your consent\"','Be strong and courageous, do not be terrified, do not be discouraged for the Lord God is with you wherever you go - Joshua 1:9','People usually do not take me seriously because I am very bubbly. I\'m always laughing and I talk like I swallowed a loudspeaker.','God\'s way of making me understand and love Him more :)','tisha1129@yahoo.com',09266337323,'Term 3 A.Y. 2012-2013'),(51,NULL,10.3,'Ranoa, Michael Regnar J.','Reggy','2010-07-16','BS-CS IST','Pasig City','Lourdes School of Mandaluyong','Basketball, Sleeping, Doodle. :)','You can always give without love but you can\'t love without giving.','John 3:16 Luke 1: 3-4','Sabaw, Epal','Spiritual group that will help me a better person. :)','reggy_rulz029@yahoo.com',09163399086,'Term 3 A.Y. 2012-2013'),(52,NULL,10.3,'Yeung, Mary Czarinelle F.','Mary, Czari','1992-04-22','Bachelor of Science in Computer Science with Specializations in Software Technology','Binondo, Manila','Chiang Kai Shek College Manila','Art in general\nplaying the guitar\ndrawing\nreading books\nlistening to music\neating\nsleeping\nplaying volleyball\nblogging\npeople watching','Sing like no one\'s listening, love like you\'ve never been hurt, dance like nobody\'s watching, and live like its heaven on earth. -Mark Twain','For you know that when your faith is tested, your endurance has a chance to grow. -James 1:3\n\nI know the Lord is always with me. I will not be shaken for He is right beside me. -Psalm 16:8\n\nI can do all things through Christ who strengthens me. -Philippians 4:13','I can remember the most random and insignificant events that has happened in my life.\n\nPeople tell me that I look like a cat, an apple, a butchi, and a siopao. I am absolutely confused.','FORMDEV is a haven in the heartless world of CCS. ?','czarinelleyeung@yahoo.com',09229198893,'Term 1 A.Y. 2012-2013'),(53,NULL,11.1,'Almonguera, Janet','Janet','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(54,NULL,11.1,'Arlanza, Michael Angelo','Mikko','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(55,NULL,11.1,'Avecilla, Joshua','Joshua','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(56,NULL,11.1,'Cagampan, Bernadyn Reyes','Berna','1993-05-02','BS CS-ST','Manila','Manila Science High School','-','-','-','-','-','dyn.reyes@gmail.com',09153228398,'A.Y. 2013-2014 Term 1'),(57,NULL,11.1,'Cruz, Owen','Owen','2011-09-20','','','','-','-','-','-','-','-',00000000000,'-'),(58,NULL,11.1,'Kua, Edmon','Mon','2011-09-20','','','','-','-','-','-','-','-',00000000000,'-'),(59,NULL,11.1,'Lim, Chryzel','Chry','1990-07-24','BS CS-ST','Manila','Philadelphia High School','-','-','Matthew 21:22\n\nIf you believe you will receive whatever you ask for in prayer','-','-','chryzel_jane@yahoo.com',00000000000,'A.Y. 2012-2013 Term 1'),(60,NULL,11.1,'Magpayo, Erika Rhine','Erika','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(61,NULL,11.1,'Mahinay, Joy Luville','Joy','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(62,NULL,11.1,'Uy, Kyrstyn Kaizale','Kyrstyn','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(63,NULL,11.1,'Villafuerte, Celine','Celine','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(64,NULL,11.1,'Villareal, Czarnin Harris','Czar','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facis`
--

DROP TABLE IF EXISTS `facis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facis`
--

LOCK TABLES `facis` WRITE;
/*!40000 ALTER TABLE `facis` DISABLE KEYS */;
INSERT INTO `facis` VALUES (1,NULL,'Raymund','Sison'),(2,NULL,'Magpantay','Lisa'),(3,NULL,'Pablo','Zelinna'),(4,NULL,'Ruiz','Marivic'),(5,NULL,'Cruz','Merlin'),(6,NULL,'Legaspi','Owen'),(7,NULL,'Ong','Ethel'),(8,NULL,'Inventado','Paul'),(9,NULL,'Cabredo','Rafael'),(10,NULL,'Campos','Karlo'),(11,NULL,'Centeno','Rowena'),(12,NULL,'Trogo','Rhia'),(13,NULL,'Fontanilla','Gil'),(14,NULL,'Legaspi','Roberto'),(15,NULL,'Lim','Nathalie'),(16,NULL,'Ona','Sherwin'),(17,NULL,'Reyes','Ronald'),(18,NULL,'Sta. Maria','Virginia'),(19,NULL,'Tan','Michelle Wendy'),(20,NULL,'Abola','Jeremiah'),(21,NULL,'Alejo','Joey'),(22,NULL,'Castanares','Patrick'),(23,NULL,'Figueroa','Jan Arman'),(24,NULL,'Gamboa','Paolo'),(25,NULL,'Guitierrez','Rechelda'),(26,NULL,'Hojilla','Cecilio FSC'),(27,NULL,'Mein','Paul'),(28,NULL,'Nomorosa','Karen'),(29,NULL,'Wong','Wilkins'),(30,NULL,'Ap-apid','Rigan'),(31,NULL,'Bacong','Jane'),(32,NULL,'Bartolome','Jose Ronello'),(33,NULL,'Cu','Greg'),(34,NULL,'Hontiveros','Brian'),(35,NULL,'Moreno','Mary Anne'),(36,NULL,'Pantola','Alexis'),(37,NULL,'Roxas','Rachel'),(38,NULL,'Tangkeko','Marivic'),(39,NULL,'Wong','Jocelynn'),(40,NULL,'Abatayo','Ana Krista'),(41,NULL,'Abrogena','Aldrich'),(42,NULL,'Aguinaldo','Alvin Rey'),(43,NULL,'Alimario','Paul'),(44,NULL,'Almazar','Ivan'),(45,NULL,'Alvarez','Deric'),(46,NULL,'Basa','Benedict'),(47,NULL,'Bayle','Anna Maria Czarina'),(48,NULL,'Castro','Catherine'),(49,NULL,'Chua','Yap'),(50,NULL,'Cordova','Cheryl'),(51,NULL,'Cue','Karl'),(52,NULL,'Guzman','Christian'),(53,NULL,'De Leon','Precious'),(54,NULL,'Dumadapat','Richard'),(55,NULL,'Espiritu','Ralph Alvin'),(56,NULL,'Gabion','Paul'),(57,NULL,'Go','Louie'),(58,NULL,'Hackh','Bernard'),(59,NULL,'Lao','Chrislynn'),(60,NULL,'Mesina','Franco'),(61,NULL,'Niesta','Mark'),(62,NULL,'Ong','Karen'),(63,NULL,'Paz','Edaine'),(64,NULL,'Pendoza','Penpen'),(65,NULL,'Pelobello','Norvega'),(66,NULL,'Potenciano','Gladys'),(67,NULL,'Ragos Ty','Desmond'),(68,NULL,'Ramos','Alden'),(69,NULL,'Ramos','Sally'),(70,NULL,'Regis','Frances'),(71,NULL,'Reyes','Angelo'),(72,NULL,'Roque','Federico III'),(73,NULL,'Saw','Cindy'),(74,NULL,'Sia','Michael'),(75,NULL,'Tan','Howard'),(76,NULL,'Tan','Oliver'),(77,NULL,'Teng','Adrian'),(78,NULL,'Tolentino','Janine'),(79,NULL,'Turiana','Mae'),(80,NULL,'Reyes','Lolita'),(81,NULL,'Segubre','Charles'),(82,'123','123','123');
/*!40000 ALTER TABLE `facis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faci_batch`
--

DROP TABLE IF EXISTS `faci_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faci_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faciid` int(11) DEFAULT NULL,
  `batchid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faci_batch`
--

LOCK TABLES `faci_batch` WRITE;
/*!40000 ALTER TABLE `faci_batch` DISABLE KEYS */;
INSERT INTO `faci_batch` VALUES (1,1,1),(2,2,2),(3,3,2),(4,4,1),(5,5,3),(6,6,3),(7,7,3),(8,8,4),(9,13,1),(10,14,1),(11,15,1),(12,16,1),(13,17,1),(14,18,1),(15,19,1),(16,20,2),(17,21,2),(18,22,2),(19,23,2),(20,24,2),(21,25,2),(22,26,2),(23,27,2),(24,28,2),(25,29,2),(26,30,3),(27,31,3),(28,32,3),(29,33,3),(30,34,3),(31,35,3),(32,36,3),(33,37,3),(34,38,3),(35,39,3),(36,40,4),(37,41,4),(38,42,4),(39,43,4),(40,44,4),(41,45,4),(42,46,4),(43,47,4),(44,48,4),(45,49,4),(46,50,4),(47,51,4),(48,52,4),(49,53,4),(50,54,4),(51,55,4),(52,56,4),(53,57,4),(54,58,4),(55,59,4),(56,60,4),(57,61,4),(58,62,4),(59,63,4),(60,64,4),(61,65,4),(62,66,4),(63,67,4),(64,68,4),(65,69,4),(66,70,4),(67,71,4),(68,72,4),(69,73,4),(70,74,4),(71,75,4),(72,76,4),(73,77,4),(74,78,4),(75,79,4),(76,80,3),(77,81,4),(78,82,6);
/*!40000 ALTER TABLE `faci_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_roles_perms`
--

DROP TABLE IF EXISTS `acl_roles_perms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_roles_perms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idrole` int(11) NOT NULL,
  `idperm` int(11) NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idrole_UNIQUE` (`idrole`),
  UNIQUE KEY `idperm_UNIQUE` (`idperm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_roles_perms`
--

LOCK TABLES `acl_roles_perms` WRITE;
/*!40000 ALTER TABLE `acl_roles_perms` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_roles_perms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('839c6d41def995b667503277ca73b651','127.0.0.1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53',1316607890,'a:6:{s:6:\"iduser\";s:1:\"1\";s:8:\"username\";s:7:\"formdev\";s:9:\"firstname\";s:7:\"FORMDEV\";s:8:\"lastname\";s:7:\"FORMDEV\";s:17:\"upload_permission\";b:1;s:12:\"is_logged_in\";b:1;}');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `idstudent` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `finalgrade` varchar(45) DEFAULT NULL,
  `idClass` int(11) NOT NULL,
  PRIMARY KEY (`idstudent`,`idClass`),
  KEY `FK_student_1` (`idClass`),
  CONSTRAINT `FK_student_1` FOREIGN KEY (`idClass`) REFERENCES `class` (`idclass`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `idphoto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idalbum` int(10) unsigned NOT NULL,
  `iduser` int(10) unsigned NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `url` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idphoto`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (2,1,1,'2','IMG_1891.JPG','2011-12-12 00:07:00'),(3,1,1,'3','IMG_1892.JPG','2011-12-12 00:07:00'),(5,1,1,'5','IMG_1894.JPG','2011-12-12 00:07:00'),(8,1,1,'hello kitty!:)','IMG_1906.JPG','2011-12-12 12:03:00'),(9,1,1,'','IMG_1907.JPG','2011-12-12 12:03:00'),(10,1,1,'','IMG_1908.JPG','2011-12-12 12:03:00'),(11,1,1,'my collections:)','IMG_1913.JPG','2011-12-12 12:03:00'),(13,1,1,'dale!','IMG_1915.JPG','2011-12-12 12:03:00');
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_user_perms`
--

DROP TABLE IF EXISTS `acl_user_perms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_user_perms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idperm` int(11) NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_user_perms`
--

LOCK TABLES `acl_user_perms` WRITE;
/*!40000 ALTER TABLE `acl_user_perms` DISABLE KEYS */;
INSERT INTO `acl_user_perms` VALUES (1,1,1,1,'2011-11-02 21:55:48'),(2,1,2,1,'2011-11-02 21:55:48'),(11,1,3,1,'2011-11-02 21:55:48'),(12,1,4,1,'2011-11-02 21:55:48'),(13,1,5,1,'2011-11-02 21:55:48'),(14,1,6,1,'2011-11-02 21:55:48'),(15,1,7,1,'2011-11-02 21:55:48'),(16,1,8,1,'2011-11-02 21:55:48'),(17,1,9,1,'2011-11-02 21:55:48'),(18,1,10,1,'2011-11-02 21:55:48'),(19,1,11,1,'2011-12-13 01:01:01'),(20,1,12,1,'2011-12-13 01:01:01'),(21,1,13,1,'2011-12-13 01:01:01');
/*!40000 ALTER TABLE `acl_user_perms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workbook`
--

DROP TABLE IF EXISTS `workbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workbook` (
  `idworkbook` int(11) NOT NULL,
  `idstudent` int(11) DEFAULT NULL,
  `ch1` int(11) DEFAULT NULL,
  `ch2` int(11) DEFAULT NULL,
  `ch3` int(11) DEFAULT NULL,
  `ch4` int(11) DEFAULT NULL,
  `ch5` int(11) DEFAULT NULL,
  `ch6` int(11) DEFAULT NULL,
  `ch7` int(11) DEFAULT NULL,
  `ch8` int(11) DEFAULT NULL,
  `finals` int(11) DEFAULT NULL,
  PRIMARY KEY (`idworkbook`),
  KEY `FK_workbook_1` (`idstudent`),
  CONSTRAINT `FK_workbook_1` FOREIGN KEY (`idstudent`) REFERENCES `student` (`idstudent`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workbook`
--

LOCK TABLES `workbook` WRITE;
/*!40000 ALTER TABLE `workbook` DISABLE KEYS */;
/*!40000 ALTER TABLE `workbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_label` varchar(45) DEFAULT NULL,
  `batchnumber` int(11) DEFAULT NULL,
  `startyear` int(11) DEFAULT NULL,
  `endyear` int(11) DEFAULT NULL,
  `batch_label` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batches`
--

LOCK TABLES `batches` WRITE;
/*!40000 ALTER TABLE `batches` DISABLE KEYS */;
INSERT INTO `batches` VALUES (1,'SY',1,1999,2001,'CLP'),(2,'SY',1,2001,2002,'FORMDEV'),(3,'SY',2,2002,2003,'FORMDEV'),(4,'SY',3,2003,2004,'FORMDEV'),(5,'SY',4,2004,2005,'FORMDEV'),(6,'123',123,123,123,'123');
/*!40000 ALTER TABLE `batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES ('865fa0b83db404db25c3b44fba4688cf','127.0.0.1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53',1332053215,NULL),('bc493092b5828dd0801e7e354d60483c','127.0.0.1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53',1332270936,NULL);
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `previousfaci`
--

DROP TABLE IF EXISTS `previousfaci`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `previousfaci` (
  `idpreviousfaci` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idfaci` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpreviousfaci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `previousfaci`
--

LOCK TABLES `previousfaci` WRITE;
/*!40000 ALTER TABLE `previousfaci` DISABLE KEYS */;
/*!40000 ALTER TABLE `previousfaci` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'formdev','41b764d2ad52147c4c7dbd3a8b5afa2b','formdev@gmail.com','FORMDEV',''),(2,'gemiablaza','7d1c0a88bd5e99ca0935989b83276cda','gemi@gemi.co','Gemi','Ablaza'),(3,'niknokseyer','210ec41c67f1dcd7f578c0d0332202cf','niknokseyer@gmail.com','Nikko','Reyes'),(7,'sherie.yu','699990a62334f6867f7cb4bec91ffe30','sherie.yu@gmail.com','Sherie','Yu'),(8,'niknok','b85e5fb13ce9791a65542dbf6934c6b3','test@test.com','niknok','seyer');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `idfile` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `label` varchar(200) DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `access` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfile`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (1,1,'FORMDEV Class Plantilla','http://localhost/formdev/downloads/','FORMDEV - Plantilla (Class) - SY 10-11 Term 3.doc','0000-00-00 00:00:00',2),(2,1,'Guidelines - Bible Study Leaders','http://localhost/formdev/downloads/','FORMDEV - Guidelines - Bible Study Leaders.doc','2011-09-27 20:53:43',1),(3,1,'Workbook Faci Guide','http://localhost/formdev/downloads/','FORMDEV - Workbook Faci Guide.pdf','2011-09-27 20:56:12',1);
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idimages`),
  KEY `FK_images_1` (`iduser`),
  CONSTRAINT `FK_images_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_perms`
--

DROP TABLE IF EXISTS `acl_perms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_perms` (
  `idperm` int(11) NOT NULL AUTO_INCREMENT,
  `perm_key` varchar(45) DEFAULT NULL,
  `perm_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idperm`),
  UNIQUE KEY `perm_key_UNIQUE` (`perm_key`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_perms`
--

LOCK TABLES `acl_perms` WRITE;
/*!40000 ALTER TABLE `acl_perms` DISABLE KEYS */;
INSERT INTO `acl_perms` VALUES (1,'pk_home_update','update home'),(2,'pk_about_update','update about'),(3,'pk_reflections_add','add reflection'),(4,'pk_reflections_update','update reflection'),(5,'pk_reflections_delete','delete reflection'),(6,'pk_announcements_add','add announcement'),(7,'pk_announcements_update','update announcement'),(8,'pk_announcements_delete','delete announcement'),(9,'pk_gallery','manage gallery'),(10,'pk_files','manage files'),(11,'pk_verse_edit','edit verse'),(12,'pk_verse_add','add verse'),(13,'pk_verse_setVW','manage the verse of the week');
/*!40000 ALTER TABLE `acl_perms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `idalbum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` int(10) unsigned NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idalbum`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,1,'My first album','testing the gallery','2011-12-12 00:07:00');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement` (
  `idannouncement` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `content` text,
  `datetime` datetime DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`idannouncement`),
  KEY `FK_user` (`iduser`),
  CONSTRAINT `FK_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement`
--

LOCK TABLES `announcement` WRITE;
/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
INSERT INTO `announcement` VALUES (2,1,'lost again','at a loss on what to write','2011-09-22 08:18:06','The Very First'),(3,1,'...','Yeeeey','2011-09-22 08:18:37','My Second Announcement'),(4,1,'still don\'t know what the role is for','I hereby declare world peace!','2011-09-22 08:22:40','My Third Announcement'),(5,1,'Role','Content','2011-09-22 12:35:33','Title'),(6,1,'Role','Content','2011-09-22 12:35:40','Title'),(7,1,'Kung anu man','Aww it\'s not working :(','2011-11-07 15:00:01','TinyMCE is Working!'),(8,1,'Role','0','2011-11-07 15:21:56','Part Two');
/*!40000 ALTER TABLE `announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `idattendance` int(11) NOT NULL,
  `idstudent` int(11) DEFAULT NULL,
  `orient` int(11) DEFAULT NULL,
  `intro` int(11) DEFAULT NULL,
  `ch1` int(11) DEFAULT NULL,
  `ch2` int(11) DEFAULT NULL,
  `ch3` int(11) DEFAULT NULL,
  `ch4` int(11) DEFAULT NULL,
  `ch5` int(11) DEFAULT NULL,
  `ch6` int(11) DEFAULT NULL,
  `ch7` int(11) DEFAULT NULL,
  `ch8` int(11) DEFAULT NULL,
  `brother` int(11) DEFAULT NULL,
  `outreach` int(11) DEFAULT NULL,
  `finals` int(11) DEFAULT NULL,
  PRIMARY KEY (`idattendance`),
  KEY `FK_attendance_1` (`idstudent`),
  CONSTRAINT `FK_attendance_1` FOREIGN KEY (`idstudent`) REFERENCES `student` (`idstudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reflection`
--

DROP TABLE IF EXISTS `reflection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reflection` (
  `idreflection` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idreflection`),
  KEY `FK_reflection_1` (`iduser`),
  CONSTRAINT `FK_reflection_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reflection`
--

LOCK TABLES `reflection` WRITE;
/*!40000 ALTER TABLE `reflection` DISABLE KEYS */;
INSERT INTO `reflection` VALUES (1,2,'Today marks a very powerful, very significant event in human history. If you’re a Christian, you would know what today is. And yes, I know there are some who aren’t, and who might get turned off by this entry, but I really still wish to share this message with my friends and acquaintances, so please bear with me.\r\n\nThere’s this narrative that I really like to share with people who are interested or who question why I believe in Jesus Christ. It’s not a catch all defense or anything, I just find the narrative really really beautiful, and for me, it answers the question of why I believe in Christ really well. If you don’t mind, I’d like to share that narrative too, or at least the first half of it. I hope this would have an effect on you, reader, even if only a tiny little bit.\r\n\n\r\n\nSee, the story begins with justice and love, but mostly just love.\r\n\n\r\n\nDuring the time of creation, God told Adam and Eve not to partake of the fruit of good or evil, or else they will die (Genesis 3:3). Going against the will of the Father is sin, and this statement in Genesis 3:3 sets the consequence of sin to be death (the Father’s will at that time was only for them not to eat of the fruit, going against that would warrant death). For those who know the continuation if this story, you would know that the consequence was put into effect when Adam and Eve partook of the fruit, after the temptation of the serpent. They were sentenced to die when their time on Earth is up and they were banished from the garden of Eden (and in effect, from the presence of God, as while they were in the garden, they enjoyed God’s presence freely).\r\n\n\r\n\nWhether this story is real or not, the point behind it is that the consequence of sin has been set to death, and not the physical kind of death, but the spiritual. Spiritual death means eternal separation from God (which, if you recall, happened to Adam and Eve when they were banished from the garden). Thus we see a demonstration of God being just to His word, and a precedent of sin being been set.\r\n\n\r\n\nNow, we are all sinners; at one point in time, we have committed a sin, big or small. God and sin cannot co-exist together though (since God is all-good) , so it follows that we must be separated from God, and are doomed to be so. But you know what? God, in His infinite love, still wanted us to be with Him, even if we were sinners. He wanted us to enjoy His presence, to enjoy a life with Him that is devoid of sadness and pain. He could’ve easily thrown us away, with no way for redemption. He is God after all, the creator of everything. But still, He loved us so much that He wanted us to be with Him. God wanted us to be reconciled once again with Him and to enjoy His loving presence.\r\n\n\r\n\nBut what was God to do? He already said that the consequence of sin is death (a spiritual kind of death, which means eternal separation from Him, not just physical death). And since He is just, He has to follow the rule that He set. So what now?\r\n\n\r\n\nWell, He made a way. And in doing so, He displayed His magnificent love for all of us.\r\n\n\r\n\nHe had His Son, who was one with Him, turn into a fashion of one like us. He had His Son take on the form of a sinner like us, frail and weak. He entered into human history; an unprecedented move of One who is beyond history. And when His time had come, He took His Son and had Him sacrificed. He carried a cross He didn’t have to carry, led to Calvary where He was to be crucified; an ordeal He didn’t have to go through. And on the sixth hour, with long thick nails affixing Him to the cross (a pain so severe, they had to invent the word “excruciating” just to define it), battered and broken, weak and humiliated, He breathed His last. The God of all creation, humiliated in front of sinful man, willingly dying in their hands for everyone to see.\r\n\n\r\n\nAnd as He underwent all this, He took on all our sins, and He died with them. He did this to pay for the penalty of sin, the penalty of all our sins. He did this so we, the undeserving sinner, would not have to suffer the penalty of sin. He suffered the consequences of our sin for us, dying and disconnecting Himself from the Father in our steed. In doing so He became the perfect sacrifice.\r\n\n\r\n\nAnd in doing so, He made a way. A way back to God. A way to be reconnected once again with God. A way to be with God once again. He didn’t have to do this, but he did so because He loved us so much.\r\n\n\r\n\nSo today, on Good Friday, let us remember this wonderful sacrifice He made on the cross. Let us take time from our busy schedules to thank Him for and to remember what He did for us on this day. And let us eagerly await His return, when He comes full circle, on Easter, when He demonstrated His glorious triumph over death, granting us access to eternal life with Him and the Father.\r\n\n\r\n\nAmen.','2007-08-30 20:55:48','Good Friday'),(2,2,'test','2007-08-30 20:55:48','test');
/*!40000 ALTER TABLE `reflection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_roles`
--

DROP TABLE IF EXISTS `acl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_roles` (
  `idrole` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(45) NOT NULL,
  PRIMARY KEY (`idrole`),
  UNIQUE KEY `role_name_UNIQUE` (`role_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_roles`
--

LOCK TABLES `acl_roles` WRITE;
/*!40000 ALTER TABLE `acl_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_types`
--

DROP TABLE IF EXISTS `article_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_types` (
  `idarticletype` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idarticletype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_types`
--

LOCK TABLES `article_types` WRITE;
/*!40000 ALTER TABLE `article_types` DISABLE KEYS */;
INSERT INTO `article_types` VALUES (1,'Reflections',''),(2,'Announcements',NULL),(3,'Home',NULL),(4,'About',NULL);
/*!40000 ALTER TABLE `article_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_user_roles`
--

DROP TABLE IF EXISTS `acl_user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_user_roles` (
  `iduser` int(11) NOT NULL,
  `idrole` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  UNIQUE KEY `iduser_UNIQUE` (`iduser`),
  UNIQUE KEY `idrole_UNIQUE` (`idrole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_user_roles`
--

LOCK TABLES `acl_user_roles` WRITE;
/*!40000 ALTER TABLE `acl_user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactnumber`
--

DROP TABLE IF EXISTS `contactnumber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactnumber` (
  `idcontactnumber` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `number` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcontactnumber`),
  KEY `FK_contactnumber_1` (`iduser`),
  CONSTRAINT `FK_contactnumber_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactnumber`
--

LOCK TABLES `contactnumber` WRITE;
/*!40000 ALTER TABLE `contactnumber` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactnumber` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verse_app`
--

DROP TABLE IF EXISTS `verse_app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verse_app` (
  `idverseapp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idverse` int(10) unsigned NOT NULL,
  `application` varchar(500) DEFAULT NULL,
  `isVW` tinyint(1) NOT NULL DEFAULT '0',
  `seton` datetime NOT NULL,
  PRIMARY KEY (`idverseapp`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verse_app`
--

LOCK TABLES `verse_app` WRITE;
/*!40000 ALTER TABLE `verse_app` DISABLE KEYS */;
INSERT INTO `verse_app` VALUES (3,2,'I want this.',0,'0000-00-00 00:00:00'),(4,3,'0',0,'0000-00-00 00:00:00'),(5,6,'hey test ito',0,'0000-00-00 00:00:00'),(6,8,NULL,0,'0000-00-00 00:00:00'),(13,5,'This is the current verse of the week.',0,'0000-00-00 00:00:00'),(14,1,'Pray for others not only for yourself.',1,'2011-12-16 14:04:00');
/*!40000 ALTER TABLE `verse_app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `idclass` int(11) NOT NULL,
  `academicyear` int(11) DEFAULT NULL,
  `term` int(11) DEFAULT NULL,
  `section` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idclass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verse`
--

DROP TABLE IF EXISTS `verse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verse` (
  `idverse` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `book` varchar(45) DEFAULT NULL,
  `chapter` varchar(45) DEFAULT NULL,
  `verse` varchar(45) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `faciapp` varchar(45) DEFAULT NULL,
  `idfaci` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idverse`),
  KEY `FK_verse_1` (`iduser`),
  CONSTRAINT `FK_verse_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verse`
--

LOCK TABLES `verse` WRITE;
/*!40000 ALTER TABLE `verse` DISABLE KEYS */;
INSERT INTO `verse` VALUES (1,2,'Psalm','10','17','You hear, O Lord, the desire of the afflicted; you encourage them, and you listen to their cry.','2011-12-08 00:00:00','Pray for others not only for yourself. :)',1),(2,2,'Romans','12','9','Don’t just pretend to love others. Really love them. Hate what is wrong. Hold tightly to what is good.','2007-08-30 20:55:48',NULL,2),(3,2,'Romans','12','17','Never pay back evil with more evil. Do things in such a way that everyone can see you are honorable. 18 Do all that you can to live in peace with everyone.','2007-08-30 20:55:48',NULL,3),(5,2,'Romans','2','18','Do all that you can to live in peace with everyone.','0000-00-00 00:00:00',':)',2),(6,2,'John','3','16','For God so loved the world that He gave His only Son that whoever who believes in Him shall not perish but have eternal life.','2011-04-26 04:03:28','memorable.',2);
/*!40000 ALTER TABLE `verse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `idrole` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `position` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`idrole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,1,'a'),(2,3,'3');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `datetime` datetime DEFAULT NULL,
  `idtype` int(11) DEFAULT NULL,
  `summary` text,
  `url_title` varchar(200) DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_title_UNIQUE` (`url_title`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 DELAY_KEY_WRITE=1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'Good Friday','<p>Today marks a very powerful, very significant event in human history. If you’re a Christian, you would know what today is. And yes, I know there are some who aren’t, and who might get turned off by this entry, but I really still wish to share this message with my friends and acquaintances, so please bear with me.</p><p>There’s this narrative that I really like to share with people who are interested or who question why I believe in Jesus Christ. It’s not a catch all defense or anything, I just find the narrative really really beautiful, and for me, it answers the question of why I believe in Christ really well. If you don’t mind, I’d like to share that narrative too, or at least the first half of it. I hope this would have an effect on you, reader, even if only a tiny little bit.</p><p>See, the story begins with justice and love, but mostly just love.</p><p>During the time of creation, God told Adam and Eve not to partake of the fruit of good or evil, or else they will die (Genesis 3:3). Going against the will of the Father is sin, and this statement in Genesis 3:3 sets the consequence of sin to be death (the Father’s will at that time was only for them not to eat of the fruit, going against that would warrant death). For those who know the continuation if this story, you would know that the consequence was put into effect when Adam and Eve partook of the fruit, after the temptation of the serpent. They were sentenced to die when their time on Earth is up and they were banished from the garden of Eden (and in effect, from the presence of God, as while they were in the garden, they enjoyed God’s presence freely).</p><p>Whether this story is real or not, the point behind it is that the consequence of sin has been set to death, and not the physical kind of death, but the spiritual. Spiritual death means eternal separation from God (which, if you recall, happened to Adam and Eve when they were banished from the garden). Thus we see a demonstration of God being just to His word, and a precedent of sin being been set.</p><p>Now, we are all sinners; at one point in time, we have committed a sin, big or small. God and sin cannot co-exist together though (since God is all-good) , so it follows that we must be separated from God, and are doomed to be so. But you know what? God, in His infinite love, still wanted us to be with Him, even if we were sinners. He wanted us to enjoy His presence, to enjoy a life with Him that is devoid of sadness and pain. He could’ve easily thrown us away, with no way for redemption. He is God after all, the creator of everything. But still, He loved us so much that He wanted us to be with Him. God wanted us to be reconciled once again with Him and to enjoy His loving presence.</p><p>But what was God to do? He already said that the consequence of sin is death (a spiritual kind of death, which means eternal separation from Him, not just physical death). And since He is just, He has to follow the rule that He set. So what now?</p><p>Well, He made a way. And in doing so, He displayed His magnificent love for all of us.</p><p>He had His Son, who was one with Him, turn into a fashion of one like us. He had His Son take on the form of a sinner like us, frail and weak. He entered into human history; an unprecedented move of One who is beyond history. And when His time had come, He took His Son and had Him sacrificed. He carried a cross He didn’t have to carry, led to Calvary where He was to be crucified; an ordeal He didn’t have to go through. And on the sixth hour, with long thick nails affixing Him to the cross (a pain so severe, they had to invent the word “excruciating” just to define it), battered and broken, weak and humiliated, He breathed His last. The God of all creation, humiliated in front of sinful man, willingly dying in their hands for everyone to see.</p><p>And as He underwent all this, He took on all our sins, and He died with them. He did this to pay for the penalty of sin, the penalty of all our sins. He did this so we, the undeserving sinner, would not have to suffer the penalty of sin. He suffered the consequences of our sin for us, dying and disconnecting Himself from the Father in our steed. In doing so He became the perfect sacrifice.</p><p>And in doing so, He made a way. A way back to God. A way to be reconnected once again with God. A way to be with God once again. He didn’t have to do this, but he did so because He loved us so much.</p><p>So today, on Good Friday, let us remember this wonderful sacrifice He made on the cross. Let us take time from our busy schedules to thank Him for and to remember what He did for us on this day. And let us eagerly await His return, when He comes full circle, on Easter, when He demonstrated His glorious triumph over death, granting us access to eternal life with Him and the Father.</p><p>Amen.</p>','2007-08-30 20:55:48',1,'<p>Today marks a very powerful, very significant event in human history. If you’re a Christian, you would know what today is. And yes, I know there are some who aren’t, and who might get turned off by this entry, but I really still wish to share this message with my friends and acquaintances, so please bear with me.</p>','good-friday','2007-08-30 20:55:48'),(2,1,'I\'m lost!','<p>I&rsquo;m lost!</p>\r\n\n<p>I&rsquo;m sure this may have happened to anyone. You are about to go somewhere but you don&rsquo;t have a map or anything to know if you are really going the right way. You have no idea where you are. Maybe panic will set in when you are feeling hopelessly lost. You can eventually go looking around and, maybe by some luck, get to your destination or meet someone that you can ask for directions.</p>\r\n\n<p>Sometimes life is like this. For me, everyday may be a struggle because even I myself feel that I am lost in my life. I am reminded by this because during our last bible study, someone asked what if you just relied on your own strengths and not on God. This may be applicable to one&rsquo;s life and it has made me think of what I may be doing with mine.</p>\r\n\n<p>Just as my story on being lost, we may rely solely on ourselves especially when we know we can do something about it without the help of anyone. We are proud of ourselves when everything that&rsquo;s happening around us is just fine but there will be a time when we did all that we could but we just can&rsquo;t make things right. We may ask help from people like our friends or family but even they cannot help us. As was discussed in our bible study, when there are trials or tasks that are seemingly impossible, only then would we rely on God. Someone in our bible study reasoned out that isn&rsquo;t all that we&rsquo;re doing is for God? But then, there are times when we do things and our minds are not set on God.</p>\r\n\n<p>For me, when I have my quiet time, I talk with God, usually, about my problems and when I don&rsquo;t really know what to do with them. When we are lost in our life, we may be feeling despair and think we cannot do anything, feeling utterly helpless. After talking with God about my problems, I feel an inner peace within me when I have trusted in him to help me carry my burdens and I don&rsquo;t forget to thank him for all he has done for me, even for the simple things like being able to look forward to a new day after a very hectic day, like for example yesterday or the past weeks.</p>\r\n\n<p>So just trust in God and let him be the light in the darkness that will guide you in your journey that is called life.</p>','2010-11-08 21:55:48',1,'<p>I&rsquo;m lost!</p>\r\n\n<p>I&rsquo;m sure this may have happened to anyone. You are about to go somewhere but you don&rsquo;t have a map or anything to know if you are really going the right way. You have no idea where you are. Maybe panic will set in when you are feeling hopelessly lost. You can eventually go looking around and, maybe by some luck, get to your destination or meet someone that you can ask for directions.','i\'m-lost!--1','2011-12-11 00:10:25'),(3,3,'I want to pray not I have to pray.','<p>Being Under Satan’s Yolk – This is one of the very few reasons why I always end up not studying, not reading, not programming or plainly not doing school works and most importantly, not being able to read the Bible and talk to God and pray. I am being under Satan’s yolk and as you’ve guessed it, being BUSY.</p><p>Fulfilling my tasks as God’s servant and everything that follows it is very tough. It came to a point that I have not been reading the Bible for a month or so, I guess. Yes, I have been praying but for me, there is a big difference in reading God’s word and reflecting on it afterwards. There are many instances that after a very long absence of the word of God then reading again, a certain verse or sometimes the whole passage just knows how to punch my heart and makes me say, “What did I do that held me not to read God’s word?” It really amazes me at times when even the smallest detail of the story or passage can actually hit me hard.</p><p>Praying is our way of communication with God. It is the only way we can talk to Him not like our friends where we can text, call and chat with them online, with God, we make the most intimate conversation. I still wonder why I can stand not talking to Him despite me being busy. At first, talking to Him was a great obligation or a duty. It was really a difficult shifting job but as time went by, I learned that prayer should be born out of passion and relationship and not an obligation or duty. It is an “I want to” versus “I have to”. I want to pray but not I have to pray.</p><p>We talk to our friends every day, get in touch with them, share experiences and get to have fun with them. Through all these, we learn to know each piece about them and most especially, we learn to listen to them because they know us well through the everyday exchange of conversations. Likewise, we can always do these to God and through these; we will not have a hard time listening to His voice and follow His will for us. There are times that we tend to be stubborn but like Jonah, the will of the Lord will forever be His will for us and it cannot be escaped.</p><p>Last thing I really miss in the absence of God’s word is also the absence of hope. The hope that the word of God brings is not the hope that we know but the assurance of the future—the assurance that He will always come and help us. In this present time of mine, I really need hope. I am now in the book of Hebrews and it was my returning book. After reading it, I suddenly felt relieved because of the said hope. The verse, “Since he himself has gone through suffering and testing, he is able to help us when we are being tested. (Heb 2:18)” just showed hope that He is ABLE to help us.</p><p>All these can be experienced when reading the word of God. There are still many things that are to be learned from reading but the most important thing is never neglecting this opportunity for us to pray and to talk to God. It may be a tough job at first but as time goes by, it will be tougher to get through life without reading His word.</p>','2010-11-02 21:55:48',1,'<p>Being Under Satan’s Yolk – This is one of the very few reasons why I always end up not studying, not reading, not programming or plainly not doing school works and most importantly, not being able to read the Bible and talk to God and pray. I am being under Satan’s yolk and as you’ve guessed it, being BUSY.</p>','i-want-to-pray-not-i-have-to-pray','2010-11-02 21:55:48'),(4,1,'About','<h2>\r\n\n	FORMDEV Mission</h2>\r\n\n<p>\r\n\n	The College of Computer Studies (CCS) has a special program and community called FORMDEV (Formation and Development), the mission of which is to proclaim and demonstrate the Lasallian and Gospel values of <strong>faith</strong>, <strong>zeal</strong>, and <strong>love</strong>, especially for one&#39;s <strong>community</strong> and for the <strong>poor</strong>.</p>\r\n\n<p>\r\n\n	A major component of the FORMDEV program is a 0.5-unit course, also called FORMDEV, offered to CCS freshmen. The goal of the FORMDEV course is two-pronged:</p>\r\n\n<ul>\r\n\n	<li>\r\n\n		<p>\r\n\n			To introduce CCS freshmen to the life and values of the Founder of the Brothers of the Christian Schools, St. John Baptist de la Salle; and</p>\r\n\n	</li>\r\n\n	<li>\r\n\n		<p>\r\n\n			To assist them in relating the life and values of St. La Salle to the life of Jesus and the values of God&rsquo;s Kingdom, and to their own lives, values, and dreams.</p>\r\n\n	</li>\r\n\n</ul>\r\n\n<h2>\r\n\n	History</h2>\r\n\n<p>\r\n\n	FORMDEV began, by God&rsquo;s grace, as the &quot;CLP&quot; group in SY 1999-2000. The group&rsquo;s objective was simple: to study the life of St. La Salle, with the hope that it would inspire the members of the group to be more Christ-like and more concerned about the plight of the poor.</p>\r\n\n<p>\r\n\n	The CLP group was originally composed of CCS faculty members led by the CCS dean, but it eventually grew to include students and co-academic personnel. When the group finished studying Br. Luke Salm&rsquo;s The Work is Yours in SY 2001-2002, the student members, in a meeting of the group with Br. Cecilio Hojilla at the Brothers&rsquo; House in DLS-Dasmarinas, unanimously suggested that all CCS students should have the same experience of getting to know St. La Salle and the members of the CCS community more deeply.</p>\r\n\n<p>\r\n\n	Preparations were then made to offer a course called FRMDEV1 (Formation and Development 1) to all CCS sophomores the following year.</p>\r\n\n<p>\r\n\n	FRMDEV1 was offered for the first time in SY 2002-2003, with more faculty than student facilitators.</p>\r\n\n<p>\r\n\n	Beginning SY 2003-2004, however, there have been more student facilitators than faculty, and the course and program began to be called FORMDEV.</p>\r\n\n','2011-11-02 21:55:48',4,'<h2>\r\n\n	FORMDEV Mission</h2>\r\n\n<p>\r\n\n	The College of Computer Studies (CCS) has a special program and community called FORMDEV (Formation and Development), the mission of which is to proclaim and demonstrate the Lasallian and Gospel values of <strong>faith</strong>, <strong>zeal</strong>, and <strong>love</strong>, especially for one&#39;s <strong>community</strong> and for the <strong>poor','home','2011-12-11 19:57:15'),(5,1,'Home','<p><strong>FORMDEV </strong>is a special <strong>program</strong> and <strong>community</strong> of volunteer faculty, staff, alumni, and students of the College of Computer Studies (CCS) of De La Salle University (DLSU). The mission of FORMDEV is to proclaim and demonstrate the Lasallian and Gospel values of <strong>faith</strong>, <strong>zeal</strong>, and <strong>love, especially for one&rsquo;s community and for the poor</strong>.</p>\r\n\n<p>In 2000, a group of CCS professors and students began meeting weekly to study the life of St. La Salle, believing that this would inspire them to be more Christ-like and more concerned about the plight of the poor. In 2001, when they finished studying Br. Luke Salm&rsquo;s biography of St. La Salle, The Work is Yours, the student members of the group unanimously felt that all CCS students should go through the same experience that they went through of getting to know Christ, St. La Salle, themselves, and other members of the CCS community more deeply. Thus, FORMDEV was born, and a 0.5-unit course, also called FORMDEV, was offered to CCS students in 2002. By God&rsquo;s grace, FORMDEV (the program, community, and course) continue to exist to this day.</p>\r\n\n<p>If you would like to know more about FORMDEV, we invite you to read the <a href=\"http://www.ccsformdev.com/downloads/FORMDEV%20-%20Handbook.pdf\" target=\"_blank\">FORMDEV Handbook</a>. It tells the story of FORMDEV, explains the Lasallian values that FORMDEV focuses on, specifies the duties of FORMDEV facis, and lists all the facis of FORMDEV, past and present.</p>\r\n\n','2011-11-02 21:55:48',3,'<p><strong>FORMDEV </strong>is a special <strong>program</strong> and <strong>community</strong> of volunteer faculty, staff, alumni, and students of the College of Computer Studies (CCS) of De La Salle University (DLSU). The mission of FORMDEV is to proclaim and demonstrate the Lasallian and Gospel values of <strong>faith</strong>, <strong>zeal</strong>, and <strong>love, especially for one&rsquo;s community and for the poor</strong>.','home5','2012-03-21 03:07:12'),(6,0,'In His Image and Likeness','<p>I have always wondered what it meant to be created &ldquo;in the image and likeness of God&rdquo; (paraphrased from Genesis 1:27). In my younger, more naive years, I used to think it meant that we all looked like God physically, and thought and acted in the same way too! It didn&rsquo;t help that the religion books used in my elementary (and even secondary) school instruction often depicted God as a bearded old man, floating among the clouds (sometimes it was just His head that was visible, sometimes He was shown in a funny robe). Actually, come to think of it, He looked kinda like Santa Claus without the red hat and robe, and kinda like Father Time too! (which I now know are both pagan symbols, sorry God XD)</p>\r\n\n<p>Upon taking up FORMDEV during my college undergraduate years (and reinforced by Bible studies after I actually joined the community), the idea of being created in God&rsquo;s &ldquo;image and likeness&rdquo; changed into something that might be a bit more accurate. During the time of the Bible&rsquo;s writing (the time of Moses, and until even the time of Jesus), the career choice of a son would be severely limited to what his Father&rsquo;s craft was. A stonecutter&rsquo;s son would inevitably become a stonecutter; a carpenter&rsquo;s son became a carpenter. Thus, the son became the &ldquo;image and likeness&rdquo; of his father, and while father and son tend to look alike physically, &ldquo;image and likeness&rdquo; pertained more to an unseen quality, an attribute passed down to the son from the father.</p>\r\n\n<p>For a long time, this became my understanding of Genesis 1:27, and for all intents and purposes, it&rsquo;s quite true. However, something was missing, something very important. I didn&rsquo;t pay too much attention to it at first, as I always thought I had more important things to do other than pondering Bible texts (again, forgive me Father). Today though, I had a much needed epiphany. I was reading John 5:1-24 today (The Bible in a Year reading for May 16, from the &ldquo;Our Daily Bread&rdquo;) and I happened upon a beautiful verse; call it the missing piece to the puzzle. It goes:</p>\r\n\n<p>&ldquo;Jesus gave them this answer: &lsquo;I tell you the truth, the Son can do nothing by himself; he can do only what he sees his Father is doing, because whatever the Father does the Son also does.&rsquo;&rdquo; (John 5:19)</p>\r\n\n<p>There is, of course, a multitude of ways to read this particular verse, but it struck a familiar chord in me. What does it really mean to be created &ldquo;in the image and likeness of God&rdquo;? What attributes of God should we learn to practice in our lives, the way sons in ancient Israel learned and practiced attributes of their fathers?</p>\r\n\n<p>And now I know the answer. All along it was Jesus Christ himself.</p>\r\n\n<p>In order for us to truly be &ldquo;in the image and likeness of God&rdquo;, we should learn to follow in the example of Jesus, who lived following &ldquo;what he sees his Father is doing&rdquo;. In order for us to truly live Genesis 1:27, we must allow God to form us to take on the characters of His son, for Jesus followed and lived in his Father&rsquo;s image and likeness (John 5:19). Galatians 5:22-24 (and a related verse in Ephesians 5:9) reveals some of the characters of Jesus, but more importantly, how to attain them.</p>\r\n\n<p>So how do we attain them?</p>\r\n\n<p>Simple! Just allow the Holy Spirit of God to work in you and to teach you. Just as how a young boy in ancient Israel would learn from his father the secrets of his father&rsquo;s trade, so must we allow God, through the Holy Spirit, to teach us the &ldquo;secrets&rdquo; of living a righteous life. Romans 8:28-29 further cements this fact, telling us that if we live according to the purpose God has set for us, He Himself will conform us into the likeness of his Son, the likeness of God Himself. Gradually, just by living in the purpose God has set for us, we become transformed into more Christ like beings.</p>\r\n\n<p>It&rsquo;s amazing how the realities of God all fit together. When we were young, we were taught fragments of this reality, each a gem on its own. But seeing these little realities merge together and make perfect absolute sense (and from different testaments too), it&rsquo;s just amazing! It comforts my spirit to see these little correspondences; it makes me feel at peace with my faith. I hope that, upon reading this simple reflection of mine, God&rsquo;s reality amazed you as well, and I hope that you will continue to be amazed as you discover more of God&rsquo;s realities.</p>\r\n\n<p>For now, I urge you to take Genesis 1:27 into heart in the light of John 5:19, and ask God to truly form us into His image and likeness, holding on to the promise of Romans 8:28-29, into the character of His son, Jesus Christ.</p>\r\n\n<p>Amen.</p>','2011-05-17 21:55:48',4,'','in-his-image-and-likeness','2011-12-10 17:58:23'),(22,1,'New World  Record','<p>I am pleased to inform you that <strong>Formdev</strong> has reached a <strong>New World Record</strong>!</p>','2011-12-09 16:44:49',2,'<p>I am pleased to inform you that <strong>Formdev</strong> has reached a <strong>New World Record</strong>!','new-world--record','2011-12-09 16:46:31'),(23,1,'Test','<p>This is my first test post.</p>\r\n\n','2012-03-21 02:59:44',1,'<p>This is my first test post.','test','2012-03-21 02:59:44'),(24,1,'New Announcement','<p>What kind of record is this?</p>\r\n\n','2012-03-21 03:10:41',2,'<p>What kind of record is this?','new-announcement','2012-03-21 03:10:41'),(25,1,'Long test.','<p>The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.</p>\r\n\n<p>&nbsp;</p>\r\n\n<p>The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;</p>\r\n\n','2012-03-21 03:11:44',2,'<p>The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.</p>\r\n\n<p>&nbsp;','long-test','2012-03-21 03:11:44');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faciperclass`
--

DROP TABLE IF EXISTS `faciperclass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faciperclass` (
  `idfaciperclass` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idclass` int(11) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfaciperclass`),
  KEY `FK_faciperclass_1` (`iduser`),
  KEY `FK_faciperclass_2` (`idclass`),
  CONSTRAINT `FK_faciperclass_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_faciperclass_2` FOREIGN KEY (`idclass`) REFERENCES `class` (`idclass`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faciperclass`
--

LOCK TABLES `faciperclass` WRITE;
/*!40000 ALTER TABLE `faciperclass` DISABLE KEYS */;
/*!40000 ALTER TABLE `faciperclass` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-27 12:27:56
