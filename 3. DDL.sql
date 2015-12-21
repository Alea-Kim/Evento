DROP SCHEMA IF EXISTS eventsharing;
CREATE SCHEMA IF NOT EXISTS eventsharing DEFAULT CHARACTER SET latin1 ;
USE eventsharing;

DROP TABLE IF EXISTS eventsharing.GoingStats;
DROP TABLE IF EXISTS eventsharing.RegularAccounts;
DROP TABLE IF EXISTS eventsharing.Organizations;
DROP TABLE IF EXISTS eventsharing.Events;
DROP TABLE IF EXISTS eventsharing.Subscriptions;

-- REG ACCOUNT
CREATE TABLE eventsharing.RegularAccounts
(AccountID INT NOT NULL AUTO_INCREMENT,
UserName VARCHAR(16) NOT NULL,
LastName VARCHAR(30) NULL,
FirstName VARCHAR(30) NULL,
MiddleName VARCHAR(5) NULL,
Email VARCHAR(30) NULL,
Password VARCHAR(20) NULL,
Phone VARCHAR(24) NULL,
PRIMARY KEY (AccountID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


-- ORG ACCOUNT
CREATE TABLE eventsharing.Organizations
(OrgID INT NOT NULL AUTO_INCREMENT,
OrgUserName VARCHAR(16) NOT NULL,
OrgFullName VARCHAR(50) NOT NULL,
Email VARCHAR(30) NULL,
Password VARCHAR(20) NULL,
OrgDesc LONGTEXT NULL,
PRIMARY KEY (OrgID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;



-- EVENT PAGE
CREATE TABLE eventsharing.Events
(EventID INT NOT NULL AUTO_INCREMENT,
EventName VARCHAR(50) NOT NULL,
OrgID INT NOT NULL,
Tag VARCHAR(20) NULL,
Description LONGTEXT NULL,
Picture LONGBLOB NULL,
Venue VARCHAR(150) NULL,
Eventtime time NULL,
Eventdate date NULL,
PRIMARY KEY (EventID),
CONSTRAINT fk_events_event1
  FOREIGN KEY (OrgID)
  REFERENCES eventsharing.Organizations(OrgID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


-- Going Stats
CREATE TABLE eventsharing.GoingStats
(AccountID INT NOT NULL,
EventID INT NOT NULL,
PRIMARY KEY (AccountID, EventID),
CONSTRAINT fk_goingstats_account
  FOREIGN KEY (AccountID)
  REFERENCES eventsharing.RegularAccounts(AccountID),
CONSTRAINT fk_goingstats_event
  FOREIGN KEY (EventID)
  REFERENCES eventsharing.Events(EventID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


-- Subscribe
CREATE TABLE eventsharing.Subscriptions
(AccountID INT NOT NULL,
OrgID INT NOT NULL,
PRIMARY KEY (AccountID, OrgID),
CONSTRAINT fk_subscriptions_account
  FOREIGN KEY (AccountID)
  REFERENCES eventsharing.RegularAccounts(AccountID),
CONSTRAINT fk_subscriptions_org
  FOREIGN KEY (OrgID)
  REFERENCES eventsharing.Organizations(OrgID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


-- Indexing 
CREATE INDEX eventname_index  ON eventsharing.Events(EventName)

-- Values --
-- Regular Accounts
INSERT INTO RegularAccounts(UserName, LastName, FirstName, MiddleName, Email, Password, Phone) VALUES
('cams', 'Bacister', 'Camille Grace', 'M', 'bcamillegrace@gmail.com', 'a1b2c3d4e5', '09227150692');
INSERT INTO RegularAccounts(UserName, LastName, FirstName, MiddleName, Email, Password, Phone) VALUES
('mika', 'Lenon', 'Mikaela Jun', 'M', 'mika.lenon@gmail.com', 'f1g2h3i4j5', '09987654321');
INSERT INTO RegularAccounts(UserName, LastName, FirstName, MiddleName, Email, Password, Phone) VALUES
('pats', 'Caparoso', 'Patricia Ann', 'G', 'tricia.caparoso@gmail.com', 'a5b4c3d2e1', '0912345876');

-- Org Accounts
INSERT INTO Organizations(OrgUserName, OrgFullName, Email, Password, OrgDesc) VALUES
('TRICAMI', 'TRICAMI LOOOONG LOOONG', 'tricamiemail@gmail.com', 'gandanamin', 'desc dis hehe');
INSERT INTO Organizations(OrgUserName, OrgFullName, Email, Password, OrgDesc) VALUES
('SECOND', 'LongSecondOrg', 'secondemail@gmail.com', 'secondgandalang', 'second desc dis');

-- Events
INSERT INTO Events(EventName, OrgID, Description, Venue, Eventtime, Eventdate) VALUES
('FREE PAKAIN', 1, 'Unlimited Food, drinks, dessert', 'Department of Computer Science', '12:00 am', '2015-12-25');
INSERT INTO Events(EventName, OrgID, Description, Venue, Eventtime, Eventdate) VALUES
('2FREE PAKAIN', 2, '2Unlimited Food, drinks, dessert', '2Department of Computer Science', '12:00 am', '2015-12-28');

-- Going
INSERT INTO GoingStats(AccountID, EventID) VALUES(1,2);

-- Subscriptions
INSERT INTO Subscriptions (AccountID, OrgID) VALUES(1,2);
