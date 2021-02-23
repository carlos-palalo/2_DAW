/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MisClases;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;

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
    public ArrayList listarClientes() {
        ArrayList clientes = new ArrayList();
        try {
            Connection conexion = getConnection();
            Statement sentencia = conexion.createStatement();
            String sql = "SELECT c.idcliente, cnombre, categoria, cuentaporpagar " +
                    "FROM cliente c, encargos e, vendedores v " +
                    "WHERE c.idcliente = e.idcliente " +
                    "AND c.idvendedor=v.idvendedor " +
                    "AND v.comision>0.12 " +
                    "AND c.cuentaporpagar<(SELECT AVG(s.cuentaporpagar) " +
                    "					FROM cliente s " +
                    "					GROUP BY s.categoria " +
                    "                    HAVING s.categoria=c.categoria) " +
                    "GROUP BY c.idcliente " +
                    "ORDER BY c.categoria";
            
            ResultSet resul = sentencia.executeQuery(sql);
            while (resul.next()) {  //Se crea un array con los datos de los empleados
                //Empleado e = new Empleado(resul.getInt("dept_no"), resul.getString("dnombre"), resul.getString("loc"));
                Cliente e = new Cliente(resul.getString("idcliente"), resul.getString("cnombre"), resul.getInt("categoria"));

                clientes.add(e); //Añadir dep al array
            }
            conexion.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
        return (clientes);
    } //fin listarDep
}
