<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190520093021 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE surf_camp (id INT AUTO_INCREMENT NOT NULL, destination VARCHAR(255) NOT NULL, titre1 VARCHAR(255) NOT NULL, mini_description LONGTEXT NOT NULL, image1 VARCHAR(255) NOT NULL, galerie VARCHAR(255) NOT NULL, image2 VARCHAR(255) NOT NULL, sstitre2 LONGTEXT NOT NULL, sstext2 LONGTEXT NOT NULL, image3 VARCHAR(255) NOT NULL, sstitre3 LONGTEXT NOT NULL, sstext3 LONGTEXT NOT NULL, galerie2 VARCHAR(255) NOT NULL, prestation VARCHAR(255) DEFAULT NULL, enumeration VARCHAR(255) DEFAULT NULL, guide_pratique_destination VARCHAR(255) NOT NULL, texte_info LONGTEXT DEFAULT NULL, google_map VARCHAR(255) DEFAULT NULL, tarif VARCHAR(255) DEFAULT NULL, hors_saison_text LONGTEXT DEFAULT NULL, saison_text LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE surf_camp_fuert DROP image1, DROP image2, DROP sstitre1, DROP sstitre2, DROP contenu1, DROP contenu2, DROP galerie_image, CHANGE paragraphe1 paragraphe1 VARCHAR(1000) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE surf_camp');
        $this->addSql('ALTER TABLE surf_camp_fuert ADD image1 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD image2 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD sstitre1 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD sstitre2 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD contenu1 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD contenu2 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD galerie_image VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE paragraphe1 paragraphe1 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
