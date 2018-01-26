<!--HOME-->
        <section id="Home">
            <img src="IMG/outdoor-gardening-flowers.jpg" width="1000" height="666" alt="fleur" />


            <div class="bg-opacity">
                <h1>Rose Prévost, La fleuriste Boulonnaise</h1>
                <p>Cette jeune fleuriste a ouvert, depuis peu, son commerce à Boulogne-sur-Mer. Sa spécialité est qu'elle fait pousser ses fleurs dans un bout de terrain qui lui appartient à La Capelle.</p>
                <div class="button-product">
                    <a href="#Product" class="product">Produits</a>
                </div>
            </div>
        </section>


        <!-- Espace de connexion -->
        <?php
        if(!empty($_SESSION['user_id'])){
          $form_connexion = "none";
          $form_deco = "block";
        }else{
          $form_connexion = "block";
          $form_deco = "none";
        }
        ?>

        <form id="connexion" class="form-connexion" action="./PAGE/cible-connexion.php" method="post"
        style="display:<?php echo $form_connexion; ?>;">
          <p>Connectez-vous !!!</p>
          <input type="text" name="pseudo" value="" placeholder="Saississez votre pseudo..." />
          <input type="password" name="pass" value="" placeholder="Saississez votre mot de passe..." />
          <a href="./inscription.php">
            <button type="button" name="button">Inscrivez-vous</button>
          </a>
          <input type="submit" name="connexion" value="Envoyez" class="envoi"/>
        </form>

        <!-- Espace de déconnexion -->
        <form id="deconnexion" class="form-connexion" action="./PAGE/cible-deconnexion.php" method="post"
        style="display:<?php echo $form_deco; ?>;">
          <p class="message-connexion">Bienvenue sur votre espace <?php echo $_SESSION['user_pseudo'];?></p>
          <input type="submit" name="" value="Logout" />
        </form>
