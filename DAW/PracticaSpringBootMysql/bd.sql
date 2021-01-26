DROP TABLE IF EXISTS vacunas;

create table vacunas(
id 					INT AUTO_INCREMENT PRIMARY KEY,
nombreComunidad 	VARCHAR(45) NOT NULL,
pzifer 				INT NOT NULL,
moderna 			INT NOT NULL,
dosisTotal 			INT NOT NULL,
dosisAdministradas 	INT NOT NULL,
pautaCompleta 		INT NOT NULL,
fechaUltVacuna 		DATE NOT NULL
);

INSERT INTO VACUNAS(nombreComunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Andalucía", 244620, 6800, 251420, 194101, 15193, "2021-01-20");
INSERT INTO VACUNAS(nombreComunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Aragón",41265,1200,42465,38170,1731,"2021-01-21");
INSERT INTO VACUNAS(nombreComunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES("Asturias",44195,1200);
INSERT INTO VACUNAS(nombreComunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES();
INSERT INTO VACUNAS(nombreComunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES();
INSERT INTO VACUNAS(nombreComunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES();
INSERT INTO VACUNAS(nombreComunidad, pzifer, moderna, dosisTotal, dosisAdministradas, pautaCompleta, fechaUltVacuna) VALUES();