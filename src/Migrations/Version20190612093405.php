<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190612093405 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hebergement CHANGE grand_titre_en grand_titre_en LONGTEXT DEFAULT NULL, CHANGE description_ss_titre_en description_ss_titre_en LONGTEXT DEFAULT NULL, CHANGE ss_text_en ss_text_en LONGTEXT DEFAULT NULL, CHANGE type_de_chambre_en type_de_chambre_en LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE surf_camp CHANGE titre1en titre1en LONGTEXT DEFAULT NULL, CHANGE mini_description_en mini_description_en LONGTEXT DEFAULT NULL, CHANGE sstitre2en sstitre2en LONGTEXT DEFAULT NULL, CHANGE sstext2en sstext2en LONGTEXT DEFAULT NULL, CHANGE sstitre3en sstitre3en LONGTEXT DEFAULT NULL, CHANGE sstext3en sstext3en LONGTEXT DEFAULT NULL, CHANGE enumeration_en enumeration_en LONGTEXT DEFAULT NULL, CHANGE guide_pratique_destination_en guide_pratique_destination_en LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE surf_camp_fuert CHANGE grand_titre_en grand_titre_en VARCHAR(255) DEFAULT NULL, CHANGE titre_accroche_en titre_accroche_en LONGTEXT DEFAULT NULL, CHANGE paragraphe1en paragraphe1en LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hebergement CHANGE grand_titre_en grand_titre_en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE description_ss_titre_en description_ss_titre_en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE ss_text_en ss_text_en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE type_de_chambre_en type_de_chambre_en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE surf_camp CHANGE titre1en titre1en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE mini_description_en mini_description_en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE sstitre2en sstitre2en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE sstext2en sstext2en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE sstitre3en sstitre3en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE sstext3en sstext3en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE enumeration_en enumeration_en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE guide_pratique_destination_en guide_pratique_destination_en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE surf_camp_fuert CHANGE grand_titre_en grand_titre_en VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE titre_accroche_en titre_accroche_en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE paragraphe1en paragraphe1en LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
