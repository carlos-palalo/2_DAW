/***************************************************************************************************/
/******************************* Carlos Palacios ALonso 1� DAW *************************************/
/***************************************************************************************************/


/***************************************** CONSULTA 1 **********************************************/

SELECT COUNT(DISCOS.ID) AS NUMTOTALDISCOS, ORIGINALES.NUMDISCOSORIGINALES
FROM DISCOS, (SELECT COUNT(DISCOS.ID) AS NUMDISCOSORIGINALES
	 		 FROM DISCOS
			 WHERE DISCOS.ORIGINAL=1) ORIGINALES
GROUP BY ORIGINALES.NUMDISCOSORIGINALES;

/******** EJEMPLOS APUNTES *********/

SELECT COUNT(DISCOS.ID) AS NUMTOTALDISCOS, PIRATAS.NUMDISCOSPIRATAS,
	   COUNT(DISCOS.ID) - PIRATAS.NUMDISCOSPIRATAS AS NUMDISCOSORIGINALES
FROM DISCOS, (SELECT COUNT(DISCOS.ID) AS NUMDISCOSPIRATAS
	 		 FROM DISCOS
			 WHERE DISCOS.ORIGINAL=0) PIRATAS
GROUP BY PIRATAS.NUMDISCOSPIRATAS;

SELECT COUNT(DISCOS.ID) AS NUMTOTALDISCOS, PIRATAS.NUMDISCOSPIRATAS,
	   ORIGINALES.NUMDISCOSORIGINALES
FROM DISCOS, (SELECT COUNT(DISCOS.ID) AS NUMDISCOSPIRATAS
	 		 FROM DISCOS
			 WHERE DISCOS.ORIGINAL=0) PIRATAS,
			 (SELECT COUNT(DISCOS.ID) AS NUMDISCOSORIGINALES
			 FROM DISCOS
			 WHERE DISCOS.ORIGINAL=1) ORIGINALES
GROUP BY ORIGINALES.NUMDISCOSORIGINALES, PIRATAS.NUMDISCOSPIRATAS;

/***************************************** CONSULTA 2 **********************************************/

SELECT COUNT(DISCOS.ID) AS NUMTOTALDISCOS, 
	   AUTORES.NUMTOTALARTISTAS, 
	   TIPOS.NUMTOTALESTILOS
FROM DISCOS,
	 (SELECT COUNT(ARTISTAS.ID) AS NUMTOTALARTISTAS
	  FROM ARTISTAS) AUTORES,
	 (SELECT COUNT(ESTILOS.ID) AS NUMTOTALESTILOS
	  FROM ESTILOS) TIPOS
GROUP BY TIPOS.NUMTOTALESTILOS, AUTORES.NUMTOTALARTISTAS;

/******** EJEMPLOS APUNTES *********/

SELECT COUNT(DISCOS.ID) AS NUMTOTALDISCOS, 
	   PIRATAS.NUMDISCOSPIRATAS,
	   ROUND((PIRATAS.NUMDISCOSPIRATAS/COUNT(DISCOS.ID))*100,2) AS PORCENTAJEPIRATAS
FROM DISCOS,
	 (SELECT COUNT(DISCOS.ID) AS NUMDISCOSPIRATAS
	 FROM DISCOS
	 WHERE DISCOS.ORIGINAL=0) PIRATAS
GROUP BY PIRATAS.NUMDISCOSPIRATAS;

/***************************************** CONSULTA 3 **********************************************/

SELECT COUNT(DISCOS.ID) AS NUMTOTALDISCOS, 
	   ORIGINALES.NUMDISCOSORIGINALES,
	   (ORIGINALES.NUMDISCOSORIGINALES/COUNT(DISCOS.ID))*100 AS PORCENTAJEORIGINALES
FROM DISCOS,
	 (SELECT COUNT(DISCOS.ID) AS NUMDISCOSORIGINALES
	 FROM DISCOS
	 WHERE DISCOS.ORIGINAL=1) ORIGINALES
GROUP BY ORIGINALES.NUMDISCOSORIGINALES;

/******** EJEMPLOS APUNTES *********/

SELECT COUNT(DISCOS.ID) AS NUMTOTALDISCOS, PIRATAS.NUMDISCOSPIRATAS,
	   (PIRATAS.NUMDISCOSPIRATAS/COUNT(DISCOS.ID))*100 AS PORCENTAJEPIRATAS,
	   COUNT(DISCOS.ID) - PIRATAS.NUMDISCOSPIRATAS AS NUMDISCOSORIGINALES,
	   100 - (PIRATAS.NUMDISCOSPIRATAS/COUNT(DISCOS.ID))*100 AS PORCENTAJEORIGINALES
FROM DISCOS, (SELECT COUNT(DISCOS.ID) AS NUMDISCOSPIRATAS
	 		 FROM DISCOS
			 WHERE DISCOS.ORIGINAL=0) PIRATAS
GROUP BY PIRATAS.NUMDISCOSPIRATAS;

/***************************************** CONSULTA 4 **********************************************/

SELECT COUNT(DISCOS.ID) AS NUMTOTALDISCOS,
	   PIRATAS.NUMDISCOSPIRATAS,
	   (PIRATAS.NUMDISCOSPIRATAS/COUNT(DISCOS.ID))*100 AS PORCENTAJEPIRATAS, 
	   ORIGINALES.NUMDISCOSORIGINALES,
	   (ORIGINALES.NUMDISCOSORIGINALES/COUNT(DISCOS.ID))*100 AS PORCENTAJEORIGINALES
FROM DISCOS,
	 (SELECT COUNT(DISCOS.ID) AS NUMDISCOSPIRATAS
	 FROM DISCOS
	 WHERE ORIGINAL=0) PIRATAS,
	 (SELECT COUNT(DISCOS.ID) AS NUMDISCOSORIGINALES
	 FROM DISCOS
	 WHERE DISCOS.ORIGINAL=1) ORIGINALES
GROUP BY PIRATAS.NUMDISCOSPIRATAS, ORIGINALES.NUMDISCOSORIGINALES;

/******** EJEMPLOS APUNTES *********/

SELECT ARTISTAS.PAIS, COUNT(ARTISTAS.ID) NUMARTISTAS,
	   (COUNT(ARTISTAS.ID)/A.TOTALARTISTAS)*100 AS PORCENTAJE
FROM ARTISTAS, (SELECT COUNT(ARTISTAS.ID) AS TOTALARTISTAS
	 		   FROM ARTISTAS) A
GROUP BY ARTISTAS.PAIS, A.TOTALARTISTAS;

SELECT ARTISTAS.PAIS, COUNT(ARTISTAS.ID) NUMARTISTAS,
	   ROUND((COUNT(ARTISTAS.ID)/A.TOTALARTISTAS)*100,2) AS PORCENTAJE
FROM ARTISTAS, (SELECT COUNT(ARTISTAS.ID) AS TOTALARTISTAS
	 		   FROM ARTISTAS) A
GROUP BY ARTISTAS.PAIS, A.TOTALARTISTAS;

SELECT ARTISTAS.PAIS, COUNT(ARTISTAS.ID) NUMARTISTAS,
	   TRUNC((COUNT(ARTISTAS.ID)/A.TOTALARTISTAS)*100,2) AS PORCENTAJE
FROM ARTISTAS, (SELECT COUNT(ARTISTAS.ID) AS TOTALARTISTAS
	 		   FROM ARTISTAS) A
GROUP BY ARTISTAS.PAIS, A.TOTALARTISTAS;

SELECT ESTILOS.ID, ESTILOS.NOMBRE, COUNT(DISCOS.ESTILO) AS NUMDISCOSPORESTILO,
	   (COUNT(DISCOS.ID)/TOTAL.TOTALDISCOS)*100 AS PORCENTAJE
FROM ESTILOS, DISCOS, (SELECT COUNT(DISCOS.ID) AS TOTALDISCOS
	 		  		  FROM DISCOS) TOTAL
WHERE ESTILOS.ID = DISCOS.ESTILO
GROUP BY ESTILOS.ID, ESTILOS.NOMBRE, TOTAL.TOTALDISCOS;

SELECT ESTILOS.ID, ESTILOS.NOMBRE, COUNT(DISCOS.ESTILO) AS NUMDISCOSPORESTILO,
	   (COUNT(DISCOS.ESTILO)/TOTAL.TOTALDISCOS)*100 AS PORCENTAJE
FROM ESTILOS JOIN DISCOS ON ESTILOS.ID=DISCOS.ESTILO,
	 (SELECT COUNT(DISCOS.ID) AS TOTALDISCOS
	 FROM DISCOS) TOTAL
GROUP BY ESTILOS.ID, ESTILOS.NOMBRE, TOTAL.TOTALDISCOS;

/***************************************** CONSULTA 5 **********************************************/

SELECT ARTISTAS.ID, ARTISTAS.NOMBRE, COUNT(DISCOS.ARTISTA) AS NUMDISCOSPORARTISTA,
	   ROUND((COUNT(DISCOS.ARTISTA)/TOTAL.TOTALDISCOS)*100,2) AS PORCENTAJE
FROM ARTISTAS, DISCOS, (SELECT COUNT(DISCOS.ID) AS TOTALDISCOS
	 		   		   FROM DISCOS) TOTAL
WHERE ARTISTAS.ID=DISCOS.ARTISTA
GROUP BY ARTISTAS.ID, ARTISTAS.NOMBRE, TOTAL.TOTALDISCOS
ORDER BY ARTISTAS.ID