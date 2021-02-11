DROP TABLE IF EXISTS vacunas;

CREATE TABLE vacunas(
id 					INT AUTO_INCREMENT PRIMARY KEY,
comunidad 			VARCHAR(45) NOT NULL,
pzifer 				INT,
moderna 			INT,
dosis_administradas 	INT NOT NULL,
pauta_Completa 		INT NOT NULL,
fecha_Ult_Vacuna 		DATE NOT NULL
);

INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosis_administradas, pauta_Completa, fecha_Ult_Vacuna) VALUES
("Andalucía", 244620, 6800, 194101, 15193, "2021-01-20"),
("Aragón",41265,1200,38170,1731,"2021-01-21"),
("Asturias",44195,1200,40011,5664,"2021-01-21"),
("Baleares",22590,600,18105,1514,"2021-01-20"),
("Canarias",46185,1300,45482,1744,"2021-01-20"),
("Cantabria",20625,500,19980,241,"2021-01-20"),
("Castilla y Leon",93315,2500,82162,5296,"2021-01-20"),
("Castilla La Mancha",61875,1700,53880,1202,"2021-01-20"),
("Cataluña",211220,5800,168054,2598,"2021-01-20"),
("C. Valenciana",109000,2900,101437,2956,"2021-01-20"),
("Extremadura",39275,1000,32039,638,"2021-01-20"),
("Galicia",66805,1800,62011,3861,"2021-01-20"),
("La Rioja",11765,200,8684,267,"2021-01-21"),
("Madrid",171915,4700,142765,1738,"2021-01-20"),
("Murcia",45185,1200,40757,1784,"2021-01-21"),
("Navarra",20625,500,15754,767,"2021-01-20"),
("País Vasco",55980,1400,36864,1333,"2021-01-20"),
("Ceuta",1980,200,1545,326,"2021-01-20"),
("Melilla",1980,200,1500,203,"2021-01-20");