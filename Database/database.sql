use coursesystem;

-- sign-up table
CREATE TABLE user_registration (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    mail_ID VARCHAR(100) NOT NULL,
    phone_No VARCHAR(15) NOT NULL,
    city VARCHAR(50) NOT NULL,
    password VARCHAR(32) NOT NULL,
    verify_token VARCHAR(255) ,
    confirmPassword VARCHAR(32) NOT NULL,
    email_verified TINYINT(1) DEFAULT 0,
    verification_code VARCHAR(32) NOT NULL
);

select * from user_registration;


-- login table  


CREATE TABLE login(
	user_name VARCHAR(30) NOT NULL,
	password VARCHAR(255) NOT NULL
);

select * from login;



-- course table

CREATE TABLE course(
	course_ID INT AUTO_INCREMENT PRIMARY KEY,
	course_img VARCHAR(255) NOT NULL ,
    course_name VARCHAR(255) NOT NULL ,
	course_channel_name VARCHAR(255) NOT NULL ,
    course_info VARCHAR(255) NOT NULL ,
    course_prise DECIMAL(10, 2) NOT NULL ,
    course_code INT(20) NOT NULL 
);

INSERT INTO course(course_ID , course_img , course_name , course_channel_name ,  course_info , course_prise , course_code)
VALUES(1 , "Assests/course-1.png" , "VUE JS " , "kitani studio" ,  " More than 8yr Experience as Illustrator.  Learn  how to becoming  professional Illustrator Now...", 2500  , 101); 

SELECT * FROM course ;


-- add to cart table 

CREATE TABLE course_cart(
	course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL ,
    course_channel_name VARCHAR(255) NOT NULL ,
    course_rating VARCHAR(20) NOT NULL,
    price DECIMAL(10, 2) NOT NULL ,
    delete_price DECIMAL(10, 2) NOT NULL 
);

SELECT * FROM course_cart ;

-- buy course table 

CREATE TABLE buyCourse(
	course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL ,
    mail_ID VARCHAR(100) NOT NULL,
    phone_No VARCHAR(15) NOT NULL,
    payment_mode VARCHAR(100) NOT NULL ,
    course VARCHAR(255) NOT NULL ,
    amount DECIMAL(10 , 2) NOT NULL 
);

INSERT INTO buyCourse(course_ID , course_name  , mail_ID , phone_No , payment_mode , course , amount)
VALUES(1 , "VUE JS " , "eshatarpada8646@gmial.com" , 6354324255 , "UPI" ,  "vue js" , 2500); 

SELECT * FROM buyCourse ;

-- wishlist course 

CREATE TABLE wishlist_course(
	course_ID INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL ,
    course_channel_name VARCHAR(255) NOT NULL ,
    course_info VARCHAR(255) NOT NULL ,
    course_rating VARCHAR(20) NOT NULL,
    price DECIMAL(10, 2) NOT NULL ,
    delete_price DECIMAL(10, 2) NOT NULL 
);

SELECT * FROM wishlist_course ;

-- Checkout table 

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_number` varchar(50) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_price` float(10,2) DEFAULT NULL,
  `course_price_currency` varchar(10) DEFAULT NULL,
  `order_id` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) NOT NULL,
  `payment_source` varchar(50) DEFAULT NULL,
  `payment_source_card_name` varchar(50) DEFAULT NULL,
  `payment_source_card_last_digits` varchar(4) DEFAULT NULL,
  `payment_source_card_expiry` varchar(10) DEFAULT NULL,
  `payment_source_card_brand` varchar(25) DEFAULT NULL,
  `payment_source_card_type` varchar(25) DEFAULT NULL,
  `payment_status` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SELECT * FROM transactions ;