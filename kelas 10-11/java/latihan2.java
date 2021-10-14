public class latihan2 {
    public static void main(String[] args) {

        int[][] matrix1 = {{2,3},{1,4}};
        int[][] matrix2 = {{3,2},{2,1}};
        int[][] hasil = new int[2][2];

        System.out.println("Ini adalah matrix1 : ");
        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 2; j++) {
                System.out.print(matrix1[i][j] + " ");
            }
            System.out.println("");
        }
        System.out.println("Ini adalah matrix2 : ");
        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 2; j++) {
                System.out.print(matrix2[i][j] + " ");
            }
            System.out.println("");
        }
        System.out.println("Hasil penjumlahannya : ");
        for (int i = 0; i < matrix1.length; i++) {
            for (int j = 0; j < matrix1[0].length; j++) {
                int diki = matrix1[i][j] + matrix2[i][j];
                System.out.print(diki + " ");
            }
            System.out.println();
        }
    }
}