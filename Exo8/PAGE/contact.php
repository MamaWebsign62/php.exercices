<!--CONTACT-->
        <section id="Contact">
            <img src="IMG/flower5.jpg" width="1000" height="667" alt="plantes en pots">

        <form id="form" method="post" action="./PAGE/cible.php" style="margin-top:30px;margin-bottom:20px;">
        		<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                    <tbody>
                        <div>
                        	<label for="nom">* </span>Votre nom :</label><br><br>
                            <input style="width:97.5%;" type="text" name="nom" id="nom" required/>
                        </div>

                        <div style="margin-top:10px;">
                        	<label for="prenom">* Votre prénom :</label><br><br>
                       		<input style="width:97.5%;" type="text" name="prenom" id="prenom" required/>
                        </div>

                        <div style="margin-top:10px;">
                        	<label for="mail">* Votre email :</label><br><br>
                            <input style="width:97.5%;" type="text" name="mail" id="mail" required/>
                        </div>

                        <div style="margin-top:10px;">
                        	<label for="subject">* Votre sujet :</label><br><br>
                            <input style="width:97.5%;" type="text" name="objet" id="objet" required/>
                        </div>

                        <div style="margin-top:10px;">
                        	<label>* Votre message :</label><br><br>
                            <textarea name="message" id="message" rows="10" cols="50" placeholder="Message..." style="width:97.5%;"></textarea>
                        </div>

                        <div class="btn-right" style="margin-top:20px;">
                        	<input id="reset" type="reset" name="reset">
                        	<input id="envoyer" type="submit" value="Envoyer" name="submit">
                        </div>
                    </tbody>
                </table>
        	</form>
      </section>
