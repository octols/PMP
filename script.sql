DROP TABLE IF EXISTS Trajet CASCADE;
DROP TABLE IF EXISTS Location CASCADE;
DROP TABLE IF EXISTS Reservation CASCADE;
DROP TABLE IF EXISTS Service CASCADE;
DROP TABLE IF EXISTS Velo CASCADE;
DROP TABLE IF EXISTS Voiture CASCADE;
DROP TABLE IF EXISTS Vehicule CASCADE;
DROP TABLE IF EXISTS Local CASCADE;
DROP TABLE IF EXISTS Ressource CASCADE;
DROP TABLE IF EXISTS Messagerie CASCADE;
DROP TABLE IF EXISTS Utilisateur CASCADE;
DROP TABLE IF EXISTS Login CASCADE;

CREATE TABLE Login
(
    idLogin int AUTO_INCREMENT PRIMARY KEY,
    mail text CHECK( mail='%@%.%' ),
    mdp text CHECK( length(mdp)>=4 ),
    type varchar(30) NOT NULL
);

CREATE TABLE Utilisateur
(
    idUser int AUTO_INCREMENT PRIMARY KEY,
    idLogin int NOT NULL,
    nom varchar(50) NOT NULL,
    prenom varchar(50) NOT NULL,
    note int CHECK(note>=0 AND note<=5),
    argent double UNSIGNED,
    FOREIGN KEY (idLogin) REFERENCES Login(idLogin),
    UNIQUE(nom,prenom)
);

CREATE TABLE Service
(
    idService int AUTO_INCREMENT PRIMARY KEY,
    idUser int NOT NULL,
    FOREIGN KEY (idUser) REFERENCES Utilisateur(idUser)
);

CREATE TABLE Trajet
(
    idTrajet int AUTO_INCREMENT PRIMARY KEY,
    idService int NOT NULL,
    idUser int NOT NULL,
    villeD varchar(30) NOT NULL,
    villeA varchar(30) NOT NULL,
    heureD time NOT NULL,
    heureA time NOT NULL,
    tarif double UNSIGNED,
    FOREIGN KEY (idService) REFERENCES Service(idService),
    FOREIGN KEY (idUser) REFERENCES Utilisateur(idUser)
);

CREATE TABLE Location
(
    idLocation int AUTO_INCREMENT PRIMARY KEY,
    idService int NOT NULL,
    idUser int NOT NULL,
    dateD date NOT NULL,
    dateF date NOT NULL,
    adresse text NOT NULL,
    tarif double UNSIGNED,
    FOREIGN KEY (idService) REFERENCES Service(idService),
    FOREIGN KEY (idUser) REFERENCES Utilisateur(idUser)
);

CREATE TABLE Reservation
(
    idReservation int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idService int NOT NULL,
    dateReserv date NOT NULL,
    FOREIGN KEY (idService) REFERENCES Service(idService)
);

CREATE TABLE Recherche
(
    idRecherche int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idUser int NOT NULL,
    FOREIGN KEY (idUser) REFERENCES Utilisateur(idUser)
);

CREATE TABLE Messagerie
(
    idMessage int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idUser1 int NOT NULL,
    idUser2 int NOT NULL,
    msg text NOT NULL,
    FOREIGN KEY (idUser1) REFERENCES Utilisateur(idUser),
    FOREIGN KEY (idUser2) REFERENCES Utilisateur(idUser)
);

CREATE TABLE Ressource
(
    idRessource int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idService int NOT NULL,
    type varchar(30) NOT NULL,
    FOREIGN KEY (idService) REFERENCES Service(idService)
);

CREATE TABLE Local
(
    idLocal int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idRessource int NOT NULL,
    FOREIGN KEY (idRessource) REFERENCES Ressource(idRessource)
);

CREATE TABLE Vehicule
(
    idVehicule int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idRessource int NOT NULL,
    FOREIGN KEY (idRessource) REFERENCES Ressource(idRessource)
);

CREATE TABLE Voiture
(
    idVoiture int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idVehicule int NOT NULL,
    nbPlaces int UNSIGNED NOT NULL,
    nbBagages int UNSIGNED,
    FOREIGN KEY (idVehicule) REFERENCES Vehicule(idVehicule)
);

CREATE TABLE Velo
(
    idVelo int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    desription text,
    idVehicule int NOT NULL,
    FOREIGN KEY (idVehicule) REFERENCES Vehicule(idVehicule)
);
