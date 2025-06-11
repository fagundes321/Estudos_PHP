from fpdf import FPDF

# Conteúdo atualizado dos comandos SQL
sql_commands_updated = """
Comandos SQL Básicos

Criação de tabela
CREATE TABLE nome_tabela (
    id INT PRIMARY KEY AUTO_INCREMENT,
    coluna1 VARCHAR(255),
    coluna2 INT,
    coluna3 DATE
);

Inserir dados
INSERT INTO nome_tabela (coluna1, coluna2, coluna3) VALUES ('valor1', 123, '2025-01-01');

Selecionar dados
SELECT * FROM nome_tabela;
SELECT coluna1, coluna2 FROM nome_tabela WHERE coluna2 > 100;

Ordenar dados em ordem alfabética
SELECT * FROM agenda
ORDER BY nome ASC;

Atualizar dados
UPDATE nome_tabela SET coluna1 = 'novo_valor' WHERE id = 1;

Deletar dados
DELETE FROM nome_tabela WHERE id = 1;

Criar índice
CREATE INDEX idx_nome ON nome_tabela(coluna1);

Adicionar coluna
ALTER TABLE nome_tabela ADD nova_coluna VARCHAR(100);

Modificar coluna
ALTER TABLE nome_tabela MODIFY coluna1 TEXT;

Deletar coluna
ALTER TABLE nome_tabela DROP COLUMN coluna3;

Dropar tabela
DROP TABLE nome_tabela;

Joins básicos

INNER JOIN
SELECT a.coluna1, b.coluna2
FROM tabela_a a
INNER JOIN tabela_b b ON a.id = b.a_id;

LEFT JOIN
SELECT a.coluna1, b.coluna2
FROM tabela_a a
LEFT JOIN tabela_b b ON a.id = b.a_id;
"""

# Classe para gerar PDF
class PDF(FPDF):
    def header(self):
        self.set_font('Arial', 'B', 14)
        self.cell(0, 10, 'Comandos SQL Básicos', align='C', ln=1)
        self.ln(5)

    def chapter_body(self, body):
        self.set_font('Courier', '', 12)
        self.multi_cell(0, 8, body)
        self.ln()

# Criar PDF
pdf = PDF()
pdf.add_page()
pdf.chapter_body(sql_commands_updated)

file_path_updated = "/mnt/data/comandos_sql_basicos_ordenado.pdf"
pdf.output(file_path_updated)
