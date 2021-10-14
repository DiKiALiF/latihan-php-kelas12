import java.util.Scanner;
public class jurusan {
    public static void main(String[] args) {
        Scanner scan = new Scanner (System.in);

        String nama,nis;
        int jurusan;
        
        System.out.print("Masukkan Nama: ");
        nama = scan.nextLine();
        System.out.print("Masukkan NIS: ");
        nis = scan.nextLine();
        System.out.print("Pilihan: \n 1. Teknik Kendaraan Ringan \n 2. Teknik Sepeda Motor \n 3. Teknik Informatika \n\n Masukan Pilihan: ");
        jurusan = scan.nextInt();
        switch (jurusan){
            case 1:
                System.out.println("\n"+nama+" dengan nis "+nis+" memilih jurusan Teknik Kendaraan Ringan");
                break;
            case 2:
                System.out.println("\n"+nama+" dengan nis "+nis+" memilih jurusan Teknik Sepeda Motor");
                break;
            case 3:
                System.out.println("\n"+nama+" dengan nis "+nis+" memilih jurusan Teknik Informatika");
                break;
                default:
                System.out.println("\n"+nama+" dengan nis "+nis+" tidak ada jurusan");
        }
    }
}