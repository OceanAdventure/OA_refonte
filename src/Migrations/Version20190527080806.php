<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190527080806 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE surf_camp CHANGE titre1 titre1 TINYTEXT NOT NULL, CHANGE prestation prestation TINYTEXT DEFAULT NULL, CHANGE enumeration enumeration TINYTEXT DEFAULT NULL, CHANGE guide_pratique_destination guide_pratique_destination TINYTEXT NOT NULL, CHANGE google_map google_map TINYTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE surf_camp CHANGE titre1 titre1 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prestation prestation VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE enumeration enumeration VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE guide_pratique_destination guide_pratique_destination VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE google_map google_map VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
