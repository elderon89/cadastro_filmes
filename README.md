## Sobre o teste

API REST – Utilizando Laravel para cadastro de:

- Filmes
- Classificação do Filme
- Atores
- Diretor
- Collection do postman para consumo e teste da API
- Documentação de como startar a API (comandos necessários, criação de base, migration, etc.)

## Ferramentas

- LARAGON (https://laragon.org/): Laragon foi criado por Leo Khoa. Ele é chefe de DevOps para uma empresa de SaaS em rápido crescimento. Ele construiu Laragon com um objetivo: tornar o desenvolvimento web rápido, divertido e agradável.

- HEIDISQL (https://www.heidisql.com/): O HeidiSQL é um software livre e tem como objetivo ser fácil de aprender. Permite ver e editar dados e estruturas de computadores rodando um dos sistemas de banco de dados MariaDB, MySQL, Microsoft SQL, PostgreSQL e SQLite. Inventado em 2002 por Ansgar, HeidiSQL pertence às ferramentas mais populares para MariaDB e MySQL em todo o mundo.

- POSTMAN (https://www.postman.com/): Simplifica cada etapa da construção de uma API e agiliza a colaboração para que seja possível criar APIs melhores e mais rapidamente.

- Windows Powershell (https://docs.microsoft.com/pt-br/powershell/scripting/windows-powershell/starting-windows-powershell?view=powershell-7): PowerShell é um shell de linha de comando baseado em tarefas e linguagem de script desenvolvido no .NET. Inicialmente, apenas um componente do Windows, o PowerShell tornou-se de código aberto e multiplataforma em 18 de agosto de 2016 com a introdução do PowerShell Core.

- VS CODE (https://code.visualstudio.com/): O Visual Studio Code é um editor de código redefinido e otimizado para criar e depurar aplicativos modernos da web e na nuvem.

## Tecnologias

Segue a relação das tecnologias envolvidas neste projeto:
- API Rest
- Laravel (framework)
- PHP
- Bootstrap
- MySQL (banco de dados)
- Git (Github)

### Como rodar o projeto

Passo 1: Instalar a ferramenta Laragon na unidade (C:);

Passo 2: Descompactar os arquivos deste projeto no caminho C:\laragon\www criando assim a pasta rede-magic-teste com todos os arquivos;

Passo 3: Utilizar o Windows Powershell executa modo administrador na máquina;

Passo 4: Executar o comando 'cd C:\laragon\www\rede-magic-teste';

Passo 5: Executar o comando 'code .' para iniciar o VS Code no repositório do projeto;

Passo 6: Executar o Laragon para executar o servidor Apache na porta 80 e o MySQL na porta 3306 (padrão), o HeidiSQL para acompanhar as alterações no banco de dados aplicadas pelo Postman (vem uma versão portable dentro do Laragon se precisar) e executar o Postman com as Collations pré-definidas e disponibilizadas;

Passo 7: Executar as requisições no Postman e conferir a Inserção, Exclusão, Atualização e Listagem dos dados no banco pelo próprio aplicativo.

## Documentação

Comandos executados no terminal para gerar os arquivos e códigos do projeto:

Criando uma model e uma migration para o projeto: php artisan make:model Models\Filme -m

Foi feito um fillable como se encontra dentro da model User.php e inserido no model Filme.php

Dentro da migration criada pelo comando no terminal, criamos os campos do tipo string na tabela com os atributos titulo, classificacao, atores e diretor.

Feito isso, o próximo comando executado foi: php artisan migrate

Após executado o comando acima, foi criado automaticamente o banco de dados rede-magic-teste na base dados no Localhost conforme foi possível visualizar no HeidiSQL com a tabela filmes.

Em seguida, foi executado o seguinte comando para a crianção do controlador: php artisan make:controller api\FilmeController --resource

O --resource foi utilizado pois ele já cria alguns métodos automaticamente.

Dentro de FilmeController.php foram configuradas apenas as funções index, store, show, update e destroy

Injetando a model com a linha de comando neste arquivo de controlador: use App\Models\Filme;

Para utilizar o funcionamento de rotas, no arquivo api.php foi inserido a linha de comando: Route::apiResource('dogs', 'api\DogController)

Não foi necessário passar nenhum @ pois ela automaticamente trará todos os métodos

Feito isso, com o Postman, foi possível testar cada uma das rotas GET, POST, PUT e DEL e ver seu funcionamento aplicado tanto no Console do aplicativo quanto atualizando a base de dados através do HeidiSQL

## Sobre o Framework Laravel

O framework Laravel é um software de código aberto licenciado sob a [licença MIT] (https://opensource.org/licenses/MIT).

Se você descobrir uma vulnerabilidade de segurança no Laravel, envie um e-mail para Taylor Otwell via [taylor@laravel.com] (mailto: taylor@laravel.com). Todas as vulnerabilidades de segurança serão resolvidas imediatamente.

A fim de garantir que a comunidade Laravel seja bem-vinda a todos, por favor, reveja e cumpra o [Código de Conduta] (https://laravel.com/docs/contributions#code-of-conduct).
