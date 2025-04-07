CREATE DATABASE Agenda;
USE Agenda;

CREATE TABLE Tarefa (
    id_tarefa INT AUTO_INCREMENT PRIMARY KEY,
    descricao_tarefa VARCHAR(100) NOT NULL,
    data_inicio_tarefa DATE NOT NULL,
    data_fim_tarefa DATE NOT NULL
);

INSERT INTO Tarefa (descricao_tarefa, data_inicio_tarefa, data_fim_tarefa) VALUES
('revisar conteúdo', '2024-04-01', '2024-04-05'),
('realizar exercício', '2024-04-02', '2024-04-10'),
('analisar atividades', '2024-04-03', '2024-04-06'),
('momento de descanso', '2024-04-04', '2024-04-07'),
('completar projeto', '2024-04-05', '2024-04-09');
