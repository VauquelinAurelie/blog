-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `articles` (`id`, `title`, `content`, `publication`, `end_publication`, `rating`, `authors_id`) VALUES
(1,	'Novak Djokovic au sommet de son sport',	'Novak Djokovic a souffert pour se hisser en demi-finales de « son » Open d\'Australie. Il affrontera en finale Jannik Sinner ou Andrey Rublev.',	'2024-01-20',	'2024-01-24',	1,	1),
(2,	'la sélection des équipes pour les Mondiaux',	'La FF de ski a révélé l\'équipes de France pour les Mondiaux de biathlon, du 7 au 18/02. Il y aura :  L.Simon, L. Jeanmonnot et J. Braisaz-Bouchet .',	'2024-01-15',	'2024-01-17',	3,	4),
(3,	'Agriculteurs en colère',	'Le premier ministre, Gabriel Attal, a reçu, lundi, la longue liste de doléances du premier syndicat agricole français.',	'2024-01-19',	'2024-01-20',	4,	2);

INSERT INTO `articles_categories` (`articles_id`, `categories_id`) VALUES
(1,	2),
(2,	2),
(3,	3);

INSERT INTO `authors` (`id`, `name`, `firstname`, `pseudo`) VALUES
(1,	'Dulac',	'Matéo',	'Matéo'),
(2,	'Doe',	'Valentine',	'Valentine'),
(3,	'Dupont',	'Pierre',	'Pierrot'),
(4,	'Pascali',	'janne',	'Jannette'),
(5,	'Hermes',	'Jacques',	'Macarons');

INSERT INTO `categories` (`id`, `name`) VALUES
(1,	'loisirs'),
(2,	'Sport'),
(3,	'Société'),
(4,	'Politique');

INSERT INTO `comments` (`id`, `content`, `date_publication`, `authors_id`, `articles_id`) VALUES
(1,	'Bravo pour cette victoire',	'2024-01-23',	1,	1),
(2,	'Sans avis',	'2024-01-22',	5,	3);

-- 2024-01-24 10:27:09
