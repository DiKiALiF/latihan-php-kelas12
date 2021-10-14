import java.util.Scanner;
public class array2d {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        System.out.print("Masukan jumlah indeks baris matriks : ");
        int baris = scan.nextInt();
        System.out.print("Masukan jumlah indeks kolom matriks : ");
        int baris1 = scan.nextInt();

        int [][] kolom = new int[baris][baris1];

        for (int i = 0; i < baris; i++) {
            for (int j = 0; j < baris1; j++) {
                System.out.format("Masukan Indeks baris ke %d kolom ke %d : ",i,j);
                kolom[i][j] = scan.nextInt();
            }
        }
        System.out.println("Berikut adalah isi array yang tadi dimasukan : ");
        for (int i = 0; i < baris; i++) {
            for (int j = 0; j < baris1; j++) {
                System.out.println("Isi indeks baris ke " + i + " kolom ke " + j + " :" + kolom[i][j]);
            }
        }
        System.out.println("Bentuk Matriks : ");
        for (int i =  0; i < baris; i++) {
            for (int j = 0; j < baris1; j++) {
                System.out.print(kolom[i][j] + " ");
            }
            System.out.println("");
        }
    }
}