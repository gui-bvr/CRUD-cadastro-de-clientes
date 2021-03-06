# Aplicação de Cadastro de Clientes

## Descrição

Aplicação CRUD para cadastro de clientes (nome, telefone idade e e-mail), desenvolvido em PHP, MySQL e Bootstrap 5.

## Requisitos Implementados

- Frontend totalmente responsivel, desenvolvido com Bootstrap 5.
- Função de Criar, Editar e Apagar os itens do cadastro.
- Função de Alertas ao criar ou um item com sucesso, quando algum erro impede a ação e de confirmação ao apagar um item.

## Passo a Passo para rodar o Projeto

### Banco de Dados

Utilize o arquivo `crud.sql` na pasta `SQL` para criar o banco de dados.

### Clonagem do Projeto

Para rodar o projeto localmente, é necessário um servidor de desenvolvimento local, como o **XAMPP**, **WAMP** ou **LAMP**. Nesse caso, será usado o WAMP.

O repositório do projeto deve ser clonado, ou extraído para a pasta de **localhost** do WAMP, que nesse caso é:

`C:\wamp64\www`

![crud](https://raw.githubusercontent.com/gui-bvr/crud/main/exemplos/crud.png)

Para acessar a aplicação, entre com o link abaixo no navegador:

`localhost/crud-main`

### Utilização

Essa é a tela principal após a abertura:

![home](https://raw.githubusercontent.com/gui-bvr/crud/main/exemplos/home.png)

#### Cadastrar

Pressione **Cadastrar** para cadastrar um novo cliente, será aberta uma tela para cadastrar o Nome Completo, Telefone, Idade e E-mail do cliente.

Após inserir os dados, pressione o botão azul **Cadastrar** para inserir as informações no banco de dados, como no exemplo abaixo:

![cadastrar](https://raw.githubusercontent.com/gui-bvr/crud/main/exemplos/cadastrar.png)

Em caso de algum erro, será mostrado um aviso de que algo deu errado:

![erro](https://raw.githubusercontent.com/gui-bvr/crud/main/exemplos/erro.png)

Em caso de sucesso, será mostrado um aviso que os dados foram cadastrados com sucesso:

![sucesso](https://raw.githubusercontent.com/gui-bvr/crud/main/exemplos/sucesso.png)

#### Editar

Pressione o botão verde de opções no cadastro que você deseja editar, será aberto uma pagina para editar as informações.

Será exibida um aviso no caso de sucesso ou erro ao finalizar a edição.

#### Apagar

Pressione o botão vermelho de opções no cadastro que você deseja apagar, será aberto uma notificação de confirmação se você deseja realmente apagar.
