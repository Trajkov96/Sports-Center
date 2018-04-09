insert into sportskicentar (id_sc,email,telefonski_broj,lokacija)
values(1,'sportskicentar@sportskicentar.com',071273299,'Leninova 32 , Skopje');


insert 	into korisnik (id_k,id_sc,datum_na_registracija,validnost,cena_na_usluga,ime,prezime,username,password)
	 values(1,1,'2017-01-01','2018-01-01',3000,'Martin','Trajkov','mtrajkov','mtrajkov');
insert 	into korisnik (id_k,id_sc,datum_na_registracija,validnost,cena_na_usluga,ime,prezime,"telBroj",username,password)
	 values(2,1,'2017-01-01','2018-01-01',3000,'Martin','Trajkov','071-277-122','mtrajkov','mtrajkov');
insert 	into korisnik (id_k,id_sc,datum_na_registracija,validnost,cena_na_usluga,ime,prezime,"telBroj",username,password)
	 values(3,1,'2017-01-01','2018-01-01',3000,'Jordancho','Mitev','081-277-122','jmitev','jmitev');
insert 	into korisnik (id_k,id_sc,datum_na_registracija,validnost,cena_na_usluga,ime,prezime,"telBroj",username,password)
	 values(4,1,'2017-06-01','2018-06-01',6000,'Stefan','Stefanov','071-234-122','sstefanov','sstefanov');
insert 	into korisnik (id_k,id_sc,datum_na_registracija,validnost,cena_na_usluga,ime,prezime,"telBroj",username,password)
	 values(5,1,'2017-07-01','2018-07-01',6000,'Mario','Anchevski','071-124-122','mmario','mmario');
insert 	into korisnik (id_k,id_sc,datum_na_registracija,validnost,cena_na_usluga,ime,prezime,"telBroj",username,password)
	 values(6,1,'2017-05-01','2018-05-01',6000,'Nikola','Velkovski','072-123-122','nnikola','nnikola');
insert 	into korisnik (id_k,id_sc,datum_na_registracija,validnost,cena_na_usluga,ime,prezime,"telBroj",username,password)
	 values(7,1,'2017-04-01','2018-03-01',3000,'Martin','Martinov','071-124-122','mmartin','mmartin');
	 
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(1,'Nikola','Nikolov','Ilindenska 25 , Skopje','01012000483488',18000,'nnikolov','nnikolov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(2,'Marko','Markov','Ilindenska 60 , Skopje','2103990232244',21000,'mmarkov','mmarkov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(3,'Martin','Martinov','Partizanska 23 , Skopje','01012000483412',18300,'mmartinov','mmartinov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(4,'Dragan','Draganov','Partizanska 78 , Skopje','0101200233412',21000,'ddragano','draganov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(5,'Luka','Modrich','Mak.Re 123 , Skopje','0101201233232',35000,'lluka','lluka');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(6,'Hristijan','Hristijanov','Ilindenska , Skopje','0103201233232',21000,'hhristijanov','hhristijanov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(7,'Jovan','Jovanov','JNA 343 , Skopje','0101200233232',35000,'jjovanov','jjovanov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(8,'Dejan','Dejanov','Ilindenska , Skopje','0101212333232',34000,'ddejanov','ddejanov');

insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(9,'TNikola','Nikolov','Ilindenska , Skopje','0101212333232',18000,'Tnnikolov','Tnnikolov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(10,'TStefan','Stefanov','Partizanska , Skopje','01011232333232',18000,'Tstefanov','Tstefanov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(11,'TDaniel','Danilov','Shopska , Skopje','01123212333232',18000,'Tdanilov','Tdanilov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(12,'TDarko','Darkov','8-mi Septemvri , Skopje','1101212333232',18000,'Tdarkov','Tdarkov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(13,'TStanko','Stankov','11-ti Oktomvri , Skopje','1234212333232',18000,'Tstankov','Tstankov');
insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password) 
	values(14,'TDushko','Dushkov','11-ti Oktomvri , Skopje','1212212333232',18000,'Tdushkov','Tdushkov');
	
	
insert into trener(id_v,id_s) 
	values(9,1);
insert into trener(id_v,id_s) 
	values(10,2);
insert into trener(id_v,id_s) 
	values(11,3);
insert into trener(id_v,id_s) 
	values(12,4);
insert into trener(id_v,id_s) 
	values(13,5);
insert into trener(id_v,id_s) 
	values(14,6);

	



insert into rakovoditelnaoddel(id_v)
	values(2);
insert into rakovoditelnaoddel(id_v)
	values(4);
insert into rakovoditelnaoddel(id_v)
	values(6);
insert into rakovoditelnaoddel(id_v)
	values(7);
insert into rakovoditelnaoddel(id_v)
	values(8);

insert into oddel (id_o,id_v,ime,informacii)
	values(1,2,'Спортска сала','Мултифункционална спортска сала со можност за спортување на 30-40 лица одеднаш, повеќенаменска за различни спортови кои може да се одржуваат во исто време на одвоени игралишта за фудбал, баскет, одбојка, и пинг-понг.Можност за спортување во секој период од годината со ситем за греење во зима и систем за вентилација во лето.Спецификации:Паркет од дабово дрво, АА класа, обележано за повеќе спортови.Одржување и чистење на подлогата се прави по секој одржан термин во салата.2 гардероби со капацитет за 30 лица со сопствени шкафичиња и клучеви, 2 WC, 6 туш кабини со течен сапун и топла вода 24/7.VIP гардероба за судии со сопствена туш кабина.Трибински простор со капацитет за 500 лица.Повеќенаменски семафор за следење на резлутат за првенствени натпревари во футсал, кошарка, ракомет, одбојка.Можност за изнајмување терени за спорт од правни и физички лица и закуп на терените на годишно ниво или еднократно по потреба.');
insert into oddel (id_o,id_v,ime,informacii)
	values(2,4,'Пливачки базент','Во состав на Спортскиот Центар се наоѓа и затворен базен кој е во функција во текот на целата година. Базенот располага со индивидуални и групни гардероби опремени со орманчиња, туш кабини. Во базенот е проектирана и фиксна трибина со капацитет од 450 гледачи.');
insert into oddel (id_o,id_v,ime,informacii)
	values(3,6,'Тениско игралиште','2 тениски игралишта достапни во секое време од годината.Спецификации: Игралиштето е со димензии 16м*8м (официјални натпреварувачки стандарди) на бел песок, класа АА и мрежа со можност за подесување на висината според барањето на клиентите.За користење на термините на тениските игралишта, клиентите може да ги користат гардеробите кои се наоѓаат во спортската сала:2 гардероби со капацитет за 30 лица со сопствени шкафичиња и клучеви, 2 WC, 6 туш кабини со течен сапун и топла вода 24/7');
insert into oddel (id_o,id_v,ime,informacii)
	values(4,7,'Теретана','Теретаната е опремена со врвни професионални справи за вежбање кои вклучуваат различни сегменти: кардио справи, машини за вежбање, слободни тегови и групни вежби. На членовите на фитнесс клубот им стојат на располагање нашите инструктори, стручњаци од областа на спортот и рекреацијата.');
	

insert into termin(id_t,kapacitet,detali,den,id_o)
	values(1,1,'14:00 - 15:00',1,1);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(2,1,'15:00 - 16:00',1,1);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(3,1,'16:00 - 17:00',1,1);
	
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(4,10,'08:00 - 09:00',1,2);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(5,10,'09:00 - 10:00',1,2);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(6,10,'10:00 - 11:00',1,2);
	
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(7,1,'16:00 - 18:00',1,3);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(8,1,'18:00 - 20:00',1,3);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(9,1,'20:00 - 20:00',1,3);
	
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(10,1,'10:00 - 18:00',1,4);
	
	
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(11,1,'14:00 - 15:00',2,1);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(12,1,'15:00 - 16:00',2,1);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(13,1,'16:00 - 17:00',2,1);	
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(14,10,'08:00 - 09:00',2,2);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(15,10,'09:00 - 10:00',2,2);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(16,10,'10:00 - 11:00',2,2);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(17,1,'16:00 - 18:00',2,3);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(18,1,'18:00 - 20:00',2,3);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(19,1,'20:00 - 20:00',2,3);
insert into termin(id_t,kapacitet,detali,den,id_o)
	values(20,1,'10:00 - 18:00',2,4);
	
	
insert into rekreativenkorisnik(id_k)
	values(3);
insert into rekreativenkorisnik(id_k)
	values(2);