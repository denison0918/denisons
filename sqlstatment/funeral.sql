/*  
	전국 도・도시별 인구순위 기준 우선순위 등록
	CITY SQL LOG
*/

insert into city values('','서울특별시');
insert into city values('','부산광역시');
insert into city values('','인천광역시');
insert into city values('','대구광역시');
insert into city values('','대전광역시');
insert into city values('','광주광역시');
insert into city values('','울산광역시');
insert into city values('','세종특별자치시');
insert into city values('','경기도');
insert into city values('','강원도');
insert into city values('','충청북도');
insert into city values('','충청남도');
insert into city values('','경상북도');
insert into city values('','경상남도');
insert into city values('','제주특별자치도');
insert into city values('','전라남도');


/*
	ADDRESS SQL LOG	
*/

insert into address values('',3,'계양구 계양문화로 142','초정마을 두산아파트 301동 1101호','21064','010-8715-6502');
insert into address values('',3,'남동구 남동대로774번길 21','(구월동)','21565','032-460-3444');
insert into address values('',3,'중구 인항로 27','(신흥동 3가 7-206)','22332','032-890-3190');
insert into address values('',1,'중구 저동2가 85','','','02-2270-0114');
insert into address values('',1,'성북구 안암로 145','','','02-923-4442');
insert into address values('',1,'동대문구 망우로 82','(휘경2동 29-1)','','02-2215-4444');
insert into address values('',1,'종로구 연건동','','','02-2072-2010');

/*
	STAFF SQL LOG	
*/

insert into staff values('','김태홍','1234','1',1,1);


/*
	
	FUNERAL SQL LOG	
*/

insert into funeral values('','길병원',37.4519988,126.7097573,2,1,0);
insert into funeral values('','인하대병원',37.4588197,126.6319232,3,1,0);
insert into funeral values('','서울백병원',37.5650801,126.9888096,4,1,0);
insert into funeral values('','삼육의료원추모관',37.5882601,127.0635699,6,1,0);
insert into funeral values('','고려대안암병원',37.5892756,127.0259035,5,1,0);
insert into funeral values('','서울대병원',37.5809153,126.9969141,7,1,0);


/*
	DEAD SQL LOG	
	
*/

INSERT INTO `dead` (`dead_id`, `name`, `birthday`, `deathday`, `picture`, `funeral_indoor`, `burial_indoor`, `funeral_id`, `burial_id`, `coffin`, `flowerCnt`, `visitorCnt`, `templates_id`)
VALUES
	(1, '권리세', '19910816', '20140907', 'krs4.jpg', '1층 105분향실', '故 권리세', 5, NULL, '2014-09-09 09:00:00', 94, 255,default),
	(2, '김광한', '19461109', '20150709', 'kkh3.jpg', '2층 203분향실', '故 김광한', 4, NULL, '2015-07-11 10:00:00', 7, 85,default),
	(3, '임홍식', '', '20151119', 'lhs1.jpg', '3층 302분향실', '故 임홍식', 3, 1, '2015-11-23 08:00:00', 123, 95,default),
	(4, '김영삼', '19271220', '20151122', 'kys1.jpg', '1・2호실', '故 김영삼', 6, NULL, '2015-11-26 10:00:00', 322, 149,default),
	(6, '홍길동', '20110101', '20140101', 'test1.png', '1층 특실', '', 7, NULL, '0000-00-00 00:00:00', 3, 10,default),
	(7, '홍길동', '20110101', '20150101', 'test2.png', '3층 302분향실', '', 4, NULL, '2016-11-11 01:01:01', 0, 8,default),
	(8, '홍길동', '19990101', '20160101', 'test3.png', '1층 N실', '', 8, NULL, '2016-11-11 02:02:02', 0, 3,default);



select * from dead order by deathday desc limit 6;

/*
	FUNERAL PAGE JOIN STATEMENT
*/

select dead.name,dead.picture,dead.address_indoor,
funeral.name as funeral,funeral.lat,funeral.lng,
address.address1,address.address2,
city.city 
from dead  
join funeral on dead.funeral_id = funeral.funeral_id 
join address on funeral.address_id = address.address_id 
join city on address.city_id = city.city_id 
where dead_id = 1;


/* 
	VIEW LOG
*/


CREATE VIEW `funerals` AS
SELECT dead.dead_id as id,
 dead.name as name,
 dead.picture as picture,
 dead.funeral_indoor as address3,
 funeral.name as funeral,
 funeral.lat as lat,
 funeral.lng as lng,
 address.address1 as address1,
 address.address2 as address2
 ,city.city as city
from dead  
join funeral on dead.funeral_id = funeral.funeral_id 
join address on funeral.address_id = address.address_id 
join city on address.city_id = city.city_id;



CREATE VIEW `cherish` AS
SELECT dead.dead_id as id,
 dead.name as name,
 dead.picture as picture,
 dead.funeral_indoor as address3,
 funerals.name as funeral,
 funerals.lat as lat,
 funerals.lng as lng,
 address.address1 as address1,
 address.address2 as address2,
 city.city as city
from dead  
join funeral on dead.funeral_id = funeral.funeral_id 
join address on funeral.address_id = address.address_id 
join city on address.city_id = city.city_id;




CREATE VIEW `deads` AS
SELECT dead.dead_id as id,
 dead.name as name,
 dead.deathday as deathday
from dead

CREATE VIEW `counter` AS
SELECT dead.dead_id as id,
 count(letters.letter_id) as letterCnt,
 flowerCnt,
 visitorCnt
from dead
join letters on letters.dead_id = dead.dead_id group by dead.dead_id


select count(*) as count from(select letter_id from letter where dead_id = 2 group by content, date(writedate)) as count;



CREATE VIEW `cherish3` AS
SELECT  dead.dead_id as id,
 dead.name as name,
 dead.picture as picture,
ifnull(dead.burial_indoor, dead.funeral_indoor) as address3,
ifnull(if(coffin < now(), burials.name, funeral.name),funeral.name) as location,
ifnull(if(coffin < now(), burials.lat, funeral.lat),funeral.lat) as lat,
ifnull(if(coffin < now(), burials.lng, funeral.lng),funeral.lng) as lng,
 address.address1 as address1,
 address.address2 as address2,
 city.city as city,
 dead.coffin
from dead
left join burials on dead.burial_id = burials.burial_id
inner join funeral on dead.funeral_id = funeral.funeral_id
inner join address on burials.address_id = address.address_id or funeral.address_id = address.address_id
join city on address.city_id = city.city_id where dead.burial_id is null or burials.address_id = address.address_id



/* cherish view + templates */

SELECT  dead.dead_id as id,
 dead.name as name,
 dead.picture as picture,
ifnull(dead.burial_indoor, dead.funeral_indoor) as address3,
ifnull(if(coffin < now(), burials.name, funeral.name),funeral.name) as location,
ifnull(if(coffin < now(), burials.lat, funeral.lat),funeral.lat) as lat,
ifnull(if(coffin < now(), burials.lng, funeral.lng),funeral.lng) as lng,
 address.address1 as address1,
 address.address2 as address2,
 city.city as city,
 dead.coffin,
 ifnull(templates.img, NULL) as template
from dead
left join burials on dead.burial_id = burials.burial_id
left join templates on dead.template_id = templates.template_id
inner join funeral on dead.funeral_id = funeral.funeral_id
inner join address on burials.address_id = address.address_id or funeral.address_id = address.address_id
join city on address.city_id = city.city_id where dead.burial_id is null or burials.address_id = address.address_id




/*
	USER SQL LOG	
*/

insert into user values('','abc@naver.com',password('1234'),'홍길동','20150101',now(),'010-0000-0000');




/*
	SEARCH SQL LOG	
*/

select * from dead where name like '%한%' or deathday like '%15%';

/*
	LETTER SQL LOG	
*/

select * from letter where dead_id = '1' order by letter_id desc limit 3 offset 3;


