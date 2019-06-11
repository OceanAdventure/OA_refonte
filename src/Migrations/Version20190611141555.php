<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190611141555 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activite ADD titre_en LONGTEXT NOT NULL, ADD description_en LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE hebergement ADD grand_titre_en LONGTEXT NOT NULL, ADD description_ss_titre_en LONGTEXT NOT NULL, ADD ss_text_en LONGTEXT NOT NULL, ADD type_de_chambre_en LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD titre_principal_en VARCHAR(255) NOT NULL, ADD titre_secondaire_en VARCHAR(255) NOT NULL, ADD condition_reglement_en VARCHAR(255) NOT NULL, ADD descrition_en VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE surf_camp_fuert ADD grand_titre_en VARCHAR(255) NOT NULL, ADD titre_accroche_en LONGTEXT NOT NULL, ADD paragraphe1en LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activite DROP titre_en, DROP description_en');
        $this->addSql('ALTER TABLE hebergement DROP grand_titre_en, DROP description_ss_titre_en, DROP ss_text_en, DROP type_de_chambre_en');
        $this->addSql('ALTER TABLE produit DROP titre_principal_en, DROP titre_secondaire_en, DROP condition_reglement_en, DROP descrition_en');
        $this->addSql('ALTER TABLE surf_camp_fuert DROP grand_titre_en, DROP titre_accroche_en, DROP paragraphe1en');
    }
}
