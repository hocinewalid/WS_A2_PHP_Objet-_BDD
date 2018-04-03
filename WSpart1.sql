
/*Lister l’ensemble des produits disponibles */

SELECT nom FROM `produits` WHERE 1

/* Lister l’ensemble des produits en solde */
SELECT * FROM `produits` WHERE solde = 1

/* Ajouter un nouveau produit */

INSERT INTO `produits` (`id`, `nom`, `prix`, `description`, `solde`, `urlImage`) VALUES ('7', 'nebuleuse', '60', 'chausure lambda', '1', 'Produits/p7.jpg')

/* Supprimer un produit */

DELETE FROM `produits` WHERE `produits`.`id` = 4

/* Modiﬁer les caractéristiques d’un produit existant (par exemple mettre un produit en solde)  */


UPDATE `produits` SET `solde` = '1' WHERE `produits`.`id` = 4 

/* Modiﬁer l’ensemble des prix des produits en soldes en appliquant une remise de 30%  */

UPDATE `produits` SET `prix` = prix * .30


