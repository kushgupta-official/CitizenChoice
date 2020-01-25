<Updated on 27 July, 2019> <change in user table>

-logout.php will be linked with logout button presently not linked anywhere

-in db citizen_choice
	--query-
CREATE TABLE `articles` (
 `web_id` int(10) NOT NULL AUTO_INCREMENT,
 `postid` int(10) NOT NULL,
 `username` varchar(20) NOT NULL,
 `category` varchar(10) NOT NULL,
 `heading` text NOT NULL,
 `content` longtext NOT NULL,
 `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `img_src` varchar(200) DEFAULT NULL,
 `youtube_link` varchar(100) DEFAULT NULL,
 PRIMARY KEY (`web_id`)
) 

CREATE TABLE `user` (
  
`user-id` int(10) NOT NULL AUTO_INCREMENT,
  
`first_name` varchar(100) NOT NULL,
  
`last_name` varchar(100) NOT NULL,
  
`profession` varchar(100) DEFAULT NULL,
  
`mob_no` varchar(100) DEFAULT NULL,
  
`email` varchar(100) NOT NULL,
  
`photo` varchar(100) DEFAULT NULL,
  
`username` varchar(100) NOT NULL,
  
`password` varchar(100) NOT NULL,
  
`Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  
PRIMARY KEY (`user-id`)

)

CREATE TABLE `user_session` (
  
`user-id` int(10) NOT NULL,
  
`username` varchar(100) NOT NULL,
  
`login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)

CREATE TABLE `all_articles` (
 `web_id` int(10) NOT NULL auto_increment,
 `postid` int(10) NOT NULL,
 `username` varchar(20) NOT NULL,
 `category` varchar(10) NOT NULL,
 `heading` text NOT NULL,
 `content` longtext NOT NULL,
 `Time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
 `img_src` varchar(200) default NULL,
 `youtube_link` varchar(100) default NULL,
 PRIMARY KEY  (`web_id`)
) 

-create another database citizen_choice_articles
-create a file named 'uploads' where there is post.php saved

#image storing flowchart
-citizen_choice>resource>users>userid>profile>photos
	                       >posts>post_id>images>photos
		
- create folder resource
   -- under this make folder users

*create another table "all_articles " that will store each entry whether edit or post