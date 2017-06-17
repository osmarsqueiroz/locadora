# Locadora de carros #

Hoje em dia, é muito comum a locação de carros, principalmente por turistas, que desejam visitar locais onde que o taxi se torna inviável, visando o conforto e privacidade, com isso, temos a necessidade de unificar nosso sistema de aluguel de carros.
Segue um pouco da nossa estrutura

* Hoje estamos com 4 agências de carros (Rio de Janeiro, São Paulo, Curitiba,Belo Horizonte)
* Temos aproximadamente 600 carros entre (compacto,médio,sedan,perua,picape,suv)
* As agencias de São Paulo e Rio de janeiro são as maiores

## O que queremos com o novo sistema ##

Registar os carros em cada unidade;
Lista de quais carros estão em cliente;
Quais modelos de carros mais são alugados;
Cada carro tem um histórico de quilometragem;

Cadastro de clientes
cadastro de carros
cadastro da lista de preços por modelo
cadastro de agencias
cadastro de locação
cadastro de funcionarios

##funcionarios
Iniciaremos com os tipos Gerente,atendente,Manobrista

* Manobrista
    - responsavel por pegar no patio, e dar baixa na quilometragem do carro que esta saindo
    - responsavel por guardar o carro no patio e dar baixa na quilometragem no sistema
* Atendente
    - Faz as locações com os clientes e cobrança
    - Recebe os clientes que estao devolvendo o carro alugado
* Gerente
    - analiza os relatorios da agencia

###cadastro da lista de preços

Cada modelo de carro tem um preço
A lista deve mostrar quantos carros tem disponivel no patio
cada agencia tem um preço

###Cadastro agencia

Cada agencia tem que pertencer a uma estado,cidade,bairro,endereço
Cada agencia tem a lista de tipos de carros disponiveis para locação


###Cadastro do cliente

O cliente tem que ser cadastrado com CPF, nome, telefone, endereço;
O cliente pode alugar quantos carros quiser;
O cliente pode entregar o carro em qualquer agencia vinculada a empresa;
o cliente paga pelos dias que ficará com o carro antes de retirar o carro;
o cliente só pode alugar os carros que estão na agencia;

###Cadastro do carro

O cadastro do carro deve apresentar modelo,fabricante,ano,placa,tipo de carro, kilometragem fabrica, kilometragem atual
o carro deve ter um historico de kilometragem a cada locação
o carro deve estar vinculado em alguma agencia
o carro deve ter um historico com data por quais agencias que ele foi vinculado


