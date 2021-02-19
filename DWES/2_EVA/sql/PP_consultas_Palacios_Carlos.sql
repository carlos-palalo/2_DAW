/******************************************************************************/
/******** Proyecto Personal. Consultas - Carlos Palacios Alonso 1º DAW ********/
/******************************************************************************/

/* He modificado el script original y añadido alguans tuplas para poder hacer */
/* las consultas */

/* 1.- Mostrar el cod de los programadores, nombre, y sueldo de aquellos que */
/* están en el equipo "AZUL" redondeando a unidades */

SELECT TO_CHAR(COD_EMPL,'FM90') "COD", 
	   NOMBRE, 
	   TO_CHAR(ROUND(SUELDO),'FM9999L') "SUELDO" 
FROM EMPLEADO, PROGRAMADOR
WHERE COD_EMPL=COD_PROG 
	  AND COD_EQUIP=(SELECT COD_EQUIPO 
			  		FROM EQUIPO
			  		WHERE NOMBRE='AZUL');

/* 2.- Mostrar el código, nombre y sueldo medio de los programadores por */
/* equipos truncando a centenas */

SELECT TO_CHAR(EQ.COD_EQUIPO,'FM9') "COD", 
	   EQ.NOMBRE, 
	   TO_CHAR(TRUNC(AVG(SUELDO),-2),'9999L') AS "SALARIO MEDIO" 
FROM EMPLEADO E, PROGRAMADOR P,ENCARGADO EN, EQUIPO EQ
WHERE E.COD_EMPL=P.COD_PROG 
	  AND P.COD_EQUIP=EQ.COD_EQUIPO
GROUP BY EQ.COD_EQUIPO, EQ.NOMBRE
ORDER BY EQ.COD_EQUIPO;

/* 3.- Ver el código de proyecto, nombre y fecha en la que se encargó del */
/* proyecto o proyectos que halla encargado el cliente "TAFISA SA" */

SELECT TO_CHAR(COD_PROY,'FM9') "COD", 
	   NOMBRE, 
	   TO_CHAR(FECHA_INI,'"El "day dd" de" month"de" yyyy') "FECHA INICIO"
FROM PROYECTO
WHERE COD_CLI=(SELECT COD_CLIENTE 
	  		  FROM CLIENTE 
			  WHERE NOMBRE='TAFISA SA');

/* 4.- Mostrar el puesto, el sueldo medio de ese puesto y nº de empleados redondeando */
/* a decenas */

SELECT PUESTO, 
	   TO_CHAR(ROUND(AVG(SUELDO),-1),'9999L') AS "SUELDO MEDIO", 
	   TO_CHAR(COUNT(SUELDO),'FM90') AS "Nº EMPLEADOS" 
FROM EMPLEADO
GROUP BY PUESTO;

/* 5.- Mostrar el código de empleado, nombre y longitud del nombre de los empleados */
/* que son encargados y el sueldo sea mayor o igual que la media de los encargados */

SELECT TO_CHAR(COD_EMPL,'FM90') AS "COD", 
	   NOMBRE, 
	   TO_CHAR(LENGTH(NOMBRE),'FM90') AS "LONG", 
	   PUESTO, 
	   TO_CHAR(SUELDO,'9999D99L') "SUELDO" 
FROM EMPLEADO
WHERE PUESTO='Encargado'
AND SUELDO>=(SELECT AVG(SUELDO) 
		    FROM EMPLEADO 
			WHERE PUESTO='Encargado');

/* 6.- Mostrar el código, nombre y nº programadores que tiene cada equipo, mostrar también */
/* aunque no tenga ninguno. */

SELECT TO_CHAR(E.COD_EQUIPO,'FM90') "COD", 
	   E.NOMBRE, 
	   TO_CHAR(COUNT(P.COD_EQUIP),'FM90') "Nº EMPL" 
FROM EQUIPO E LEFT JOIN PROGRAMADOR P
ON E.COD_EQUIPO = P.COD_EQUIP
GROUP BY E.COD_EQUIPO, E.NOMBRE
ORDER BY E.COD_EQUIPO;

/* 7.- Mostrar el código de empleado, dni y nombre de los programadores que no pertenezcan */
/* a ningún equipo. He insertado nuevas tuplas para poder hacer esta consulta */

SELECT TO_CHAR(EM.COD_EMPL,'FM90') "COD", 
	   EM.DNI, 
	   EM.NOMBRE
FROM PROGRAMADOR P, EMPLEADO EM
WHERE NOT EXISTS (SELECT * FROM EQUIPO E
	  	  		 WHERE E.COD_EQUIPO = P.COD_EQUIP)
AND EM.COD_EMPL = P.COD_PROG;

/* 8.- Mostrar la suma de los sueldos de los programadores por equipo */

SELECT TO_CHAR(EQ.COD_EQUIPO,'FM9') "COD", 
	   EQ.NOMBRE, 
	   TO_CHAR(SUM(SUELDO),'9999D99L') AS "SUMA SUELDOS" 
FROM EMPLEADO E, PROGRAMADOR P, EQUIPO EQ
WHERE E.COD_EMPL=P.COD_PROG 
	  AND P.COD_EQUIP=EQ.COD_EQUIPO
GROUP BY EQ.COD_EQUIPO, EQ.NOMBRE
ORDER BY EQ.COD_EQUIPO;

/* 9.- Mostrar el nombre y el sueldo del encargado que cobre menos */

SELECT NOMBRE, 
	   TO_CHAR(SUELDO,'FM9999D99L') AS "SUELDO"
FROM EMPLEADO
WHERE SUELDO=(SELECT MIN(SUELDO) 
	  		 FROM EMPLEADO E, ENCARGADO EN
	  		 WHERE E.COD_EMPL=EN.COD_ENC);
			 
/* 10.- Calcular el nº total de empleados y el nº total de encargados en una misma consulta */

SELECT TO_CHAR(COUNT(EMPLEADO.COD_EMPL),'FM90') AS "NumTotalEmpleados", 
	   TO_CHAR(ENCARGADOS.NumTotalEncargados,'FM90') AS "NumTotalEncargados"
FROM EMPLEADO, (SELECT COUNT(E.COD_EMPL) AS NumTotalEncargados
	 		   FROM EMPLEADO E, ENCARGADO EN
			   WHERE E.COD_EMPL=EN.COD_ENC) ENCARGADOS
GROUP BY ENCARGADOS.NumTotalEncargados;
