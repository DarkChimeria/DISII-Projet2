#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: USERS
#------------------------------------------------------------

CREATE TABLE users(
        user_id        int (11) Auto_increment  NOT NULL ,
        user_name      Varchar (25) NOT NULL ,
        user_firstname Varchar (25) NOT NULL ,
        user_birth     Date NOT NULL ,
        user_adress    Varchar (25) NOT NULL ,
        user_cp        Varchar (5) NOT NULL,
        user_city       Varchar (25) NOT NULL,
        user_phone     Int NOT NULL ,
        user_mobile    Int NOT NULL ,
        user_mail      Varchar (25) NOT NULL ,
        accountType    Varchar (3) NOT NULL ,
        user_gender    enum('M','F') NOT NULL ,
        profilPicture  Varchar (200) NOT NULL ,
        password       Varchar (12) NOT NULL ,
        usertype_id    Int NOT NULL ,
        user_dateCreation  Date NOT NULL,
        PRIMARY KEY (user_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LICENSES
#------------------------------------------------------------

CREATE TABLE licenses(
        license_id   Varchar (100) NOT NULL ,
        price        Int NOT NULL ,
        license_date Date NOT NULL ,
        paid         Bool NOT NULL ,
        user_id      Int NOT NULL ,
        PRIMARY KEY (license_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: GROUPS
#------------------------------------------------------------

CREATE TABLE groups(
        group_id           int (11) Auto_increment  NOT NULL ,
        group_name         Varchar (25) NOT NULL ,
        group_description  Varchar (200) NOT NULL ,
        activity           Varchar (25) NOT NULL ,
        group_image        Varchar (200) NOT NULL ,
        group_dateCreation Date NOT NULL ,
        PRIMARY KEY (group_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ASSOCIATION
#------------------------------------------------------------

CREATE TABLE settings(
        asso_id           int (11) Auto_increment  NOT NULL ,
        asso_name         Varchar (25) NOT NULL ,
        asso_description  Varchar (200) NOT NULL ,
        asso_mail         Varchar (25) NOT NULL ,
        asso_image        Varchar (200) NOT NULL ,
        asso_adress       Varchar (50) NOT NULL ,
        asso_mobile       Int NOT NULL ,
        asso_domainName   Varchar (25) NOT NULL ,
        asso_dateCreation Date NOT NULL ,
        rnaId             Varchar (25) NOT NULL ,
        PRIMARY KEY (asso_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: USERTYPE
#------------------------------------------------------------

CREATE TABLE usertype(
        usertype_id   int (11) Auto_increment  NOT NULL ,
        usertype_name Varchar (30) NOT NULL ,
        PRIMARY KEY (usertype_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: own
#------------------------------------------------------------

CREATE TABLE listUsersGroup(
        id_type Int (11) Auto_increment  NOT NULL ,
        user_id  Int NOT NULL ,
        group_id Int NOT NULL ,
        datestart Date NOT NULL,
        datefinish Date NOT NULL,
        PRIMARY KEY (id_type)
)ENGINE=InnoDB;

ALTER TABLE USERS ADD CONSTRAINT FK_USERS_usertype_id FOREIGN KEY (usertype_id) REFERENCES USERTYPE(usertype_id);
ALTER TABLE LICENSES ADD CONSTRAINT FK_LICENSES_user_id FOREIGN KEY (user_id) REFERENCES USERS(user_id);
ALTER TABLE listUsersGroup ADD CONSTRAINT FK_own_user_id FOREIGN KEY (user_id) REFERENCES USERS(user_id);
ALTER TABLE listUsersGroup ADD CONSTRAINT FK_own_group_id FOREIGN KEY (group_id) REFERENCES GROUPS(group_id);
