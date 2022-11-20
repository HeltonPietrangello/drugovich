<br>
Ao executar os comandos **php artisan migrate** e **php artisan db:seed**, são criadas e populadas três tabelas no banco de dados: Grupos, Clientes e Gerentes.
<br><br>

## 1° Passo <br>
Usar os dados da tabela "gerentes" para fazer o login e gerar um token. Este token dará acesso e restrições nos demais 
endpoints da aplicação.<br>
- **Endpoint: http://127.0.0.1:8000/api/login**
<br>
<p align="center"><img src="storage/app/public/111.png"></p>
<br>
<hr>
<br>

## 2° Passo <br>
Usar o método POST para criar Grupos   .
- **Endpoint: http://127.0.0.1:8000/api/grupos**
<br>
<p align="center"><img src="storage/app/public/2.png"></p>
<br>
<hr>
<br>
<br>


## 3° Passo <br>
Usar o método GET para recuperar Grupos.
- **Endpoint: http://127.0.0.1:8000/api/grupos**
<br>
<p align="center"><img src="storage/app/public/3.png"></p>
<br>
<hr>
<br>


## 4° Passo <br>
Usar o método PUT para alterar Grupo, passando o Id do grupo na URL. 
- **Endpoint: http://127.0.0.1:8000/api/grupos/4**
<br>
<p align="center"><img src="storage/app/public/4.png"></p>
<br>
<hr>
<br>


## 5° Passo <br>
Usar o método DELETE para deletar Grupo, passando o Id do grupo na URL.
- **Endpoint: http://127.0.0.1:8000/grupos/4**
<br>
<p align="center"><img src="storage/app/public/5.png"></p>
<br>
<hr>
<br>


## 6° Passo <br>
Usar o método GET para visualizar os Clientes de um Grupo, passando o Id do grupo na URL.
- **Endpoint: http://127.0.0.1:8000/api/grupos/1/clientes**
<br>
<p align="center"><img src="storage/app/public/6.png"></p>
<br>
<hr>
<br>

- Com a conclusão desta atividade foram criados endpoints para operar os Grupos e visualizar os Clientes de um Grupo. 
- Um cliente deve pertencer a apenas um grupo;
- Gerentes precisam estar autenticados;
- Gerentes de nível um pode apenas visualizar grupos, adicionar/remover clientes;
- Gerentes de nível dois são os únicos que podem criar, editar e excluir grupos;

 
