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

    private int empno;
    private String apellido;
    private String oficio;
    private int dir;
    private Date fechaalt;
    private float salario;
    private float comision;
    private byte deptno;

    public Empleado() {
    }

    public Empleado(int empno, String apellido, String oficio, int dir, Date fechaalt, float salario, float comision, byte deptno) {
        this.empno = empno;
        this.apellido = apellido;
        this.oficio = oficio;
        this.dir = dir;
        this.fechaalt = fechaalt;
        this.salario = salario;
        this.comision = comision;
        this.deptno = deptno;
    }

    public int getEmpno() {
        return empno;
    }

    public void setEmpno(int empno) {
        this.empno = empno;
    }

    public String getApellido() {
        return apellido;
    }

    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    public String getOficio() {
        return oficio;
    }

    public void setOficio(String oficio) {
        this.oficio = oficio;
    }

    public int getDir() {
        return dir;
    }

    public void setDir(int dir) {
        this.dir = dir;
    }

    public Date getFechaalt() {
        return fechaalt;
    }

    public void setFechaalt(Date fechaalt) {
        this.fechaalt = fechaalt;
    }

    public float getSalario() {
        return salario;
    }

    public void setSalario(float salario) {
        this.salario = salario;
    }

    public float getComision() {
        return comision;
    }

    public void setComision(float comision) {
        this.comision = comision;
    }

    public byte getDeptno() {
        return deptno;
    }

    public void setDeptno(byte deptno) {
        this.deptno = deptno;
    }

    private Date fecha(){
        return new java.sql.Date(new java.util.Date().getTime()); 
    }
    
}   //fin clase Empleado
