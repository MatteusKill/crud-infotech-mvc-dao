# CRUD InfoTech — MVC + DAO

Projeto de estudo desenvolvido durante as aulas do curso técnico em Desenvolvimento de Sistemas, em conjunto com o professor, em sala de aula. O objetivo é praticar a arquitetura **MVC (Model-View-Controller)** combinada com o padrão **DAO (Data Access Object)** em PHP puro, como preparação para um projeto real do curso.

## Sobre o projeto

Aplicação PHP que implementa um CRUD simples (clientes, produtos, vendedores e login) sem uso de frameworks, para fixar os conceitos de:

- Separação de responsabilidades entre **Model**, **View** e **Controller**;
- Acesso a dados isolado em classes **DAO**, uma por entidade;
- Roteamento manual de URLs (sem framework de rotas);
- Autoload de classes via `spl_autoload_register`.

## Estrutura do projeto

```
.
├── Controller/     # Controllers (recebem a requisição e orquestram Model/View)
├── Model/          # Entidades e regras de domínio
├── DAO/            # Classes de acesso a dados (uma por entidade)
├── View/           # Templates HTML/PHP exibidos ao usuário
├── routes.php      # Mapeamento de URL -> Controller
├── autoload.php    # Autoload das classes do projeto
├── config.php      # Constantes e configuração de ambiente (lidas do .env)
├── index.php       # Ponto de entrada da aplicação
├── Dockerfile
└── docker-compose.yml
```

## Tecnologias

- PHP 8.4 (Apache)
- MySQL (via PDO)
- Docker / Docker Compose

## Como rodar o projeto

### Pré-requisitos

- Docker e Docker Compose instalados
- Um servidor MySQL acessível (local ou remoto)

### Passos

1. Clone o repositório:

   ```bash
   git clone git@github.com:MatteusKill/crud-infotech-mvc-dao.git
   cd crud-infotech-mvc-dao
   ```

2. Copie o arquivo de variáveis de ambiente e preencha com os dados do seu banco:

   ```bash
   cp .env.example .env
   ```

3. Suba o container:

   ```bash
   docker compose up -d
   ```

4. Acesse a aplicação em [http://localhost:8000](http://localhost:8000).

## Status

Projeto em desenvolvimento, evoluindo junto com as aulas do curso. Funcionalidades e estrutura ainda estão sendo ajustadas.

## Licença

Distribuído sob a licença MIT. Veja [LICENSE](LICENSE) para mais detalhes.
