/* TOTAL OF TABLES: 8*/

create database amalgamate;

\c amalgamate;

create table admin_account(
	username VARCHAR(50),
	password VARCHAR(20),
	constraint admin_uname_pk primary key(username)
);

create table admin_email(
	admin_acc_name VARCHAR(50),
	email VARCHAR(50),
	constraint email_ademail_uk unique(email),
	constraint email_uaccount_fk foreign key(admin_acc_name) references admin_account(username) ON DELETE CASCADE
);

create table user_account(
	username VARCHAR(50),
	password VARCHAR(20),
	name VARCHAR(50),
	email VARCHAR(50),
	mobile_number VARCHAR(13),
	birthday DATE,
	complete_address VARCHAR(50),
	college VARCHAR(50),
	highest_educ_attained VARCHAR(50),
	objective VARCHAR(200),
	date_approved DATE,
	managed_by VARCHAR(50),
	is_approved boolean,
	constraint user_uname_pk PRIMARY KEY(username),
	constraint user_email_uk UNIQUE(email),
	constraint user_managedby_fk FOREIGN KEY(managed_by) REFERENCES admin_account(username) ON DELETE CASCADE
);
																																																																																													
create table user_degree(
	user_acc_name VARCHAR(50),
	degree VARCHAR(50),
	constraint degree_useraccname_fk FOREIGN KEY(user_acc_name) REFERENCES user_account(username) ON DELETE CASCADE
);

create table user_field(
	user_acc_name VARCHAR(50),
	field VARCHAR(50),
	constraint field_useraccname_fk foreign key(user_acc_name) references user_account(username) ON DELETE CASCADE
);

create table user_connection(
	user_acc_name VARCHAR(50),
	connection VARCHAR(50),
	constraint connection_useraccname_fk foreign key(user_acc_name) references user_account(username) ON DELETE CASCADE
);

create table job_vacancy(
	job_name VARCHAR(50),
	job_description VARCHAR(500),
	posted_by VARCHAR(50),
	views INT,
	is_approved boolean,
	managed_by VARCHAR(50),
	constraint job_jobname_pk primary key(job_name),
	constraint job_postedby_fk foreign key(posted_by) references user_account(username) ON DELETE CASCADE,
	constraint job_managedby_fk foreign key(managed_by) references admin_account(username) ON DELETE CASCADE
);

create table user_job(
	user_acc_name VARCHAR(50),
	job_name VARCHAR(50),
	constraint userjob_jobname_uk UNIQUE(job_name),
	constraint userjob_useraccname_fk foreign key(user_acc_name) references user_account(username) ON DELETE CASCADE,
	constraint userjob_jobname_fk foreign key(job_name) references job_vacancy(job_name) ON DELETE CASCADE
);
