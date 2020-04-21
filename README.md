# Laravel eCommerce Brazil Customer (Em Desenvolvimento)

Módulo criado para adicionar campos de Pessoa Física e Jurídica requeridos pela maioria de métodos de pagamentos do mercado brasileiro.

<!---
Para maiores informações acesse a página da extenção oficial [clicando aqui](https://bagisto.com/en/extensions/laravel-ecommerce-correios-shipping/)

For futher informations [click here](https://bagisto.com/en/extensions/laravel-ecommerce-correios-shipping/)
-->

## Instalação

1- Run `composer require cagartner/bagisto-brazilcustomer` in your bagisto project

3- Rodar `php artisan migrate` adicionar os novos campos na tabela dos clientes.

## Configurações

Para configurar seu módulo acesse: Admin > Configurar > Vendas > Métodos de Pagamento > Pagseguro.

Configurações disponíveis:

* **Título**: Nome do método de pagamento.
* **Descrição**: Opcional
* **Tipo de Checkout**: Tipo de checkout, redirect (A venda é finalizada no site do pagseguro), ou lightbox (A venda é finalizada em um popuo na própria loja).
* **Pagseguro Email**: E-mail da conta criada no Pagseguro que irá receber os pagamentos.
* **Status**: Ativa ou desativa o método de pagamento
<!-- * **Quantidade de Parcelas sem Juros**: Quantidade de parcelas que seu cliente poderá comprar sem ter que pagar juros (Você assumirá essas taxas).
* **Quantidade Máxima de Parcelas**: Quantidade máxima de parcelas que seus clientes poderão parcelar -->

## Me pague uma cerveja:

Se gostou do trabalho e quiser me pagar uma cerveja, pode me fazer uma doação pelo PicPay: @cagartner

## Conheça outros Packages para Bagisto

* [Bagisto - Pagseguro](https://github.com/cagartner/bagisto-pagseguro)
* [Bagisto - Correios](https://github.com/cagartner/bagisto-correios)
 
