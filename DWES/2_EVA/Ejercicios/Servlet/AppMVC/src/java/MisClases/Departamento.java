/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MisClases;

/**
 *
 * @author daw
 */
public class Departamento {

    private byte deptno;
    private String dnombre;
    private String loc;

    public Departamento(byte deptno, final String dnombre, final String loc) {
        this.deptno = deptno;
        this.dnombre = dnombre;
        this.loc = loc;
    }

    public byte getDeptno() {
        return this.deptno;
    }

    public void setDeptno(byte deptno) {
        this.deptno = deptno;
    }

    public String getDnombre() {
        return this.dnombre;
    }

    public void setDnombre(String dnombre) {
        this.dnombre = dnombre;
    }

    public String getLoc() {
        return this.loc;
    }

    public void setLoc(String loc) {
        this.loc = loc;
    }
}   //fin clase Departamento
