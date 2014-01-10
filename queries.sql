create table body (
  edition ENUM('Peer Reviewer', 'Editorial Board', 'Editorial Advisory Board'),
  quarter ENUM('Winter', 'Spring', 'Summer', 'Fall'),
  `year` YEAR(4),
  lead_in TEXT,
  kicker TEXT,
  headline TEXT,
  main TEXT,
  foreign key (edition) references meta(edition) on delete set null,
  foreign key (quarter) references meta(quarter) on delete set null,
  foreign key (`year`) references meta(`year`) on delete set null
) engine InnoDB CHARSET=utf8 

CREATE TABLE meta (
  edition ENUM('Peer Reviewer', 'Editorial Board', 'Editorial Advisory Board') NOT NULL,
  quarter ENUM('Winter', 'Spring', 'Summer', 'Fall') NOT NULL,
  `year` YEAR(4) NOT NULL,
  id MEDIUMINT NOT NULL AUTO_INCREMENT,
  unique (edition, quarter, `year`),
  PRIMARY KEY(id)
) engine=InnoDB CHARSET=utf8 

CREATE TABLE animals (
    grp ENUM('fish','mammal','bird') NOT NULL,
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    name CHAR(30) NOT NULL,
    PRIMARY KEY (grp,id)
) ENGINE=MyISAM;


alter table meta 
  add column (id INT NOT NULL AUTO_INCREMENT)

CREATE TABLE meta (
  id INT NOT NULL AUTO_INCREMENT,
  edition ENUM('Peer Reviewer', 'Editorial Board', 'Editorial Advisory Board'),
  quarter ENUM('Winter', 'Spring', 'Summer', 'Fall'),
  `year` YEAR(4),
  PRIMARY KEY(id, edition, quarter, year)
) engine InnoDB CHARSET=utf8 AUTO_INCREMENT=5
