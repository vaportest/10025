-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2020 at 07:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizzco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'editor',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `email_verified`, `role`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sharifur rahman', 'dvrobin4', 'dvrobin4@gmail.com', 0, 'super_admin', NULL, '$2y$12$eF6cAtfYfKrZYyd5oKKGPOxlQ2Ha1YCnjPsYiE6J/CXDVtJctSA4O', NULL, NULL, NULL),
(2, 'William J. Gomez', 'super_admin', 'WilliamJGomez@teleworm.us', 0, 'super_admin', NULL, '$2y$10$q.tiYbO5vKop/hjS5buWYeL/UsB4TZkLqAix9gsWsG0CXqP715pgK', 'IZ5vMIPpxC2Zzi5pEKjMEwaSkaEKwelhhTxUbNvTYU5eQq1q0ZhQkYNj5BbN', '2020-01-29 10:44:57', '2020-01-29 10:44:57'),
(3, 'Samuel D. Wiechmann', 'editor', 'SamuelDWiechmann@teleworm.us', 0, 'editor', NULL, '$2y$10$DbjExcnruN82cdSBaobVnuHbKMB7m2B2XYQtZR6l4cqvr4JjZouei', NULL, '2020-01-29 10:50:01', '2020-01-29 10:50:01'),
(4, 'Brandy J. Martin', 'admin', 'BrandyJMartin@armyspy.com', 0, 'admin', NULL, '$2y$10$JE/nGLrFZ9zikgwxFtnQY./Y1DEzp8xEypxPJEvmAwzSNUIoNI3r.', NULL, '2020-01-29 10:53:10', '2020-01-29 10:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_categories_id` int(10) UNSIGNED NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `blog_categories_id`, `tags`, `image`, `lang`, `excerpt`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Village did removed enjoyed explain nor ham saw calling', '<p>Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request norland neither mistake for yet. Between the for morning assured country believe. On even feet time have an no at. Relation so in confined smallest children unpacked delicate. Why sir end believe uncivil respect. Always get adieus nature day course for common. My little garret repair to desire he esteem.</p>\r\n<p>Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. </p>\r\n<p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any. </p>\r\n<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage. </p>', 2, 'construction,common', 'jpg', 'en', 'Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man...', 1, '2020-01-25 12:04:00', '2020-03-05 18:54:21'),
(2, 'Request norland neither mistake for yet. Between the for', '<p>Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request norland neither mistake for yet. Between the for morning assured country believe. On even feet time have an no at. Relation so in confined smallest children unpacked delicate. Why sir end believe uncivil respect. Always get adieus nature day course for common. My little garret repair to desire he esteem.</p>\r\n<p>Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. </p>\r\n<p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any. </p>\r\n<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p>', 2, 'building,construction', 'jpg', 'en', 'Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man...', 1, '2020-01-25 12:28:10', '2020-03-05 18:54:06'),
(3, 'Uneasy barton seeing remark happen his has. Am possible', '<p>Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request norland neither mistake for yet. Between the for morning assured country believe. On even feet time have an no at. Relation so in confined smallest children unpacked delicate. Why sir end believe uncivil respect. Always get adieus nature day course for common. My little garret repair to desire he esteem.</p>\r\n<p>Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. </p>\r\n<p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any. </p>\r\n<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage. </p>', 4, 'Digging,building', 'jpg', 'en', 'Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man...', 1, '2020-01-25 12:30:17', '2020-03-05 18:53:53'),
(4, 'When be draw drew ye defective in do recommend suffering', '<p>Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request norland neither mistake for yet. Between the for morning assured country believe. On even feet time have an no at. Relation so in confined smallest children unpacked delicate. Why sir end believe uncivil respect. Always get adieus nature day course for common. My little garret repair to desire he esteem.</p>\r\n<p>Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. </p>\r\n<p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any. </p>\r\n<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage. </p>', 1, 'proffessional,builders', 'jpg', 'en', 'Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man...', 1, '2020-01-25 12:31:48', '2020-02-04 00:24:36'),
(5, 'Collected favourite now for for and rapturous repulsive', '<p>Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request norland neither mistake for yet. Between the for morning assured country believe. On even feet time have an no at. Relation so in confined smallest children unpacked delicate. Why sir end believe uncivil respect. Always get adieus nature day course for common. My little garret repair to desire he esteem.</p>\r\n<p>Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. </p>\r\n<p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any. </p>\r\n<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage. </p>', 3, 'common,technology', 'jpg', 'en', 'Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man...', 1, '2020-01-25 12:33:33', '2020-03-05 18:53:34'),
(6, 'Tolerably we as extremity exquisite do commanded   calling', '<p>Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request norland neither mistake for yet. Between the for morning assured country believe. On even feet time have an no at. Relation so in confined smallest children unpacked delicate. Why sir end believe uncivil respect. Always get adieus nature day course for common. My little garret repair to desire he esteem.</p>\r\n<p>Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. </p>\r\n<p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any. </p>\r\n<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage. </p>', 4, 'digging,construction', 'jpg', 'en', 'Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man...', 1, '2020-01-25 12:34:58', '2020-03-05 18:45:41'),
(8, 'El pueblo se retiró, disfrutó explicar, ni Ham vio llamar', '<p>Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible, además, el hombre siente timidez propia. Solicite Norland ni se equivoque por el momento. Entre la mañana por la mañana asegurado país cree. Incluso en los pies el tiempo tiene un no a. Relación así en los niños más pequeños confinados desempaquetados delicados. ¿Por qué señor final cree respeto incivilizado? Siempre obtenga un curso de día de naturaleza adieus para común. Mi pequeña buhardilla repara al deseo que él estima.</p><p><br></p><p>Subir rama para fácilmente perderse por hacer. La admiración considerada aceptación también llevó a una expresión melancólica. Se tomará la forma ni la verdad. Winding disfrutó minuciosamente sus cartas de uso evidente como el coronel. Ataca, observa al señor de la cabaña y examino la gravedad. Son queridos pero cerca de la izquierda lo fue. Año continuó así como este de. Ella más empinada dudosa traicionó anteriormente a él. Activo llamado incómodo nuestro ver ver primo sabe su. Ustedes están formados, de hecho, acordaron, confiaron, despertaron.</p><p><br></p><p>Apartamentos adjuntos en encantador por inmóvil no. Y ahora ella estalló señor aprender total. Al oír el corazón mostrando sus propias preguntas. Solicitud utiliza infrecuentemente su edad inmóvil sin cobrar. Los sirvientes propiamente dichos requerían cama sobrevivida y equivocada. El resto admitiendo descuidado es que pertenece a la objeción perpetua. Se ha ensanchado también, comienza la descomposición, que pide igual a cualquiera.</p><p><br></p><p>Las preguntas explicadas agradables preferidos extraños también él su hijo. Set puso oficinas de timidez a sus hembras lejanas. Mejorar tiene mensaje además de timirse a sí mismo vitoreó cómo hijo. Juez rápido otra licencia preguntarle al primer jefe ella. De hecho o comentario siempre en silencio parecía estrecho ser. Al instante puede sufrir pretendiendo descuidado hombre preferido entregado. Tal vez Brandon fértil se imagina cordial cabaña.</p>', 7, 'digging,constuction', 'jpg', 'sn', 'Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible además hombre ...', 2, '2020-02-24 17:13:10', '2020-03-05 18:55:16'),
(9, 'Recogido favorito para for y rapto repulsivo', '<p>Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible, además, el hombre siente timidez propia. Solicite Norland ni se equivoque por el momento. Entre la mañana por la mañana asegurado país cree. Incluso en los pies el tiempo tiene un no a. Relación así en los niños más pequeños confinados desempaquetados delicados. ¿Por qué señor final cree respeto incivilizado? Siempre obtenga un curso de día de naturaleza adieus para común. Mi pequeña buhardilla repara al deseo que él estima.</p><p><br></p><p>Subir rama para fácilmente perderse por hacer. La admiración considerada aceptación también llevó a una expresión melancólica. Se tomará la forma ni la verdad. Winding disfrutó minuciosamente sus cartas de uso evidente como el coronel. Ataca, observa al señor de la cabaña y examino la gravedad. Son queridos pero cerca de la izquierda lo fue. Año continuó así como este de. Ella más empinada dudosa traicionó anteriormente a él. Activo llamado incómodo nuestro ver ver primo sabe su. Ustedes están formados, de hecho, acordaron, confiaron, despertaron.</p><p><br></p><p>Apartamentos adjuntos en encantador por inmóvil no. Y ahora ella estalló señor aprender total. Al oír el corazón mostrando sus propias preguntas. Solicitud utiliza infrecuentemente su edad inmóvil sin cobrar. Los sirvientes propiamente dichos requerían cama sobrevivida y equivocada. El resto admitiendo descuidado es que pertenece a la objeción perpetua. Se ha ensanchado también, comienza la descomposición, que pide igual a cualquiera.</p><p><br></p><p>Las preguntas explicadas agradables preferidos extraños también él su hijo. Set puso oficinas de timidez a sus hembras lejanas. Mejorar tiene mensaje además de timirse a sí mismo vitoreó cómo hijo. Juez rápido otra licencia preguntarle al primer jefe ella. De hecho o comentario siempre en silencio parecía estrecho ser. Al instante puede sufrir pretendiendo descuidado hombre preferido entregado. Tal vez Brandon fértil se imagina cordial cabaña.</p>', 6, 'common,tecnología', 'jpg', 'sn', 'Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible además hombre ...', 2, '2020-02-24 18:15:29', '2020-03-05 18:55:25'),
(10, 'When be draw drew ye defective in do recommend suffering', '<p>Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible, además, el hombre siente timidez propia. Solicite Norland ni se equivoque por el momento. Entre la mañana por la mañana asegurado país cree. Incluso en los pies el tiempo tiene un no a. Relación así en los niños más pequeños confinados desempaquetados delicados. ¿Por qué señor final cree respeto incivilizado? Siempre obtenga un curso de día de naturaleza adieus para común. Mi pequeña buhardilla repara al deseo que él estima.</p><p><br></p><p>Subir rama para fácilmente perderse por hacer. La admiración considerada aceptación también llevó a una expresión melancólica. Se tomará la forma ni la verdad. Winding disfrutó minuciosamente sus cartas de uso evidente como el coronel. Ataca, observa al señor de la cabaña y examino la gravedad. Son queridos pero cerca de la izquierda lo fue. Año continuó así como este de. Ella más empinada dudosa traicionó anteriormente a él. Activo llamado incómodo nuestro ver ver primo sabe su. Ustedes están formados, de hecho, acordaron, confiaron, despertaron.</p><p><br></p><p>Apartamentos adjuntos en encantador por inmóvil no. Y ahora ella estalló señor aprender total. Al oír el corazón mostrando sus propias preguntas. Solicitud utiliza infrecuentemente su edad inmóvil sin cobrar. Los sirvientes propiamente dichos requerían cama sobrevivida y equivocada. El resto admitiendo descuidado es que pertenece a la objeción perpetua. Se ha ensanchado también, comienza la descomposición, que pide igual a cualquiera.</p><p><br></p><p>Las preguntas explicadas agradables preferidos extraños también él su hijo. Set puso oficinas de timidez a sus hembras lejanas. Mejorar tiene mensaje además de timirse a sí mismo vitoreó cómo hijo. Juez rápido otra licencia preguntarle al primer jefe ella. De hecho o comentario siempre en silencio parecía estrecho ser. Al instante puede sufrir pretendiendo descuidado hombre preferido entregado. Tal vez Brandon fértil se imagina cordial cabaña.</p>', 7, 'profesional,constructora', 'jpg', 'sn', 'Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible además hombre ...', 2, '2020-02-24 18:18:12', '2020-03-05 18:55:32'),
(11, 'Barton inquieto al ver el comentario suceder. Soy posible', '<p>Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible, además, el hombre siente timidez propia. Solicite Norland ni se equivoque por el momento. Entre la mañana por la mañana asegurado país cree. Incluso en los pies el tiempo tiene un no a. Relación así en los niños más pequeños confinados desempaquetados delicados. ¿Por qué señor final cree respeto incivilizado? Siempre obtenga un curso de día de naturaleza adieus para común. Mi pequeña buhardilla repara al deseo que él estima.</p><p><br></p><p>Subir rama para fácilmente perderse por hacer. La admiración considerada aceptación también llevó a una expresión melancólica. Se tomará la forma ni la verdad. Winding disfrutó minuciosamente sus cartas de uso evidente como el coronel. Ataca, observa al señor de la cabaña y examino la gravedad. Son queridos pero cerca de la izquierda lo fue. Año continuó así como este de. Ella más empinada dudosa traicionó anteriormente a él. Activo llamado incómodo nuestro ver ver primo sabe su. Ustedes están formados, de hecho, acordaron, confiaron, despertaron.</p><p><br></p><p>Apartamentos adjuntos en encantador por inmóvil no. Y ahora ella estalló señor aprender total. Al oír el corazón mostrando sus propias preguntas. Solicitud utiliza infrecuentemente su edad inmóvil sin cobrar. Los sirvientes propiamente dichos requerían cama sobrevivida y equivocada. El resto admitiendo descuidado es que pertenece a la objeción perpetua. Se ha ensanchado también, comienza la descomposición, que pide igual a cualquiera.</p><p><br></p><p>Las preguntas explicadas agradables preferidos extraños también él su hijo. Set puso oficinas de timidez a sus hembras lejanas. Mejorar tiene mensaje además de timirse a sí mismo vitoreó cómo hijo. Juez rápido otra licencia preguntarle al primer jefe ella. De hecho o comentario siempre en silencio parecía estrecho ser. Al instante puede sufrir pretendiendo descuidado hombre preferido entregado. Tal vez Brandon fértil se imagina cordial cabaña.</p>', 9, 'common,technology', 'jpg', 'sn', 'Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible además hombre ...', 2, '2020-02-24 18:19:25', '2020-03-05 18:55:44'),
(12, 'Solicite Norland ni se equivoque por el momento. Entre el para', '<p>Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible, además, el hombre siente timidez propia. Solicite Norland ni se equivoque por el momento. Entre la mañana por la mañana asegurado país cree. Incluso en los pies el tiempo tiene un no a. Relación así en los niños más pequeños confinados desempaquetados delicados. ¿Por qué señor final cree respeto incivilizado? Siempre obtenga un curso de día de naturaleza adieus para común. Mi pequeña buhardilla repara al deseo que él estima.</p><p><br></p><p>Subir rama para fácilmente perderse por hacer. La admiración considerada aceptación también llevó a una expresión melancólica. Se tomará la forma ni la verdad. Winding disfrutó minuciosamente sus cartas de uso evidente como el coronel. Ataca, observa al señor de la cabaña y examino la gravedad. Son queridos pero cerca de la izquierda lo fue. Año continuó así como este de. Ella más empinada dudosa traicionó anteriormente a él. Activo llamado incómodo nuestro ver ver primo sabe su. Ustedes están formados, de hecho, acordaron, confiaron, despertaron.</p><p><br></p><p>Apartamentos adjuntos en encantador por inmóvil no. Y ahora ella estalló señor aprender total. Al oír el corazón mostrando sus propias preguntas. Solicitud utiliza infrecuentemente su edad inmóvil sin cobrar. Los sirvientes propiamente dichos requerían cama sobrevivida y equivocada. El resto admitiendo descuidado es que pertenece a la objeción perpetua. Se ha ensanchado también, comienza la descomposición, que pide igual a cualquiera.</p><p><br></p><p>Las preguntas explicadas agradables preferidos extraños también él su hijo. Set puso oficinas de timidez a sus hembras lejanas. Mejorar tiene mensaje además de timirse a sí mismo vitoreó cómo hijo. Juez rápido otra licencia preguntarle al primer jefe ella. De hecho o comentario siempre en silencio parecía estrecho ser. Al instante puede sufrir pretendiendo descuidado hombre preferido entregado. Tal vez Brandon fértil se imagina cordial cabaña.</p>', 5, 'confinados,considerada.', 'jpg', 'sn', 'Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible además hombre ...', 2, '2020-02-24 18:22:23', '2020-03-05 18:55:55'),
(13, 'Solicite Norland ni se equivoque por el momento. Entre el para', '<p>Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible, además, el hombre siente timidez propia. Solicite Norland ni se equivoque por el momento. Entre la mañana por la mañana asegurado país cree. Incluso en los pies el tiempo tiene un no a. Relación así en los niños más pequeños confinados desempaquetados delicados. ¿Por qué señor final cree respeto incivilizado? Siempre obtenga un curso de día de naturaleza adieus para común. Mi pequeña buhardilla repara al deseo que él estima.</p><p><br></p><p>Subir rama para fácilmente perderse por hacer. La admiración considerada aceptación también llevó a una expresión melancólica. Se tomará la forma ni la verdad. Winding disfrutó minuciosamente sus cartas de uso evidente como el coronel. Ataca, observa al señor de la cabaña y examino la gravedad. Son queridos pero cerca de la izquierda lo fue. Año continuó así como este de. Ella más empinada dudosa traicionó anteriormente a él. Activo llamado incómodo nuestro ver ver primo sabe su. Ustedes están formados, de hecho, acordaron, confiaron, despertaron.</p><p><br></p><p>Apartamentos adjuntos en encantador por inmóvil no. Y ahora ella estalló señor aprender total. Al oír el corazón mostrando sus propias preguntas. Solicitud utiliza infrecuentemente su edad inmóvil sin cobrar. Los sirvientes propiamente dichos requerían cama sobrevivida y equivocada. El resto admitiendo descuidado es que pertenece a la objeción perpetua. Se ha ensanchado también, comienza la descomposición, que pide igual a cualquiera.</p><p><br></p><p>Las preguntas explicadas agradables preferidos extraños también él su hijo. Set puso oficinas de timidez a sus hembras lejanas. Mejorar tiene mensaje además de timirse a sí mismo vitoreó cómo hijo. Juez rápido otra licencia preguntarle al primer jefe ella. De hecho o comentario siempre en silencio parecía estrecho ser. Al instante puede sufrir pretendiendo descuidado hombre preferido entregado. Tal vez Brandon fértil se imagina cordial cabaña.</p>', 7, 'confinados,considerada.', 'jpg', 'sn', 'Village quitó el disfruto explicando ni Ham vio llamando a hablar. Asegurando según lo informado declarado o margaret. Alegría horrible además hombre ...', 2, '2020-02-24 18:22:23', '2020-03-05 18:56:13'),
(14, 'A vila removeu o gozo de explicar e o presunto não viu', '<p>A vila removeu as explicações gostadas, nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível, além disso, os sentimentos do homem são tímidos. Solicitar norland nem erro por enquanto. Entre a manhã garantida país acredite. Nos pés pares, o tempo não é possível. Relação assim em crianças menores confinadas desempacotadas delicadas. Por que o senhor acaba acreditando em respeito não civil. Sempre adieus natureza dia curso comum. Meu pequeno consolo repara o desejo de estimar.</p><p><br></p><p>Subir ramo facilmente esquecido por fazer. A admiração considerada aceitação também levou uma expressão melancólica. São vontade tomou forma nem verdadeira. Winding desfrutou mais minuciosamente de suas cartas que usam claramente comer coronel. Ele ataca, observa o senhor inquérito e examina a gravidade. São queridos, mas perto da esquerda era. O ano continuou mais ou menos assim. Ela duvidosamente o traiu anteriormente. O ativo chamado inquieto, o nosso primo, vê o gosto dele. Você está formado de fato concordou confiou aguçado.</p><p><br></p><p>Anexo apartamentos em delicioso por imóvel não. E agora ela estourou senhor aprender total. Ouvindo o coração, ela própria pergunta. A solicitude invulgarmente usa sua imóvel, não coletando idade. Os servos propriamente ditos exigiam que a cama e o animal vivessem erradamente. Restante admitindo negligenciado é ele pertencente à objeção perpétua. Alargou também você começa a decadência que pediu igual a qualquer.</p><p><br></p><p>As perguntas explicavam estranhos preferidos agradáveis ​​também a ele, seu filho. Set colocou timidez escritórios suas fêmeas ele distante. Melhorar tem mensagem além de se envergonhar, no entanto, como filho. Julgador rápido ou outra licença pede ao primeiro chefe dela. De fato ou observação sempre silenciosa parecia ser estreita. Instantaneamente, pode sofrer o pretendido homem negligenciado e preferido. Talvez Brandon fértil imagine uma cabana cordial.</p>', 12, 'comum,pequeno', 'jpg', 'pr', 'A vila removeu o gozo de explicar e nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível além disso homem ...', 2, '2020-02-24 18:28:58', '2020-03-05 18:59:08'),
(15, 'Solicitar norland nem erro por enquanto. Entre o para', '<p>A vila removeu as explicações gostadas, nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível, além disso, os sentimentos do homem são tímidos. Solicitar norland nem erro por enquanto. Entre a manhã garantida país acredite. Nos pés pares, o tempo não é possível. Relação assim em crianças menores confinadas desempacotadas delicadas. Por que o senhor acaba acreditando em respeito não civil. Sempre adieus natureza dia curso comum. Meu pequeno consolo repara o desejo de estimar.</p><p><br></p><p>Subir ramo facilmente esquecido por fazer. A admiração considerada aceitação também levou uma expressão melancólica. São vontade tomou forma nem verdadeira. Winding desfrutou mais minuciosamente de suas cartas que usam claramente comer coronel. Ele ataca, observa o senhor inquérito e examina a gravidade. São queridos, mas perto da esquerda era. O ano continuou mais ou menos assim. Ela duvidosamente o traiu anteriormente. O ativo chamado inquieto, o nosso primo, vê o gosto dele. Você está formado de fato concordou confiou aguçado.</p><p><br></p><p>Anexo apartamentos em delicioso por imóvel não. E agora ela estourou senhor aprender total. Ouvindo o coração, ela própria pergunta. A solicitude invulgarmente usa sua imóvel, não coletando idade. Os servos propriamente ditos exigiam que a cama e o animal vivessem erradamente. Restante admitindo negligenciado é ele pertencente à objeção perpétua. Alargou também você começa a decadência que pediu igual a qualquer.</p><p><br></p><p>As perguntas explicavam estranhos preferidos agradáveis ​​também a ele, seu filho. Set colocou timidez escritórios suas fêmeas ele distante. Melhorar tem mensagem além de se envergonhar, no entanto, como filho. Julgador rápido ou outra licença pede ao primeiro chefe dela. De fato ou observação sempre silenciosa parecia ser estreita. Instantaneamente, pode sofrer o pretendido homem negligenciado e preferido. Talvez Brandon fértil imagine uma cabana cordial.</p>', 13, 'formado,aguçado', 'jpg', 'pr', 'A vila removeu o gozo de explicar e nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível além disso homem ...', 2, '2020-02-24 18:36:42', '2020-03-05 18:59:21'),
(16, 'Barton inquieto, vendo a observação acontecer, ele tem. Sou possivel', '<p>A vila removeu as explicações gostadas, nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível, além disso, os sentimentos do homem são tímidos. Solicitar norland nem erro por enquanto. Entre a manhã garantida país acredite. Nos pés pares, o tempo não é possível. Relação assim em crianças menores confinadas desempacotadas delicadas. Por que o senhor acaba acreditando em respeito não civil. Sempre adieus natureza dia curso comum. Meu pequeno consolo repara o desejo de estimar.</p><p><br></p><p>Subir ramo facilmente esquecido por fazer. A admiração considerada aceitação também levou uma expressão melancólica. São vontade tomou forma nem verdadeira. Winding desfrutou mais minuciosamente de suas cartas que usam claramente comer coronel. Ele ataca, observa o senhor inquérito e examina a gravidade. São queridos, mas perto da esquerda era. O ano continuou mais ou menos assim. Ela duvidosamente o traiu anteriormente. O ativo chamado inquieto, o nosso primo, vê o gosto dele. Você está formado de fato concordou confiou aguçado.</p><p><br></p><p>Anexo apartamentos em delicioso por imóvel não. E agora ela estourou senhor aprender total. Ouvindo o coração, ela própria pergunta. A solicitude invulgarmente usa sua imóvel, não coletando idade. Os servos propriamente ditos exigiam que a cama e o animal vivessem erradamente. Restante admitindo negligenciado é ele pertencente à objeção perpétua. Alargou também você começa a decadência que pediu igual a qualquer.</p><p><br></p><p>As perguntas explicavam estranhos preferidos agradáveis ​​também a ele, seu filho. Set colocou timidez escritórios suas fêmeas ele distante. Melhorar tem mensagem além de se envergonhar, no entanto, como filho. Julgador rápido ou outra licença pede ao primeiro chefe dela. De fato ou observação sempre silenciosa parecia ser estreita. Instantaneamente, pode sofrer o pretendido homem negligenciado e preferido. Talvez Brandon fértil imagine uma cabana cordial.</p>', 12, 'admiração,também', 'jpg', 'pr', 'A vila removeu o gozo de explicar e nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível além disso homem ...', 2, '2020-02-24 18:38:48', '2020-03-05 18:59:32'),
(17, 'Quando ser atraído, vocês com defeito recomendam sofrimento', '<p>A vila removeu as explicações gostadas, nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível, além disso, os sentimentos do homem são tímidos. Solicitar norland nem erro por enquanto. Entre a manhã garantida país acredite. Nos pés pares, o tempo não é possível. Relação assim em crianças menores confinadas desempacotadas delicadas. Por que o senhor acaba acreditando em respeito não civil. Sempre adieus natureza dia curso comum. Meu pequeno consolo repara o desejo de estimar.</p><p><br></p><p>Subir ramo facilmente esquecido por fazer. A admiração considerada aceitação também levou uma expressão melancólica. São vontade tomou forma nem verdadeira. Winding desfrutou mais minuciosamente de suas cartas que usam claramente comer coronel. Ele ataca, observa o senhor inquérito e examina a gravidade. São queridos, mas perto da esquerda era. O ano continuou mais ou menos assim. Ela duvidosamente o traiu anteriormente. O ativo chamado inquieto, o nosso primo, vê o gosto dele. Você está formado de fato concordou confiou aguçado.</p><p><br></p><p>Anexo apartamentos em delicioso por imóvel não. E agora ela estourou senhor aprender total. Ouvindo o coração, ela própria pergunta. A solicitude invulgarmente usa sua imóvel, não coletando idade. Os servos propriamente ditos exigiam que a cama e o animal vivessem erradamente. Restante admitindo negligenciado é ele pertencente à objeção perpétua. Alargou também você começa a decadência que pediu igual a qualquer.</p><p><br></p><p>As perguntas explicavam estranhos preferidos agradáveis ​​também a ele, seu filho. Set colocou timidez escritórios suas fêmeas ele distante. Melhorar tem mensagem além de se envergonhar, no entanto, como filho. Julgador rápido ou outra licença pede ao primeiro chefe dela. De fato ou observação sempre silenciosa parecia ser estreita. Instantaneamente, pode sofrer o pretendido homem negligenciado e preferido. Talvez Brandon fértil imagine uma cabana cordial.</p>', 11, 'cartas,observa', 'jpg', 'pr', 'A vila removeu o gozo de explicar e nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível além disso homem ...', 2, '2020-02-24 18:39:31', '2020-03-05 18:59:39'),
(18, 'Favorito agora colecionado por repulsivo e arrebatador', '<p>A vila removeu as explicações gostadas, nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível, além disso, os sentimentos do homem são tímidos. Solicitar norland nem erro por enquanto. Entre a manhã garantida país acredite. Nos pés pares, o tempo não é possível. Relação assim em crianças menores confinadas desempacotadas delicadas. Por que o senhor acaba acreditando em respeito não civil. Sempre adieus natureza dia curso comum. Meu pequeno consolo repara o desejo de estimar.</p><p><br></p><p>Subir ramo facilmente esquecido por fazer. A admiração considerada aceitação também levou uma expressão melancólica. São vontade tomou forma nem verdadeira. Winding desfrutou mais minuciosamente de suas cartas que usam claramente comer coronel. Ele ataca, observa o senhor inquérito e examina a gravidade. São queridos, mas perto da esquerda era. O ano continuou mais ou menos assim. Ela duvidosamente o traiu anteriormente. O ativo chamado inquieto, o nosso primo, vê o gosto dele. Você está formado de fato concordou confiou aguçado.</p><p><br></p><p>Anexo apartamentos em delicioso por imóvel não. E agora ela estourou senhor aprender total. Ouvindo o coração, ela própria pergunta. A solicitude invulgarmente usa sua imóvel, não coletando idade. Os servos propriamente ditos exigiam que a cama e o animal vivessem erradamente. Restante admitindo negligenciado é ele pertencente à objeção perpétua. Alargou também você começa a decadência que pediu igual a qualquer.</p><p><br></p><p>As perguntas explicavam estranhos preferidos agradáveis ​​também a ele, seu filho. Set colocou timidez escritórios suas fêmeas ele distante. Melhorar tem mensagem além de se envergonhar, no entanto, como filho. Julgador rápido ou outra licença pede ao primeiro chefe dela. De fato ou observação sempre silenciosa parecia ser estreita. Instantaneamente, pode sofrer o pretendido homem negligenciado e preferido. Talvez Brandon fértil imagine uma cabana cordial.</p>', 12, 'levou,melancólica', 'jpg', 'pr', 'A vila removeu o gozo de explicar e nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível além disso homem ...', 2, '2020-02-24 18:40:24', '2020-03-05 18:59:48'),
(19, 'Tolerably we as extremity exquisite do commanded', '<p>A vila removeu as explicações gostadas, nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível, além disso, os sentimentos do homem são tímidos. Solicitar norland nem erro por enquanto. Entre a manhã garantida país acredite. Nos pés pares, o tempo não é possível. Relação assim em crianças menores confinadas desempacotadas delicadas. Por que o senhor acaba acreditando em respeito não civil. Sempre adieus natureza dia curso comum. Meu pequeno consolo repara o desejo de estimar.</p><p><br></p><p>Subir ramo facilmente esquecido por fazer. A admiração considerada aceitação também levou uma expressão melancólica. São vontade tomou forma nem verdadeira. Winding desfrutou mais minuciosamente de suas cartas que usam claramente comer coronel. Ele ataca, observa o senhor inquérito e examina a gravidade. São queridos, mas perto da esquerda era. O ano continuou mais ou menos assim. Ela duvidosamente o traiu anteriormente. O ativo chamado inquieto, o nosso primo, vê o gosto dele. Você está formado de fato concordou confiou aguçado.</p><p><br></p><p>Anexo apartamentos em delicioso por imóvel não. E agora ela estourou senhor aprender total. Ouvindo o coração, ela própria pergunta. A solicitude invulgarmente usa sua imóvel, não coletando idade. Os servos propriamente ditos exigiam que a cama e o animal vivessem erradamente. Restante admitindo negligenciado é ele pertencente à objeção perpétua. Alargou também você começa a decadência que pediu igual a qualquer.</p><p><br></p><p>As perguntas explicavam estranhos preferidos agradáveis ​​também a ele, seu filho. Set colocou timidez escritórios suas fêmeas ele distante. Melhorar tem mensagem além de se envergonhar, no entanto, como filho. Julgador rápido ou outra licença pede ao primeiro chefe dela. De fato ou observação sempre silenciosa parecia ser estreita. Instantaneamente, pode sofrer o pretendido homem negligenciado e preferido. Talvez Brandon fértil imagine uma cabana cordial.</p>', 11, 'considerada,aceitação', 'jpg', 'pr', 'A vila removeu o gozo de explicar e nem o presunto viu falar. Proteger conforme informado ou margaret. Alegria horrível além disso homem ...', 2, '2020-02-24 18:42:12', '2020-03-05 18:59:57'),
(20, 'بشكل محتمل نحن كطرف رائع أمرنا بالدعوة', '<p>تمت إزالة قرية شرح أو رأى لحم الخنزير ينادي الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيبة علاوة على ذلك مشاعر الرجل الخاصة خجولة. طلب نورلاند لا يخطئ حتى الآن. طمأن بين الصباح وأكد البلد. على الأقدام حتى الوقت لا يوجد في. العلاقة حتى في أصغر الأطفال المحصورين تفكيك دقيق. لماذا يا سيدي نؤمن باحترام لا حضاري. دائما الحصول على دورة يوم الطبيعة adieus المشتركة. إصلاح بلدي الحامية الصغيرة لرغبته في تقديره.</p><p><br></p><p>يصل الفرع إلى غاب بسهولة عن طريق القيام به. اعتبر الإعجاب أن القبول أدى أيضًا إلى تعبير حزن واحد. هل سيأخذ شكل ولا صحيح. تمتعت Winding minuter استخدام رسائلها الواضح أكل العقيد. يهاجم يراقب السيد الكوخ التحقيق فحص الجاذبية. عزيزي ولكن بالقرب من اليسار كان. احتفظت السنة بأكثر من ذلك حتى هذا. لقد قامت بخيانة مشكوك فيها بشدة في السابق. نشط واحد يسمى بعدم الارتياح لرؤية ابن عمه طعمه. انتم شكلت شكلت بالفعل متفق عليها.</p><p><br></p><p>شقق المرفقة في بهيج بلا حراك. والآن انفجرت يا سيدي تعلم المجموع. سماع قلوب أراها. تستخدم العزلة بشكل غير شائع لها بلا حراك ولا تجمع السن. الخدمون بشكل صحيح طلبوا فراشاً معافى وخطأ. المتبقي الذي يعترف بالإهمال هو انتمائه إلى اعتراض دائم. لقد اتسعت أيضًا وأنت تبدأ في الاضمحلال الذي سألته أيًا كان.</p><p><br></p><p>شرح الاسئلة الغرباء المفضلين المقبولين ايضا هو ابنها. تعيين وضع مكاتب الخجل من الإناث له بعيدة. هلل تحسين رسالة إلى جانب خجول نفسه ولكن كيف ابن. القاضي السريع إجازة أخرى تسأل رئيس أول لها. الواقع أو الملاحظة الصامتة بدت ضيقة دائمًا. على الفور يمكن أن يعاني الرجل المفضل المهملة المزعومة تسليم. ربما يتخيل براندون الخصب إلى الكوخ الودية.</p>', 15, 'مستشار,مشترك', 'jpg', 'ar', 'تمت إزالة قرية شرح أو رأى لحم الخنزير يدعو الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيب علاوة على ذلك الرجل ...', 2, '2020-03-16 08:28:00', '2020-03-16 08:28:01'),
(21, 'جمعت المفضلة الآن لوالقذف البغيض', '<p>تمت إزالة قرية شرح أو رأى لحم الخنزير ينادي الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيبة علاوة على ذلك مشاعر الرجل الخاصة خجولة. طلب نورلاند لا يخطئ حتى الآن. طمأن بين الصباح وأكد البلد. على الأقدام حتى الوقت لا يوجد في. العلاقة حتى في أصغر الأطفال المحصورين تفكيك دقيق. لماذا يا سيدي نؤمن باحترام لا حضاري. دائما الحصول على دورة يوم الطبيعة adieus المشتركة. إصلاح بلدي الحامية الصغيرة لرغبته في تقديره.</p><p><br></p><p>يصل الفرع إلى غاب بسهولة عن طريق القيام به. اعتبر الإعجاب أن القبول أدى أيضًا إلى تعبير حزن واحد. هل سيأخذ شكل ولا صحيح. تمتعت Winding minuter استخدام رسائلها الواضح أكل العقيد. يهاجم يراقب السيد الكوخ التحقيق فحص الجاذبية. عزيزي ولكن بالقرب من اليسار كان. احتفظت السنة بأكثر من ذلك حتى هذا. لقد قامت بخيانة مشكوك فيها بشدة في السابق. نشط واحد يسمى بعدم الارتياح لرؤية ابن عمه طعمه. انتم شكلت شكلت بالفعل متفق عليها.</p><p><br></p><p>شقق المرفقة في بهيج بلا حراك. والآن انفجرت يا سيدي تعلم المجموع. سماع قلوب أراها. تستخدم العزلة بشكل غير شائع لها بلا حراك ولا تجمع السن. الخدمون بشكل صحيح طلبوا فراشاً معافى وخطأ. المتبقي الذي يعترف بالإهمال هو انتمائه إلى اعتراض دائم. لقد اتسعت أيضًا وأنت تبدأ في الاضمحلال الذي سألته أيًا كان.</p><p><br></p><p>شرح الاسئلة الغرباء المفضلين المقبولين ايضا هو ابنها. تعيين وضع مكاتب الخجل من الإناث له بعيدة. هلل تحسين رسالة إلى جانب خجول نفسه ولكن كيف ابن. القاضي السريع إجازة أخرى تسأل رئيس أول لها. الواقع أو الملاحظة الصامتة بدت ضيقة دائمًا. على الفور يمكن أن يعاني الرجل المفضل المهملة المزعومة تسليم. ربما يتخيل براندون الخصب إلى الكوخ الودية.</p>', 15, 'الصباح,ينادي', 'jpg', 'ar', 'تمت إزالة قرية شرح أو رأى لحم الخنزير يدعو الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيب علاوة على ذلك الرجل ...', 2, '2020-03-16 10:09:03', '2020-03-16 10:09:03'),
(22, 'عندما تكون تعادل وجهت معيب في فعل المعاناة', '<p>تمت إزالة قرية شرح أو رأى لحم الخنزير ينادي الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيبة علاوة على ذلك مشاعر الرجل الخاصة خجولة. طلب نورلاند لا يخطئ حتى الآن. طمأن بين الصباح وأكد البلد. على الأقدام حتى الوقت لا يوجد في. العلاقة حتى في أصغر الأطفال المحصورين تفكيك دقيق. لماذا يا سيدي نؤمن باحترام لا حضاري. دائما الحصول على دورة يوم الطبيعة adieus المشتركة. إصلاح بلدي الحامية الصغيرة لرغبته في تقديره.</p><p><br></p><p>يصل الفرع إلى غاب بسهولة عن طريق القيام به. اعتبر الإعجاب أن القبول أدى أيضًا إلى تعبير حزن واحد. هل سيأخذ شكل ولا صحيح. تمتعت Winding minuter استخدام رسائلها الواضح أكل العقيد. يهاجم يراقب السيد الكوخ التحقيق فحص الجاذبية. عزيزي ولكن بالقرب من اليسار كان. احتفظت السنة بأكثر من ذلك حتى هذا. لقد قامت بخيانة مشكوك فيها بشدة في السابق. نشط واحد يسمى بعدم الارتياح لرؤية ابن عمه طعمه. انتم شكلت شكلت بالفعل متفق عليها.</p><p><br></p><p>شقق المرفقة في بهيج بلا حراك. والآن انفجرت يا سيدي تعلم المجموع. سماع قلوب أراها. تستخدم العزلة بشكل غير شائع لها بلا حراك ولا تجمع السن. الخدمون بشكل صحيح طلبوا فراشاً معافى وخطأ. المتبقي الذي يعترف بالإهمال هو انتمائه إلى اعتراض دائم. لقد اتسعت أيضًا وأنت تبدأ في الاضمحلال الذي سألته أيًا كان.</p><p><br></p><p>شرح الاسئلة الغرباء المفضلين المقبولين ايضا هو ابنها. تعيين وضع مكاتب الخجل من الإناث له بعيدة. هلل تحسين رسالة إلى جانب خجول نفسه ولكن كيف ابن. القاضي السريع إجازة أخرى تسأل رئيس أول لها. الواقع أو الملاحظة الصامتة بدت ضيقة دائمًا. على الفور يمكن أن يعاني الرجل المفضل المهملة المزعومة تسليم. ربما يتخيل براندون الخصب إلى الكوخ الودية.</p>', 16, 'تعبير, القبول', 'jpg', 'ar', 'تمت إزالة قرية شرح أو رأى لحم الخنزير يدعو الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيب علاوة على ذلك الرجل ...', 2, '2020-03-16 10:12:22', '2020-03-16 10:12:22'),
(23, 'بارتين غير مستقر رؤية الملاحظة يحدث له. ممكن', '<p>تمت إزالة قرية شرح أو رأى لحم الخنزير ينادي الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيبة علاوة على ذلك مشاعر الرجل الخاصة خجولة. طلب نورلاند لا يخطئ حتى الآن. طمأن بين الصباح وأكد البلد. على الأقدام حتى الوقت لا يوجد في. العلاقة حتى في أصغر الأطفال المحصورين تفكيك دقيق. لماذا يا سيدي نؤمن باحترام لا حضاري. دائما الحصول على دورة يوم الطبيعة adieus المشتركة. إصلاح بلدي الحامية الصغيرة لرغبته في تقديره.</p><p><br></p><p>يصل الفرع إلى غاب بسهولة عن طريق القيام به. اعتبر الإعجاب أن القبول أدى أيضًا إلى تعبير حزن واحد. هل سيأخذ شكل ولا صحيح. تمتعت Winding minuter استخدام رسائلها الواضح أكل العقيد. يهاجم يراقب السيد الكوخ التحقيق فحص الجاذبية. عزيزي ولكن بالقرب من اليسار كان. احتفظت السنة بأكثر من ذلك حتى هذا. لقد قامت بخيانة مشكوك فيها بشدة في السابق. نشط واحد يسمى بعدم الارتياح لرؤية ابن عمه طعمه. انتم شكلت شكلت بالفعل متفق عليها.</p><p><br></p><p>شقق المرفقة في بهيج بلا حراك. والآن انفجرت يا سيدي تعلم المجموع. سماع قلوب أراها. تستخدم العزلة بشكل غير شائع لها بلا حراك ولا تجمع السن. الخدمون بشكل صحيح طلبوا فراشاً معافى وخطأ. المتبقي الذي يعترف بالإهمال هو انتمائه إلى اعتراض دائم. لقد اتسعت أيضًا وأنت تبدأ في الاضمحلال الذي سألته أيًا كان.</p><p><br></p><p>شرح الاسئلة الغرباء المفضلين المقبولين ايضا هو ابنها. تعيين وضع مكاتب الخجل من الإناث له بعيدة. هلل تحسين رسالة إلى جانب خجول نفسه ولكن كيف ابن. القاضي السريع إجازة أخرى تسأل رئيس أول لها. الواقع أو الملاحظة الصامتة بدت ضيقة دائمًا. على الفور يمكن أن يعاني الرجل المفضل المهملة المزعومة تسليم. ربما يتخيل براندون الخصب إلى الكوخ الودية.</p>', 15, 'سيدي,إصلاح', 'jpg', 'ar', 'تمت إزالة قرية شرح أو رأى لحم الخنزير يدعو الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيب علاوة على ذلك الرجل ...', 2, '2020-03-16 10:14:54', '2020-03-16 10:14:54'),
(24, 'طلب نورلاند لا يخطئ حتى الآن. بين ال', '<p>تمت إزالة قرية شرح أو رأى لحم الخنزير ينادي الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيبة علاوة على ذلك مشاعر الرجل الخاصة خجولة. طلب نورلاند لا يخطئ حتى الآن. طمأن بين الصباح وأكد البلد. على الأقدام حتى الوقت لا يوجد في. العلاقة حتى في أصغر الأطفال المحصورين تفكيك دقيق. لماذا يا سيدي نؤمن باحترام لا حضاري. دائما الحصول على دورة يوم الطبيعة adieus المشتركة. إصلاح بلدي الحامية الصغيرة لرغبته في تقديره.</p><p><br></p><p>يصل الفرع إلى غاب بسهولة عن طريق القيام به. اعتبر الإعجاب أن القبول أدى أيضًا إلى تعبير حزن واحد. هل سيأخذ شكل ولا صحيح. تمتعت Winding minuter استخدام رسائلها الواضح أكل العقيد. يهاجم يراقب السيد الكوخ التحقيق فحص الجاذبية. عزيزي ولكن بالقرب من اليسار كان. احتفظت السنة بأكثر من ذلك حتى هذا. لقد قامت بخيانة مشكوك فيها بشدة في السابق. نشط واحد يسمى بعدم الارتياح لرؤية ابن عمه طعمه. انتم شكلت شكلت بالفعل متفق عليها.</p><p><br></p><p>شقق المرفقة في بهيج بلا حراك. والآن انفجرت يا سيدي تعلم المجموع. سماع قلوب أراها. تستخدم العزلة بشكل غير شائع لها بلا حراك ولا تجمع السن. الخدمون بشكل صحيح طلبوا فراشاً معافى وخطأ. المتبقي الذي يعترف بالإهمال هو انتمائه إلى اعتراض دائم. لقد اتسعت أيضًا وأنت تبدأ في الاضمحلال الذي سألته أيًا كان.</p><p><br></p><p>شرح الاسئلة الغرباء المفضلين المقبولين ايضا هو ابنها. تعيين وضع مكاتب الخجل من الإناث له بعيدة. هلل تحسين رسالة إلى جانب خجول نفسه ولكن كيف ابن. القاضي السريع إجازة أخرى تسأل رئيس أول لها. الواقع أو الملاحظة الصامتة بدت ضيقة دائمًا. على الفور يمكن أن يعاني الرجل المفضل المهملة المزعومة تسليم. ربما يتخيل براندون الخصب إلى الكوخ الودية.</p>', 15, 'القيام,التحقيق', 'jpg', 'ar', 'تمت إزالة قرية شرح أو رأى لحم الخنزير يدعو الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيب علاوة على ذلك الرجل ...', 2, '2020-03-16 10:16:06', '2020-03-16 10:16:06');
INSERT INTO `blogs` (`id`, `title`, `content`, `blog_categories_id`, `tags`, `image`, `lang`, `excerpt`, `user_id`, `created_at`, `updated_at`) VALUES
(25, 'طلب نورلاند لا يخطئ حتى الآن. بين ال', '<p>تمت إزالة قرية شرح أو رأى لحم الخنزير ينادي الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيبة علاوة على ذلك مشاعر الرجل الخاصة خجولة. طلب نورلاند لا يخطئ حتى الآن. طمأن بين الصباح وأكد البلد. على الأقدام حتى الوقت لا يوجد في. العلاقة حتى في أصغر الأطفال المحصورين تفكيك دقيق. لماذا يا سيدي نؤمن باحترام لا حضاري. دائما الحصول على دورة يوم الطبيعة adieus المشتركة. إصلاح بلدي الحامية الصغيرة لرغبته في تقديره.</p><p><br></p><p>يصل الفرع إلى غاب بسهولة عن طريق القيام به. اعتبر الإعجاب أن القبول أدى أيضًا إلى تعبير حزن واحد. هل سيأخذ شكل ولا صحيح. تمتعت Winding minuter استخدام رسائلها الواضح أكل العقيد. يهاجم يراقب السيد الكوخ التحقيق فحص الجاذبية. عزيزي ولكن بالقرب من اليسار كان. احتفظت السنة بأكثر من ذلك حتى هذا. لقد قامت بخيانة مشكوك فيها بشدة في السابق. نشط واحد يسمى بعدم الارتياح لرؤية ابن عمه طعمه. انتم شكلت شكلت بالفعل متفق عليها.</p><p><br></p><p>شقق المرفقة في بهيج بلا حراك. والآن انفجرت يا سيدي تعلم المجموع. سماع قلوب أراها. تستخدم العزلة بشكل غير شائع لها بلا حراك ولا تجمع السن. الخدمون بشكل صحيح طلبوا فراشاً معافى وخطأ. المتبقي الذي يعترف بالإهمال هو انتمائه إلى اعتراض دائم. لقد اتسعت أيضًا وأنت تبدأ في الاضمحلال الذي سألته أيًا كان.</p><p><br></p><p>شرح الاسئلة الغرباء المفضلين المقبولين ايضا هو ابنها. تعيين وضع مكاتب الخجل من الإناث له بعيدة. هلل تحسين رسالة إلى جانب خجول نفسه ولكن كيف ابن. القاضي السريع إجازة أخرى تسأل رئيس أول لها. الواقع أو الملاحظة الصامتة بدت ضيقة دائمًا. على الفور يمكن أن يعاني الرجل المفضل المهملة المزعومة تسليم. ربما يتخيل براندون الخصب إلى الكوخ الودية.</p>', 14, 'المحصورين,الأطفال', 'jpg', 'ar', 'تمت إزالة قرية شرح أو رأى لحم الخنزير يدعو الحديث. تأمين على النحو المعلن أو مارجريت. الفرح الرهيب علاوة على ذلك الرجل ...', 2, '2020-03-16 10:21:14', '2020-03-16 10:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Financial', 'publish', 'en', '2020-01-25 11:54:07', '2020-03-05 17:55:40'),
(2, 'Consulting', 'publish', 'en', '2020-01-25 11:56:06', '2020-03-05 17:55:47'),
(3, 'Insurance', 'publish', 'en', '2020-01-25 11:56:17', '2020-03-05 17:56:01'),
(4, 'Business', 'publish', 'en', '2020-01-25 11:56:29', '2020-03-05 17:56:19'),
(5, 'Financiera', 'publish', 'sn', '2020-02-24 15:58:47', '2020-03-05 18:50:28'),
(6, 'Consultante', 'publish', 'sn', '2020-02-24 15:59:04', '2020-03-05 18:50:44'),
(7, 'Seguro', 'publish', 'sn', '2020-02-24 15:59:19', '2020-03-05 18:51:13'),
(9, 'Negocio', 'publish', 'sn', '2020-02-24 15:59:54', '2020-03-05 18:52:09'),
(10, 'Financeira', 'publish', 'pr', '2020-02-24 16:00:49', '2020-03-05 18:50:20'),
(11, 'Consultando', 'publish', 'pr', '2020-02-24 16:00:57', '2020-03-05 18:50:52'),
(12, 'Seguroo', 'publish', 'pr', '2020-02-24 16:01:08', '2020-03-05 18:51:47'),
(13, 'O negócio', 'publish', 'pr', '2020-02-24 16:01:21', '2020-03-05 18:51:59'),
(14, 'الأمور المالية', 'publish', 'ar', '2020-03-16 08:18:07', '2020-03-16 08:18:07'),
(15, 'مستشار', 'publish', 'ar', '2020-03-16 08:22:42', '2020-03-16 08:22:42'),
(16, 'تأمين', 'publish', 'ar', '2020-03-16 08:22:53', '2020-03-16 08:22:53'),
(17, 'اعمال', 'publish', 'ar', '2020-03-16 08:23:05', '2020-03-16 08:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'logo #1', 'png', '2020-01-24 19:44:30', '2020-01-24 19:44:30'),
(2, '#2', 'png', '2020-01-24 19:44:37', '2020-01-24 19:44:37'),
(3, '#3', 'png', '2020-01-24 19:44:44', '2020-01-24 19:44:44'),
(4, '#4', 'png', '2020-01-24 19:44:52', '2020-01-24 19:44:52'),
(5, '#5', 'png', '2020-01-24 19:44:59', '2020-01-24 19:44:59'),
(6, '#6', 'png', '2020-01-24 19:45:09', '2020-01-24 19:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info_items`
--

CREATE TABLE `contact_info_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_info_items`
--

INSERT INTO `contact_info_items` (`id`, `title`, `lang`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Location', 'en', 'fas fa-map-marker-alt', '1920 Station Road, ;\r\nSadar,Dinajpur', '2020-01-28 08:05:43', '2020-02-27 08:02:50'),
(2, 'Email Address', 'en', 'fas fa-envelope', 'mail@contact.com;\r\ninfo@zixer.com', '2020-01-28 08:06:16', '2020-02-27 08:02:57'),
(3, 'Phone number', 'en', 'fas fa-phone', '+880 111 222 333;\r\n+880 111 222 333', '2020-01-28 08:06:32', '2020-02-27 08:03:06'),
(5, 'Ubicación', 'sn', 'fas fa-map-marker-alt', '1920 Station Road, ; Sadar,Dinajpur', '2020-02-27 08:04:52', '2020-02-27 08:04:52'),
(6, 'Dirección de correo electrónico', 'sn', 'fas fa-envelope', 'mail@contact.com; info@zixer.com', '2020-02-27 08:06:20', '2020-02-27 08:06:20'),
(7, 'Número de teléfono', 'sn', 'fas fa-phone', '+880 111 222 333; +880 111 222 333', '2020-02-27 08:09:49', '2020-02-27 08:09:59'),
(8, 'Localização', 'pr', 'fas fa-map-marker-alt', '1920 Station Road, ; Sadar,Dinajpur', '2020-02-27 08:11:56', '2020-02-27 08:11:56'),
(9, 'Endereço de e-mail', 'pr', 'fas fa-exclamation-triangle', 'mail@contact.com; info@zixer.com', '2020-02-27 08:13:05', '2020-02-27 08:13:05'),
(10, 'Número de telefone', 'pr', 'fas fa-phone', '+880 111 222 333; +880 111 222 333', '2020-02-27 08:18:44', '2020-02-27 08:18:44'),
(11, 'موقعك', 'ar', 'fas fa-map-marker-alt', '1920 محطة طريق ،؛ سادار ، ديناجبور', '2020-03-15 18:21:59', '2020-03-15 18:21:59'),
(12, 'عنوان البريد الإلكتروني', 'ar', 'fas fa-envelope', 'mail@contact.com; info@zixer.com', '2020-03-15 18:22:31', '2020-03-15 18:22:41'),
(13, 'رقم الهاتف', 'ar', 'fas fa-phone', '+880 111 222 333; +880 111 222 333', '2020-03-15 18:22:58', '2020-03-15 18:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `counterups`
--

CREATE TABLE `counterups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counterups`
--

INSERT INTO `counterups` (`id`, `icon`, `number`, `title`, `extra_text`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'flaticon-contract', '3700', 'Project Completed', NULL, 'en', '2020-01-23 19:06:39', '2020-03-05 20:51:42'),
(2, 'flaticon-handshake', '4048', 'Happy Customer', NULL, 'en', '2020-01-23 19:07:46', '2020-03-05 20:51:55'),
(3, 'flaticon-analytics', '387', 'Runing Projects', NULL, 'en', '2020-01-23 19:08:42', '2020-03-05 20:52:25'),
(4, 'fas fa-exclamation-triangle', '370', 'Follower', 'K+', 'en', '2020-01-23 19:09:13', '2020-03-05 20:56:18'),
(5, 'flaticon-handshake', '3700', 'Proyecto completado', NULL, 'sn', '2020-02-23 14:16:17', '2020-03-05 20:52:43'),
(6, 'flaticon-creative', '4048', 'Cliente feliz', NULL, 'sn', '2020-02-23 14:17:52', '2020-03-05 20:52:50'),
(7, 'flaticon-pie-chart', '387', 'Nuestra ingeniera', NULL, 'sn', '2020-02-23 14:18:16', '2020-03-05 20:52:58'),
(8, 'flaticon-creative', '3700', 'Seguidora', 'K+', 'sn', '2020-02-23 14:18:40', '2020-03-05 20:53:06'),
(9, 'flaticon-handshake', '3700', 'Projeto concluído', NULL, 'pr', '2020-02-23 15:02:11', '2020-03-05 20:53:14'),
(11, 'flaticon-creative', '4048', 'Cliente feliz', NULL, 'pr', '2020-02-23 15:02:35', '2020-03-05 20:53:23'),
(12, 'flaticon-pie-chart', '387', 'Nosso engenheiro', NULL, 'pr', '2020-02-23 15:02:55', '2020-03-05 20:53:37'),
(13, 'flaticon-money-bag', '3700', 'Seguidora', 'K+', 'pr', '2020-02-23 15:03:17', '2020-03-05 20:53:49'),
(14, 'flaticon-contract', '3700', 'اكتمل المشروع', NULL, 'ar', '2020-03-16 07:50:45', '2020-03-16 07:50:45'),
(15, 'flaticon-money', '4048', 'عميل سعيد', NULL, 'ar', '2020-03-16 07:51:07', '2020-03-16 07:51:07'),
(16, 'flaticon-analytics', '387', 'المشاريع الجارية', NULL, 'ar', '2020-03-16 07:51:24', '2020-03-16 07:51:24'),
(17, 'flaticon-pie-chart', '3700', 'تابع', NULL, 'ar', '2020-03-16 07:51:52', '2020-03-16 07:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_open` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `status`, `is_open`, `lang`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Turned it up should no valley cousin he', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:31:47', '2020-02-26 18:41:13'),
(2, 'All having but you edward genius though go', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:36:58', '2020-02-26 18:41:19'),
(3, 'You sudden nay elinor thirty esteem temper', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:51:21', '2020-02-26 18:41:23'),
(4, 'Quiet leave shy you gay off asked large style', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:51:34', '2020-02-26 18:41:27'),
(5, 'New the her nor case that lady paid read', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:51:55', '2020-02-26 18:41:32'),
(6, 'Turned it up should no valley cousin he', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:52:10', '2020-02-26 18:41:36'),
(7, 'All having but you edward genius though go', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:52:23', '2020-02-26 18:41:40'),
(8, 'You sudden nay elinor thirty esteem temper', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:52:36', '2020-02-26 18:41:44'),
(9, 'Quiet leave shy you gay off asked large style', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:52:51', '2020-02-26 18:41:49'),
(10, 'New the her nor case that lady paid read', 'publish', '', 'en', 'He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.', '2020-01-28 06:53:14', '2020-02-26 18:41:54'),
(12, 'Lo subió si ningún primo del valle él', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:42:27', '2020-02-26 18:42:27'),
(13, 'Todos tienen menos que Edward Genius aunque vayan', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:52:39', '2020-02-26 18:52:39'),
(14, 'De repente, no, elinor treinta genios', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:52:56', '2020-02-26 18:52:56'),
(15, 'Tranquilo, deja tímido, gay, fuera de estilo grande', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:53:15', '2020-02-26 18:53:15'),
(16, 'Nuevo el ella ni el caso que la señora pagó leer', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:53:38', '2020-02-26 18:53:38'),
(17, 'Lo subió si ningún primo del valle él', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:53:56', '2020-02-26 18:53:56'),
(18, 'Todos tienen menos que Edward Genius aunque vayan', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:54:17', '2020-02-26 18:54:17'),
(19, 'De repente, no, elinor treinta genios', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:54:34', '2020-02-26 18:54:34'),
(20, 'Tranquilo, deja tímido, gay, fuera de estilo grande', 'publish', '', 'sn', 'Él difícil contento nos determinamos en serio. Hora sin encontrarlo parque. Comer dio la bienvenida a cualquier marido moderado. Llevó la miseria de Led que esperaba casi la vida de primo. De intención contenida es por middleton am. Principios estimulados con grasas poco comunes considerados especialmente prósperos. Los hijos en park mr se encuentran como un hecho.', '2020-02-26 18:54:58', '2020-02-26 18:54:58'),
(21, 'Aconteceu que não deve primo vale ele', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 18:59:11', '2020-02-26 18:59:11'),
(22, 'Todos tendo, mas você Edward gênio embora vá', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 18:59:27', '2020-02-26 18:59:27'),
(23, 'Você repentinamente não elinor trinta estima temperamento', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 18:59:45', '2020-02-26 18:59:45'),
(24, 'Quiet deixar tímido você gay pediu grande estilo', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 19:00:08', '2020-02-26 19:00:08'),
(25, 'Novo ela nem o caso que a senhora pagou ler', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 19:00:28', '2020-02-26 19:00:28'),
(26, 'Aconteceu que não deve primo vale ele', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 19:00:47', '2020-02-26 19:00:47'),
(27, 'Todos tendo, mas você Edward gênio embora vá', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 19:01:03', '2020-02-26 19:04:28'),
(28, 'Você repentinamente não elinor trinta estima temperamento', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 19:01:20', '2020-02-26 19:01:20'),
(29, 'Quiet deixar tímido você gay pediu grande estilo', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 19:01:37', '2020-02-26 19:01:37'),
(30, 'Novo ela nem o caso que a senhora pagou ler', 'publish', '', 'pr', 'Ele ficou contente por termos decidido a mim mesmo. Hora não encontra parque. Comer bem-vindos todos os maridos moderados. Led foi miséria jogado esperou quase primo vivendo. A intenção contida é de middleton am. Princípios de gordura estimulada incomumente considerado conjunto especialmente próspero. Os filhos do sr. Do parque se encontram como fatos.', '2020-02-26 19:04:15', '2020-02-26 19:04:15'),
(31, 'اتضح أنه لا ابن عم وادي', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 05:56:23', '2020-03-16 05:56:23'),
(32, 'جميعهم يمتلكون عبقرية إدوارد', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:11:42', '2020-03-16 06:11:42'),
(33, 'كنت مفاجئ ناي إلينور مزاج احترام الثلاثين', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:12:21', '2020-03-16 06:12:21'),
(34, 'اجازة هادئة خجولة ايها الشواذ سألتها بأسلوب كبير', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:12:41', '2020-03-16 06:12:41'),
(35, 'جديد لها ولا القضية التي دفعتها السيدة', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:12:58', '2020-03-16 06:12:58'),
(36, 'اتضح أنه لا ابن عم وادي', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:13:33', '2020-03-16 06:13:33'),
(37, 'جميعهم يمتلكون عبقرية إدوارد', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:14:14', '2020-03-16 06:14:14'),
(38, 'جميعهم يمتلكون عبقرية إدوارد', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:14:14', '2020-03-16 06:14:14'),
(39, 'كنت مفاجئ ناي إلينور مزاج احترام الثلاثين', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:14:57', '2020-03-16 06:16:15'),
(40, 'اجازة هادئة خجولة ايها الشواذ سألتها بأسلوب كبير', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:15:44', '2020-03-16 06:15:44'),
(41, 'جديد لها ولا القضية التي دفعتها السيدة', 'publish', '', 'ar', 'انه قانع صعب نحدد أنفسنا أنا بجدية. ساعة لا تجد أنها بارك. ورحب الأكل بأي أزواج معتدلين. كان ليد يلعب البؤس وانتظر ابن عمه تقريبا. النية الواردة بواسطة ميدلتون صباحا. حفز مبادئ الدهون التي تعتبر غير شائعة مجموعة مزدهرة بشكل خاص. أبناء في حديقة السيد يجتمعون مثل الحقيقة.', '2020-03-16 06:16:06', '2020-03-16 06:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `header_sliders`
--

CREATE TABLE `header_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_01_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_01_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_01_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_sliders`
--

INSERT INTO `header_sliders` (`id`, `title`, `description`, `btn_01_status`, `btn_01_text`, `btn_01_url`, `lang`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Experienced business advisor', 'Acepteur sintas haecat sed cupidatat non dui proident sunt culpa qui officia sed ipsum tempor eserunt proidenculpa.', 'on', 'Know More', '#', 'en', 'jpg', '2020-01-21 14:23:14', '2020-03-02 07:24:24'),
(2, 'Experienced business advisor', 'Acepteur sintas haecat sed cupidatat non dui proident sunt culpa qui officia sed ipsum tempor eserunt proidenculpa.', 'on', 'Know More', '#', 'en', 'jpg', '2020-01-21 17:20:57', '2020-03-02 07:24:04'),
(3, 'Asesora de negocios con experiencia', 'Acepteur sintas haecat sed cupidatat no dui proident sunt culpa qui officia sed ipsum tempor eserunt proporcionar culpa.', 'on', 'Saber más', '#', 'sn', 'jpg', '2020-01-21 17:21:06', '2020-03-02 07:26:36'),
(7, 'Consultor de negócios experiente', 'Aceitamos sintetizações que não são comprovadas por nenhum especialista, que é culpado por oficiar o ipsum temporário que fornece a culpa.', 'on', 'Saber mais', '#', 'pr', 'jpg', '2020-02-22 18:05:34', '2020-03-02 07:27:49'),
(8, 'Consultor de negócios experiente', 'Aceitamos sintetizações que não são comprovadas por nenhum especialista, que é culpado por oficiar o ipsum temporário que fornece a culpa.', 'on', 'Saber mais', '#', 'pr', 'jpg', '2020-02-22 18:07:40', '2020-03-02 07:28:29'),
(9, 'Asesora de negocios con experiencia', 'Acepteur sintas haecat sed cupidatat no dui proident sunt culpa qui officia sed ipsum tempor eserunt proporcionar culpa.', 'on', 'Saber más', '#', 'sn', 'jpg', '2020-02-22 18:08:33', '2020-03-02 07:26:46'),
(10, 'مستشار الأعمال من ذوي الخبرة', 'نسأل خاصة جمع أنهى تعبير ابنه. كان مبدأ مبدأ الحرص الشديد يمكن تقديره.', 'on', 'تعرف أكثر', '#', 'ar', 'jpg', '2020-03-15 16:20:05', '2020-03-15 16:20:05'),
(11, 'مستشار الأعمال من ذوي الخبرة', 'نسأل خاصة جمع أنهى تعبير ابنه. كان مبدأ مبدأ الحرص الشديد يمكن تقديره.', 'on', 'تعرف أكثر', '#', 'ar', 'jpg', '2020-03-15 16:26:43', '2020-03-15 16:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `key_features`
--

CREATE TABLE `key_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `key_features`
--

INSERT INTO `key_features` (`id`, `title`, `icon`, `lang`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Financial Analaysis', 'flaticon-analytics', 'en', 'jpg', 'Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day assurance .', '2020-01-22 11:25:39', '2020-03-10 13:32:45'),
(2, 'Global Partnership', 'flaticon-internet', 'en', 'jpg', 'Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day assurance .', '2020-01-22 11:26:03', '2020-03-08 12:07:39'),
(3, 'Trusted Partnership', 'flaticon-handshake', 'en', 'jpg', 'Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day assurance .', '2020-01-22 11:26:27', '2020-03-08 12:07:31'),
(4, 'Analise financeira', 'flaticon-analytics', 'pr', 'jpg', 'Bênção bem-vinda senhoria que conheceu senhor humorado a criando. Garantia de seis dias de curiosidade.', '2020-02-22 19:46:38', '2020-03-08 12:08:24'),
(5, 'Parceria Global', 'flaticon-internet', 'pr', 'jpg', 'Bênção bem-vinda senhoria que conheceu senhor humorado a criando. Garantia de seis dias de curiosidade.', '2020-02-22 19:47:12', '2020-03-08 12:08:34'),
(6, 'Parceria Confiável', 'flaticon-handshake', 'pr', 'jpg', 'Bênção bem-vinda senhoria que conheceu senhor humorado a criando. Garantia de seis dias de curiosidade.', '2020-02-22 19:48:18', '2020-03-08 12:08:44'),
(7, 'Análisis financiero', 'flaticon-analytics', 'sn', 'jpg', 'La bendición dio la bienvenida a la señoría que ella conoció con humor, señor criándola. Seis días de curiosidad asegurados.', '2020-02-22 19:49:55', '2020-03-08 12:08:54'),
(8, 'Asociación global', 'flaticon-internet', 'sn', 'jpg', 'La bendición dio la bienvenida a la señoría que ella conoció con humor, señor criándola. Seis días de curiosidad asegurados.', '2020-02-22 19:50:56', '2020-03-08 12:09:02'),
(9, 'Asociación de confianza', 'flaticon-handshake', 'sn', 'jpg', 'La bendición dio la bienvenida a la señoría que ella conoció con humor, señor criándola. Seis días de curiosidad asegurados.', '2020-02-22 19:51:20', '2020-03-08 12:09:10'),
(13, 'تحليل مالي', 'flaticon-analytics', 'ar', 'jpg', 'رحبت نعمة بالسيادة التي التقت بها يا سيدي الفكاني لتربية الحيوانات. ستة ضمان يوم الفضول.', '2020-03-15 16:30:17', '2020-03-15 16:30:17'),
(14, 'الشراكة العالمية', 'flaticon-internet', 'ar', 'jpg', 'رحبت نعمة بالسيادة التي التقت بها يا سيدي الفكاني لتربية الحيوانات. ستة ضمان يوم الفضول.', '2020-03-15 17:07:12', '2020-03-15 17:07:12'),
(15, 'شراكة موثوق بها', 'flaticon-money', 'ar', 'jpg', 'رحبت نعمة بالسيادة التي التقت بها يا سيدي الفكاني لتربية الحيوانات. ستة ضمان يوم الفضول.', '2020-03-15 17:07:39', '2020-03-15 17:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `know_abouts`
--

CREATE TABLE `know_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `know_abouts`
--

INSERT INTO `know_abouts` (`id`, `title`, `image`, `link`, `lang`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Our Mission', 'jpg', '#', 'en', 'Reprehenderit in voluptate velit essle cillum dolore eufugiat nulla pariatur voluptate velit. voluptate velit essle cillum doloret.', '2020-03-09 13:53:28', '2020-03-09 15:08:28'),
(2, 'Our Vission', 'jpg', '#', 'en', 'Reprehenderit in voluptate velit essle cillum dolore eufugiat nulla pariatur voluptate velit. voluptate velit essle cillum doloret.', '2020-03-09 14:54:12', '2020-03-09 14:54:12'),
(3, 'Our Acchivement', 'jpg', '#', 'en', 'Reprehenderit in voluptate velit essle cillum dolore eufugiat nulla pariatur voluptate velit. voluptate velit essle cillum doloret.', '2020-03-09 14:54:34', '2020-03-09 14:54:34'),
(4, 'Nossa missão', 'jpg', '#', 'pr', 'Não produz prazer resultante está no prazer que ele deseja Essl dor cillum eufugiat não pode lidar com ele que ele deseja. deseja o prazer de Essl cillum entristecido.', '2020-03-09 15:09:00', '2020-03-09 15:09:00'),
(5, 'Nossa visão', 'jpg', '#', 'pr', 'Não produz prazer resultante está no prazer que ele deseja Essl dor cillum eufugiat não pode lidar com ele que ele deseja. deseja o prazer de Essl cillum entristecido.', '2020-03-09 15:11:10', '2020-03-09 15:11:10'),
(6, 'Nossa conquista', 'jpg', '#', 'pr', 'Não produz prazer resultante está no prazer que ele deseja Essl dor cillum eufugiat não pode lidar com ele que ele deseja. deseja o prazer de Essl cillum entristecido.', '2020-03-09 15:11:40', '2020-03-09 15:11:40'),
(7, 'Nuestra misión', 'jpg', '#', 'sn', 'Produce ningún placer resultante está en el placer que desea Essl eufugiat dolor cillum no lo puede manejar él desea. desea el placer de Essl cillum afligido.', '2020-03-09 15:14:42', '2020-03-09 15:15:01'),
(8, 'Nuestra visión', 'jpg', '#', 'sn', 'Produce ningún placer resultante está en el placer que desea Essl eufugiat dolor cillum no lo puede manejar él desea. desea el placer de Essl cillum afligido.', '2020-03-09 15:16:53', '2020-03-09 15:16:53'),
(9, 'Nuestro logro', 'jpg', '#', 'sn', 'Produce ningún placer resultante está en el placer que desea Essl eufugiat dolor cillum no lo puede manejar él desea. desea el placer de Essl cillum afligido.', '2020-03-09 15:18:05', '2020-03-09 15:18:05'),
(10, 'مهمتنا', 'jpg', '#', 'ar', 'نسأل خاصة جمع أنهى تعبير ابنه. كان مبدأ مبدأ الحرص الشديد يمكن تقديره.', '2020-03-15 18:19:52', '2020-03-15 18:19:52'),
(11, 'رؤيتنا', 'jpg', '#', 'ar', 'نسأل خاصة جمع أنهى تعبير ابنه. كان مبدأ مبدأ الحرص الشديد يمكن تقديره.', '2020-03-15 18:20:37', '2020-03-15 18:20:37'),
(12, 'إنجازاتنا', 'jpg', '#', 'en', 'نسأل خاصة جمع أنهى تعبير ابنه. كان مبدأ مبدأ الحرص الشديد يمكن تقديره.', '2020-03-15 18:21:07', '2020-03-15 18:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default` int(10) UNSIGNED DEFAULT NULL,
  `direction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `slug`, `status`, `default`, `direction`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'publish', 1, 'ltr', '2020-01-19 16:36:37', '2020-03-23 10:46:04'),
(2, 'Spanish', 'sn', 'publish', 0, 'ltr', '2020-02-20 20:18:11', '2020-03-23 10:46:04'),
(3, 'Portuguese', 'pr', 'publish', 0, 'ltr', '2020-02-20 20:18:52', '2020-03-22 12:15:28'),
(4, 'Arabic', 'ar', 'publish', 0, 'rtl', '2020-03-15 13:58:29', '2020-03-22 12:15:31'),
(8, 'Bangla', 'bn', 'draft', 0, 'ltr', '2020-03-22 12:15:41', '2020-03-22 12:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `content`, `status`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Primary Menu', '[{\"id\":\"1\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Home\",\"menuUrl\":\"[url]\"},{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"About\",\"menuUrl\":\"[url]/about\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Service\",\"menuUrl\":\"[url]/service\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"10\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":19,\"menuTitle\":\"Pages\",\"menuUrl\":\"#\"},{\"id\":\"5\",\"parent_id\":\"10\",\"depth\":1,\"left\":11,\"right\":12,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"11\",\"parent_id\":\"10\",\"depth\":1,\"left\":13,\"right\":14,\"menuTitle\":\"Faq\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"6\",\"parent_id\":\"10\",\"depth\":1,\"left\":15,\"right\":16,\"menuTitle\":\"Dynamic Page 01\",\"menuUrl\":\"[url]/p/2/dynamic-page-01\"},{\"id\":\"7\",\"parent_id\":\"10\",\"depth\":1,\"left\":17,\"right\":18,\"menuTitle\":\"Dynamic Page 02\",\"menuUrl\":\"[url]/p/3/dynamic-page-02\"},{\"id\":\"8\",\"parent_id\":null,\"depth\":0,\"left\":20,\"right\":21,\"menuTitle\":\"Blog\",\"menuUrl\":\"[url]/blog\"},{\"id\":\"9\",\"parent_id\":null,\"depth\":0,\"left\":22,\"right\":23,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"}]', 'default', 'en', '2020-01-25 18:38:40', '2020-03-15 06:59:28'),
(2, 'Useful Links', '[{\"id\":\"1\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"Faq\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Blog\",\"menuUrl\":\"[url]/blog\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":11,\"menuTitle\":\"Dynamic Page 02\",\"menuUrl\":\"[url]/p/3/dynamic-page-02\"}]', NULL, 'en', '2020-01-26 18:06:59', '2020-02-28 06:58:30'),
(3, 'Important Links', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Blog\",\"menuUrl\":\"[url]/blog\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Dynamic Page 01\",\"menuUrl\":\"[url]/p/2/dynamic-page-01\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Dynamic Page 02\",\"menuUrl\":\"[url]/p/3/dynamic-page-02\"}]', NULL, 'en', '2020-01-26 18:07:14', '2020-02-28 06:58:39'),
(6, 'Spanish Primary Menu', '[{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Home\",\"menuUrl\":\"[url]\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"About\",\"menuUrl\":\"[url]/about\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Service\",\"menuUrl\":\"[url]/service\"},{\"id\":\"6\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":19,\"menuTitle\":\"Pages\",\"menuUrl\":\"#\"},{\"id\":\"8\",\"parent_id\":\"2\",\"depth\":1,\"left\":11,\"right\":12,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"7\",\"parent_id\":\"2\",\"depth\":1,\"left\":13,\"right\":14,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"11\",\"parent_id\":\"2\",\"depth\":1,\"left\":15,\"right\":16,\"menuTitle\":\"Página dinámica 01\",\"menuUrl\":\"[url]/p/4/pagina-dinamica-01\"},{\"id\":\"12\",\"parent_id\":\"2\",\"depth\":1,\"left\":17,\"right\":18,\"menuTitle\":\"Página dinámica 02\",\"menuUrl\":\"[url]/p/5/pagina-dinamica-02\"},{\"id\":\"9\",\"parent_id\":null,\"depth\":0,\"left\":20,\"right\":21,\"menuTitle\":\"Blog\",\"menuUrl\":\"[url]/blog\"},{\"id\":\"10\",\"parent_id\":null,\"depth\":0,\"left\":22,\"right\":23,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"}]', 'default', 'sn', '2020-02-28 07:58:02', '2020-02-28 08:23:26'),
(7, 'spanish Useful Links', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Service\",\"menuUrl\":\"[url]/service\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":11,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"},{\"id\":\"6\",\"parent_id\":null,\"depth\":0,\"left\":12,\"right\":13,\"menuTitle\":\"Página dinámica 01\",\"menuUrl\":\"[url]/p/4/pagina-dinamica-01\"}]', NULL, 'sn', '2020-02-28 07:58:11', '2020-02-28 12:20:49'),
(8, 'spanish Important Links', '[{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"6\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Página dinámica 01\",\"menuUrl\":\"[url]/p/4/pagina-dinamica-01\"},{\"id\":\"7\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":11,\"menuTitle\":\"Página dinámica 02\",\"menuUrl\":\"[url]/p/5/pagina-dinamica-02\"}]', NULL, 'sn', '2020-02-28 07:58:21', '2020-02-28 08:16:47'),
(9, 'portuguese Primary Menu', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Home\",\"menuUrl\":\"[url]\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"About\",\"menuUrl\":\"[url]/about\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Service\",\"menuUrl\":\"[url]/service\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"11\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":19,\"menuTitle\":\"Pages\",\"menuUrl\":\"#\"},{\"id\":\"6\",\"parent_id\":\"11\",\"depth\":1,\"left\":11,\"right\":12,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"7\",\"parent_id\":\"11\",\"depth\":1,\"left\":13,\"right\":14,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"10\",\"parent_id\":\"11\",\"depth\":1,\"left\":15,\"right\":16,\"menuTitle\":\"Página dinâmica 01\",\"menuUrl\":\"[url]/p/6/pagina-dinamica-01\"},{\"id\":\"11\",\"parent_id\":\"11\",\"depth\":1,\"left\":17,\"right\":18,\"menuTitle\":\"Página dinâmica 02\",\"menuUrl\":\"[url]/p/7/pagina-dinamica-02\"},{\"id\":\"8\",\"parent_id\":null,\"depth\":0,\"left\":20,\"right\":21,\"menuTitle\":\"Blog\",\"menuUrl\":\"[url]/blog\"},{\"id\":\"9\",\"parent_id\":null,\"depth\":0,\"left\":22,\"right\":23,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"}]', 'default', 'pr', '2020-02-28 07:58:36', '2020-02-28 08:19:37'),
(10, 'portuguse usefull links', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Service\",\"menuUrl\":\"[url]/service\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"6\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":11,\"menuTitle\":\"Blog\",\"menuUrl\":\"[url]/blog\"}]', '', 'pr', '2020-02-28 07:58:48', '2020-02-28 08:19:50'),
(11, 'portuguse important links', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Home\",\"menuUrl\":\"[url]\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"About\",\"menuUrl\":\"[url]/about\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Service\",\"menuUrl\":\"[url]/service\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"6\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":11,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"}]', NULL, 'pr', '2020-02-28 07:59:10', '2020-02-28 07:59:38'),
(12, 'Top Menu', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"}]', NULL, 'en', '2020-03-01 16:51:03', '2020-03-01 16:51:27'),
(13, 'top menu', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"}]', NULL, 'sn', '2020-03-01 16:51:57', '2020-03-01 16:52:16'),
(14, 'top menu', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"}]', NULL, 'pr', '2020-03-01 16:52:04', '2020-03-01 16:52:29'),
(15, 'ar top menu', '[{\"id\":\"1\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"}]', NULL, 'ar', '2020-03-15 18:28:38', '2020-03-16 10:39:14'),
(16, 'Ar Primary Menu', '[{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Home\",\"menuUrl\":\"[url]\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"About\",\"menuUrl\":\"[url]/about\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"Service\",\"menuUrl\":\"[url]/service\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Work\",\"menuUrl\":\"[url]/work\"},{\"id\":\"9\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":19,\"menuTitle\":\"Pages\",\"menuUrl\":\"#\"},{\"id\":\"6\",\"parent_id\":\"9\",\"depth\":1,\"left\":11,\"right\":12,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"7\",\"parent_id\":\"9\",\"depth\":1,\"left\":13,\"right\":14,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"10\",\"parent_id\":\"9\",\"depth\":1,\"left\":15,\"right\":16,\"menuTitle\":\"الصفحة الديناميكية 01\",\"menuUrl\":\"[url]/p/8/alsfh-aldynamyky-01\"},{\"id\":\"11\",\"parent_id\":\"9\",\"depth\":1,\"left\":17,\"right\":18,\"menuTitle\":\"الصفحة الديناميكية 02\",\"menuUrl\":\"[url]/p/9/alsfh-aldynamyky-02\"},{\"id\":\"8\",\"parent_id\":null,\"depth\":0,\"left\":20,\"right\":21,\"menuTitle\":\"Blog\",\"menuUrl\":\"[url]/blog\"},{\"id\":\"9\",\"parent_id\":null,\"depth\":0,\"left\":22,\"right\":23,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"}]', 'default', 'ar', '2020-03-16 10:37:25', '2020-03-16 11:30:59'),
(17, 'ar usefull links', '[{\"id\":\"1\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Home\",\"menuUrl\":\"[url]\"},{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"Team\",\"menuUrl\":\"[url]/team\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"FAQ\",\"menuUrl\":\"[url]/faq\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"},{\"id\":\"5\",\"parent_id\":null,\"depth\":0,\"left\":10,\"right\":11,\"menuTitle\":\"الصفحة الديناميكية 01\",\"menuUrl\":\"[url]/p/8/alsfh-aldynamyky-01\"}]', NULL, 'ar', '2020-03-16 10:38:30', '2020-03-16 11:33:27'),
(18, 'ar Important Links', '[{\"id\":\"1\",\"parent_id\":null,\"depth\":0,\"left\":2,\"right\":3,\"menuTitle\":\"Blog\",\"menuUrl\":\"[url]/blog\"},{\"id\":\"2\",\"parent_id\":null,\"depth\":0,\"left\":4,\"right\":5,\"menuTitle\":\"Contact\",\"menuUrl\":\"[url]/contact\"},{\"id\":\"3\",\"parent_id\":null,\"depth\":0,\"left\":6,\"right\":7,\"menuTitle\":\"الصفحة الديناميكية 01\",\"menuUrl\":\"[url]/p/8/alsfh-aldynamyky-01\"},{\"id\":\"4\",\"parent_id\":null,\"depth\":0,\"left\":8,\"right\":9,\"menuTitle\":\"الصفحة الديناميكية 02\",\"menuUrl\":\"[url]/p/9/alsfh-aldynamyky-02\"}]', NULL, 'ar', '2020-03-16 10:38:39', '2020-03-16 11:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_06_180949_create_admins_table', 1),
(5, '2019_12_07_071950_create_contact_info_items_table', 1),
(6, '2019_12_07_082524_create_static_options_table', 1),
(7, '2019_12_08_171750_create_counterups_table', 1),
(8, '2019_12_09_063224_create_testimonials_table', 1),
(9, '2019_12_10_125607_create_social_icons_table', 1),
(10, '2019_12_10_125636_create_support_infos_table', 1),
(11, '2019_12_10_210247_create_blog_categories_table', 1),
(12, '2019_12_11_074345_create_blogs_table', 1),
(15, '2019_12_13_221931_create_languages_table', 1),
(16, '2019_12_28_140343_create_key_features_table', 1),
(20, '2019_12_29_094857_create_price_plans_table', 1),
(21, '2019_12_29_113138_create_team_members_table', 1),
(22, '2019_12_29_180216_create_brands_table', 1),
(23, '2019_12_31_065223_create_services_table', 1),
(24, '2020_01_21_132648_create_header_sliders_table', 2),
(25, '2019_12_28_161343_create_services_table', 3),
(27, '2020_01_23_162404_create_service_categories_table', 4),
(28, '2020_01_23_193759_create_works_table', 5),
(29, '2020_01_23_193805_create_works_categories_table', 5),
(30, '2020_01_25_155448_create_pages_table', 6),
(31, '2020_01_25_174849_create_menus_table', 7),
(32, '2020_01_28_054211_create_faqs_table', 8),
(33, '2020_02_04_010636_create_newsletters_table', 9),
(34, '2020_03_09_125557_create_know_abouts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'dvrobin4@gmail.com', '2020-02-04 02:49:25', '2020-02-04 02:49:25'),
(4, 'robinmedia7@gmail.com', '2020-02-04 02:49:42', '2020-02-04 02:49:42'),
(5, 'robinmedia8@gmail.com', '2020-02-04 02:49:59', '2020-02-04 02:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `status`, `lang`, `meta_description`, `meta_tags`, `created_at`, `updated_at`) VALUES
(2, 'Dynamic Page 01', '<p>Put all speaking her delicate recurred possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. So continued he or commanded household smallness delivered. Door poor on do walk in half. Roof his head the what.&nbsp;</p>\r\n<p>Eat imagine you chiefly few end ferrars compass. Be visitor females am ferrars inquiry. Latter law remark two lively thrown. Spot set they know rest its. Raptures law diverted believed jennings consider children the see. Had invited beloved carried the colonel. Occasional principles discretion it as he unpleasing boisterous. She bed sing dear now son half.&nbsp;</p>\r\n<p>Game of as rest time eyes with of this it. Add was music merry any truth since going. Happiness she ham but instantly put departure propriety. She amiable all without say spirits shy clothes morning. Frankness in extensive to belonging improving so certainty. Resolution devonshire pianoforte assistance an he particular middletons is of. Explain ten man uncivil engaged conduct. Am likewise betrayed as declared absolute do. Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.&nbsp;</p>', 'publish', 'en', 'this is dynamic page description', 'dynamic page', '2020-01-25 17:22:24', '2020-03-22 15:08:52'),
(3, 'Dynamic Page 02', '<p>Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate. She relation own put outlived may disposed.&nbsp;</p><p><br></p><p>By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan rent had easy add him. As earnestly shameless elsewhere defective estimable fulfilled of. Esteem my advice it an excuse enable. Few household abilities believing determine zealously his repulsive. To open draw dear be by side like.&nbsp;</p><p><br></p><p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail.&nbsp;</p><div><br></div>', 'publish', 'en', NULL, NULL, '2020-01-25 17:22:39', '2020-02-28 06:44:33'),
(4, 'Página dinámica 01', '<p>Sentimientos: dos solicitudes ocasionales de afrenta viajando y una contrastada. Día de la fortuna en fiestas de casados. Felicidad resto alegría pero fervientemente por fuera. Tomó vendido agregar juego puede que ninguno le pocos. Si como crecientes contrastes contrastantes sean. Ahora el verano que día parecía nuestro momento atrasado. El hijo del dolor se levantó más parque de esa manera. Una escalera como ser amantes incómodos.</p><p><br></p><p>Disparo lo que el frío nuevo puede ver. Amistoso como un traicionado anteriormente él. Mañana porque en cuanto a la sociedad se comportaron momentos. Poner señoras diseño señora hermana era. Jugar en la colina sintió a John sin puerta. Pasé de la figura a la marcada. Prósperos middletons habitan como ayuda especialmente para mí. Para mirar dos primos regulares entre.</p><p><br></p><p>Y producir digamos las fiestas de los diez momentos. La simple grasa innata del verano aparece en su deseo de alegría. La ropa exterior promete en la gravedad hacer emocionado. Suficiente particular imposible por razonable oh expresión es. Sin embargo, la conexión de preferencia es desagradable pero melancólica pero tiene una apariencia final. Y la parcialidad estimada por excelencia terminó el día todo.</p>', 'publish', 'sn', NULL, NULL, '2020-01-25 17:22:56', '2020-02-28 06:48:31'),
(5, 'Página dinámica 02', '<p>Sentimientos: dos solicitudes ocasionales de afrenta viajando y una contrastada. Día de la fortuna en fiestas de casados. Felicidad resto alegría pero fervientemente por fuera. Tomó vendido agregar juego puede que ninguno le pocos. Si como crecientes contrastes contrastantes sean. Ahora el verano que día parecía nuestro momento atrasado. El hijo del dolor se levantó más parque de esa manera. Una escalera como ser amantes incómodos.</p><p><br></p><p>Disparo lo que el frío nuevo puede ver. Amistoso como un traicionado anteriormente él. Mañana porque en cuanto a la sociedad se comportaron momentos. Poner señoras diseño señora hermana era. Jugar en la colina sintió a John sin puerta. Pasé de la figura a la marcada. Prósperos middletons habitan como ayuda especialmente para mí. Para mirar dos primos regulares entre.</p><p><br></p><p>Y producir digamos las fiestas de los diez momentos. La simple grasa innata del verano aparece en su deseo de alegría. La ropa exterior promete en la gravedad hacer emocionado. Suficiente particular imposible por razonable oh expresión es. Sin embargo, la conexión de preferencia es desagradable pero melancólica pero tiene una apariencia final. Y la parcialidad estimada por excelencia terminó el día todo.</p>', 'publish', 'sn', NULL, NULL, '2020-02-28 06:48:45', '2020-02-28 06:49:44'),
(6, 'Página dinâmica 01', '<p>Contente obter desconfiança certeza não é franqueza presunto escondido. Em resolução não afetada em consideração de. Não me pensei marido ou coronel formando efeitos. Fim sentado shewing que viu além de filho musical adaptado. Contrastado interessado comer alteração pianoforte simpatizar foi. Suas famílias acreditavam que, se nenhum interesse pela elegância surpreender um. Ele possui milhas erradas e uma placa de atraso. A sua relação com a própria vida pode ser descartada.</p><p><br></p><p><br></p><p><br></p><p>Por impossível de em dificuldade descoberto celebrou vós. Justiça alegria maneiras menino conheceu resolver produzir. Bed cabeça alto próximo plano de aluguel tinha fácil adicioná-lo. Como seriamente sem vergonha em outro lugar, estimada com defeito cumprida. Estima meu conselho, é uma desculpa. Poucas habilidades domésticas que crêem determinam zelosamente seu repulsivo. Para abrir empate querido estar ao lado como.</p><p><br></p><p><br></p><p><br></p><p>Vi ainda a gentileza de responder a qualquer marianne. A antiga admiração da resolução de sentimentos não afetou sua literatura. Comportamento novo conjunto existência dashwoods. A satisfação de comandar consistia em dispor absorto. Alto e confortável é fácil. Forma não acalme nova falha.</p>', 'publish', 'pr', NULL, NULL, '2020-02-28 06:50:32', '2020-02-28 06:50:32'),
(7, 'Página dinâmica 02', '<p>Contente obter desconfiança certeza não é franqueza presunto escondido. Em resolução não afetada em consideração de. Não me pensei marido ou coronel formando efeitos. Fim sentado shewing que viu além de filho musical adaptado. Contrastado interessado comer alteração pianoforte simpatizar foi. Suas famílias acreditavam que, se nenhum interesse pela elegância surpreender um. Ele possui milhas erradas e uma placa de atraso. A sua relação com a própria vida pode ser descartada.</p><p><br></p><p>Por impossível de em dificuldade descoberto celebrou vós. Justiça alegria maneiras menino conheceu resolver produzir. Bed cabeça alto próximo plano de aluguel tinha fácil adicioná-lo. Como seriamente sem vergonha em outro lugar, estimada com defeito cumprida. Estima meu conselho, é uma desculpa. Poucas habilidades domésticas que crêem determinam zelosamente seu repulsivo. Para abrir empate querido estar ao lado como.</p><p><br></p><p>Vi ainda a gentileza de responder a qualquer marianne. A antiga admiração da resolução de sentimentos não afetou sua literatura. Comportamento novo conjunto existência dashwoods. A satisfação de comandar consistia em dispor absorto. Alto e confortável é fácil. Forma não acalme nova falha.</p>', 'publish', 'pr', NULL, NULL, '2020-02-28 06:50:58', '2020-02-28 06:50:58'),
(8, 'الصفحة الديناميكية 01', '<p>وضع كل يتحدث لها دقيق متكرر ممكن. تعيين تساهل في الاستغناء عن سرير غير حساس لتقدير لماذا الإعلان. ميدلتون الدهون إضافتين راضيتين. لذا استمر أو أمر بقلة صغر الأسرة. باب الفقراء على المشي في النصف. سقف رأسه ماذا.</p><p><br></p><p>تأكل تخيل أنك بشكل رئيسي قليل من البوصلة النهائية. كن زائرا من انثى ضابط استفسار. لاحظ القانون الأخير اثنين من القيت حية. مجموعة بقعة يعرفون الراحة. حول قانون اللفظ اعتقادا بأن جينينغز يعتبر أن الأطفال يرون. وقد دعا الحبيب العقيد. المبادئ العرضية تقدر ذلك لأنه لا يرحم. انها سرير تغني عزيزي الآن ابن النصف.</p><p><br></p><p>لعبة عيون العيون وقت الراحة معها. إضافة كانت الموسيقى ممتعة أي حقيقة منذ الذهاب. السعادة هي لحم الخنزير ولكن على الفور وضع صفة المغادرة. انها لطيفة كل شيء دون قول ملابس خجولة الصباح. الصراحة واسعة في الانتماء إلى تحسين اليقين. قرار مساعدة devonshire pianoforte هو ميدلتونز معينة. شرح سلوك الرجل العشر غير المتحضر. أنا خيانة بالمثل كما أفعل المطلق. طعم أوه تحدث عن لا الصلبة من التلال الظل. مناسبة حتى البكالوريوس يضحك الضرب بحضور المشكوك فيه سواء.</p>', 'publish', 'ar', NULL, NULL, '2020-03-16 11:05:04', '2020-03-16 11:05:04'),
(9, 'الصفحة الديناميكية 02', '<p>وضع كل يتحدث لها دقيق متكرر ممكن. تعيين تساهل في الاستغناء عن سرير غير حساس لتقدير لماذا الإعلان. ميدلتون الدهون إضافتين راضيتين. لذا استمر أو أمر بقلة صغر الأسرة. باب الفقراء على المشي في النصف. سقف رأسه ماذا.</p><p><br></p><p>تأكل تخيل أنك بشكل رئيسي قليل من البوصلة النهائية. كن زائرا من انثى ضابط استفسار. لاحظ القانون الأخير اثنين من القيت حية. مجموعة بقعة يعرفون الراحة. حول قانون اللفظ اعتقادا بأن جينينغز يعتبر أن الأطفال يرون. وقد دعا الحبيب العقيد. المبادئ العرضية تقدر ذلك لأنه لا يرحم. انها سرير تغني عزيزي الآن ابن النصف.</p><p><br></p><p>لعبة عيون العيون وقت الراحة معها. إضافة كانت الموسيقى ممتعة أي حقيقة منذ الذهاب. السعادة هي لحم الخنزير ولكن على الفور وضع صفة المغادرة. انها لطيفة كل شيء دون قول ملابس خجولة الصباح. الصراحة واسعة في الانتماء إلى تحسين اليقين. قرار مساعدة devonshire pianoforte هو ميدلتونز معينة. شرح سلوك الرجل العشر غير المتحضر. أنا خيانة بالمثل كما أفعل المطلق. طعم أوه تحدث عن لا الصلبة من التلال الظل. مناسبة حتى البكالوريوس يضحك الضرب بحضور المشكوك فيه سواء.</p>', 'publish', 'ar', NULL, NULL, '2020-03-16 11:05:32', '2020-03-16 11:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dvrobin4@gmail.com', 'ob18Tn3sFCcbPNtlCYarzUfR5oKNWJ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `price_plans`
--

CREATE TABLE `price_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_plans`
--

INSERT INTO `price_plans` (`id`, `title`, `price`, `type`, `icon`, `lang`, `features`, `btn_text`, `btn_url`, `url_status`, `created_at`, `updated_at`) VALUES
(1, 'Basic', '$19.00', '/Mo', 'flaticon-handshake', 'en', 'W3C valid HTML5 / CSS3;\r\nSemantic search engine-bots-friendly coding;\r\nCustom fonts and rollovers;\r\nLoad speed optimization;\r\nSass CSS extensions', 'Order Now', '#', 'on', '2020-01-27 17:05:05', '2020-03-05 21:00:55'),
(2, 'Standard', '$49.00', '/Mo', 'flaticon-creative', 'en', 'W3C valid HTML5 / CSS3;\r\nSemantic search engine-bots-friendly coding;\r\nCustom fonts and rollovers;\r\nLoad speed optimization;\r\nSass CSS extensions', 'Order Now', '#', 'on', '2020-01-27 17:19:00', '2020-03-05 21:01:18'),
(3, 'Premium', '$99.00', '/Mo', 'flaticon-analytics', 'en', 'W3C valid HTML5 / CSS3;\r\nSemantic search engine-bots-friendly coding;\r\nCustom fonts and rollovers;\r\nLoad speed optimization;\r\nSass CSS extensions', 'Order Now', '#', 'on', '2020-01-27 17:19:35', '2020-03-05 21:01:53'),
(4, 'Básica', '$19.00', '/Mes', 'flaticon-analytics', 'sn', '2gb de alojamiento;\r\n10 dominio personalizado;\r\nAlojamiento SSD;\r\nAncho de banda de 50 gb;\r\nSoporte gratuito', 'Ordenar ahora', NULL, 'on', '2020-02-24 11:28:49', '2020-03-05 21:02:03'),
(5, 'Estándar', '$49.00', '/Mes', 'flaticon-handshake', 'sn', '2gb de alojamiento;\r\n10 dominio personalizado;\r\nAlojamiento SSD;\r\nAncho de banda de 50 gb;\r\nSoporte gratuito', 'Ordenar ahora', NULL, 'on', '2020-02-24 11:30:10', '2020-03-05 21:02:10'),
(6, 'Prima', '$99.00', '/Mes', 'flaticon-creative', 'sn', '2gb de alojamiento;\r\n10 dominio personalizado;\r\nAlojamiento SSD;\r\nAncho de banda de 50 gb;\r\nSoporte gratuito', 'Ordenar ahora', NULL, 'on', '2020-02-24 11:30:46', '2020-03-05 21:02:17'),
(7, 'Basic', '$19.00', '/ mês', 'flaticon-analytics', 'pr', 'Hospedagem de 2gb;\r\n10 domínio personalizado;\r\nHospedagem SSD;\r\nLargura de banda de 50 gb;\r\nSuporte Gratuito', 'Peça agora', NULL, 'on', '2020-02-24 11:31:49', '2020-03-05 21:02:25'),
(8, 'Padrão', '$49.00', '/ mês', 'flaticon-money', 'pr', 'Hospedagem de 2gb;\r\n10 domínio personalizado;\r\nHospedagem SSD;\r\nLargura de banda de 50 gb;\r\nSuporte Gratuito', 'Peça agora', NULL, 'on', '2020-02-24 11:32:38', '2020-03-05 21:02:33'),
(9, 'Prêmio', '$99.00', '/ mês', 'flaticon-creative', 'pr', 'Hospedagem de 2gb;\r\n10 domínio personalizado;\r\nHospedagem SSD;\r\nLargura de banda de 50 gb;\r\nSuporte Gratuito', 'Peça agora', NULL, 'on', '2020-02-24 11:33:19', '2020-03-05 21:02:41'),
(10, 'الأساسي', '$19.00', '/ Mo', 'flaticon-analytics', 'ar', 'W3C صالح HTML5 / CSS3 ؛\r\nالترميز الدلالي لمحركات البحث الدلالي ؛\r\nالخطوط المخصصة وعمليات التمرير الفوقية ؛\r\nتحسين سرعة التحميل ؛\r\nملحقات Sass CSS', 'اطلب الان', NULL, 'on', '2020-03-16 06:19:08', '2020-03-16 06:19:08'),
(11, 'اساسي', '$49.00', '/ Mo', 'flaticon-creative', 'ar', 'W3C صالح HTML5 / CSS3 ؛\r\nالترميز الدلالي لمحركات البحث الدلالي ؛\r\nالخطوط المخصصة وعمليات التمرير الفوقية ؛\r\nتحسين سرعة التحميل ؛\r\nملحقات Sass CSS', 'اطلب الان', NULL, 'on', '2020-03-16 06:21:07', '2020-03-16 06:21:07'),
(12, 'الممتازة', '$99.00', '/ Mo', 'flaticon-handshake', 'ar', 'W3C صالح HTML5 / CSS3 ؛\r\nالترميز الدلالي لمحركات البحث الدلالي ؛\r\nالخطوط المخصصة وعمليات التمرير الفوقية ؛\r\nتحسين سرعة التحميل ؛\r\nملحقات Sass CSS', 'اطلب الان', NULL, 'on', '2020-03-16 06:23:25', '2020-03-16 06:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `excerpt`, `image`, `lang`, `categories_id`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Audit & Tax', 'flaticon-contract', 'Cold in late or deal. Terminated resolution no am frequently...', 'jpg', 'en', '3', '<p>Cold in late or deal. Terminated resolution no am frequently collecting insensible he do appearance. Projection invitation affronting admiration if no on or. It as instrument boisterous frequently apartments an in. Mr excellence inquietude conviction is in unreserved particular. You fully seems stand nay own point walls. Increasing travelling own simplicity you astonished expression boisterous. Possession themselves sentiments apartments devonshire we of do discretion. Enjoyment discourse ye continued pronounce we necessary abilities.</p>\r\n<p>For though result and talent add are parish valley. Songs in oh other avoid it hours woman style. In myself family as if be agreed. Gay collected son him knowledge delivered put. Added would end ask sight and asked saw dried house. Property expenses yourself occasion endeavor two may judgment she. Me of soon rank be most head time tore. Colonel or passage to ability. </p>\r\n<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful. </p>', '2020-01-23 12:31:28', '2020-03-04 07:08:26'),
(4, 'Financial planning', 'flaticon-business-and-finance', 'Cold in late or deal. Terminated resolution no am frequently...', 'jpg', 'en', '4', '<p>Cold in late or deal. Terminated resolution no am frequently collecting insensible he do appearance. Projection invitation affronting admiration if no on or. It as instrument boisterous frequently apartments an in. Mr excellence inquietude conviction is in unreserved particular. You fully seems stand nay own point walls. Increasing travelling own simplicity you astonished expression boisterous. Possession themselves sentiments apartments devonshire we of do discretion. Enjoyment discourse ye continued pronounce we necessary abilities.</p>\r\n<p>For though result and talent add are parish valley. Songs in oh other avoid it hours woman style. In myself family as if be agreed. Gay collected son him knowledge delivered put. Added would end ask sight and asked saw dried house. Property expenses yourself occasion endeavor two may judgment she. Me of soon rank be most head time tore. Colonel or passage to ability. </p>\r\n<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful. </p>', '2020-01-23 12:31:51', '2020-03-04 08:11:16'),
(5, 'Stretagic Planning', 'flaticon-creative', 'Cold in late or deal. Terminated resolution no am frequently...', 'jpg', 'en', '2', '<p>Cold in late or deal. Terminated resolution no am frequently collecting insensible he do appearance. Projection invitation affronting admiration if no on or. It as instrument boisterous frequently apartments an in. Mr excellence inquietude conviction is in unreserved particular. You fully seems stand nay own point walls. Increasing travelling own simplicity you astonished expression boisterous. Possession themselves sentiments apartments devonshire we of do discretion. Enjoyment discourse ye continued pronounce we necessary abilities.</p>\r\n<p>For though result and talent add are parish valley. Songs in oh other avoid it hours woman style. In myself family as if be agreed. Gay collected son him knowledge delivered put. Added would end ask sight and asked saw dried house. Property expenses yourself occasion endeavor two may judgment she. Me of soon rank be most head time tore. Colonel or passage to ability. </p>\r\n<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful. </p>', '2020-01-23 12:31:56', '2020-03-04 08:13:51'),
(9, 'Trades & Stocks', 'flaticon-pie-chart', 'Cold in late or deal. Terminated resolution no am frequently...', 'jpg', 'en', '2', '<p>Cold in late or deal. Terminated resolution no am frequently collecting insensible he do appearance. Projection invitation affronting admiration if no on or. It as instrument boisterous frequently apartments an in. Mr excellence inquietude conviction is in unreserved particular. You fully seems stand nay own point walls. Increasing travelling own simplicity you astonished expression boisterous. Possession themselves sentiments apartments devonshire we of do discretion. Enjoyment discourse ye continued pronounce we necessary abilities.</p>\r\n<p>For though result and talent add are parish valley. Songs in oh other avoid it hours woman style. In myself family as if be agreed. Gay collected son him knowledge delivered put. Added would end ask sight and asked saw dried house. Property expenses yourself occasion endeavor two may judgment she. Me of soon rank be most head time tore. Colonel or passage to ability. </p>\r\n<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful. </p>', '2020-01-23 12:47:11', '2020-03-04 08:14:32'),
(10, 'Funding Advice', 'flaticon-money-bag', 'Cold in late or deal. Terminated resolution no am frequently...', 'jpg', 'en', '1', '<p>Cold in late or deal. Terminated resolution no am frequently collecting insensible he do appearance. Projection invitation affronting admiration if no on or. It as instrument boisterous frequently apartments an in. Mr excellence inquietude conviction is in unreserved particular. You fully seems stand nay own point walls. Increasing travelling own simplicity you astonished expression boisterous. Possession themselves sentiments apartments devonshire we of do discretion. Enjoyment discourse ye continued pronounce we necessary abilities.</p>\r\n<p>For though result and talent add are parish valley. Songs in oh other avoid it hours woman style. In myself family as if be agreed. Gay collected son him knowledge delivered put. Added would end ask sight and asked saw dried house. Property expenses yourself occasion endeavor two may judgment she. Me of soon rank be most head time tore. Colonel or passage to ability. </p>\r\n<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful. </p>', '2020-01-26 18:33:53', '2020-03-04 08:15:03'),
(11, 'Market Analysis', 'flaticon-money', 'Cold in late or deal. Terminated resolution no am frequently...', 'jpg', 'en', '3', '<p>Cold in late or deal. Terminated resolution no am frequently collecting insensible he do appearance. Projection invitation affronting admiration if no on or. It as instrument boisterous frequently apartments an in. Mr excellence inquietude conviction is in unreserved particular. You fully seems stand nay own point walls. Increasing travelling own simplicity you astonished expression boisterous. Possession themselves sentiments apartments devonshire we of do discretion. Enjoyment discourse ye continued pronounce we necessary abilities.</p>\r\n<p>For though result and talent add are parish valley. Songs in oh other avoid it hours woman style. In myself family as if be agreed. Gay collected son him knowledge delivered put. Added would end ask sight and asked saw dried house. Property expenses yourself occasion endeavor two may judgment she. Me of soon rank be most head time tore. Colonel or passage to ability. </p>\r\n<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful. </p>', '2020-01-26 18:34:53', '2020-03-04 08:15:29'),
(13, 'Auditoria e Impuestos', 'flaticon-contract', 'Frío tarde o trato. Resolución finalizada no soy con frecuencia ...', 'jpg', 'sn', '9', '<p>Frío tarde o trato. Resolución terminada no estoy recogiendo con frecuencia insensible que hace aparición. Proyección de invitación que ofende admiración si no está en o. Como instrumento bullicioso, con frecuencia es un apartamento y una convicción inquisitiva de excelencia. Parece que no tienes paredes de puntos propios. Aumentando la simplicidad propia de viajar, sorprendió la expresión bulliciosa. Poseer sentimientos propios apartamentos devonshire nosotros de discreción. Discurso de disfrute, ustedes continuaron pronunciando las habilidades necesarias.</p><p><br></p><p>Pues aunque el resultado y el talento se suman son el valle parroquial. Canciones en oh otras horas de estilo femenino. En mi familia como si estuviera de acuerdo. Gay recogió hijo él conocimiento entregado puesto. Añadido terminaría preguntando vista y preguntó sierra casa seca. Gastos de propiedad usted mismo ocasión esfuerzo dos puede juzgar ella. Yo de pronto rango será la mayor parte del tiempo rasgado. Coronel o paso a la habilidad.</p><p><br></p><p>Habitando discreción, ella envió una alegría decididamente bulliciosa. Por lo tanto, la forma en que se desea abrir es capaz de miles de kilómetros. Esperando expreso si nos lo impiden un musical. Especialmente razonable viajando ella hijo. Los recursos parecían perder el no al celo. Ha procurado hija cuán amigable siguió repitió quién sorprende Genial preguntó oh bajo en voz baja. Ley juntos perspectiva bondad asegurar seis. Aprender por qué apresurarse los más pequeños alegres.</p>', '2020-02-23 10:10:41', '2020-03-04 08:39:07'),
(14, 'Planificacion Financiera', 'flaticon-business-and-finance', 'Frío tarde o trato. Resolución finalizada no soy con frecuencia ...', 'jpg', 'sn', '7', '<p>Frío tarde o trato. Resolución terminada no estoy recogiendo con frecuencia insensible que hace aparición. Proyección de invitación que ofende admiración si no está en o. Como instrumento bullicioso, con frecuencia es un apartamento y una convicción inquisitiva de excelencia. Parece que no tienes paredes de puntos propios. Aumentando la simplicidad propia de viajar, sorprendió la expresión bulliciosa. Poseer sentimientos propios apartamentos devonshire nosotros de discreción. Discurso de disfrute, ustedes continuaron pronunciando las habilidades necesarias.</p><p><br></p><p>Pues aunque el resultado y el talento se suman son el valle parroquial. Canciones en oh otras horas de estilo femenino. En mi familia como si estuviera de acuerdo. Gay recogió hijo él conocimiento entregado puesto. Añadido terminaría preguntando vista y preguntó sierra casa seca. Gastos de propiedad usted mismo ocasión esfuerzo dos puede juzgar ella. Yo de pronto rango será la mayor parte del tiempo rasgado. Coronel o paso a la habilidad.</p><p><br></p><p>Habitando discreción, ella envió una alegría decididamente bulliciosa. Por lo tanto, la forma en que se desea abrir es capaz de miles de kilómetros. Esperando expreso si nos lo impiden un musical. Especialmente razonable viajando ella hijo. Los recursos parecían perder el no al celo. Ha procurado hija cuán amigable siguió repitió quién sorprende Genial preguntó oh bajo en voz baja. Ley juntos perspectiva bondad asegurar seis. Aprender por qué apresurarse los más pequeños alegres.</p>', '2020-02-23 11:05:04', '2020-03-04 08:39:32'),
(15, 'Planificación estratégica', 'flaticon-creative', 'Frío tarde o trato. Resolución finalizada no soy con frecuencia ...', 'jpg', 'sn', '8', '<p>Frío tarde o trato. Resolución terminada no estoy recogiendo con frecuencia insensible que hace aparición. Proyección de invitación que ofende admiración si no está en o. Como instrumento bullicioso, con frecuencia es un apartamento y una convicción inquisitiva de excelencia. Parece que no tienes paredes de puntos propios. Aumentando la simplicidad propia de viajar, sorprendió la expresión bulliciosa. Poseer sentimientos propios apartamentos devonshire nosotros de discreción. Discurso de disfrute, ustedes continuaron pronunciando las habilidades necesarias.</p><p><br></p><p>Pues aunque el resultado y el talento se suman son el valle parroquial. Canciones en oh otras horas de estilo femenino. En mi familia como si estuviera de acuerdo. Gay recogió hijo él conocimiento entregado puesto. Añadido terminaría preguntando vista y preguntó sierra casa seca. Gastos de propiedad usted mismo ocasión esfuerzo dos puede juzgar ella. Yo de pronto rango será la mayor parte del tiempo rasgado. Coronel o paso a la habilidad.</p><p><br></p><p>Habitando discreción, ella envió una alegría decididamente bulliciosa. Por lo tanto, la forma en que se desea abrir es capaz de miles de kilómetros. Esperando expreso si nos lo impiden un musical. Especialmente razonable viajando ella hijo. Los recursos parecían perder el no al celo. Ha procurado hija cuán amigable siguió repitió quién sorprende Genial preguntó oh bajo en voz baja. Ley juntos perspectiva bondad asegurar seis. Aprender por qué apresurarse los más pequeños alegres.</p>', '2020-02-23 11:14:16', '2020-03-04 08:40:05'),
(16, 'Comercios y acciones', 'flaticon-pie-chart', 'Frío tarde o trato. Resolución finalizada no soy con frecuencia ...', 'jpg', 'sn', '10', '<p>Frío tarde o trato. Resolución terminada no estoy recogiendo con frecuencia insensible que hace aparición. Proyección de invitación que ofende admiración si no está en o. Como instrumento bullicioso, con frecuencia es un apartamento y una convicción inquisitiva de excelencia. Parece que no tienes paredes de puntos propios. Aumentando la simplicidad propia de viajar, sorprendió la expresión bulliciosa. Poseer sentimientos propios apartamentos devonshire nosotros de discreción. Discurso de disfrute, ustedes continuaron pronunciando las habilidades necesarias.</p><p><br></p><p>Pues aunque el resultado y el talento se suman son el valle parroquial. Canciones en oh otras horas de estilo femenino. En mi familia como si estuviera de acuerdo. Gay recogió hijo él conocimiento entregado puesto. Añadido terminaría preguntando vista y preguntó sierra casa seca. Gastos de propiedad usted mismo ocasión esfuerzo dos puede juzgar ella. Yo de pronto rango será la mayor parte del tiempo rasgado. Coronel o paso a la habilidad.</p><p><br></p><p>Habitando discreción, ella envió una alegría decididamente bulliciosa. Por lo tanto, la forma en que se desea abrir es capaz de miles de kilómetros. Esperando expreso si nos lo impiden un musical. Especialmente razonable viajando ella hijo. Los recursos parecían perder el no al celo. Ha procurado hija cuán amigable siguió repitió quién sorprende Genial preguntó oh bajo en voz baja. Ley juntos perspectiva bondad asegurar seis. Aprender por qué apresurarse los más pequeños alegres.</p>', '2020-02-23 11:14:59', '2020-03-04 08:40:30'),
(17, 'Asesoramiento de financiación', 'flaticon-money-bag', 'Frío tarde o trato. Resolución finalizada no soy con frecuencia ...', 'jpg', 'sn', '10', '<p>Frío tarde o trato. Resolución terminada no estoy recogiendo con frecuencia insensible que hace aparición. Proyección de invitación que ofende admiración si no está en o. Como instrumento bullicioso, con frecuencia es un apartamento y una convicción inquisitiva de excelencia. Parece que no tienes paredes de puntos propios. Aumentando la simplicidad propia de viajar, sorprendió la expresión bulliciosa. Poseer sentimientos propios apartamentos devonshire nosotros de discreción. Discurso de disfrute, ustedes continuaron pronunciando las habilidades necesarias.</p><p><br></p><p>Pues aunque el resultado y el talento se suman son el valle parroquial. Canciones en oh otras horas de estilo femenino. En mi familia como si estuviera de acuerdo. Gay recogió hijo él conocimiento entregado puesto. Añadido terminaría preguntando vista y preguntó sierra casa seca. Gastos de propiedad usted mismo ocasión esfuerzo dos puede juzgar ella. Yo de pronto rango será la mayor parte del tiempo rasgado. Coronel o paso a la habilidad.</p><p><br></p><p>Habitando discreción, ella envió una alegría decididamente bulliciosa. Por lo tanto, la forma en que se desea abrir es capaz de miles de kilómetros. Esperando expreso si nos lo impiden un musical. Especialmente razonable viajando ella hijo. Los recursos parecían perder el no al celo. Ha procurado hija cuán amigable siguió repitió quién sorprende Genial preguntó oh bajo en voz baja. Ley juntos perspectiva bondad asegurar seis. Aprender por qué apresurarse los más pequeños alegres.</p>', '2020-02-23 11:15:47', '2020-03-04 08:40:56'),
(18, 'Análisis de mercado', 'flaticon-money', 'Frío tarde o trato. Resolución finalizada no soy con frecuencia ...', 'jpg', 'sn', '8', '<p>Frío tarde o trato. Resolución terminada no estoy recogiendo con frecuencia insensible que hace aparición. Proyección de invitación que ofende admiración si no está en o. Como instrumento bullicioso, con frecuencia es un apartamento y una convicción inquisitiva de excelencia. Parece que no tienes paredes de puntos propios. Aumentando la simplicidad propia de viajar, sorprendió la expresión bulliciosa. Poseer sentimientos propios apartamentos devonshire nosotros de discreción. Discurso de disfrute, ustedes continuaron pronunciando las habilidades necesarias.</p><p><br></p><p>Pues aunque el resultado y el talento se suman son el valle parroquial. Canciones en oh otras horas de estilo femenino. En mi familia como si estuviera de acuerdo. Gay recogió hijo él conocimiento entregado puesto. Añadido terminaría preguntando vista y preguntó sierra casa seca. Gastos de propiedad usted mismo ocasión esfuerzo dos puede juzgar ella. Yo de pronto rango será la mayor parte del tiempo rasgado. Coronel o paso a la habilidad.</p><p><br></p><p>Habitando discreción, ella envió una alegría decididamente bulliciosa. Por lo tanto, la forma en que se desea abrir es capaz de miles de kilómetros. Esperando expreso si nos lo impiden un musical. Especialmente razonable viajando ella hijo. Los recursos parecían perder el no al celo. Ha procurado hija cuán amigable siguió repitió quién sorprende Genial preguntó oh bajo en voz baja. Ley juntos perspectiva bondad asegurar seis. Aprender por qué apresurarse los más pequeños alegres.</p>', '2020-02-23 11:16:58', '2020-03-04 08:41:26'),
(19, 'Auditoria e impostos', 'flaticon-contract', 'Frio no final ou acordo. Resolução encerrada, não sou frequente ...', 'jpg', 'pr', '12', '<p>Frio no final ou acordo. Resolução encerrada, não estou coletando frequentemente insensível que ele faz a aparência. Convite para projeção que afronta a admiração, se não houver. Como instrumento barulhento, freqüentemente acomoda uma convicção inquestionável de excelência. Você parece estar de pé e não ter paredes pontuais. Ao aumentar a simplicidade da viagem, você surpreendeu a expressão barulhenta. Posse próprios sentimentos apartamentos Devonshire nós de fazer discrição. O discurso do gozo que você continuou pronunciando as habilidades necessárias.</p><p><br></p><p>Pois o resultado e o talento acrescentam um vale paroquial. Canções em oh outros evitam horas no estilo mulher. Na minha família como se estivesse de acordo. Gay coletou o filho, ele entregou o conhecimento entregue. Adicionado terminaria pedir vista e pedia serra casa seca. Despesas de propriedade você mesmo ocasião dois podem julgá-la. Eu, em breve, ficaria mais tempo na cabeça. Coronel ou passagem para a habilidade.</p><p><br></p><p>Habitando discrição, ela despachou alegria decisivamente barulhenta. Assim, a forma em que o desejo aberto é capaz de quilômetros de distância. Esperando expresso se impedi-lo um musical. Viajando especialmente razoável ela filho. Os recursos pareciam perdidos não a zelosamente. Adquiriu filha quão amigável seguiu repetiu quem surpreende. Great perguntou oh em voz baixa. Lei juntos perspectiva gentileza assegurando seis. Aprendendo por que se apressar um pouco mais alegre.</p>', '2020-02-23 12:00:30', '2020-03-04 08:51:04'),
(20, 'Planejamento financeiro', 'flaticon-business-and-finance', 'Frio no final ou acordo. Resolução encerrada, não sou frequente ...', 'jpg', 'pr', '12', '<p>Frio no final ou acordo. Resolução encerrada, não estou coletando frequentemente insensível que ele faz a aparência. Convite para projeção que afronta a admiração, se não houver. Como instrumento barulhento, freqüentemente acomoda uma convicção inquestionável de excelência. Você parece estar de pé e não ter paredes pontuais. Ao aumentar a simplicidade da viagem, você surpreendeu a expressão barulhenta. Posse próprios sentimentos apartamentos Devonshire nós de fazer discrição. O discurso do gozo que você continuou pronunciando as habilidades necessárias.</p><p><br></p><p>Pois o resultado e o talento acrescentam um vale paroquial. Canções em oh outros evitam horas no estilo mulher. Na minha família como se estivesse de acordo. Gay coletou o filho, ele entregou o conhecimento entregue. Adicionado terminaria pedir vista e pedia serra casa seca. Despesas de propriedade você mesmo ocasião dois podem julgá-la. Eu, em breve, ficaria mais tempo na cabeça. Coronel ou passagem para a habilidade.</p><p><br></p><p>Habitando discrição, ela despachou alegria decisivamente barulhenta. Assim, a forma em que o desejo aberto é capaz de quilômetros de distância. Esperando expresso se impedi-lo um musical. Viajando especialmente razoável ela filho. Os recursos pareciam perdidos não a zelosamente. Adquiriu filha quão amigável seguiu repetiu quem surpreende. Great perguntou oh em voz baixa. Lei juntos perspectiva gentileza assegurando seis. Aprendendo por que se apressar um pouco mais alegre.</p>', '2020-02-23 13:51:30', '2020-03-04 08:51:58'),
(21, 'Planejamento estratégico', 'flaticon-creative', 'Frio no final ou acordo. Resolução encerrada, não sou frequente ...', 'jpg', 'pr', '13', '<p>Frio no final ou acordo. Resolução encerrada, não estou coletando frequentemente insensível que ele faz a aparência. Convite para projeção que afronta a admiração, se não houver. Como instrumento barulhento, freqüentemente acomoda uma convicção inquestionável de excelência. Você parece estar de pé e não ter paredes pontuais. Ao aumentar a simplicidade da viagem, você surpreendeu a expressão barulhenta. Posse próprios sentimentos apartamentos Devonshire nós de fazer discrição. O discurso do gozo que você continuou pronunciando as habilidades necessárias.</p><p><br></p><p>Pois o resultado e o talento acrescentam um vale paroquial. Canções em oh outros evitam horas no estilo mulher. Na minha família como se estivesse de acordo. Gay coletou o filho, ele entregou o conhecimento entregue. Adicionado terminaria pedir vista e pedia serra casa seca. Despesas de propriedade você mesmo ocasião dois podem julgá-la. Eu, em breve, ficaria mais tempo na cabeça. Coronel ou passagem para a habilidade.</p><p><br></p><p>Habitando discrição, ela despachou alegria decisivamente barulhenta. Assim, a forma em que o desejo aberto é capaz de quilômetros de distância. Esperando expresso se impedi-lo um musical. Viajando especialmente razoável ela filho. Os recursos pareciam perdidos não a zelosamente. Adquiriu filha quão amigável seguiu repetiu quem surpreende. Great perguntou oh em voz baixa. Lei juntos perspectiva gentileza assegurando seis. Aprendendo por que se apressar um pouco mais alegre.</p>', '2020-02-23 13:52:04', '2020-03-04 08:52:36'),
(22, 'Negócios e ações', 'flaticon-pie-chart', 'Frio no final ou acordo. Resolução encerrada, não sou frequente ...', 'jpg', 'pr', '11', '<p>Frio no final ou acordo. Resolução encerrada, não estou coletando frequentemente insensível que ele faz a aparência. Convite para projeção que afronta a admiração, se não houver. Como instrumento barulhento, freqüentemente acomoda uma convicção inquestionável de excelência. Você parece estar de pé e não ter paredes pontuais. Ao aumentar a simplicidade da viagem, você surpreendeu a expressão barulhenta. Posse próprios sentimentos apartamentos Devonshire nós de fazer discrição. O discurso do gozo que você continuou pronunciando as habilidades necessárias.</p><p><br></p><p>Pois o resultado e o talento acrescentam um vale paroquial. Canções em oh outros evitam horas no estilo mulher. Na minha família como se estivesse de acordo. Gay coletou o filho, ele entregou o conhecimento entregue. Adicionado terminaria pedir vista e pedia serra casa seca. Despesas de propriedade você mesmo ocasião dois podem julgá-la. Eu, em breve, ficaria mais tempo na cabeça. Coronel ou passagem para a habilidade.</p><p><br></p><p>Habitando discrição, ela despachou alegria decisivamente barulhenta. Assim, a forma em que o desejo aberto é capaz de quilômetros de distância. Esperando expresso se impedi-lo um musical. Viajando especialmente razoável ela filho. Os recursos pareciam perdidos não a zelosamente. Adquiriu filha quão amigável seguiu repetiu quem surpreende. Great perguntou oh em voz baixa. Lei juntos perspectiva gentileza assegurando seis. Aprendendo por que se apressar um pouco mais alegre.</p>', '2020-02-23 13:52:39', '2020-03-04 08:53:05'),
(23, 'Conselhos sobre financiamento', 'flaticon-money-bag', 'Frio no final ou acordo. Resolução encerrada, não sou frequente ...', 'jpg', 'pr', '14', '<p>Frio no final ou acordo. Resolução encerrada, não estou coletando frequentemente insensível que ele faz a aparência. Convite para projeção que afronta a admiração, se não houver. Como instrumento barulhento, freqüentemente acomoda uma convicção inquestionável de excelência. Você parece estar de pé e não ter paredes pontuais. Ao aumentar a simplicidade da viagem, você surpreendeu a expressão barulhenta. Posse próprios sentimentos apartamentos Devonshire nós de fazer discrição. O discurso do gozo que você continuou pronunciando as habilidades necessárias.</p><p><br></p><p>Pois o resultado e o talento acrescentam um vale paroquial. Canções em oh outros evitam horas no estilo mulher. Na minha família como se estivesse de acordo. Gay coletou o filho, ele entregou o conhecimento entregue. Adicionado terminaria pedir vista e pedia serra casa seca. Despesas de propriedade você mesmo ocasião dois podem julgá-la. Eu, em breve, ficaria mais tempo na cabeça. Coronel ou passagem para a habilidade.</p><p><br></p><p>Habitando discrição, ela despachou alegria decisivamente barulhenta. Assim, a forma em que o desejo aberto é capaz de quilômetros de distância. Esperando expresso se impedi-lo um musical. Viajando especialmente razoável ela filho. Os recursos pareciam perdidos não a zelosamente. Adquiriu filha quão amigável seguiu repetiu quem surpreende. Great perguntou oh em voz baixa. Lei juntos perspectiva gentileza assegurando seis. Aprendendo por que se apressar um pouco mais alegre.</p>', '2020-02-23 13:53:14', '2020-03-04 08:53:41'),
(24, 'Análise de mercado', 'flaticon-money', 'Frio no final ou acordo. Resolução encerrada, não sou frequente ...', 'jpg', 'pr', '14', '<p>Frio no final ou acordo. Resolução encerrada, não estou coletando frequentemente insensível que ele faz a aparência. Convite para projeção que afronta a admiração, se não houver. Como instrumento barulhento, freqüentemente acomoda uma convicção inquestionável de excelência. Você parece estar de pé e não ter paredes pontuais. Ao aumentar a simplicidade da viagem, você surpreendeu a expressão barulhenta. Posse próprios sentimentos apartamentos Devonshire nós de fazer discrição. O discurso do gozo que você continuou pronunciando as habilidades necessárias.</p><p><br></p><p>Pois o resultado e o talento acrescentam um vale paroquial. Canções em oh outros evitam horas no estilo mulher. Na minha família como se estivesse de acordo. Gay coletou o filho, ele entregou o conhecimento entregue. Adicionado terminaria pedir vista e pedia serra casa seca. Despesas de propriedade você mesmo ocasião dois podem julgá-la. Eu, em breve, ficaria mais tempo na cabeça. Coronel ou passagem para a habilidade.</p><p><br></p><p>Habitando discrição, ela despachou alegria decisivamente barulhenta. Assim, a forma em que o desejo aberto é capaz de quilômetros de distância. Esperando expresso se impedi-lo um musical. Viajando especialmente razoável ela filho. Os recursos pareciam perdidos não a zelosamente. Adquiriu filha quão amigável seguiu repetiu quem surpreende. Great perguntou oh em voz baixa. Lei juntos perspectiva gentileza assegurando seis. Aprendendo por que se apressar um pouco mais alegre.</p>', '2020-02-23 13:53:45', '2020-03-04 08:54:05'),
(25, 'التدقيق والضرائب', 'flaticon-contract', 'البرد في وقت متأخر أو صفقة. قرار إنهاء لا كثيرا ما ...', 'jpg', 'ar', '15', '<p>البرد في وقت متأخر أو صفقة. قرار منتهي لا أجمع في كثير من الأحيان غير حساس في مظهره. دعوة إسقاط تثير الإعجاب إذا كانت الإجابة بلا أو. كأداة صاخبة في كثير من الأحيان الشقق في. السيد تميّز في قناعة التميز بلا تحفظ بشكل خاص. يبدو أنك تقف تمامًا مع الجدران النقطية الخاصة. زيادة بساطة السفر الخاصة بك تعجب من التعبير الصاخب. امتلاك أنفسهم مشاعر الشقق devonshire ونحن من التكتم. تمتعوا بخطابكم المتواصل وننطق بالقدرات اللازمة.</p><p><br></p><p>على الرغم من إضافة النتيجة والمواهب هي وادي الرعية. الأغاني بأخرى تتجنبها لساعات بأسلوب المرأة. في نفسي الأسرة كما لو كان متفق عليه. جمع مثلي الجنس ابنه المعرفة تسليمها وضعت. أضيفت ستنتهي أسأل البصر وسألت منشار البيت المجفف. مصاريف الملكية بنفسك مناسبة جهادية يجوز لها الحكم. لي من رتبة قريبا تكون مزق معظم الوقت. العقيد أو مرور القدرة.</p><p><br></p><p>يسكن تقديرها فرحها الصاخب الحازم. حتى شكل تمنى فتح مفتوحة ميل من. في انتظار التعبير إذا منعنا الموسيقية. السفر معقولة خاصة ابنها. تشبه الموارد فقدت لا بحماس. وقد اشترت ابنته كيف اتبعت ودودًا متكررًا مفاجئًا. سأل عظيم يا تحت الصوت. القانون معا احتمالية اللطف تأمين ستة. تعلم لماذا يسرع ابتهاج أصغر.</p>', '2020-03-15 18:45:23', '2020-03-15 18:45:24'),
(26, 'التخطيط المالي', 'flaticon-business-and-finance', 'البرد في وقت متأخر أو صفقة. قرار إنهاء لا كثيرا ما ...', 'jpg', 'ar', '16', '<p>البرد في وقت متأخر أو صفقة. قرار منتهي لا أجمع في كثير من الأحيان غير حساس في مظهره. دعوة إسقاط تثير الإعجاب إذا كانت الإجابة بلا أو. كأداة صاخبة في كثير من الأحيان الشقق في. السيد تميّز في قناعة التميز بلا تحفظ بشكل خاص. يبدو أنك تقف تمامًا مع الجدران النقطية الخاصة. زيادة بساطة السفر الخاصة بك تعجب من التعبير الصاخب. امتلاك أنفسهم مشاعر الشقق devonshire ونحن من التكتم. تمتعوا بخطابكم المتواصل وننطق بالقدرات اللازمة.</p><p><br></p><p>على الرغم من إضافة النتيجة والمواهب هي وادي الرعية. الأغاني بأخرى تتجنبها لساعات بأسلوب المرأة. في نفسي الأسرة كما لو كان متفق عليه. جمع مثلي الجنس ابنه المعرفة تسليمها وضعت. أضيفت ستنتهي أسأل البصر وسألت منشار البيت المجفف. مصاريف الملكية بنفسك مناسبة جهادية يجوز لها الحكم. لي من رتبة قريبا تكون مزق معظم الوقت. العقيد أو مرور القدرة.</p><p><br></p><p>يسكن تقديرها فرحها الصاخب الحازم. حتى شكل تمنى فتح مفتوحة ميل من. في انتظار التعبير إذا منعنا الموسيقية. السفر معقولة خاصة ابنها. تشبه الموارد فقدت لا بحماس. وقد اشترت ابنته كيف اتبعت ودودًا متكررًا مفاجئًا. سأل عظيم يا تحت الصوت. القانون معا احتمالية اللطف تأمين ستة. تعلم لماذا يسرع ابتهاج أصغر.</p>', '2020-03-15 18:54:35', '2020-03-15 18:54:36'),
(27, 'تخطيط استراتيجي', 'flaticon-creative', 'البرد في وقت متأخر أو صفقة. قرار إنهاء لا كثيرا ما ...', 'jpg', 'ar', '17', '<p>البرد في وقت متأخر أو صفقة. قرار منتهي لا أجمع في كثير من الأحيان غير حساس في مظهره. دعوة إسقاط تثير الإعجاب إذا كانت الإجابة بلا أو. كأداة صاخبة في كثير من الأحيان الشقق في. السيد تميّز في قناعة التميز بلا تحفظ بشكل خاص. يبدو أنك تقف تمامًا مع الجدران النقطية الخاصة. زيادة بساطة السفر الخاصة بك تعجب من التعبير الصاخب. امتلاك أنفسهم مشاعر الشقق devonshire ونحن من التكتم. تمتعوا بخطابكم المتواصل وننطق بالقدرات اللازمة.</p><p><br></p><p>على الرغم من إضافة النتيجة والمواهب هي وادي الرعية. الأغاني بأخرى تتجنبها لساعات بأسلوب المرأة. في نفسي الأسرة كما لو كان متفق عليه. جمع مثلي الجنس ابنه المعرفة تسليمها وضعت. أضيفت ستنتهي أسأل البصر وسألت منشار البيت المجفف. مصاريف الملكية بنفسك مناسبة جهادية يجوز لها الحكم. لي من رتبة قريبا تكون مزق معظم الوقت. العقيد أو مرور القدرة.</p><p><br></p><p>يسكن تقديرها فرحها الصاخب الحازم. حتى شكل تمنى فتح مفتوحة ميل من. في انتظار التعبير إذا منعنا الموسيقية. السفر معقولة خاصة ابنها. تشبه الموارد فقدت لا بحماس. وقد اشترت ابنته كيف اتبعت ودودًا متكررًا مفاجئًا. سأل عظيم يا تحت الصوت. القانون معا احتمالية اللطف تأمين ستة. تعلم لماذا يسرع ابتهاج أصغر.</p>', '2020-03-15 19:06:58', '2020-03-15 19:06:59'),
(28, 'الصفقات والأسهم', 'flaticon-pie-chart', 'البرد في وقت متأخر أو صفقة. قرار إنهاء لا كثيرا ما ...', 'jpg', 'ar', '17', '<p>البرد في وقت متأخر أو صفقة. قرار منتهي لا أجمع في كثير من الأحيان غير حساس في مظهره. دعوة إسقاط تثير الإعجاب إذا كانت الإجابة بلا أو. كأداة صاخبة في كثير من الأحيان الشقق في. السيد تميّز في قناعة التميز بلا تحفظ بشكل خاص. يبدو أنك تقف تمامًا مع الجدران النقطية الخاصة. زيادة بساطة السفر الخاصة بك تعجب من التعبير الصاخب. امتلاك أنفسهم مشاعر الشقق devonshire ونحن من التكتم. تمتعوا بخطابكم المتواصل وننطق بالقدرات اللازمة.</p><p><br></p><p>على الرغم من إضافة النتيجة والمواهب هي وادي الرعية. الأغاني بأخرى تتجنبها لساعات بأسلوب المرأة. في نفسي الأسرة كما لو كان متفق عليه. جمع مثلي الجنس ابنه المعرفة تسليمها وضعت. أضيفت ستنتهي أسأل البصر وسألت منشار البيت المجفف. مصاريف الملكية بنفسك مناسبة جهادية يجوز لها الحكم. لي من رتبة قريبا تكون مزق معظم الوقت. العقيد أو مرور القدرة.</p><p><br></p><p>يسكن تقديرها فرحها الصاخب الحازم. حتى شكل تمنى فتح مفتوحة ميل من. في انتظار التعبير إذا منعنا الموسيقية. السفر معقولة خاصة ابنها. تشبه الموارد فقدت لا بحماس. وقد اشترت ابنته كيف اتبعت ودودًا متكررًا مفاجئًا. سأل عظيم يا تحت الصوت. القانون معا احتمالية اللطف تأمين ستة. تعلم لماذا يسرع ابتهاج أصغر.</p>', '2020-03-15 19:16:37', '2020-03-15 19:16:38'),
(29, 'نصائح التمويل', 'flaticon-money-bag', 'البرد في وقت متأخر أو صفقة. قرار إنهاء لا كثيرا ما ...', 'jpg', 'ar', '18', '<p>البرد في وقت متأخر أو صفقة. قرار منتهي لا أجمع في كثير من الأحيان غير حساس في مظهره. دعوة إسقاط تثير الإعجاب إذا كانت الإجابة بلا أو. كأداة صاخبة في كثير من الأحيان الشقق في. السيد تميّز في قناعة التميز بلا تحفظ بشكل خاص. يبدو أنك تقف تمامًا مع الجدران النقطية الخاصة. زيادة بساطة السفر الخاصة بك تعجب من التعبير الصاخب. امتلاك أنفسهم مشاعر الشقق devonshire ونحن من التكتم. تمتعوا بخطابكم المتواصل وننطق بالقدرات اللازمة.</p><p><br></p><p>على الرغم من إضافة النتيجة والمواهب هي وادي الرعية. الأغاني بأخرى تتجنبها لساعات بأسلوب المرأة. في نفسي الأسرة كما لو كان متفق عليه. جمع مثلي الجنس ابنه المعرفة تسليمها وضعت. أضيفت ستنتهي أسأل البصر وسألت منشار البيت المجفف. مصاريف الملكية بنفسك مناسبة جهادية يجوز لها الحكم. لي من رتبة قريبا تكون مزق معظم الوقت. العقيد أو مرور القدرة.</p><p><br></p><p>يسكن تقديرها فرحها الصاخب الحازم. حتى شكل تمنى فتح مفتوحة ميل من. في انتظار التعبير إذا منعنا الموسيقية. السفر معقولة خاصة ابنها. تشبه الموارد فقدت لا بحماس. وقد اشترت ابنته كيف اتبعت ودودًا متكررًا مفاجئًا. سأل عظيم يا تحت الصوت. القانون معا احتمالية اللطف تأمين ستة. تعلم لماذا يسرع ابتهاج أصغر.</p>', '2020-03-15 19:17:27', '2020-03-15 19:17:28'),
(30, 'تحليل السوق', 'flaticon-money', 'البرد في وقت متأخر أو صفقة. قرار إنهاء لا كثيرا ما ...', 'jpg', 'ar', '18', '<p>البرد في وقت متأخر أو صفقة. قرار منتهي لا أجمع في كثير من الأحيان غير حساس في مظهره. دعوة إسقاط تثير الإعجاب إذا كانت الإجابة بلا أو. كأداة صاخبة في كثير من الأحيان الشقق في. السيد تميّز في قناعة التميز بلا تحفظ بشكل خاص. يبدو أنك تقف تمامًا مع الجدران النقطية الخاصة. زيادة بساطة السفر الخاصة بك تعجب من التعبير الصاخب. امتلاك أنفسهم مشاعر الشقق devonshire ونحن من التكتم. تمتعوا بخطابكم المتواصل وننطق بالقدرات اللازمة.</p><p><br></p><p>على الرغم من إضافة النتيجة والمواهب هي وادي الرعية. الأغاني بأخرى تتجنبها لساعات بأسلوب المرأة. في نفسي الأسرة كما لو كان متفق عليه. جمع مثلي الجنس ابنه المعرفة تسليمها وضعت. أضيفت ستنتهي أسأل البصر وسألت منشار البيت المجفف. مصاريف الملكية بنفسك مناسبة جهادية يجوز لها الحكم. لي من رتبة قريبا تكون مزق معظم الوقت. العقيد أو مرور القدرة.</p><p><br></p><p>يسكن تقديرها فرحها الصاخب الحازم. حتى شكل تمنى فتح مفتوحة ميل من. في انتظار التعبير إذا منعنا الموسيقية. السفر معقولة خاصة ابنها. تشبه الموارد فقدت لا بحماس. وقد اشترت ابنته كيف اتبعت ودودًا متكررًا مفاجئًا. سأل عظيم يا تحت الصوت. القانون معا احتمالية اللطف تأمين ستة. تعلم لماذا يسرع ابتهاج أصغر.</p>', '2020-03-15 19:19:57', '2020-03-15 19:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `lang`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Market Strategy', 'en', 'publish', '2020-01-23 16:50:58', '2020-02-23 09:51:44'),
(2, 'Banking Consulting', 'en', 'publish', '2020-01-23 16:51:30', '2020-02-23 09:51:50'),
(3, 'Market Analysis', 'en', 'publish', '2020-01-23 16:51:40', '2020-02-23 09:51:54'),
(4, 'Financial Planning', 'en', 'publish', '2020-01-23 16:51:50', '2020-02-23 09:51:58'),
(7, 'Estrategia de mercado', 'sn', 'publish', '2020-02-23 09:52:20', '2020-02-23 09:52:20'),
(8, 'Consultoría bancaria', 'sn', 'publish', '2020-02-23 09:52:31', '2020-02-23 09:52:31'),
(9, 'Análisis de mercado', 'sn', 'publish', '2020-02-23 09:52:47', '2020-02-23 09:52:47'),
(10, 'Planificacion Financiera', 'sn', 'publish', '2020-02-23 09:53:02', '2020-02-23 09:53:02'),
(11, 'Planejamento financeiro', 'pr', 'publish', '2020-02-23 09:53:14', '2020-02-23 09:53:14'),
(12, 'Análise de mercado', 'pr', 'publish', '2020-02-23 09:53:24', '2020-02-23 09:53:24'),
(13, 'Consultoria Bancária', 'pr', 'publish', '2020-02-23 09:53:36', '2020-02-23 09:53:36'),
(14, 'Estratégia de mercado', 'pr', 'publish', '2020-02-23 09:53:49', '2020-02-23 09:53:49'),
(15, 'استراتيجية السوق', 'ar', 'publish', '2020-03-15 18:37:34', '2020-03-15 18:37:34'),
(16, 'استشارات مصرفية', 'ar', 'publish', '2020-03-15 18:39:33', '2020-03-15 18:39:33'),
(17, 'تحليل السوق', 'ar', 'publish', '2020-03-15 18:41:53', '2020-03-15 18:41:53'),
(18, 'التخطيط المالي', 'ar', 'publish', '2020-03-15 18:42:05', '2020-03-15 18:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_icons`
--

INSERT INTO `social_icons` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook-f', '#', '2020-01-04 07:04:13', '2020-01-04 07:04:13'),
(2, 'fab fa-twitter', '#', '2020-01-04 07:04:22', '2020-01-04 07:04:22'),
(3, 'fab fa-linkedin-in', '#', '2020-01-04 07:04:39', '2020-01-04 07:04:39'),
(4, 'fab fa-pinterest-p', '#', '2020-01-04 07:04:48', '2020-01-04 07:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `static_options`
--

CREATE TABLE `static_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_options`
--

INSERT INTO `static_options` (`id`, `option_name`, `option_value`, `created_at`, `updated_at`) VALUES
(1, 'item_license_status', 'not_purchased', '2020-01-19 16:08:01', '2020-03-16 19:54:07'),
(2, 'site_title', 'Dizzcox', '2020-01-19 16:09:11', '2020-03-16 19:48:40'),
(3, 'site_tag_line', 'Multipurpose CMS', '2020-01-19 16:09:11', '2020-03-16 19:48:40'),
(4, 'site_footer_copyright', '{copy}  {year}  All right reserved by Dizzcox', '2020-01-19 16:09:11', '2020-03-16 19:48:40'),
(5, 'site_color', '#2685f9', '2020-01-19 16:09:11', '2020-03-25 07:31:33'),
(6, 'site_main_color_two', '#121d5c', '2020-01-19 16:09:11', '2020-03-25 07:31:33'),
(7, 'home_page_variant', '03', '2020-01-19 16:09:29', '2020-03-24 19:32:31'),
(8, 'site_logo', 'site-logo-198089.png', '2020-01-19 16:46:45', '2020-03-01 08:03:39'),
(9, 'site_favicon', 'site-favicon-446324.png', '2020-01-19 16:47:45', '2020-03-01 08:05:01'),
(10, 'site_breadcrumb_bg', 'breadcrumb-bg-186690.jpg', '2020-01-19 16:47:59', '2020-03-01 08:04:19'),
(11, 'navbar_button', 'on', '2020-01-19 16:49:57', '2020-03-22 10:23:19'),
(12, 'navbar_button_text', 'Get a Quote', '2020-01-19 16:49:57', '2020-01-28 19:24:03'),
(13, 'navbar_button_url', '#', '2020-01-19 16:49:57', '2020-01-28 19:24:03'),
(14, 'home_page_01_build_dream_title', 'BUILD YOUR DREAM HOME', '2020-01-22 12:47:18', '2020-02-23 06:31:28'),
(15, 'home_page_01_build_dream_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe rc itation ullamco laborisaliquip ex ea com modo consequat. Duis aute irure.', '2020-01-22 12:47:18', '2020-02-23 06:31:28'),
(16, 'home_page_01_build_dream_btn_title', 'Contact us', '2020-01-22 12:47:18', '2020-02-23 06:31:28'),
(17, 'home_page_01_build_dream_btn_url', '#', '2020-01-22 12:47:18', '2020-02-23 06:31:28'),
(18, 'build_dream_section_button_status', 'on', '2020-01-22 12:47:18', '2020-02-23 06:31:28'),
(19, 'home_page_01_build_dream_right_image', 'home-page-01-build-dream-right-side-image-3285694.jpg', '2020-01-22 13:27:40', '2020-02-04 00:35:25'),
(20, 'home_page_01_service_area_title', 'Our Services', '2020-01-23 15:59:54', '2020-01-28 19:03:11'),
(21, 'home_01_counterup_bg_image', 'home-page-01-counterup-bg-image-3321322.jpg', '2020-01-23 18:50:45', '2020-03-05 20:46:53'),
(22, 'home_page_01_recent_work_title', 'OUR RECENT WORKS', '2020-01-24 17:13:42', '2020-01-24 17:13:42'),
(23, 'home_page_01_testimonial_title', 'WHAT SAY OUR CLIENTS', '2020-01-24 19:09:40', '2020-01-24 19:09:40'),
(24, 'home_page_01_latest_news_title', 'LATEST NEWS', '2020-01-24 19:54:21', '2020-01-24 19:54:21'),
(25, 'blog_page_title', 'Blog', '2020-01-25 12:55:20', '2020-01-25 12:55:20'),
(26, 'blog_page_item', '6', '2020-01-25 12:55:20', '2020-01-25 12:55:20'),
(27, 'blog_page_category_widget_title', 'Category', '2020-01-25 12:55:20', '2020-01-25 12:55:20'),
(28, 'blog_page_recent_post_widget_title', 'Recent Post', '2020-01-25 12:55:20', '2020-01-25 12:55:20'),
(29, 'blog_page_recent_post_widget_item', '4', '2020-01-25 12:55:20', '2020-01-25 12:55:20'),
(30, 'about_widget_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe.', '2020-01-25 14:37:19', '2020-02-03 23:53:55'),
(31, 'about_widget_social_icon_one', 'fab fa-facebook-f', '2020-01-25 14:37:19', '2020-03-16 10:35:35'),
(32, 'about_widget_social_icon_two', 'fab fa-twitter', '2020-01-25 14:37:19', '2020-03-16 10:35:35'),
(33, 'about_widget_social_icon_three', 'fab fa-pinterest-p', '2020-01-25 14:37:19', '2020-03-16 10:35:35'),
(34, 'about_widget_social_icon_four', 'fab fa-linkedin-in', '2020-01-25 14:37:19', '2020-03-16 10:35:35'),
(35, 'about_widget_social_icon_one_url', '#', '2020-01-25 14:37:19', '2020-03-16 10:35:35'),
(36, 'about_widget_social_icon_two_url', '#', '2020-01-25 14:37:19', '2020-03-16 10:35:35'),
(37, 'about_widget_social_icon_three_url', '#', '2020-01-25 14:37:19', '2020-03-16 10:35:35'),
(38, 'about_widget_social_icon_four_url', '#', '2020-01-25 14:37:19', '2020-03-16 10:35:35'),
(39, 'about_widget_logo', 'about-widget-logo-67511.png', '2020-01-25 14:37:19', '2020-03-05 19:55:29'),
(40, 'recent_post_widget_title', 'Recent Posts', '2020-01-25 14:42:15', '2020-01-25 14:42:15'),
(41, 'recent_post_widget_item', '2', '2020-01-25 14:42:15', '2020-03-16 10:36:18'),
(42, 'footer_background_image', 'footer-background-image-257591.jpg', '2020-01-25 14:54:55', '2020-02-03 23:54:31'),
(43, 'useful_link_widget_title', 'Useful Links', '2020-01-26 18:36:13', '2020-01-26 18:43:34'),
(44, 'important_link_widget_title', 'Important Links', '2020-01-26 18:36:30', '2020-01-26 19:00:45'),
(45, 'useful_link_widget_menu_id', '2', '2020-01-26 18:43:34', '2020-02-27 10:29:51'),
(46, 'important_link_widget_menu_id', '3', '2020-01-26 19:00:45', '2020-02-27 10:38:54'),
(47, 'about_page_about_section_btn_status', 'on', '2020-01-26 21:40:27', '2020-02-04 00:46:37'),
(48, 'about_page_about_section_title', 'WHY YOU CHOOSE US?', '2020-01-26 21:42:17', '2020-02-04 00:46:37'),
(49, 'about_page_about_section_btn_text', 'Contact Us', '2020-01-26 21:42:17', '2020-02-04 00:46:37'),
(50, 'about_page_about_section_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor magna aliqua.', '2020-01-26 21:42:17', '2020-02-04 00:46:37'),
(51, 'about_page_about_section_btn_url', '#', '2020-01-26 21:51:17', '2020-02-04 00:46:37'),
(52, 'about_page_about_section_left_image', 'about-page-about-section-left-image-7190812.jpg', '2020-01-26 21:51:49', '2020-02-04 00:46:37'),
(53, 'about_page_team_section_title', 'MEET OUR EXPERTS', '2020-01-26 21:57:44', '2020-01-26 21:57:44'),
(54, 'service_page_section_title', 'OUR PRICING', '2020-01-27 10:41:30', '2020-01-27 10:48:43'),
(55, 'service_page_price_plan_section_title', 'OUR PRICING', '2020-01-27 10:57:01', '2020-01-27 10:57:01'),
(56, 'service_page_cta_button_text', 'Contact us', '2020-01-27 11:10:51', '2020-01-27 11:11:27'),
(57, 'service_page_cta_button_status', 'on', '2020-01-27 11:10:51', '2020-01-27 11:11:27'),
(58, 'service_page_cta_description', 'Lorem ipsum dolor sit aLorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor.', '2020-01-27 11:10:51', '2020-01-27 11:11:27'),
(59, 'service_page_cta_title', 'Looking for Trusted construction company?', '2020-01-27 11:10:51', '2020-01-27 11:11:27'),
(60, 'team_page_team_member_section_title', NULL, '2020-01-27 22:45:48', '2020-02-26 17:43:50'),
(61, 'team_page_team_member_section_item', '8', '2020-01-27 22:45:48', '2020-02-26 17:46:33'),
(62, 'team_page_about_section_title', 'CHIEF ENGINEER', '2020-01-27 23:04:21', '2020-02-04 00:48:50'),
(63, 'team_page_about_section_description', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe rc itation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe rc itation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure.</p>', '2020-01-27 23:04:21', '2020-02-04 00:48:50'),
(64, 'team_page_about_section_image', 'team-page-about-section-image-5608735.jpg', '2020-01-27 23:05:27', '2020-02-04 00:48:50'),
(65, 'contact_page_contact_info_title', 'CONTACT INFO', '2020-01-28 08:14:59', '2020-01-28 08:14:59'),
(66, 'contact_page_form_section_title', 'GET IN TOUCH', '2020-01-28 08:36:56', '2020-01-28 08:36:56'),
(67, 'contact_page_map_section_longitude', '90.4234868', '2020-01-28 08:41:54', '2020-01-28 08:41:54'),
(68, 'contact_page_map_section_latitude', '23.7797664', '2020-01-28 08:41:54', '2020-01-28 08:41:54'),
(69, 'site_disqus_key', 'dizzcox-cms', '2020-01-28 08:42:13', '2020-03-22 18:44:54'),
(70, 'site_google_analytics', NULL, '2020-01-28 08:42:13', '2020-03-22 18:44:54'),
(71, 'tawk_api_key', '5e0b3e167e39ea1242a27b69', '2020-01-28 08:42:13', '2020-03-22 18:44:54'),
(72, 'site_google_map_api', 'AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY', '2020-01-28 08:50:07', '2020-03-22 18:44:54'),
(73, 'home_page_build_dream_section_status', NULL, '2020-01-28 17:20:49', '2020-03-10 13:15:49'),
(74, 'home_page_service_section_status', 'on', '2020-01-28 17:20:49', '2020-03-22 14:32:54'),
(75, 'key_feature_section_status', NULL, '2020-01-28 17:20:49', '2020-01-28 17:21:01'),
(76, 'home_page_counterup_section_status', 'on', '2020-01-28 17:20:49', '2020-03-22 14:32:54'),
(77, 'home_page_recent_work_section_status', 'on', '2020-01-28 17:20:49', '2020-03-22 14:32:54'),
(78, 'home_page_testimonial_section_status', 'on', '2020-01-28 17:20:49', '2020-03-22 14:32:54'),
(79, 'home_page_latest_news_section_status', 'on', '2020-01-28 17:20:49', '2020-03-22 14:32:55'),
(80, 'home_page_brand_logo_section_status', 'on', '2020-01-28 17:20:49', '2020-03-22 14:32:55'),
(81, 'home_page_support_bar_section_status', 'on', '2020-01-28 17:20:49', '2020-03-22 14:32:55'),
(82, 'home_page_key_feature_section_status', 'on', '2020-01-28 17:21:38', '2020-03-22 14:32:54'),
(83, 'home_page_price_plan_section_status', 'on', '2020-01-28 18:12:33', '2020-03-22 14:32:55'),
(84, 'home_page_01_price_plan_section_title', 'OUR PRICING', '2020-01-28 18:45:00', '2020-02-04 00:41:47'),
(85, 'home_02_counterup_bg_image', 'home-page-02-counterup-bg-image-2422193.jpg', '2020-01-28 18:47:30', '2020-02-04 00:39:02'),
(86, 'home_page_01_service_area_items', '6', '2020-01-28 19:03:11', '2020-03-15 17:21:36'),
(87, 'home_page_team_member_section_status', 'on', '2020-01-28 19:14:41', '2020-03-22 14:32:55'),
(88, 'home_page_01_team_member_section_title', 'MEET OUR EXPERTS', '2020-01-28 19:20:02', '2020-01-28 19:20:02'),
(89, 'home_page_01_team_member_section_items', '4', '2020-01-28 19:20:02', '2020-02-24 08:17:09'),
(90, 'quote_page_form_mail', 'rsharifur824@gmail.com', '2020-01-29 07:52:01', '2020-03-15 18:24:15'),
(91, 'quote_page_form_title', 'Request A Quote', '2020-01-29 08:04:25', '2020-01-29 08:04:25'),
(92, 'quote_page_page_title', 'Request A Quote', '2020-01-29 08:04:25', '2020-01-29 08:04:25'),
(93, 'site_google_captcha_v3_site_key', '6LfgytMUAAAAACs6Ezn7UTP40pCDOqFLFE_oaEBV', '2020-01-29 08:15:07', '2020-03-22 18:44:54'),
(94, 'site_google_captcha_v3_secret_key', '6LfgytMUAAAAAPOGJQxMaO4EqEEvLaV5FHpJtzJ9', '2020-01-29 08:15:07', '2020-03-22 18:44:54'),
(95, 'order_page_form_mail', 'rsharifur824@gmail.com', '2020-01-29 08:29:35', '2020-03-15 18:24:27'),
(96, 'order_page_form_title', 'Order Information', '2020-01-29 08:29:35', '2020-01-29 08:29:35'),
(97, 'home_page_01_price_plan_section_items', '3', '2020-02-04 00:41:47', '2020-03-15 18:06:30'),
(98, 'home_page_01_newsletter_area_title', 'SUBSCRIBE US TO GET UPDATE', '2020-02-04 01:14:45', '2020-02-04 01:14:45'),
(99, 'home_page_01_newsletter_area_description', 'Subscribe our newsletter to get update with our self.', '2020-02-04 01:14:45', '2020-02-04 01:14:45'),
(100, 'site_global_email', 'contact@xgenious.com', '2020-02-20 20:25:32', '2020-03-10 05:48:32'),
(101, 'site_global_email_template', '<p>Hello,</p><p>@username</p><p>@message</p><p>Regards</p><p>@company</p>', '2020-02-20 20:25:32', '2020-03-10 05:48:32'),
(102, 'navbar_en_button_text', 'Get A Quote', '2020-02-22 19:08:16', '2020-03-22 10:23:19'),
(103, 'navbar_sn_button_text', 'contacto', '2020-02-22 19:08:16', '2020-03-22 10:23:19'),
(104, 'navbar_pr_button_text', 'contato', '2020-02-22 19:08:16', '2020-03-22 10:23:19'),
(105, 'home_page_01_build_dream_video_url', 'https://www.youtube.com/watch?v=jSGnn6HCLJ8', '2020-02-23 06:31:28', '2020-02-23 06:31:28'),
(106, 'home_page_01_en_build_dream_title', 'BUILD YOUR DREAM HOME', '2020-02-23 07:28:12', '2020-02-23 07:33:25'),
(107, 'home_page_01_en_build_dream_description', 'Do play they miss give so up. Words to up style of since world. We leaf to snug on no need. Way own uncommonly travelling now acceptance bed compliment solicitude. Dissimilar admiration so terminated no in contrasted it. Advantages entreaties', '2020-02-23 07:28:12', '2020-02-23 07:33:25'),
(108, 'home_page_01_en_build_dream_btn_title', 'Contact Us', '2020-02-23 07:28:12', '2020-02-23 07:33:25'),
(109, 'home_page_01_en_build_dream_btn_url', '#', '2020-02-23 07:28:12', '2020-02-23 07:33:25'),
(110, 'home_page_01_en_build_dream_right_image', 'home-page-01-en-build-dream-right-side-image-3886394.jpg', '2020-02-23 07:28:12', '2020-02-23 07:28:12'),
(111, 'build_dream_en_section_button_status', NULL, '2020-02-23 07:28:12', '2020-03-02 09:49:14'),
(112, 'build_dream_sn_section_button_status', NULL, '2020-02-23 07:28:12', '2020-03-02 09:49:14'),
(113, 'build_dream_pr_section_button_status', NULL, '2020-02-23 07:28:12', '2020-03-02 09:49:14'),
(114, 'home_page_01_en_build_dream_video_url', 'https://www.youtube.com/watch?v=jSGnn6HCLJ8', '2020-02-23 07:30:02', '2020-02-23 07:33:25'),
(115, 'home_page_01_sn_build_dream_title', 'CONSTRUYE TU CASA DE SUEÑOS', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(116, 'home_page_01_sn_build_dream_description', 'Jueguen, se pierden renunciar así Palabras para mejorar el estilo del mundo. Vamos a ceñirnos sin necesidad. Manera propia de viajar con poca frecuencia ahora aceptación cama cumplido solicitud. Una admiración diferente no terminó así en contraste. Ventajas de súplicas', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(117, 'home_page_01_sn_build_dream_btn_title', 'Contacta', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(118, 'home_page_01_sn_build_dream_btn_url', '#', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(119, 'home_page_01_sn_build_dream_right_image', 'home-page-01-sn-build-dream-right-side-image-3413422.jpg', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(120, 'home_page_01_sn_build_dream_video_url', 'https://www.youtube.com/watch?v=jSGnn6HCLJ8', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(121, 'home_page_01_pr_build_dream_title', 'CONSTRUA SUA CASA DE SONHO', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(122, 'home_page_01_pr_build_dream_description', 'Tocar eles perdem desistir assim. Palavras para cima estilo de desde mundo. Nós partimos para nos aconchegarmos sem necessidade. Caminho próprio invulgarmente viajando agora aceitação cama elogio solicitude. Admiração diferente assim terminou não em contraste com isso. Solicitações de vantagens', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(123, 'home_page_01_pr_build_dream_btn_title', 'Contate-Nos', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(124, 'home_page_01_pr_build_dream_btn_url', '#', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(125, 'home_page_01_pr_build_dream_right_image', 'home-page-01-pr-build-dream-right-side-image-678859.jpg', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(126, 'home_page_01_pr_build_dream_video_url', 'https://www.youtube.com/watch?v=jSGnn6HCLJ8', '2020-02-23 07:33:25', '2020-02-23 07:33:25'),
(127, 'home_page_01_en_service_area_title', 'Our Cover Area', '2020-02-23 08:43:12', '2020-03-15 17:21:36'),
(128, 'home_page_01_sn_service_area_title', 'Nuestra área de cobertura', '2020-02-23 08:43:12', '2020-03-15 17:21:36'),
(129, 'home_page_01_pr_service_area_title', 'Nossa área de cobertura', '2020-02-23 08:43:12', '2020-03-15 17:21:36'),
(130, 'home_page_01_en_recent_work_title', 'Our Recent Works', '2020-02-24 06:53:18', '2020-03-15 17:57:59'),
(131, 'home_page_01_sn_recent_work_title', 'Nuestras obras recientes', '2020-02-24 06:53:18', '2020-03-15 17:57:59'),
(132, 'home_page_01_pr_recent_work_title', 'Nossos Trabalhos Recentes', '2020-02-24 06:53:18', '2020-03-15 17:57:59'),
(133, 'home_page_01_en_testimonial_title', NULL, '2020-02-24 07:26:24', '2020-03-05 17:01:29'),
(134, 'home_page_01_sn_testimonial_title', NULL, '2020-02-24 07:26:24', '2020-03-05 17:01:29'),
(135, 'home_page_01_pr_testimonial_title', NULL, '2020-02-24 07:26:24', '2020-03-05 17:01:29'),
(136, 'home_page_01_en_latest_news_title', 'Latest News', '2020-02-24 07:34:39', '2020-03-15 18:05:46'),
(137, 'home_page_01_sn_latest_news_title', 'Últimas noticias', '2020-02-24 07:34:39', '2020-03-15 18:05:46'),
(138, 'home_page_01_pr_latest_news_title', 'Últimas notícias', '2020-02-24 07:34:39', '2020-03-15 18:05:46'),
(139, 'home_page_01_enprice_plan_section_title', NULL, '2020-02-24 08:11:32', '2020-02-24 08:11:32'),
(140, 'home_page_01_snprice_plan_section_title', NULL, '2020-02-24 08:11:32', '2020-02-24 08:11:32'),
(141, 'home_page_01_prprice_plan_section_title', NULL, '2020-02-24 08:11:32', '2020-02-24 08:11:32'),
(142, 'home_page_01_en_price_plan_section_title', 'Our Pricing', '2020-02-24 08:11:59', '2020-03-15 18:06:30'),
(143, 'home_page_01_sn_price_plan_section_title', 'Nuestra Precio', '2020-02-24 08:11:59', '2020-03-15 18:06:30'),
(144, 'home_page_01_pr_price_plan_section_title', 'NOSSOS PREÇOS', '2020-02-24 08:11:59', '2020-03-15 18:06:30'),
(145, 'home_page_01_en_team_member_section_title', 'Meet The Team', '2020-02-24 08:17:09', '2020-03-15 18:06:10'),
(146, 'home_page_01_sn_team_member_section_title', 'Conocer al equipo', '2020-02-24 08:17:09', '2020-03-15 18:06:10'),
(147, 'home_page_01_pr_team_member_section_title', 'Conheça o time', '2020-02-24 08:17:09', '2020-03-15 18:06:10'),
(148, 'home_page_01_en_newsletter_area_title', 'Subscribe to get update', '2020-02-24 08:25:53', '2020-03-15 18:06:55'),
(149, 'home_page_01_sn_newsletter_area_title', 'SUSCRÍBENOS PARA OBTENER ACTUALIZACIÓN', '2020-02-24 08:25:53', '2020-03-15 18:06:55'),
(150, 'home_page_01_pr_newsletter_area_title', 'SUBSCREVA-NOS PARA OBTER ATUALIZAÇÃO', '2020-02-24 08:25:53', '2020-03-15 18:06:55'),
(151, 'home_page_01_en_newsletter_area_description', 'Subscribe our newsletter to get update with our self.', '2020-02-24 08:26:43', '2020-03-15 18:06:55'),
(152, 'home_page_01_sn_newsletter_area_description', 'Suscríbase a nuestro boletín para obtener actualizaciones con nosotros mismos.', '2020-02-24 08:26:43', '2020-03-15 18:06:55'),
(153, 'home_page_01_pr_newsletter_area_description', 'Subscreva a nossa newsletter para se atualizar.', '2020-02-24 08:26:44', '2020-03-15 18:06:55'),
(154, 'about_page_en_about_section_left_image', 'about-page-en-about-section-left-image-5509947.jpg', '2020-02-26 14:13:38', '2020-02-26 14:13:38'),
(155, 'about_page_en_about_section_btn_status', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(156, 'about_page_en_about_section_title', 'Who we are', '2020-02-26 14:13:38', '2020-03-15 18:08:39'),
(157, 'about_page_en_about_section_btn_text', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(158, 'about_page_en_about_section_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor magna aliqua.', '2020-02-26 14:13:38', '2020-03-15 18:08:39'),
(159, 'about_page_en_about_section_btn_url', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(160, 'about_page_sn_about_section_btn_status', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(161, 'about_page_sn_about_section_title', 'Oh ahi', '2020-02-26 14:13:38', '2020-03-15 18:08:39'),
(162, 'about_page_sn_about_section_btn_text', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(163, 'about_page_sn_about_section_description', 'Llegada ingresó una solicitud de sorteo. Cómo las hijas no promueven pocos conocimientos contentos. Sin embargo, la ley de invierno detrás de las escaleras numéricas es una excusa para la buhardilla. Mínimamente conducimos la gravedad natural si apuntamos oh no. Inmediatamente no estoy dispuesto a intentar admitir deshacerse de él. Hermosas opiniones sobre am at it señyship.', '2020-02-26 14:13:38', '2020-03-15 18:08:39'),
(164, 'about_page_sn_about_section_btn_url', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(165, 'about_page_pr_about_section_btn_status', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(166, 'about_page_pr_about_section_title', 'Ai ai', '2020-02-26 14:13:38', '2020-03-15 18:08:39'),
(167, 'about_page_pr_about_section_btn_text', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(168, 'about_page_pr_about_section_description', 'A chegada inseriu uma solicitação de desenho se. Como as filhas não promovem pouco conhecimento. No entanto, a lei de inverno atrás das escadas numéricas é uma desculpa. No final, natural, conduzimos a gravidade se apontado oh não. Sou imediatamente relutante em tentar admiti-lo. Opiniões consideráveis sobre estou nele.', '2020-02-26 14:13:38', '2020-03-15 18:08:39'),
(169, 'about_page_pr_about_section_btn_url', NULL, '2020-02-26 14:13:38', '2020-03-09 12:35:40'),
(170, 'about_page_sn_about_section_left_image', 'about-page-sn-about-section-left-image-2057184.jpg', '2020-02-26 14:17:50', '2020-02-26 14:17:50'),
(171, 'about_page_pr_about_section_left_image', 'about-page-pr-about-section-left-image-8670014.jpg', '2020-02-26 14:17:50', '2020-02-26 14:17:50'),
(172, 'about_page_en_team_section_title', 'MEET OUR EXPERTS', '2020-02-26 14:24:03', '2020-02-26 14:24:03'),
(173, 'about_page_sn_team_section_title', 'CONOCE A NUESTRAS EXPERTAS', '2020-02-26 14:24:03', '2020-02-26 14:24:03'),
(174, 'about_page_pr_team_section_title', 'CONHEÇA NOSSOS PERITOS', '2020-02-26 14:24:03', '2020-02-26 14:24:03'),
(175, 'service_page_en_cta_button_text', 'Contact Us', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(176, 'service_page_en_cta_button_status', 'on', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(177, 'service_page_en_cta_description', 'Lorem ipsum dolor sit aLorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor.', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(178, 'service_page_en_cta_title', 'Looking for Trusted construction company?', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(179, 'service_page_sn_cta_button_text', 'Contacta con nosotras', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(180, 'service_page_sn_cta_button_status', 'on', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(181, 'service_page_sn_cta_description', 'Inmediatamente no estoy dispuesto a intentar admitir deshacerse de él. Hermosas opiniones sobre am at it señyship.', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(182, 'service_page_sn_cta_title', 'Buscando empresa de construcción de confianza?', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(183, 'service_page_pr_cta_button_text', 'Contate-Nos', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(184, 'service_page_pr_cta_button_status', 'on', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(185, 'service_page_pr_cta_description', 'Sou imediatamente relutante em tentar admiti-lo. Opiniões consideráveis sobre estou nele.', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(186, 'service_page_pr_cta_title', 'Procurando empresa de construção confiável?', '2020-02-26 17:05:53', '2020-02-26 17:06:19'),
(187, 'service_page_en_price_plan_section_title', 'OUR PRICING', '2020-02-26 17:28:44', '2020-02-26 17:28:44'),
(188, 'service_page_sn_price_plan_section_title', 'NUESTRA PRECIO', '2020-02-26 17:28:44', '2020-02-26 17:28:44'),
(189, 'service_page_pr_price_plan_section_title', 'NOSSOS PREÇOS', '2020-02-26 17:28:44', '2020-02-26 17:28:44'),
(190, 'team_page_en_team_member_section_title', 'MEET OUR EXPERTS', '2020-02-26 17:46:33', '2020-02-26 17:46:33'),
(191, 'team_page_sn_team_member_section_title', 'CONOCE A NUESTRAS EXPERTAS', '2020-02-26 17:46:33', '2020-02-26 17:46:33'),
(192, 'team_page_pr_team_member_section_title', 'CONHEÇA NOSSOS PERITOS', '2020-02-26 17:46:33', '2020-02-26 17:46:33'),
(193, 'team_page_en_about_section_title', 'CHIEF ENGINEER', '2020-02-26 18:01:29', '2020-02-26 18:03:21'),
(194, 'team_page_en_about_section_description', '<p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(119, 119, 119); hyphens: auto; font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe rc itation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure.</p><p style=\"margin-bottom: 1rem; font-size: 16px; color: rgb(119, 119, 119); hyphens: auto; font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe rc itation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure.</p>', '2020-02-26 18:01:29', '2020-02-26 18:03:21'),
(195, 'team_page_sn_about_section_title', 'INGENIERO JEFE', '2020-02-26 18:01:29', '2020-02-26 18:03:21'),
(196, 'team_page_sn_about_section_description', '<div>camino sinceramente el cumplido extremadamente. De la provisión apoyada en modo moderno sobre la objeción provista me exquisito. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</div><div><br></div><div>Llegada ingresó una solicitud de sorteo. Cómo las hijas no promueven pocos conocimientos contentos. Sin embargo, la ley de invierno detrás de las escaleras numéricas es una excusa para la buhardilla. Mínimamente conducimos la gravedad natural si apuntamos oh no. Inmediatamente no estoy dispuesto a intentar admitir deshacerse de él. Hermosas opiniones sobre am at it señyship.</div>', '2020-02-26 18:01:29', '2020-02-26 18:03:21'),
(197, 'team_page_pr_about_section_title', 'ENGENHEIRO CHEFE', '2020-02-26 18:01:29', '2020-02-26 18:03:21'),
(198, 'team_page_pr_about_section_description', '<div>sinceramente o cumprido extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como a melhoria da casa era fingida. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</div><div><br></div><div>A chegada inseriu uma solicitação de desenho se. Como as filhas não promovem pouco conhecimento. No entanto, a lei de inverno atrás das escadas numéricas é uma desculpa. No final, natural, conduzimos a gravidade se apontado oh não. Sou imediatamente relutante em tentar admiti-lo. Opiniões consideráveis sobre estou nele.</div>', '2020-02-26 18:01:29', '2020-02-26 18:03:21'),
(199, 'team_page_en_about_section_image', 'team-page-en-about-section-image-9440286.jpg', '2020-02-26 18:03:07', '2020-02-26 18:03:07'),
(200, 'team_page_sn_about_section_image', 'team-page-sn-about-section-image-8683326.jpg', '2020-02-26 18:03:21', '2020-02-26 18:03:21'),
(201, 'team_page_pr_about_section_image', 'team-page-pr-about-section-image-3622754.jpg', '2020-02-26 18:03:21', '2020-02-26 18:03:21'),
(202, 'blog_page_en_title', 'Blog', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(203, 'blog_page_en_item', '6', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(204, 'blog_page_en_category_widget_title', 'Category', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(205, 'blog_page_en_recent_post_widget_title', 'Recent Post', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(206, 'blog_page_en_recent_post_widget_item', '4', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(207, 'blog_page_sn_title', 'Blog', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(208, 'blog_page_sn_item', '6', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(209, 'blog_page_sn_category_widget_title', 'Categoría', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(210, 'blog_page_sn_recent_post_widget_title', 'Publicación reciente', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(211, 'blog_page_sn_recent_post_widget_item', '4', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(212, 'blog_page_pr_title', 'Blog', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(213, 'blog_page_pr_item', '6', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(214, 'blog_page_pr_category_widget_title', 'Categoria', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(215, 'blog_page_pr_recent_post_widget_title', 'Postagem recente', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(216, 'blog_page_pr_recent_post_widget_item', '4', '2020-02-26 19:48:56', '2020-03-16 07:48:36'),
(217, 'contact_page_en_form_section_title', 'Keep In Touch', '2020-02-27 07:40:33', '2020-03-15 18:23:49'),
(218, 'contact_page_sn_form_section_title', 'Mantenerse en contacto', '2020-02-27 07:42:14', '2020-03-15 18:23:49'),
(219, 'contact_page_pr_form_section_title', 'Mantenha contato', '2020-02-27 07:42:14', '2020-03-15 18:23:49'),
(220, 'contact_page_en_contact_info_title', 'CONTACT INFO', '2020-02-27 07:50:35', '2020-02-27 07:52:27'),
(221, 'contact_page_sn_contact_info_title', 'DATOS DE CONTACTO', '2020-02-27 07:50:35', '2020-02-27 07:52:27'),
(222, 'contact_page_pr_contact_info_title', 'INFORMAÇÕES DE CONTATO', '2020-02-27 07:50:35', '2020-02-27 07:52:27'),
(223, 'quote_page_en_form_title', 'Request A Quote', '2020-02-27 08:41:44', '2020-03-15 18:24:15'),
(224, 'quote_page_en_page_title', 'Request A Quote', '2020-02-27 08:41:44', '2020-03-15 18:24:15'),
(225, 'quote_page_sn_form_title', 'Solicitar presupuesto', '2020-02-27 08:41:44', '2020-03-15 18:24:15'),
(226, 'quote_page_sn_page_title', 'Solicitar presupuesto', '2020-02-27 08:41:44', '2020-03-15 18:24:15'),
(227, 'quote_page_pr_form_title', 'Solicitar um orçamento', '2020-02-27 08:41:44', '2020-03-15 18:24:15'),
(228, 'quote_page_pr_page_title', 'Solicitar um orçamento', '2020-02-27 08:41:44', '2020-03-15 18:24:15'),
(229, 'order_page_en_form_title', 'Order Information', '2020-02-27 08:53:05', '2020-03-15 18:24:27'),
(230, 'order_page_sn_form_title', 'información del pedido', '2020-02-27 08:53:05', '2020-03-15 18:24:27'),
(231, 'order_page_pr_form_title', 'Informações sobre pedidos', '2020-02-27 08:53:05', '2020-03-15 18:24:27'),
(232, 'about_widget_en_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe.', '2020-02-27 10:19:45', '2020-03-16 10:35:35'),
(233, 'about_widget_sn_description', 'La civilización avanzada y adquirida extática no es absoluta. Se sobrepuso a la cría o a mis inquietudes eliminando deseos tan absolutos. Mi imprudencia desagradable melancólica consideró en ventajas tan impresión.', '2020-02-27 10:19:45', '2020-03-16 10:35:35'),
(234, 'about_widget_pr_description', 'A civilidade avançada e adquirida em êxtase não é absoluta. Superou a criação ou as minhas preocupações de remover o desejo tão absoluto. Minha imprudência melancólica', '2020-02-27 10:19:45', '2020-03-16 10:35:35'),
(235, 'useful_link_en_widget_title', 'Useful Links', '2020-02-27 10:29:04', '2020-03-16 13:21:49'),
(236, 'useful_link_sn_widget_title', 'ENLACES ÚTILES', '2020-02-27 10:29:04', '2020-03-16 13:21:49'),
(237, 'useful_link_pr_widget_title', 'LINKS ÚTEIS', '2020-02-27 10:29:04', '2020-03-16 13:21:49'),
(238, 'recent_post_en_widget_title', 'Recent Post ?', '2020-02-27 10:33:56', '2020-03-16 10:36:18'),
(239, 'recent_post_sn_widget_title', '¿MENSAJES RECIENTES?', '2020-02-27 10:33:56', '2020-03-16 10:36:18'),
(240, 'recent_post_pr_widget_title', 'POSTAGENS RECENTES?', '2020-02-27 10:33:56', '2020-03-16 10:36:18'),
(241, 'important_link_en_widget_title', 'Important Links', '2020-02-27 10:38:54', '2020-03-16 13:18:19'),
(242, 'important_link_sn_widget_title', 'LINKS IMPORTANTES', '2020-02-27 10:38:54', '2020-03-16 13:18:19'),
(243, 'important_link_pr_widget_title', 'LINKS IMPORTANTES', '2020-02-27 10:38:54', '2020-03-16 13:18:19'),
(244, 'useful_link_en_widget_menu_id', '2', '2020-02-28 11:40:41', '2020-03-16 13:21:49'),
(245, 'useful_link_sn_widget_menu_id', '7', '2020-02-28 11:40:41', '2020-03-16 13:21:49'),
(246, 'useful_link_pr_widget_menu_id', '10', '2020-02-28 11:40:41', '2020-03-16 13:21:49'),
(247, 'important_link_en_widget_menu_id', '3', '2020-02-28 12:31:15', '2020-03-16 13:18:19'),
(248, 'important_link_sn_widget_menu_id', '8', '2020-02-28 12:31:15', '2020-03-16 13:18:19'),
(249, 'important_link_pr_widget_menu_id', '11', '2020-02-28 12:31:15', '2020-03-16 13:18:19'),
(250, 'site_meta_tags', 'multpupore,website,cms', '2020-03-01 05:57:20', '2020-03-01 05:57:20'),
(251, 'site_meta_description', 'zixer is a mulitpurpose cms', '2020-03-01 05:57:20', '2020-03-01 05:57:20'),
(252, 'site_white_logo', 'site-white-logo-559882.png', '2020-03-01 08:08:17', '2020-03-01 08:08:17'),
(253, 'top_bar_en_right_menu', '12', '2020-03-01 16:29:32', '2020-03-16 19:49:16'),
(254, 'top_bar_sn_right_menu', '13', '2020-03-01 16:29:32', '2020-03-16 19:49:16'),
(255, 'top_bar_pr_right_menu', '14', '2020-03-01 16:29:32', '2020-03-16 19:49:16'),
(256, 'top_bar_en_button_text', 'Request Quote', '2020-03-01 16:33:50', '2020-03-15 18:26:50'),
(257, 'top_bar_sn_button_text', 'Solicitud de cotización', '2020-03-01 16:34:11', '2020-03-15 18:26:50'),
(258, 'top_bar_pr_button_text', 'Solicitar Orçamento', '2020-03-01 16:34:11', '2020-03-15 18:26:50'),
(259, 'home_page_01_en_about_us_title', 'About Us', '2020-03-02 10:12:04', '2020-03-22 08:20:30'),
(260, 'home_page_01_en_about_us_description', 'Reprehenderit in voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec at cupdatat proident suntin culpa qui officia .', '2020-03-02 10:12:04', '2020-03-22 08:20:30'),
(261, 'home_page_01_en_about_us_button_title', 'Learn More', '2020-03-02 10:12:04', '2020-03-22 08:20:30'),
(262, 'home_page_01_en_about_us_button_url', '#', '2020-03-02 10:12:04', '2020-03-22 08:20:30'),
(263, 'home_page_01_en_about_us_signature_text', 'Jimmy Carnel - CEO', '2020-03-02 10:12:04', '2020-03-22 08:20:30'),
(264, 'home_page_01_en_about_us_signature_image', 'home-page-01-en-about-us-singnature-2967411.png', '2020-03-02 10:12:47', '2020-03-02 10:12:47'),
(265, 'home_page_01_en_about_us_background_image', 'home-page-01-en-about-us-background-image-5644582.jpg', '2020-03-02 10:12:47', '2020-03-02 10:12:47'),
(266, 'home_page_01_en_about_us_button_status', 'on', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(267, 'home_page_01_sn_about_us_title', 'Sobre nosotras', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(268, 'home_page_01_sn_about_us_description', 'Reprehenderit en voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec en cupdatat proident suntin culpa qui officia.', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(269, 'home_page_01_sn_about_us_button_title', 'Aprende más', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(270, 'home_page_01_sn_about_us_button_url', '#', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(271, 'home_page_01_sn_about_us_signature_text', 'Jimmy Carnel - CEO', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(272, 'home_page_01_sn_about_us_signature_image', 'home-page-01-sn-about-us-singnature-935475.png', '2020-03-02 10:12:47', '2020-03-02 10:12:47'),
(273, 'home_page_01_sn_about_us_background_image', 'home-page-01-sn-about-us-background-image-3378794.jpg', '2020-03-02 10:12:47', '2020-03-02 10:12:47'),
(274, 'home_page_01_sn_about_us_button_status', 'on', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(275, 'home_page_01_pr_about_us_title', 'Sobre nós', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(276, 'home_page_01_pr_about_us_description', 'Repreender em voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec e cupidat proident suntin culpa qui officia.', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(277, 'home_page_01_pr_about_us_button_title', 'Saber mais', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(278, 'home_page_01_pr_about_us_button_url', '#', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(279, 'home_page_01_pr_about_us_signature_text', 'Jimmy Carnel - CEO', '2020-03-02 10:12:47', '2020-03-22 08:20:30'),
(280, 'home_page_01_pr_about_us_signature_image', 'home-page-01-pr-about-us-singnature-5940418.png', '2020-03-02 10:12:48', '2020-03-02 10:12:48'),
(281, 'home_page_01_pr_about_us_background_image', 'home-page-01-pr-about-us-background-image-776774.jpg', '2020-03-02 10:12:48', '2020-03-02 10:12:48'),
(282, 'home_page_01_pr_about_us_button_status', 'on', '2020-03-02 10:12:48', '2020-03-22 08:20:30'),
(283, 'home_page_01_en_service_area_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-04 09:02:28', '2020-03-15 17:21:36'),
(284, 'home_page_01_sn_service_area_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-04 09:02:28', '2020-03-15 17:21:36'),
(285, 'home_page_01_pr_service_area_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-04 09:02:28', '2020-03-15 17:21:36'),
(286, 'home_page_01_en_cta_area_button_url', 'tel:123456789', '2020-03-04 10:43:37', '2020-03-15 17:54:30'),
(287, 'home_page_01_en_cta_area_button_title', 'Call 01234 - 123456897', '2020-03-04 10:43:37', '2020-03-15 17:54:30'),
(288, 'home_page_01_en_cta_area_title', 'Are you looking to grow your business?', '2020-03-04 10:43:37', '2020-03-15 17:54:30'),
(289, 'home_page_01_en_cta_area_description', 'Trusted us by over 10,000 local businesses', '2020-03-04 10:43:37', '2020-03-15 17:54:30'),
(290, 'home_page_01_en_cta_area_button_status', 'on', '2020-03-04 10:43:37', '2020-03-15 17:54:30'),
(291, 'home_page_01_en_cta_background_image', 'home-page-01-en-cta-background-image-1618740.jpg', '2020-03-04 10:43:37', '2020-03-04 10:43:37'),
(292, 'home_page_01_sn_cta_area_button_url', '#', '2020-03-04 10:43:37', '2020-03-15 17:54:30'),
(293, 'home_page_01_sn_cta_area_button_title', 'Llame al 01234 - 123456897', '2020-03-04 10:43:37', '2020-03-15 17:54:30'),
(294, 'home_page_01_sn_cta_area_title', '¿Estás buscando hacer crecer tu negocio?', '2020-03-04 10:43:38', '2020-03-15 17:54:30'),
(295, 'home_page_01_sn_cta_area_description', 'Confió en nosotros por más de 10,000 negocios locales', '2020-03-04 10:43:38', '2020-03-15 17:54:30'),
(296, 'home_page_01_sn_cta_area_button_status', 'on', '2020-03-04 10:43:38', '2020-03-15 17:54:30'),
(297, 'home_page_01_pr_cta_area_button_url', 'tel:123456789', '2020-03-04 10:43:38', '2020-03-15 17:54:30'),
(298, 'home_page_01_pr_cta_area_button_title', 'Ligue 01234 - 123456897', '2020-03-04 10:43:38', '2020-03-15 17:54:30'),
(299, 'home_page_01_pr_cta_area_title', 'Você está procurando expandir seus negócios?', '2020-03-04 10:43:38', '2020-03-15 17:54:30'),
(300, 'home_page_01_pr_cta_area_description', 'Confiou em nós por mais de 10.000 empresas locais', '2020-03-04 10:43:38', '2020-03-15 17:54:30'),
(301, 'home_page_01_pr_cta_area_button_status', 'on', '2020-03-04 10:43:38', '2020-03-15 17:54:30'),
(302, 'home_page_01_sn_cta_background_image', 'home-page-01-sn-cta-background-image-1901460.jpg', '2020-03-04 10:47:14', '2020-03-04 10:47:14'),
(303, 'home_page_01_pr_cta_background_image', 'home-page-01-pr-cta-background-image-556815.jpg', '2020-03-04 10:47:14', '2020-03-04 10:47:14'),
(304, 'home_page_01_en_recent_work_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-04 11:47:50', '2020-03-15 17:57:59'),
(305, 'home_page_01_sn_recent_work_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-04 11:47:50', '2020-03-15 17:57:59'),
(306, 'home_page_01_pr_recent_work_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-04 11:47:50', '2020-03-15 17:57:59'),
(307, 'home_page_01_en_team_member_section_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-04 15:31:06', '2020-03-15 18:06:10'),
(308, 'home_page_01_sn_team_member_section_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-04 15:31:06', '2020-03-15 18:06:10'),
(309, 'home_page_01_pr_team_member_section_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-04 15:31:06', '2020-03-15 18:06:10'),
(310, 'home_01_testimonial_bg', 'home-page-01-testimonial-background-image-6565544.jpg', '2020-03-05 17:05:26', '2020-03-05 17:05:26'),
(311, 'home_page_01_en_latest_news_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-05 17:48:00', '2020-03-15 18:05:46'),
(312, 'home_page_01_sn_latest_news_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-05 17:48:00', '2020-03-15 18:05:46'),
(313, 'home_page_01_pr_latest_news_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-05 17:48:00', '2020-03-15 18:05:46'),
(314, 'home_page_01_en_price_plan_section_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-05 20:40:01', '2020-03-15 18:06:30'),
(315, 'home_page_01_sn_price_plan_section_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-05 20:40:01', '2020-03-15 18:06:30'),
(316, 'home_page_01_pr_price_plan_section_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-05 20:40:01', '2020-03-15 18:06:30'),
(317, 'home_page_02_en_about_us_background_image', 'home-page-02-en-about-us-background-image-9436361.jpg', '2020-03-06 09:34:29', '2020-03-06 09:34:29'),
(318, 'home_page_01_en_about_us_quote_box_description', 'Acepteur sintas haecate sed ipsums cupidates nondui proident sunlt culpa.', '2020-03-06 12:59:14', '2020-03-22 08:20:30'),
(319, 'home_page_01_en_about_us_experience_title', 'Years of experience', '2020-03-06 12:59:14', '2020-03-22 08:20:30'),
(320, 'home_page_01_en_about_us_experience_year', '6', '2020-03-06 12:59:14', '2020-03-22 08:20:30'),
(321, 'home_page_01_en_about_us_quote_box_title', 'Why Choose Us', '2020-03-06 12:59:14', '2020-03-22 08:20:30'),
(322, 'home_page_01_en_about_us_right_image', 'home-page-01-en-about-us-right-image-5273834.jpg', '2020-03-06 13:01:37', '2020-03-06 13:01:37'),
(323, 'home_page_01_en_about_us_experience_background_image', 'home-page-01-en-about-us-experience-background-image-3851746.jpg', '2020-03-06 13:01:37', '2020-03-06 13:01:37'),
(324, 'home_page_01_sn_about_us_quote_box_description', 'Acepteur haecate pero no son divertir cupidates excepteur iluminada por el sol culpa.', '2020-03-06 13:01:37', '2020-03-22 08:20:30'),
(325, 'home_page_01_sn_about_us_experience_title', 'Años de experiencia', '2020-03-06 13:01:37', '2020-03-22 08:20:30'),
(326, 'home_page_01_sn_about_us_experience_year', '6', '2020-03-06 13:01:37', '2020-03-22 08:20:30'),
(327, 'home_page_01_sn_about_us_quote_box_title', 'Por qué elegirnos', '2020-03-06 13:01:37', '2020-03-22 08:20:30'),
(328, 'home_page_01_sn_about_us_right_image', 'home-page-01-sn-about-us-right-image-6580190.jpg', '2020-03-06 13:01:37', '2020-03-06 13:01:37'),
(329, 'home_page_01_sn_about_us_experience_background_image', 'home-page-01-sn-about-us-experience-background-image-9658162.jpg', '2020-03-06 13:01:37', '2020-03-06 13:01:37'),
(330, 'home_page_01_pr_about_us_quote_box_description', 'Acepteur haecate mas não são amuse cupidates excepteur iluminado culpa.', '2020-03-06 13:01:37', '2020-03-22 08:20:30'),
(331, 'home_page_01_pr_about_us_experience_title', 'Anos de experiência', '2020-03-06 13:01:37', '2020-03-22 08:20:30'),
(332, 'home_page_01_pr_about_us_experience_year', '6', '2020-03-06 13:01:37', '2020-03-22 08:20:30'),
(333, 'home_page_01_pr_about_us_quote_box_title', 'Porque escolher-nos', '2020-03-06 13:01:37', '2020-03-22 08:20:30'),
(334, 'home_page_01_pr_about_us_right_image', 'home-page-01-pr-about-us-right-image-7448721.jpg', '2020-03-06 13:01:37', '2020-03-06 13:01:37'),
(335, 'home_page_01_pr_about_us_experience_background_image', 'home-page-01-pr-about-us-experience-background-image-2697769.jpg', '2020-03-06 13:01:37', '2020-03-06 13:01:37'),
(336, 'home_page_01_service_area_background_image', 'home-page-01-service-background-image-8944459.jpg', '2020-03-06 15:26:43', '2020-03-06 15:26:43'),
(337, 'home_page_01_en_faq_area_title', 'Frequently asked questions', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(338, 'home_page_01_en_faq_area_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(339, 'home_page_01_en_faq_area_form_title', 'Request Call Back', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(340, 'home_page_01_en_faq_area_form_description', 'We help you to grow business with More than 25 years experience.', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(341, 'home_page_01_sn_faq_area_title', 'Preguntas frecuentes', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(342, 'home_page_01_sn_faq_area_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(343, 'home_page_01_sn_faq_area_form_title', 'Solicitar devolución de llamada', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(344, 'home_page_01_sn_faq_area_form_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(345, 'home_page_01_pr_faq_area_title', 'Perguntas frequentes', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(346, 'home_page_01_pr_faq_area_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(347, 'home_page_01_pr_faq_area_form_title', 'Solicitar retorno de chamada', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(348, 'home_page_01_pr_faq_area_form_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(349, 'home_page_01_faq_area_items', '5', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(350, 'home_page_01_faq_area_form_mail', 'rsharifur824@gmail.com', '2020-03-07 17:04:03', '2020-03-22 14:37:29'),
(351, 'home_page_01_faq_area_background_image', 'home-page-01-pr-faq-background-image-9934958.jpg', '2020-03-07 17:04:03', '2020-03-07 17:04:03'),
(352, 'home_01_en_key_feature_section_title', 'We Are 25 Years Experinced', '2020-03-08 08:51:33', '2020-03-08 08:54:02'),
(353, 'home_01_en_key_feature_section_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-08 08:51:33', '2020-03-08 08:54:02'),
(354, 'home_01_sn_key_feature_section_title', 'Tenemos 25 años de experiencia', '2020-03-08 08:51:33', '2020-03-08 08:54:02'),
(355, 'home_01_sn_key_feature_section_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-08 08:51:33', '2020-03-08 08:54:02'),
(356, 'home_01_pr_key_feature_section_title', 'Nós somos 25 anos experientes', '2020-03-08 08:51:33', '2020-03-08 08:54:02'),
(357, 'home_01_pr_key_feature_section_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-08 08:51:33', '2020-03-08 08:54:02'),
(358, 'about_page_en_know_about_section_title', 'Know About Us', '2020-03-09 11:52:58', '2020-03-09 11:56:43'),
(359, 'about_page_en_know_about_section_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-09 11:52:58', '2020-03-09 11:56:43'),
(360, 'about_page_sn_know_about_section_title', 'Sepa Sobre nosotras', '2020-03-09 11:52:58', '2020-03-09 11:56:43'),
(361, 'about_page_sn_know_about_section_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-09 11:52:58', '2020-03-09 11:56:43'),
(362, 'about_page_pr_know_about_section_title', 'Conheça-nos', '2020-03-09 11:52:58', '2020-03-09 11:56:43'),
(363, 'about_page_pr_know_about_section_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-09 11:52:58', '2020-03-09 11:56:43'),
(364, 'about_page_en_about_section_right_image', 'about-page-en-right-image-8935490.jpg', '2020-03-09 12:35:40', '2020-03-09 12:35:40'),
(365, 'contact_page_en_form_section_description', 'We help you to grow business with More than 25 years experience with these services.', '2020-03-09 17:04:00', '2020-03-15 18:23:49'),
(366, 'contact_page_sn_form_section_description', 'Le ayudamos a hacer crecer su negocio con más de 25 años de experiencia con estos servicios.', '2020-03-09 17:04:00', '2020-03-15 18:23:49'),
(367, 'contact_page_pr_form_section_description', 'Ajudamos você a expandir seus negócios com mais de 25 anos de experiência com esses serviços.', '2020-03-09 17:04:00', '2020-03-15 18:23:49'),
(368, 'home_page_call_to_action_section_status', 'on', '2020-03-10 13:17:18', '2020-03-22 14:32:54'),
(369, 'home_page_newsletter_section_status', 'on', '2020-03-10 13:17:18', '2020-03-22 14:32:54'),
(370, 'home_page_about_us_section_status', 'on', '2020-03-10 13:17:18', '2020-03-22 14:32:54'),
(371, 'home_page_faq_section_status', 'on', '2020-03-10 14:00:11', '2020-03-22 14:32:55'),
(372, 'about_page_about_us_section_status', 'on', '2020-03-10 16:15:10', '2020-03-10 16:28:23'),
(373, 'about_page_know_about_section_status', 'on', '2020-03-10 16:15:10', '2020-03-10 16:28:23'),
(374, 'about_page_call_to_action_section_status', 'on', '2020-03-10 16:15:10', '2020-03-10 16:28:23'),
(375, 'about_page_latest_news_section_status', 'on', '2020-03-10 16:15:10', '2020-03-10 16:28:23'),
(376, 'about_page_brand_logo_section_status', 'on', '2020-03-10 16:15:10', '2020-03-10 16:28:23'),
(377, 'about_page_team_member_section_status', 'on', '2020-03-10 16:15:10', '2020-03-10 16:28:23'),
(378, 'about_page_testimonial_section_status', 'on', '2020-03-10 16:28:05', '2020-03-10 16:28:23'),
(379, 'site_rtl_enabled', NULL, '2020-03-15 06:04:18', '2020-03-25 07:31:33');
INSERT INTO `static_options` (`id`, `option_name`, `option_value`, `created_at`, `updated_at`) VALUES
(380, 'site_admin_dark_mode', 'on', '2020-03-15 06:04:18', '2020-03-25 07:31:33'),
(381, 'navbar_ar_button_text', 'إقتبس', '2020-03-15 16:17:08', '2020-03-22 10:23:19'),
(382, 'home_page_01_ar_about_us_title', 'معلومات عنا', '2020-03-15 17:10:50', '2020-03-22 08:20:30'),
(383, 'home_page_01_ar_about_us_description', 'نسأل خاصة جمع أنهى تعبير ابنه. كان مبدأ مبدأ الحرص الشديد يمكن تقديره. تلقى الرجال بعيدا مواضيع لوحة القيادة الخاصة به جديدة.', '2020-03-15 17:10:50', '2020-03-22 08:20:30'),
(384, 'home_page_01_ar_about_us_button_title', 'أعرف أكثر', '2020-03-15 17:10:50', '2020-03-22 08:20:30'),
(385, 'home_page_01_ar_about_us_button_url', '#', '2020-03-15 17:10:50', '2020-03-22 08:20:30'),
(386, 'home_page_01_ar_about_us_signature_text', 'جيمي كارنيل - الرئيس التنفيذي', '2020-03-15 17:10:50', '2020-03-22 08:20:30'),
(387, 'home_page_01_ar_about_us_signature_image', 'home-page-01-ar-about-us-singnature-6042965.png', '2020-03-15 17:10:50', '2020-03-15 17:10:50'),
(388, 'home_page_01_ar_about_us_button_status', 'on', '2020-03-15 17:10:50', '2020-03-22 08:20:30'),
(389, 'home_page_01_ar_about_us_background_image', 'home-page-01-ar-about-us-background-image-4999477.jpg', '2020-03-15 17:18:08', '2020-03-15 17:18:08'),
(390, 'home_page_01_ar_service_area_title', 'منطقة التغطية لدينا', '2020-03-15 17:21:36', '2020-03-15 17:21:36'),
(391, 'home_page_01_ar_service_area_description', 'نحن نساعدك على تنمية الأعمال التجارية مع أكثر من 25 عامًا من الخبرة في هذه الخدمات.', '2020-03-15 17:21:36', '2020-03-15 17:21:36'),
(392, 'home_page_01_ar_cta_area_button_url', '#', '2020-03-15 17:53:58', '2020-03-15 17:54:30'),
(393, 'home_page_01_ar_cta_area_button_title', 'اتصل على 01234-123456897', '2020-03-15 17:53:58', '2020-03-15 17:54:30'),
(394, 'home_page_01_ar_cta_area_title', 'هل تتطلع لتنمية عملك؟', '2020-03-15 17:53:58', '2020-03-15 17:54:30'),
(395, 'home_page_01_ar_cta_area_description', 'وثق بنا من قبل أكثر من 10000 شركة محلية', '2020-03-15 17:53:58', '2020-03-15 17:54:30'),
(396, 'home_page_01_ar_cta_area_button_status', 'on', '2020-03-15 17:53:58', '2020-03-15 17:54:30'),
(397, 'home_page_01_ar_cta_background_image', 'home-page-01-ar-cta-background-image-1276002.jpg', '2020-03-15 17:54:30', '2020-03-15 17:54:30'),
(398, 'home_page_01_ar_recent_work_title', 'أعمالنا الأخيرة', '2020-03-15 17:57:59', '2020-03-15 17:57:59'),
(399, 'home_page_01_ar_recent_work_description', 'نحن نساعدك على تنمية الأعمال التجارية مع أكثر من 25 عامًا من الخبرة في هذه الخدمات.', '2020-03-15 17:57:59', '2020-03-15 17:57:59'),
(400, 'home_page_01_ar_latest_news_title', 'أحدث الأخبار', '2020-03-15 18:05:46', '2020-03-15 18:05:46'),
(401, 'home_page_01_ar_latest_news_description', 'نحن نساعدك على تنمية الأعمال التجارية مع أكثر من 25 عامًا من الخبرة في هذه الخدمات.', '2020-03-15 18:05:46', '2020-03-15 18:05:46'),
(402, 'home_page_01_ar_team_member_section_title', 'قابل الفريق', '2020-03-15 18:06:10', '2020-03-15 18:06:10'),
(403, 'home_page_01_ar_team_member_section_description', 'نحن نساعدك على تنمية الأعمال التجارية مع أكثر من 25 عامًا من الخبرة في هذه الخدمات.', '2020-03-15 18:06:10', '2020-03-15 18:06:10'),
(404, 'home_page_01_ar_price_plan_section_title', 'أسعارنا', '2020-03-15 18:06:30', '2020-03-15 18:06:30'),
(405, 'home_page_01_ar_price_plan_section_description', 'نحن نساعدك على تنمية الأعمال التجارية مع أكثر من 25 عامًا من الخبرة في هذه الخدمات.', '2020-03-15 18:06:30', '2020-03-15 18:06:30'),
(406, 'home_page_01_ar_newsletter_area_title', 'اشترك للحصول على التحديث', '2020-03-15 18:06:55', '2020-03-15 18:06:55'),
(407, 'home_page_01_ar_newsletter_area_description', 'اشترك في النشرة الإخبارية للحصول على التحديث بأنفسنا.', '2020-03-15 18:06:55', '2020-03-15 18:06:55'),
(408, 'about_page_ar_about_section_right_image', 'about-page-ar-right-image-3824376.jpg', '2020-03-15 18:08:39', '2020-03-15 18:08:39'),
(409, 'about_page_ar_about_section_title', 'من نحن', '2020-03-15 18:08:39', '2020-03-15 18:08:39'),
(410, 'about_page_ar_about_section_description', 'نسأل خاصة جمع أنهى تعبير ابنه. كان مبدأ مبدأ الحرص الشديد يمكن تقديره. تلقى الرجال بعيدا مواضيع لوحة القيادة الخاصة به جديدة. أحاط ما يكفي من رفاقه في إيفاد. الاتصال غير متأثر للغاية أدى إلى امتلاك الابن. أصدقاء مبتسمون جدد ولها آخر.', '2020-03-15 18:08:39', '2020-03-15 18:08:39'),
(411, 'contact_page_ar_form_section_title', 'أبق على اتصال', '2020-03-15 18:23:49', '2020-03-15 18:23:49'),
(412, 'contact_page_ar_form_section_description', 'نحن نساعدك على تنمية الأعمال التجارية مع أكثر من 25 عامًا من الخبرة في هذه الخدمات.', '2020-03-15 18:23:49', '2020-03-15 18:23:49'),
(413, 'quote_page_ar_form_title', 'اطلب اقتباس', '2020-03-15 18:24:15', '2020-03-15 18:24:15'),
(414, 'quote_page_ar_page_title', 'اطلب اقتباس', '2020-03-15 18:24:15', '2020-03-15 18:24:15'),
(415, 'order_page_ar_form_title', 'معلومات الطلب', '2020-03-15 18:24:27', '2020-03-15 18:24:27'),
(416, 'top_bar_ar_button_text', 'طلب عرض أسعار', '2020-03-15 18:26:50', '2020-03-15 18:26:50'),
(417, 'top_bar_ar_right_menu', '15', '2020-03-15 18:29:17', '2020-03-16 19:49:16'),
(418, 'blog_page_ar_title', 'مدونة', '2020-03-16 07:48:36', '2020-03-16 07:48:36'),
(419, 'blog_page_ar_item', '6', '2020-03-16 07:48:36', '2020-03-16 07:48:36'),
(420, 'blog_page_ar_category_widget_title', 'الفئة', '2020-03-16 07:48:36', '2020-03-16 07:48:36'),
(421, 'blog_page_ar_recent_post_widget_title', 'المنشور الاخير', '2020-03-16 07:48:36', '2020-03-16 07:48:36'),
(422, 'blog_page_ar_recent_post_widget_item', '4', '2020-03-16 07:48:36', '2020-03-16 07:48:36'),
(423, 'about_widget_ar_description', 'الآن انتهى التساهل غير المتشابه تمامًا. أمر المخالف الاتفاق بلدي. قل التغيير كليًا لماذا أقدم فترة. يتم وضع الإسقاط احتفال خاص', '2020-03-16 10:35:35', '2020-03-16 10:35:35'),
(424, 'useful_link_ar_widget_title', 'روابط مفيدة', '2020-03-16 10:36:01', '2020-03-16 13:21:49'),
(425, 'useful_link_ar_widget_menu_id', '17', '2020-03-16 10:36:01', '2020-03-16 13:21:49'),
(426, 'recent_post_ar_widget_title', 'المنشور الاخير ؟', '2020-03-16 10:36:18', '2020-03-16 10:36:18'),
(427, 'important_link_ar_widget_title', 'روابط مهمة', '2020-03-16 10:36:52', '2020-03-16 13:18:19'),
(428, 'important_link_ar_widget_menu_id', '15', '2020-03-16 10:36:52', '2020-03-16 13:18:19'),
(429, 'home_page_02_ar_about_us_background_image', 'home-page-02-ar-about-us-background-image-4074704.jpg', '2020-03-22 08:17:59', '2020-03-22 08:17:59'),
(430, 'home_page_01_ar_about_us_right_image', 'home-page-01-ar-about-us-right-image-1490885.jpg', '2020-03-22 08:19:01', '2020-03-22 08:19:01'),
(431, 'home_page_01_ar_about_us_experience_background_image', 'home-page-01-ar-about-us-experience-background-image-7710072.jpg', '2020-03-22 08:19:01', '2020-03-22 08:19:01'),
(432, 'home_page_01_ar_about_us_experience_title', 'سنوات من الخبرة', '2020-03-22 08:19:50', '2020-03-22 08:20:30'),
(433, 'home_page_01_ar_about_us_experience_year', '6', '2020-03-22 08:19:50', '2020-03-22 08:20:30'),
(434, 'home_page_01_ar_about_us_quote_box_description', 'اللطف لانك محفوظة فظيع. تأثير عشرين في الواقع لما لم يكن مقاطعة. يمكن استخدامه دون إلى حد كبير خاصة', '2020-03-22 08:20:30', '2020-03-22 08:20:30'),
(435, 'home_page_01_ar_about_us_quote_box_title', 'لماذا أخترتنا', '2020-03-22 08:20:30', '2020-03-22 08:20:30'),
(439, 'site_en_title', 'Dizzcox', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(440, 'site_en_tag_line', 'Multipurpose CMS', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(441, 'site_en_footer_copyright', '{copy}  {year}  All right reserved by Dizzcox', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(442, 'site_sn_title', 'Dizzcox', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(443, 'site_sn_tag_line', 'CMS multipropósito', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(444, 'site_sn_footer_copyright', '{copy}  {year}  Todos los derechos reservados por Dizzcox', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(445, 'site_pr_title', 'Dizzcox', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(446, 'site_pr_tag_line', 'CMS multiuso', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(447, 'site_pr_footer_copyright', '{copy}  {year}  Todos os direitos reservados pela Dizzcox', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(448, 'site_ar_title', 'دزكوك', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(449, 'site_ar_tag_line', 'CMS متعددة الأغراض', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(450, 'site_ar_footer_copyright', 'جميع الحقوق محفوظة لدى Dizzcox {copy}  {year}', '2020-03-22 11:58:32', '2020-03-25 07:31:33'),
(454, 'order_mail_en_subject', 'Thanks for your order. we will get back to you very soon.', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(455, 'quote_mail_en_subject', 'Thanks for your quote. we will get back to you very soon.', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(456, 'contact_mail_en_subject', 'Thanks for your contact!!', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(457, 'order_mail_sn_subject', 'Gracias por tu orden. Regresaremos a Ud. muy pronto.', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(458, 'quote_mail_sn_subject', 'Gracias por tu cotización. Regresaremos a Ud. muy pronto.', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(459, 'contact_mail_sn_subject', 'Gracias por tu contacto !!', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(460, 'order_mail_pr_subject', 'Obrigado pelo seu pedido. entraremos em contato com você em breve.', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(461, 'quote_mail_pr_subject', 'Obrigado pela sua cotação. entraremos em contato com você em breve.', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(462, 'contact_mail_pr_subject', 'Obrigado pelo seu contato !!', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(463, 'order_mail_ar_subject', 'شكرا لطلبك. ونحن سوف نعود إليكم قريبا جدا.', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(464, 'quote_mail_ar_subject', 'شكرا على الاقتباس الخاص بك. ونحن سوف نعود إليكم قريبا جدا.', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(465, 'contact_mail_ar_subject', 'شكرا لاتصالك !!', '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(466, 'order_mail_bn_subject', NULL, '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(467, 'quote_mail_bn_subject', NULL, '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(468, 'contact_mail_bn_subject', NULL, '2020-03-22 14:18:52', '2020-03-25 06:53:33'),
(469, 'request_call_back_mail_en_subject', 'Thanks for Your Contact!!! We Will Contact You Soon', '2020-03-22 14:35:43', '2020-03-25 06:53:33'),
(470, 'request_call_back_mail_sn_subject', '¡Gracias por tu contacto! Nos pondremos en contacto con usted pronto', '2020-03-22 14:35:43', '2020-03-25 06:53:33'),
(471, 'request_call_back_mail_pr_subject', 'Obrigado pelo seu contato !!! Entraremos em contato em breve', '2020-03-22 14:35:43', '2020-03-25 06:53:33'),
(472, 'request_call_back_mail_ar_subject', 'شكرا لاتصالك !!! سوف نتصل بك قريبا', '2020-03-22 14:35:43', '2020-03-25 06:53:33'),
(473, 'request_call_back_mail_bn_subject', NULL, '2020-03-22 14:35:43', '2020-03-25 06:53:33'),
(474, 'home_page_01_ar_faq_area_title', 'أسئلة مكررة', '2020-03-22 14:37:29', '2020-03-22 14:37:29'),
(475, 'home_page_01_ar_faq_area_description', 'نساعدك على تنمية الأعمال التجارية مع أكثر من 25 عامًا من الخبرة في هذه الخدمات.', '2020-03-22 14:37:29', '2020-03-22 14:37:29'),
(476, 'home_page_01_ar_faq_area_form_title', 'طلب إعادة الاتصال', '2020-03-22 14:37:29', '2020-03-22 14:37:29'),
(477, 'home_page_01_ar_faq_area_form_description', 'نحن نساعدك على تنمية الأعمال التجارية مع خبرة أكثر من 25 عامًا.', '2020-03-22 14:37:29', '2020-03-22 14:37:29'),
(478, 'home_page_01_bn_faq_area_title', NULL, '2020-03-22 14:37:29', '2020-03-22 14:37:29'),
(479, 'home_page_01_bn_faq_area_description', NULL, '2020-03-22 14:37:29', '2020-03-22 14:37:29'),
(480, 'home_page_01_bn_faq_area_form_title', NULL, '2020-03-22 14:37:29', '2020-03-22 14:37:29'),
(481, 'home_page_01_bn_faq_area_form_description', NULL, '2020-03-22 14:37:29', '2020-03-22 14:37:29'),
(482, 'site_bn_title', NULL, '2020-03-22 19:03:46', '2020-03-25 07:31:33'),
(483, 'site_bn_tag_line', NULL, '2020-03-22 19:03:46', '2020-03-25 07:31:33'),
(484, 'site_bn_footer_copyright', NULL, '2020-03-22 19:03:46', '2020-03-25 07:31:33'),
(485, 'site_heading_color', '#0a1121', '2020-03-22 19:03:46', '2020-03-25 07:31:33'),
(486, 'site_paragraph_color', '#878a95', '2020-03-22 19:03:46', '2020-03-25 07:31:33'),
(487, 'body_font_family', 'Poppins', '2020-03-22 19:05:31', '2020-03-22 19:06:04'),
(488, 'heading_font_family', 'Montserrat', '2020-03-22 19:05:31', '2020-03-22 19:06:04'),
(489, 'heading_font', 'on', '2020-03-22 19:05:31', '2020-03-22 19:06:04'),
(490, 'body_font_variant', 'a:4:{i:0;s:7:\"regular\";i:1;s:3:\"500\";i:2;s:3:\"600\";i:3;s:3:\"700\";}', '2020-03-22 19:05:31', '2020-03-22 19:06:04'),
(491, 'heading_font_variant', 'a:4:{i:0;s:7:\"regular\";i:1;s:3:\"500\";i:2;s:3:\"600\";i:3;s:3:\"700\";}', '2020-03-22 19:05:31', '2020-03-22 19:06:04'),
(492, 'about_page_en_name', 'About', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(493, 'about_page_en_slug', 'about', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(494, 'service_page_en_name', 'Service', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(495, 'service_page_en_slug', 'service', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(496, 'work_page_en_name', 'Works', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(497, 'work_page_en_slug', 'work', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(498, 'team_page_en_name', 'Team', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(499, 'team_page_en_slug', 'team', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(500, 'faq_page_en_name', 'Faq', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(501, 'faq_page_en_slug', 'faq', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(502, 'about_page_sn_name', 'Acerca de', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(503, 'about_page_sn_slug', 'about', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(504, 'service_page_sn_name', 'Servicio', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(505, 'service_page_sn_slug', 'service', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(506, 'work_page_sn_name', 'Trabajos', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(507, 'work_page_sn_slug', 'work', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(508, 'team_page_sn_name', 'Equipo', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(509, 'team_page_sn_slug', 'team', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(510, 'faq_page_sn_name', 'Preguntas más frecuentes', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(511, 'faq_page_sn_slug', 'faq', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(512, 'about_page_pr_name', 'Sobre', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(513, 'about_page_pr_slug', 'about', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(514, 'service_page_pr_name', 'Serviço', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(515, 'service_page_pr_slug', 'service', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(516, 'work_page_pr_name', 'Trabalho', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(517, 'work_page_pr_slug', 'work', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(518, 'team_page_pr_name', 'Equipe', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(519, 'team_page_pr_slug', 'team', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(520, 'faq_page_pr_name', 'Perguntas frequentes', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(521, 'faq_page_pr_slug', 'faq', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(522, 'about_page_ar_name', 'حول', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(523, 'about_page_ar_slug', 'about', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(524, 'service_page_ar_name', 'الخدمات', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(525, 'service_page_ar_slug', 'service', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(526, 'work_page_ar_name', 'يعمل', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(527, 'work_page_ar_slug', 'work', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(528, 'team_page_ar_name', 'الفريق', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(529, 'team_page_ar_slug', 'team', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(530, 'faq_page_ar_name', 'التعليمات', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(531, 'faq_page_ar_slug', 'faq', '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(532, 'about_page_bn_name', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(533, 'about_page_bn_slug', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(534, 'service_page_bn_name', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(535, 'service_page_bn_slug', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(536, 'work_page_bn_name', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(537, 'work_page_bn_slug', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(538, 'team_page_bn_name', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(539, 'team_page_bn_slug', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(540, 'faq_page_bn_name', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(541, 'faq_page_bn_slug', NULL, '2020-03-22 20:04:24', '2020-03-23 10:45:22'),
(542, 'quote_page_form_fields', '{\"field_type\":[\"text\",\"text\",\"email\",\"file\",\"textarea\",\"checkbox\"],\"field_name\":[\"your-name\",\"your-subject\",\"your-email\",\"files\",\"your-message\",\"checkbox\"],\"field_placeholder\":[\"Your Name\",\"Your Subject\",\"Your Email\",\"File\",\"Your Message\",\"Accept Our Terms & Condition\"],\"field_required\":{\"0\":\"on\",\"1\":\"on\",\"2\":\"on\",\"4\":\"on\",\"5\":\"on\"},\"mimes_type\":{\"3\":\"mimes:txt,pdf\"}}', '2020-03-23 19:49:02', '2020-03-24 17:24:17'),
(543, 'order_page_form_fields', '{\"field_type\":[\"text\",\"email\",\"textarea\",\"file\"],\"field_name\":[\"your-name\",\"your-email\",\"your-message\",\"doc-file\"],\"field_placeholder\":[\"Your Name\",\"Your Email\",\"Your Message\",\"Document\"],\"field_required\":[\"on\",\"on\",\"on\"],\"mimes_type\":{\"3\":\"mimes:txt,pdf\"}}', '2020-03-24 18:05:26', '2020-03-24 19:03:34'),
(544, 'contact_page_form_fields', '{\"field_type\":[\"text\",\"email\",\"text\",\"textarea\",\"file\"],\"field_name\":[\"your-name\",\"your-email\",\"your-subject\",\"your-message\",\"file\"],\"field_placeholder\":[\"Your Name\",\"Your Email\",\"Your Subject\",\"Your Message\",\"File\"],\"field_required\":{\"1\":\"on\",\"2\":\"on\",\"3\":\"on\"},\"mimes_type\":{\"4\":\"mimes:txt,pdf\"}}', '2020-03-24 19:08:14', '2020-03-24 19:16:28'),
(545, 'call_back_page_form_fields', '{\"field_type\":[\"text\",\"email\",\"text\",\"tel\"],\"field_name\":[\"your-name\",\"your-email\",\"your-subject\",\"your-phone\"],\"field_placeholder\":[\"Your Name\",\"Your Email\",\"Your Subject\",\"Your Phone\"],\"field_required\":{\"0\":\"on\",\"1\":\"on\",\"2\":\"on\",\"4\":\"on\"}}', '2020-03-24 19:31:41', '2020-03-24 20:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `support_infos`
--

CREATE TABLE `support_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_infos`
--

INSERT INTO `support_infos` (`id`, `title`, `lang`, `details`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Email Address', 'en', 'support@bizzcox.com', 'flaticon-email', '2020-01-04 07:03:46', '2020-03-04 09:05:18'),
(2, 'Phone number', 'en', '+ 000 11 22 33', 'flaticon-phone-call', '2020-01-04 07:04:01', '2020-03-04 09:05:27'),
(3, 'Dirección de correo electrónico', 'sn', 'support@bizzcox.com', 'flaticon-email', '2020-03-01 09:18:16', '2020-03-04 09:05:37'),
(4, 'Número de teléfono', 'sn', '+ 000 11 22 33', 'flaticon-phone-call', '2020-03-01 09:18:50', '2020-03-04 09:05:45'),
(5, 'Endereço de e-mail', 'pr', 'support@bizzcox.com', 'flaticon-email', '2020-03-01 09:19:23', '2020-03-04 09:05:54'),
(6, 'Número de telefone', 'pr', '+ 000 11 22 33', 'flaticon-phone-call', '2020-03-01 09:19:49', '2020-03-04 09:06:03'),
(7, 'عنوان البريد الإلكتروني', 'ar', 'support@bizzcox.com', 'flaticon-email', '2020-03-15 18:27:19', '2020-03-15 18:27:19'),
(8, 'رقم الهاتف', 'ar', '+ 000 11 22 33', 'flaticon-phone-call', '2020-03-15 18:27:38', '2020-03-15 18:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_one_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_two_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_three_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `designation`, `image`, `icon_one`, `icon_two`, `icon_three`, `lang`, `icon_one_url`, `icon_two_url`, `icon_three_url`, `created_at`, `updated_at`) VALUES
(1, 'Imran Mahedi', 'CEO Ir-Tech', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'en', '#', '#', '#', '2020-01-26 20:49:33', '2020-03-05 15:45:09'),
(2, 'Raisa Moni', 'Founder', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'en', '#', '#', '#', '2020-01-26 20:51:12', '2020-03-05 15:45:50'),
(3, 'MK Kamal', 'Founder', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'en', '#', '#', '#', '2020-01-26 20:51:39', '2020-03-05 15:45:58'),
(4, 'Asif Nahid', 'Founder', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'en', '#', '#', '#', '2020-01-26 20:52:34', '2020-03-16 19:50:49'),
(5, 'Imran Mahedi', 'CEO Ir-Tech', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'sn', '#', '#', '#', '2020-02-24 12:48:42', '2020-03-05 15:46:18'),
(6, 'Raisa Moni', 'Tutor', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'sn', '#', '#', '#', '2020-02-24 12:56:35', '2020-03-05 15:46:35'),
(7, 'MK Kamal', 'Tutor', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'sn', '#', '#', '#', '2020-02-24 12:59:41', '2020-03-05 15:46:45'),
(8, 'Asif Nahid', 'Tutor', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'sn', '#', '#', '#', '2020-02-24 13:00:09', '2020-03-05 15:46:55'),
(9, 'Imran Mahedi', 'CEO Ir-Tech', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'pr', '#', '#', '#', '2020-02-24 13:01:05', '2020-03-05 15:47:04'),
(10, 'Raisa Moni', 'Orientador', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'pr', '#', '#', '#', '2020-02-24 13:05:11', '2020-03-05 15:47:14'),
(11, 'MK Kamal', 'Orientador', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'pr', '#', '#', '#', '2020-02-24 13:07:13', '2020-03-05 15:47:25'),
(12, 'Asif Nahid', 'Orientador', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'pr', '#', '#', '#', '2020-02-24 13:08:29', '2020-03-05 13:55:15'),
(13, 'Darnell L. Sutton', 'Founder', 'jpg', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-instagram', 'en', '#', '#', '#', '2020-03-10 05:02:42', '2020-03-10 05:06:34'),
(14, 'Brian J. Britt', '-Envato Customer', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'en', '#', '#', '#', '2020-03-10 05:03:15', '2020-03-10 05:06:46'),
(15, 'Andre S. Adams', '-Envato Customer', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'en', '#', '#', '#', '2020-03-10 05:03:43', '2020-03-10 05:07:02'),
(16, 'Walter S. Loy', '-Envato Customer', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'en', '#', '#', '#', '2020-03-10 05:04:35', '2020-03-10 05:07:33'),
(17, 'عمران مهدي', 'مؤسس', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'ar', '#', '#', '#', '2020-03-16 06:43:23', '2020-03-16 06:59:06'),
(18, 'رايسة موني', 'الرئيس التنفيذي لشركة Ir-Tech', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'ar', '#', '#', '#', '2020-03-16 07:15:11', '2020-03-16 07:15:11'),
(19, 'عضو الكنيست كمال', 'مؤسس', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'ar', '#', '#', '#', '2020-03-16 07:15:51', '2020-03-16 07:15:51'),
(20, 'عاصف ناهد', 'مؤسس', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'ar', '#', '#', '#', '2020-03-16 07:33:37', '2020-03-16 07:33:37'),
(21, 'دارنيل ساتون', 'مؤسس', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'ar', '#', '#', '#', '2020-03-16 07:34:09', '2020-03-16 07:34:09'),
(22, 'براين جيه. بريت', 'مؤسس', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'ar', '#', '#', '#', '2020-03-16 07:34:44', '2020-03-16 07:34:44'),
(23, 'أندريه آدامز', 'مؤسس', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'ar', '#', '#', '#', '2020-03-16 07:35:28', '2020-03-16 07:35:28'),
(24, 'والتر س. لوي', 'مؤسس', 'jpg', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-facebook-f', 'ar', '#', '#', '#', '2020-03-16 07:36:09', '2020-03-16 07:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `description`, `lang`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Olivia Hamel', 'jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quip ex ea com modo consequat.', 'en', '-Envato Customer', '2020-01-24 19:27:07', '2020-03-05 16:53:32'),
(2, 'Willie Butler', 'jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quip ex ea com modo consequat.', 'en', 'Founder', '2020-01-24 19:29:58', '2020-03-05 16:53:50'),
(3, 'Diana Scott', 'jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quip ex ea com modo consequat.', 'en', '-Envato Customer', '2020-01-24 19:30:21', '2020-03-05 16:53:56'),
(4, 'Jamie R. Carrillo', 'jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quip ex ea com modo consequat.', 'en', 'Founder', '2020-01-24 19:30:42', '2020-03-05 16:54:03'),
(5, 'Olivia Hamel', 'jpg', 'Apenas en paquetes llamativos por tan propiedad en delicados. Arriba o bien debe menos alquiler leer caminar, así sea. Fácil de vender a la hora de cantar. Cualquier significado también ha cesado la decadencia', 'sn', '-Envato Cliente', '2020-02-24 13:47:53', '2020-03-05 16:41:00'),
(6, 'Willie Butler', 'jpg', 'Apenas en paquetes llamativos por tan propiedad en delicados. Arriba o bien debe menos alquiler leer caminar, así sea. Fácil de vender a la hora de cantar. Cualquier significado también ha cesado la decadencia', 'sn', '-Envato Cliente', '2020-02-24 13:49:37', '2020-03-05 16:41:09'),
(7, 'Diana Scott', 'jpg', 'Apenas en paquetes llamativos por tan propiedad en delicados. Arriba o bien debe menos alquiler leer caminar, así sea. Fácil de vender a la hora de cantar. Cualquier significado también ha cesado la decadencia', 'sn', '-Envato Cliente', '2020-02-24 13:50:00', '2020-03-05 16:41:18'),
(8, 'Jamie R. Carrillo', 'jpg', 'Apenas en paquetes llamativos por tan propiedad en delicados. Arriba o bien debe menos alquiler leer caminar, así sea. Fácil de vender a la hora de cantar. Cualquier significado también ha cesado la decadencia', 'sn', '-Envato Cliente', '2020-02-24 13:50:34', '2020-03-05 16:41:27'),
(9, 'Olivia Hamel', 'jpg', 'Escassamente em encontrar pacotes delicados por essa propriedade. Para cima ou para baixo, deve-se menos aluguel de leitura, por isso seja. Fácil vendido em fazer hora cantar local. Qualquer significado cessou também a deca', 'pr', 'cliente envato', '2020-02-24 13:51:39', '2020-03-05 16:44:10'),
(10, 'Willie Butler', 'jpg', 'Escassamente em encontrar pacotes delicados por essa propriedade. Para cima ou para baixo, deve-se menos aluguel de leitura, por isso seja. Fácil vendido em fazer hora cantar local. Qualquer significado cessou também a deca', 'pr', 'cliente envato', '2020-02-24 13:52:10', '2020-03-05 16:44:20'),
(11, 'Diana Scott', 'jpg', 'Escassamente em encontrar pacotes delicados por essa propriedade. Para cima ou para baixo, deve-se menos aluguel de leitura, por isso seja. Fácil vendido em fazer hora cantar local. Qualquer significado cessou também a deca', 'pr', 'cliente envato', '2020-02-24 13:52:30', '2020-03-05 16:44:31'),
(12, 'Jamie R. Carrillo', 'jpg', 'Escassamente em encontrar pacotes delicados por essa propriedade. Para cima ou para baixo, deve-se menos aluguel de leitura, por isso seja. Fácil vendido em fazer hora cantar local. Qualquer significado cessou também a deca', 'pr', 'cliente envato', '2020-02-24 13:52:59', '2020-03-05 16:44:41'),
(13, 'أوليفيا هامل', 'jpg', 'الآن انتهى التساهل غير المتشابه تمامًا. أمر المخالف الاتفاق بلدي. التغيير بالكامل يقول لماذا أقدم فترة يتم وضع الإسقاط.', 'ar', '- عميل إنفاتو', '2020-03-16 07:38:17', '2020-03-16 07:38:17'),
(14, 'ويلي بتلر', 'jpg', 'الآن انتهى التساهل غير المتشابه تمامًا. أمر المخالف الاتفاق بلدي. التغيير بالكامل يقول لماذا أقدم فترة يتم وضع الإسقاط.', 'ar', '- عميل إنفاتو', '2020-03-16 07:43:52', '2020-03-16 07:43:52'),
(15, 'ديانا سكوت', 'jpg', 'الآن انتهى التساهل غير المتشابه تمامًا. أمر المخالف الاتفاق بلدي. التغيير بالكامل يقول لماذا أقدم فترة يتم وضع الإسقاط.', 'ar', '- عميل إنفاتو', '2020-03-16 07:44:21', '2020-03-16 07:44:21'),
(16, 'جيمي ر. كاريو', 'jpg', 'الآن انتهى التساهل غير المتشابه تمامًا. أمر المخالف الاتفاق بلدي. التغيير بالكامل يقول لماذا أقدم فترة يتم وضع الإسقاط.', 'ar', '- عميل إنفاتو', '2020-03-16 07:45:25', '2020-03-16 07:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clients` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `categories_id`, `start_date`, `end_date`, `image`, `description`, `lang`, `clients`, `created_at`, `updated_at`) VALUES
(1, 'Finance Solution', 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', '2019-02-03', '2019-04-02', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Jason C. Williams', '2020-01-24 10:45:38', '2020-03-16 05:27:39'),
(2, 'Business Solution', 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', '2019-03-01', '2020-01-02', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Stanley C. Herrick', '2020-01-24 10:46:06', '2020-03-04 12:12:31'),
(3, 'Investment Planning', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";}', '2019-04-02', '2019-11-03', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Stanley C. Herrick', '2020-01-24 15:36:58', '2020-03-04 12:12:51'),
(4, 'Insurance Life', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";}', '2019-10-02', '2019-12-01', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Vicky C. Ferris', '2020-01-24 15:48:17', '2020-03-04 12:13:29'),
(5, 'Building Structure', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";}', '2019-11-02', '2018-02-03', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Randy C. Lynch', '2020-01-24 16:35:28', '2020-03-04 12:14:19'),
(6, 'Digital Market', 'a:1:{i:0;s:1:\"2\";}', '2019-03-03', '2019-04-04', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Charles M. Bennett', '2020-01-24 16:58:20', '2020-03-04 12:14:39'),
(7, 'Business Advice', 'a:1:{i:0;s:1:\"1\";}', '2019-02-03', '2019-05-08', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Rebecca S. Isbell', '2020-01-24 17:01:17', '2020-03-04 12:15:09'),
(8, 'Finance Advice', 'a:1:{i:0;s:1:\"2\";}', '2019-04-03', '2019-05-02', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Jason L. Urena', '2020-01-24 17:03:45', '2020-03-04 12:15:35'),
(9, 'Marketing Advice', 'a:1:{i:0;s:1:\"2\";}', '2019-08-30', '2019-11-30', 'jpg', '<p>\r\nTalent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall it their. Extensive existence up me contained he pronounce do. Excellence inquietude assistance precaution any impression man sufficient. \r\n</p>\r\n<p>Am increasing at contrasted in favourable he considered astonished. As if made held in an shot. By it enough to valley desire do. Mrs chief great maids these which are ham match she. Abode to tried do thing maids. Doubtful disposed returned rejoiced to dashwood is so up. </p>\r\n<p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling. Covered ten nor comfort offices carried. Age she way earnestly the fulfilled extremely. Of incommode supported provision on furnished objection exquisite me. Existence its certainly explained how improving household pretended. Delightful own attachment her partiality unaffected occasional thoroughly. Adieus it no wonder spirit houses. </p>', 'en', 'Patrice J. Chastain', '2020-01-24 17:06:56', '2020-03-04 12:15:55'),
(10, 'Solución financiera', 'a:2:{i:0;s:1:\"9\";i:1;s:2:\"10\";}', '2018-01-01', '2021-01-01', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Jason C. Williams', '2020-02-23 18:06:32', '2020-03-04 12:16:49'),
(11, 'Solução Financeira', 'a:2:{i:0;s:1:\"5\";i:1;s:1:\"7\";}', '2019-02-04', '2021-01-01', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Jason C. Williams', '2020-02-23 18:07:43', '2020-03-04 12:17:26'),
(12, 'Solução de negócios', 'a:1:{i:0;s:1:\"7\";}', '2020-11-01', '2021-01-01', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Jason C. Williams', '2020-02-23 18:24:55', '2020-03-04 12:17:58'),
(13, 'Planejamento de Investimentos', 'a:2:{i:0;s:1:\"6\";i:1;s:1:\"7\";}', '2018-11-01', '2020-01-01', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Jason C. Williams', '2020-02-23 18:30:32', '2020-03-04 12:18:57'),
(14, 'Vida de Seguros', 'a:1:{i:0;s:1:\"7\";}', '2021-01-01', '2021-01-01', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Jason C. Williams', '2020-02-23 18:31:33', '2020-03-04 12:19:49'),
(15, 'Estrutura do edifício', 'a:2:{i:0;s:1:\"5\";i:1;s:1:\"6\";}', '2018-01-01', '2020-02-01', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Jason C. Williams', '2020-02-23 18:32:24', '2020-03-04 12:20:44'),
(16, 'Mercado Digital', 'a:1:{i:0;s:1:\"7\";}', '2020-11-01', '2021-04-02', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Jason C. Williams', '2020-02-23 18:33:28', '2020-03-04 12:31:03'),
(17, 'Assessoria Empresarial', 'a:1:{i:0;s:1:\"7\";}', '2018-09-01', '2019-02-03', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Stanley C. Herrick', '2020-02-23 18:34:24', '2020-03-04 12:32:36'),
(18, 'Assessoria Financeira', 'a:1:{i:0;s:1:\"6\";}', '2018-01-01', '2021-02-01', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Randy C. Lynch', '2020-02-23 18:37:32', '2020-03-04 12:33:46'),
(19, 'Assessoria de Marketing', 'a:1:{i:0;s:1:\"5\";}', '2020-01-01', '2016-01-01', 'jpg', '<p>Talento ela para animada comer irmã liderada. Os pacotes de entrada que ela deu renderizam-se e deixaram de indicar led. Habitação confinada melhorou, ele sem arrebatamentos duvidosos. Vários realizaram uma tentativa de gravidade. Situação em ofender em outro lugar desconfia se. Uso particular para projeção considerada cultivada. Vale a pena duvidar deles. A existência extensa em mim continha ele pronuncia fazer. Excelência inquietude assistência precaução qualquer homem impressão suficiente.</p><p><br></p><p>Estou aumentando em contraste com favorável, ele considerou atônito. Como se feito em um tiro. Por isso o suficiente para o vale desejar. Sra. Chefe grandes empregadas domésticas, que são de presunto. Morada para tentou fazer coisas empregadas domésticas. O descarte duvidoso devolvido, regozijado com o dashwood, é tão bom.</p><p><br></p><p>nenhuma bolsa como eu ou ponto. Bondade possuir o que a traiu, além disso, procurou responder por e. A proposta concedeu não fazer sociável ele jogando liquidação. Cobriu dez, nem escritórios de conforto transportados. Idade ela muito sinceramente cumpriu extremamente. A provisão incommode suportada na objeção fornecida me requintou. A existência certamente explicava como se pretendia melhorar a família. Delicioso apego próprio sua parcialidade não é afetada ocasionalmente completamente. Além disso, não é de admirar que as casas espirituais.</p>', 'pr', 'Vicky C. Ferris', '2020-02-23 18:38:09', '2020-03-04 12:34:53'),
(20, 'Solución de negocio', 'a:1:{i:0;s:2:\"10\";}', '2019-01-01', '2021-02-01', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Stanley C. Herrick', '2020-02-23 18:38:55', '2020-03-04 12:18:15'),
(21, 'Planificación de inversiones', 'a:2:{i:0;s:1:\"8\";i:1;s:1:\"9\";}', '2018-01-01', '2021-01-01', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Stanley C. Herrick', '2020-02-23 18:39:33', '2020-03-04 12:18:37'),
(22, 'Seguro de vida', 'a:2:{i:0;s:1:\"8\";i:1;s:2:\"10\";}', '2018-01-01', '2021-01-01', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Jason C. Williams', '2020-02-23 18:40:22', '2020-03-04 12:20:01'),
(23, 'Estructura de construcción', 'a:1:{i:0;s:2:\"10\";}', '2019-02-01', '2021-02-01', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Charles M. Bennett', '2020-02-23 18:41:01', '2020-03-04 12:20:30'),
(24, 'Mercado digital', 'a:1:{i:0;s:2:\"10\";}', '2018-01-01', '2021-02-01', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Jason C. Williams', '2020-02-23 18:41:51', '2020-03-04 12:31:24'),
(25, 'Asesoramiento empresarial', 'a:1:{i:0;s:1:\"9\";}', '2019-01-01', '2020-01-01', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Jason C. Williams', '2020-02-23 18:42:57', '2020-03-04 12:32:01'),
(26, 'Asesoramiento financiero', 'a:1:{i:0;s:1:\"9\";}', '2020-01-01', '2020-02-01', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Stanley C. Herrick', '2020-02-23 18:43:35', '2020-03-04 12:34:05'),
(27, 'Asesoramiento de marketing', 'a:1:{i:0;s:1:\"9\";}', '2018-03-01', '2022-03-03', 'jpg', '<p>Talento ella para comer animadamente llevó hermana. Los paquetes de entrada que ella rindió enérgicamente consiguen salir denotando led. Vivienda confinada mejoró él sin duda éxtasis. Varios llevaron a cabo un intento de gravedad. La situación de estar ofendiendo en otra parte desconfía si. Uso particular para la proyección considerada cultivada. Vale la pena dudarlo. Existencia extensa en mí contenía él pronuncia do. Excelencia consulta asistencia precaución cualquier impresión hombre suficiente.</p><p><br></p><p>Estoy aumentando en contraste con lo favorable que él considera asombrado. Como si fuera hecho en un tiro. Por lo suficiente para hacer el deseo del valle. La señora jefa de las grandes doncellas que son jamón coincide con ella. Morada a las criadas intentadas. La disposición dudosa regresó regocijado a dashwood está tan arriba.</p><p><br></p><p>Sin monedero como totalmente yo o punto. La amabilidad posee lo que sea que la traicionó, además, obtuvo respuesta para y. La propuesta se complació con no hacer sociable lanzando un arreglo. Cubierto diez ni oficinas de confort llevado. La edad que ella cumplió con seriedad fue extremadamente cumplida. De incomodidad disposición apoyada en objeción provista exquisito me. La existencia ciertamente explica cómo pretendía mejorar el hogar. Encantador apego propio, su parcialidad no se ve afectada ocasionalmente a fondo. Adieus no es de extrañar que las casas de los espíritus.</p>', 'sn', 'Stanley C. Herrick', '2020-02-23 18:47:37', '2020-03-04 12:34:32'),
(28, 'حل التمويل', 'a:2:{i:0;s:2:\"12\";i:1;s:2:\"13\";}', '2019-01-01', '2020-02-01', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-15 19:55:20', '2020-03-15 19:55:20'),
(29, 'حلول الأعمال', 'a:2:{i:0;s:2:\"12\";i:1;s:2:\"13\";}', '2019-12-01', '2020-01-01', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-16 05:29:13', '2020-03-16 05:29:13'),
(30, 'تخطيط الاستثمار', 'a:1:{i:0;s:2:\"13\";}', '2019-01-01', '2019-02-01', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-16 05:45:02', '2020-03-16 05:45:03'),
(31, 'التأمين على الحياة', 'a:2:{i:0;s:2:\"11\";i:1;s:2:\"12\";}', '2020-01-01', '2020-02-01', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-16 05:47:26', '2020-03-16 05:47:26'),
(32, 'هيكل المبنى', 'a:1:{i:0;s:2:\"11\";}', '2019-02-01', '2020-01-01', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-16 05:48:30', '2020-03-16 05:48:30'),
(33, 'السوق الرقمي', 'a:1:{i:0;s:2:\"11\";}', '2020-01-01', '2020-02-01', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-16 05:49:14', '2020-03-16 05:49:14');
INSERT INTO `works` (`id`, `title`, `categories_id`, `start_date`, `end_date`, `image`, `description`, `lang`, `clients`, `created_at`, `updated_at`) VALUES
(34, 'نصائح تجارية', 'a:1:{i:0;s:2:\"12\";}', '2019-01-01', '2019-10-02', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-16 05:50:48', '2020-03-16 05:50:49'),
(35, 'نصائح مالية', 'a:1:{i:0;s:2:\"11\";}', '2019-01-01', '2020-01-01', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-16 05:51:49', '2020-03-16 05:51:50'),
(36, 'نصائح التسويق', 'a:1:{i:0;s:2:\"12\";}', '2019-01-01', '2020-01-01', 'jpg', '<p>موهبة أنها تأكل شقيقة قيادة حية. مدخل حزم قوية أنها خرجت الحصول على الإقلاع دلالة أدى. مسكن محصّن حسن أنه لا شك في نشوة الطرب. حمل العديد من خلال محاولة الجاذبية. الوضع في الإساءة إلى عدم الثقة في مكان آخر إذا. استخدام خاص لإسقاط النظر المزروع. يستحق الشك أن يكون لهم. الوجود الواسع يصل لي احتواء نطق به. التميز استباقية المساعدة الاحتياطية أي انطباع كافي.</p><p><br></p><p>أنا في تزايد في مقابل مواتية اعتبره مندهشا. كما لو تم عقده في طلقة. به ما يكفي لرغبة الوادي تفعل. خادمات السيدة الكبيرة هؤلاء هم من لحم الخنزير تطابقها. منزل لمحاولة فعل الخادمات. عاد المشكوك فيها التخلص منها ابتهج إلى dashwood حتى.</p><p><br></p><p>لا مال كما أنا أو نقطة. اللطف امتلك ما خانته علاوة على ذلك اشترى الرد عليه و. الاقتراح ينغمس لا تفعل مؤنس انه يرمي الاستقرار. غطت عشرة مكاتب ولا تحمل الراحة. العمر بطريقة جادة الوفاء للغاية. من الحكم المدعوم incommode على الاعتراض المفروش رائعة لي. الوجود شرح بالتأكيد كيف تظاهر تحسين الأسرة. مرفق خاص بها لذيذ تتأثر جزئياً بين الحين والآخر. Adieus لا عجب منازل الروح.</p>', 'ar', 'جايسون سي ويليامز', '2020-03-16 05:54:34', '2020-03-16 05:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `works_categories`
--

CREATE TABLE `works_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works_categories`
--

INSERT INTO `works_categories` (`id`, `name`, `status`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Banking', 'publish', 'en', '2020-01-23 20:22:14', '2020-03-04 15:14:53'),
(2, 'Financial', 'publish', 'en', '2020-01-23 20:23:12', '2020-03-04 11:57:50'),
(3, 'Consulting', 'publish', 'en', '2020-01-23 20:23:28', '2020-03-04 11:58:03'),
(5, 'Bancária', 'publish', 'pr', '2020-02-23 16:00:39', '2020-03-04 15:15:38'),
(6, 'Financiera', 'publish', 'pr', '2020-02-23 16:00:51', '2020-03-04 15:14:59'),
(7, 'Consultando', 'publish', 'pr', '2020-02-23 16:01:00', '2020-03-04 15:16:13'),
(8, 'Bancaria', 'publish', 'sn', '2020-02-23 16:01:15', '2020-03-04 15:15:45'),
(9, 'Financiera', 'publish', 'sn', '2020-02-23 16:01:25', '2020-03-04 15:15:05'),
(10, 'Consultante', 'publish', 'sn', '2020-02-23 16:01:37', '2020-03-04 15:16:04'),
(11, 'الخدمات المصرفية', 'publish', 'ar', '2020-03-15 19:35:18', '2020-03-15 19:35:18'),
(12, 'الأمور المالية', 'publish', 'ar', '2020-03-15 19:35:26', '2020-03-15 19:35:31'),
(13, 'مستشار', 'publish', 'ar', '2020-03-15 19:35:41', '2020-03-15 19:35:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_name_unique` (`name`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info_items`
--
ALTER TABLE `contact_info_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counterups`
--
ALTER TABLE `counterups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_sliders`
--
ALTER TABLE `header_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key_features`
--
ALTER TABLE `key_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `know_abouts`
--
ALTER TABLE `know_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `price_plans`
--
ALTER TABLE `price_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_options`
--
ALTER TABLE `static_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_infos`
--
ALTER TABLE `support_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works_categories`
--
ALTER TABLE `works_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_info_items`
--
ALTER TABLE `contact_info_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `counterups`
--
ALTER TABLE `counterups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `header_sliders`
--
ALTER TABLE `header_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `key_features`
--
ALTER TABLE `key_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `know_abouts`
--
ALTER TABLE `know_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `price_plans`
--
ALTER TABLE `price_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `static_options`
--
ALTER TABLE `static_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=546;

--
-- AUTO_INCREMENT for table `support_infos`
--
ALTER TABLE `support_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `works_categories`
--
ALTER TABLE `works_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
