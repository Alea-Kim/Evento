create database amalgamate;

\c amalgamate;

create table admin_account(username varchar(20), password varchar(20), constraint admin_uname_pk primary key(username));

create table user_account(username varchar(20), password varchar(20), last_name varchar(50), first_name varchar(50), middle_name varchar(50), email_address varchar(50), gender varchar(10), mobile_number varchar(11), college varchar(50),  highest_educ_attained varchar(20), complete_address varchar(50),  managed_by varchar(20), constraint user_uname_pk primary key(username), constraint user_managedby_fk foreign key(managed_by) references admin_account(username));

create table job_vacancy(job_id serial, Job_name varchar(20), Job_description varchar(150), Posted_by varchar(20), Managed_by varchar(20), constraint job_jid_pk primary key(job_id), constraint job_posted_fk foreign key(Posted_by) references user_account(username), constraint job_managed_fk foreign key(Managed_by) references admin_account(username));

create table access_job(user_acc_name varchar(20), job_id serial, constraint jobvacancy_uaccount_pk unique(user_acc_name), constraint jobvacancy_jobid_pk unique(job_id), constraint jobvacancy_uaccount_fk foreign key(user_acc_name) references user_account(username), constraint jobvacancy_jobid_fk foreign key(job_id) references job_vacancy(job_id));


create table user_degree(user_acc_name varchar(20), degree varchar(20), constraint degree_uaccount_uk unique(user_acc_name), constraint degree_deg_pk unique(degree), constraint degree_uaccount_fk foreign key(user_acc_name) references user_account(username));

create table user_email(user_acc_name varchar(20), email varchar(20), constraint email_uaccount_uk unique(user_acc_name), constraint email_uaccount_fk foreign key(user_acc_name) references user_account(username));

create table admin_email(admin_acc_name varchar(20), email varchar(20), constraint email_adminaccount_uk unique(admin_acc_name), constraint email_ademail_uk unique(email),  constraint email_uaccount_fk foreign key(admin_acc_name) references admin_account(username));

create table user_connection(user_acc_name varchar(20), connection varchar(20), constraint connection_uaccount_uk unique(user_acc_name), constraint connection_connect_pk primary key(connection), constraint connection_uaccount_fk foreign key(user_acc_name) references user_account(username));

create table user_field(user_acc_name varchar(20), field varchar(20), constraint field_uaccount_uk unique(user_acc_name), constraint field_connect_pk primary key(field), constraint field_uaccount_fk foreign key(user_acc_name) references user_account(username));

