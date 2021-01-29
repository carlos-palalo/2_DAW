/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MisClases;

import java.sql.*;
import java.util.*;

/**
 *
 * @author daw
 */
public class OperacionesBD {

    public Connection getConnection() {
        Connection conexion = null;
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance(); //Cargar el driver
            conexion = java.sql.DriverManager.getConnection("jdbc:mysql://localhost:3306/carlos", "carlos", "carlos");
        } catch (Exception e) {
            e.printStackTrace();
        }
        return conexion;
    }

    //LISTAR - Devuelve un array con la lista de departamentos
    public ArrayList listarDep() {
        ArrayList departamentos = new ArrayList();
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "SELECT * FROM departamentos";
            ResultSet resul = sentencia.executeQuery(sql);
            while (resul.next()) {  //Se crea un array con los datos de los departamentos
                Departamento d = new Departamento(resul.getByte("dept_no"), resul.getString("dnombre"), resul.getString("loc"));

                departamentos.add(d); //Añadir dep al array
            }
            conexion.close();
        } catch (Exception e) {
            e.printStackTrace();
        }
        return (departamentos);
    } //fin listarDep

    //INSERTAR - Recibe los datos del departamento a insertar en la tabla
    public void insertaDepartamento(Departamento d) {
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "INSERT INTO departamentos VALUES(" + d.getDeptno() + ",'" + d.getDnombre() + "','" + d.getLoc() + "')";
            if (d.getDeptno() != 0) {
                sentencia.execute(sql);
            }
            System.out.println("SQL: " + sql);
            conexion.close();
        } catch (Exception e) {
            e.printStackTrace();
        }
    } //fin insertaDepartamento
} //fin clase OperacionesBD
