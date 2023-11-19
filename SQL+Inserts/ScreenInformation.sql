-- Insertar especialidades adicionales
INSERT INTO `specialties` (`id`, `type_specialty`, `created_at`, `hidden`)
VALUES 
(2, 'Neurología', NOW(), false),
(3, 'Pediatría', NOW(), false),
(4, 'Ortopedia', NOW(), false),
(5, 'Dermatología', NOW(), false),
(6, 'Gastroenterología', NOW(), false);

-- Insertar ubicaciones adicionales
INSERT INTO `locations` (`id`, `floor`, `room`, `created_at`, `hidden`)
VALUES 
(2, '1', 102, NOW(), false),
(3, '2', 201, NOW(), false),
(4, '2', 202, NOW(), false),
(5, '3', 301, NOW(), false),
(6, '3', 302, NOW(), false);

-- Insertar doctores adicionales
INSERT INTO `doctors` (`id`, `name`, `surname`, `specialty_id`, `location_id`, `created_at`, `hidden`)
VALUES 
(2, 'Mary', 'Smith', 2, 2, NOW(), false),
(3, 'James', 'Johnson', 3, 3, NOW(), false),
(4, 'Patricia', 'Williams', 4, 4, NOW(), false),
(5, 'Michael', 'Brown', 5, 5, NOW(), false),
(6, 'Linda', 'Taylor', 6, 6, NOW(), false);

-- Insertar horarios adicionales
INSERT INTO `schedules` (`id`, `doctor_id`, `shift`, `hidden`)
VALUES 
(2, 2, 'day', false),
(3, 3, 'afternoon', false),
(4, 4, 'day', false),
(5, 5, 'afternoon', false),
(6, 6, 'day', false);

-- Insertar usuarios adicionales
INSERT INTO `users` (`id`, `username`, `role`, `created_at`, `hidden`)
VALUES 
(2, 'viewer1', 'viewer', NOW(), false),
(3, 'viewer2', 'viewer', NOW(), false),
(4, 'viewer3', 'viewer', NOW(), false),
(5, 'admin2', 'admin', NOW(), false),
(6, 'admin3', 'admin', NOW(), false);