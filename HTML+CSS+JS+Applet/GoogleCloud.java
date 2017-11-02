import javax.swing.*;
import java.awt.*;
import java.net.URL;
import javax.imageio.ImageIO;

public class GoogleCloud extends JApplet {

    Image google;

    public void init() {
        try {
            URL pic = new URL(getDocumentBase(), "./assets/images/GoogleCloud.png");
            google = ImageIO.read(pic);
        } catch(Exception e) {
            e.printStackTrace();
        }
    }

    public void paint(Graphics g) {
        super.paint(g);
        if (google!=null) {
            g.drawImage(google, 100, 100, this);
        }
    }
}