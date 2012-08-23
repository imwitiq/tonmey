drop index us_name on admin;

drop table if exists admin;

drop table if exists article;

drop table if exists article_cate;

drop table if exists config;

drop table if exists developer;

drop table if exists email_send_ist;

drop table if exists flash;

drop table if exists member;

drop table if exists permission;

drop table if exists picture;

drop table if exists resource;

drop table if exists resource_type;

drop table if exists role;

drop table if exists session;

drop table if exists source;

drop table if exists system;

drop table if exists user;

drop table if exists user_rank;

drop table if exists video;

/*==============================================================*/
/* Table: admin                                                 */
/*==============================================================*/
create table admin
(
   adm_Id               int(11) not null AUTO_INCREMENT,
   adm_name             varchar(30) not null,
   adm_password         varchar(100) not null,
   adm_email            varchar(60 not null,
   adm_regtime          int(11),
   adm_last_login       int(11),
   adm_last_ip          char(10),
   adm_role_id          smallint(5),
   primary key (adm_Id)
)ENGINE =MyISAM AUTO_INCREMENT =1 DEFAULT CHARSET =utf8;





/*==============================================================*/
/* Index: us_name                                               */
/*==============================================================*/
create index us_name on admin
(
   adm_name
);

/*==============================================================*/
/* Table: role                                                  */
/*==============================================================*/
create table role
(
   role_id              smallint(5) not null AUTO_INCREMENT,
   adm_Id               int(11),
   dep_id               smallint(5),
   role_name            varchar(60) not null,
   role_action_list     text,
   primary key (role_id)
)ENGINE =MyISAM AUTO_INCREMENT =1 DEFAULT CHARSET =utf8;


/*==============================================================*/
/* Table: user_rank                                             */
/*==============================================================*/
create table user_rank
(
   rank_id              tinyint(3) not null,
   usr_id               int(11),
   rank_name            varchar(30) not null,
   min_point            int(10),
   max_point            int(10),
   discount             tinyint(3),
   show_price           tinyint(1),
   primary key (rank_id)
);


/*==============================================================*/
/* Table: user                                                  */
/*==============================================================*/
create table user
(
   usr_id               int(11) not null,
   usr_name             varchar(30) not null,
   usr_password         varchar(32) not null,
   usr_email            varchar(60,
   usr_question         varchar(255,
   usr_answer           varchar(255,
   usr_sex              tinyint,
   usr_birthday         date,
   usr_reg_time         int(11),
   usr_last_login       int(11),
   usr_last_ip          varchar(15),
   usr_rank_id          tinyint(3),
   primary key (usr_id)
);

/*==============================================================*/
/* Table: user_rank                                             */
/*==============================================================*/
create table user_rank
(
   rank_id              tinyint(3) not null,
   usr_id               int(11),
   rank_name            varchar(30) not null,
   min_point            int(10),
   max_point            int(10),
   discount             tinyint(3),
   show_price           tinyint(1),
   primary key (rank_id)
);



/*==============================================================*/
/* Table: permission                                            */
/*==============================================================*/
create table permission
(
   per_id               smallint(5) not null,
   per_name             varchar(50),
   per_list             ed>,
   primary key (per_id)
);

/*==============================================================*/
/* Table: article                                               */
/*==============================================================*/


create table article
(
   article_id            mediumint(8)  UNSIGNED AUTO_INCREMENT,
   cate_id                 smallint(5) UNSIGNED,
   user_id                 int(10),
   title                     varchar(150),
   description        varchar(255),
   content              text,
   author                varchar(30),
   author_email         varchar(60),
   is_open              tinyint(1) default 0 ,
   add_time             int(11),
   primary key (article_id),
  
	CONSTRAINT fk_cate_id FOREIGN KEY (cate_id)
	REFERENCES article_cate(cate_id)

  
);
/*==============================================================*/
/* Table: article_cate                                          */
/*==============================================================*/
create table article_cate
(
   cate_id                smallint(5) UNSIGNED AUTO_INCREMENT,
   cate_name          varchar(20),
   cate_type            tinyint(3),
   keywords             varchar(255),
   sort_order           tinyint(3),
   parent_id            smallint(5),
   PRIMARY KEY(cate_id)
);




/*==============================================================*/
/* Table: config                                                */
/*==============================================================*/
create table config
(
   id                   int)(10) not null,
   web_name             varchar(50),
   web_info             varchar(50),
   web_content          varchar(255),
   web_admin            varchar(100),
   primary key (id)
);

create table developer_type
(
    type_id  tinyint UNSIGNED AUTO_INCREMENT ,
    type_name  varchar(20),
    PRIMARY KEY(type_id)
);


/*==============================================================*/
/* Table: developer                                             */
/*==============================================================*/
create table developer
(
   dev_id                smallint(5) not null UNSIGNED AUTO_INCREMENT,
   dev_type             tinyint UNSIGNED ,
   dev_name           varchar(100),
   dev_rank             tinyint(3),
   join_time              int(11),
   primary key (dev_id),

  CONSTRIANT fk_dev_type FOREIGN KEY (dev_type)
 REFERENCES developer_type(type_id)
);

/*==============================================================*/
/* Table: email_send_ist                                        */
/*==============================================================*/
create table email_send_ist
(
   id                   mediumint(8) not null,
   email                varchar(100),
   template_id          mediumint(8),
   email_content        text,
   error                tinyint(1),
   primary key (id)
);

/*==============================================================*/
/* Table: flash                                                 */
/*==============================================================*/
create table flash
(
   fls_id               int(10) UNSIGNED AUTO_INCREMENT,
   res_id               mediumint(8) UNSIGNED,
   primary key (fls_id)
);

/*==============================================================*/
/* Table: video                                                 */
/*==============================================================*/
create table video
(
   video_id             int(10) UNSIGNED AUTO_INCREMENT,
   res_id               mediumint(8)  UNSIGNED,
   primary key (video_id)
);


/*==============================================================*/
/* Table: picture                                               */
/*==============================================================*/
create table picture
(
   pic_Id               mediumint(8) not null,
   res_id               mediumint(8),
   url                  varchar(150),
   primary key (pic_Id)
);


/*==============================================================*/
/* Table: resource_type                                         */
/*==============================================================*/
create table resource_type
(
   type_id             tinyint UNSIGNED  AUTO_INCREMENT,
   type_name            varchar(90),
   parent_id            smallint(5),
   primary key (type_id),
 
);




/*==============================================================*/
/* Table: resource                                              */
/*==============================================================*/
create table resource
(
   res_id               mediumint(8) UNSIGNED AUTO_INCREMENT ,
   res_name             varchar(100),
   res_type             tinyint UNSIGNED,
   res_url              varchar(120),
   res_add_time         int(11),
   res_usr_id           int(11),
   res_rank             tinyint(3),
   primary key (res_id),

   CONSTRAINT fk_res_type FOREIGN KEY(res_type)
   referenceS resource_type(type_id)

);




/*==============================================================*/
/* Table: session                                               */
/*==============================================================*/
create table session
(
   seskey               varchar(32) not null,
   expiry               int(10),
   user_id              int(11),
   data                 text,
   primary key (seskey)
);

/*==============================================================*/
/* Table: source                                                */
/*==============================================================*/
create table source
(
   
);

/*==============================================================*/
/* Table: system                                                */
/*==============================================================*/
create table system
(
   
);

/*==============================================================*/
/* Table: user                                                  */
/*==============================================================*/
create table user
(
   usr_id               int(11) not null,
   usr_name             varchar(30) not null,
   usr_password         varchar(32) not null,
   usr_email            varchar(60),
   usr_question         varchar(255,
   usr_answer           varchar(255,
   usr_sex              tinyint,
   usr_birthday         date,
   usr_reg_time         int(11),
   usr_last_login       int(11),
   usr_last_ip          varchar(15),
   usr_rank_id          tinyint(3),
   primary key (usr_id)
);



alter table article_cate add constraint FK_Reference_1 foreign key (article_id)
      references article (article_id) on delete restrict on update restrict;

alter table resource_type add constraint FK_type_id foreign key (res_id)
      references resource (res_id) on delete restrict on update restrict;

alter table role add constraint FK_rank_id foreign key (dep_id)
      references developer (dep_id) on delete restrict on update restrict;

alter table role add constraint FK_role_id foreign key (adm_Id)
      references admin (adm_Id) on delete restrict on update restrict;

alter table user_rank add constraint FK_rank_id foreign key (usr_id)
      references user (usr_id) on delete restrict on update restrict;


