# 🛍Sistema de Gerenciamento de Produtos
Originalmente desenvolvido como uma página estática, este projeto evoluiu para uma aplicação dinâmica utilizando **PHP na Web** e **MySQL como Data Base**. Agora, os produtos são armazenados e manipulados diretamente no Data Base, proporcionando mais flexibilidade e eficiência na gestão.


## Funcionalidades
✔️ **Cadastro de produtos** no Data Base  
✔️ **Edição e exclusão** de produtos  
✔️ **Listagem de produtos** cadastrados  
✔️ **Geração de relatório em PDF** com os produtos cadastrados  
✔️ **Painel administrativo** para gerenciamento completo  


## Tecnologias Utilizadas
- **PHP** para desenvolvimento backend  
- **MySQL** como Data Base  
- **PDO** para conexão segura com o Data Base  
- **Dompdf** para geração de relatórios em PDF  
- **Bootstrap** para estilização (caso tenha utilizado)  


## Configuração do Projeto
1. Clone o repositório:  
   ```sh
   git clone https://github.com/seu-usuario/seu-repositorio.git
   
2. Acesse o diretório do projeto:
   cd seu-repositorio


## Configurando o Data Base
1. **Crie um Data Base no MySQL** com o nome correspondente ao projeto.  
2. **Importe o arquivo SQL** (`serenatto.sql`) para criar as tabelas e popular os dados:  

   **Via MySQL Workbench:**  
   - Vá em **Server > Data Import**  
   - Selecione o arquivo `serenatto.sql`  
   - Execute a importação  

   **Via terminal:**  
   ```sh
   mysql -u SEU_USUARIO -p SEU_DATABASE < serenatto.sql


### Configurando a Conexão com o Data Base
  Renomeie o arquivo conexao-db.example.php para conexao-db.php.
  Preencha as credenciais do seu banco de dados:
  <?php
  $pdo = new PDO(
      dsn: 'mysql:host=SEU_HOST;dbname=SEU_DATABASE;charset=utf8',
      username: 'SEU_USUARIO',
      password: 'SUA_SENHA'
  );
  ?>

## Instalando Dependências
Este projeto utiliza o Dompdf para gerar PDFs. Para instalá-lo, rode o seguinte comando:

composer install

Caso não tenha o Composer instalado, baixe em: getcomposer.org.


## Executando o Projeto
Para rodar o projeto localmente, utilize um servidor PHP embutido:

php -S localhost:8081


📚 Desenvolvido durante um curso da Alura
Este projeto foi desenvolvido como parte do aprendizado no curso da Alura, aplicando conceitos de PHP e MySQL.
