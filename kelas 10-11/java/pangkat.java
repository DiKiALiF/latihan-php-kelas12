import java.util.Scanner;
public class pangkat {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int x,y;
        double z;

        System.out.print("Masukan angka : ");
        x = scan.nextInt();
        System.out.print("Masukan pangkat : ");
        y = scan.nextInt();
        
        for(int i = 1; i <= y; i++) {
        System.out.print(x);
        if(y > 1) {
        System.out.print(" X ");
        } 
        }
        // blok kode yang diulang
        z = Math.pow(x,y);
        System.out.print("= " + z);
        
        }
        }