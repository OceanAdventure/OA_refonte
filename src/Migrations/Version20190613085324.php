<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190613085324 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kite_camp (id INT AUTO_INCREMENT NOT NULL, intitule VARCHAR(255) NOT NULL, grand_titre LONGTEXT NOT NULL, grand_titre_en LONGTEXT DEFAULT NULL, description LONGTEXT NOT NULL, description_en LONGTEXT DEFAULT NULL, image VARCHAR(255) NOT NULL, galerie LONGTEXT NOT NULL, image2 VARCHAR(255) DEFAULT NULL, ss_titre2 LONGTEXT NOT NULL, ss_titre2en LONGTEXT DEFAULT NULL, ss_text2 LONGTEXT NOT NULL, ss_text2en LONGTEXT DEFAULT NULL, image3 VARCHAR(255) DEFAULT NULL, ss_titre3 LONGTEXT NOT NULL, ss_titre3en LONGTEXT DEFAULT NULL, galerie2 LONGTEXT NOT NULL, text_info LONGTEXT NOT NULL, text_info_en LONGTEXT DEFAULT NULL, enumeration LONGTEXT NOT NULL, enumeration_en LONGTEXT DEFAULT NULL, guide_pratique_destination LONGTEXT NOT NULL, guide_pratique_destination_en LONGTEXT DEFAULT NULL, text LONGTEXT NOT NULL, text_en LONGTEXT DEFAULT NULL, google_map VARCHAR(1000) NOT NULL, niveau_text LONGTEXT NOT NULL, niveau_text_en LONGTEXT DEFAULT NULL, location_text LONGTEXT NOT NULL, location_text_en LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE kite_camp');
    }
}
