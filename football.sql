/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     08/06/2017 09.58.31                          */
/*==============================================================*/


drop table if exists CLUB;

drop table if exists FORMASI;

drop table if exists LOGO;

drop table if exists PEMAIN;

drop table if exists PERTANDINGAN;

drop table if exists STATISTIK;

/*==============================================================*/
/* Table: CLUB                                                  */
/*==============================================================*/
create table CLUB
(
   ID_CLUB              int not null,
   ID_FORMASI           int,
   ID_LOGO              varchar(12),
   NAMA_CLUB            varchar(30) not null,
   primary key (ID_CLUB)
);

/*==============================================================*/
/* Table: FORMASI                                               */
/*==============================================================*/
create table FORMASI
(
   ID_FORMASI           int not null,
   BELAKANG             int not null,
   TENGAH               int not null,
   DEPAN                int not null,
   primary key (ID_FORMASI)
);

/*==============================================================*/
/* Table: LOGO                                                  */
/*==============================================================*/
create table LOGO
(
   ID_LOGO              varchar(12) not null,
   ID_CLUB              int,
   NAMAFILE             varchar(100),
   SIZEFILE             int,
   TIPEFILE             varchar(20),
   primary key (ID_LOGO)
);

/*==============================================================*/
/* Table: PEMAIN                                                */
/*==============================================================*/
create table PEMAIN
(
   ID_PEMAIN            varchar(12) not null,
   ID_CLUB              int,
   NAMA_PEMAIN          varchar(50) not null,
   NO_PUNGGUNG          int not null,
   POSISI               char(3) not null,
   primary key (ID_PEMAIN)
);

/*==============================================================*/
/* Table: PERTANDINGAN                                          */
/*==============================================================*/
create table PERTANDINGAN
(
   ID_PERTANDIGAN       int not null,
   NAMA_PERTANDINGAN    varchar(30) not null,
   NAMA_STADION         varchar(20) not null,
   TANGGAL_PERTANDINGAN date not null,
   primary key (ID_PERTANDIGAN)
);

/*==============================================================*/
/* Table: STATISTIK                                             */
/*==============================================================*/
create table STATISTIK
(
   ID_CLUB              int not null,
   ID_PERTANDIGAN       int not null,
   STATUS               char(4),
   SCORES               int not null,
   POSSESION            int not null,
   SHOTS                int not null,
   FOULS                int not null,
   CORNER_KICKS         int not null,
   FREE_KICKS           int not null,
   PASS_COMPLETED       int not null,
   CROSSES              int not null,
   INTERCEPTIONS        int not null,
   TACKLES              int not null,
   SAVE                 int not null,
   primary key (ID_CLUB, ID_PERTANDIGAN)
);

alter table CLUB add constraint FK_MEMPUNYAI foreign key (ID_FORMASI)
      references FORMASI (ID_FORMASI) on delete restrict on update restrict;

alter table CLUB add constraint FK_RELATIONSHIP_6 foreign key (ID_LOGO)
      references LOGO (ID_LOGO) on delete restrict on update restrict;

alter table LOGO add constraint FK_RELATIONSHIP_5 foreign key (ID_CLUB)
      references CLUB (ID_CLUB) on delete restrict on update restrict;

alter table PEMAIN add constraint FK_MEMILIKI foreign key (ID_CLUB)
      references CLUB (ID_CLUB) on delete set null on update restrict;

alter table STATISTIK add constraint FK_RELATIONSHIP_3 foreign key (ID_CLUB)
      references CLUB (ID_CLUB) on delete restrict on update restrict;

alter table STATISTIK add constraint FK_RELATIONSHIP_4 foreign key (ID_PERTANDIGAN)
      references PERTANDINGAN (ID_PERTANDIGAN) on delete restrict on update restrict;

