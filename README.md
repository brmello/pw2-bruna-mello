## Como criar um projeto em Laravel. 

Laravel é um framework PHP moderno e gratuito usado para criar aplicações web de forma mais rápida e organizada. 
Ele segue o padrão MVC, tem recursos como autenticação, rotas, banco de dados com Eloquent, templates com Blade, 
e muito mais. Ideal para desenvolver desde sites simples até sistemas complexos.

---

## Criando uma aplicação Laravel
Antes de criar seu primeiro aplicativo Laravel, certifique-se de que sua máquina local tenha PHP,
Composer e o instalador do Laravel instalados.

Para verificar se você ja tem todos instalados, execute o seguinte comando no PowerShell:
```
composer -v
```
```
php -v
```
```
laravel -v
```

Se algum comando não for reconhecido siga o seguinte passo:

## Instalando PHP, Composer e Laravel. 
Caso você não tenha os requisitos instalados em sua máquina, os comandos a seguir instalarão o PHP, o Composer e o instalador do Laravel.
(Abra o powershell como administrador)
```
# Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

Se você já tem o PHP e o Composer instalados, você pode instalar o instalador do Laravel via Composer:
```
composer global require laravel/installer
```

## Criando um aplicativo
Após instalar o PHP, o Composer e o instalador do Laravel, você estará pronto para criar uma nova aplicação Laravel.
```
laravel new example-app
```
O instalador do Laravel solicitará que você selecione seu framework de testes, banco de dados e kit inicial preferidos:
```
Which starter kit would you like to install? [None]:
- None
```
```
Which database will your application use? [SQLite]:
- SQLite
```
```
Would you like to run npm install and npm run build? (yes/no) [yes]:
- yes
```
Após responder todas as perguntas acima, você vai usar o comando: 
```
composer run dev
```

Após ter criado seu aplicativo, você consegue abrir ele com o seguinte comando:
```
code .
```

## Como rodar uma aplicação ja criada.
Após executar o comando acima, reinicie sua sessão de terminal.

```
npm install
```
Ele vai instalar as dependências do projeto.

```
npm run build 
```
Aqui ele vai criar a versão otimizada do seu código para produção.

##Abra o seu projeto no Visual Studio Code 
Dentro da pasta do seu projeto terá um arquivo com o nome .env.example

