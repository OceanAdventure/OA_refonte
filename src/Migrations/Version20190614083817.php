<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190614083817 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hebergement ADD grand_titre_es LONGTEXT DEFAULT NULL, ADD grand_titre_it LONGTEXT DEFAULT NULL, ADD description_ss_titre_es LONGTEXT DEFAULT NULL, ADD description_ss_titre_it LONGTEXT DEFAULT NULL, ADD type_de_chambre_es LONGTEXT DEFAULT NULL, ADD type_de_chambre_it LONGTEXT DEFAULT NULL, ADD ss_text_es LONGTEXT DEFAULT NULL, ADD ss_text_it LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hebergement DROP grand_titre_es, DROP grand_titre_it, DROP description_ss_titre_es, DROP description_ss_titre_it, DROP type_de_chambre_es, DROP type_de_chambre_it, DROP ss_text_es, DROP ss_text_it');
    }
}
