<!--
===================================================================================================
||                     HTML de la page de connexion/inscription de StudiolabCloud                ||
===================================================================================================
-->

<!DOCTYPE html>

<!-- En francais -->
<html lang = "fr">

<head>

    <!-- Quelques informations sur ce fichier -->
    <meta charset="utf-8"/>
    <meta name="mot_clé" content="HTML, CSS, JavaScript">
    <meta name="description" content="Page de connexion/inscription">
    <meta name="auteur" content="King Mickaël">
    <meta name="date_de_mise_a_jour" content="12/07/2024">

    <!-- Titre de l'onglet -->
    <title>Studiolab cloud | authentification</title>

    <!-- Lien CSS et JavaScript -->
    @vite(['resources/css/studiolab_connexion_inscription_v2.css', 'resources/js/app.js'])
    <!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
    <!--<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>-->

    <!-- Pour le captcha -->
    {!!htmlScriptTagJsApi()!!}

</head>

<body>

    <main>

        <section>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            <!-- Forme blanche qui cache l'arrière plan -->
            <svg xmlns="http://www.w3.org/2000/svg" id="vision_forme_1" width="1520" height="900" >

                <path
                d=
                "
                M 0 0
                L 1520 60
                L 1520 900
                L 0 900
                Z
                "
                fill="white" stroke="black" stroke-width="0"/>

            </svg>


            <!-- Pour centrer le logo de la page -->
            <div id="main_logo_center">

                <!-- image du logo ici -->
                <img id="main_logo" height="100px" src="{{ asset('build/images/authentification/Logo-Studiolab CLOUD_White.png') }}" alt="logo de l'entreprise Studiolab cloud"/>

            </div>

        </section>

        <section>

            <br>
            <br>
            <br>


            <!-- Pour aligner les formes -->
            <div id="forme_flex_1">

                <div id="forme_connexion"></div>
                <div id="forme_inscription"></div>

            </div>


            <!-- Pour aligner les formes invisibles -->
            <div id="forme_flex_2">

                <!-- Création de la forme invisible pour la partie "connexion" -->
                <div id="forme_connexion_invisible">

                    <!-- Création du formulaire de connexion -->
                    <form action="{{route('login.post')}}" method="POST">

                        @csrf

                        <h3 id="h_connexion_1"><b>Je suis déjà client</b></h3>
                        <h3 id="h_connexion_2">StudiolabCloud</h4>

                        <!-- champ de texte à remplir -->
                        <div id="connexion_e-mail_1">

                            <img id="img_connexion_e-mail_1" height="25px" src="{{ asset('build/images/authentification/baseline-person_outline-1.png') }}" alt="image de personnage">
                            <input id="connexion_e-mail_2" type="email" name="email" placeholder="Identifiant ou addresse email" required>

                        </div>


                        <div id="connexion_mdp_1">

                            <img id="img_connexion_mdp_1" height="25px" src="{{ asset('build/images/authentification/outline-vpn_key-1.png') }}" alt="image de clé">
                            <input id="connexion_mdp_2" type="password" name="password" placeholder="Mot de passe" required>
                            <img id="img_connexion_mdp_2" height="25px" src="{{ asset('build/images/authentification/outline-visibility_off-24px.png') }}" alt="image d'oeil barré">

                        </div>


                        <div id="connexion_bouton_center">

                            <!-- bouton connexion -->
                            <input id="bouton_connexion" type="submit" value="connexion">

                        </div>

                    </form>


                    <div id="connexion_center_1">


                        <div id="connexion_flex_1">

                            <!-- paragraphe -->
                            <img id="img_connexion_info_client" height="20px" src="{{ asset('build/images/authentification/icon_search.png') }}" alt="image de loupe">
                            <span id="p_connexion">Tout savoir sur l'Identifiant client</span>

                        </div>

                        <!-- lien -->
                        <a id="connexion_lien" href="{{route('password.request')}}">Identifiant ou mot de passe oublié ?</a>

                    </div>

                </div>

                <div id="forme_inscription_invisible">

                    <h3 id="h_inscription_1"><b>Je n'ai pas encore de compte</b></h3>
                    <h3 id="h_inscription_2">StudiolabCloud</h4>

                    <!-- Création du formulaire d'inscription -->
                    <form action="{{route('register.post')}}" method="POST" id="formulaire_inscription">

                        @csrf

                        <!-- champ de texte à remplir -->

                        <div id="inscription_prenom_1">

                            <img id="img_prenom" height="25px" src="{{ asset('build/images/authentification/baseline-person_outline-24px.png') }}" alt="image de personnage">
                            <input id="inscription_prenom_2" type="text" name="prenom" placeholder="Prénom" required>

                        </div>

                        <div id="inscription_nom_1">

                            <img id="img_nom" height="25px" src="{{ asset('build/images/authentification/baseline-person_outline-24px.png') }}" alt="image de personnage_2">
                            <input id="inscription_nom_2" type="text" name="nom" placeholder="Nom" required>

                        </div>

                        <div id="inscription_e-mail_1">

                            <img id="img_e-mail" height="25px" src="{{ asset('build/images/authentification/baseline-mail_outline-24px.png') }}" alt="image d'enveloppe">
                            <input id="inscription_e-mail_2" type="email" name="email" placeholder="Adresse E-mail" required>

                        </div>

                        <div id="inscription_mdp_1">

                            <img id="img_mdp_1" height="25px" src="{{ asset('build/images/authentification/outline-vpn_key-24px.png') }}" alt="image de clé">
                            <input id="inscription_mdp_2" type="password" name="password" placeholder="Mot de passe" required>
                            <img id="img_mdp_2" height="25px" src="{{ asset('build/images/authentification/outline-visibility_off-1.png') }}" alt="image d'oeil barré">

                        </div>

                        <div id="inscription_mdp_comfirm_1">

                            <img id="img_mdp_comfirm_1" height="25px" src="{{ asset('build/images/authentification/outline-vpn_key-24px.png') }}" alt="image de clé">
                            <input id="inscription_mdp_comfirm_2" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                            <img id="img_mdp_comfirm_2" height="25px" src="{{ asset('build/images/authentification/outline-visibility_off-1.png') }}" alt="image d'oeil barré">

                        </div>

                        <br>
                        <br>

                        <!-- paragraphe -->
                        <input type="checkbox" id="checkbox_1" name="age_confirmation">
                        <label id="inscription_1">

                            Je comfirme avoir plus de 18 ans
                            <br><div id="inscription_2"> et accepte
                            <a href="studiolab_accueil_v2.css"> les conditions générales de service
                            StudiolabCloud</a></div>

                        </label>

                        <br>

                        <!--
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        -->
                        <!-- Bouton inscription -->
                        <!--
                        <button type="submit" id="bouton_inscription">Inscription</button>
                        -->
<!--
                        <script>

                            function onSubmit(token)
                            {
                              document.getElementById("formulaire_inscription").submit();
                            }

                        </script>
                    -->
                        <!-- bouton inscription-->
<!--
                        <input class="g-recaptcha"
                        data-sitekey="{{config('services.recaptcha.site_key')}}"
                        data-callback='onSubmit'
                        data-action='register'
                        id="bouton_inscription"
                        type="submit"
                        value="inscription">
-->

                        <div id="captcha">

                            <!-- Captcha -->
                            {!!htmlFormSnippet()!!}

                            <!-- Si une erreur  à été repérer lors de la validation du captcha -->
                            @if($errors->has('g-recaptcha-response'))

                            <div>
                                <small>
                                    {{$errors->first('g-recaptcha-response')}}
                                </small>
                            </div>

                            @endif

                        </div>

                        <input
                        id="bouton_inscription"
                        type="submit"
                        value="inscription">


                    </form>





<!--
                    <div class="form-group">
                        {!! NoCaptcha::display() !!}
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif
                    </div>
                -->
                </div>

            </div>


            <!-- paragraphe -->
            <p id="p_note">

                Les données communiquées via ce formulaire sont collectées avec votre consentement
                et sont destinées à Studiolab Cloud en sa qualité de responsable du traitement.
                Elles pourront être transmises à ses sous-traitants agissant sur strictes instructions
                d'OVH S.A.S ainsi qu'aux entités du Groupe OVH. Dans cette seconde hypothèse, et sous
                réserve que l'entité du Groupe OVH ait signé des règles d'entreprise contraignante,
                les données pourront faire l'objet d'un transfert en dehors de ...
                <a href="studiolab_accueil_v2.css"> formulaire dédié</a>

            </p>


            <br>
            <br>
            <br>
            <br>

        <!--
        <svg  xmlns="http://www.w3.org/2000/svg" id="deco_cacher" width="1520" height="1000" >

            <linearGradient id="degrader" x1="0%" x2="100%" y1="0%" y2="0%">
                <stop offset="10%" style="stop-color:#ff5e4d" stop-opacity="1"/>
                <stop offset="90%" style="stop-color:#ffa000" stop-opacity="1"/>
            </linearGradient>

            <path
            d=
            "
            M 1 0
            L 1 750
            Q 300 750  1520 830
            L 1520 0
            Z
            "
            fill="url(#degrader)" stroke="black" stroke-width="3"/>

        </svg>
        -->

        </section>

    </main>

    <footer>
        <!-- Le début du pied de page -->

        <section>

            <!-- afficher du logo au centre -->
            <img id="footer_img_1" height="100px" src="{{ asset('build/images/authentification/Logo-Studiolab CLOUD_White.png') }}" alt="image de logo Studiolab"/>

        </section>

        <section>

            <!-- 2ème paragraphe -->
            <h4 id="footer_h_2">Nos services</h4>

            <!-- forme de ligne ajuster sous le titre -->
            <div id="footer_forme_3"></div>
            <div id="footer_forme_4"></div>

            <!-- liste à droite -->
            <ul id="footer_ul_1">
                <li id="footer_li_1">Choisissez votre infrastructure</li>
                <li id="footer_li_2">Démarrez votre projet cloud</li>
                <li id="footer_li_3">Gérez votre présence en ligne</li>
                <li id="footer_li_4">Optez pour une solution Entreprise</li>
            </ul>

            <!-- Pour personaliser les puces -->
            <div id="footer_ul_2"></div>
            <div id="footer_ul_3"></div>
            <div id="footer_ul_4"></div>
            <div id="footer_ul_5"></div>


            <!-- 1er pargraphe -->
            <h4 id="footer_h_1">À propos de Nous!</h4>

            <!-- forme de ligne ajuster sous le titre -->
            <div id="footer_forme_1"></div>
            <div id="footer_forme_2"></div>

            <p id="footer_p_1">
                Partenaire de croissance par excellence, notre agence est là pour accompagner
                les entreprises dans la digitalisation de leur métier. Notre équipe est issue
                de la génération numérique et évolue sans complexes dans ce flux d'informations
                et de nouvelles technologies. Notre mission est de vous conseiller et vous faire
                profiter de nos compétences graphiques ergonomiques et techniques à chaque étape
                de votre projet.
            </p>

        </section>

        <section>

            <!-- Création d'un dessin d'une maison -->
            <!--
            <svg id="footer_dessin_maison" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" width="50" height="50">

            <path d=
            "
            M 10 60
            l 50 -50  50 50
            m -30 -30
            v -20
            h 20
            v 40
            m 5 5
            l -5 60
            m -30 0
            v -20
            c 0 -10   -20 -10   -20 0
            v 20
            m 50 0
            h -80
            l -5 -60
            "
            fill="none" stroke="orange" stroke-width="3"/>

            <circle cx="60" cy="50" r="10" stroke="orange" stroke-width="3" fill="none"/>
            -->

        </svg>

            <div id="footer_flex_1">

                <!-- Ajouter une image ici -->
                <img id="footer_img_2" height="50x" src="{{ asset('build/images/authentification/Plan de travail 3@4x-8.png') }}" alt="image de maison"/>
                <p id="footer_p_2">+ 33 1 85 11 08 46</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_3" height="38px" src="{{ asset('build/images/authentification/Plan de travail 4@4x-8.png') }}" alt="téléphone"/>
                <p id="footer_p_3">+ 33 6 60 82 35 79</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_4" height="38px" src="{{ asset('build/images/authentification/Plan de travail 5@4x-8.png') }}" alt="image d'enveloppe"/>
                <p id="footer_p_4">contact@Studiolab.fr</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_5" height="38px" src="{{ asset('build/images/authentification/Plan de travail 6@4x-8.png') }}" alt="image de maison"/>
                <p id="footer_p_5">RIVES DE SEINE, France</p>

            </div>

            <p id="footer_p_6">
                1 rue Julius et Ethel Rosenberg immeuble SCENEO - 95870 Bezons
                <br>SIRET 84823412600011 Gérant Stéphane BIEBER
            </p>

        </section>


        <section>

            <div id="footer_flex_2">

                <p id="footer_p_7">Copyright © 2021 studiolabcloud</p>
                <p id="footer_p_8">Developed by Studiolab</p>

                <!-- Lien cliquable -->
                <a id="footer_a" href="">Mentions légales</a>

            </div>

        </section>

    </footer>

    <!-- Pour charger le script JavaScript reCAPTCHA -->
<!--
    {!! NoCaptcha::renderJs() !!}
-->

    <!-- Script JavaScript pour gérer le reCAPTCHA v3 -->
    <!--
    <script>
        document.getElementById('bouton_inscription').addEventListener('click', function(event) {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'register'}).then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    document.getElementById('formulaire_inscription').submit();
                });
            });
        });
    </script>
-->
</body>

</html>
