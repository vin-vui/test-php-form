<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données envoyées par le formulaire
  $nom = htmlspecialchars($_POST['nom']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Envoyer l'e-mail de contact
  $to = 'vincent.vuillemin@gmail.com';
  $subject = 'Nouveau message de contact';
  $body = "Nom: $nom\n\nE-mail: $email\n\nMessage:\n$message";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  mail($to, $subject, $body, $headers);

  // Rediriger vers une page de confirmation
  header('Location: confirmation.html');
  exit();
}
?>
