import java.util.Scanner;
public class contohifelse {

    public static void main(String[] args) {
        int nilai = 10;
        String pesan="",jumlah="";
        Scanner scan = new Scanner(System.in);

        if (nilai>2) {
            jumlah = "Lebih besar dari 2";
            jumlah = scan.nextLine();
            if(nilai%2 == 0) {
                pesan = "Bilangan Genap";
            }else{
                pesan = "Bilangan Ganjil";
            }
            System.out.println(jumlah+" dan "+pesan);
        }else{
            jumlah = "Lebih kecl dari 2";
            System.out.println(jumlah);
        }
    }
}