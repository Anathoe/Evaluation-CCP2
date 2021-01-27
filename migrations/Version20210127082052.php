<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127082052 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE women ADD title_shop VARCHAR(255) NOT NULL, ADD subtitle_shop LONGTEXT NOT NULL, ADD title_ex VARCHAR(255) NOT NULL, ADD text_ex LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE women_front DROP titre_ex, DROP text_ex, DROP denomination, DROP prix');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE women DROP title_shop, DROP subtitle_shop, DROP title_ex, DROP text_ex');
        $this->addSql('ALTER TABLE women_front ADD titre_ex VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD text_ex LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD denomination VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD prix INT NOT NULL');
    }
}
