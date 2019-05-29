<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190529115718 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hebergement_type_hebergement DROP FOREIGN KEY FK_5B5E9ED0757826F2');
        $this->addSql('DROP TABLE hebergement_type_hebergement');
        $this->addSql('DROP TABLE type_hebergement');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE hebergement_type_hebergement (hebergement_id INT NOT NULL, type_hebergement_id INT NOT NULL, INDEX IDX_5B5E9ED023BB0F66 (hebergement_id), INDEX IDX_5B5E9ED0757826F2 (type_hebergement_id), PRIMARY KEY(hebergement_id, type_hebergement_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_hebergement (id INT AUTO_INCREMENT NOT NULL, type_chambre LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, galerie LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE hebergement_type_hebergement ADD CONSTRAINT FK_5B5E9ED023BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hebergement_type_hebergement ADD CONSTRAINT FK_5B5E9ED0757826F2 FOREIGN KEY (type_hebergement_id) REFERENCES type_hebergement (id) ON DELETE CASCADE');
    }
}
