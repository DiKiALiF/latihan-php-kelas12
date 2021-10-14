public class nilaiakhir {
    public static void main(String[] args) {
        String[] nama = {"farid","fajar","diki"};
        double [][] nil={{60,70,90},{80, 70, 90}, {70, 60, 90}};
        double nilai=0;

        System.out.println("+----------+----------+----------+----------+------------");
        System.out.println("|  Nama    |   UTS    |    UAS   |   TUGAS  |Nilai akhir");
        System.out.println("+----------+----------+----------+----------+------------");
        for(int r =0;r<3;r++){
            System.out.print("|"+nama[r]+"\t|");
            for(int c=0;c<3;c++){
                System.out.print(nil[r][c] + "\t|");
            }
        nilai=(0.35*nil[r][0])+(0.45*nil[r][1])+(0.2*nil[r][2]);
        System.out.println(nilai +"\t\t");
        }
        System.out.println("+----------+----------+----------+----------+------------");
        }
    }
