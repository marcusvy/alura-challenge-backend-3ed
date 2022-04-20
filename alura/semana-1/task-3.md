# Leitura de arquivos CSV

A funcionalidade de upload de arquivos deve permitir importar arquivos no formato CSV, que serão os arquivos contendo todas as transações financeiras dos bancos realizadas em um determinado dia.

Cada linha do arquivo CSV representa uma transação financeira distinta e as informações dela são separadas por vírgula.

Uma transação financeira em nossa aplicação representa uma transferência de valor entre contas bancárias, e possui as seguintes informações:

    Banco origem
    Agência origem
    Conta origem
    Banco destino
    Agência destino
    Conta destino
    Valor da transação
    Data e hora da transação

Um exemplo de arquivo CSV contendo transações está disponível aqui nos anexos deste card.

Neste momento você deve apenas alterar o código que recebe o arquivo via upload para realizar também a leitura das informações e imprimir no console cada linha do arquivo importado.

Dica: saiba que um arquivo CSV nada mais é do que um arquivo de texto