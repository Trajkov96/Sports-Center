create table SportskiCentar(
	id_sc int primary key,
	email varchar,
	telefonski_broj int,
	lokacija varchar
);

create table Oddel(
id_o int primary key,
id_v int references RakovoditelNaOddel(id_v)
);


create table WebSite(
web_adresa varchar primary key
);

create table Kalendar(id_ka int primary key,
raspored varchar
);

create table Sportovi(id_s int primary key,
id_o int references Oddel(id_o),
sportovi varchar
);
		
create table Korisnik(id_k int primary key,
id_sc int references SportskiCentar(id_sc),
ime varchar, 
prezime varchar,
datum_na_registracija date,
validnost date,
cena_na_usluga int
);

	create table RekreativenKorisnik(id_k int primary key references Korisnik(id_k));
	
	create table ProfesionalenKorisnik(id_k int primary key references Korisnik(id_k));
	
	
	
create table Vraboteni(id_v int primary key,
	ime varchar,
	prezime varchar,
	adresa varchar,
	EMBG int[13],
	plata int
);
	create table Owner(
		id_v int primary key references Vraboteni(id_v),
		id_sc int references SportskiCentar(id_sc),
		sopstvenost_vo_procenti int[3]
	);
	
	create table RakovoditelNaOddel(
		id_v int primary key references Vraboteni(id_v)
	);
	
	create table OrganizaciskiMenadzer(
		id_v int primary key references Vraboteni(id_v) 
	);
	
	create table Trener(
		id_v int primary key references Vraboteni(id_v),
		sport varchar
	);
	
	create table Trener(
		id_v int primary key references Vraboteni(id_v),
		id_s int references sportovi(id_s),
		sport varchar;
	)
	
	create table Termin (
	id_t integer primary key,
	kapacitet integer
	);

create table go_koristi(
	id_o int references Oddel(id_o),
	id_k int references RekreativenKorisnik(id_k),
	constraint pk_goKoristi primary key (id_o,id_k)
);

create table drzi_chasovi(
	id_o int references Oddel(id_o),
	id_k int references ProfesionalenKorisnik(id_k),
	id_v int references Trener(id_v),
	constraint pk_drziChasovi primary key(id_o,id_k,id_v)
);



create table ja_proveri_registracijata(
	id_v int references Vraboteni(id_v),
	id_k int  references Korisnik(id_k),
	constraint pk_jaProveri primary key (id_v,id_k)
);

create table sportuva(	
	id_s int references Sportovi(id_s),
	id_k int references ProfesionalenKorisnik(id_k),
	constraint pk_sportuva primary key (id_s,id_k)
);

create table goGleda(	
	id_k int references Korisnik(id_k),
	id_ka int references Kalendar(id_ka),
	constraint pk_goGleda primary key (id_k,id_ka)
);

create table ePrikazan(	
	web_adresa varchar references website(web_adresa),
	id_ka int references Kalendar(id_ka),
	constraint pk_ePrikazan primary key (web_adresa,id_ka)
);

create table Zakazuva(
id_t integer references Termin(id_t),
id_o integer references Oddel(id_o) ,
id_k integer references rekreativenkorisnik (id_k),
constraint pk_Zakazuva primary key (id_t,id_o,id_k)
);

create table Vnesuva(
id_t integer references Termin(id_t),
id_ka integer references Kalendar(id_ka),
constraint pk_Vnesuva primary key (id_t,id_ka)
);

create table seSostoi(
id_o integer references Oddel(id_o),
id_sc integer references sportskicentar(id_sc),
constraint pk_seSostoi primary key (id_o,id_sc)
);

create table Regulira(
id_v integer references organizaciskimenadzer(id_v),
id_t integer references Termin(id_t),
constraint pk_Regulira primary key (id_v,id_t)
);