### 1- Acessar o arquivo "aula.js" da aula e extrair os "Imports". 
*Observações:*
- "Imports" é um Array de de questões, cada item desse Array é um caminho de uma questão.
- Pra pegar o conteúdo do arquivo "aula.js", utilize a função "file_get_contents()" e para transformar o conteúdo em Objeto PHP
- utilize a função "json_decode()". Mas vai precisar tirar o texto inicial "var $configuracao=" antes de executar a função "json_decode()".



### 2- Acessar cada questão e extrair as seguintes informações:
    - id: 
    - tipo:
    - Alternativas erradas:
        Ex: Alternativas erradas: A, B, C
    - ALternativas corretas:
        Ex: Alternativas corretas: D
    - Imagens (se tiver)
    - Tipo de FeedBack:
