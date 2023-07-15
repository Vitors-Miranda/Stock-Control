# Stock-Control
## O banco de dados se chama stock. Ele contém as seguintes tabelas:

### Tabela company:
Colunas: company_id (chave primária), name, created_at e DT.

### Tabela movement:
Colunas: protocol (chave primária), company_requested, company_sent, product_id, created_at e DT.

### Tabela product:
Colunas: product_id (chave primária), name, quantify, description, price, stock_fk, created_at e DT.

### Tabela stock:
Colunas: stock_id (chave primária), name, description, company_fk, created_at e DT.

### Tabela user:
Colunas: user_id (chave primária), name, email, password, company_fk, created_at e DT.

O conjunto de caracteres padrão é utf8mb4 e a colação é utf8_swedish_ci.
