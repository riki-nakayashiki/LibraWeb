-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2023 at 01:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libraWeb`
--
CREATE DATABASE IF NOT EXISTS `libraWeb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `libraWeb`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `bookTitle` varchar(250) DEFAULT NULL,
  `bookAuthor` varchar(250) DEFAULT NULL,
  `publication` varchar(250) DEFAULT NULL,
  `publisher` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `bookTitle`, `bookAuthor`, `publication`, `publisher`) VALUES
(1, '0195153448', 'Classical Mythology', 'Mark P. O. Morford', '2002', 'Oxford University Press'),
(2, '0002005018', 'Clara Callan', 'Richard Bruce Wright', '2001', 'HarperFlamingo Canada'),
(3, '0060973129', 'Decision in Normandy', 'Carlo D\'Este', '1991', 'HarperPerennial'),
(4, '0374157065', 'Flu: The Story of the Great Influenza Pandemic of 1918 and the Search for the Virus That Caused It', 'Gina Bari Kolata', '1999', 'Farrar Straus Giroux'),
(5, '0393045218', 'The Mummies of Urumchi', 'E. J. W. Barber', '1999', 'W. W. Norton & Company'),
(6, '0399135782', 'The Kitchen God\'s Wife', 'Amy Tan', '1991', 'Putnam Pub Group'),
(7, '0425176428', 'What If?: The World\'s Foremost Military Historians Imagine What Might Have Been', 'Robert Cowley', '2000', 'Berkley Publishing Group'),
(8, '0671870432', 'PLEADING GUILTY', 'Scott Turow', '1993', 'Audioworks'),
(9, '0679425608', 'Under the Black Flag: The Romance and the Reality of Life Among the Pirates', 'David Cordingly', '1996', 'Random House'),
(10, '074322678X', 'Where You\'ll Find Me: And Other Stories', 'Ann Beattie', '2002', 'Scribner'),
(11, '0771074670', 'Nights Below Station Street', 'David Adams Richards', '1988', 'Emblem Editions'),
(12, '0806521212', 'Hitler\'s Secret Bankers: The Myth of Swiss Neutrality During the Holocaust', 'Adam Lebor', '2000', 'Citadel Press'),
(13, '0887841740', 'The Middle Stories', 'Sheila Heti', '2004', 'House of Anansi Press'),
(14, '1552041778', 'Jane Doe', 'R. J. Kaiser', '1999', 'Mira Books'),
(15, '1558746218', 'A Second Chicken Soup for the Woman\'s Soul (Chicken Soup for the Soul Series)', 'Jack Canfield', '1998', 'Health Communications'),
(16, '1567407781', 'The Witchfinder (Amos Walker Mystery Series)', 'Loren D. Estleman', '1998', 'Brilliance Audio - Trade'),
(17, '1575663937', 'More Cunning Than Man: A Social History of Rats and Man', 'Robert Hendrickson', '1999', 'Kensington Publishing Corp.'),
(18, '1881320189', 'Goodbye to the Buttermilk Sky', 'Julia Oliver', '1994', 'River City Pub'),
(19, '0440234743', 'The Testament', 'John Grisham', '1999', 'Dell'),
(20, '0452264464', 'Beloved (Plume Contemporary Fiction)', 'Toni Morrison', '1994', 'Plume'),
(21, '0609804618', 'Our Dumb Century: The Onion Presents 100 Years of Headlines from America\'s Finest News Source', 'The Onion', '1999', 'Three Rivers Press'),
(22, '1841721522', 'New Vegetarian: Bold and Beautiful Recipes for Every Occasion', 'Celia Brooks Brown', '2001', 'Ryland Peters & Small Ltd'),
(23, '1879384493', 'OUT OF THE SILENT PLANET', 'C.S. Lewis', '1996', 'Scribner'),
(24, '0061076031', 'Prague : A Novel', 'ARTHUR PHILLIPS', '2003', 'Random House Trade Paperbacks'),
(25, '0439095026', 'Chocolate Jesus', 'Stephan Jaramillo', '1998', 'Berkley Publishing Group'),
(26, '0689821166', 'Wie Barney es sieht.', 'Mordecai Richler', '2002', 'Lübbe'),
(27, '0971880107', 'Der Fluch der Kaiserin. Ein Richter-Di-Roman.', 'Eleanor Cooney', '2001', 'Goldmann'),
(28, '0345402871', 'Sturmzeit. Roman.', 'Charlotte Link', '1991', 'Goldmann'),
(29, '0345417623', 'Tödlicher Verdacht.', 'Richard North Patterson', '2000', 'Goldmann'),
(30, '0671870432', 'Lying Awake', 'Mark Salzman', '2000', 'Alfred A. Knopf'),
(31, '0446310786', 'To Kill a Mockingbird', 'Harper Lee', '1988', 'Little Brown & Company'),
(32, '0449005615', 'Seabiscuit: An American Legend', 'LAURA HILLENBRAND', '2002', 'Ballantine Books'),
(33, '0060168013', 'Pigs in Heaven', 'Barbara Kingsolver', '1993', 'Harpercollins'),
(34, '0195153448', 'Miss Zukas and the Raven\'s Dance', 'Jo Dereske', '1996', 'Avon'),
(35, '0002005018', 'Pride and Prejudice', 'Jane Austen', '1983', 'Bantam'),
(36, '0060973129', 'The Therapeutic Touch: How to Use Your Hands to Help or to Heal', 'Dolores Krieger', '1979', 'Fireside'),
(37, '0374157065', 'Downtown', 'Anne Rivers Siddons', '1995', 'HarperTorch'),
(38, '0393045218', 'Icebound', 'Dean R. Koontz', '2000', 'Bantam Books'),
(39, '0399135782', 'I\'ll Be Seeing You', 'Mary Higgins Clark', '1994', 'Pocket'),
(40, '0425176428', 'From the Corner of His Eye', 'Dean Koontz', '2001', 'Bantam Books'),
(41, '0671870432', 'Isle of Dogs', 'Patricia Cornwell', '2002', 'Berkley Publishing Group'),
(42, '0679425608', 'Purity in Death', 'J.D. Robb', '2002', 'Berkley Publishing Group'),
(43, '0743226781', 'This Year It Will Be Different: And Other Stories', 'Maeve Binchy', '1997', 'Dell'),
(44, '0771074670', 'Proxies', 'Laura J. Mixon', '1999', 'Tor Books'),
(45, '0806521213', 'Left Behind: A Novel of the Earth\'s Last Days (Left Behind #1)', 'Tim Lahaye', '2000', 'Tim Lahaye'),
(46, '0887841740', 'The Street Lawyer', 'JOHN GRISHAM', '1999', 'Dell'),
(47, '1552041778', 'Love, Medicine and Miracles', 'M.D. Bernie S. Siegel', '1988', 'HarperCollins Publishers'),
(48, '1558746218', 'All the King\'s Men', 'Robert Penn Warren', '1982', 'Harvest Books'),
(49, '1567407781', 'Pacific Northwest', 'Hans Johannes Hoefer', '1985', 'Chambers Harrap Publishers Ltd'),
(50, '1575663937', 'A Soldier of the Great War', 'Mark Helprin', '1992', 'Avon Books'),
(51, '1881320189', 'Getting Well Again', 'O. Carol Simonton Md', '1992', 'Bantam'),
(52, '0440234743', 'Northwest Wines and Wineries', 'Chuck Hill', '1993', 'Speed Graphics'),
(53, '0452264464', 'An Atmosphere of Eternity: Stories of India', 'David Iglehart', '2002', 'Sunflower Press'),
(54, '0609804618', 'LONESOME DOVE', 'Larry McMurtry', '1986', 'Pocket'),
(55, '1841721522', 'Shabanu: Daughter of the Wind (Border Trilogy)', 'SUZANNE FISHER STAPLES', '1991', 'Laurel Leaf'),
(56, '1879384493', 'Haveli (Laurel Leaf Books)', 'SUZANNE FISHER STAPLES', '1995', 'Laurel Leaf'),
(57, '0061076031', 'Lieux dits', 'Michel Tournier', '2002', 'Gallimard'),
(58, '0439095026', 'The Dragons of Eden: Speculations on the Evolution of Human Intelligence', 'Carl Sagan', '1978', 'Ballantine Books'),
(59, '0689821166', 'The yawning heights', 'Aleksandr Zinoviev', '1980', 'Random House'),
(60, '0971880107', 'Breathing Lessons', 'Anne Tyler', '1994', 'Berkley Publishing Group'),
(61, '0345402871', 'The Joy Luck Club', 'Amy Tan', '1994', 'Prentice Hall (K-12)'),
(62, '0345417623', 'Heart of Darkness (Wordsworth Collection)', 'Joseph Conrad', '1998', 'NTC/Contemporary Publishing Company'),
(63, '0684823802', 'The Angel Is Near', 'Deepak Chopra', '2000', 'St. Martin\'s Press'),
(64, '0375759778', 'Tess of the D\'Urbervilles (Wordsworth Classics)', 'Thomas Hardy', '1997', 'NTC/Contemporary Publishing Company'),
(65, '0425163091', 'The Adventures of Drew and Ellie: The Magical Dress', 'Charles Noland', '2003', '1stBooks Library'),
(66, '3404921038', 'The Accidental Virgin', 'Valerie Frankel', '2003', 'Avon Trade'),
(67, '3442353866', 'The Tao of Pooh', 'Benjamin Hoff', '1983', 'Penguin Books'),
(68, '3442410665', 'Seabiscuit', 'LAURA HILLENBRAND', '2003', 'Ballantine Books'),
(69, '3442446937', 'The Prince', 'Niccolo Machiavelli', '1952', 'Signet Book'),
(70, '0375406328', 'Life\'s Little Instruction Book (Life\'s Little Instruction Books (Paperback))', 'H. Jackson Brown', '1991', 'Thomas Nelson'),
(71, '0446310786', 'The Ruby in the Smoke (Sally Lockhart Trilogy, Book 1)', 'PHILIP PULLMAN', '1988', 'Laurel Leaf'),
(72, '0449005615', 'Black Beauty (Illustrated Classics)', 'Anna Sewell', '1995', 'Landoll'),
(73, '0060168013', 'Anil\'s Ghost', 'MICHAEL ONDAATJE', '2000', 'Knopf'),
(74, '0380782434', 'Prescription for Terror', 'Sandra Levy Ceren', '1999', 'Andrew Scott Publishers'),
(75, '0553212151', 'Modern Manners: An Etiquette Book for Rude People', 'P.J. O\'Rourke', '1990', 'Atlantic Monthly Press'),
(76, '0671765372', 'Turning Thirty', 'Mike Gayle', '2000', 'Hodder &amp, Stoughton General Division'),
(77, '0061099686', 'Decipher', 'Stel Pavlou', '2002', 'Simon &amp, Schuster (Trade Division)'),
(78, '0553582909', 'My First Cousin Once Removed: Money, Madness, and the Family of Robert Lowell', 'Sarah Payne Stuart', '1999', 'Perennial'),
(79, '0671888587', 'Standing Firm: A Vice-Presidential Memoir', 'Dan Quayle', '1994', 'Harpercollins'),
(80, '0553582747', 'Team Bush : Leadership Lessons from the Bush White House', 'Donald F. Kettl', '2003', 'McGraw-Hill'),
(81, '0425182908', 'The Right Man : The Surprise Presidency of George W. Bush', 'DAVID FRUM', '2003', 'Random House'),
(82, '0425186302', 'Daybreakers Louis Lamour Collection', 'Louis Lamour', '1981', 'Bantam Doubleday Dell'),
(83, '0440223571', 'The Catcher in the Rye', 'J.D. Salinger', '1991', 'Little, Brown'),
(84, '0812523873', 'El Senor De Los Anillos: LA Comunidad Del Anillo (Lord of the Rings (Spanish))', 'J. R. R. Tolkien', '2001', 'Minotauro'),
(85, '0842342702', 'El Senor De Los Anillos: Las DOS Torres (Lord of the Rings (Paperback))', 'J. R. R. Tolkien', '2001', 'Minotauro'),
(86, '0440225701', 'El Senor De Los Anillos: El Retorno Del Rey (Tolkien, J. R. R. Lord of the Rings. 3.)', 'J. R. R. Tolkien', '2001', 'Distribooks'),
(87, '0060914068', 'Midnight in the Garden of Good and Evil: A Savannah Story', 'John Berendt', '1994', 'Random House'),
(88, '0156047624', 'Pretend You Don\'t See Her', 'Mary Higgins Clark', '1998', 'Pocket'),
(89, '0245542957', 'Fast Women', 'Jennifer Crusie', '2001', 'St. Martin\'s Press'),
(90, '0380715899', 'Female Intelligence', 'Jane Heller', '2001', 'St. Martin\'s Press'),
(91, '0553280333', 'Pasquale\'s Nose: Idle Days in an Italian Town', 'Michael Rips', '2002', 'Back Bay Books'),
(92, '0961769947', 'The Gospel of Judas: A Novel', 'Simon Mawer', '2002', 'Back Bay Books'),
(93, '0964778319', 'Prize Stories, 1987: The O\'Henry Awards', 'William Abrahams', '1987', 'Doubleday Books'),
(94, '0671623249', 'The Pillars of the Earth', 'Ken Follett', '1996', 'Signet Book'),
(95, '0679810307', 'McDonald\'s: Behind the Arches', 'John F. Love', '1995', 'Bantam'),
(96, '0679865691', 'Creating Wealth : Retire in Ten Years Using Allen\'s Seven Principles of Wealth!', 'Robert G. Allen', '1986', 'Fireside'),
(97, '2070423204', 'Corelli\'s Mandolin : A Novel', 'LOUIS DE BERNIERES', '1995', 'Vintpublisher'),
(98, '0345260317', 'Love, Miracles, and Animal Healing : A heartwarming look at the spiritual bond between animals and humans', 'Pam Proctor', '1996', 'Fireside'),
(99, '0394743741', 'The Five People You Meet in Heaven', 'Mitch Albom', '2003', 'Hyperion'),
(100, '0425117744', 'Tu Nombre Escrito En El Agua (La Sonrisa Vertical)', 'Irene Gonzalez Frei', '2002', 'Tusquets'),
(101, '0804106304', 'Relics (Star Trek: The Next Generation)', 'Michael Jan Friedman', '1992', 'Star Trek'),
(102, '1853262404', 'Bless The Beasts And Children : Bless The Beasts And Children', 'Glendon Swarthout', '1995', 'Pocket'),
(103, '0312970242', 'The Touch of Your Shadow, the Whisper of Your Name (Babylon 5, Book 5)', 'Neal Barrett Jr.', '1996', 'Dell'),
(104, '1853260053', 'Blood Oath', 'David Morrell', '1994', 'St. Martin\'s Press'),
(105, '1414035004', 'The Alibi', 'Sandra Brown', '2000', 'Warner Books'),
(106, '0060938412', 'The Beach House', 'James Patterson', '2003', 'Warner Books'),
(107, '0140067477', 'A Kiss Remembered', 'Sandra Brown', '2003', 'Warner Books'),
(108, '0345465083', 'The Short Forever', 'Stuart Woods', '2003', 'Signet Book'),
(109, '0451625889', 'Dead Aim', 'IRIS JOHANSEN', '2004', 'Bantam Books'),
(110, '1558531025', 'Angels &amp, Demons', 'Dan Brown', '2001', 'Pocket Star'),
(111, '0441783589', 'The Deal', 'Joe Hutsko', '2000', 'Tor Books (Mm)'),
(112, '0394895894', 'All He Ever Wanted: A Novel', 'Anita Shreve', '2004', 'Back Bay Books'),
(113, '1569871213', 'Every Breath You Take : A True Story of Obsession, Revenge, and Murder', 'Ann Rule', '2002', 'Pocket'),
(114, '0375410538', 'If I Ever Get Back to Georgia, I\'m Gonna Nail My Feet to the Ground', 'LEWIS GRIZZARD', '1991', 'Ballantine Books'),
(115, '0966986105', 'The Mosquito Coast', 'Paul Theroux', '1990', 'Harper Mass Market Paperbacks (Mm)'),
(116, '0871133753', 'If Love Were Oil, I\'d Be About a Quart Low', 'Lewis Grizzard', '1994', 'Warner Books (Mm)'),
(117, '0340767936', 'Goodbye, My Little Ones: The True Story of a Murderous Mother and Five Innocent Victims', 'Charles Hickey', '1996', 'Onyx Books'),
(118, '0743403843', 'The Girl Who Loved Tom Gordon', 'Stephen King', '2000', 'Pocket'),
(119, '0060930365', 'Bringing Down the House: The Inside Story of Six M.I.T. Students Who Took Vegas for Millions', 'Ben Mezrich', '2003', 'Free Press'),
(120, '0060177586', 'The Oneprince (The Redaemian Chronicles, Book 1)', 'Bill Hand', '1992', 'Thomas Nelson Inc'),
(121, '0071416331', 'The Sum of All Fears', 'Tom Clancy', '2002', 'Berkley Publishing Group'),
(122, '0375509038', 'Care Packpublishers : Letters to Christopher Reeve from Strangers and Other Friends', 'DANA REEVE', '1999', 'Random House'),
(123, '0553062042', 'O Deus Das Pequenas Coisas', 'Roy', '1998', 'Edicoes Asa'),
(124, '0316769487', 'Lady in Green/Minor Indiscretions (Signet Regency Romance)', 'Barbara Metzger', '2002', 'Signet Book'),
(125, '8445071408', 'One Hundred Years of Solitude', 'Gabriel Garcia Marquez', '1998', 'Perennial'),
(126, '8445071769', 'Little Altars Everywhere: A Novel', 'Rebecca Wells', '1996', 'Perennial'),
(127, '8445071777', 'Coyote Waits (Joe Leaphorn/Jim Chee Novels)', 'Tony Hillerman', '1992', 'HarperTorch'),
(128, '0679429220', 'Before I Say Good-Bye', 'Mary Higgins Clark', '2001', 'Pocket'),
(129, '0671867156', 'Slow Waltz in Cedar Bend', 'Robert James Waller', '1994', 'Warner Books'),
(130, '0312252617', 'Twenty Minute Retreats: Revive Your Spirits in Just Minutes a Day (A Pan Self-discovery Title)', 'Rachel Harris', '2001', 'Pan Macmillan'),
(131, '0312261594', 'Atonement : A Novel', 'IAN MCEWAN', '2003', 'Anchor'),
(132, '0316748641', 'Next: The Future Just Happened', 'Michael Lewis', '2001', 'W.W. Norton &amp, Company'),
(133, '0316973742', 'The Angelic Darkness', 'Richard Zimler', '1999', 'Arcadia Books'),
(134, '0385235941', 'The Soulbane Stratpublisherm', 'Norman Jetmundsen', '2000', 'John Hunt Publishing, Ltd.'),
(135, '0446677450', 'Gangster', 'Lorenzo Carcaterra', '2002', 'Fawcett Books'),
(136, '0451166892', 'Hush', 'Anne Frasier', '2002', 'Onyx Books'),
(137, '0553347594', 'Whisper of Evil (Hooper, Kay. Evil Trilogy.)', 'Kay Hooper', '2002', 'Bantam Books'),
(138, '0671621009', 'Temor y Temblor', 'Soren Kierkegaard', '2001', 'Alianza'),
(139, '0679763973', 'Estudios sobre el amor', 'Jose Ortega Y Gaset', '2001', 'Downtown Book Center'),
(140, '0684822733', 'Rebecca', 'Daphne Du Maurier', '1994', 'Avon'),
(141, '0684822734', 'Scarlet Letter', 'Nathaniel Hawthorne', '1993', 'Signet Book'),
(142, '8472238822', 'Keep It Simple: And Get More Out of Life', 'Nick Ppublisher', '1999', 'Trafalgar Square'),
(143, '0671864769', 'Diary of a Mad Mom-To-Be', 'Laura Wolf', '2003', 'Delta'),
(144, '0671521519', 'Locked in Time (Laurel Leaf Books)', 'LOIS DUNCAN', '1986', 'Laure Leaf'),
(145, '0440222303', 'Contact', 'Susan Grant', '2002', 'Love Spell'),
(146, '0312953453', 'The Brimstone Wedding', 'Barbara Vine', '1997', 'Penguin Books Ltd'),
(147, '0446608653', 'The Catswold Portal', 'Shirley Rousseau Murphy', '1993', 'Roc'),
(148, '0446612545', 'Through Wolf\'s Eyes (Wolf)', 'Jane Lindskold', '2002', 'Tor Fantasy'),
(149, '0446612618', 'Puerto Vallarta Squeeze', 'Robert James Waller', '1995', 'Warner Books'),
(150, '0451208080', 'Tree Grows In Brooklyn', 'Betty Smith', '1988', 'Harpercollins Publisher'),
(151, '0671027360', 'Snow Angels', 'Stewart O\'Nan', '1995', 'Penguin Books'),
(152, '0812575954', 'Wish You Well', 'David Baldacci', '2000', 'Warner Books'),
(153, '0316735736', 'The Hitchhiker\'s Guide to the Galaxy', 'Douglas Adams', '1982', 'Pocket'),
(154, '0743439740', 'Crow Lake (Today Show Book Club #7)', 'Mary Lawson', '2003', 'Delta'),
(155, '0345372700', 'My Antonia', 'Willa Cather', '1995', 'Mariner Books'),
(156, '0380619458', 'Pen Pals', 'Olivia Goldsmith', '2002', 'Signet Book'),
(157, '0446325805', 'Bridget Jones\'s Diary', 'Helen Fielding', '1997', 'Picador (UK)'),
(158, '0451406923', 'Pride and Prejudice (Dover Thrift Editions)', 'Jane Austen', '1995', 'Dover Publications'),
(159, '0671042858', 'EYE ON CRIME: HARDY BOYS #153', 'Franklin W. Dixon', '1998', 'Aladdin'),
(160, '0743249992', 'Skin And Bones', 'Franklin W. Dixon', '2000', 'Aladdin'),
(161, '0840734530', 'LAW OF THE JUNGLE (HARDY BOYS CASE FILE 105) : LAW OF THE JUNGLE (Hardy Boys, The)', 'Franklin W. Dixon', '1995', 'Simon Pulse'),
(162, '0425184226', 'The Cat Who Came to Breakfast (Cat Who... (Hardcover))', 'Lilian Jackson Braun', '1994', 'Putnam Pub Group'),
(163, '0375500766', 'If Singleness Is a Gift, What\'s the Return Policy?', 'Holly Virden', '2003', 'Nelson Books'),
(164, '9724119378', 'Always Daddy\'s Girl: Understanding Your Father\'s Impact on Who You Are', 'H. Norman Wright', '1989', 'Regal Books'),
(165, '0345354931', 'Night Mare (Xanth Novels (Paperback))', 'Piers Anthony', '1990', 'Del Rey Books'),
(166, '0553278223', 'The Martian Chronicles', 'RAY BRADBURY', '1984', 'Spectra'),
(167, '3150000335', 'Kabale Und Liebe', 'Schiller', '0', 'Philipp Reclam, Jun Verlag GmbH'),
(168, '3257203659', 'Der illustrierte Mann. Erzhlungen.', 'Ray Bradbury', '2002', 'Diogenes'),
(169, '3257207522', 'Der K�?¶nig in Gelb.', 'Raymond Chandler', '1980', 'Diogenes Verlag'),
(170, '3257208626', 'Fahrenheit 451', 'Ray Bradbury', '1994', 'Distribooks Inc'),
(171, '3257208634', 'Die Mars- Chroniken. Roman in Erzhlungen.', 'Ray Bradbury', '1981', 'Diogenes Verlag'),
(172, '3257208669', 'Das B�?¶se kommt auf leisen Sohlen.', 'Ray Bradbury', '2003', 'Diogenes'),
(173, '3257210450', 'L�?¶wenzahnwein. Roman.', 'Ray Bradbury', '1999', 'Diogenes Verlag'),
(174, '3257212054', 'Das Kind von morgen. Erzhlungen.', 'Ray Bradbury', '2000', 'Diogenes Verlag'),
(175, '3257212429', 'Die Mechanismen der Freude. Erzhlungen.', 'Ray Bradbury', '2000', 'Diogenes Verlag'),
(176, '3257214154', 'Familientreffen. Erzhlungen.', 'Ray Bradbury', '2000', 'Diogenes Verlag'),
(177, '3257216416', 'Der Tod kommt schnell in Mexico. Erzhlungen.', 'Ray Bradbury', '1988', 'Diogenes Verlag'),
(178, '3257233051', 'Veronika Deschliesst Zu Sterben / Vernika Decides to Die', 'Paolo Coelho', '2002', 'Distribooks'),
(179, '342311360X', 'Die Liebe in Den Zelten', 'Gabriel Garcia Marquez', '1990', 'Deutscher Taschenbuch Verlag (DTV)'),
(180, '3423116714', 'Die Klone der Joanna May. Roman.', 'Fay Weldon', '1993', 'Dtv'),
(181, '3423241489', 'Ist mein Hintern wirklich so dick? Tpublisherbuch einer empfindsamen Frau.', 'Arabella Weir', '1998', 'Dtv'),
(182, '3426605686', 'Haifischfrauen.', 'Kiana Davenport', '1996', 'Droemersche Verlagsanstalt Th. Knaur Nachf., GmbH &amp, Co.'),
(183, '3453212150', 'Die Cappuccino- Jahre. Aus dem Tpublisherbuch des Adrian Mole.', 'Sue Townsend', '2002', 'Heyne'),
(184, '3462021095', 'Schwarzer Tee mit drei Stück Zucker', 'Renan Demirkan', '1991', 'Kiepenheuer &amp, Witsch'),
(185, '3492045642', 'Querschsse - Downsize This!', 'Michael Moore', '2003', 'Piper'),
(186, '3498020862', 'Die Korrekturen.', 'Jonathan Franzen', '2002', 'Rowohlt, Reinbek'),
(187, '3499110695', 'Neun Erzhlungen.', 'Jerome D. Salinger', '1968', 'Rowohlt Tb.'),
(188, '3499151502', 'Hebt den Dachbalken hoch, Zimmerleute / Seymour wird vorgestellt.', 'Jerome D. Salinger', '1998', 'Rowohlt Tb.'),
(189, '0060977493', 'The God of Small Things', 'Arundhati Roy', '1998', 'Perennial');

-- --------------------------------------------------------

--
-- Table structure for table `reservedBooks`
--

CREATE TABLE `reservedBooks` (
  `id` int(11) NOT NULL,
  `bookId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `dateOfReserved` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservedRooms`
--

CREATE TABLE `reservedRooms` (
  `id` int(11) NOT NULL,
  `roomId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `roomName` varchar(50) DEFAULT NULL,
  `dateOfReserved` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` date DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservedRooms`
--

INSERT INTO `reservedRooms` (`id`, `roomId`, `userId`, `roomName`, `dateOfReserved`, `date`, `startTime`, `endTime`) VALUES
(1, 3, 1013, 'Panorama', '2023-06-08 02:25:01', '2023-06-07', '10:00:00', '11:00:00'),
(2, 16, 1013, 'Pandora', '2023-06-08 02:26:05', '2023-06-07', '10:00:00', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomName` varchar(50) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `purpose` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomName`, `capacity`, `location`, `purpose`, `date`, `startTime`, `endTime`, `status`) VALUES
(1, 'Pandora', 6, '201', 'laptop', '2023-06-06', '10:00:00', '11:00:00', 0),
(2, 'Pandora', 6, '201', 'laptop', '2023-06-06', '11:00:00', '12:00:00', 0),
(3, 'Pandora', 6, '201', 'laptop', '2023-06-06', '12:00:00', '13:00:00', 1),
(4, 'Pandora', 6, '201', 'laptop', '2023-06-06', '13:00:00', '14:00:00', 0),
(5, 'Pandora', 6, '201', 'laptop', '2023-06-06', '14:00:00', '15:00:00', 0),
(6, 'Pandora', 6, '201', 'laptop', '2023-06-06', '15:00:00', '16:00:00', 0),
(7, 'Pandora', 6, '201', 'laptop', '2023-06-06', '16:00:00', '17:00:00', 0),
(8, 'Panorama', 8, '202', 'laptop', '2023-06-06', '10:00:00', '11:00:00', 0),
(9, 'Panorama', 8, '202', 'laptop', '2023-06-06', '11:00:00', '12:00:00', 0),
(10, 'Panorama', 8, '202', 'laptop', '2023-06-06', '12:00:00', '13:00:00', 0),
(11, 'Panorama', 8, '202', 'laptop', '2023-06-06', '13:00:00', '14:00:00', 0),
(12, 'Panorama', 8, '202', 'laptop', '2023-06-06', '14:00:00', '15:00:00', 0),
(13, 'Panorama', 8, '202', 'laptop', '2023-06-06', '15:00:00', '16:00:00', 0),
(14, 'Panorama', 8, '202', 'laptop', '2023-06-06', '16:00:00', '17:00:00', 0),
(15, 'Silver', 15, '203', 'laptop', '2023-06-06', '10:00:00', '11:00:00', 0),
(16, 'Silver', 15, '203', 'laptop', '2023-06-06', '11:00:00', '12:00:00', 1),
(17, 'Silver', 15, '203', 'laptop', '2023-06-06', '12:00:00', '13:00:00', 0),
(18, 'Silver', 15, '203', 'laptop', '2023-06-06', '13:00:00', '14:00:00', 0),
(19, 'Silver', 15, '203', 'laptop', '2023-06-06', '14:00:00', '15:00:00', 0),
(20, 'Silver', 15, '203', 'laptop', '2023-06-06', '15:00:00', '16:00:00', 0),
(21, 'Silver', 15, '203', 'laptop', '2023-06-06', '16:00:00', '17:00:00', 0),
(22, 'Silver', 15, '203', 'laptop', '2023-06-06', '10:00:00', '11:00:00', 0),
(23, 'Columbia', 6, '301', 'study', '2023-06-06', '12:00:00', '13:00:00', 0),
(24, 'Columbia', 6, '301', 'study', '2023-06-06', '13:00:00', '14:00:00', 0),
(25, 'Columbia', 6, '301', 'study', '2023-06-06', '14:00:00', '15:00:00', 0),
(26, 'Columbia', 6, '301', 'study', '2023-06-06', '15:00:00', '16:00:00', 0),
(27, 'Columbia', 6, '301', 'study', '2023-06-06', '16:00:00', '17:00:00', 0),
(28, 'Columbia', 6, '301', 'study', '2023-06-06', '17:00:00', '18:00:00', 0),
(29, 'Columbia', 6, '301', 'study', '2023-06-06', '18:00:00', '19:00:00', 0),
(30, 'Slovakia', 8, '302', 'study', '2023-06-06', '10:00:00', '11:00:00', 0),
(31, 'Slovakia', 8, '302', 'study', '2023-06-06', '11:00:00', '12:00:00', 0),
(32, 'Slovakia', 8, '302', 'study', '2023-06-06', '12:00:00', '13:00:00', 0),
(33, 'Slovakia', 8, '302', 'study', '2023-06-06', '13:00:00', '14:00:00', 0),
(34, 'Slovakia', 8, '302', 'study', '2023-06-06', '14:00:00', '15:00:00', 0),
(35, 'Slovakia', 8, '302', 'study', '2023-06-06', '15:00:00', '16:00:00', 0),
(36, 'Slovakia', 8, '302', 'study', '2023-06-06', '16:00:00', '17:00:00', 0),
(37, 'Slovakia', 8, '302', 'study', '2023-06-06', '17:00:00', '18:00:00', 0),
(38, 'Slovakia', 8, '302', 'study', '2023-06-06', '18:00:00', '19:00:00', 0),
(39, 'Brazil', 15, '303', 'study', '2023-06-06', '10:00:00', '11:00:00', 0),
(40, 'Brazil', 15, '303', 'study', '2023-06-06', '11:00:00', '12:00:00', 0),
(41, 'Brazil', 15, '303', 'study', '2023-06-06', '12:00:00', '13:00:00', 0),
(42, 'Brazil', 15, '303', 'study', '2023-06-06', '13:00:00', '14:00:00', 0),
(43, 'Brazil', 15, '303', 'study', '2023-06-06', '14:00:00', '15:00:00', 0),
(44, 'Brazil', 15, '303', 'study', '2023-06-06', '15:00:00', '16:00:00', 0),
(45, 'Brazil', 15, '303', 'study', '2023-06-06', '16:00:00', '17:00:00', 0),
(46, 'Brazil', 15, '303', 'study', '2023-06-06', '17:00:00', '18:00:00', 0),
(47, 'Brazil', 15, '303', 'study', '2023-06-06', '18:00:00', '19:00:00', 0),
(48, 'Thailand', 10, '401', 'meeting', '2023-06-06', '10:00:00', '11:00:00', 0),
(49, 'Thailand', 10, '401', 'meeting', '2023-06-06', '11:00:00', '12:00:00', 0),
(50, 'Thailand', 10, '401', 'meeting', '2023-06-06', '12:00:00', '13:00:00', 0),
(51, 'Thailand', 10, '401', 'meeting', '2023-06-06', '13:00:00', '14:00:00', 0),
(52, 'Thailand', 10, '401', 'meeting', '2023-06-06', '14:00:00', '15:00:00', 0),
(53, 'Thailand', 10, '401', 'meeting', '2023-06-06', '15:00:00', '16:00:00', 0),
(54, 'Korea', 15, '402', 'meeting', '2023-06-06', '10:00:00', '11:00:00', 0),
(55, 'Korea', 15, '402', 'meeting', '2023-06-06', '11:00:00', '12:00:00', 0),
(56, 'Korea', 15, '402', 'meeting', '2023-06-06', '12:00:00', '13:00:00', 0),
(57, 'Korea', 15, '402', 'meeting', '2023-06-06', '13:00:00', '14:00:00', 0),
(58, 'Korea', 15, '402', 'meeting', '2023-06-06', '14:00:00', '15:00:00', 0),
(59, 'Korea', 15, '402', 'meeting', '2023-06-06', '15:00:00', '16:00:00', 0),
(60, 'Japan', 25, '403', 'meeting', '2023-06-06', '10:00:00', '11:00:00', 0),
(61, 'Japan', 25, '403', 'meeting', '2023-06-06', '11:00:00', '12:00:00', 0),
(62, 'Japan', 25, '403', 'meeting', '2023-06-06', '12:00:00', '13:00:00', 0),
(63, 'Japan', 25, '403', 'meeting', '2023-06-06', '13:00:00', '14:00:00', 0),
(64, 'Japan', 25, '403', 'meeting', '2023-06-06', '14:00:00', '15:00:00', 0),
(65, 'Japan', 25, '403', 'meeting', '2023-06-06', '15:00:00', '16:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `userType` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `address`, `age`, `email`, `password`, `userType`) VALUES
(1013, 'Riki', 'Nakatashiki', 'XXX', 30, 'riki@gmail.com', '$2y$10$Pgq6uiHXgiw5fe/9gXpZ/u/DybbyUapObB99zi3ZFXx57XnSmXEra', 'Admin'),
(1015, 'Dylan', 'Dylan', 'YYY', 20, 'dylan@gmail.com', '$2y$10$Vw0HQOyuNfSQBUMzBz3N2ea3gbRbm3OgWy9WZjTmtod8/GGpKBWs.', 'Admin'),
(1016, 'Monika', 'Monika', 'AAA', 20, 'monika@gmail.com', '$2y$10$s.5NbnAqL07swBP8gwXh6O7oiivC6z1.E5w3kInTugRTX09kwBaYO', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservedBooks`
--
ALTER TABLE `reservedBooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookId` (`bookId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `reservedRooms`
--
ALTER TABLE `reservedRooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomId` (`roomId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `reservedBooks`
--
ALTER TABLE `reservedBooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservedRooms`
--
ALTER TABLE `reservedRooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservedBooks`
--
ALTER TABLE `reservedBooks`
  ADD CONSTRAINT `reservedbooks_ibfk_1` FOREIGN KEY (`bookId`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `reservedbooks_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservedRooms`
--
ALTER TABLE `reservedRooms`
  ADD CONSTRAINT `reservedrooms_ibfk_1` FOREIGN KEY (`roomId`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `reservedrooms_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
