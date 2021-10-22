CREATE TABLE utilisateurs
(
    `id`             INT          NOT NULL AUTO_INCREMENT,
    `nom`            VARCHAR(255) NOT NULL,
    `email`          VARCHAR(255) NOT NULL UNIQUE,
    `password`       VARCHAR(255) NOT NULL,
    `salt`           VARCHAR(255) NOT NULL,
    `date_naissance` DATE         NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE messages
(
    `id`      INT           NOT NULL AUTO_INCREMENT,
    `title`   VARCHAR(255)  NOT NULL,
    `message` VARCHAR(1000) NOT NULL,
    `date`    DATE          NOT NULL,
    `read`    BIT           NOT NULL,
    `user_id` INT,
    PRIMARY KEY (`id`),
    FOREIGN KEY (user_id) REFERENCES utilisateurs (id)
) ENGINE = InnoDB;
