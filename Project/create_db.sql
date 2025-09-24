CREATE DATABASE IF NOT EXISTS club_management CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE club_management;

CREATE TABLE IF NOT EXISTS Student (
    StdID INT NOT NULL PRIMARY KEY,
    Username VARCHAR(30) NOT NULL,
    Password VARCHAR(50) NOT NULL,
    FirstName NVARCHAR(50) NOT NULL,
    LastName NVARCHAR(50) NOT NULL,
    Faculty NVARCHAR(50) NOT NULL,
    Major NVARCHAR(50) NOT NULL,
    YearLevel INT NOT NULL,
    Email VARCHAR(50),
    PhoneNumber VARCHAR(15),
    UserRole VARCHAR(30) NOT NULL
);

-- ข้อมูลทดสอบ (password เป็น 'password' ที่ hash ด้วย MD5 = 5f4dcc3b5aa765d61d8327deb882cf99)
INSERT INTO Student (StdID, Username, Password, FirstName, LastName, Faculty, Major, YearLevel, UserRole) 
VALUES 
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'แอดมิน', 'ทดสอบ', 'เทคโนโลยีสารสนเทศ', 'ระบบสารสนเทศ', 4, 'Admin'),
(2, 'officer', '5f4dcc3b5aa765d61d8327deb882cf99', 'เจ้าหน้าที่', 'กิจกรรม', 'เทคโนโลยีสารสนเทศ', 'ระบบสารสนเทศ', 3, 'Officer'),
(3, 'member', '5f4dcc3b5aa765d61d8327deb882cf99', 'สมาชิก', 'ทั่วไป', 'เทคโนโลยีสารสนเทศ', 'ระบบสารสนเทศ', 2, 'Member');