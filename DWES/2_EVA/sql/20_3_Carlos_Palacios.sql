/*******************************************************************/
/************** Carlos Palacios Alonso 1º DAW***********************/
/*******************************************************************/

/************************** EJEMPLOS *******************************/

SELECT CHR(75) 						 				   FROM DUAL;

SELECT CONCAT('El apellido es: ',APELLIDO) "Apellidos" FROM EMPLE;

SELECT LOWER(APELLIDO) 	   	   			   			   FROM EMPLE;

SELECT UPPER(APENOM)   								   FROM ALUMNOS;

SELECT INITCAP(APENOM) 								   FROM ALUMNOS;

SELECT LPAD('AAA',6,'B') 							   FROM DUAL;

SELECT RPAD('AAA',6,'B') 							   FROM DUAL;

SELECT LTRIM('           CADENA                                    ') FROM DUAL;

SELECT RTRIM('           CADENA                                    ') FROM DUAL;

SELECT REPLACE('ABECEDARIO','E','*') 						FROM DUAL;

SELECT SUBSTR('UNA FRASE CON MUCHOS CARACTERES',5,10) 		FROM DUAL;

SELECT TRANSLATE('FRASE CON MUCHAS LETRAS','AEIOU','aeiou') FROM DUAL;

SELECT ASCII('A') 				   							FROM DUAL;

SELECT INSTR('TIENE QUE ENCONTRAR LA QUINTA E','E',1,5) 	FROM DUAL;

SELECT LENGTH('LONGITUD DE UNA CADENA') 					FROM DUAL;