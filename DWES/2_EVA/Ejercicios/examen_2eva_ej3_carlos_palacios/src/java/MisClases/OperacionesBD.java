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
        ArrayList paises = new ArrayList();
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "select count(ciudad) as \"ciudad\", count(codigocliente) as \"numcliente\", avg(LimiteCredito) as \"limitecredito\" from clientes2 group by pais having avg(LimiteCredito)<47000";
            ResultSet resul = sentencia.executeQuery(sql);
            while (resul.next()) {  //Se crea un array con los datos de los empleados
                //Empleado e = new Empleado(resul.getInt("dept_no"), resul.getString("dnombre"), resul.getString("loc"));
                Pais e = new Pais(resul.getInt("ciudad"), resul.getInt("numcliente"),resul.getFloat("limitecredito"));

                paises.add(e); //Añadir dep al array
            }
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
        return (paises);
    } //fin listarDep

    //ACTUALIZAR
    /*public void actualizarEmpleado(Empleado e) {
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "UPDATE empleados SET apellido='" + e.getApellido() + "', oficio='" + e.getOficio() + "', dir=" + e.getDir() + ", salario=" + e.getSalario() + ", comision=" + e.getComision() + ", dept_no=" + e.getDeptno() + " WHERE emp_no=" + e.getEmpno();
            if (e.getEmpno() != 0) {
                sentencia.execute(sql);
            }
            System.out.println("SQL: " + sql);
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }

    private java.sql.Date fecha() {
        return new java.sql.Date(new java.util.Date().getTime());
    }*/
} //fin clase OperacionesBD
