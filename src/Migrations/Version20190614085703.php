<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190614085703 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE surf_camp ADD titre1es LONGTEXT DEFAULT NULL, ADD titre1it LONGTEXT DEFAULT NULL, ADD mini_description_es LONGTEXT DEFAULT NULL, ADD mini_description_it LONGTEXT DEFAULT NULL, ADD sstitre2es LONGTEXT DEFAULT NULL, ADD sstitre2it LONGTEXT DEFAULT NULL, ADD sstext2es LONGTEXT DEFAULT NULL, ADD sstext2it LONGTEXT DEFAULT NULL, ADD sstitre3es LONGTEXT DEFAULT NULL, ADD sstitre3it LONGTEXT DEFAULT NULL, ADD sstext3es LONGTEXT DEFAULT NULL, ADD sstext3it LONGTEXT DEFAULT NULL, ADD prestation_es LONGTEXT DEFAULT NULL, ADD prestation_it LONGTEXT DEFAULT NULL, ADD enumeration_es LONGTEXT DEFAULT NULL, ADD enumeration_it LONGTEXT DEFAULT NULL, ADD guide_pratique_destination_es LONGTEXT DEFAULT NULL, ADD guide_pratique_destination_it LONGTEXT DEFAULT NULL, ADD texte_info_es LONGTEXT DEFAULT NULL, ADD texte_info_it LONGTEXT DEFAULT NULL, ADD hors_saison_text_es LONGTEXT DEFAULT NULL, ADD hors_saison_text_it LONGTEXT DEFAULT NULL, ADD saison_text_es LONGTEXT DEFAULT NULL, ADD saison_text_it LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE surf_camp DROP titre1es, DROP titre1it, DROP mini_description_es, DROP mini_description_it, DROP sstitre2es, DROP sstitre2it, DROP sstext2es, DROP sstext2it, DROP sstitre3es, DROP sstitre3it, DROP sstext3es, DROP sstext3it, DROP prestation_es, DROP prestation_it, DROP enumeration_es, DROP enumeration_it, DROP guide_pratique_destination_es, DROP guide_pratique_destination_it, DROP texte_info_es, DROP texte_info_it, DROP hors_saison_text_es, DROP hors_saison_text_it, DROP saison_text_es, DROP saison_text_it');
    }
}
