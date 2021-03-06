/*****************************************************/
/*********** Carlos Palacios Alonso 1� DAW ***********/
/*****************************************************/

/********************* Ejemplos **********************/

SELECT AVG(SALARIO)      "SALARIO MEDIO"  	FROM EMPLE;

SELECT COUNT(*) 		 "N� EMPLEADOS" 	FROM EMPLE;

SELECT MAX(SALARIO) 	 "SALARIO MAX" 		FROM EMPLE;

SELECT MIN(SALARIO) 	 "SALARIO MIN" 		FROM EMPLE;

SELECT SUM(SALARIO) 	 "SUMA TOTAL" 		FROM EMPLE;

SELECT VARIANCE(SALARIO) "VARIANZA" 		FROM EMPLE;

SELECT COUNT(OFICIO) 	      "N� OFICIOS" 	FROM EMPLE;
SELECT COUNT(DISTINCT OFICIO) "N� OFICIOS"  FROM EMPLE;
SELECT COUNT(ALL OFICIO) 	  "N� OFICIOS" 	FROM EMPLE;

SELECT NOMBRE_ALUMNO 		  	     "NOMBRE",
	   GREATEST(NOTA1,NOTA2,NOTA3)   "MAYOR",
	   LEAST(NOTA1,NOTA2,NOTA3) 	 "MENOR"
FROM NOTAS_ALUMNOS;