package aula11;

public class Aluno extends Pessoa {
    // Attributes
    private int matricula;
    private String curso;

    // Methods
    public void pagarMensalidade() {
        System.out.println("Pagando mensalidade do aluno " + this.nome);
    }

    public void cancelarMatricula() {
        System.out.println("Matrícula será cancelada!");
    }

    // Special Methods - Getters and Setters
    public int getMatricula() {
        return matricula;
    }

    public void setMatricula(int matricula) {
        this.matricula = matricula;
    }

    public String getCurso() {
        return curso;
    }

    public void setCurso(String curso) {
        this.curso = curso;
    }
}
