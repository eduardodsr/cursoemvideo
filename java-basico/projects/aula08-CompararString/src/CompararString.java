public class CompararString {
    public static void main(String[] args) {
        String parte1 = "Curso";
        String parte2 = "Video";
        String parte3 = parte1 + parte2;
        String parte4 = "CursoVideo";

        System.out.println(parte3 == parte4); // false
        System.out.println(parte3.equals(parte4));// true
    }
}
