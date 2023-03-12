<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230216085801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE suite DROP FOREIGN KEY FK_153CE4263256915B');
        $this->addSql('DROP INDEX IDX_153CE4263256915B ON suite');
        $this->addSql('ALTER TABLE suite CHANGE relation_id etablissement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE suite ADD CONSTRAINT FK_153CE426FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
        $this->addSql('CREATE INDEX IDX_153CE426FF631228 ON suite (etablissement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE suite DROP FOREIGN KEY FK_153CE426FF631228');
        $this->addSql('DROP INDEX IDX_153CE426FF631228 ON suite');
        $this->addSql('ALTER TABLE suite CHANGE etablissement_id relation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE suite ADD CONSTRAINT FK_153CE4263256915B FOREIGN KEY (relation_id) REFERENCES etablissement (id)');
        $this->addSql('CREATE INDEX IDX_153CE4263256915B ON suite (relation_id)');
    }
}
