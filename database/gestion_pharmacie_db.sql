-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 14 nov. 2020 à 05:32
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_pharmacie_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_ordonances`
--

CREATE TABLE `tb_cons_ordonances` (
  `ordon_id` int(11) NOT NULL,
  `ordonance_numero` int(10) NOT NULL,
  `ordonance_date` date NOT NULL,
  `ordonance_details` text NOT NULL,
  `nom_medecin` varchar(25) NOT NULL,
  `spec_medecin` varchar(25) NOT NULL,
  `malade_noms` varchar(255) NOT NULL,
  `malade_age` int(11) NOT NULL,
  `malade_telephone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_prescriptions`
--

CREATE TABLE `tb_cons_prescriptions` (
  `prescrip_id` int(11) NOT NULL,
  `numero_ordonance` int(11) NOT NULL,
  `produit_prescrit` int(11) NOT NULL,
  `posologie` varchar(255) NOT NULL,
  `mode_emploi` varchar(75) NOT NULL,
  `quantite_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_categories`
--

CREATE TABLE `tb_im_categories` (
  `categorie_id` int(11) NOT NULL,
  `designation` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_categories`
--

INSERT INTO `tb_im_categories` (`categorie_id`, `designation`) VALUES
(1, 'Aliments'),
(2, 'Legumes'),
(3, 'Fruits'),
(4, 'Engrais'),
(5, 'Agriculture'),
(6, 'Elevage');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_demandes`
--

CREATE TABLE `tb_im_demandes` (
  `demande_id` int(11) NOT NULL,
  `benef_nom` varchar(75) NOT NULL,
  `prix_total` float NOT NULL,
  `qte_demandee` int(11) DEFAULT NULL,
  `date_demandee` date DEFAULT NULL,
  `produit_sid` int(11) DEFAULT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL,
  `shop_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_demandes`
--

INSERT INTO `tb_im_demandes` (`demande_id`, `benef_nom`, `prix_total`, `qte_demandee`, `date_demandee`, `produit_sid`, `date_ajout`, `date_modif`, `shop_sid`) VALUES
(1, 'Rubuz', 0, 120, '2020-10-18', 2, '2020-10-18 19:16:21', '0000-00-00 00:00:00', 2),
(2, 'Mwila', 0, 90, '2020-10-18', 2, '2020-10-18 19:22:20', '0000-00-00 00:00:00', 1),
(3, 'cheche', 41250, 25, '2020-10-22', 3, '2020-10-22 13:59:01', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_entrees`
--

CREATE TABLE `tb_im_entrees` (
  `entree_id` int(11) NOT NULL,
  `fss_sid` int(11) NOT NULL,
  `qte_entree` int(11) DEFAULT NULL,
  `date_entree` date DEFAULT NULL,
  `produit_sid` int(11) DEFAULT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_entrees`
--

INSERT INTO `tb_im_entrees` (`entree_id`, `fss_sid`, `qte_entree`, `date_entree`, `produit_sid`, `date_ajout`, `date_modif`) VALUES
(1, 1, 25, '2020-10-18', 1, '2020-10-18 18:37:30', '0000-00-00 00:00:00'),
(2, 1, 15, '2020-10-17', 2, '2020-10-18 18:38:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_fournisseurs`
--

CREATE TABLE `tb_im_fournisseurs` (
  `fss_id` int(11) NOT NULL,
  `nom` varchar(75) DEFAULT NULL,
  `contact` varchar(75) DEFAULT NULL,
  `adresse` varchar(75) DEFAULT NULL,
  `type_fss` varchar(75) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_fournisseurs`
--

INSERT INTO `tb_im_fournisseurs` (`fss_id`, `nom`, `contact`, `adresse`, `type_fss`, `date_created`, `last_update`) VALUES
(1, 'FSS1', '08525855885', 'LUSHI', 'Entreprise', '2020-11-07 08:18:18', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_produits`
--

CREATE TABLE `tb_im_produits` (
  `intrant_id` int(11) NOT NULL,
  `libelle` varchar(75) NOT NULL,
  `qte_stock` int(11) DEFAULT NULL,
  `prix_unitaire` float DEFAULT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_produits`
--

INSERT INTO `tb_im_produits` (`intrant_id`, `libelle`, `qte_stock`, `prix_unitaire`, `date_ajout`, `date_modif`) VALUES
(1, 'Mazout', 175, 1750, '2020-10-18 17:51:23', '2020-10-22 12:39:25'),
(2, 'Essence', 120, 1950, '2020-10-18 17:52:53', '2020-10-22 12:39:42'),
(3, 'Petrole', 1400, 1650, '2020-10-22 12:40:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_shops`
--

CREATE TABLE `tb_im_shops` (
  `shop_id` int(11) NOT NULL,
  `shop_nom` varchar(75) NOT NULL,
  `shop_adresse` varchar(75) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_shops`
--

INSERT INTO `tb_im_shops` (`shop_id`, `shop_nom`, `shop_adresse`, `date_ajout`, `date_update`) VALUES
(1, 'Camp Vangu', '', '2020-10-22 08:15:21', '2020-10-15 07:17:17'),
(2, '24h Filling', 'Centre ville de Lubumbashi', '2020-10-22 13:32:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_stockshops`
--

CREATE TABLE `tb_im_stockshops` (
  `stock_id` int(11) NOT NULL,
  `stock_init` int(11) DEFAULT NULL,
  `qte_tot_vendue` int(11) DEFAULT NULL,
  `shop_sid` int(11) DEFAULT NULL,
  `produit_sid` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'logisticien',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT NULL,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(1, 'Elie Mwez', 'eliemwez', '$2y$12$lgSZ78FDfw7MUBBIrMgsfOB2BEBDapoD4jIJEtr.arj6dSYRoBDZG', 'eliemwez.rubuz@gmail.com', 'Masculin', '+243858533285', 'user', '2020-09-11 08:08:58', '2020-09-21 08:02:11', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-09-19 14:07:30', 'logisticien', '11220'),
(2, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243903774951', 'admin', '2020-09-21 08:01:52', '2020-10-22 12:14:17', 'active', 'global/img/avatars/IMG_20200309_110637_241.jpg', '2020-09-21 12:06:49', 'admin', '2020010'),
(3, 'Paola Nsomp', 'paola', '$2y$12$NdMOM0tNdOyTxWRB1nZ31.Duy/A16/Ltq/BigMF05ANJ74D/Jw7IC', 'paola@gmail.com', 'Femme', '+2430975556941', 'user', '2020-10-18 17:40:01', '2020-10-18 17:51:53', 'active', NULL, '2020-10-18 19:00:00', 'logisticen', '1122001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_cons_ordonances`
--
ALTER TABLE `tb_cons_ordonances`
  ADD PRIMARY KEY (`ordon_id`),
  ADD UNIQUE KEY `ordonance_numero` (`ordonance_numero`);

--
-- Index pour la table `tb_cons_prescriptions`
--
ALTER TABLE `tb_cons_prescriptions`
  ADD PRIMARY KEY (`prescrip_id`),
  ADD KEY `numero_ordonance` (`numero_ordonance`),
  ADD KEY `produit_prescrit` (`produit_prescrit`);

--
-- Index pour la table `tb_im_categories`
--
ALTER TABLE `tb_im_categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Index pour la table `tb_im_demandes`
--
ALTER TABLE `tb_im_demandes`
  ADD PRIMARY KEY (`demande_id`),
  ADD KEY `shop_sid` (`shop_sid`),
  ADD KEY `produit_sid` (`produit_sid`);

--
-- Index pour la table `tb_im_entrees`
--
ALTER TABLE `tb_im_entrees`
  ADD PRIMARY KEY (`entree_id`),
  ADD KEY `intrant_sid` (`produit_sid`),
  ADD KEY `fss_sid` (`fss_sid`);

--
-- Index pour la table `tb_im_fournisseurs`
--
ALTER TABLE `tb_im_fournisseurs`
  ADD PRIMARY KEY (`fss_id`);

--
-- Index pour la table `tb_im_produits`
--
ALTER TABLE `tb_im_produits`
  ADD PRIMARY KEY (`intrant_id`);

--
-- Index pour la table `tb_im_shops`
--
ALTER TABLE `tb_im_shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- Index pour la table `tb_im_stockshops`
--
ALTER TABLE `tb_im_stockshops`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `produit_sid` (`produit_sid`),
  ADD KEY `shop_sid` (`shop_sid`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_cons_ordonances`
--
ALTER TABLE `tb_cons_ordonances`
  MODIFY `ordon_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_cons_prescriptions`
--
ALTER TABLE `tb_cons_prescriptions`
  MODIFY `prescrip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_im_categories`
--
ALTER TABLE `tb_im_categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tb_im_demandes`
--
ALTER TABLE `tb_im_demandes`
  MODIFY `demande_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tb_im_entrees`
--
ALTER TABLE `tb_im_entrees`
  MODIFY `entree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_im_fournisseurs`
--
ALTER TABLE `tb_im_fournisseurs`
  MODIFY `fss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_im_produits`
--
ALTER TABLE `tb_im_produits`
  MODIFY `intrant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tb_im_shops`
--
ALTER TABLE `tb_im_shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_im_stockshops`
--
ALTER TABLE `tb_im_stockshops`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tb_cons_prescriptions`
--
ALTER TABLE `tb_cons_prescriptions`
  ADD CONSTRAINT `tb_cons_prescriptions_ibfk_1` FOREIGN KEY (`numero_ordonance`) REFERENCES `tb_cons_ordonances` (`ordon_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_cons_prescriptions_ibfk_2` FOREIGN KEY (`produit_prescrit`) REFERENCES `tb_im_produits` (`intrant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_im_demandes`
--
ALTER TABLE `tb_im_demandes`
  ADD CONSTRAINT `tb_im_demandes_ibfk_1` FOREIGN KEY (`shop_sid`) REFERENCES `tb_im_shops` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_im_demandes_ibfk_2` FOREIGN KEY (`produit_sid`) REFERENCES `tb_im_produits` (`intrant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_im_entrees`
--
ALTER TABLE `tb_im_entrees`
  ADD CONSTRAINT `tb_im_entrees_ibfk_1` FOREIGN KEY (`produit_sid`) REFERENCES `tb_im_produits` (`intrant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_im_entrees_ibfk_2` FOREIGN KEY (`fss_sid`) REFERENCES `tb_im_fournisseurs` (`fss_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_im_stockshops`
--
ALTER TABLE `tb_im_stockshops`
  ADD CONSTRAINT `tb_im_stockshops_ibfk_1` FOREIGN KEY (`produit_sid`) REFERENCES `tb_im_produits` (`intrant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_im_stockshops_ibfk_2` FOREIGN KEY (`shop_sid`) REFERENCES `tb_im_shops` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
