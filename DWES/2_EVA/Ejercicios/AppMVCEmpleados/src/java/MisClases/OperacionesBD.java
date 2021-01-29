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
    public ArrayList listarEmp() {
        ArrayList empleados = new ArrayList();
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "SELECT * FROM empleados";
            ResultSet resul = sentencia.executeQuery(sql);
            while (resul.next()) {  //Se crea un array con los datos de los empleados
                //Empleado e = new Empleado(resul.getInt("dept_no"), resul.getString("dnombre"), resul.getString("loc"));
                Empleado e = new Empleado(resul.getInt("emp_no"), resul.getString("apellido"), resul.getString("oficio"), resul.getInt("dir"), resul.getDate("fecha_alt"), resul.getFloat("salario"), resul.getFloat("comision"), resul.getByte("dept_no"));

                empleados.add(e); //Añadir dep al array
            }
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
        return (empleados);
    } //fin listarDep

    //INSERTAR - Recibe los datos del departamento a insertar en la tabla
    public void insertaEmpleado(Empleado e) {
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "INSERT INTO empleados VALUES(" + e.getEmpno() + ",'" + e.getApellido() + "','" + e.getOficio() + "'," + e.getDir() + "," + e.getFechaalt() + "," + e.getSalario() + "," + e.getComision() + "," + e.getDeptno() + ")";
            if (e.getDeptno() != 0) {
                sentencia.execute(sql);
            }
            System.out.println("SQL: " + sql);
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    } //fin insertaDepartamento
} //fin clase OperacionesBD
