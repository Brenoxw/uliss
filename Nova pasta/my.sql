CREATE DATABASE Agenda;
USE Agenda;

CREATE TABLE Tarefa (
    id_tarefa INT AUTO_INCREMENT PRIMARY KEY,
    descricao_tarefa VARCHAR(100),
    data_inicio_tarefa DATE,
    data_fim_tarefa DATE
);

INSERT INTO Tarefa (descricao_tarefa, data_inicio_tarefa, data_fim_tarefa) VALUES
('Estudar PHP e MySQL', '2025-04-07', '2025-04-10'),
('Preparar apresentação do projeto', '2025-04-08', '2025-04-09'),
('Enviar e-mail para equipe', '2025-04-07', '2025-04-07'),
('Atualizar currículo', '2025-04-06', '2025-04-08'),
('Reunião com o cliente', '2025-04-09', '2025-04-09');