/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MisClases;

import java.sql.Date;

/**
 *
 * @author daw
 */
public class Empleado {

    private int emp_no;
    private String apellido;
    private byte deptno;
    private String dnombre;

    public Empleado(int emp_no, String apellido, byte deptno, String dnombre) {
        this.emp_no = emp_no;
        this.apellido = apellido;
        this.deptno = deptno;
        this.dnombre = dnombre;
    }

    public int getEmpno() {
        return emp_no;
    }

    public void setEmpno(int emp_no) {
        this.emp_no = emp_no;
    }

    public String getApellido() {
        return apellido;
    }

    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    public byte getDeptno() {
        return deptno;
    }

    public void setDeptno(byte deptno) {
        this.deptno = deptno;
    }

    public String getDnombre() {
        return dnombre;
    }

    public void setDnombre(String dnombre) {
        this.dnombre = dnombre;
    }

    
}   //fin clase Empleado
