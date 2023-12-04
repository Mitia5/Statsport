create database achat;

use achat;

create table achat(
    idAchat serial primary key,
    produit text,
    Dates date,
    qtt int
);

create table categorie(
    idCategorie serial primary key,
    NomCategorie varchar(50)
);

create table produit(
    idProduit serial primary key,
    idCategorie int,
    prixUnitaire decimal(15,2)
);
create database achat;