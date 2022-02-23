<?php
require 'Connection.php';

$create_articles = "CREATE TABLE Articles
(
	id int auto_increment,
	nadpis varchar(50) not null,
	clanok text not null,
	avatar varchar(250) null,
	date_created timestamp default current_timestamp not null,
	constraint Articles_pk
		primary key (id));
";
$create_table = $conn->query($create_articles);
?>