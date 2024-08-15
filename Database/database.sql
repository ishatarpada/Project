CREATE DATABASE coursesystem;

use coursesystem;

-- admin table

CREATE TABLE admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL UNIQUE,
    email VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL UNIQUE,
    password_hash VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO admin(username , email , password_hash )
VALUES("Isha Patel" , "ishapatel@8646" , MD("i6s6h0a1@1911"));

select * from admin;

---------------------------------------------------------------------------------

-- sign-up table
use coursesystem;

CREATE TABLE user_registration (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    first_name VARCHAR(50),
	last_name VARCHAR(50),
    mail_ID VARCHAR(255) NOT NULL,
	profile_img VARCHAR(255),
	about_me TEXT,
    phone_No BIGINT(10) NOT NULL,
    city VARCHAR(50) NOT NULL,
    password VARCHAR(32) NOT NULL,
    verify_token VARCHAR(255) ,
    confirmPassword VARCHAR(32) NOT NULL,
    email_verified TINYINT(1) DEFAULT 0,
    verification_code VARCHAR(32) NOT NULL,    
	linkedin_id VARCHAR(255),
	github_id VARCHAR(255),
	behance_link VARCHAR(255),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    `subscription_id` int(11) NOT NULL DEFAULT 0 COMMENT 'foreign key of "user_subscriptions" table'
);

select * from user_registration;


---------------------------------------------------------------------------------


-- login table  
use coursesystem;

CREATE TABLE login(
	user_name VARCHAR(30) NOT NULL,
	password VARCHAR(255) NOT NULL
);

select * from login;


---------------------------------------------------------------------------------


-- student Table 

CREATE TABLE student (
    student_id INT PRIMARY KEY,
    user_id INT,
    username VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    phone_number VARCHAR(20),
    date_of_birth DATE,
    education_10th VARCHAR(50) ,
    education_12th VARCHAR(50),
    education_college VARCHAR(50),
    address VARCHAR(255),
    city VARCHAR(50),
    state VARCHAR(50),
    pin_code VARCHAR(20),
    country VARCHAR(50),
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    student_image VARCHAR(255) ,
    total_purchase_course VARCHAR(255) ,
    total_payment BIGINT ,
    FOREIGN KEY (user_id) REFERENCES user_registration(user_id)
);

select * from student;


---------------------------------------------------------------------------------


-- course table 
use coursesystem;

CREATE TABLE course (
    course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_title VARCHAR(255) NOT NULL,
    course_description TEXT NOT NULL,
    course_category VARCHAR(255) NOT NULL,
    course_level VARCHAR(20) NOT NULL,
    course_language VARCHAR(255) NOT NULL,
    course_time VARCHAR(255)  NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    total_lecture INT NOT NULL,
    instructor VARCHAR(35) NOT NULL ,
    channel_name VARCHAR(255) NOT NULL ,
	instructor_img VARCHAR(255) NOT NULL ,
    course_price DECIMAL(10, 2) NOT NULL,
    course_discount_price DECIMAL(10, 2) NOT NULL,
    course_img VARCHAR(255) NOT NULL ,
    video_url VARCHAR(255) NOT NULL ,
    course_status VARCHAR(20) DEFAULT 'pending',
    Completed TINYINT(1) DEFAULT 0 ,
    Rating DECIMAL(3,2) DEFAULT 0.0
);


SELECT * FROM course ;


---------------------------------------------------------------------------------


-- student course table 
use coursesystem;

CREATE TABLE student_course (
	student_id INT ,
    course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_title VARCHAR(255) NOT NULL,
    course_description TEXT NOT NULL,
    course_category VARCHAR(255) NOT NULL,
    course_level VARCHAR(20) NOT NULL,
    course_language VARCHAR(255) NOT NULL,
    course_time datetime NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    total_lecture INT NOT NULL,
    instructor VARCHAR(35) NOT NULL ,
    channel_name VARCHAR(255) NOT NULL ,
	instructor_img VARCHAR(255) NOT NULL ,
    course_price DECIMAL(10, 2) NOT NULL,
    course_discount_price DECIMAL(10, 2) NOT NULL,
    course_img VARCHAR(255) NOT NULL ,
    video_url VARCHAR(255) NOT NULL ,
    course_status VARCHAR(20) DEFAULT 'pending',
    FOREIGN KEY (student_id) REFERENCES student(student_id) 
);

SELECT * FROM student_course ;

---------------------------------------------------------------------------------


-- Approved Course
use coursesystem;

CREATE TABLE approve_course (
    course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_title VARCHAR(255) NOT NULL,
    course_description TEXT NOT NULL,
    course_category VARCHAR(255) NOT NULL,
    course_level VARCHAR(20) NOT NULL,
    course_language VARCHAR(255) NOT NULL,
    course_time TIMESTAMP DEFAULT  NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    total_lecture INT NOT NULL,
    instructor VARCHAR(35) NOT NULL ,
    channel_name VARCHAR(255) NOT NULL ,
	instructor_img VARCHAR(255) NOT NULL ,
    course_price DECIMAL(10, 2) NOT NULL,
    course_discount_price DECIMAL(10, 2) NOT NULL,
    course_img VARCHAR(255) NOT NULL ,
    video_url VARCHAR(255) NOT NULL ,
    video_mp4 LONGBLOB ,
    video_webm LONGBLOB ,
    video_ogg LONGBLOB  
);

SELECT * FROM approve_course ; 


---------------------------------------------------------------------------------
-- add to cart table 
use coursesystem;

CREATE TABLE course_cart(
	course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL ,
    course_channel_name VARCHAR(255) NOT NULL ,
    course_rating VARCHAR(20) NOT NULL,
    price DECIMAL(10, 2) NOT NULL ,
    delete_price DECIMAL(10, 2) NOT NULL , 
    added_at datetime DEFAULT NULL
);

SELECT * FROM course_cart ;


-- buy course table 
use coursesystem;

CREATE TABLE buyCourse(
	course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL ,
    mail_ID VARCHAR(100) NOT NULL,
    phone_No VARCHAR(15) NOT NULL,
    payment_mode VARCHAR(100) NOT NULL ,
    course VARCHAR(255) NOT NULL ,
    amount DECIMAL(10 , 2) NOT NULL 
);

SELECT * FROM buyCourse ;


-- wishlist course 
use coursesystem;

CREATE TABLE wishlist_course(
	course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL ,
    course_channel_name VARCHAR(255) NOT NULL ,
    course_info VARCHAR(255) NOT NULL ,
    course_rating VARCHAR(20) NOT NULL,
    price DECIMAL(10, 2) NOT NULL ,
    delete_price DECIMAL(10, 2) NOT NULL , 
    added_at datetime DEFAULT NULL
);

SELECT * FROM wishlist_course ;


-- Table structure for table `payments`
use coursesystem;

CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10, 2) DEFAULT NULL,
  `card_used` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL ,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `total_course` INT, 
  `user_id` INT, 
  PRIMARY KEY (`id`),
  INDEX `idx_payment_id` (`payment_id`),
  INDEX `idx_payer_id` (`payer_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user_registration` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

select * from payments;


-- Instructor Table
use coursesystem;

CREATE TABLE Instructors (
    InstructorID INT AUTO_INCREMENT PRIMARY KEY,
	Instructor_Username VARCHAR(255) UNIQUE NOT NULL,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Email VARCHAR(255) UNIQUE NOT NULL,
    Password VARCHAR(255) NOT NULL,
    confirm_password VARCHAR(255) NOT NULL,
	verify_token VARCHAR(255) ,
    email_verified TINYINT(1) DEFAULT 0,
    verification_code VARCHAR(32) NOT NULL,    
    ProfilePicture VARCHAR(255),
    Bio TEXT,
    Expertise VARCHAR(255),
    CoursesTaught TEXT,
    ContactInformation VARCHAR(255),
    WebsiteLink VARCHAR(255),
    SocialMediaLinks TEXT,
    Status ENUM('Active', 'Inactive') DEFAULT 'Active',
    JoinDate DATE,
    LastLogin TIMESTAMP,
    AverageRating DECIMAL(3, 2),
    TotalEarnings DECIMAL(10, 2)
);
 
select * from Instructors;


CREATE TABLE notifications (
	user_id INT ,
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('unread', 'read') DEFAULT 'unread',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    FOREIGN KEY (user_id) REFERENCES user_registration(user_id)
);

select * from notifications;

CREATE TABLE upload_topic(
	course_id INT ,
    topicID INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) ,
    FOREIGN KEY (course_id) REFERENCES course(course_ID)
);


CREATE TABLE upload_subtopic(
	course_id INT ,
    topicID INT ,
    id INT AUTO_INCREMENT PRIMARY KEY ,
    topic_name VARCHAR(255) ,
    topic_video_link VARCHAR(255)  ,
    description VARCHAR(255) ,
    FOREIGN KEY (course_id) REFERENCES course(course_ID) ,
	FOREIGN KEY (topicID) REFERENCES upload_topic(topicID)
);
select * from upload_subtopic;



---------------------------------------------------------------------------------------
-- FOR SIGN UP  
--------------------------------------------------------------------------------------- 

use coursesystem;

CREATE TABLE user_registration (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(20) NOT NULL DEFAULT 'user' ,
    user_name VARCHAR(50) NOT NULL,
    first_name VARCHAR(50),
	last_name VARCHAR(50),
    mail_ID VARCHAR(255) NOT NULL,
	profile_img VARCHAR(255),
	about_me TEXT,
    phone_No BIGINT(10) NOT NULL,
    city VARCHAR(50) NOT NULL,
    password VARCHAR(32) NOT NULL,
    verify_token VARCHAR(255) ,
    confirmPassword VARCHAR(32) NOT NULL,
    email_verified TINYINT(1) DEFAULT 0,
    verification_code VARCHAR(32) NOT NULL,    
	linkedin_id VARCHAR(255),
	github_id VARCHAR(255),
	behance_link VARCHAR(255),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

select * from user_registration;



------------------------------------------------------------------------------------------------------------------
-- LOGIN TABLE
---------------------------------------------------------------------------------------------------------------- 

use coursesystem;

CREATE TABLE user_login(
	user_name VARCHAR(30) NOT NULL,
	password VARCHAR(255) NOT NULL ,
    last_login_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


select * from user_login;




------------------------------------------------------------------------------------------ 
-- STUDENT TABLE
-------------------------------------------------------------------------------------------- 

use coursesystem;


CREATE TABLE student (
    student_id INT PRIMARY KEY,
    user_id INT,
    username VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    phone_number VARCHAR(20),
    date_of_birth DATE,
    expertis VARCHAR(255) ,
    address VARCHAR(255),
    city VARCHAR(50),
    state VARCHAR(50),
    pin_code VARCHAR(20),
    country VARCHAR(50),
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    student_image VARCHAR(255) ,
    total_purchase_course VARCHAR(255) ,
    total_payment BIGINT ,
    FOREIGN KEY (student_id) REFERENCES user_registration(user_id)
);

select * from student;

------------------------------------------------------------------------------------------ 
-- STUDENT Education TABLE
-------------------------------------------------------------------------------------------- 

use coursesystem;

CREATE TABLE student_education_details (
    student_id INT ,
    ten_education_level VARCHAR(100) ,
    tenth_school_name VARCHAR(100),
    tenth_board VARCHAR(50),
    tenth_year_of_passing INT,
    tenth_percentage DECIMAL(5, 2),
    tenth_grade VARCHAR(2),
    twelve_education_level VARCHAR(100) ,
    twelveth_school_name VARCHAR(100),
    twelveth_board VARCHAR(50),
    twelveth_year_of_passing INT,
    twelveth_percentage DECIMAL(5, 2),
    twelveth_grade VARCHAR(2),
    collage_level VARCHAR(100) ,
    college_name VARCHAR(100),
    college_degree VARCHAR(100),
    college_major VARCHAR(100),
    college_year_of_passing INT,
    college_SPI VARCHAR(100),
    college_CPI VARCHAR(100) ,
    FOREIGN KEY (student_id) REFERENCES user_registration(user_id)
);

select * from student_education_details;





----------------------------------------------------------------------------
-- STUDENT COURSE DETAILS
---------------------------------------------------------------------------- 

use coursesystem;

CREATE TABLE student_course (
    user_id INT,
    course_ID INT,
    ID INT,
    course_name VARCHAR(255) NOT NULL,
    course_channel_name VARCHAR(255),
    course_time VARCHAR(255),
    course_language VARCHAR(255),
    course_rating VARCHAR(20),
    price DECIMAL(10, 2),
    delete_price DECIMAL(10, 2),
    added_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    course_description TEXT,
    course_category VARCHAR(255),
    course_level VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_lecture INT,
    instructor VARCHAR(35),
    instructor_img VARCHAR(255),
    course_img VARCHAR(255) NOT NULL,
     is_purchased TINYINT(1) DEFAULT 0, 
     status VARCHAR(50) DEFAULT 'pending' ,
    FOREIGN KEY (user_id) REFERENCES user_registration(user_id),
    FOREIGN KEY (ID) REFERENCES course(course_ID)
);

SELECT * FROM student_course ;


----------------------------------------------------------------------------------- 
-- Course Table
----------------------------------------------------------------------------------- 

use coursesystem;

CREATE TABLE course (
    course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_title VARCHAR(255) NOT NULL,
    course_description TEXT NOT NULL,
    course_category VARCHAR(255) NOT NULL,
    course_level VARCHAR(20) NOT NULL,
    course_language VARCHAR(255) NOT NULL,
    course_time VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    total_lecture INT NOT NULL,
    instructor VARCHAR(35) NOT NULL ,
    instructor_ID INT,
    channel_name VARCHAR(255) NOT NULL ,
	instructor_img VARCHAR(255) NOT NULL ,
    course_price DECIMAL(10, 2) NOT NULL,
    course_discount_price DECIMAL(10, 2) NOT NULL,
    course_img VARCHAR(255) NOT NULL ,
    video_url VARCHAR(255) NOT NULL ,
    course_status VARCHAR(20) DEFAULT 'pending',
    video_mp4 LONGBLOB ,
    video_webm LONGBLOB ,
    video_ogg LONGBLOB  ,
    Completed TINYINT(1) DEFAULT 0,
    Rating DECIMAL(3,2) DEFAULT 0.0  ,
    upload_course TINYINT(1) DEFAULT 0 ,
    status VARCHAR(50) DEFAULT 'pending',
    CONSTRAINT fk_instructor_ID FOREIGN KEY (instructor_ID) REFERENCES Instructors(InstructorID)
);


SELECT * FROM course ;




---------------------------------------------------------------------------------
-- buy course details
---------------------------------------------------------------------------------

use coursesystem;

CREATE TABLE course_cart (
	user_id INT ,
    course_ID INT,
    ID INT,
    course_name VARCHAR(255) NOT NULL,
    course_channel_name VARCHAR(255),
    course_time VARCHAR(255) ,
    course_language VARCHAR(255) ,
    course_rating VARCHAR(20),
    price DECIMAL(10, 2),
    delete_price DECIMAL(10, 2),
    added_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    course_description TEXT,
    course_category VARCHAR(255),
    course_level VARCHAR(20) ,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_lecture INT,
    instructor VARCHAR(35),
    instructor_img VARCHAR(255),
    course_img VARCHAR(255) NOT NULL ,
     FOREIGN KEY (ID) REFERENCES course(course_ID)
);


SELECT * FROM course_cart ;


---------------------------------------------------------------------------------
-- Wishlist Course
---------------------------------------------------------------------------------

use coursesystem;

CREATE TABLE wishlist_course (
	user_id INT ,
    course_ID INT,
    ID INT,
    course_name VARCHAR(255) NOT NULL,
    course_channel_name VARCHAR(255),
    course_time VARCHAR(255) ,
    course_language VARCHAR(255) ,
    course_rating VARCHAR(20),
    price DECIMAL(10, 2),
    delete_price DECIMAL(10, 2),
    added_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    course_description TEXT,
    course_category VARCHAR(255),
    course_level VARCHAR(20) ,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_lecture INT,
    instructor VARCHAR(35),
    instructor_img VARCHAR(255),
    course_img VARCHAR(255) NOT NULL ,
     FOREIGN KEY (ID) REFERENCES course(course_ID)
);


SELECT * FROM wishlist_course ;


---------------------------------------------------------------------------------
-- payment course 
---------------------------------------------------------------------------------


use coursesystem;

CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
   course_name  text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10, 2) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
   `card_used` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL ,
  `created_at` datetime DEFAULT NULL,
  `total_course` INT, 
  Instructor_Username TEXT ,
  `user_id` INT, 
  PRIMARY KEY (`id`),
  INDEX `idx_payment_id` (`payment_id`),
  INDEX `idx_payer_id` (`payer_id`),
  instructor_amount DECIMAL(10, 2) ,
  admin_amount DECIMAL(10, 2),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user_registration` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



select * from payments;



---------------------------------------------------------------------------------
-- buy a course 
---------------------------------------------------------------------------------


use coursesystem;


CREATE TABLE buy_course (
	payment_id varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    course_id INT ,
    course_name VARCHAR(100) NOT NULL,
    instructor VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    duration VARCHAR(50) NOT NULL,
    rating DECIMAL(3, 1),
    enrollment_count INT DEFAULT 0,
    category VARCHAR(50),
    course_level VARCHAR(255),
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

select * from buy_course;


---------------------------------------------------------------------------------
-- Instructor table 
---------------------------------------------------------------------------------

use coursesystem;

-- Instructors Table

CREATE TABLE Instructors (
    InstructorID INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(20) NOT NULL DEFAULT 'Instructors' ,
    Instructor_Username VARCHAR(255) UNIQUE NOT NULL,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Email VARCHAR(255) UNIQUE NOT NULL,
    phone_No BIGINT(10),
    city VARCHAR(255),
    Password VARCHAR(255) NOT NULL,
    confirm_password VARCHAR(255) NOT NULL,
    verify_token VARCHAR(255),
    email_verified TINYINT(1) DEFAULT 0,
    verification_code VARCHAR(32) NOT NULL,
    ProfilePicture VARCHAR(255),
    Bio TEXT,
    Expertise VARCHAR(255),
    Instructor_details TEXT ,
    experience TEXT ,
    linkedin_ID TEXT ,
    github_ID TEXT ,
    behance_ID TEXT ,
    portfolio_link TEXT ,
    CoursesTaught TEXT,
    ContactInformation VARCHAR(255),
    WebsiteLink VARCHAR(255),
    Status ENUM('Active', 'Inactive') DEFAULT 'Active',
    approve_request INT DEFAULT 0  ,
    JoinDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    LastLogin TIMESTAMP,
    AverageRating DECIMAL(3, 2),
    TotalEarnings DECIMAL(10, 2),
    active_courses INT DEFAULT 0, 
    pending_courses INT DEFAULT 0,
    total_courses INT DEFAULT 0
);

SELECT * FROM Instructors ;


----------------------------------------------------------------------------------- 
-- Course Table
----------------------------------------------------------------------------------- 

use coursesystem;

CREATE TABLE instructor_course (
    instructor_ID INT,
    instructor_Username VARCHAR(255),
    course_ID INT,
    course_title VARCHAR(255) NOT NULL,
    course_description TEXT NOT NULL,
    course_category VARCHAR(255) NOT NULL,
    course_level VARCHAR(20) NOT NULL,
    course_language VARCHAR(255) NOT NULL,
    course_time VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_lecture INT NOT NULL,
    channel_name VARCHAR(255) NOT NULL,
    instructor_img VARCHAR(255) NOT NULL,
    course_price DECIMAL(10, 2) NOT NULL,
    course_discount_price DECIMAL(10, 2) NOT NULL,
    course_img VARCHAR(255) NOT NULL,
    video_url VARCHAR(255) NOT NULL,
    Completed TINYINT(1) DEFAULT 0,
    Rating DECIMAL(3, 2) DEFAULT 0.0,
    course_status VARCHAR(20) DEFAULT 'pending',
    video_mp4 LONGBLOB,
    video_webm LONGBLOB,
    video_ogg LONGBLOB,
    FOREIGN KEY (course_ID) REFERENCES course(course_ID),
    FOREIGN KEY (instructor_ID) REFERENCES Instructors(InstructorID),
    FOREIGN KEY (instructor_Username) REFERENCES Instructors(Instructor_Username)
);


SELECT * FROM instructor_course ;


------------------------------------------------------------------------------------------------------

-- Instructor Payemnts  


CREATE TABLE instructor_payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
	payment_id varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	payer_id varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	payer_name text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	payer_email text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    instructor_username VARCHAR(255) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

select * from instructor_payments;


--------------------------------------------------------------------------------------------------------------------
-- admin 
--------------------------------------------------------------------------------------------------------------------

use coursesystem;


CREATE TABLE admin (
	role VARCHAR(50) NOT NULL DEFAULT 'admin' ,
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    salt VARCHAR(255) NOT NULL,
	full_name VARCHAR(255),
    profile_picture VARCHAR(255),
    city VARCHAR(255),
    phone_no BIGINT(10),
    bio TEXT,
    expertise VARCHAR(255),
    contact_information VARCHAR(255),
    status ENUM('Active', 'Inactive') DEFAULT 'Active',
    join_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login DATETIME
);

-- Assume you have the following salt value
SET @salt = '1911';

-- Assume you have the following password
SET @password = 'i6s6h0a1@1911';

-- Concatenate the password with the salt and hash it using SHA-256
SET @password_hash = SHA2(CONCAT(@password, @salt), 256);

-- Insert the user into the admin table with the hashed password and salt
INSERT INTO admin (username, email, password_hash, salt)
VALUES ('Isha Patel', 'ishapatel8646@gmail.com', @password_hash, @salt);


select * from admin;




--------------------------------------------------------------------------------------------------------------------
-- admin Profile
--------------------------------------------------------------------------------------------------------------------

use coursesystem;

CREATE TABLE admin_profile (
    admin_id INT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(255),
    profile_picture VARCHAR(255),
    city VARCHAR(255),
    phone_no BIGINT(10),
    bio TEXT,
    expertise VARCHAR(255),
    contact_information VARCHAR(255),
    status ENUM('Active', 'Inactive') DEFAULT 'Active',
    join_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login DATETIME,
    FOREIGN KEY (admin_id) REFERENCES admin(admin_id)
);

select * from admin_profile;

------------------------------------------------------------------------------------------ 


-- admin Payments

CREATE TABLE admin_payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    payment_id varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	payer_id varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	payer_name text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	payer_email text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); 

select * from admin_payments;

------------------------------------------------------------------------------------------ 


-- admin messages

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    subject TEXT NOT NULL ,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sender_id) REFERENCES admin(admin_id),
    FOREIGN KEY (receiver_id) REFERENCES user_registration(user_id)
);

select * from messages;



CREATE TABLE `plans` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `interval` enum('DAY','WEEK','MONTH','YEAR') NOT NULL COMMENT 'DAY(365) | WEEK(52) | MONTH(12) | YEAR(1)',
  `interval_count` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `user_subscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT 'foreign key of "users" table',
  `plan_id` int(5) DEFAULT NULL COMMENT 'foreign key of "plans" table',
  `paypal_order_id` varchar(255) DEFAULT NULL,
  `paypal_plan_id` varchar(255) DEFAULT NULL,
  `paypal_subscr_id` varchar(100) NOT NULL,
  `valid_from` datetime DEFAULT NULL,
  `valid_to` datetime DEFAULT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `currency_code` varchar(10) NOT NULL,
  `subscriber_id` varchar(100) DEFAULT NULL,
  `subscriber_name` varchar(50) DEFAULT NULL,
  `subscriber_email` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SELECT * FROM user_subscriptions ;