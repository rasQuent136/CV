<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Contacter Robert Quentin simplement à l'aide de ce petit formulaire de contact. Retrouvez aussi mes réseaux sociaux.">
    <meta name="keywords" content="robert quentin, robert quentin portfolio, robert quentin développeur web, robert quentin web, robert quentin contact">
    <script src="https://kit.fontawesome.com/6a7d53791c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
  </head>
  <body>
    <nav class="main_nav">
      <a href="index.php">
        <h1 class="logo_title">RQ</h1>
      </a>
      <ul>
        <li><a href="about.php">Présentation</a></li>
        <li><a href="projects.php">Projets</a></li>
        <li><a class="current_page" href="contact.php">Me Contacter</a></li>
      </ul>
    </nav>

    <section class="contact_section text_center ptb_3">
      <h2 class="section_title">Me contacter</h2>
      <p class="section_text">Veuillez laisser votre nom , e-mail ainsi que votre message.</p>
      <form class="ptb_2" method="POST">
        <div class="label_input_fields">
          <div class="name_input">
            <label for="name" class="is_required">Nom</label>
            <input type="text" id="name" placeholder="Votre nom ..." required name="nom">
          </div>
          <div class="email_input">
            <label for="email" class="is_required">E-mail</label>
            <input type="text" id="email" placeholder="Votre e-mail ..." required name="email">
          </div>
          <div class="message_input">
            <label for="message" class="is_required">Message</label>
            <textarea id="message" name ="message" placeholder="Votre message ..." required></textarea>
          </div>
        </div>
        <button type="reset" class="btn btn_cta">Effacer</button>
        <button type="submit" class="btn btn_cta">Envoyer votre message</button>
      </form>
    </section>

        <?php
          if (isset($_POST['message']))  {
              $position_arobase = strpos($_POST['email'] , '@' );
                if ($position_arobase == false)
                    echo '<p>Votre mail, doit comporter un arobase.</p>';
                else {
                      $retour = mail('rasquent136@gmail.com' , 'Envoi depuis la page de Contact' , $_POST['message'] , 'FROM: ' . $_POST['email']);
                      if ($retour) 
                        echo '<p>Votre message a bien été envoyé.</p>';
                       else 
                        echo '<p>Erreur, veuillez recommencer</p>';
                      }
              }
        ?>
    
    <section class="contact_info_section text_center ptb_3">
      <div class="container">
        <div class="contact_info">
          <div>
            <i class="fas fa-envelope fa-2x"></i>
            <h3>E-mail</h3>
            <p>rasquent136@gmail.com</p>
          </div>
          <div>
            <i class="fas fa-phone fa-2x"></i>
            <h3>Téléphone</h3>
            <p>+33636664943</p>
          </div>
          <div>
            <i class="fab fa-github fa-2x"></i>
            <h3>Github</h3>
            <p>@rasQuent136</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="main_footer ptb_3">
      <div class="footer_content container text_center">
        <p>Copyright &copy; 2020 Robert Quentin. Tous droits réservés. <span class="contact_footer">Email: <a href="mailto:rasquent136@gmail.com">rasquent136@gmail.com</a> | Tel: <a href="tel:+636664943">+636664943</a></span></p>
      </div>
    </footer>
  </body>
</html>