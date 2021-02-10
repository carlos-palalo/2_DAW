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

    //LISTAR - Devuelve un array con la lista de empleados
    public ArrayList listar() {
        ArrayList empleados = new ArrayList();
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "SELECT e.emp_no, e.apellido, d.dept_no, d.dnombre FROM empleados e LEFT JOIN departamentos d ON e.dept_no=d.dept_no";
           
            ResultSet resul = sentencia.executeQuery(sql);
            while (resul.next()) {  //Se crea un array con los datos de los empleados
                //Empleado e = new Empleado(resul.getInt("dept_no"), resul.getString("dnombre"), resul.getString("loc"));
                Empleado e = new Empleado(resul.getInt("e.emp_no"), resul.getString("e.apellido"), resul.getByte("d.dept_no"), resul.getString("d.dnombre"));
                empleados.add(e); //Añadir dep al array
            }
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
        return (empleados);
    } //fin listarDep
} //fin clase OperacionesBD
