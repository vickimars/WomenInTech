/*

Create a new database (or Schema) called BlogDatabase and create the users table as appropriate
in mySQL. The functions have been updated to look up BlogDatabase (VM previously had it connected
to a database called library, please update so everyone has the same reference.

Our register form currently doesn't have First and Last name so these have been taken out,
but we can always add back in.

AE

*/

create database BlogDatabase;
use BlogDatabase;


create table users(
id int primary key auto_increment,
username varchar (50) NOT NULL, 
email varchar (50) NOT NULL, 
password varchar (50) NOT NULL,
about_me varchar (50) NOT NULL)

insert users(firstname, surname, username, email, password, about_me)
values ('devina','grewal', 'dee0610', 'devina.grewal@gmail.com', 'dee123', 'Hey im new to blogging!'),
			( 'daniel', 'gill', 'dan456', 'dan.gill@hotmail.com', 'dan234', 'Im Daniel, lets start blogging!'),
            ( 'mary', 'miller', 'miller456', 'mary.miller@hotmail.com', 'miller234', 'Im Mary, cant wait to start my first blog!');
            

