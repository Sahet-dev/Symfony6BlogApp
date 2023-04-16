<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230412174127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AAA03E456');
        $this->addSql('DROP INDEX IDX_5F9E962AAA03E456 ON comments');
        $this->addSql('ALTER TABLE comments DROP created_at, DROP likes, CHANGE owner_comment_id owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5F9E962A7E3C61F9 ON comments (owner_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A7E3C61F9');
        $this->addSql('DROP INDEX IDX_5F9E962A7E3C61F9 ON comments');
        $this->addSql('ALTER TABLE comments ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD likes INT DEFAULT NULL, CHANGE owner_id owner_comment_id INT NOT NULL');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AAA03E456 FOREIGN KEY (owner_comment_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_5F9E962AAA03E456 ON comments (owner_comment_id)');
    }
}
