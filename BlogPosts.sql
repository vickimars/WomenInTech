create table BlogPosts(
id int primary key auto_increment,
Title varchar (100) NOT NULL, 
Post varchar (10000) NOT NULL, 
username varchar (50) NOT NULL,
date DATETIME DEFAULT CURRENT_TIMESTAMP,
phptag varchar (100),
mojitotag varchar (100),
funnytag varchar (100),
journeytag varchar (100);



insert BlogPosts(Title, Post, Author, username)
values ('Women2017', 'This is all about how many women had gone into IT in 2017', 'Devina', 'Dee0610'),
	('TechnoStory', 'This is all about how technology can assist with daily tasks', 'Vicki', 'Vicki123'),
       ('Wo-man2017', 'This is all about how many women beat men in IT in 2017', 'Aimi', 'Aimi2017')          ('Power Of Women', 'This is all about how women are now earning more than men', 'Christina', 'Chrissy234');
           
			