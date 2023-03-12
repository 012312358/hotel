<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215150207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE suite ADD relation_id INT DEFAULT NULL, ADD suite VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE suite ADD CONSTRAINT FK_153CE4263256915B FOREIGN KEY (relation_id) REFERENCES etablissement (id)');
        $this->addSql('CREATE INDEX IDX_153CE4263256915B ON suite (relation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE suite DROP FOREIGN KEY FK_153CE4263256915B');
        $this->addSql('DROP INDEX IDX_153CE4263256915B ON suite');
        $this->addSql('ALTER TABLE suite DROP relation_id, DROP suite');
    }
}
