## Como criar um projeto em Laravel. 

Laravel é um framework PHP moderno e gratuito usado para criar aplicações web de forma mais rápida e organizada. 
Ele segue o padrão MVC, tem recursos como autenticação, rotas, banco de dados com Eloquent, templates com Blade, 
e muito mais. Ideal para desenvolver desde sites simples até sistemas complexos.

---

## Pré-requisitos
- PHP, Composer e Laravel instalados (se não tiver, veja o passo de instalação abaixo)

---

## Verificando Instalações

Para verificar se PHP, Composer e Laravel estão instalados, rode no PowerShell:

```powershell
composer -v
php -v
laravel -v
```

Se algum comando não for reconhecido siga o seguinte passo:

## Instalando PHP, Composer e Laravel. 
Caso você não tenha os requisitos acima instalados, rode no Powershell como Administrador:
```
# Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```
Após executar o comando acima e dar tudo certo, reinicie seu terminal. 

## Após reiniciar o terminal, abra ele dentro da pasta do seu projeto laravel.
Rode no powershell: 

```
npm install
```
```
npm run build 
```

