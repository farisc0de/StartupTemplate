<?php
include_once './config/config.php';
include_once './vendor/autoload.php';

$config = [
  'admin_email' => 'farisksa79@gmail.com',
  'admin_name' => 'FarisCode'
];

$tpl = new Framework\Template('template');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
  $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
  $name = trim($fname . ' ' . $lname);
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';

  $mailer = new Framework\Mailer();

  $message = str_replace("\n", "<br />", $message);

  if (!emailValid($email)) {
    http_response_code(400);
    echo "اﻟﺮﺟﺎء اﻟﺘﺄﻛﺪ ﻣﻦ اﻟﺒﺮﻳﺪ اﻷﻟﻜﺘﺮﻭﻧﻲ";
  } else {
    $mailer->sendMessage([
      'from_email' => $config['admin_email'],
      'from_name' => $config['admin_name'],
      'to_email' => $email,
      'message_subject' => $subject,
      'message_body' => $tpl->loadTemplate('email', [
        'name' => $name,
        'subject' => $subject,
        'message' => $message
      ])
    ]);
    http_response_code(200);
    echo "ﺷﻜﺮا ﻟﻚ ، ﺳﻮﻑ ﻧﺘﺼﻞ ﺑﻚ ﻗﺮﻳﺒﺎ";
  }
}

function emailValid($email)
{
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  $domain = strtolower(substr($email, strpos($email, '@') + 1));
  $providers = ['gmail.com', 'hotmail.com', 'outlook.com', 'msn.com', 'outlook.sa', 'aol.com', 'protonmail.com'];
  $inarray = in_array($domain, $providers);
  return (filter_var($email, FILTER_VALIDATE_EMAIL) && checkdnsrr($domain) != false && $inarray);
}
