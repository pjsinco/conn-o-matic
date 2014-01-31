-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2014 at 08:57 AM
-- Server version: 5.5.33
-- PHP Version: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rempatri_work_10rempatrick_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `thedocal_article`
--

CREATE TABLE `thedocal_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `month` enum('January','February','March','April','May','June','July','August','September','October','November','December') DEFAULT NULL,
  `yr` year(4) DEFAULT NULL,
  `blurb` text,
  `author` int(11) DEFAULT NULL,
  `editor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  KEY `editor` (`editor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `thedocal_article`
--

INSERT INTO `thedocal_article` (`id`, `title`, `created`, `modified`, `month`, `yr`, `blurb`, `author`, `editor`) VALUES
(2, 'Making best use of physician extenders', NULL, NULL, 'January', 2014, 'This article will look at how primary care physicians and other specialists use nurse practitioners, registered nurses and physician assistants in their practices. How do physicians determine the number and best mix of physician extenders to have for their practice size? ', 7, 5),
(3, 'Q&A: Dr. Hahn', 1390595598, NULL, 'January', 2014, 'Interview with Marc B. Hahn, DO, who co-chairs the Blue Ribbon Commission for the Advancement of Osteopathic Medical Education.', 7, 5),
(5, 'OMS Spotlight: "Life happens"', 1390595846, NULL, 'January', 2014, 'Sean Wyman, OMS II, and other students will write about loss and "life happening" as a medical student. Sean has pulmonary hypertension and had to take a medical leave of absence from school last year. He''s also on a waiting list for lung transplants. We''ll hear from other students who have faced down obstacles to their education.', 6, 5),
(6, 'OMS Spotlight: RowanSOM Community OMM Clinic', 1390595897, NULL, 'January', 2014, 'RowanSOM students have set up and are running a community OMM clinic. In this article, one or two students will detail the process of setting up the clinic and provide advice and tips for others who might want to do the same at their schools.', 6, 5),
(7, 'Valentine''s Day: Being married/dating in medical school', 1390595934, NULL, 'January', 2014, 'EITHER: 1. How do DOs maintain their marriages while working long hours, being on call and dealing with the stress of a demanding profession? OR: 2. You''re a single medical student. How do you make time to find someone special when you''re busy studying your brains out? And how do you let your dates know that you have limited free time and must devote a lot of time and energy to medical school?', 6, 5),
(8, 'Advanced degrees: MBA, MPH, etc.', 1390595954, NULL, 'January', 2014, 'What are some of the best advanced degrees for physicians to get? Which one might be most helpful to have in the post-ACA health care landscape?', 6, 5),
(9, 'Entering practice after one year of GME', 1390595978, NULL, 'January', 2014, 'Practicing medicine without completing a residency is legal in the vast majority of states, but is it feasible or desirable? DOs with different perspectives weigh in.', 7, 5),
(10, 'Liberty University College of Osteopathic Medicine', 1390595997, NULL, 'January', 2014, 'Part of the Christian university founded by the late Jerry Fallwell, Sr., the new college in Lynchburg, Va., will welcome its first class of students in fall 2014. School administrators and faculty discuss what sets this new school apart.', 7, 5),
(11, 'Minimizing attrition at osteopathic medical schools', 1390596012, NULL, 'January', 2014, 'Struggling osteopathic medical students share stories of how they managed to succeed in school. Faculty and staff discuss how they’ve helped students with academic difficulties.', 7, 5),
(12, 'Hero Next Door: Keith Leaphart, DO', 1390596027, NULL, 'January', 2014, 'An African-American graduate of the Philadelphia College of Osteopathic Medicine, Dr. Leaphart is an entrepreneur and civic leader in Philadelphia who started the “Man Up” initiative to help young black men develop the skills they need to pursue their professional dreams. Dr. Leaphart was recently named chairman of the Lenfest Foundation, a philanthropic organization that provides grants to help inner-city youth.', 7, 5),
(13, 'Preparing a winning residency application', 1390596055, NULL, 'January', 2014, 'Joshua Alexander, DO, MPH, the director of the integrative neurology program at the University of California San Diego, explains step by step how to put together an application package that will impress residency program directors and distinguish the applicant from other residency candidates.', 8, 7),
(14, 'Rock doc', 1390596083, NULL, 'February', 2014, 'Ted Schwartzenfeld, DO, is a top celebrity physician for metro Detroit entertainment venues. He has been treating A-list rock ''n'' roll bands and singers for 40 years. We will learn what this job is like, what the common injuries he treats are, and hear his advice for those who wish to treat celebrities.', 6, 5),
(15, 'Chronic disease management: Part 1', 1390596111, NULL, 'February', 2014, 'The first in a series on how exemplary osteopathic physicians are addressing prevalent chronic diseases, this article focuses on best practices for caring for patients who have asthma.', 7, 5),
(16, 'How osteopathic medicine crossed the Atlantic', 1390605487, NULL, 'January', 2014, 'A historical look at how A.T. Still''s precepts took root in Europe. We will talk to some of the osteopathic leaders in the UK.', 6, 5),
(17, 'Matching as a couple', 1390605567, NULL, 'February', 2014, 'Fourth-year osteopathic medical students talk about the strategies they’ve used to match as a couple and whether they worked.', 7, 5),
(18, 'Mentorship: How to find a good mentor', 1390605585, NULL, 'February', 2014, 'Story will provide several tips on ways physicians and students can seek out mentors and explore what one should look for in a mentor.', 6, 5),
(19, 'Gearing up for ICD-10', 1390605603, NULL, 'February', 2014, 'This article introduces some of the changes physicians will encounter with the new code set, which goes into effect in October.', 7, 5),
(20, 'Hero Next Door: TBD', 1390605646, NULL, 'February', 2014, 'Next entry in our "Hero Next Door" series.', 7, 5),
(21, 'Improving beside manner in world of 12-min. appointments', 1390605669, NULL, 'February', 2014, 'As physicians are pressured to fit more and more patients into their days, how do they maintain bedside manner? Has the nature of bedside manner changed over time?', 6, 5),
(22, 'Getting past a professional setback', 1390605747, NULL, 'February', 2014, 'Story will explore how physicians bounce back from getting sued, losing a job or getting demoted. Story will also provide advice.', 6, 5),
(23, 'OMS Spotlight: SOMA fundraising', 1390605777, NULL, 'March', 2014, 'Most SOMA chapters adopt a charity and raise money for it throughout the year. A SOMA member will detail some of the efforts and offer how-to tips on planning and running fundraising events.', 8, 6),
(24, 'DO Day', 1390605854, NULL, 'March', 2014, 'Story will provide a roundup of what DOs and students on Capitol Hill are discussing with their representatives and senators and detail the legislative goings-on that impact DOs the most.', 6, 5),
(25, 'How to be a good mentor', 1390605878, NULL, 'March', 2014, 'As a mentor and role model, how can you best serve your mentees? What will you yourself gain from mentoring others? This story will explore mentoring and offer advice to potential and existing mentors.', 6, 5),
(26, 'Chronic disease management: Part 2', 1390605895, NULL, 'March', 2014, 'The second in a series on how exemplary osteopathic physicians are addressing prevalent chronic diseases, this article focuses on best practices for caring for patients who have diabetes mellitus.', 7, 5),
(27, 'Profile of Dr. Orenstein', 1390605951, NULL, 'March', 2014, 'Closer look at the AOA''s new editor in chief, Dr. Orenstein.', 5, 6),
(28, 'Passionate pursuits beyond medicine', 1390605970, NULL, 'March', 2014, 'DOs discuss their serious avocations, whether flying planes, running marathons or competing in equestrian events.', 7, 5),
(29, 'What does it mean to train physicians who are practice-ready? ', 1390605987, NULL, 'March', 2014, 'This article explores more deeply some competing perspectives, such as the ACGME’s piloting of a four-year family medicine residency, which contrasts with the Blue Ribbon Commission’s proposal to combine undergraduate and graduate medical education into a continuous five-year competency-based pathway.', 7, 5),
(30, 'What medical school didn’t teach me', 1390606012, NULL, 'March', 2014, 'DOs discuss what they didn’t learn in medical school or residency that they wish they had.', 7, 5),
(31, 'Hero Next Door: TBD', 1390606041, NULL, 'March', 2014, 'Next entry in our "Hero Next Door" series', 6, 5),
(32, 'Chronic disease management: Part 3', 1390606061, NULL, 'April', 2014, 'The third in a series on how exemplary osteopathic physicians are addressing prevalent chronic diseases, this article focuses on best practices for caring for patients who have cardiovascular disease.', 7, 5),
(33, 'Best work experiences for medical students', 1390606082, NULL, 'April', 2014, 'Is it better to work as a medical scribe or a medical assistant or train to be a paramedic? DOs and osteopathic medical students discuss the jobs they feel offer the best preparation for medical school, residency and medical practice.', 7, 5),
(34, 'Dream inventions', 1390606101, NULL, 'April', 2014, 'DOs are asked what sort of innovation (device, tool, machine, garment, app, test, procedure, etc.) they would like to see developed to make their jobs easier or make them better physicians.', 7, 5),
(35, 'Hero Next Door: TBD', 1390606124, NULL, 'April', 2014, 'Next entry in our "Hero Next Door" series', 7, 5),
(36, 'Indian Health Service/DOs who work on Indian reservations', 1390606148, NULL, 'April', 2014, 'A number of DOs have spent several years working for the Indian Health Service. This article will examine what their experience was like, what they''ve learned and how the experience has helped them in their careers.', 6, 5),
(37, 'Alternative revenue sources', 1390606172, NULL, 'April', 2014, 'As DOs increasingly seek ways to make their practices financially viable, a number have turned to alternative revenue sources such as supplements and cosmetic procedures. This story will explore the ethics of alternative revenue sources in medical practices.', 5, 6),
(38, 'Mentor Q&A', 1390606207, NULL, 'April', 2014, 'In the third installment of our series on mentoring, we will have a protege interview his or her mentor.', 6, 5),
(39, 'Career advice for physicians considering academia', 1390606242, NULL, 'April', 2014, 'What''s life like for an academic? What is the pay difference vis-a-vis the difference in hours worked? With new osteopathic medical schools opening every year, DOs have ever-increasing options to switch to academia.', 6, 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `thedocal_article`
--
ALTER TABLE `thedocal_article`
  ADD CONSTRAINT `thedocal_article_ibfk_1` FOREIGN KEY (`author`) REFERENCES `thedocal_user` (`id`),
  ADD CONSTRAINT `thedocal_article_ibfk_2` FOREIGN KEY (`editor`) REFERENCES `thedocal_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         