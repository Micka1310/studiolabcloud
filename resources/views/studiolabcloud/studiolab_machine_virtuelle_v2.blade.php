<!--
======================================================================================
||                       HTML de la page d'accueil de StudiolabCloud                ||
======================================================================================
-->

<!DOCTYPE html>

<!-- En francais -->
<html lang = "fr">

<head>

    <!-- Quelques informations sur ce fichier -->
    <meta charset="utf-8"/>
    <meta name="mot_clé" content="HTML, CSS, JavaScript">
    <meta name="description" content="Page de la machine virtuelle">
    <meta name="auteur" content="King Mickaël">
    <meta name="date_de_mise_a_jour" content="23/05/2024">

    <!-- Titre de l'onglet -->
    <title>Studiolab cloud | machine virtuelle</title>

    <!-- Lien CSS et JavaScript -->
    <!--
    <link href="studiolab_machine_virtuelle_v2.css" rel="stylesheet" type="text/css" media="">
    <script src="prosit2js/prosit2.js"></script>
    -->

    @vite(['resources/css/studiolab_machine_virtuelle_v2.css'])

</head>

<body>

    <header>

        <!-- première partie -->
        <section>

            <!-- lien de de la première partie -->
            <nav>

                <!-- Pour aligner à droite -->
                <div class="header_droite_1">

                    <div class="header_flex_1">

                        <!-- Pour créer la forme qui décore les liens de la 1ère partie -->
                        <div id="header_forme_partie_1">

                            <!-- Pour la barre de recherche -->
                            <form action="/rechercher" method="get">

                                <a id="header_lien_5" href="{{route('login.post')}}">Mon compte client</a>
                                <a id="header_lien_4" href="">Contact commercial</a>
                                <a id="header_lien_3" href="">Webmail</a>
                                <a id="header_lien_2" href="">Assistance</a>
                                <a id="header_lien_1" href="{{route('studiolabcloud_accueil')}}">Actualités</a>

                                <!-- barre et bouton de recherche ici -->
                                <input id="header_bouton_de_recherche_1" type="image" height="20px" src="{{ asset('build/images/machine_virtuelle/loupe.png') }}" alt="image de téléphone fixe">
                                <input id="header_barre_de_recherche_1" type="text" placeholder="Rechercher">

                                <!-- image de batiment ici -->
                                <img id="header_image_tel_2" height="20px" src="{{ asset('build/images/machine_virtuelle/batiment.png') }}" alt="image de téléphone fixe"/>
                                <span id="header_position_2">01 84 25 29 92</span>

                                <!-- image du tel portable ici -->
                                <img id="header_image_tel_1" height="20px" src="{{ asset('build/images/machine_virtuelle/telephone.png') }}" alt="image de téléphone portable"/>
                                <span id="header_position_1">06 60 82 35 79</span>

                            </form>

                        </div>

                    </div>

                </div>


                <!-- Si l'écran est trop petit (1020px de largeur)-->

                <!-- Pour aligner à droite -->
                <div class="header_droite_3">

                    <!-- Pour créer la forme qui décore les liens de la 1ère partie -->
                    <div id="header_forme_partie_10">

                        <div class="header_flex_2">

                            <!-- Pour la barre de recherche -->
                            <form action="/rechercher" method="get">

                                <!-- barre et bouton de recherche ici -->
                                <input id="header_bouton_de_recherche_2" type="image" height="20px" src="{{ asset('build/images/machine_virtuelle/loupe.png') }}" alt="image de téléphone fixe">
                                <input id="header_barre_de_recherche_2" type="text" placeholder="Rechercher">

                            </form>

                        </div>

                        <div class="header_flex_3">

                            <!-- Pour la barre de recherche -->
                            <form action="/rechercher" method="get">

                                <a id="header_lien_17" href="{{route('login.post')}}">Mon compte client</a>
                                <a id="header_lien_16" href="">Contact commercial</a>
                                <a id="header_lien_15" href="">Webmail</a>
                                <a id="header_lien_14" href="">Assistance</a>
                                <a id="header_lien_13" href="{{route('studiolabcloud_accueil')}}">Actualités</a>

                            </form>

                        </div>

                    </div>

                </div>


                <!-- Si l'écran est trop petit (650px de largeur)-->

                <!-- Pour aligner à droite -->
                <div class="header_droite_4">

                    <!-- Pour créer la forme qui décore les liens de la 1ère partie -->
                    <div id="header_forme_partie_10">

                        <div class="header_flex_2">

                            <!-- Pour la barre de recherche -->
                            <form action="/rechercher" method="get">

                                <!-- barre et bouton de recherche ici -->
                                <input id="header_bouton_de_recherche_2" type="image" height="20px" src="{{ asset('build/images/machine_virtuelle/loupe.png') }}" alt="image de téléphone fixe">
                                <input id="header_barre_de_recherche_2" type="text" placeholder="Rechercher">

                            </form>

                        </div>

                        <div class="header_flex_3">

                            <!-- Pour la barre de recherche -->
                            <form action="/rechercher" method="get">

                                <a id="header_lien_17" href="{{route('login.post')}}">Mon compte client</a>
                                <a id="header_lien_16" href="">Contact commercial</a>

                            </form>

                        </div>

                        <div class="header_flex_4">

                            <a id="header_lien_15" href="">Webmail</a>
                            <a id="header_lien_14" href="">Assistance</a>
                            <a id="header_lien_13" href="{{route('studiolabcloud_accueil')}}">Actualités</a>

                        </div>

                    </div>

                </div>

            </nav>

        </section>

        <!-- deuxième partie -->
        <section>

            <!-- liens de la 2ème partie -->
            <nav>

                <!-- Cache cette partie si l'écran est trop petit -->
                <div class="header_lien_display_1">

                    <div class="header_lien_flex_1">

                        <div id="header_lien_aligne_12">

                            <a id="header_lien_12" href="{{route('machine_virtuelle')}}">Machines virtuelles</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->
                            <div id="header_forme_partie_9"></div>

                        </div>

                        <div id="header_lien_aligne_11">

                            <a id="header_lien_11" href="">Hébergement Cloud</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->
                            <div id="header_forme_partie_8"></div>

                        </div>

                        <div id="header_lien_aligne_10">

                            <a id="header_lien_10" href="">Stockage</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->
                            <div id="header_forme_partie_7"></div>

                        </div>

                        <div id="header_lien_aligne_9">

                            <a id="header_lien_9" href="">Télécom</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->
                            <div id="header_forme_partie_6"></div>

                        </div>

                        <div id="header_lien_aligne_8">

                            <a id="header_lien_8" href="">Wallet</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->
                            <div id="header_forme_partie_5"></div>

                        </div>

                        <div id="header_lien_aligne_7">

                            <a id="header_lien_7" href="">Entreprise</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->
                            <div id="header_forme_partie_4"></div>


                        </div>

                        <div id="header_lien_aligne_6">

                            <a id="header_lien_6" href="">À propos</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->
                            <div id="header_forme_partie_3"></div>

                        </div>

                    </div>

                </div>


                <!-- Cache cette partie si l'écran est trop grand -->
                <div class="header_lien_display_2">

                    <div class="header_lien_flex_2">

                        <div id="header_lien_aligne_19">

                            <a id="header_lien_12" href="{{route('machine_virtuelle')}}">Machines virtuelles</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->
                            <div id="header_forme_partie_9"></div>

                        </div>

                        <div id="header_lien_aligne_18">

                            <a id="header_lien_11" href="">Hébergement Cloud</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->

                            <div id="header_forme_partie_8"></div>

                        </div>

                        <div id="header_lien_aligne_17">

                            <a id="header_lien_10" href="">Stockage</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->

                            <div id="header_forme_partie_7"></div>


                        </div>

                    </div>

                    <div class="header_lien_flex_3">

                        <div id="header_lien_aligne_16">

                            <a id="header_lien_9" href="">Télécom</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->

                            <div id="header_forme_partie_6"></div>


                        </div>

                        <div id="header_lien_aligne_15">

                            <a id="header_lien_8" href="">Wallet</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->

                            <div id="header_forme_partie_5"></div>


                        </div>

                        <div id="header_lien_aligne_14">

                            <a id="header_lien_7" href="">Entreprise</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->

                            <div id="header_forme_partie_4"></div>


                        </div>

                        <div id="header_lien_aligne_13">

                            <a id="header_lien_6" href="">À propos</a>

                            <!-- Pour créer la forme qui servira comme un sélécteur de lien -->

                            <div id="header_forme_partie_3"></div>


                        </div>

                    </div>

                </div>


                <!-- Pour déplacer vers la droite -->
                <div class="header_droite_2">

                    <!-- création du bouton de devis gratuit -->
                    <form action="http://localhost/prosit2v3.html">

                        <input id="bouton_devis_gratuit_1" type="submit" value="Devis gratuit">

                    </form>

                    <!-- Pour créer la forme qui décore les liens de la 2ème partie -->
                    <div id="header_forme_partie_2"></div>

                </div>

            </nav>

            <!-- image du logo ici -->
            <img class="header_image" height="70px" src="{{ asset('build/images/machine_virtuelle/Logo-Studiolab CLOUD_White.png') }}" alt="logo Studiolab cloud"/>

            <!-- création du bouton de devis gratuit cacher -->

            <form action="http://localhost/prosit2v3.html">

                <div id="bouton_devis_gratuit_center">
                    <input id="bouton_devis_gratuit_2" type="submit" value="Devis gratuit">
                </div>

            </form>

            <!-- image de fonds ici -->
            <div class="header_image_fond_center">
                <img class="header_image_fond_1" height="189.5px" src="{{ asset('build/images/machine_virtuelle/fond_1.png') }}" alt="fond coloré"/>
            </div>

            <div class="header_image_fond_center">
                <img class="header_image_fond_2" height="178.8px" src="{{ asset('build/images/machine_virtuelle/fond_2.png') }}" alt="fond nuage coloré"/>
            </div>

            <br>
            <br>
            <br>

        </section>

    </header>

    <main>

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

        <section>
            <!-- Présentation -->

            <h4 id="presentation_h_1">Machines virtuelles</h4>
            <img id="presentation_img_1" height="20px" src="{{ asset('build/images/machine_virtuelle/batiment_bleu.png') }}" alt="image de batiment"/>

            <!-- Forme de barre sous le titre -->
            <div id="presentation_forme_1"></div>

            <img id="presentation_img_2" height="110px" src="{{ asset('build/images/machine_virtuelle/machine.png') }}" alt="image de machine virtuelle"/>

            <br>

            <!-- Pour déplacer vers la droite -->
            <div id="presentation_droite">

                <!-- Image de schéma -->
                <img id="presentation_img_3" height="220px" src="{{ asset('build/images/machine_virtuelle/schema_machine.png') }}" alt="image de schéma d'une machine virtuelle"/>

                <h3 id="presentation_h_2">Ton nouveau PC</h3>
                <h3 id="presentation_h_3">est dans le <span id="presentation_h_4">Cloud</span></h3>

                <p id=presentation_p_1>
                    Accélérez votre transformation numérique grâce à des solutions de cloud
                    computing économiques. Nos produits et solutions Entreprise aident tous les
                    types et toutes les tailles d'entreprises dans leur transition vers le cloud.
                    Nous proposons une agilité et une innovation accrues par rapport aux
                    environnements informatiques on-premises.
                </p>

            </div>

        </section>

        <br>
        <br>
        <br>
        <br>
        <br>

        <section>
            <!-- Argument PC haute gamme -->

            <h1 id="argument_h_1">La puissance d'un <span id="argument_h_2">PC haut de gamme</span></h1>
            <h1 id="argument_h_3">sur tous tes écrans</h1>

            <br>

            <!-- Pour aligner les partie 1, 2 et 3 -->
            <div class="argument_flex">

                <!-- 1ère partie -->
                <div id="argument_forme_invisible_1">

                    <div class="center">
                        <img id="argument_img_1" height="80px" src="{{ asset('build/images/machine_virtuelle/icone_1.png') }}" alt="image de nuage"/>
                    </div>

                    <div class="center">
                        <h4 id="argument_h_4">La meilleure qualité de streaming</h4>
                    </div>

                    <p id="argument_p_1">
                        Profite de hautes résolutions et de hauts taux de rafraichissement : jusqu'en 4K 60
                        FPS ou 144 FPS en Full HD.
                    </p>

                </div>


                <!-- 2ème partie -->
                <div id="argument_forme_invisible_2">

                    <div class="center">
                        <img id="argument_img_2" height="80px" src="{{ asset('build/images/machine_virtuelle/icone_2.png') }}" alt="image de nuage"/>
                    </div>

                    <div class="center">
                        <h4 id="argument_h_5">Latence imperceptible</h4>
                    </div>

                    <p id="argument_p_2">
                        Lance tous tes logiciels Windows
                        à distance depuis ton Shadow sans
                        latence perceptible.
                    </p>

                </div>


                <!-- 3ème partie -->
                <div id="argument_forme_invisible_3">

                    <div class="center">
                        <img id="argument_img_3" height="80px" src="{{ asset('build/images/machine_virtuelle/icone_3.png') }}" alt="image de nuage"/>
                    </div>

                    <div class="center">
                        <h4 id="argument_h_6">Installe tous les jeux et logiciels</h4>
                        <h4 id="argument_h_7">que tu possèdes</h4>
                    </div>

                    <p id="argument_p_3">
                        Lance tous tes logiciels Windows à
                        distance depuis ton Shadow, sans
                        latence perceptible.
                    </p>

                </div>

            </div>

            <!-- image de fonds ici -->
            <div class="argument_image_fond_center">
                <img class="argument_image_fond_3" height="189.5px" src="{{ asset('build/images/machine_virtuelle/fond_3.png') }}" alt="fond de nuage 3"/>
            </div>

            <div class="argument_image_fond_center">
                <img class="argument_image_fond_4" height="178.8px" src="{{ asset('build/images/machine_virtuelle/fond_4.png') }}" alt="fond de nuage 4"/>
            </div>

        </section>

        <br>
        <br>
        <br>
        <br>

        <section>
            <!-- Présentations des offres -->

            <h2 id="offre_h_1">Nos <span id="offre_h_2">offres</span> de machines virtuelles</h2>

            <p id="offre_p_1">provisionnez des machines virtuelles Windows, Mac</p>
            <p id="offre_p_2">et Linux en quelques secondes</p>

            <br>
            <br>

            <!-- Pour aligner tout les paragraphes dans les formes des tarifs (ca marche comme un flex) -->
            <div class="offre_flex">

                <!-- Création de la 1ère forme invisible pour le tarif -->
                <div id="offre_forme_invisible_1">

                    <div class="center">

                        <div id="offre_forme_img_1">
                            <div class="offre_flex_center">
                                <img id="offre_img_1" height="35px" src="{{ asset('build/images/machine_virtuelle/icone-windows-gris.png') }}" alt="icone de Windows"/>
                                <p id="offre_p_img_1">Windows</p>
                            </div>
                        </div>

                        <h4 id="offre_h_3">M</h4>

                        <!-- forme de barre -->
                        <div id="offre_forme_1"></div>

                        <p id="offre_p_3">2 Cœur / 8 F0 / 150 Go</p>


                        <!-- forme de barre -->
                        <div id="offre_forme_2"></div>

                        <p id="offre_p_4">70 €/<span id="offre_p_5">Mois</span></p>


                        <!-- Bouton commander -->
                        <form action="http://localhost/studiolab_accueil_v3.html">

                            <input id="offre_bouton_1" type="submit" value="Commander">

                        </form>


                        <!-- forme de barre -->
                        <div id="offre_forme_3"><div id="offre_forme_4"></div></div>

                    </div>

                </div>


                <!-- Création de la 2ème forme invisible pour le tarif -->
                <div id="offre_forme_invisible_2">

                    <div class="center">

                        <div id="offre_forme_img_2">
                            <div class="offre_flex_center">
                                <img id="offre_img_2" height="35px" src="{{ asset('build/images/machine_virtuelle/Mac_icon.png') }}" alt="icone de Windows"/>
                                <p id="offre_p_img_2">Mac</p>
                            </div>
                        </div>

                        <p id="offre_p_6">Serveur Dev</p>

                        <!-- forme de barre -->
                        <div id="offre_forme_5"></div>

                        <p id="offre_p_7">2 Cœur / 8 F0 / 20 Go</p>


                        <!-- forme de barre -->
                        <div id="offre_forme_6"></div>

                        <p id="offre_p_8">30 €<span id="offre_p_9">/ Mois</span></p>


                        <!-- Bouton commander -->
                        <form action="http://localhost/studiolab_accueil_v3.html">

                            <input id="offre_bouton_2" type="submit" value="Commander">

                        </form>


                        <!-- forme de barre -->
                        <div id="offre_forme_7"><div id="offre_forme_8"></div></div>

                    </div>

                </div>


                <!-- Création de la 2ème forme invisible pour le tarif -->
                <div id="offre_forme_invisible_3">

                    <div class="center">

                        <div id="offre_forme_img_3">
                            <div class="offre_flex_center">
                                <img id="offre_img_3" height="35px" src="{{ asset('build/images/machine_virtuelle/icone-windows-gris.png') }}" alt="icone de Windows"/>
                                <p id="offre_p_img_3">Linux</p>
                            </div>
                        </div>
                        <!--
                        <img id="" height="100px" src="test_patate.jpeg" alt="image du logo Mac"/>-->
                        <p id="offre_p_10">Serveur Dev</p>

                        <!-- forme de barre -->
                        <div id="offre_forme_9"></div>

                        <p id="offre_p_11">2 Cœur / 8 F0 / 20 Go</p>


                        <!-- forme de barre -->
                        <div id="offre_forme_10"></div>
                        <p id="offre_p_12">30 €<span id="offre_p_13">/ Mois</span></p>

                        <!-- Bouton commander -->
                        <form action="http://localhost/studiolab_accueil_v3.html">

                            <input id="offre_bouton_3" type="submit" value="Commander">

                        </form>


                        <!-- forme de barre -->
                        <div id="offre_forme_11"><div id="offre_forme_12"></div></div>

                    </div>

                </div>

            </div>

        </section>


        <section>
            <!-- Conseil -->

            <h2 id="facile_h_1">Prise en main facile. <span id="facile_h_2">Annule à tout moment</span></h2>

            <!-- Image placé à gauche -->
            <img id="facile_img_1" height="400px" src="{{ asset('build/images/machine_virtuelle/pc_portable.png') }}" alt="image du logo Linux"/>

            <!-- paragraphe placé à droite -->
            <div id="facile_droite">

                <img id="facile_img_2" height="50px" src="{{ asset('build/images/machine_virtuelle/compteur.png') }}" alt="image de compteur"/>
                <h4>Vérifie la configuration requise avant <br>de t'abonner</h4>

                <p id="facile_p_1">
                    StudiolabCloud nécessite une connexion
                    stable avec un dévit d'au moins 15 Mbit/s
                </p>

            </div>

        </section>


        <section>
            <!-- Dernière news -->

            <div id="news_forme_1"><div id="news_forme_2"></div></div>

            <!-- pour centrer les éléments -->
            <div class="center">

                <h4 id="news_h_1">Nos dernière news</h4>

            </div>

            <!-- Pour aligner les paragraphes et images de la 1ère, 2ème et 3ème partie -->
            <div id="news_flex">

                <!-- 1ère partie -->
                <div id="news_forme_invisible_1">

                    <img id="news_img_1" height="180px" src="{{ asset('build/images/machine_virtuelle/derniere_news_1.png') }}" alt="image des news"/>

                    <p id="news_p_1">
                        Optimiser son matériel informatique
                        pour contrer le bug
                    </p>

                </div>


                <!-- 2ème partie -->
                <div id="news_forme_invisible_2">

                    <img id="news_img_2" height="180px" src="{{ asset('build/images/machine_virtuelle/derniere_news_2.png') }}" alt="image des news"/>

                    <p id="news_p_2">
                        Optimiser son matériel informatique
                        pour contrer le bug
                    </p>

                </div>


                <!-- 3ème partie -->
                <div id="news_forme_invisible_3">

                    <img id="news_img_3" height="180px" src="{{ asset('build/images/machine_virtuelle/derniere_news_3.png') }}" alt="image des news"/>

                    <p id="news_p_3">
                        Optimiser son matériel informatique
                        pour contrer le bug
                    </p>

                </div>

            </div>


            <br>
            <br>
            <br>
            <br>


            <div class="center">

            <!-- Lien pour voir plus d'articles -->
            <a href="news_a">Voir plus d'articles de blog</a>

            </div>

            <br>
            <br>
            <br>
            <br>

        </section>

    </main>

    <footer>
        <!-- Le début du pied de page -->

        <section>

            <!-- afficher du logo au centre -->
            <img id="footer_img_1" height="100px" src="{{ asset('build/images/machine_virtuelle/Logo-Studiolab CLOUD_White.png') }}" alt="image de logo Studiolab"/>

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
                <img id="footer_img_2" height="50x" src="{{ asset('build/images/machine_virtuelle/Plan de travail 3@4x-8.png') }}" alt="image de maison"/>
                <p id="footer_p_2">+ 33 1 85 11 08 46</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_3" height="38px" src="{{ asset('build/images/machine_virtuelle/Plan de travail 4@4x-8.png') }}" alt="téléphone"/>
                <p id="footer_p_3">+ 33 6 60 82 35 79</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_4" height="38px" src="{{ asset('build/images/machine_virtuelle/Plan de travail 5@4x-8.png') }}" alt="image d'enveloppe"/>
                <p id="footer_p_4">contact@Studiolab.fr</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_5" height="38px" src="{{ asset('build/images/machine_virtuelle/Plan de travail 6@4x-8.png') }}" alt="image de maison"/>
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

</body>
