
INSERT INTO `auteur` (`id`, `nom`) VALUES
(1, 'J.K. Rowling'),
(2, 'George R.R. Martin'),
(3, 'J.R.R. Tolkien'),
(4, 'Stephen King'),
(5, 'Agatha Christie');


INSERT INTO `emprunteur` (`id`, `nom`) VALUES
(1, 'Alexandre'),
(2, 'Marie'),
(3, 'Pierre'),
(4, 'Julie'),
(5, 'Thomas');


INSERT INTO `livre` (`id`, `auteur_id`, `titre`) VALUES
(1, 1, 'Harry Potter à l\'école des sorciers'),
(2, 2, 'Le Trône de fer'),
(3, 3, 'Le Seigneur des anneaux'),
(4, 4, 'Shining'),
(5, 5, 'Le Crime de l\'Orient-Express');