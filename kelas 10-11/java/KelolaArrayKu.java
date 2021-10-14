import java.util.Scanner;
public class KelolaArrayKu {

    public static void main(String[] args) {
        int [] nilaiujian = new int[3];
        int y;
        Scanner scan = new Scanner(System.in);
        for (y = 0; y < 3; y++){
            System.out.print("Nilai Ujian Ke-"+ y +": ");
            nilaiujian[y]= scan.nextInt();
        }
        System.out.println("Menampilkan Nilai Dan Status Kelulusan");
        for (y = 0; y < 3; y++){
            System.out.print("Nilai Ujian ke-" + y +": " + nilaiujian[y]);
            if (nilaiujian[y] < 75) {
                System.out.println(" Tidak Lulus");
            } else{
                System.out.println(" Lulus");
            }
        }
    }
}