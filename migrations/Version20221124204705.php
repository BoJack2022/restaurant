<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221124204705 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredient DROP idingredient');
        $this->addSql('ALTER TABLE menu DROP idmenu');
        $this->addSql('ALTER TABLE plat DROP idplat');
        $this->addSql('ALTER TABLE reservation DROP idreservation');
        $this->addSql('ALTER TABLE restaurant DROP coderest');
        $this->addSql('ALTER TABLE user ADD roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD idreservation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE restaurant ADD coderest VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE ingredient ADD idingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE plat ADD idplat VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE menu ADD idmenu VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user DROP roles');
    }
}
