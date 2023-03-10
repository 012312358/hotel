<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230216090223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE suite DROP FOREIGN KEY FK_153CE426FF631228');
        $this->addSql('DROP INDEX IDX_153CE426FF631228 ON suite');
        $this->addSql('ALTER TABLE suite CHANGE etablissement_id hote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE suite ADD CONSTRAINT FK_153CE426453D3D6F FOREIGN KEY (hote_id) REFERENCES etablissement (id)');
        $this->addSql('CREATE INDEX IDX_153CE426453D3D6F ON suite (hote_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE suite DROP FOREIGN KEY FK_153CE426453D3D6F');
        $this->addSql('DROP INDEX IDX_153CE426453D3D6F ON suite');
        $this->addSql('ALTER TABLE suite CHANGE hote_id etablissement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE suite ADD CONSTRAINT FK_153CE426FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
        $this->addSql('CREATE INDEX IDX_153CE426FF631228 ON suite (etablissement_id)');
    }
}
