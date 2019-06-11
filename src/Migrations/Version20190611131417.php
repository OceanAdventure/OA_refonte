<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190611131417 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE surf_camp ADD titre1en LONGTEXT NOT NULL, ADD mini_description_en LONGTEXT NOT NULL, ADD sstitre2en LONGTEXT NOT NULL, ADD sstext2en LONGTEXT NOT NULL, ADD sstitre3en LONGTEXT NOT NULL, ADD sstext3en LONGTEXT NOT NULL, ADD prestation_en LONGTEXT DEFAULT NULL, ADD enumeration_en LONGTEXT NOT NULL, ADD guide_pratique_destination_en LONGTEXT NOT NULL, ADD texte_info_en LONGTEXT DEFAULT NULL, ADD hors_saison_text_en LONGTEXT DEFAULT NULL, ADD saison_text_en LONGTEXT DEFAULT NULL, DROP locale');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE surf_camp ADD locale VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, DROP titre1en, DROP mini_description_en, DROP sstitre2en, DROP sstext2en, DROP sstitre3en, DROP sstext3en, DROP prestation_en, DROP enumeration_en, DROP guide_pratique_destination_en, DROP texte_info_en, DROP hors_saison_text_en, DROP saison_text_en');
    }
}
