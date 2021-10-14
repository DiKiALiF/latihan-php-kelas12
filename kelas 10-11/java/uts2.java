import java.util.Scanner;
public class uts2 {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[][] matrix1 = {{2, -2, 3}, {4, 5, 6}};
        int[][] matrix2 = {{3, 6, 3}, {-4, 7, 9}};
        int[][] hasil = new int [2][3];
        int pilih,pilih2;

        for (String no1 = "Y";no1.equals("Y")||no1.equals("Y");){

        }
        System.out.println("---------- Paket Soal ----------");
        System.out.println("----------- Paket 1 ------------");
        System.out.println("----------- Paket 2 ------------");
        System.out.print("Masukan Pilihan : ");
        pilih = scan.nextInt();
        if (pilih == 1) {
        System.out.println("----------- Paket 1 ------------");
        System.out.println("ini adalah matrix x");
        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 3; j++) {
                System.out.print(matrix1[i][j] + " ");
            }
            System.out.println("");
        }
        System.out.println("ini adalah matrix y");
        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 3; j++) {
                System.out.print(matrix2[i][j] + " ");
            }
            System.out.println("");
        }
        System.out.println("Hasil pengurangan");
        for (int i = 0; i < matrix1.length; i++) {
            for (int j = 0; j < matrix1[0].length; j++) {
                int diki = matrix1[i][j] - matrix2[i][j];
                System.out.print(diki + " ");
            }
            System.out.println();
        }
        }
        else if (pilih == 2) {
        System.out.println("----------- Paket 2 ------------");
        System.out.print("Masukan jumlah indeks baris matriks : ");
        int baris = scan.nextInt();
        System.out.print("Masukan jumlah indeks kolom matriks : ");
        int baris1 = scan.nextInt();
        int[][] kolom = new int[baris][baris1];
        for (int i = 0; i < baris; i++) {
            for (int j = 0; j < baris1; j++) {
                System.out.format("Masukan isi indeks baris ke %d kolom ke %d : ",i,j);
                kolom[i][j] = scan.nextInt();
            }
        }
        System.out.println("Bentuk matriks:");
        for (int i = 0; i < baris; i++) {
            for (int j = 0; j < baris1; j++) {
                System.out.print(kolom[i][j] + " ");
            }
            System.out.println("");
        }
        } else {
            System.out.println("Tidak ada pilihan paket");
        }
       System.out.println("Pilih Paket Lagi? Y/T");
       pilih2 = scan.nextInt();
    }
}