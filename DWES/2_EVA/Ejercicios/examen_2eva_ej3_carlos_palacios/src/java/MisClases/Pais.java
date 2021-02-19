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
public class Pais {
    private int ciudades;
    private int clientes;
    private float limitecredito;

    public Pais(int ciudades, int clientes, float limitecredito) {
        this.ciudades = ciudades;
        this.clientes = clientes;
        this.limitecredito = limitecredito;
    }

    public int getCiudades() {
        return ciudades;
    }

    public void setCiudades(int ciudades) {
        this.ciudades = ciudades;
    }

    public int getClientes() {
        return clientes;
    }

    public void setClientes(int clientes) {
        this.clientes = clientes;
    }

    public float getLimitecredito() {
        return limitecredito;
    }

    public void setLimitecredito(float limitecredito) {
        this.limitecredito = limitecredito;
    }
    
}
