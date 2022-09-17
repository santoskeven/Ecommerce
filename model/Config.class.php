<?php 

    Class Config{

        //INFORMAÇÕES DO SITE

        const SITE_URL = 'http://localhost';
        const SITE_PASTA = 'Keven/loja/';    
        const SITE_NOME = 'Lojakeven';
        const SITE_EMAIL_ADM = 'r.kevensantos7@gmail.com';

        //INFORMAÇÕES DO BANCO DE DADOS
        const BD_HOST = 'localhost',
              BD_USER = 'root',
              BD_SENHA = '',
              BD_BANCO = 'Lojakeven',
              BD_PREFIX = '';
        
        //INFORMAÇÕES PHPMAILLER
        const EMAIL_HOST = 'smtp.gmail.com',
              EMAIL_USER = 'r.kevensantos7@gmail.com',
              EMAIL_NOME = 'Contato Keven',
              EMAIL_SENHA = 'kevensenha',
              EMAIL_PORTA = 587,
              EMAIL_SMTPAUTH = true,
              EMAIL_SMTPSECURE = "tls", 
              EMAIL_COPIA = 'r.kevensantos7@gmail.com';

    }

?>