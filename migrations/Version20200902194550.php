<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200902194550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bon_livraison (id INT AUTO_INCREMENT NOT NULL, facture_id INT DEFAULT NULL, INDEX facture_bon_livraison (facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depense (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, budget DOUBLE PRECISION NOT NULL, deplacement VARCHAR(50) NOT NULL, prix_log VARCHAR(50) NOT NULL, prix_mat VARCHAR(50) NOT NULL, type VARCHAR(50) NOT NULL, date DATE NOT NULL, status VARCHAR(50) NOT NULL, INDEX projet_idd (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE division (id INT AUTO_INCREMENT NOT NULL, chef_id INT DEFAULT NULL, service_id INT DEFAULT NULL, label VARCHAR(50) NOT NULL, nbr_employe INT NOT NULL, description VARCHAR(255) NOT NULL, INDEX service_id (service_id), INDEX chef_id (chef_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe (id INT AUTO_INCREMENT NOT NULL, cv INT DEFAULT NULL, division_id INT DEFAULT NULL, service_id INT DEFAULT NULL, role_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, email VARCHAR(256) NOT NULL, cnss VARCHAR(256) NOT NULL, adresse VARCHAR(256) NOT NULL, phone VARCHAR(10) NOT NULL, statue VARCHAR(50) NOT NULL, genre VARCHAR(10) NOT NULL, rib VARCHAR(50) NOT NULL, banque VARCHAR(50) NOT NULL, cin VARCHAR(50) NOT NULL, date_naissance DATE NOT NULL, profile VARCHAR(50) NOT NULL, date_emploi DATE NOT NULL, salaire DOUBLE PRECISION NOT NULL, type_contrat VARCHAR(50) NOT NULL, etat VARCHAR(50) NOT NULL, INDEX division_id (division_id), INDEX cv (cv), INDEX service_id (service_id), INDEX role_id (role_id), UNIQUE INDEX employe_id (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee (id INT AUTO_INCREMENT NOT NULL, id_service_id INT DEFAULT NULL, id_division_id INT DEFAULT NULL, role_id INT DEFAULT NULL, nom_emp VARCHAR(255) NOT NULL, prenom_emp VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, cnss VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone INT NOT NULL, status VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, rib INT NOT NULL, nom_bank VARCHAR(255) NOT NULL, cin VARCHAR(255) NOT NULL, datenais DATE NOT NULL, profile VARCHAR(255) NOT NULL, salaire DOUBLE PRECISION NOT NULL, date_emp DATE NOT NULL, etat_emp VARCHAR(255) NOT NULL, prime DOUBLE PRECISION NOT NULL, credit DOUBLE PRECISION NOT NULL, INDEX IDX_5D9F75A1D60322AC (role_id), INDEX IDX_5D9F75A148D62931 (id_service_id), INDEX IDX_5D9F75A159975F7E (id_division_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, facture VARBINARY(255) NOT NULL, INDEX projet_facture (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fichier (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(256) NOT NULL, description VARCHAR(256) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phase (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, description VARCHAR(100) NOT NULL, INDEX projet_id (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, budget DOUBLE PRECISION NOT NULL, montant_paye DOUBLE PRECISION NOT NULL, date_creation DATE NOT NULL, type VARCHAR(50) NOT NULL, proprietaire VARCHAR(50) NOT NULL, description TEXT NOT NULL, etat VARCHAR(50) NOT NULL, UNIQUE INDEX id (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(50) NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, chef_id INT DEFAULT NULL, division_id INT DEFAULT NULL, label VARCHAR(50) NOT NULL, description VARCHAR(100) NOT NULL, INDEX chef_service (chef_id), INDEX division_id (division_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tache (id INT AUTO_INCREMENT NOT NULL, phase_id INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, description TEXT NOT NULL, INDEX phase_id (phase_id), UNIQUE INDEX id (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bon_livraison ADD CONSTRAINT FK_31A531A47F2DEE08 FOREIGN KEY (facture_id) REFERENCES bon_livraison (id)');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT FK_34059757C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE division ADD CONSTRAINT FK_10174714150A48F1 FOREIGN KEY (chef_id) REFERENCES employe (id)');
        $this->addSql('ALTER TABLE division ADD CONSTRAINT FK_10174714ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9B66FFE92 FOREIGN KEY (cv) REFERENCES fichier (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B941859289 FOREIGN KEY (division_id) REFERENCES division (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A148D62931 FOREIGN KEY (id_service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A159975F7E FOREIGN KEY (id_division_id) REFERENCES division (id)');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A1D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE phase ADD CONSTRAINT FK_B1BDD6CBC18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2150A48F1 FOREIGN KEY (chef_id) REFERENCES employe (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD241859289 FOREIGN KEY (division_id) REFERENCES division (id)');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_9387207599091188 FOREIGN KEY (phase_id) REFERENCES tache (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bon_livraison DROP FOREIGN KEY FK_31A531A47F2DEE08');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B941859289');
        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A159975F7E');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD241859289');
        $this->addSql('ALTER TABLE division DROP FOREIGN KEY FK_10174714150A48F1');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2150A48F1');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B9B66FFE92');
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY FK_34059757C18272');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE866410C18272');
        $this->addSql('ALTER TABLE phase DROP FOREIGN KEY FK_B1BDD6CBC18272');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B9D60322AC');
        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A1D60322AC');
        $this->addSql('ALTER TABLE division DROP FOREIGN KEY FK_10174714ED5CA9E6');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B9ED5CA9E6');
        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A148D62931');
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_9387207599091188');
        $this->addSql('DROP TABLE bon_livraison');
        $this->addSql('DROP TABLE depense');
        $this->addSql('DROP TABLE division');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fichier');
        $this->addSql('DROP TABLE phase');
        $this->addSql('DROP TABLE projet');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE tache');
    }
}
