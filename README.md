<p align="center">
<img src="https://github.com/filipefsf/redecodex/assets/107284442/15ee1606-e2fb-497d-8c12-328dceae1b68" width="370" height="200"/>
</p><!--Logo Igreja-->

<h1 align="center">REDE CODEX</h1><!--Título 1-->
<h2 align="center">Projeto: Rede Social para interação entre desenvolvedores</h2> <!--Título 2-->
<h2 align="center">Site oficial: Ainda não hospedado</h2> <!--Título 2-->

<p align="center">
<img loading="lazy" src="http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=yellow&style=for-the-badge"/>
</p><!--Badge Desenvolvimento-->

<h2>💻📲 DESCRIÇÃO DO PROJETO</h2>

<p align="justify"> O projeto consiste na simulação de uma rede social voltada para desenvolvedores aos moldes do Instagram e Twitter onde os usuários
                    poderão adicionar amigos, compartilhar imagens, conteúdos no feed e etc.</p>
                    
<p align="justify"> O desenvolvimento passa por toda a estrutura de login, cadastro de usuário, verificação de dados, criptografia de senhas,
                    gerenciamento de páginas de forma dinâmica, integração com banco de dados, proteção contra 
                    ataques maliciosos como SQL Injection, responsividade da parte de Front-End e muito mais.</p>

<p align="justify"> Segui a arquitetura MVC para modelagem do sistema onde pude separar as responsabilidades de usuário de funções estritamente ligadas ao banco de dados e também
                    de meios intermediários de controle.</p>

<p align="justify"> Veja abaixo um demonstrativo do sistema em funcionamento. Lembrando que o projeto ainda se encontra em fase de desenvolvimento e algumas funções são 
                    puramente ilustrativas:</p>

https://github.com/filipefsf/redecodex/assets/107284442/1e68f566-a7d7-4f5c-93df-b07f8b9401f5

<h2>⚙️ TECNOLOGIAS UTILIZADAS</h2>

- `PHP`: linguagem principal do projeto, manipulação de URL's tornando-as amigáveis, prevenção de erros, encapsulamento de conteúdos HTML, comunicação com banco de dados, criptografia de senha;
- `Biblioteca PHP`: utilização do composer PHP para instalação de dependências;
- `HTML5`: utilizado para marcação de todas as páginas do website;
- `CSS3`: utilizado para estilização de todas as páginas;
- `JavaScript`: utilizado para alertas ao usuário como alert() em casos de erro;
- `MySQL`: utilização de comandos de conexão e inserção no banco de dados além de protegê-lo contra ataques maliciosos;
- `GitHub`: versionamento de código para a plataforma GitHub;
- `Design Responsivo`: website funciona para diversos tipos de tela de forma que seu conteúdo é adaptado para suportar essa variabilidade.

<h2>💡 FUNCIONALIDADES DO PROJETO</h2>

- `Funcionalidade 1`: permitir ao usuário criar uma nova conta na Codex:
<p align="center">
<img align="center" width="1435" alt="Captura de Tela 2024-02-27 às 18 24 38" src="https://github.com/filipefsf/redecodex/assets/107284442/3d5e48bb-7ca8-4b2a-aba3-bf6c9dd4fe21"><br></p>
<p align="justify"> 1.1. O usuário <strong>DEVE</strong> preencher <strong>TODOS</strong> os campos solicitados, caso contrário obterá o erro:</p>

<p align="center">
<img width="400" alt="Captura de Tela 2024-02-27 às 18 28 16" src="https://github.com/filipefsf/redecodex/assets/107284442/ca416193-1b35-4329-9c31-3071538c7bac">
</p>

<p align="justify"> 1.2. O usuário deve inserir um email ainda não cadastrado, caso contrário obterá um erro:</p>
<p align="center">
<img width="300" alt="Captura de Tela 2024-02-27 às 18 33 00" src="https://github.com/filipefsf/redecodex/assets/107284442/dbbe2783-255e-444f-921e-e478fcbb299f">
<img width="300" alt="Captura de Tela 2024-02-27 às 18 34 50" src="https://github.com/filipefsf/redecodex/assets/107284442/c78a7d38-2b29-4840-89ef-541ee22ac83c">
<img width="400" alt="Captura de Tela 2024-02-27 às 18 37 06" src="https://github.com/filipefsf/redecodex/assets/107284442/1c49de8c-ee61-493b-95cb-9e396cbed684">
</p>

<p align="justify"> 1.3. O usuário deverá inserir uma senha de, pelo menos, 6 dígitos, caso contrário, obterá o seguinte erro:</p>
<p align="center">
<img width="300" alt="Captura de Tela 2024-02-27 às 18 39 10" src="https://github.com/filipefsf/redecodex/assets/107284442/09bd6b52-df18-4e6a-8fa5-57d42cdee01b">
<img width="300" alt="Captura de Tela 2024-02-27 às 18 40 15" src="https://github.com/filipefsf/redecodex/assets/107284442/0d58e92a-5f59-4625-83ab-a1476d75eb4c">
</p>

<p align="justify"> 1.4. O usuário deverá repetir a senha <strong>CORRETAMENTE</strong>, caso contrário, obterá o seguinte erro:</p>
<p align="center">
<img width="400" alt="Captura de Tela 2024-02-27 às 18 41 24" src="https://github.com/filipefsf/redecodex/assets/107284442/d0408e3a-36c6-4460-97da-aa4050333385">
<img width="500" alt="Captura de Tela 2024-02-27 às 18 42 08" src="https://github.com/filipefsf/redecodex/assets/107284442/7f75e049-3945-4734-9632-0b722d019dbe">
</p>

- `Funcionalidade 2`: permitir ao usuário fazer login na rede Codex:
<p align="center">
<img width="700" alt="Captura de Tela 2024-02-27 às 18 45 09" src="https://github.com/filipefsf/redecodex/assets/107284442/4c81c378-8a71-4c17-86e0-9658b28c807f">
</p>

<p align="justify"> 2.1. O usuário deverá inserir um email e senha válidos, caso contrário, obterá os seguintes erros:</p>
<p align="center">
<img width="200" alt="Captura de Tela 2024-02-27 às 18 48 10" src="https://github.com/filipefsf/redecodex/assets/107284442/80cea438-94d5-4bbf-8850-3de9ee655572">
<img width="200" alt="Captura de Tela 2024-02-27 às 18 48 27" src="https://github.com/filipefsf/redecodex/assets/107284442/d1544f75-15ac-45fb-ae8c-4ebd9086435e">
<img width="200" alt="Captura de Tela 2024-02-27 às 18 48 46" src="https://github.com/filipefsf/redecodex/assets/107284442/fd87e471-bb30-43cf-a302-0b16f574d8a1">
<img width="200" alt="Captura de Tela 2024-02-27 às 18 49 02" src="https://github.com/filipefsf/redecodex/assets/107284442/c40dc0af-6e43-4a78-ac70-e73616aa0b3f">
</p>

- `Funcionalidade 3`: permitir ao usuário gerenciar seu perfil após login:
  
https://github.com/filipefsf/redecodex/assets/107284442/15cacb2d-8e17-40d5-bfb8-61cd90ce7515

- `Funcionalidade 4`: permitir ao usuário sair da rede social através do botão 'Sair'. Obs.: se o usuário atualizar a página, a sessão não será "destruída":

https://github.com/filipefsf/redecodex/assets/107284442/2f84755e-64cf-4f03-963a-a811446a7f7f

- `Funcionalidade 5`: as senhas dos usuários devem ser encriptografadas para proteger contra ataques de hackers. O sistema poderá comparar se a senha inserida é igual a guardada no banco de dados, mas ela nunca mais poderá ser descriptografada. Para isso, utilizei a biblioteca Bcrypt do PHP conhecida por sua segurança no armazenamento de dados.

- `Outras funcionalidades`: 
<p align="justify"> - O usuário poderá realizar posts em seu feed pessoal;</p>
<p align="justify"> - O usuário poderá adicionar amigos em sua rede social e visualizar seu feed;</p>
<p align="justify"> - O usuário poderá visualizar seu próprio perfil e atualizar sua foto e descrição do perfil;</p>
<p align="justify"> - <strong>DESAFIO</strong>: os usuários poderão interagir através de um chat.</p>

<h2>OBSERVAÇÕES</h2>
<p align="justify"> - Tenho ciência de que alguns "alertas" de erros soam anti-profissionais ou amadores através de mensagens de alerta por JavaScript, mas este tipo de 
                      especificidade será observada posteriormente;</p>
<p align="justify"> - O sistema ainda está em desenvolvimento e por isso o feed ainda é "genérico" e está em fase de construção;</p>

<h2>🚩CONCLUSÃO</h2>
<p align="justify">   Este, com certeza, é o projeto mais completo ao qual tenho me dedicado nos últimos meses e tem me proporcionado um aprendizado gigantesco no que
                      se refere à estrutura de back-end (principalmente). Foi e tem sido muito divertido todo o processo desde a concepção totalmente original do nome
                      da rede até os desafios que tenho encontrado pelo caminho.</p>
