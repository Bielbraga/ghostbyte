CREATE TABLE usuarios (
  cpf CHAR(11) PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  telefone VARCHAR(15) NOT NULL
);

INSERT INTO usuarios (cpf, nome, email, senha, telefone) VALUES
('50488749337', 'gabriel silva braga', 'gabriel.s.braga99@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '(11)91234-5678');

SELECT * FROM usuarios

