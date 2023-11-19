CREATE TABLE `schedules` (
  `id` integer PRIMARY KEY,
  `doctor_id` int,
  `shift` ENUM ('day', 'afternoon'),
  `hidden` boolean
);

CREATE TABLE `users` (
  `id` integer PRIMARY KEY,
  `username` varchar(255),
  `role` ENUM ('admin', 'viewer'),
  `created_at` timestamp,
  `hidden` boolean
);

CREATE TABLE `locations` (
  `id` integer PRIMARY KEY,
  `floor` ENUM ('0', '1', '2', '3', '4'),
  `room` int,
  `created_at` timestamp,
  `hidden` boolean
);

CREATE TABLE `doctors` (
  `id` integer PRIMARY KEY,
  `name` varchar(255),
  `surname` varchar(255),
  `specialty_id` integer,
  `location_id` integer,
  `created_at` timestamp,
  `hidden` boolean
);

CREATE TABLE `specialties` (
  `id` integer PRIMARY KEY,
  `type_specialty` varchar(255),
  `created_at` timestamp,
  `hidden` boolean
);

ALTER TABLE `schedules` ADD FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

ALTER TABLE `doctors` ADD FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`id`);

ALTER TABLE `doctors` ADD FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`);
