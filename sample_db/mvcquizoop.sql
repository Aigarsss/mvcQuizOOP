-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table mvcquizoop.answers: ~16 rows (approximately)
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` (`answer_id`, `answer`, `question_id`, `is_correct`) VALUES
	(1, 'Yes', 1, 1),
	(5, 'No', 1, 0),
	(7, 'Def not', 1, 0),
	(8, 'Nope', 1, 0),
	(9, 'Noo', 2, 0),
	(10, 'Yup', 2, 1),
	(11, 'Nono', 2, 0),
	(12, 'Naaw', 2, 0),
	(13, 'No o oooo', 3, 0),
	(14, 'Nup', 3, 0),
	(15, 'Yus', 3, 1),
	(16, 'Naaaa aaaaaw', 3, 0),
	(17, 'No o', 4, 0),
	(18, 'Nop', 4, 0),
	(19, 'no it is not', 4, 0),
	(20, 'Yes indeed it is', 4, 1),
	(21, 'Egypt', 5, 1),
	(22, 'Peru', 5, 0),
	(23, 'Riga', 5, 0),
	(24, 'London', 5, 0),
	(25, 'Sting', 6, 0),
	(26, 'Kurt Cobain', 6, 1),
	(27, 'Elvis', 6, 0),
	(28, 'Kurt Kobain', 6, 0),
	(29, 'Gold', 7, 0),
	(30, 'Bronze', 7, 0),
	(31, 'Silver', 7, 1),
	(33, 'Mud', 7, 0);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;

-- Dumping data for table mvcquizoop.questions: ~4 rows (approximately)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`question_id`, `question`, `test_id`) VALUES
	(1, 'Is this the first question?', 1),
	(2, 'Is this the second question?', 1),
	(3, 'Is this the third question?', 1),
	(4, 'Is this the forth and final question?', 1),
	(5, 'Where can you find the oldest ancient wonder of the world?', 2),
	(6, 'Who was the lead singer of Nirvana?', 2),
	(7, 'According to legend, what item is most effective against werewolves?', 2);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Dumping data for table mvcquizoop.scores: ~2 rows (approximately)
/*!40000 ALTER TABLE `scores` DISABLE KEYS */;
INSERT INTO `scores` (`score_id`, `name`, `score`, `date`, `test_id`) VALUES
	(1, 'Tester 1', 2, '2021-03-12 18:45:06', 1),
	(2, 'Tester 2', 3, '2021-03-12 18:45:14', 1),
	(3, 'Aigars', 2, '2021-03-12 19:45:52', 1),
	(4, 'aaa', 4, '2021-03-12 19:47:09', 1),
	(5, 'Abv', 9, '2021-03-12 19:58:16', 1),
	(6, 'aaa', 0, '2021-03-12 20:00:51', 2),
	(7, 'Steve', 2, '2021-03-13 08:44:45', 1),
	(8, 'Abv', 2, '2021-03-13 09:26:26', 2),
	(9, 'Abv', 2, '2021-03-13 09:31:52', 2),
	(10, 'Abv', 2, '2021-03-13 09:32:48', 2),
	(11, 'Abv', 2, '2021-03-13 09:32:54', 2),
	(12, 'Abv', 2, '2021-03-13 09:33:02', 2);
/*!40000 ALTER TABLE `scores` ENABLE KEYS */;

-- Dumping data for table mvcquizoop.tests: ~2 rows (approximately)
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` (`test_id`, `test_name`) VALUES
	(1, 'First test'),
	(2, 'Second test');
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
