# Registrar e listar importações realizadas

Para ter um melhor controle das importações que já foram realizadas na aplicação, será necessário deixar registrado cada importação que for realizada.

Altere a código que salva as transações no banco de dados pra que também seja salva a importação que acabou de ser realizada. Por enquanto será necessário gravar apenas duas informações quanto a isso: data/hora que a importação foi realizada e data das transações dessa importação.

Além disso, será necessário exibir numa tabela as importações que foram realizadas. Pode ser em uma página separada ou na própria página de importação, abaixo do formulário de upload.

Um exemplo dessa tela você encontra aqui nos anexos desse card.

Os registros devem ser ordenados pela data das transações, de maneira decrescente.