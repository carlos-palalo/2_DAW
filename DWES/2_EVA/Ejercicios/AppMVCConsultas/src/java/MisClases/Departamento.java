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
    private int numEmp;

    public Departamento(byte deptno, String dnombre, int numEmp) {
        this.deptno = deptno;
        this.dnombre = dnombre;
        this.numEmp = numEmp;
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

    public int getNumEmp() {
        return numEmp;
    }

    public void setNumEmp(int numEmp) {
        this.numEmp = numEmp;
    }
    
    
}
