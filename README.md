# 🐳 Projeto PHP Simples com Docker

Este projeto fornece um **ambiente Docker leve para PHP**, ideal para rodar aplicações simples, scripts, testes ou pequenas APIs **sem necessidade de banco de dados**.

Utiliza o **servidor embutido do PHP** (`php -S`) e Docker Compose para facilitar a execução em qualquer ambiente.

---

## 📁 Estrutura do Projeto
.
├── docker/
│ └── php/
│ └── Dockerfile
├── src/
│ └── index.php
├── docker-compose.yml
└── README.md


---

## 🚀 Tecnologias Utilizadas

- PHP 8.2
- Docker
- Docker Compose

---

## ▶️ Como Executar o Projeto

### 1️⃣ Pré-requisitos

Certifique-se de ter instalado:

- Docker
- Docker Compose

Verifique com:

```bash
docker --version
docker compose version

2️⃣ Subir o ambiente

docker compose up -d --build

3️⃣ Acessar no navegador
http://localhost:8000

🔄 Hot Reload

Os arquivos da pasta src/ estão mapeados como volume.
Qualquer alteração no código PHP será refletida automaticamente, sem precisar reiniciar o container.

🛑 Parar o ambiente

docker compose down
