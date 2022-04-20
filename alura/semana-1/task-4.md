# Salvar transações no banco de dados

Após upload do arquivo CSV e leitura das transações contidas nele, será necessário gravar cada transação em banco de dados.

Você deve configurar a aplicação para se conectar com algum banco de dados de sua preferência, como MySQL, Postgres, Mongo, etc., e implementar um código para salvar nele cada transação lida do arquivo CSV.

Algumas considerações importantes quanto à essa funcionalidade:

1.  Vamos considerar que os arquivos CSV são gerados por outra aplicação, que é responsável pela coleta das transações de cada instituição financeira;
1.  Cada arquivo CSV contém transações de apenas um determinado dia;
1.  A aplicação que faz a geração dos arquivos CSV pode não ser confiável e portanto devemos validar as informações antes de salvar em nosso banco de dados.

Portanto, antes de salvar as transações no banco de dados devemos seguir as seguintes regras:

- Se o arquivo que foi feito upload estiver vazio, uma mensagem de erro deve ser exibida para o usuário, indicando tal situação;
- Ler a primeira transação(primeira linha do arquivo csv) para determinar qual a data das transações desse arquivo em específico;
- Se alguma transação posterior estiver com outra data diferente, ela deve ser ignorada e não ser salva no banco de dados;
- A aplicação não deve "duplicar" transações de um determinado dia, ou seja, se o upload de transações de um determinado dia já tiver sido realizado anteriormente, uma mensagem de erro deve ser exibida ao usuário, indicando que as transações daquela data já foram realizadas;
- Todas as informações da transação são obrigatórias, ou seja, se alguma transação estiver com alguma informação faltando, ela também deve ser ignorada e nao ser salva no banco de dados.

Vamos a um exemplo para reforçar as regras anteriores. Imagine que foi feito upload de um arquivo csv contendo as seguintes linhas:

    BANCO SANTANDER,0001,00002-1,BANCO BRADESCO,0001,00001-1,79800.22,2022-01-01T08:44:00
    BANCO BRADESCO,0001,00001-1,BANCO SANTANDER,0001,00002-1,11.50,2022-01-01T12:32:00
    BANCO BANRISUL,,00001-1,BANCO BRADESCO,0001,00001-1,100,2022-01-01T16:30:00
    BANCO ITAU,0001,00001-1,BANCO BRADESCO,0001,00001-1,19000.50,2022-01-01T16:55:00
    BANCO ITAU,0001,00002-1,BANCO BRADESCO,0001,00001-1,1000,2022-01-12T19:30:00

Nesse caso apenas a primeira, segunda e quarta transações que deverão ser salvas no banco de dados.

A terceira transação está com uma informação faltando, que no caso é agência origem. Já a quinta transação está com data do dia 12/01/2022, sendo que a primeira transação indica o dia 01/01/2022 como dia base das transações do arquivo.

Anexo a este card você pode baixar um arquivo CSV de exemplo para testar na sua aplicação. Ele contém algumas transações inválidas de devem ser ignoradas.
