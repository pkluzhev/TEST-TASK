CREATE TABLE 
    clients_info (
        `client_id` 	INT NOT NULL AUTO_INCREMENT,
        `company_name` 	VARCHAR(255) NOT NULL,
        `phone` 	VARCHAR(255) NOT NULL,
        `email` 	    VARCHAR(255) NOT NULL,
        `company_info`	TEXT NOT NULL,
        PRIMARY KEY (`client_id`)
    )
ENGINE = InnoDB
CHARACTER SET = utf8mb4
COLLATE utf8mb4_unicode_ci;