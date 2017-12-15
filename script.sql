DROP TABLE IF EXISTS Service CASCADE;
DROP TABLE IF EXISTS Utilisateur CASCADE;
DROP TABLE IF EXISTS Login CASCADE;
DROP TABLE IF EXISTS Trajet CASCADE;
DROP TABLE IF EXISTS Location CASCADE;
DROP TABLE IF EXISTS Reservation CASCADE;

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
    heureD date NOT NULL,
    heureA date NOT NULL,
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
    comm double NOT NULL,
    FOREIGN KEY (idService) REFERENCES Service(idService)
);

