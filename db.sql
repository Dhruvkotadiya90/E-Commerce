CREATE TABLE IF NOT EXISTS `users` (
  `username` VARCHAR(10) PRIMARY KEY NOT NULL,
  `password` TEXT(12) NOT NULL,
  `email` TEXT(15) NOT NULL UNIQUE,
  INDEX idx_username (username)
);
