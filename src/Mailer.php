<?php

namespace Framework;

use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    /**
     * Check if SMTP is enabled then use PHPMailer to send a message
     *
     * @param string $email
     *  The email you want to send a message to
     * @param string $subject
     *  The message subject
     * @param string $body
     *  The message body plain or HTML
     * @return bool
     *  Return true if the message is sent or false otherwise
     */
    public function sendMessage($message)
    {
        $mail = new PHPMailer(false);

        $mail->setLanguage('ar');

        $mail->CharSet = 'UTF-8';

        $mail->Encoding = "base64";

        if (SMTP_STATUS == true) {
            $mail->isSMTP();

            $mail->Host = SMTP_SECURITY . "://" . SMTP_HOST . ":" . SMTP_PORT;
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;
        }

        $mail->setFrom(ADMIN_EMAIL, ADMIN_NAME);

        $mail->addAddress($message['to_email']);

        $mail->isHTML(true);

        $mail->Subject = $message['message_subject'];

        $mail->Body = $message['message_body'];

        return $mail->send();
    }
}
