
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Arrays;
import java.util.HashMap;
import java.util.Map;
import java.util.TreeMap;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import javax.swing.table.TableModel;

import org.jsoup.Connection.Response;
import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.select.Elements;
import org.supercsv.cellprocessor.Optional;
import org.supercsv.cellprocessor.constraint.NotNull;
import org.supercsv.cellprocessor.constraint.UniqueHashCode;
import org.supercsv.cellprocessor.ift.CellProcessor;
import org.supercsv.io.CsvMapReader;
import org.supercsv.io.CsvMapWriter;
import org.supercsv.io.ICsvMapReader;
import org.supercsv.io.ICsvMapWriter;
import org.supercsv.prefs.CsvPreference;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author CARLOS
 */
public class Principal {

    public static final String url = "https://www.eldiario.es/";

    public static void main(String args[]) {
        try {
            // Compruebo si me da un 200 al hacer la petición
            if (getStatusConnectionCode(url) == 200) {
                // Obtengo el HTML de la web en un objeto Document2
                Document document = getHtmlDocument(url);

                // Busco todas las noticias que estan dentro de: 
                Elements entradas = document.select("div .md__new");
                // Escribo el documento
                writeWithCsvMapWriter(entradas);
                // Leo el documento y lo saco por pantalla
                readWithCsvMapReader();
            } else {
                System.out.println("El Status Code no es OK, es: " + getStatusConnectionCode(url));
            }
        } catch (Exception e) {
            System.out.println(e);
        }

    }

    /**
     * Con esta método compruebo el Status code de la respuesta que recibo al
     * hacer la petición EJM: 200 OK	300 Multiple Choices 301 Moved Permanently
     * 305 Use Proxy 400 Bad Request	403 Forbidden 404 Not Found	500 Internal
     * Server Error 502 Bad Gateway	503 Service Unavailable
     *
     * @param url
     * @return Status Code
     */
    public static int getStatusConnectionCode(String url) {

        Response response = null;

        try {
            response = Jsoup.connect(url).userAgent("Mozilla/5.0").timeout(100000).ignoreHttpErrors(true).execute();
        } catch (IOException ex) {
            System.out.println("Excepción al obtener el Status Code: " + ex.getMessage());
        }
        return response.statusCode();
    }

    /**
     * Con este método devuelvo un objeto de la clase Document con el contenido
     * del HTML de la web que me permitirá parsearlo con los métodos de la
     * librelia JSoup
     *
     * @param url
     * @return Documento con el HTML
     */
    public static Document getHtmlDocument(String url) {

        Document doc = null;

        try {
            doc = Jsoup.connect(url).userAgent("Mozilla/5.0").timeout(100000).get();
        } catch (IOException ex) {
            System.out.println("Excepción al obtener el HTML de la página" + ex.getMessage());
        }

        return doc;

    }

    private static CellProcessor[] getProcessors() {

        final CellProcessor[] processors = new CellProcessor[]{
            new UniqueHashCode(), // newNo (must be unique)
            new NotNull(), // title
            new Optional(), // signature
        };

        return processors;
    }

    private static void readWithCsvMapReader() throws Exception {
        final Map<String, Object> st = new TreeMap<>();
        JPanel p = new JPanel();
        ICsvMapReader mapReader = null;
        try {
            mapReader = new CsvMapReader(new FileReader("noticiasElDiario.csv"), CsvPreference.STANDARD_PREFERENCE);

            // the header columns are used as the keys to the Map
            final String[] header = mapReader.getHeader(true);
            final CellProcessor[] processors = getProcessors();
            Map<String, Object> customerMap;
            //System.out.println(String.format(Arrays.toString(header)));

            while ((customerMap = mapReader.read(header, processors)) != null) {
                st.putAll(customerMap);
                System.out.println(customerMap.get("newsNo"));
                //System.out.println(String.format("%s", customerMap));

            }
            JTable t = new JTable(toTableModel(st));
            p.add(t);
            JFrame f = new JFrame();
            f.add(p);
            f.setSize(500, 500);
            f.setVisible(true);
        } finally {
            if (mapReader != null) {
                System.out.println("Lectura del archivo finalizada!");
                mapReader.close();
            }
        }
    }

    private static void writeWithCsvMapWriter(Elements entradas) throws Exception {
        // create the customer Maps (using the header elements for the column keys)
        final Map<String, Object> news = new HashMap<>();
        final String[] header = new String[]{"newsNo", "title", "signature"};

        final CellProcessor[] processors = getProcessors();

        ICsvMapWriter mapWriter = null;
        mapWriter = new CsvMapWriter(new FileWriter("noticiasElDiario.csv"), CsvPreference.STANDARD_PREFERENCE);
        try {
            // write the header
            mapWriter.writeHeader(header);
            for (int i = 0; i < entradas.size(); i++) {
                String titulo = entradas.get(i).getElementsByClass("ni-title").text();
                String autor = entradas.get(i).getElementsByClass("signature").text();
                news.put(header[0], i);
                news.put(header[1], titulo);
                news.put(header[2], autor);

                // write the customer maps
                mapWriter.write(news, header, processors);
            }
        } finally {
            if (mapWriter != null) {
                System.out.println("Escritura en el archivo finalizada!");
                mapWriter.close();
            }
        }
    }

    public static TableModel toTableModel(Map<?, ?> map) {
        DefaultTableModel model = new DefaultTableModel(
                new Object[]{"Key", "Value"}, 0
        );
        for (Map.Entry<?, ?> entry : map.entrySet()) {
            model.addRow(new Object[]{entry.getKey(), entry.getValue()});
        }
        return model;
    }
}
