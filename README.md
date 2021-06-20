# Bertholdo - Teste Seleção Desenvolvedor Back-end Jr
<div align="center">
<img src="./img/bertholdo.jpg" width="25%"/>
</div>

- Este projeto foi desenvolvido para atender aos requisitos do processo seletivo da Bertholdo. A Stack escolhida para o desenvolvimento do projeto foi PHP com Bootstrap.

## Tecnologias utilizadas
1. PHP
## Bibliotecas utilizadas
1. Bootstrap

## Padrão de Projeto
1. Padrão MVC
 - Foi utilizado o Padrão MVC (Model, View e Controller) para reorganizar o projeto, conforme código fonte disponível. Foi utilizado a IDE PHPStorm.

## Descrição da tarefa
O objetivo dessa etapa é encontrar, corrigir os erros e aperfeiçoar o programa PHP disponibilizado.


Tarefas a serem realizadas:

a) Encontrar os 6 erros no código e descrevê-los de forma detalhada;

b) Corrigir os 6 erros do código;

c) Criar uma classe chamada “Address” com as seguintes características;

→ Método get_address – utilizar a função “get_address($cep)” do arquivo disponibilizado. O método receberá o “cep” informado pelo usuário.

d) Ajustar o arquivo index.php para utilizar a classe desenvolvida;

→ Instanciar o objeto e chamar o método get_address .
e) O programa deve retornar as seguintes informações:
→ CEP, Rua, Bairro e Estado (Ver imagem no link disponibilizado acima)

f) Descreva o que você mudaria no código para melhorá-lo. Não é necessário implementar o código das melhorias.


DIFERENCIAIS
Serão considerados como diferenciais:

- Entrega antecipada.
- Utilização de boas práticas de desenvolvimento PHP.
- Ajuste do visual da tela do programa. Deve se utilizar recursos de HTML e CSS.
- Código organizado e comentado. Pode se utilizar de mais de um arquivo para uma melhor organização do código.
- Utilização de framework.
- Entrega por Git.


## Descrição dos erros encontrados
Abaixo serão descritos os erros encontrados no código fonte inicial.
<img src="./codigo original.PNG" width="100%"/>
- Erro 1. Linha 5 - Action errada. Foi necessário colocar o caminho e arquivo correto para corrigir o erro e enviar os dados do formulário.
- Erro 2. Linha 18 - variavel de entrada da função get_address está errada. O nome correto da variável é $cep.
- Erro 3. Linha 21 - nome da variavel "addres" e a variavel "logradoro" está errado. 
- Erro 4. Linha 23 - nome da variavel "adress" está errada.
- Erro 5. Linha 30 - está faltando barra invertida na url de busca da API. 
- Erro 6. Linha 3 - estrutura do HTML está "errada" (Faltando a tag HEAD).
- Erro 7. Linha 5 - estrutura Form sem tag de fechamento.

## Futuras implementações
- [x] Buscar endereço pelo CEP
- [x] Adequação à um Padrão de Projeto
- [ ] Autopreenchimento utilizando JQuery



