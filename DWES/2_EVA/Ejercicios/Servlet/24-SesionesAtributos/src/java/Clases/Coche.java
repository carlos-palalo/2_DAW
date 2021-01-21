package Clases;


public class Coche {

    String marca;
    String color;
    
    Coche(){};
    
    public Coche(String m, String c){
        marca = m;
        color = c;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public String getMarca() {
        return marca;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }
    
    
}
