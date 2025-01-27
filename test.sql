CREATE TABLE student (
    id INT PRIMARY KEY,
    Na_Ne VARCHAR(100),
    klasse VARCHAR(50)
);

INSERT INTO student (id, Na_Ne, klasse) VALUES (1, 'Max Mustermann', '10A');

SELECT * FROM student;
