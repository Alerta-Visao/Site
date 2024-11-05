-- Criando o banco de dados
CREATE DATABASE alertavisao2;
-- Usando o banco de dados
USE alertavisao2;

-- Tabela 'chamado' deve ser criada antes de 'chamadosabertos'
CREATE TABLE chamado (
    chamado INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    sobrenome VARCHAR(45) NOT NULL,
    telefone VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    categoria VARCHAR(45) NOT NULL,
    descreveproblema VARCHAR(255) NOT 
);

-- Tabela para chamados abertos, referenciando a tabela 'chamado' -- APAGAR
CREATE TABLE chamadosabertos (
    id INT PRIMARY KEY AUTO_INCREMENT, 
    chamado INT NOT NULL,
    categoria VARCHAR(45) NOT NULL,
    datachamado DATE NOT NULL,
    FOREIGN KEY (chamado) REFERENCES chamado(chamado)
);

-- Tabela 'compracartao' (referenciada por 'vendasrealizadas') deve ser criada antes de 'vendasrealizadas'
CREATE TABLE compracartao (
    cartao INT AUTO_INCREMENT PRIMARY KEY,
    numeroCartao VARCHAR(45) NOT NULL,
    dataValidade VARCHAR(45) NOT NULL,
    codSeguranca VARCHAR(45) NOT NULL,
    nomeTitular VARCHAR(45) NOT NULL
);

-- Tabela de vendas realizadas, referenciando a tabela 'compracartao'
CREATE TABLE vendasrealizadas (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    cartao INT NOT NULL,
    categoriavenda VARCHAR(45) NOT NULL,
    statusvendas VARCHAR(45) NOT NULL,
    FOREIGN KEY (cartao) REFERENCES compracartao(cartao)
);

-- Tabela de usuários para diferentes jornadas
CREATE TABLE Usuario (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    login VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    tipo VARCHAR(20) NOT NULL
) ENGINE=InnoDB;

-- Tabela para pessoa assistida
CREATE TABLE Assistida (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    telefone VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    codAcompanhante INT NOT NULL
) ENGINE=InnoDB;

-- Tabela para acompanhante
CREATE TABLE Acompanhante (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    telefone VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    login VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL
) ENGINE=InnoDB;

-- Chave estrangeira para 'Assistida', referenciando 'Acompanhante'
ALTER TABLE Assistida
ADD CONSTRAINT fk_aacompanhante FOREIGN KEY (codAcompanhante)
REFERENCES Acompanhante(codigo);

-- Comandos de seleção para testar as tabelas
SELECT * FROM Usuario;
SELECT * FROM chamadosabertos;
SELECT * FROM chamado;
SELECT * FROM vendasrealizadas;
SELECT * FROM compracartao;
