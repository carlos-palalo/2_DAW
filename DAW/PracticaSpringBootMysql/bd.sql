DROP TABLE IF EXISTS vacunas;

CREATE TABLE vacunas(
id 					INT AUTO_INCREMENT PRIMARY KEY,
comunidad 			VARCHAR(45) NOT NULL,
pzifer 				INT NOT NULL,
moderna 			INT NOT NULL,
dosisTotal 			INT NOT NULL,
dosisAdministradas 	INT NOT NULL,
pautaCompleta 		INT NOT NULL,
fechaUltVacuna 		DATE NOT NULL
);

INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Andalucía", 244620, 6800, 251420, 194101, 15193, "2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Aragón",41265,1200,42465,38170,1731,"2021-01-21");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Asturias",44195,1200,45395,40011,5664,"2021-01-21");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Baleares",22590,600,23190,18105,1514,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Canarias",46185,1300,47485,45482,1744,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Cantabria",20625,500,21125,19980,241,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Castilla y Leon",93315,2500,95815,82162,5296,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Castilla La Mancha",61875,1700,63575,53880,1202,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Cataluña",211220,5800,217020,168054,2598,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("C. Valenciana",190000,2900,111900,101437,2956,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Extremadura",39275,1000,40275,32039,638,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Galicia",66805,1800,68605,62011,3861,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("La Rioja",11795,200,11965,8684,267,"2021-01-21");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Madrid",171915,4700,176615,142765,1738,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Murcia",45185,1200,46385,40757,1784,"2021-01-21");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Navarra",20625,500,21125,15754,767,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("País Vasco",55980,1400,57380,36864,1333,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Ceuta",1980,200,2180,1545,326,"2021-01-20");
INSERT INTO VACUNAS(comunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Melilla",1980,200,2180,1500,203,"2021-01-20");