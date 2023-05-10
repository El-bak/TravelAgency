-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 mars 2023 à 13:31
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myoo_agency`
--

-- --------------------------------------------------------

--
-- Structure de la table `circuit`
--

CREATE TABLE `circuit` (
  `Id` smallint(6) NOT NULL,
  `Nom_Circuit` varchar(20) NOT NULL,
  `Prix_Circuit` int(3) DEFAULT NULL,
  `Date_depart` date DEFAULT NULL,
  `Date_arrivee` date DEFAULT NULL,
  `Duree` int(2) DEFAULT NULL,
  `Description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `circuit`
--

INSERT INTO `circuit` (`Id`, `Nom_Circuit`, `Prix_Circuit`, `Date_depart`, `Date_arrivee`, `Duree`, `Description`) VALUES
(1, 'L\'EGYPTE ANTIQUE', 452, '2023-06-22', '2023-07-12', 15, 'Voyage initiatique en croisière sur le Nil 5*, en pension complète (repas inclus sur le bateau, hors boissons) qui vous permettra de découvrir l\'Egypte et ses hauts lieux culturels grâce à de nombreuses excursions incluses : le Temple de Karnak, le Temple d\'Edfou, le Temple de Kom Ombo, les Barrages d\'Assouan, le Temple de Medinet Habou et le Temple de Louxor (si vous le souhaitez, d\'autres excursions vous seront proposées sur place en option, avec supplément).\n\nProfitez d\'une formule pension-complète pour des vacances décontractées et colorées. Votre animateur Jumbo francophone vous proposera un programme adapté à l\'ambiance conviviale et veillera à l\'organisation et au bon déroulement de votre croisière. Soirée déguisée, soirée nubienne, soirée orientale...\nUne ambiance festive, pour le plus grand bonheur des petits et des grands !'),
(2, 'INCAS ET AMAZONIE', 1823, '2023-06-13', '2023-06-30', 17, 'Venez découvrir les paysages grandioses et variés du Pérou et profiter d\'un accueil chaleureux ! Vous visiterez des sites incontournables, Lima la capitale, Arequipa la blanche, Cusco au cœur de la vallée sacrée, le fameux Machu Picchu, sans oublier le lac Titicaca et ses îles (le plus haut lac navigable au monde).\r\nCe pays aux diverses facettes vous fera voyager dans le temps grâce à ses nombreux sites archéologiques Incas, sa musique traditionnelle andine et ses nombreuses traditions. Ce mélange entre visites culturelles et naturelles vous permettra d\'échanger avec la population et d\'avoir un aperçu authentique de la destination.\r\nCette extension de 3 nuits en Amazonie vous assurera une immersion complète dans la plus grande forêt tropicale du monde ! Plongez dans un environnement d\'une grande richesse, il vous sera proposé une balade dans la mythique forêt Amazonienne, une sortie nocturne en compagnie des caïmans pour un maximum de frissons ou une navigation en petits bateaux à rame… Au cœur de cette région chargée d\'une flore et d\'une faune exceptionnelle, le dépaysement sera total !'),
(3, 'FRANCE', 750, '2023-03-01', '2023-04-12', 43, 'Découvrir les richesses de la France\r\nUne location en France est synonyme de vacances pour tous les goûts. L’été, le séjour rime avec plage ou piscine, maillot de bain, bain de soleil et glace au bord de la mer. La Corse est particulièrement agréable pour la baignade, grâce à son eau d’environ 24°C. Les gourmets apprécieront une location de vacances en France du côté de la Bretagne. Sa célèbre crêpe ne laissera personne indifférent. Chaque région française recèle des merveilles, une riche culture et patrimoine dans des environnements aussi variés qu’exceptionnels. La nouvelle Aquitaine est connue pour ses vignobles et ses magnifiques plages. Le Grand Sud propose la visite de Strasbourg la capitale européenne, les massifs vosgiens, les vignobles alsaciens. Auvergne Rhône-Alpes est célèbre pour ses stations thermales, ses volcans et pics enneigés. La douceur de vivre à la Normandie, l’art de vivre à Bourgogne en Franche-Comté ou l’Occitanie et les journées ensoleillées sauront séduire les visiteurs.\r\n\r\nVacances en France, une destination incontournable en Europe\r\nLa France regorge de sites et monuments qui attirent chaque année des millions de touristes. La découverte de Paris est un itinéraire à part entière à l’occasion d’une location de vacances en France. La tour Eiffel, le symbole de Paris, la Cathédrale de Notre-Dame, l’Arc de Triomphe, le Panthéon, la basilique du Saint-Cœur, le château de Versailles, la Tour Montparnasse, le Palais Royal, le château de Vincennes.... figurent parmi les incontournables. Chaque région française possède également ses propres monuments. Le Mont-Saint-Michel et son abbaye en Normandie attirent des visiteurs curieux de découvrir la baie et les plus grandes marées d’Europe. La Cathédrale de Strasbourg en Alsace séduit les passionnés d’architecture médiévale. Le phare de l’Ile Vierge en Bretagne propose un cadre exceptionnel, propice à des visites à pieds. Les palais des Papes en Avignon se distinguent par une architecture gothique, la'),
(4, 'MAROC', 250, '2023-08-10', '2023-08-27', 17, 'Le Maroc est une destination agréable toute l\'année. Le Royaume invite à la découverte de son patrimoine culturel aux multiples facettes. Une diversité de paysages incroyables : vallées verdoyantes et magnifiques canyons composent la région du Rif et la façade méditerranéenne, tandis que la côte atlantique est marquée par une succession de falaises de grès et de plages immenses. L\'hospitalité des marocains n\'est pas une légende, elle est culturelle, pendant votre séjour vous serez certainement sollicité à partager un thé à la menthe.\r\n\r\nLes villes impériales du Maroc sont les villes désignées en tant que capitale, à différentes époques par différents monarques issus des dynasties marocaines : Idrissides, Almoravides, Almohades, Mérinides, Saadiens et Alaouites.\r\n\r\nLe Maroc compte quatre villes impériales : Fès, fondée par le sultan Idrisside Idris Ier, Marrakech, fondée par le sultan almoravide Youssef Ibn Tachfin, Rabat, fondée par le sultan almohade Abd al-Mumin, Meknès, fondée au XIe siècle par la dynastie des Almoravides sous le règne du sultan alaouite Ismaïl ben Chérif.\r\nNous vous proposons un programme idéal, avec des rencontres surprenantes au cœur de médinas ancestrales, des panoramas variés, des couleurs et des odeurs dépaysante.\r\n\r\nEn quête d\'authenticité, de culture et de soleil, nul besoin de partir très loin pour faire un beau voyage, l\'évasion est à la portée de tous !\r\nN\'hésitez plus et embarquez pour ce circuit inoubliable au Maroc !'),
(5, 'COMORES', 1200, '2023-05-12', '2023-05-28', 16, 'Sur les marchés des trois îles, vous trouverez des bijoux en argent, des chapeaux en raphia, des articles en vannerie, ainsi que du linge de maison, brodé de motifs colorés d\'inspiration malgache. Les épices locales étant extrêmement bon marché, ne vous privez pas de faire provision de noix de muscade, de clous de girofle et de gousses de vanille. Les bois sculptés sont aussi une spécialité de l\'archipel.\r\nLes boutiques sont généralement ouvertes en semaine de 8 h à 12 h et de 14 h à 16 h, sauf le vendredi, où tous les commerces ferment à 11 h. En période de ramadan, les horaires d\'ouverture sont fortement perturbés.\r\nVenir aux Comores n\'est pas chose aisée et n\'est pas donné à tout le monde. Mieux vaut avoir une âme d\'aventurier et de débrouillard. Peu touristique, cet archipel n\'est pas vraiment équipé pour recevoir ces derniers. Peu d\'infrastructures hôtelières, de moyens de transports. Nous ne saurons vous conseiller de bien préparer votre voyage avant de partir si vous ne voulez pas perdre trop de temps. Effectuez toutes les réservations des vols intérieurs et des traversées en bateau. Un voyage aux Comores se mérite. Renseignez-vous aussi avant de partir sur le contexte politique du moment. Souvent le climat social et politique est peu propice à la découverte de cet archipel. N\'oubliez pas que vous êtes sur une terre musulmane, respectez donc les habitants. Les femmes devront faire attention à leur tenue et réserver le maillot de bain uniquement pour la plage. Avant de prendre des photos, demandez la permission à la personne intéressée. La faune et la flore sont protégés. Ne pas achetez des produits sans être certains que ce ne soit autorisé. Par exemple il est interdit d\'acheter des tortues, des coquillages et des coraux. Par contre, vous pourrez rapportés sans souci de la vanille, de la cannelle, du poivre, de la cardamone ou encore du ylang ylang, spécialités de l\'archipel. Avant de partir, renseignez-vous sur la situation du pays. Une fois arrivée à Mayott'),
(6, 'ETATS-UNIS', 2472, '2023-04-20', '2023-05-12', 22, 'Pays mythique d’Amérique du Nord, les USA, United States of America ou plus couramment États-Unis s’étendent sur un territoire de plus de 9 millions de kilomètres carrés. Rien de mieux qu’un circuit aux États-Unis pour découvrir toutes les facettes de ses 50 États. Pour un premier voyage, je vous recommande un circuit ouest américain en voiture qui vous plongera dans le rêve américain à travers d’inoubliables itinéraires.'),
(7, 'CROATIE', 1203, '2023-11-01', '2023-12-12', 42, 'Véritable carrefour de civilisations, la Croatie détient un patrimoine historique et culturel à la fois riche et diversifié lui conférant un charme particulier. Grecs, Romains, Celtes, Ottomans, Vénitiens ont tour à tour laissé des marques indélébiles sur cette terre cosmopolite.\r\n\r\nPoint de départ de tout circuit en Croatie, Zagreb, la capitale, est une ville dynamique, vivante et authentique. La ville haute abrite plusieurs édifices multiséculaires relatant le passé prospère de la cité tandis que la ville basse se démarque par ses musées et par ses temples construits à l’aube du XIXe siècle. Ce voyage en Croatie au cœur de Zagreb est aussi un moment à ne pas manquer pour découvrir les délices de la gastronomie croate. Des plats originaux à l’exemple des trukli, sorte de feuilletés au fromage, sont à déguster dans les restaurants de terroirs et les gargotes des quartiers.\r\n\r\nDubrovnik est aussi un lieu de choix pour continuer vos circuits en Croatie. Ses remparts datant du XIIIe siècle s’ouvrent sur un véritable musée à ciel ouvert. En franchissant la porte Pile, vous découvrez le monastère franciscain, le palais Sponza et l’église Saint-Blaise. Split est également une destination incontournable. Le palais Papalic, la cathédrale Saint-Domnius et le musée archéologique fascinent les amateurs de visite historique tandis que la plage de Bacvice demeure le point de rendez-vous par excellence pour les amateurs de baignade.\r\n\r\nLoin des bruits des grandes villes, l’île de Korcula est parfaite si vous êtes en quête d’un endroit paisible pour parfaire votre voyage en Croatie à la dernière minute. Ses ports naturels, ses criques isolées, ses cérémonies traditionnelles et ses musiques folkloriques semblent vous emporter dans un monde irréel.'),
(8, 'TANZANIE', 152, '2023-06-22', '2023-07-12', 15, 'Zanzibar est un archipel de l\'Océan Indien situé en face des côtes tanzaniennes et composé de 3 iles principales: Unguja, Pemba et Mafia.\r\nL\'île de Zanzibar est entourée d\'un récif de corail naturel.\r\nLes richesses naturelles et les eaux cristallines de l\'île vous apporteront sérénité et émerveillement durant ce circuit !'),
(9, 'MEXIQUE', 322, '2023-02-22', '2023-07-02', 10, 'Ce circuit est une combinaison parfaite entre exploration et farniente.\r\nCette aventure vous plongera au cœur de la culture aztèque et maya. Partez à la découverte des sites archéologiques, des réserves naturelles, des musées, ou encore des marchés locaux.\r\nEn fin de programme, 3 nuits au Framissima Viva Wyndham en formule tout compris 24h/24, vous permettront de profiter de la plage de la Riviera Maya.'),
(10, 'CUBA', 1429, '2023-06-22', '2023-07-12', 15, 'Cuba, la plus grande île des Antilles offre le cadre idéal pour combler vos envies de vacances aux parfums d’exotisme. Avec les nombreuses offres de circuits à Cuba, profitez d’une chance unique pour découvrir en quelques jours les villes incontournables du pays');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Num_Tel` int(11) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(256) DEFAULT NULL,
  `date_de_naissance` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Id`, `nom`, `Adresse`, `email`, `Num_Tel`, `prenom`, `nickname`, `mot_de_passe`, `date_de_naissance`) VALUES
(2, 'François', '07 avenue de la cave 57021 lavie', 'Françoisoumoute@hotmail.fr', 924154875, 'MOUMOUTE', 'Soldat', 'Soldatinconnudubataillon^13', '2000-01-12'),
(3, 'Nourdine', '56 avenue de lenfer 56012 cimetiere', 'Nourdinsamsara@gmail.com', 821051114, 'SAMSARA', 'Legrincheux', 'Nourdinecardinaz%78', '1999-12-12'),
(6, 'Nicolas', '11 rue du ciel 11002', 'Soldatnico05@gmail.com', 616468225, 'Larue', 'Lord_encule', 'Lord_pretty!27', '2002-05-28'),
(7, 'Mouhseine', '124 rue de la gare madrid', 'hakimimadrid124@hotmail.fr', 33247859, 'Hakim', 'Lebanquier', 'Mouhseinesynopsis!12', '1997-11-18'),
(9, 'Mohamed', '13 rue de la fontaine 75200 paris', 'minaruto45@gmail.com', 625852415, 'SAID ALI', 'Mze_de_la_luna', 'Mohamedmzembaba!23', '1957-03-15'),
(11, 'Yasser', '92 avenue boulevard de lamiel', 'Yassermiis@hotmail.fr', 2147483647, 'MOHAMED YOUSSOUF', 'Yash_252', 'Princeyash_452', '2001-04-12'),
(14, 'Hamidou', '56 rue de la rébellion 56002', 'Nasraqueen@gmail.com', 623258542, 'Nasra', 'labelledesiles', 'Nasralabelle@1256', '2002-06-06'),
(16, 'yazid', '45 rue de la garce 76001', 'Dragonrace@hotmail.fr', 656521485, 'allaoui', 'dragonrace', 'Minatonamizake!47', '2002-04-20'),
(24, 'Salvatore', '74 rue de la fayette', 'Damonslasher@gmail.com', 36244889, 'Damon', 'leboucher', 'lebouchersanguinaire@65', '1957-10-18'),
(38, 'Minaruto', '41 rue de la fayette', 'Greatemperormaddog@gmail.com', 7020504, 'Jackson', NULL, NULL, NULL),
(134, 'El-bak', '41 rue de Trévise', 'yaaniselbak@gmail.com', 767918312, 'Yanis', 'Bink_98', NULL, NULL),
(183, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `Id` smallint(6) NOT NULL,
  `Nom_Destination` varchar(40) DEFAULT NULL,
  `PAYS_Destination` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `destination`
--

INSERT INTO `destination` (`Id`, `Nom_Destination`, `PAYS_Destination`) VALUES
(1, 'Le Caire', 'L\'Egypte'),
(2, 'Louxor', 'L\'EGYPTE ANTIQUE'),
(3, 'Paris', 'FRANCE'),
(4, 'Les Alpes', 'FRANCE'),
(5, 'Lyon', 'FRANCE'),
(6, 'Montpelier', 'FRANCE'),
(7, 'Marrakech', 'MAROC'),
(8, 'Fès', 'MAROC'),
(9, 'Meknès', 'MAROC'),
(10, 'Rabat', 'MAROC'),
(11, 'Casablanca', 'MAROC'),
(12, 'Lima', 'INCAS ET AMAZONIE'),
(13, 'Puno', 'INCAS ET AMAZONIE'),
(14, 'Cusco', 'INCAS ET AMAZONIE'),
(15, 'Hahaya', 'COMORES'),
(16, 'Zanzibar', 'TANZANIE'),
(17, 'Mexico', 'MEXIQUE'),
(18, 'Riviera Maya', 'MEXIQUE'),
(19, 'Tehuantepec', 'MEXIQUE'),
(20, 'Oaxaca', 'MEXIQUE'),
(21, 'Los Angeles', 'ETATS-UNIS'),
(22, 'New York', 'ETATS-UNIS'),
(23, 'Floride', 'ETATS-UNIS'),
(24, 'Houston', 'ETATS-UNIS'),
(25, 'Dubrovnik', 'CROATIE'),
(26, 'Pula', 'CROATIE'),
(27, 'Sisac', 'CROATIE'),
(28, 'Karlovas', 'CROATIE'),
(29, 'Havana', 'CUBA'),
(30, 'Pina de Rio', 'CUBA'),
(31, 'Artemisa', 'CUBA'),
(32, 'Santa Clara', 'CUBA'),
(33, 'California', 'ETATS-UNIS'),
(34, 'Texas', 'ETATS-UNIS');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Id` smallint(6) NOT NULL,
  `Id_1` smallint(6) NOT NULL,
  `Date_reservation` date DEFAULT NULL,
  `Nbre_passager` int(11) DEFAULT NULL,
  `Prix` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Id`, `Id_1`, `Date_reservation`, `Nbre_passager`, `Prix`) VALUES
(0, 3, '2023-06-02', 175, '8500'),
(0, 24, '2023-06-02', 95, '1500'),
(1, 11, '2023-02-12', 123, '4525'),
(3, 14, '2023-03-16', 72, '1250'),
(4, 2, '2023-04-30', 252, '8250'),
(22, 24, '2023-01-02', 239, '12585');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` smallint(255) UNSIGNED NOT NULL,
  `nom` varchar(256) NOT NULL DEFAULT '',
  `prenom` varchar(256) NOT NULL DEFAULT '',
  `nickname` varchar(255) NOT NULL,
  `date_de_naissance` varchar(32) NOT NULL DEFAULT '',
  `mot_de_passe` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `nickname`, `date_de_naissance`, `mot_de_passe`) VALUES
(1, 'Said ali', 'Mohamed', 'denzo@27', '1998-12-02', 'Alimohamed@123!'),
(4, 'Salvatore', 'Damone', 'le Vampire', '1957-03-15', 'soldatvampire@48'),
(7, 'Mouhseine', 'Hakim', 'paindépice', '1987-11-29', 'lionduvillage@31!'),
(8, 'Mohammed Youssouf', 'Yasser', 'lebouseux', '2000-05-25', 'Princeyash_452'),
(9, 'Salvatore', 'Stéphone', 'leboucher', '1957-10-18', 'lebouchersanguinaire@65');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `Id` smallint(6) NOT NULL,
  `Nom_voyage` varchar(50) DEFAULT NULL,
  `Id_1` smallint(6) NOT NULL,
  `Id_2` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`Id`, `Nom_voyage`, `Id_1`, `Id_2`) VALUES
(0, 'Le caire', 1, 1),
(1, 'Louxor', 1, 2),
(2, 'Lima', 12, 2),
(3, 'Paris', 3, 3),
(4, 'Les Alpes', 4, 3),
(5, 'Lyon', 5, 3),
(6, 'Montpelier', 6, 3),
(7, 'Marrakech', 7, 4),
(8, 'Fès', 8, 4),
(9, 'Meknès', 9, 4),
(10, 'Rabat', 10, 4),
(11, 'Casablanca', 11, 4),
(13, 'Puno', 13, 2),
(14, 'Cusco', 14, 2),
(15, 'Hahaya', 15, 5),
(16, 'Zanzibar', 16, 8),
(17, 'Mexico', 17, 9),
(18, 'Rivera Maya', 18, 9),
(19, 'Tehuantepec', 19, 9),
(20, 'Oaxaca', 20, 9),
(22, 'New york', 22, 6),
(24, 'Houston', 24, 6),
(25, 'Dubrovnik', 25, 7);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `circuit`
--
ALTER TABLE `circuit`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`,`Id_1`),
  ADD KEY `Id_1` (`Id_1`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_1` (`Id_1`),
  ADD KEY `Id_2` (`Id_2`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `circuit`
--
ALTER TABLE `circuit`
  MODIFY `Id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `Id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `voyage` (`Id`);

--
-- Contraintes pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD CONSTRAINT `voyage_ibfk_1` FOREIGN KEY (`Id_1`) REFERENCES `destination` (`Id`),
  ADD CONSTRAINT `voyage_ibfk_2` FOREIGN KEY (`Id_2`) REFERENCES `circuit` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
