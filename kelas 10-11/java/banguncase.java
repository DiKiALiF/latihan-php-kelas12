import java.util.Scanner;
public class luaskeliling {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int panjang,lebar;
        double luas,keliling;
        int pilih;

        System.out.println("==Menghitung Luas Dan Keliling Persegi Panjang==");
        System.out.print("Masukan Panjang: ");
        panjang = scan.nextInt();
        System.out.print("Masukan Lebar: ");
        lebar = scan.nextInt();
        System.out.println("1. Luas\n2. Keliling");
        System.out.print("Masukan Pilihan: ");
        pilih = scan.nextInt();

        switch (pilih){
            case 1:
               luas = panjang*lebar;
               System.out.println("Luas Persegi Panjang: "+luas);
               break;
            case 2:
               keliling = (2*panjang)+(2*lebar);
               System.out.println("Keliling Persegi Panjang: "+keliling);
               break;
               default:
               System.out.println("Tidak Ada Pilihan");
        }
    }
}