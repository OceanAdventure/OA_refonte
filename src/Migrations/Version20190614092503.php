<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190614092503 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE surf_camp_fuert ADD grand_titre_es VARCHAR(255) DEFAULT NULL, ADD grand_titre_it VARCHAR(255) DEFAULT NULL, ADD titre_accroche_es LONGTEXT DEFAULT NULL, ADD titre_accroche_it LONGTEXT DEFAULT NULL, ADD paragraphe1es LONGTEXT DEFAULT NULL, ADD paragraphe1it LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE surf_camp_fuert DROP grand_titre_es, DROP grand_titre_it, DROP titre_accroche_es, DROP titre_accroche_it, DROP paragraphe1es, DROP paragraphe1it');
    }
}
