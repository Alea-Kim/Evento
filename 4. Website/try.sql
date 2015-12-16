DROP TABLE IF EXISTS eventsharing.GoingStats;
DROP TABLE IF EXISTS eventsharing.RegularAccounts;
DROP TABLE IF EXISTS eventsharing.Organizations;
DROP TABLE IF EXISTS eventsharing.Events;
DROP TABLE IF EXISTS eventsharing.Subscription;

-- REG ACCOUNT
CREATE TABLE eventsharing.RegularAccounts
(AccountID INT NOT NULL AUTO_INCREMENT, 
UserName VARCHAR(16) NOT NULL,
LastName VARCHAR(30) NULL, 
FirstName VARCHAR(30) NULL,
MiddleName VARCHAR(5) NULL, 
Email VARCHAR(30) NULL, 
Password VARCHAR(10) NULL,
Phone VARCHAR(24) NULL,
PRIMARY KEY (AccountID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO RegularAccounts(UserName, LastName, FirstName, MiddleName, Email, Password, Phone) VALUES 
('cams', 'Bacister', 'Camille Grace', 'M', 'bcamillegrace@gmail.com', 'a1b2c3d4e5', '09227150692');
INSERT INTO RegularAccounts(UserName, LastName, FirstName, MiddleName, Email, Password, Phone) VALUES 
('mika', 'Lenon', 'Mikaela Jun', 'M', 'mika.lenon@gmail.com', 'f1g2h3i4j5', '09987654321');
INSERT INTO RegularAccounts(UserName, LastName, FirstName, MiddleName, Email, Password, Phone) VALUES 
('pats', 'Caparoso', 'Patricia Ann', 'G', 'tricia.caparoso@gmail.com', 'a5b4c3d2e1', '0912345876');

-- ORG ACCOUNT
CREATE TABLE eventsharing.Organizations
(OrgID INT NOT NULL AUTO_INCREMENT, 
OrgName VARCHAR(15) NOT NULL, 
OrgDesc LONGTEXT NULL, 
-- OrgLogo LONGBLOB NULL, 
PRIMARY KEY (OrgID) 
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO Organizations(OrgName, OrgDesc) VALUES 
('TricamiOrg', 'desc dis hehe');

-- EVENT PAGE
CREATE TABLE eventsharing.Events
(EventID INT NOT NULL AUTO_INCREMENT, 
EventName VARCHAR(50) NOT NULL, 
OrgName VARCHAR(30) NOT NULL, 
Description LONGTEXT NULL, 
Picture LONGBLOB NULL, 
Venue VARCHAR(150) NULL, 
Eventtime time NULL,
Eventdate date NULL,
PRIMARY KEY (EventID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO Events(EventName, OrgName, Description, Venue, Eventtime, Eventdate) VALUES 
('FREE PAKAIN', 'TRICAMI', 'Unlimited Food, drinks, dessert', 'Department of Computer Science', '12:00 am', 'December 25, 2015');

-- Going Stats
CREATE TABLE eventsharing.GoingStats
(AccountID INT NOT NULL, 
EventID INT NOT NULL, 
PRIMARY KEY (AccountID, EventID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- Subscribe
CREATE TABLE eventsharing.Subscription
(AccountID INT NOT NULL, 
OrgID INT NOT NULL, 
PRIMARY KEY (AccountID, OrgID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

