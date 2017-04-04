/*create database BlogDatabase;
use BlogDatabase;*/


/*create table users(
id int primary key auto_increment,
firstname varchar (50) NOT NULL, 
surname varchar (50) NOT NULL, 
username varchar (50) NOT NULL, 
email varchar (50) NOT NULL, 
pword varchar (50) NOT NULL,
about_me varchar (50) NOT NULL)*/

insert users(firstname, surname, username, email, pword, about_me)
values ('devina','grewal', 'dee0610', 'devina.grewal@gmail.com', 'dee123', 'Hey im new to blogging!'),
			( 'daniel', 'gill', 'dan456', 'dan.gill@hotmail.com', 'dan234', 'Im Daniel, lets start blogging!'),
            ( 'mary', 'miller', 'miller456', 'mary.miller@hotmail.com', 'miller234', 'Im Mary, cant wait to start my first blog!');
            

