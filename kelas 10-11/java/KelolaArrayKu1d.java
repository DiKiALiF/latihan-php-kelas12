import java.util.Scanner;

public class KelolaArrayKu1d {
    public static void main(String[] args) {

        int[] nilai = new int[3];

        Scanner scan = new Scanner(System.in);

        for (int i = 0; i < 3; i++) {
            System.out.print("Nilai Ujian Ke-" + i + ": ");
            i = scan.nextInt();
        }
        System.out.println("Menampikan Nilai Dan Status Kelulusan");
        for (int b = 0; b < 3; b++) {
        System.out.println("Nilai Ujian" +|+ " Tidak Lulus");
        }

        i = scan.nextInt();
        if (int i > 74) {
           System.out.print("Lulus");
        } else{
               System.out.print("Tidak Lulus");
        }
}
    }