<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210331092944 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, uuid VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_232B318CD17F50A6 (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_words (game_id INT NOT NULL, words_id INT NOT NULL, INDEX IDX_434E6703E48FD905 (game_id), INDEX IDX_434E6703749B15FB (words_id), PRIMARY KEY(game_id, words_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, shorthand VARCHAR(4) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, color VARCHAR(6) NOT NULL, image LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE words (id INT AUTO_INCREMENT NOT NULL, language_id INT NOT NULL, text VARCHAR(255) NOT NULL, INDEX IDX_717D1E8C82F1BAF4 (language_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game_words ADD CONSTRAINT FK_434E6703E48FD905 FOREIGN KEY (game_id) REFERENCES game (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_words ADD CONSTRAINT FK_434E6703749B15FB FOREIGN KEY (words_id) REFERENCES words (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE words ADD CONSTRAINT FK_717D1E8C82F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game_words DROP FOREIGN KEY FK_434E6703E48FD905');
        $this->addSql('ALTER TABLE words DROP FOREIGN KEY FK_717D1E8C82F1BAF4');
        $this->addSql('ALTER TABLE game_words DROP FOREIGN KEY FK_434E6703749B15FB');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE game_words');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE words');
    }
}
