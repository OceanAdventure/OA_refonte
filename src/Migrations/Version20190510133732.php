<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190510133732 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(100) NOT NULL, nom VARCHAR(100) NOT NULL, mail VARCHAR(255) NOT NULL, niveau VARCHAR(255) NOT NULL, telephone VARCHAR(15) NOT NULL, type_chambre VARCHAR(255) NOT NULL, type_activite VARCHAR(255) NOT NULL, date_arr DATETIME DEFAULT NULL, nuitee INT DEFAULT NULL, nb_personne INT DEFAULT NULL, message VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(255) DEFAULT NULL, titre_principal VARCHAR(255) NOT NULL, titre_secondaire VARCHAR(255) NOT NULL, condition_reglement VARCHAR(255) NOT NULL, prix INT NOT NULL, nb_cours INT NOT NULL, descrition VARCHAR(500) NOT NULL, destination VARCHAR(255) NOT NULL, sport VARCHAR(255) NOT NULL, particulier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE produit');
    }
}
