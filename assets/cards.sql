INSERT INTO users(id, name, surename, birthday, id_birthplace, id_residence, id_gender, job, id_post, phone_number, id_religion, id_marital_status) VALUES
(1, 'Jhon', 'Smith', '15.04.1975', 'New York', 'Boston', 'male', 'Boeing', 'manager', '5551234567', 'other', 'single'),
(2, 'Ella', 'Cartman', '22.11.1988', 'Houston', 'Seattle', 'female', 'IBM', 'engineer', '5559876543', 'buddhism', 'married'),
(3, 'Paris', 'Hill', '03.06.1962', 'Los Angeles', 'Los Angeles', 'female', 'jobless', 'null', '5552345678', 'christianity', 'single'),
(4, 'James', 'Smith', '09.09.2001', 'New York', 'New York', 'male', 'Ford', 'manager', '5558765432', 'buddhism', 'single'),
(5, 'Emily', 'Johnson', '27.02.1990', 'Chicago', 'San Francisco', 'female', 'Intel', 'constructor', '5553456789', 'christianity', 'married'),
(6, 'Michael', 'Williams', '14.07.2010', 'Los Angeles', 'Cambridge', 'male', 'jobless', 'null', '5554567890', 'islam', 'married');

UPDATE users SET name = "Paris" WHERE id_name = 3