<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190614093301 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE kite_camp ADD grand_titre_es LONGTEXT DEFAULT NULL, ADD grand_titre_it LONGTEXT DEFAULT NULL, ADD description_es LONGTEXT DEFAULT NULL, ADD description_it LONGTEXT DEFAULT NULL, ADD ss_titre2es LONGTEXT DEFAULT NULL, ADD ss_titre2it LONGTEXT DEFAULT NULL, ADD ss_text2es LONGTEXT DEFAULT NULL, ADD ss_text2it LONGTEXT DEFAULT NULL, ADD ss_titre3es LONGTEXT DEFAULT NULL, ADD ss_titre3it LONGTEXT DEFAULT NULL, ADD text_info_es LONGTEXT DEFAULT NULL, ADD text_info_it LONGTEXT DEFAULT NULL, ADD enumeration_es LONGTEXT DEFAULT NULL, ADD enumeration_it LONGTEXT DEFAULT NULL, ADD guide_pratique_destination_es LONGTEXT DEFAULT NULL, ADD guide_pratique_destination_it LONGTEXT DEFAULT NULL, ADD text_es LONGTEXT DEFAULT NULL, ADD text_it LONGTEXT DEFAULT NULL, ADD niveau_text_es LONGTEXT DEFAULT NULL, ADD niveau_text_it LONGTEXT DEFAULT NULL, ADD location_text_es LONGTEXT DEFAULT NULL, ADD location_text_it LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE kite_camp DROP grand_titre_es, DROP grand_titre_it, DROP description_es, DROP description_it, DROP ss_titre2es, DROP ss_titre2it, DROP ss_text2es, DROP ss_text2it, DROP ss_titre3es, DROP ss_titre3it, DROP text_info_es, DROP text_info_it, DROP enumeration_es, DROP enumeration_it, DROP guide_pratique_destination_es, DROP guide_pratique_destination_it, DROP text_es, DROP text_it, DROP niveau_text_es, DROP niveau_text_it, DROP location_text_es, DROP location_text_it');
    }
}
