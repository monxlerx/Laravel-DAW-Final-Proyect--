INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Noel Iñiguez', 'noelif1984@hotmail.com', NULL, '$2y$10$mZcYCSCwRsASrViEjDqG/eCeV3sgZtRNfXkk8clue6km0firOg19S', 'admin', NULL, '2019-09-02 08:49:34', '2019-09-02 08:49:34'),
(2, 'Estella Jones', 'estjones@hotmail.com', NULL, '$2y$10$Yn/YKL20QfKMrwRftfUGIeq7AsqCgUgfZzjW003eufh4tAotefa5W', 'teacher', NULL, '2019-09-03 08:51:52', '2019-09-03 08:51:52'),
(3, 'Peter Manson', 'petemanson@gmail.com', NULL, '$2y$10$QlQN9xzTl.K8YeAcr8aCW.HEcSilGahZY1McL3F1EXVepabnOCxwq', 'teacher', NULL, '2019-09-06 08:53:27', '2019-09-06 08:53:27'),
(4, 'Davis Shields', 'daveshiels@gmail.com', NULL, '$2y$10$NHP/fdO3yOs2g57VUBzO6urWOVTtugKVCFgh7PTjQSYW88WWiEide', 'teacher', NULL, '2019-09-01 08:54:16', '2019-09-02 08:54:16'),
(5, 'Alina White', 'awhite@gmail.com', NULL, '$2y$10$yd2BOMMVi8L1yQpK1.XO6OlehPIs7bltQP58hXIieDe2nqnbWNwNa', 'teacher', NULL, '2019-09-02 08:55:05', '2019-09-02 08:55:05'),
(6, 'Claudio Pérez', 'clau@hotmail.es', NULL, '$2y$10$UWsXL/7f28N9QqVyLr4u0Oj0cPLDRmUNJXuKp4tB/Wq9pYXdEin6a', 'student', NULL, '2019-09-02 08:55:51', '2019-09-02 08:55:51'),
(7, 'David Camarro', 'davidc@gmail.com', NULL, '$2y$10$Did4oXtzwFbAhwczVE8GCeRvyEcTYyFyM/TqdFWxhp.3XgZOk5lRe', 'student', NULL, '2019-09-02 08:56:31', '2019-09-02 08:56:31'),
(8, 'Ana Blanco', 'anaB@yahoo.es', NULL, '$2y$10$25tty.rWOuiARRXUNcooXe1cywENgOzMgHbi919kyssniVZxRWKyu', 'student', NULL, '2019-09-02 08:57:13', '2019-09-02 08:57:13'),
(9, 'Eva Rosales', 'e_rosa@gmail.com', NULL, '$2y$10$OjXMtlnR1hCvAeLlRULi1OTcljlUiczycSEIgQDswD/sAAYt/07i6', 'student', NULL, '2019-09-02 08:58:06', '2019-09-02 08:58:06'),
(10, 'Abel Camacho', 'camachin@yahoo.es', NULL, '$2y$10$b5oH7CIj2kDVBByMyeUC/.81p3xazMgdxjmQrbFQJ.pPpLx8eVYbq', 'student', NULL, '2019-09-02 08:58:34', '2019-09-02 08:58:34'),
(11, 'Sergio González', 'sergiZ@gmail.com', NULL, '$2y$10$k6RWL99w.7Kq0a2kyg1/uexucYBb7PxkfXvnoV9WKMs/Q0wTlXIRy', 'student', NULL, '2019-09-02 08:59:20', '2019-09-02 08:59:20'),
(12, 'Pedro Redondo', 'redondo@hotmail.com', NULL, '$2y$10$w98LIzMHKq3Aky5d7VrRQ.FurNkS8IKq9xCwyTdLOJFk9ZlpHBQX2', 'student', NULL, '2019-09-02 09:00:31', '2019-09-02 09:00:31'),
(13, 'Manuel González', 'manu_g@hotmail.com', NULL, '$2y$10$ZhqS.GS6ba3SvyuM5MSs4OqjKHm.F66O0KlX1GyKd8H3tnJgxJrTC', 'student', NULL, '2019-09-02 09:01:17', '2019-09-02 09:01:17');


INSERT INTO `courses` (`id`, `created_at`, `updated_at`, `title`, `description`, `type_course`, `company`, `price`, `teacher_id`) VALUES
(1, NULL, NULL, 'Pre A1 Starters', 'Pre A1 Starters, formerly known as Cambridge English: Starters (YLE Starters), is one of our Cambridge English Qualifications. It is the start of a child’s language learning journey.', 'Individual / Business', NULL, 65, NULL),
(2, NULL, NULL, 'A1 Movers', 'A1 Movers, formerly known as Cambridge English: Movers (YLE Movers), is one of our Cambridge English Qualifications. It is the next step in a child’s English language learning.', 'Individual / Business', NULL, 65, NULL),
(3, NULL, NULL, 'A2 Flyers', 'A2 Flyers, formerly known as Cambridge English: Flyers (YLE Flyers), is one of our Cambridge English Qualifications. It is the third of our fun, activity-based English tests for children.', 'Individual / Business', NULL, 65, NULL),
(4, NULL, NULL, 'B2 First', 'B2 First, formerly known as Cambridge English: First (FCE), is one of our Cambridge English Qualifications. It is our most popular exam, accepted by thousands of businesses and educational institutions worldwide.', 'Individual / Business', NULL, 70, NULL),
(5, NULL, NULL, 'C1 Advanced', 'C1 Advanced, formerly known as Cambridge English: Advanced (CAE), is one of our Cambridge English Qualifications. It is the in-depth, high-level qualification that shows you have the language skills that employers and universities are looking for.', 'Individual / Business', NULL, 70, NULL),
(6, NULL, NULL, 'C2 Proficiency', 'C2 Proficiency, formerly known as Cambridge English: Proficiency (CPE), is one of our Cambridge English Qualifications. It is our highest-level qualification – proof that you are a highly competent speaker of English.', 'Individual / Business', NULL, 80, NULL),
(7, NULL, NULL, 'B1 Business Preliminary', 'B1 Business Preliminary, formerly known as Cambridge English: Business Preliminary (BEC Preliminary), is one of our Cambridge English Qualifications. It helps you to get the practical language skills you need to start doing business in English.', 'Business', '', 70, NULL),
(8, NULL, NULL, 'B2 Business Vantage', 'B2 Business Vantage, formerly known as Cambridge English: Business Vantage (BEC Vantage), is one of our Cambridge English Qualifications. It shows employers that you are ready to do business at an international level.', 'Business', NULL, 75, NULL),
(9, NULL, NULL, 'C1 Business Higher', 'C1 Business Higher, known as Cambridge English: Business Higher (BEC Higher), is one of our Cambridge English Qualifications. It helps you to get the practical language skills you need to work effectively at a senior level in international business.', 'Business', NULL, 80, NULL),
(10, NULL, NULL, 'One to one', 'One-to-one courses are the most highly focused on personal language needs and learning styles, often with extremely impressive, rapid results.', 'Individual / Business', NULL, 110, NULL),
(11, NULL, NULL, 'Business english courses', 'We provide English language training courses for businesses and professionals . We are specialized in different fields(communication, computing ...) Courses are delivered on-site to company premises and at our school.', 'Business', NULL, 85, NULL);


INSERT INTO `teachers` (`id`, `created_at`, `updated_at`, `course_id`, `firstname`, `last_name`, `skills`) VALUES
(1, NULL, NULL, 1, 'Estella', 'Jones', 'More than twenty years of experience in teaching English in countries like Australia and Scotland. I use a methodology based on play and interaction between students in my classes.'),
(2, NULL, NULL, 2, 'Estella', 'Jones', 'More than twenty years of experience in teaching English in countries like Australia and Scotland. I use a methodology based on play and interaction between students in my classes.'),
(3, NULL, NULL, 3, 'Estella', 'Jones', 'More than twenty years of experience in teaching English in countries like Australia and Scotland. I use a methodology based on play and interaction between students in my classes.'),
(4, NULL, NULL, 4, 'Peter', 'Manson', 'Tireless worker. I do not rest until my students meet their goal. Passionate about my work, there is no greater satisfaction than seeing the progress of a student.'),
(5, NULL, NULL, 5, 'Peter', 'Manson', 'Tireless worker. I do not rest until my students meet their goal. Passionate about my work, there is no greater satisfaction than seeing the progress of a student.'),
(6, NULL, NULL, 6, 'Peter', 'Manson', 'Tireless worker. I do not rest until my students meet their goal. Passionate about my work, there is no greater satisfaction than seeing the progress of a student.'),
(7, NULL, NULL, 7, 'David', 'Shield', 'For more than a decade I worked for an international consultant. My career led to teaching, but I still love being linked to teaching English at the business level.'),
(8, NULL, NULL, 8, 'David', 'Shield', 'For more than a decade I worked for an international consultant. My career led to teaching, but I still love being linked to teaching English at the business level.'),
(9, NULL, NULL, 9, 'Alina', 'White', 'My ability to analyze student needs and adapt the methodology to their needs are my main virtues. If you add passion and effort to that, success is assured.'),
(10, NULL, NULL, 10, 'Alina', 'White', 'My ability to analyze student needs and adapt the methodology to their needs are my main virtues. If you add passion and effort to that, success is assured.'),
(11, NULL, NULL, 11, 'Alina', 'White', 'My ability to analyze student needs and adapt the methodology to their needs are my main virtues. If you add passion and effort to that, success is assured.');


INSERT INTO `stays_abroads` (`id`, `created_at`, `updated_at`, `location`, `county`, `nation`, `country`, `school`, `accommodation`, `landmarks`, `price_week`) VALUES
(1, NULL, NULL, 'Edinburgh', 'Midlothian', 'Scotland', 'United Kingdom', 'Alba English School', 'Napier University', 'Calton Hill | Arthur´s Seat | Dean Village | Edinburgh Castle | Holyrood Palace', 320),
(2, NULL, NULL, 'London', 'The Great London', 'England', 'United Kingdom', 'London English School', 'Chelsea Accommodation', 'Big Ben | London Eye | Tower of London | Buckingham Palace | Trafalgar Square', 350),
(3, NULL, NULL, 'Dublin', 'Dublin County', 'Ireland', 'United Kingdom', ' Goblin Irish School', 'The Tannery Student Accommodation', 'Guiness Storehouse | Temple Bar | Dublin Castle | Narional Museum of archaeology | Glasvenin cementary', 300),
(4, NULL, NULL, 'Manchester', 'The Great Manchester', 'England', 'United Kingdom', 'Britannia English School', 'Fallowfiled Campus', 'Industry and Science Museum | The John Rylands Library | Albert Square | Old Trafford Cricket Ground | Chinatown', 300),
(5, NULL, NULL, 'Brighton', 'East Sussex', 'England', 'United Kingdom', 'ISE Brighton', 'Swanborough Housing', 'Brighton Pier | Preston Park | Royal Pavilion | Brighton Beach | St Peter´s Church', 300),
(6, NULL, NULL, 'Liverpool', 'Merseyside', 'England', 'United Kingdom', 'The LEX School of English', 'Vita Student Liverpool', 'Anfield Stadium | The Cavern CLub | Walker Art Gallery | Albert Dock | The Beatles Story', 300);


INSERT INTO `exams` (`id`, `created_at`, `updated_at`, `level`, `description`, `price`) VALUES
(1, NULL, NULL, 'Pre A1 Starters	', 'Children who take the test are usually between the ages of 7 and 8, and have had about 100 hours of English lessons.', 74),
(2, NULL, NULL, 'A1 Movers	', 'Children who take the test are usually between the ages of 8 and 11, and have had about 175 hours of English lessons.', 74),
(3, NULL, NULL, 'A2 Flyers	', 'Children who take the test are usually between the ages of 9 and 12, and have been learning English as a second language for two to three years at school (about 250 hours of English classes).', 74),
(4, NULL, NULL, 'B2 First	', 'You should study for the FCE if you want to work in an English-speaking business, live in an English-speaking country or study a foundation-level or pre-university course taught in English.', 207),
(5, NULL, NULL, 'C1 Advanced	', 'You should take CAE if you want to prove to employers or universities that you can communicate confidently in English in professional and high-level academic situations. ', 225),
(6, NULL, NULL, 'C2 Proficiency	', 'You should take the CPE if you want to prove to employers that you can use English at a senior management level, or if you want to study at postgraduate or PhD level at an English-speaking university.', 238);


INSERT INTO `booking__stays__abroads` (`id`, `created_at`, `updated_at`, `id_stays_abroad`, `user_id`, `status`, `departure_date`, `return_date`, `number_weeks`) VALUES
(1, '2019-12-03 10:44:47', '2019-12-03 10:44:47', 1, 6, NULL, '2020-02-02', '2020-02-09', 1),
(2, '2019-12-03 10:55:11', '2019-12-03 10:55:11', 2, 7, NULL, '2020-02-05', '2020-02-26', 3),
(3, '2019-12-03 10:57:54', '2019-12-03 10:57:54', 3, 8, NULL, '2020-01-20', '2020-01-27', 1),
(4, '2019-12-03 10:59:04', '2019-12-03 10:59:04', 4, 9, NULL, '2020-02-10', '2020-03-02', 2),
(5, '2019-12-03 10:59:26', '2019-12-03 10:59:26', 5, 9, NULL, '2020-03-18', '2020-03-25', 1),
(6, '2019-12-03 11:02:50', '2019-12-03 11:02:50', 2, 11, NULL, '2020-03-01', '2020-03-29', 4),
(7, '2019-12-03 11:04:23', '2019-12-03 11:04:23', 2, 12, NULL, '2020-02-12', '2020-03-12', 4);


INSERT INTO `date_exams` (`id`, `created_at`, `updated_at`, `exam_id`, `date`) VALUES
(1, '2019-12-03 10:47:04', '2019-12-03 10:47:04', 2, '2020-02-15'),
(2, '2019-12-03 10:47:13', '2019-12-03 10:47:13', 2, '2020-03-21'),
(3, '2019-12-03 10:47:23', '2019-12-03 10:47:23', 2, '2020-04-18'),
(4, '2019-12-03 10:47:32', '2019-12-03 10:47:32', 1, '2020-01-25'),
(5, '2019-12-03 10:48:12', '2019-12-03 10:48:12', 1, '2020-03-21'),
(6, '2019-12-03 10:48:22', '2019-12-03 10:48:22', 1, '2020-05-23'),
(7, '2019-12-03 10:48:32', '2019-12-03 10:48:32', 3, '2020-02-26'),
(8, '2019-12-03 10:48:42', '2019-12-03 10:48:42', 3, '2020-05-30'),
(9, '2019-12-03 10:48:51', '2019-12-03 10:48:51', 4, '2020-02-22'),
(10, '2019-12-03 10:49:04', '2019-12-03 10:49:04', 4, '2020-03-07'),
(11, '2019-12-03 10:49:15', '2019-12-03 10:49:15', 4, '2020-04-25'),
(12, '2019-12-03 10:49:26', '2019-12-03 10:49:26', 4, '2020-06-27'),
(13, '2019-12-03 10:49:38', '2019-12-03 10:49:38', 4, '2020-09-26'),
(14, '2019-12-03 10:49:48', '2019-12-03 10:49:48', 4, '2020-11-21'),
(15, '2019-12-03 10:50:01', '2019-12-03 10:50:01', 5, '2020-02-14'),
(16, '2019-12-03 10:50:14', '2019-12-03 10:50:14', 5, '2020-04-25'),
(17, '2019-12-03 10:50:26', '2019-12-03 10:50:26', 5, '2020-10-30'),
(18, '2019-12-03 10:50:56', '2019-12-03 10:50:56', 6, '2020-09-29'),
(19, '2019-12-03 10:51:11', '2019-12-03 10:51:11', 6, '2020-05-30');


INSERT INTO `exam_reservations` (`id`, `created_at`, `updated_at`, `exam_id`, `user_id`, `booking_date`) VALUES
(1, '2019-12-03 10:46:08', '2019-12-03 10:46:08', 2, 6, '2020-02-15'),
(2, '2019-12-03 10:56:26', '2019-12-03 10:56:26', 2, 7, '2020-04-18'),
(3, '2019-12-03 11:01:28', '2019-12-03 11:01:28', 6, 10, '2020-05-30'),
(4, '2019-12-03 11:03:26', '2019-12-03 11:03:26', 6, 11, '2020-05-30'),
(5, '2019-12-03 11:05:56', '2019-12-03 11:05:56', 4, 13, '2020-03-07');


INSERT INTO `feedbacks` (`id`, `created_at`, `updated_at`, `user_id`, `description`, `month`, `year`) VALUES
(1, '2019-12-03 10:35:24', '2019-12-03 10:35:24', 6, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '9', 2019),
(2, '2019-12-03 10:35:42', '2019-12-03 10:35:42', 6, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '10', 2019),
(3, '2019-12-03 10:35:55', '2019-12-03 10:35:55', 6, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '11', 2019),
(4, '2019-12-03 10:36:25', '2019-12-03 10:36:25', 7, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '9', 2019),
(5, '2019-12-03 10:36:37', '2019-12-03 10:36:37', 7, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '10', 2019),
(6, '2019-12-03 10:36:49', '2019-12-03 10:36:49', 7, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '11', 2019),
(7, '2019-12-03 10:37:57', '2019-12-03 10:37:57', 8, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '9', 2019),
(8, '2019-12-03 10:38:09', '2019-12-03 10:38:09', 8, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '10', 2019),
(9, '2019-12-03 10:38:21', '2019-12-03 10:40:14', 9, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '11', 2019),
(10, '2019-12-03 10:38:36', '2019-12-03 10:38:36', 9, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '9', 2019),
(11, '2019-12-03 10:38:46', '2019-12-03 10:38:46', 9, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '10', 2019),
(12, '2019-12-03 10:38:56', '2019-12-03 10:38:56', 9, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '11', 2019),
(13, '2019-12-03 10:39:06', '2019-12-03 10:39:06', 10, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '9', 2019),
(14, '2019-12-03 10:39:25', '2019-12-03 10:39:25', 10, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '10', 2019),
(15, '2019-12-03 10:39:43', '2019-12-03 10:39:43', 10, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '11', 2019),
(16, '2019-12-03 10:40:29', '2019-12-03 10:40:29', 11, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '9', 2019),
(17, '2019-12-03 10:40:38', '2019-12-03 10:40:38', 11, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '10', 2019),
(18, '2019-12-03 10:40:51', '2019-12-03 10:40:51', 11, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '11', 2019),
(19, '2019-12-03 10:41:02', '2019-12-03 10:41:02', 12, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '9', 2019),
(20, '2019-12-03 10:41:11', '2019-12-03 10:41:11', 12, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '10', 2019),
(21, '2019-12-03 10:41:30', '2019-12-03 10:41:30', 12, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '11', 2019),
(22, '2019-12-03 10:41:43', '2019-12-03 10:41:43', 13, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '9', 2019),
(23, '2019-12-03 10:41:56', '2019-12-03 10:41:56', 13, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '10', 2019),
(24, '2019-12-03 10:42:05', '2019-12-03 10:42:05', 13, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '11', 2019);


INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `content`, `image_path`, `author`, `receiver`) VALUES
(1, '2019-12-03 10:16:39', '2019-12-03 10:16:39', 'Vacations', 'Good morning to all. Christmas parties are approaching and many of you still have vacations to enjoy. Remember that you have to take them before the end of the year. There is no problem if you decide to take vacations the week of December 23 to 30, because they will be resumed once the Christmas holidays have ended. Please send me an email with the days chosen to organize', NULL, 'Admin', 'Teacher'),
(2, '2019-12-03 10:20:52', '2019-12-03 10:20:52', 'Holydays', 'Christmas holidays are approaching and from Holyrood English School we wish you the best for next year. First of all, I would like to tell you that the classes will be closed from December 23 to 30. Good luck to those who go to the official exams in January, and work hard during Christmas. I know it costs, but without effort there is no reward.', NULL, 'Admin', 'Student'),
(3, '2019-12-03 10:25:19', '2019-12-03 10:43:37', 'Christmas Party', 'On December 21 we want to share Christmas with you. Do not stop attending class, because the most important party of the year awaits you. We will sing Christmas carols and there will be food and soft drinks for everyone. You do not miss the hype.', NULL, 'Admin', 'Student'),
(4, '2019-12-03 10:30:35', '2019-12-03 10:30:35', 'New Academy', 'I would like to tell you something that I am thinking lately. We are growing a lot, and the number of students does not stop growing, I am thinking of opening a new academy in Aviles. It would be a good opportunity for you to work more weekly hours, as some of you had demanded. I would like to have a meeting to discuss this topic, and the possible incorporation of new teachers. I would be happy to hear your proposals. The meeting will be held on January 9 after the holidays.', NULL, 'Admin', 'Teacher');


INSERT INTO `registered__courses` (`id`, `created_at`, `updated_at`, `user_id`, `course_id`, `status_course`, `feedback`, `timestamp`) VALUES
(1, '2019-12-03 10:44:20', '2019-12-03 10:44:20', 6, 2, NULL, NULL, NULL),
(2, '2019-12-03 10:54:35', '2019-12-03 10:54:35', 7, 2, NULL, NULL, NULL),
(3, '2019-12-03 10:57:32', '2019-12-03 10:57:32', 8, 4, NULL, NULL, NULL),
(4, '2019-12-03 10:58:42', '2019-12-03 10:58:42', 9, 5, NULL, NULL, NULL),
(5, '2019-12-03 11:00:49', '2019-12-03 11:00:49', 10, 6, NULL, NULL, NULL),
(6, '2019-12-03 11:02:26', '2019-12-03 11:02:26', 11, 10, NULL, NULL, NULL),
(7, '2019-12-03 11:04:41', '2019-12-03 11:04:41', 12, 6, NULL, NULL, NULL),
(8, '2019-12-03 11:05:26', '2019-12-03 11:05:26', 13, 4, NULL, NULL, NULL);






