select
from 
where


select *
from thedocal_article a inner join thedocal_works_on w
  on a.id = w.article_id

where a.author_id = (
  select id
  from thedocal_user
  where 
)

from thedocal_user u inner join thedocal

select
from thedocal_works_on w
where w.


select
from
where

insert into thedocal_works_on (role, user_id, article_id)
  values ('Author', 6, 5)


alter table thedocal_article
  change content blurb TEXT

insert into thedocal_article (title, month, yr, content)
  values(
    "Q&A: Dr. Hahn",
    "January",
    '2014',
    "Interview with Marc B. Hahn, DO, who co-chairs the Blue Ribbon Commission for the Advancement of Osteopathic Medical Education."
  )


  values(
    "Making best use of physician extenders",
    "January",
    '2014',
    "This article will look at how primary care physicians and other specialists use nurse practitioners, registered nurses and physician assistants in their practices. How do physicians determine the number and best mix of physician extenders to have for their practice size?"
  )

  values("How osteopathic medicine crossed the Atlantic", 'January', '2014', "'A historical look at how the A.T. Still's precepts took root in Europe. We will talk to some of the osteopathic leaders in the UK.")

alter table thedocal_article

insert into thedocal_user (f_name, l_name, title, email)
  values ('Patrick', 'Sinco', 'Managing Editor', 'psinco@osteopathic.org')



CREATE TABLE thedocal_article (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title varchar(256),
  created INT,
  modified INT,
  month ENUM('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
  yr YEAR(4),
  blurb TEXT,
  author INT,
  editor INT,
  foreign key (author) references thedocal_user(id),
  foreign key (editor) references thedocal_user(id)
) ENGINE InnoDB CHARSET=utf8 AUTO_INCREMENT=5

CREATE TABLE thedocal_user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(32),
  f_name VARCHAR(128),
  l_name VARCHAR(128),
  title VARCHAR(128),
  created INT,
  modified INT,
  token VARCHAR(64),
  password VARCHAR(64),
  last_login INT, 
  timezone VARCHAR(64),
  email VARCHAR(128),
  location VARCHAR(128)
) ENGINE InnoDB CHARSET=utf8 AUTO_INCREMENT=5

CREATE TABLE thedocal_works_on (
  id INT AUTO_INCREMENT PRIMARY KEY,
  role VARCHAR(128),
  user_id INT,
  article_id INT,
  FOREIGN KEY (user_id) references thedocal_user(id),
  FOREIGN KEY (article_id) references thedocal_article(id)
) ENGINE InnoDB CHARSET=utf8 AUTO_INCREMENT=5
