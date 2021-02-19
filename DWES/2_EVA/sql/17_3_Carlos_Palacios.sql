/***************************************************/
/********** Carlos Palacios Alons 1º DAW ***********/
/***************************************************/

/**************** EJEMPLOS TABLA 4.1 ***************/

SELECT ABS(-5) FROM DUAL;
SELECT ABS(5) FROM DUAL;

SELECT CEIL(5.5) FROM DUAL;

SELECT FLOOR(5.5) FROM DUAL;

SELECT MOD(5,2) FROM DUAL;

SELECT NVL(2,5) FROM DUAL;
SELECT NVL(NULL,5) FROM DUAL;

SELECT POWER(2,4) FROM DUAL;

SELECT ROUND(4.5345,2) FROM DUAL;
SELECT ROUND(4534.5,-2) FROM DUAL;
SELECT ROUND(4.5345) FROM DUAL;

SELECT SIGN(4) FROM DUAL;
SELECT SIGN(-4) FROM DUAL;

SELECT SQRT(4) FROM DUAL;

SELECT TRUNC(4.5678,3) FROM DUAL;
SELECT TRUNC(4.5678) FROM DUAL;

/***************** Ej 1 Pagina 133 ******************/

/******** ABS(146) = 146 ********/
SELECT ABS(146)    	    FROM DUAL;

/********** CEIL(2) = 2 *********/
SELECT CEIL(2) 	   		FROM DUAL;

/******* CEIL(-2.3) = -2 ********/
SELECT CEIL(-2.3)  	 	FROM DUAL;

/******** FLOOR(-2)= -2 *********/
SELECT FLOOR(-2)   		FROM DUAL;

/********* FLOOR(2) = 2 *********/
SELECT FLOOR(2)    		FROM DUAL;

/******* MOD(22,23) = 22 ********/
SELECT MOD(22,23)  	 	FROM DUAL;

/******* POWER(10,0) = 1 ********/
SELECT POWER(10,0) 		FROM DUAL;

/******* ABS(-30) = 30 **********/
SELECT ABS(-30)    		FROM DUAL;

/******** CEIL(1.3) = 2 *********/
SELECT CEIL(1.3)   		FROM DUAL;

/******** CEIL(-2) = -2 *********/
SELECT CEIL(-2)	   		FROM DUAL;

/******* FLOOR(-2.3) = -3 *******/
SELECT FLOOR(-2.3) 	  	FROM DUAL;

/******* FLOOR(1.3) = 1 *********/
SELECT FLOOR(1.3)  		FROM DUAL;

/******* MOD(10,3) = 1 **********/
SELECT MOD(10,3)   		FROM DUAL;

/******* POWER(3,2) = 9 *********/
SELECT POWER(3,2)  		FROM DUAL;

/*** POWER(3,-1) = 0.333333 *****/
SELECT POWER(3,-1) 		FROM DUAL;

/*** ROUND(-33.67,2) = -33.67 ***/
SELECT ROUND(-33.67,2)  FROM DUAL;

/*** ROUND(-33.27,1) = -33.3 ****/
SELECT ROUND(-33.27,1)  FROM DUAL;

/****** TRUNC(67.232) = 67 ******/
SELECT TRUNC(67.232)    FROM DUAL;

/**** TRUNC(67.232,2) = 37.23 ***/
SELECT TRUNC(67.232,2)  FROM DUAL;

/**** TRUNC(67.58,1) = 67.5 *****/
SELECT TRUNC(67.58,1)   FROM DUAL;

/****** ROUND(33.67) = 34 *******/
SELECT ROUND(33.67)     FROM DUAL;

/***** ROUND(-33.67,-2) = 0 *****/
SELECT ROUND(-33.67,-2) FROM DUAL;

/**** ROUND(-33.27,-1) = -30 ****/
SELECT ROUND(-33.27,-1) FROM DUAL;

/***** TRUNC(67.232,-2) = 0 *****/
SELECT TRUNC(67.232,-2) FROM DUAL;

/***** TRUNC(67.58,-1) = 0 ******/
SELECT TRUNC(67.58,-2)  FROM DUAL;
