/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

SELECT c.idcliente, cnombre, categoria, cuentaporpagar
FROM cliente c, encargos e, vendedores v
WHERE c.idcliente = e.idcliente 
AND e.idvendedor=v.idvendedor 
AND v.comision>0.12 
AND c.cuentaporpagar<(SELECT AVG(s.cuentaporpagar) 
					FROM cliente s 
					GROUP BY s.categoria 
                    HAVING s.categoria=c.categoria)
GROUP BY c.idcliente
ORDER BY c.categoria;

 */
package MisClases;

/**
 *
 * @author daw
 */
public class Cliente {
    private String id;
    private String nombre;
    private int categoria;

    public Cliente(String id, String nombre, int categoria) {
        this.id = id;
        this.nombre = nombre;
        this.categoria = categoria;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public int getCategoria() {
        return categoria;
    }

    public void setCategoria(int categoria) {
        this.categoria = categoria;
    }
    
    
}
