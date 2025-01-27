CREATE TABLE student (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    klasse VARCHAR(50)
);

INSERT INTO student (id, name, klasse) VALUES (1, 'Max Mustermann', '10A');

SELECT * FROM student;
