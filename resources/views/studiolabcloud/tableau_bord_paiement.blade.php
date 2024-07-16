<!--
===========================================================================================================================
||                       HTML de la page du tableau de bord pour la partie "paiement" de StudiolabCloud                  ||
===========================================================================================================================
-->

<!DOCTYPE html>

<!-- En francais -->
<html lang = "fr">

<head>

    <!-- Quelques informations sur ce fichier -->
    <meta charset="utf-8"/>
    <meta name="mot_clé" content="HTML, CSS, JavaScript">
    <meta name="description" content="Page de tableau de bord pour les nouveaux clients">
    <meta name="auteur" content="King Mickaël">
    <meta name="date_de_mise_a_jour" content="25/05/2024">

    <!-- Titre de l'onglet -->
    <title>Studiolab cloud | tableau de bord | paiement</title>

    <!-- Lien CSS et JavaScript -->
    <!--
    <link href="tableau_bord_paiement.css" rel="stylesheet" type="text/css" media="">
    <script src="prosit2js/prosit2.js"></script>
    -->

    @vite(['resources/css/tableau_bord_paiement.css'])

</head>


<body>

    <header>

        <!-- image de profil ici -->
        <img id="header_img_1" height="80px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de profil"/>

        <br>
        <br>
        <br>


        <div id="header_flex_1">

            <!-- barre de recherche -->
            <!--
            <input id="header_bouton_de_recherche" type="image" height="100px" src="test_patate.jpeg" alt="image de téléphone fixe">
            -->

            <!--
            <input id="header_barre_recherche" type="text" placeholder="Rechercher">
            -->

            <!-- bouton langue-->
            <form action="http://localhost/prosit2v3.html">

                <input id="header_bouton_1" type="submit" value="FR">

            </form>

            <!-- bouton de notification -->
            <form action="http://localhost/prosit2v3.html">

                <input id="header_bouton_2" type="submit" value="">

            </form>

            <!-- bouton de profil -->
            <form action="http://localhost/prosit2v3.html">

                <input id="header_bouton_3" type="submit" value="Nom prénom">

            </form>

        </div>

        <br>
        <br>

    </header>



    <main>

        <section>
            <!-- partie "moyens" -->

            <br>

            <h4 id="moyens_h_1">Moyens de paiement / <span id="moyens_h_2">Ajouter un moyen de paiement</span></h4>

            <br>

            <h2 id="moyens_h_3"><b>Moyens de paiement</b></h2>

            <br>


            <nav>
                <!-- liens alignés ici -->

                <div class="moyens_flex_1">

                    <a id="moyens_a_1" href="studiolab_accueil_v3.html">Moyens de paiement</a>
                    <a id="moyens_a_2" href="studiolab_accueil_v3.html">Mon compte prépayé</a>
                    <a id="moyens_a_3" href="studiolab_accueil_v3.html">Mes bons d'achat</a>
                    <a id="moyens_a_4" href="studiolab_accueil_v3.html">Mon espace fidélité</a>

                </div>

            </nav>

            <hr id="moyens_hr_1">

            <!-- forme sur la barre -->
            <div id="moyens_forme_1"></div>

            <br>
            <br>


            <!-- 1ère forme contenant un paragraphe -->
            <div id="moyens_forme_2">

                <img id="moyens_img_1" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de panneau danger"/>

                <div class="center">
                    <p id="moyens_p_1">
                        Si vous rencontrez  un problème pour ajouter un nouveau moyen de paiement,
                        veuillez ajouter une exception à votre bloqueur de publicités pour
                        www.studiolabcloud.com, ou veuillez vous connecter via le mode incognito
                        de votre navigateur, puis réessayez. Nous n'afficherons jamais de publicités
                        dans l'espace client. Votre bloqueur de publicités peut interférer avec
                        notre système de paiement.
                    </p>
                </div>

            </div>

            <br>


            <!-- 2ème forme contenant un paragraphe -->
            <div id="moyens_forme_3">

                <img id="moyens_img_2" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de panneau danger"/>

                <div class="center">
                    <p id="moyens_p_2">
                        En outre, si votre premier paiement échoue à être pris en compte, essayez de
                        créer un nouveau moyen de paiement avec la même carte que vous venez d'utiliser.
                        Notre système factuera automatiquement la nouvelle carte.
                    </p>
                </div>

            </div>

            <br>
            <br>

            <img id="moyens_img_3" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de flèche"/>
            <a id="moyens_a_5" href="studiolab_accueil_v3.html">Retour à la page précédente</a>

        </section>

        <section>
            <!-- Partie "ajout" -->

            <br>
            <br>

            <h2 id="ajout_h_1"><b>Ajouter un moyen de paiement</b></h2>

            <hr id="ajout_hr_1">

            <br>

            <img id="ajout_img_1" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de numéro"/>
            <h2 id="ajout_h_2">Choix du moyen de paiement</h2>


            <!-- Pour aligner les formes des moyens de paiement -->
            <div class="ajout_flex">

                <!-- Création des formes des moyens de paiement -->
                <div id="ajout_forme_1"></div>
                <div id="ajout_forme_2"></div>
                <div id="ajout_forme_3"></div>

            </div>


            <!-- Pour aligner les formes invisibles des moyens de paiement -->
            <div class="ajout_flex">

                <!-- 1er moyen de paiement -->
                <div id="ajout_forme_invisible_1">

                    <br>

                    <p id="ajout_p_1">Prélèvement SEPA</p>
                    <img id="ajout_img_2" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de flèches"/>

                    <br>

                </div>


                <!-- 2ème moyen de paiement -->
                <div id="ajout_forme_invisible_2">

                    <br>

                    <p id="ajout_p_2">Carte bancaire</p>
                    <img id="ajout_img_3" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de carte bancaire"/>

                    <br>

                </div>


                <!-- 3ème moyen de paiement -->
                <div id="ajout_forme_invisible_3">

                    <br>

                    <p id="ajout_p_3">Paypal</p>
                    <img id="ajout_img_4" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de Paypal"/>

                    <br>

                </div>

            </div>

            <br>

            <p id="ajout_p_4">
                Pour enregistrer une nouvelle carte bancaire, une empreinte financière est
                faite auprès de votre organisme bancaire afin de valider la saisie et la
                validité de votre carte. Aucun montant ne sera prélevé.
            </p>

            <p id="ajout_p_5">
                Votre carte bancaire sera activé immédiatement.
            </p>

            <form id="ajout_form_1" action="studiolab_accueil_v3.html">

                <!-- case à cocher -->
                <input type="checkbox" id="vehicle1" name="vehicle1" value="">

                <span id="ajout_p_6">
                    Je veux séléctioner ce moyen de paiement par défaut dès
                    sa validation.
                </span>

                <div>
                    <input id="ajout_bouton_1" type="submit" id="" name="" value="suivant">
                </div>

            </form>

            <br>

            <hr id="ajout_hr_2">

            <br>
            <br>

        </section>

    </main>

</body>
