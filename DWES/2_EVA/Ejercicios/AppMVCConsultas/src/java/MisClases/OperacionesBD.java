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
                Empleado e = new Empleado(resul.getInt("emp_no"), resul.getString("apellido"), resul.getByte("dept_no"), resul.getString("dnombre"));
                empleados.add(e); //Añadir dep al array
            }
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
        return (empleados);
    } //fin listarDep
    
    //CONTADOR
    public ArrayList count() {
        ArrayList departamentos = new ArrayList();
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "SELECT distinct d.dept_no, d.dnombre, count(e.dept_no) as 'numEmp' FROM empleados e, departamentos d WHERE e.dept_no=d.dept_no GROUP BY d.dept_no";
            ResultSet resul = sentencia.executeQuery(sql);
            while (resul.next()) {  //Se crea un array con los datos de los empleados
                //Empleado e = new Empleado(resul.getInt("dept_no"), resul.getString("dnombre"), resul.getString("loc"));
                Departamento d = new Departamento(resul.getByte("dept_no"), resul.getString("dnombre"), resul.getInt("numEmp"));
                departamentos.add(d); //Añadir dep al array
            }
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
        return (departamentos);
    } //fin listarDep
    
    //CONTADOR TODOS
    public ArrayList countAll() {
        ArrayList departamentos = new ArrayList();
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "SELECT distinct d.dept_no, d.dnombre, count(e.dept_no) as \"numEmp\" FROM empleados e RIGHT JOIN departamentos d ON e.dept_no=d.dept_no GROUP BY d.dept_no";
            ResultSet resul = sentencia.executeQuery(sql);
            while (resul.next()) {  //Se crea un array con los datos de los empleados
                //Empleado e = new Empleado(resul.getInt("dept_no"), resul.getString("dnombre"), resul.getString("loc"));
                Departamento d = new Departamento(resul.getByte("dept_no"), resul.getString("dnombre"), resul.getInt("numEmp"));
                departamentos.add(d); //Añadir dep al array
            }
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
        return (departamentos);
    } //fin listarDep
} //fin clase OperacionesBD
