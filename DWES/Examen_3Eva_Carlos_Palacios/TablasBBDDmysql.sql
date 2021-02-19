
DROP TABLE IF EXISTS VENDEDORES; 

CREATE TABLE VENDEDORES (
 IDVENDEDOR  VARCHAR(4) PRIMARY KEY,
 VNOMBRE  VARCHAR(40), 
 AREA      VARCHAR(35),
 COMISION float(10,2),
 TELEFONO VARCHAR(15),
 PAIS VARCHAR(25)
)ENGINE=InnoDB;

INSERT INTO VENDEDORES VALUES ('A007','Cenutrio','Kuala',0.15,'654354276','India');
INSERT INTO VENDEDORES VALUES ('A003','Tiburcio','Londres',0.13,'656264276','Inglaterra');
INSERT INTO VENDEDORES VALUES ('A008','Guanancio','New York',0.12,'987453276','USA');
INSERT INTO VENDEDORES VALUES ('A011','Leucoco','Kuala',0.15,'654354472','India');
INSERT INTO VENDEDORES VALUES ('A010','Sanapapurcio','Oslo',0.14,'938614276','Noruega');
INSERT INTO VENDEDORES VALUES ('A012','Lucinda','San Jose',0.12,'952964276','Costa Rica');
INSERT INTO VENDEDORES VALUES ('A005','Anderson','Berna',0.13,'937510276','Suiza');
INSERT INTO VENDEDORES VALUES ('A001','Neumococo','Kuala',0.14,'654353877','India');
INSERT INTO VENDEDORES VALUES ('A002','Makako','Paris',0.11,'724354276','Francia');
INSERT INTO VENDEDORES VALUES ('A006','Teodosio','Madrid',0.15,'685564276','España');
INSERT INTO VENDEDORES VALUES ('A004','Lumbreras','Roma',0.15,'987453886','Italia');
INSERT INTO VENDEDORES VALUES ('A009','Carmelocoton','Tokio',0.11,'664554472','Japon');
COMMIT;



DROP TABLE IF EXISTS CLIENTE; 

CREATE TABLE CLIENTE (
 IDCLIENTE    VARCHAR(6) PRIMARY KEY,
 CNOMBRE  VARCHAR(40),
 CIUDAD   VARCHAR(35),
 AREATRABAJO       VARCHAR(35) ,
 PAIS VARCHAR(20),
 CATEGORIA  tinyint,
 CUENTAPORPAGAR  float(12,2),
 TELEFONO VARCHAR(17),
 IDVENDEDOR   VARCHAR(4) NOT NULL REFERENCES VENDEDORES(IDVENDEDOR)
)ENGINE=InnoDB;

INSERT INTO CLIENTE VALUES ('C00013','Holmes','Londres','Londres','UK',2,4000,'774354276','A003');
INSERT INTO CLIENTE VALUES ('C00001','Michael','New York','New York','USA',2,6000,'774354276','A008');
INSERT INTO CLIENTE VALUES ('C00020','Albert','New York','New York','USA',3,6000,'774354276','A008');
INSERT INTO CLIENTE VALUES ('C00025','Ravindran','Bangalore','Bangalore','India',2,4000,'774354276','A011');
INSERT INTO CLIENTE VALUES ('C00024','Cook','Londres','Londres','UK',2,6000,'774354276','A006');
INSERT INTO CLIENTE VALUES ('C00015','Stuart','Londres','Londres','UK',1,11000,'774354276','A003');
INSERT INTO CLIENTE VALUES ('C00002','Bolt','New York','New York','USA',3,3000,'774354276','A008');
INSERT INTO CLIENTE VALUES ('C00018','Fleming','Brisban','Brisban','Australia',2,9000,'774354276','A005');
INSERT INTO CLIENTE VALUES ('C00021','Jacks','Brisban','Brisban','Australia',1,7000,'774354276','A005');
INSERT INTO CLIENTE VALUES ('C00019','Yearannaidu','Chennai','Chennai','India',1,7000,'774354276','A010');
INSERT INTO CLIENTE VALUES ('C00005','Sasikant','Mumbai','Mumbai','India',2,7000,'774354276','A002');
INSERT INTO CLIENTE VALUES ('C00007','Winston','Brisban','Brisban','Australia',1,9000,'774354276','A010');
INSERT INTO CLIENTE VALUES ('C00022','Karl','Torento','torento','Canada',1,9000,'774354276','A002');
INSERT INTO CLIENTE VALUES ('C00004','Shilton','Londres','Londres','UK',2,6000,'774354276','A005');
INSERT INTO CLIENTE VALUES ('C00023','Cebollez','Sanzoles','Zamora','España',3,3000,'774354276','A006');
INSERT INTO CLIENTE VALUES ('C00006','Srinivas','Bangalore','Bangalore','India',2,11000,'774354276','A004');
INSERT INTO CLIENTE VALUES ('C00010','Steven','San Jose','San Jose','USA',1,4000,'774354276','A009');
INSERT INTO CLIENTE VALUES ('C00012','Karolina','Munich','Munich','Alemania',1,5000,'774354276','A007');
INSERT INTO CLIENTE VALUES ('C00008','Martin','Torento','Torento','Canada',2,9000,'774354276','A012');
INSERT INTO CLIENTE VALUES ('C00003','Ramesh','Mumbai','Mumbai','India',3,3000,'774354276','A004');
INSERT INTO CLIENTE VALUES ('C00009','Rangarappa','Bangalore','Bangalore','India',2,5000,'774354276','A004');
INSERT INTO CLIENTE VALUES ('C00014','Pochezno','Turin','Turin','Italia',2,8000,'774354276','A002');
INSERT INTO CLIENTE VALUES ('C00016','Sundariya','Chennai','Chennai','India',3,12000,'774354276','A001');
INSERT INTO CLIENTE VALUES ('C00011','Zampabollos','Zaratan','Valladolid','España',2,7000,'774354276','A007');



DROP TABLE IF EXISTS ENCARGOS; 

CREATE TABLE ENCARGOS (
 IDENCARGO    integer(6) PRIMARY KEY,
 CANTIDAD  float(12,2),
 SEÑAL   float(12,2),
 FECHA       DATE ,
 IDCLIENTE VARCHAR(6)REFERENCES CLIENTE(IDCLIENTE),
 IDVENDEDOR   VARCHAR(4) REFERENCES VENDEDORES(IDVENDEDOR)
)ENGINE=InnoDB;



INSERT INTO ENCARGOS VALUES (200100,1000,600,'2008-08-01','C00013','A003');
INSERT INTO ENCARGOS VALUES (200110,3000,500,'2008-04-15','C00009','A010');
INSERT INTO ENCARGOS VALUES (200107,4500,900,'2008-08-30','C00007','A010');
INSERT INTO ENCARGOS VALUES (200112,2000,400,'2008-05-30','C00016','A007');
INSERT INTO ENCARGOS VALUES (200113,4000,600,'2008-06-19','C00004','A002');
INSERT INTO ENCARGOS VALUES (200102,2000,300,'2008-05-25','C00012','A012');
INSERT INTO ENCARGOS VALUES (200114,3500,2000,'2008-08-15','C00002','A008');
INSERT INTO ENCARGOS VALUES (200122,2500,400,'2008-09-16','C00003','A004');
INSERT INTO ENCARGOS VALUES (200118,500,100,'2008-07-20','C00005','A006');
INSERT INTO ENCARGOS VALUES (200119,4000,700,'2008-09-16','C00007','A010');
INSERT INTO ENCARGOS VALUES (200121,1500,600,'2008-09-23','C00008','A004');
INSERT INTO ENCARGOS VALUES (200130,2500,400,'2008-07-30','C00006','A011');
INSERT INTO ENCARGOS VALUES (200134,4200,1800,'2008-09-25','C00004','A005');
INSERT INTO ENCARGOS VALUES (200108,4000,600,'2008-02-15','C00008','A004');
INSERT INTO ENCARGOS VALUES (200103,1500,700,'2008-05-15','C00007','A005');
INSERT INTO ENCARGOS VALUES (200105,2500,500,'2008-07-18','C00001','A011');
INSERT INTO ENCARGOS VALUES (200109,3500,800,'2008-07-30','C00011','A010');
INSERT INTO ENCARGOS VALUES (200101,3000,1000,'2008-07-15','C00001','A008');
INSERT INTO ENCARGOS VALUES (200111,1000,300,'2008-07-10','C00002','A008');
INSERT INTO ENCARGOS VALUES (200104,1500,500,'2008-03-13','C00006','A004');
INSERT INTO ENCARGOS VALUES (200106,2500,700,'2008-04-20','C00005','A002');
INSERT INTO ENCARGOS VALUES (200125,2000,600,'2008-10-10','C00018','A005');
INSERT INTO ENCARGOS VALUES (200117,800,200,'2008-10-20','C00014','A001');
INSERT INTO ENCARGOS VALUES (200123,500,100,'2008-07-20','C00003','A002');


COMMIT;


DROP TABLE IF EXISTS CLIENTES2;

CREATE TABLE Clientes2 (
  CodigoCliente tinyint(2) NOT NULL,
  NombreCliente varchar(50) NOT NULL,
  NombreContacto varchar(30) DEFAULT NULL,
  ApellidoContacto varchar(30) DEFAULT NULL,
  Telefono varchar(15) NOT NULL,
  Fax varchar(15) NOT NULL,
  LineaDireccion1 varchar(50) NOT NULL,
  LineaDireccion2 varchar(50) DEFAULT NULL,
  Ciudad varchar(50) NOT NULL,
  Region varchar(50) DEFAULT NULL,
  Pais varchar(50) DEFAULT NULL,
  CodigoPostal varchar(10) DEFAULT NULL,
  CodigoEmpleadoRepVentas tinyint(2) DEFAULT NULL,
  LimiteCredito float(15,2) DEFAULT NULL
)ENGINE=InnoDB;

INSERT INTO Clientes2 VALUES (1,'DGPRODUCTIONS GARDEN','Daniel G','GoldFish','5556901745','5556901746','False Street 52 2 A',NULL,'San Francisco',NULL,'USA','24006',19,3000);
INSERT INTO Clientes2 VALUES (3,'Gardening Associates','Anne','Wright','5557410345','5557410346','Wall-e Avenue',NULL,'Miami','Miami','USA','24010',19,6000);
INSERT INTO Clientes2 VALUES (4,'Gerudo Valley','Link','Flaute','5552323129','5552323128','Oaks Avenue nº22',NULL,'New York',NULL,'USA','85495',22,12000);
INSERT INTO Clientes2 VALUES (5,'Tendo Garden','Akane','Tendo','55591233210','55591233211','Null Street nº69',NULL,'Miami',NULL,'USA','696969',22,600000);
INSERT INTO Clientes2 VALUES (6,'Lasas S.A.','Antonio','Lasas','34916540145','34914851312','C/Leganes 15',NULL,'Fuenlabrada','Madrid','España','28945',8,154310);
INSERT INTO Clientes2 VALUES (7,'Beragua','Jose','Bermejo','654987321','916549872','C/pintor segundo','Getafe','Madrid','Madrid','España','28942',11,20000);
INSERT INTO Clientes2 VALUES (8,'Club Golf Puerta del hierro','Paco','Lopez','62456810','919535678','C/sinesio delgado','Madrid','Madrid','Madrid','España','28930',11,40000);
INSERT INTO Clientes2 VALUES (9,'Naturagua','Guillermo','Rengifo','689234750','916428956','C/majadahonda','Boadilla','Madrid','Madrid','España','28947',11,32000);
INSERT INTO Clientes2 VALUES (10,'DaraDistribuciones','David','Serrano','675598001','916421756','C/azores','Fuenlabrada','Madrid','Madrid','España','28946',11,50000);
INSERT INTO Clientes2 VALUES (11,'Madrileña de riegos','Jose','Tacaño','655983045','916689215','C/Lagañas','Fuenlabrada','Madrid','Madrid','España','28943',11,20000);
INSERT INTO Clientes2 VALUES (12,'Lasas S.A.','Antonio','Lasas','34916540145','34914851312','C/Leganes 15',NULL,'Fuenlabrada','Madrid','España','28945',8,154310);
INSERT INTO Clientes2 VALUES (13,'Camunas Jardines S.L.','Pedro','Camunas','34914873241','34914871541','C/Virgenes 45','C/Princesas 2 1ºB','San Lorenzo del Escorial','Madrid','España','28145',8,16481);
INSERT INTO Clientes2 VALUES (14,'Dardena S.A.','Juan','Rodriguez','34912453217','34912484764','C/Nueva York 74',NULL,'Madrid','Madrid','España','28003',8,321000);
INSERT INTO Clientes2 VALUES (15,'Jardin de Flores','Javier','Villar','654865643','914538776','C/ Oña 34',NULL,'Madrid','Madrid','España','28950',30,40000);
INSERT INTO Clientes2 VALUES (16,'Flores Marivi','Maria','Rodriguez','666555444','912458657','C/Leganes24',NULL,'Fuenlabrada','Madrid','España','28945',5,1500);
INSERT INTO Clientes2 VALUES (17,'Flowers, S.A','Beatriz','Fernandez','698754159','978453216','C/Luis Salquillo4',NULL,'Montornes del valles','Barcelona','España','24586',5,3500);
INSERT INTO Clientes2 VALUES (18,'Naturajardin','Victoria','Cruz','612343529','916548735','Plaza Magallón 15',NULL,'Madrid','Madrid','España','28011',30,5050);
INSERT INTO Clientes2 VALUES (19,'Golf S.A.','Luis','Martinez','916458762','912354475','C/Estancado',NULL,'Santa cruz de Tenerife','Islas Canarias','España','38297',12,30000);
INSERT INTO Clientes2 VALUES (20,'AYMERICH GOLF MANAGEMENT, SL','Mario','Suarez','964493072','964493063','C/Letardo',NULL,'Barcelona','Cataluña','España','12320',12,20000);
INSERT INTO Clientes2 VALUES (21,'Aloha','Cristian','Rodrigez','916485852','914489898','C/Roman 3',NULL,'Canarias','Canarias','España','35488',12,50000);
INSERT INTO Clientes2 VALUES (22,'El Prat','Francisco','Camacho','916882323','916493211','Avenida Tibidabo',NULL,'Barcelona','Cataluña','España','12320',12,30000);
INSERT INTO Clientes2 VALUES (23,'Sotogrande','Maria','Santillana','915576622','914825645','C/Paseo del Parque',NULL,'Sotogrande','Cadiz','España','11310',12,60000);
INSERT INTO Clientes2 VALUES (24,'Vivero Humanes','Federico','Gomez','654987690','916040875','C/Miguel Echegaray 54',NULL,'Humanes','Madrid','España','28970',30,7430);
INSERT INTO Clientes2 VALUES (25,'Fuenla City','Tony','Muñoz Mena','675842139','915483754','C/Callo 52',NULL,'Fuenlabrada','Madrid','España','28574',5,4500);
INSERT INTO Clientes2 VALUES (26,'Jardines y Mansiones CACTUS SL','Eva María','Sánchez','916877445','914477777','Polígono Industrial Maspalomas, Nº52','Móstoles','Madrid','Madrid','España','29874',9,76000);
INSERT INTO Clientes2 VALUES (27,'Jardinerías Matías SL','Matías','San Martín','916544147','917897474','C/Francisco Arce, Nº44','Bustarviejo','Madrid','Madrid','España','37845',9,100500);
INSERT INTO Clientes2 VALUES (28,'Agrojardin','Benito','Lopez','675432926','916549264','C/Mar Caspio 43',NULL,'Getafe','Madrid','España','28904',30,8040);
INSERT INTO Clientes2 VALUES (29,'Top Campo','Joseluis','Sanchez','685746512','974315924','C/Ibiza 32',NULL,'Humanes','Madrid','España','28574',5,5500);
INSERT INTO Clientes2 VALUES (30,'Jardineria Sara','Sara','Marquez','675124537','912475843','C/Lima 1',NULL,'Fuenlabrada','Madrid','España','27584',5,7500);
INSERT INTO Clientes2 VALUES (31,'Campohermoso','Luis','Jimenez','645925376','916159116','C/Peru 78',NULL,'Fuenlabrada','Madrid','España','28945',30,3250);
INSERT INTO Clientes2 VALUES (32,'france telecom','FraÃ§ois','Toulou','(33)5120578961','(33)5120578961','6 place d Alleray 15Ã¨me',NULL,'Paris',NULL,'France','75010',16,10000);
INSERT INTO Clientes2 VALUES (33,'Musée du Louvre','Pierre','Delacroux','(33)0140205050','(33)0140205442','Quai du Louvre',NULL,'Paris',NULL,'France','75058',16,30000);
INSERT INTO Clientes2 VALUES (35,'Tutifruti S.A','Jacob','Jones','2 9261-2433','2 9283-1695','level 24, St. Martins Tower.-31 Market St.',NULL,'Sydney','Nueva Gales del Sur','Australia','2000',31,10000);
INSERT INTO Clientes2 VALUES (36,'FLORES S.L.','Antonio','Romero','654352981','685249700','Avenida España',NULL,'Madrid','Fuenlabrada','España','29643',18,6000);
INSERT INTO Clientes2 VALUES (37,'THE MAGIC GARDEN','Richard','Mcain','926523468','9364875882','Lihgting Park',NULL,'London','London','United Kingdom','65930',18,10000);
INSERT INTO Clientes2 VALUES (38,'El Jardin Viviente S.L','Justin','Smith','2 8005-7161','2 8005-7162','176 Cumberland Street The rocks',NULL,'Sydney','Nueva Gales del Sur','Australia','2003',31,8000);

COMMIT;


