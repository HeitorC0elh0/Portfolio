{\rtf1\ansi\ansicpg1252\cocoartf2761
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
if ($_SERVER["REQUEST_METHOD"] == "POST") \{\
    $name = $_POST['Name'];\
    $email = $_POST['Email'];\
    $message = $_POST['Message'];\
\
    $to = "rafaelcoelho.160@gmail.com";  // Substitua por seu endere\'e7o de email real\
    $subject = "Novo feedback do portf\'f3lio";\
    $body = "Nome: $name\\nEmail: $email\\n\\nMensagem:\\n$message";\
\
    if (mail($to, $subject, $body)) \{\
        echo "Mensagem enviada com sucesso!";\
    \} else \{\
        echo "Erro ao enviar a mensagem.";\
    \}\
\}\
?>\
}