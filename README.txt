README.txt
rev 9-21-2020
CIS362 Spring 2021
kbyron

The bmcc6.zip file contains components of a Web-based application named "CIS362 INFO CENTER" (CIC) and supporting components.  CIC was developed using Apache XAMPP 7.3.1.  One directory are created when this zip file is extracted: bmcc6.  CIC components are contained in the directory named bmcc6.  In a Windows XAMPP environment, the bmcc6 directory should be installed in the htdocs directory within the xampp directory.  CIC is started by launching the login.php script.

Features included in CIC are the following:

(1) A MySQL database for recording customer accounts, campsite information, campsite reservations and customer acount activity (calc, login, registration); 
(2) Customer digital photo and encrypted customer password; (note: photo capture is not working at this time during registration)
(3) Prevention of unauthorized access to CIC components;
(4) MySQL table updating in the form of a campsite reservation;
(5) MySQL join query.

Contents of this zip file are the following directory:

(1) The following CIC components are contained in bmcc6 directory:

  (a) bmcc6db_dump.sql - provides database starting point during development;
        command used to dump the database: $ mysqldump -u root bmcc6db > bmcc6db_dump.sql 
        command to initialize the database: $ mysql -u root -D bmcc6db < bmcc6db_dump.sql
	note: login password for all customers is initialized to 'happyday'
  (b) calc.php - performs selected numeric operation on two operands; 
  (c) campsites.php - displays campsite information and a link for each campsite; 
  (d) customers.php - displays registered customer information and a link for each customer; 
  (e) header.php - provides style consistency on all pages;
  (f) images - a directory containing a digital image for each customer in the database
  (g) home.php - gathers two numeric operands and choice of operation
  (h) login.php - gathers customer account and password
  (i) login-b.php - authenticates pw credentials and starts home page
  (j) logout.php - terminates application session
  (k) news.php - provides random news information
  (l) README.txt - this file
  (m) reg.php - gathers email address for new customer
  (n) reg-b.php - verifies unique email address and gathers name and password information
  (o) reg-c.php - saves registration and starts login page
  (p) securespot.txt - provides password for 2FA Gmail simple mail transfer protocol (SMTP) server 
  (q) view_campsite.php - displays information about one campsite and gathers information for a reservation
  (r) view_campsite-b.php - receives reservation for a reservation and updates the database
  (s) view_customer.php - displays information about one customer including account and reservation activity
  (t) weather.php - provides random weather information

Please send CIC corrections to kbyron@bmcc.cuny.edu.



