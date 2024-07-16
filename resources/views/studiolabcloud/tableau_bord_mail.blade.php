<!--
==================================================================================================
||                       HTML de la page du tableau de bord avec la boite mail                  ||
==================================================================================================
-->

<!DOCTYPE html>

<!-- En francais -->
<html lang = "fr">

<head>

    <!-- Quelques informations sur ce fichier -->
    <meta charset="utf-8"/>
    <meta name="mot_clé" content="HTML, CSS, JavaScript">
    <meta name="description" content="Page de tableau de bord pour les nouveaux clients (partie gauche)">
    <meta name="auteur" content="King Mickaël">
    <meta name="date_de_mise_a_jour" content="24/05/2024">

    <!-- Titre de l'onglet -->
    <title>Studiolab cloud | tableau de bord | nouveaux clients</title>

    <!-- Lien CSS et JavaScript -->
    <!--
    <link href="tableau_bord_mail.css" rel="stylesheet" type="text/css" media="">
    <script src="prosit2js/prosit2.js"></script>
    -->

    @vite(['resources/css/tableau_bord_mail.css'])

</head>

<body>

    <main>

        <section>
            <!-- header (plus ou moins) -->

            <!-- image de profil ici -->
            <img id="header_img_1" height="80px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de profil"/>

            <br>
            <br>
            <br>


            <div id="header_flex_1">

                <!-- barre de recherche -->

                <input id="header_bouton_de_recherche" type="image" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de téléphone fixe">

                <input id="header_barre_recherche" type="text" placeholder="Recherche dans les messages">

                <!-- bouton langue-->
                <form action="http://localhost/prosit2v3.html">

                    <input id="header_bouton_3" type="submit" value="FR">

                </form>

                <!-- bouton de notification -->
                <form action="http://localhost/prosit2v3.html">

                    <input id="header_bouton_2" type="submit" value="">

                </form>

                <!-- bouton de profil -->
                <form action="http://localhost/prosit2v3.html">

                    <input id="header_bouton_1" type="submit" value="Nom prénom">

                </form>

            </div>

            <br>
            <br>

        </section>

        <!--
         Pour faire apparaître le contenue séléctionner par l'utilisateur sous forme de fenêtre
        <iframe id="droite_droite" src="tableau_bord_client.html" name="" height="100%" width="78.7%" title="tableau de bord"></iframe>
        -->

        <section>

            <br>

            <div class="droite_flex">

                <!-- 1ère colonne -->
                <div id="premiere_colonne_forme_1">

                    <div class="center">

                        <br>

                        <img id="premiere_colonne_img_1" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image d'icone"/>

                        <br>
                        <br>
                        <br>

                        <img id="premiere_colonne_img_2" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image d'icone"/>

                        <br>
                        <br>

                        <img id="premiere_colonne_img_3" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image d'icone"/>

                        <br>
                        <br>

                        <img id="premiere_colonne_img_4" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image d'icone"/>

                        <br>
                        <br>

                        <img id="premiere_colonne_img_5" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image d'icone"/>

                        <br>
                        <br>

                        <img id="premiere_colonne_img_6" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image d'icone"/>

                        <br>
                        <br>

                        <img id="premiere_colonne_img_7" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image d'icone"/>

                    </div>

                </div>

                <!-- 2ème colonne -->
                <div id="deuxieme_colonne_forme_1">

                    <input id="deuxieme_colonne_bouton_1" value="Principal">

                    <br>
                    <br>

                    <hr id="deuxieme_colonne_hr_1">

                    <!-- image dans le bouton "principal" -->
                    <img id="deuxieme_colonne_img_1" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de flèche de bas"/>

                    <img id="deuxieme_colonne_img_2" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image d'actualisation"/>

                </div>


                <!-- 3ème colonne -->
                <div id="troisieme_colonne_forme_1">

                    <h5 id="troisieme_colonne_h_1">Aujourd'hui, 8:26 AM</h5>

                    <img id="troisieme_colonne_img_1" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de points de suspension"/>
                    <img id="troisieme_colonne_img_2" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de poubelle"/>
                    <img id="troisieme_colonne_img_3" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de flèche partage"/>
                    <img id="troisieme_colonne_img_4" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de fichier"/>

                    <hr id="troisieme_colonne_hr_1">

                </div>


                <!-- 4ème colonne -->
                <div id="quatrieme_colonne_forme_1">

                    <a id="quatrieme_colonne_a_1" href="studiolab_accueil_v3.html">+ Ajouter un onglet</a>

                    <img id="quatrieme_colonne_img_1" height="28px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de calendrier"/>
                    <img id="quatrieme_colonne_img_2" height="28px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de fichier"/>
                    <img id="quatrieme_colonne_img_3" height="28px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de liste"/>

                    <br>
                    <br>
                    <br>

                    <hr id="quatrieme_colonne_hr_1">

                </div>

            </div>

        </section>

    </main>

</body>
