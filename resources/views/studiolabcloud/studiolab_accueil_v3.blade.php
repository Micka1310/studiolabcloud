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
    <meta name="description" content="Page d'accueil">
    <meta name="auteur" content="King Mickaël">
    <meta name="date_de_mise_a_jour" content="22/05/2024">

    <!-- Titre de l'onglet -->
    <title>Studiolab cloud | accueil</title>

    <!-- Lien CSS et JavaScript -->
    @vite(['resources/css/studiolab_accueil_v3.css', 'resources/js/studiolab_accueil_v3.js'])

</head>

<body>

    <!-- l'entête ici est divisé en 2 parties -->
    <header>

        <!-- forme pour décorer la partie "serveur RISE" -->
        <svg  xmlns="http://www.w3.org/2000/svg" id="serveur_forme_1" width="1520" height="1000" >

            <linearGradient id="Gradient1" x1="0%" x2="100%" y1="0%" y2="0%">
                <stop offset="10%" style="stop-color:#ff5e4d" stop-opacity="1"/>
                <!--<stop offset="50%" stop-color="black" stop-opacity="0.4" />-->
                <stop offset="90%" style="stop-color:#ffa000" stop-opacity="1"/>
            </linearGradient>

            <!-- couleur du fond -->
            <path
            d=
            "
            M 1 0
            L 1 750
            Q 300 750  1520 830
            L 1520 0
            Z
            "
            fill="url(#Gradient1)" stroke="black" stroke-width="0"/>


            <!-- forme en lettre A -->
            <path
            d=
            "
            M 610 0
            Q 500 450  280 758
            Q 320 760  470 767
            L 585 570
            Q 680 350  685 275
            L 720 0
            Z
            "
            fill="#ffffff" stroke="black" stroke-width="0" opacity="0.17"/>

            <path
            d=
            "
            M 610 0
            Q 500 450  280 758
            Q 320 760  445 766
            Q 660 382  720 0
            Z
            "
            fill="#900000" stroke="black" stroke-width="0" opacity="0.07"/>

            <path
            d=
            "
            M 720 0
            Q 800 400  1200 806
            Q 1055 800  960 795
            L 750 450
            Q 700 350  685 275
            L 720 0
            Z
            "
            fill="#ffffff" stroke="black" stroke-width="0" opacity="0.1"/>

            <path
            d=
            "
            M 720 0
            Q 800 400  1150 806
            Q 1055 800  960 795
            L 750 450
            Q 700 350  685 275
            L 720 0
            Z
            "
            fill="#ffffff" stroke="black" stroke-width="0" opacity="0.07"/>

            <!--
            <path
            d=
            "
            M 750 450
            L 960 795
            Q 940 792  920 790
            Z
            "
            fill="#ffffff" stroke="black" stroke-width="0" opacity="0.07"/>
            -->

            <path
            d=
            "
            M 470 767
            L 585 570
            Q 635 500  750 450
            L 768.4 480
            Q 805.5 541  841.3 600
            Q 685 665  600 770
            Z
            "
            fill="#ffffff" stroke="black" stroke-width="0" opacity="0.17"/>

            <path
            d=
            "
            M 470 767
            Q 560 600  771 490
            Q 801 540  841.3 600
            Q 685 665  600 770
            Z
            "
            fill="#900000" stroke="black" stroke-width="0" opacity="0.07"/>

        </svg>


        <!-- forme de cercle à gauche -->
        <div id="serveur_forme_3"></div>
        <div id="serveur_forme_4"></div>
        <div id="serveur_forme_5"></div>
        <div id="serveur_forme_6"></div>
        <div id="serveur_forme_7"></div>
        <div id="serveur_forme_8"></div>
        <div id="serveur_forme_9"></div>
        <div id="serveur_forme_10"></div>
        <div id="serveur_forme_11"></div>
        <div id="serveur_forme_12"></div>
        <div id="serveur_forme_13"></div>
        <div id="serveur_forme_14"></div>

        <div id="serveur_forme_15"></div>
        <div id="serveur_forme_16"></div>
        <div id="serveur_forme_17"></div>
        <div id="serveur_forme_18"></div>
        <div id="serveur_forme_19"></div>
        <div id="serveur_forme_20"></div>
        <div id="serveur_forme_21"></div>
        <div id="serveur_forme_22"></div>
        <div id="serveur_forme_23"></div>
        <div id="serveur_forme_24"></div>
        <div id="serveur_forme_25"></div>
        <div id="serveur_forme_26"></div>


        <!-- forme de cercle à droite -->
        <div id="serveur_forme_27"></div>
        <div id="serveur_forme_28"></div>
        <div id="serveur_forme_29"></div>
        <div id="serveur_forme_30"></div>
        <div id="serveur_forme_31"></div>
        <div id="serveur_forme_32"></div>
        <div id="serveur_forme_33"></div>
        <div id="serveur_forme_34"></div>
        <div id="serveur_forme_35"></div>

        <div id="serveur_forme_36"></div>
        <div id="serveur_forme_37"></div>
        <div id="serveur_forme_38"></div>
        <div id="serveur_forme_39"></div>
        <div id="serveur_forme_40"></div>
        <div id="serveur_forme_41"></div>
        <div id="serveur_forme_42"></div>
        <div id="serveur_forme_43"></div>
        <div id="serveur_forme_44"></div>

        <div id="serveur_forme_45"></div>
        <div id="serveur_forme_46"></div>
        <div id="serveur_forme_47"></div>
        <div id="serveur_forme_48"></div>
        <div id="serveur_forme_49"></div>
        <div id="serveur_forme_50"></div>
        <div id="serveur_forme_51"></div>
        <div id="serveur_forme_52"></div>
        <div id="serveur_forme_53"></div>

        <div id="serveur_forme_54"></div>
        <div id="serveur_forme_55"></div>
        <div id="serveur_forme_56"></div>
        <div id="serveur_forme_57"></div>
        <div id="serveur_forme_58"></div>
        <div id="serveur_forme_59"></div>
        <div id="serveur_forme_60"></div>
        <div id="serveur_forme_61"></div>
        <div id="serveur_forme_62"></div>

        <div id="serveur_forme_63"></div>
        <div id="serveur_forme_64"></div>
        <div id="serveur_forme_65"></div>
        <div id="serveur_forme_66"></div>
        <div id="serveur_forme_67"></div>
        <div id="serveur_forme_68"></div>
        <div id="serveur_forme_69"></div>
        <div id="serveur_forme_70"></div>
        <div id="serveur_forme_71"></div>

        <div id="serveur_forme_72"></div>
        <div id="serveur_forme_73"></div>
        <div id="serveur_forme_74"></div>
        <div id="serveur_forme_75"></div>
        <div id="serveur_forme_76"></div>
        <div id="serveur_forme_77"></div>
        <div id="serveur_forme_78"></div>
        <div id="serveur_forme_79"></div>
        <div id="serveur_forme_80"></div>



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
                                <input id="header_bouton_de_recherche_1" type="image" height="20px" src="{{ asset('build/images/accueil/loupe.png') }}" alt="image de téléphone fixe">
                                <input id="header_barre_de_recherche_1" type="text" placeholder="Rechercher">

                                <!-- image de batiment ici -->
                                <img id="header_image_tel_2" height="20px" src="{{ asset('build/images/accueil/batiment.png') }}" alt="image de téléphone fixe"/>
                                <span id="header_position_2">01 84 25 29 92</span>

                                <!-- image du tel portable ici -->
                                <img id="header_image_tel_1" height="20px" src="{{ asset('build/images/accueil/telephone.png') }}" alt="image de téléphone portable"/>
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
                                <input id="header_bouton_de_recherche_2" type="image" height="20px" src="{{ asset('build/images/accueil/loupe.png') }}" alt="image de téléphone fixe">
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
                                <input id="header_bouton_de_recherche_2" type="image" height="20px" src="{{ asset('build/images/accueil/loupe.png') }}" alt="image de téléphone fixe">
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
            <img class="header_image" height="70px" src="{{ asset('build/images/accueil/Logo-Studiolab CLOUD_White.png') }}" alt="logo Studiolab cloud"/>

            <!-- création du bouton de devis gratuit cacher -->
            <form action="http://localhost/prosit2v3.html">

                <div id="bouton_devis_gratuit_center">
                    <input id="bouton_devis_gratuit_2" type="submit" value="Devis gratuit">
                </div>

            </form>

            <br>
            <br>
            <br>

        </section>

    </header>

    <!-- Début du contenue principal de la page d'accueil -->
    <main>

        <!-- promotion de serveur RISE -->
        <section>




            <!--
            <svg id="" xmlns="http://www.w3.org/2000/svg" fill="red">
                <path d="
                    M 14 0
                    l 2 -2  10 10  -10 10  -2 -2  6.6 -6.6
                    h -20
                    v -2.8
                    h 20
                "/>
            </svg>
            -->

            <br>
            <br>
            <br>


            <!-- Image à aligner sur la droite ici -->
            <img id="main_image_1" height="390px" src="{{ asset('build/images/accueil/Cloud hosting-cuate.png') }}" alt="image de serveur"/>

            <!-- Pour déplacer vers le mileu -->
            <div id="main_droite_1">

                <!-- Ligne personalisé -->
                <p id="p_serveur_1">-</p>

                <p id="p_serveur_2">Public cloud</p>

                <h2 id="h_serveur_1">À partir de 85,49€ HT/mois</h2>
                <h1 id="h_serveur_2">NOUVEAUX</h1>
                <h1 id="h_serveur_3">SERVEUR RISE</h1>
                <p id="p_serveur_3">Démarrer votre premier serveur sur nos nouvelles </p>
                <p id="p_serveur_4">configurations les plus abordables de Studiolab Cloud</p>

                <!-- bouton menant vers un lien pour voir les tarifs -->
                <form action="http://localhost/prosit2v3.html">
                    <input id="bouton_tarif" type="submit" value="Nos tarifs">
                </form>

            </div>

        </section>

        <!-- affichage des tarifs -->
        <section>

            <!-- Pour aligner les formes des tarifs-->
            <div id="main_forme_tarif_principal_1">

                <!-- Création des formes des tarifs-->
                <div class="main_forme_tarif_3"></div>
                <div class="main_forme_tarif_4"></div>
                <div class="main_forme_tarif_4"></div>
                <div class="main_forme_tarif_4"></div>

            </div>


            <!-- Pour aligner tout les paragraphes dans les formes des tarifs (ca marche comme un flex) -->
            <div id="main_forme_tarif_principal_2">

                 <!-- Création de la première forme invisible pour le tarif -->
                <div class="main_forme_tarif_1">

                    <h3 id="h_premier_tarif_1">.com</h3>
                    <h4 id="h_premier_tarif_2">9,99€ HT/an</h4>
                    <h3 id="h_premier_tarif_3">7,49€</h3>
                    <h4 id="h_premier_tarif_4">HT/an</h4>
                    <h4 id="h_premier_tarif_5">soit 8,99€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_premier_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                        blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>


                <!-- Création de la deuxième forme invisible pour le tarif -->
                <div class="main_forme_tarif_2">

                    <h3 id="h_deuxieme_tarif_1">.fr</h3>
                    <h4 id="h_deuxieme_tarif_2">6,99€ HT/an</h4>
                    <h3 id="h_deuxieme_tarif_3">2,49€</h3>
                    <h4 id="h_deuxieme_tarif_4">HT/an</h4>
                    <h4 id="h_deuxieme_tarif_5">soit 3,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_deuxieme_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                        blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>


                <!-- Création de la troisième forme invisible pour le tarif -->
                <div class="main_forme_tarif_2">

                    <h3 id="h_troisieme_tarif_1">.io</h3>
                    <h4 id="h_troisieme_tarif_2">56,99€ HT/an</h4>
                    <h3 id="h_troisieme_tarif_3">37,99€</h3>
                    <h4 id="h_troisieme_tarif_4">HT/an</h4>
                    <h4 id="h_troisieme_tarif_5">soit 45,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_troisieme_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                        blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>


                <!-- Création de la quatrième forme invisible pour le tarif -->
                <div class="main_forme_tarif_2">

                    <h3 id="h_quatrieme_tarif_1">.tech</h3>
                    <h4 id="h_quatrieme_tarif_2">56,99€ HT/an</h4>
                    <h3 id="h_quatrieme_tarif_3">37,99€</h3>
                    <h4 id="h_quatrieme_tarif_4">HT/an</h4>
                    <h4 id="h_quatrieme_tarif_5">soit 45,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_quatrieme_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                        blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>

            </div>


            <!-- Si l'écran est plus petit (1231 px de largeur) -->
            <div class="main_forme_tarif_principal_3">

                <!-- Création des formes des tarifs-->
                <div class="main_forme_tarif_5"></div>
                <div class="main_forme_tarif_6"></div>

            </div>

            <!-- Si l'écran est plus petit (1231 px de largeur) -->
            <div class="main_forme_tarif_principal_3">

                <!-- Création des formes des tarifs-->
                <div class="main_forme_tarif_5"></div>
                <div class="main_forme_tarif_6"></div>

            </div>


            <!-- Si l'écran est plus petit (1231 px de largeur) -->
            <!-- Pour aligner tout les paragraphes dans les formes des tarifs (ca marche comme un flex) -->
            <div id="main_forme_tarif_principal_4">

                <!-- Création de la première forme invisible pour le tarif -->
                <div class="main_forme_tarif_1">

                    <h3 id="h_premier_tarif_1">.com</h3>
                    <h4 id="h_premier_tarif_2">9,99€ HT/an</h4>
                    <h3 id="h_premier_tarif_3">7,49€</h3>
                    <h4 id="h_premier_tarif_4">HT/an</h4>
                    <h4 id="h_premier_tarif_5">soit 8,99€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_premier_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                       blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>


                <!-- Création de la deuxième forme invisible pour le tarif -->
                <div class="main_forme_tarif_2">

                    <h3 id="h_deuxieme_tarif_1">.fr</h3>
                    <h4 id="h_deuxieme_tarif_2">6,99€ HT/an</h4>
                    <h3 id="h_deuxieme_tarif_3">2,49€</h3>
                    <h4 id="h_deuxieme_tarif_4">HT/an</h4>
                    <h4 id="h_deuxieme_tarif_5">soit 3,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_deuxieme_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                       blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>

            </div>

            <!-- Si l'écran est plus petit (1231 px de largeur) -->
            <!-- Pour aligner tout les paragraphes dans les formes des tarifs (ca marche comme un flex) -->
            <div id="main_forme_tarif_principal_5">

                <!-- Création de la troisième forme invisible pour le tarif -->
                <div class="main_forme_tarif_1">

                    <h3 id="h_troisieme_tarif_1">.io</h3>
                    <h4 id="h_troisieme_tarif_2">56,99€ HT/an</h4>
                    <h3 id="h_troisieme_tarif_3">37,99€</h3>
                    <h4 id="h_troisieme_tarif_4">HT/an</h4>
                    <h4 id="h_troisieme_tarif_5">soit 45,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_troisieme_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                       blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>


                <!-- Création de la quatrième forme invisible pour le tarif -->
                <div class="main_forme_tarif_2">

                    <h3 id="h_quatrieme_tarif_1">.tech</h3>
                    <h4 id="h_quatrieme_tarif_2">56,99€ HT/an</h4>
                    <h3 id="h_quatrieme_tarif_3">37,99€</h3>
                    <h4 id="h_quatrieme_tarif_4">HT/an</h4>
                    <h4 id="h_quatrieme_tarif_5">soit 45,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_quatrieme_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                       blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>

            </div>


            <!-- Si l'écran est plus petit (650 px de largeur) -->
            <div class="main_forme_tarif_principal_6">

                <!-- Création des formes des tarifs-->
                <div class="main_forme_tarif_7"></div>

            </div>

            <!-- Pour aligner tout les paragraphes dans les formes des tarifs (ca marche comme un flex) -->
            <div id="main_forme_tarif_principal_7">

                <!-- Création de la première forme invisible pour le tarif -->
                <div class="main_forme_tarif_9">

                    <h3 id="h_premier_tarif_1">.com</h3>
                    <h4 id="h_premier_tarif_2">9,99€ HT/an</h4>
                    <h3 id="h_premier_tarif_3">7,49€</h3>
                    <h4 id="h_premier_tarif_4">HT/an</h4>
                    <h4 id="h_premier_tarif_5">soit 8,99€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_premier_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                       blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>

            </div>

            <div class="main_forme_tarif_principal_6">

                <!-- Création des formes des tarifs-->
                <div class="main_forme_tarif_8"></div>

            </div>

            <!-- Pour aligner tout les paragraphes dans les formes des tarifs (ca marche comme un flex) -->
            <div id="main_forme_tarif_principal_7">

                <!-- Création de la deuxième forme invisible pour le tarif -->
                <div class="main_forme_tarif_10">

                    <h3 id="h_deuxieme_tarif_1">.fr</h3>
                    <h4 id="h_deuxieme_tarif_2">6,99€ HT/an</h4>
                    <h3 id="h_deuxieme_tarif_3">2,49€</h3>
                    <h4 id="h_deuxieme_tarif_4">HT/an</h4>
                    <h4 id="h_deuxieme_tarif_5">soit 3,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_premier_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                       blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>

            </div>

            <div class="main_forme_tarif_principal_6">

                <!-- Création des formes des tarifs-->
                <div class="main_forme_tarif_8"></div>

            </div>

            <!-- Pour aligner tout les paragraphes dans les formes des tarifs (ca marche comme un flex) -->
            <div id="main_forme_tarif_principal_7">

                <!-- Création de la troisième forme invisible pour le tarif -->
                <div class="main_forme_tarif_10">

                    <h3 id="h_troisieme_tarif_1">.io</h3>
                    <h4 id="h_troisieme_tarif_2">56,99€ HT/an</h4>
                    <h3 id="h_troisieme_tarif_3">37,99€</h3>
                    <h4 id="h_troisieme_tarif_4">HT/an</h4>
                    <h4 id="h_troisieme_tarif_5">soit 45,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_premier_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                       blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>

            </div>

            <div class="main_forme_tarif_principal_6">

                <!-- Création des formes des tarifs-->
                <div class="main_forme_tarif_8"></div>

            </div>

            <!-- Pour aligner tout les paragraphes dans les formes des tarifs (ca marche comme un flex) -->
            <div id="main_forme_tarif_principal_7">

                <!-- Création de la quatrième forme invisible pour le tarif -->
                <div class="main_forme_tarif_10">

                    <h3 id="h_quatrieme_tarif_1">.tech</h3>
                    <h4 id="h_quatrieme_tarif_2">56,99€ HT/an</h4>
                    <h3 id="h_quatrieme_tarif_3">37,99€</h3>
                    <h4 id="h_quatrieme_tarif_4">HT/an</h4>
                    <h4 id="h_quatrieme_tarif_5">soit 45,59€ TTC/an</h4>

                    <!-- texte à insérer ici -->
                    <p id="p_premier_tarif_1">Coucou, ceci est un paragraphe pour tester si tout va bien ! ^_^
                       blablablabl aba lbalajzaban bab albnabala balbalbalabalba la blaba lbala</p>

                </div>

            </div>

        </section>


        <section>
            <!-- affichage des clients satisfait -->

            <h4 id="h_succes_client">Succès clients</h4>
            <h4 id="h_succes_client_1">&#x2192;</h4>    <!-- &#x2192; est une référence de caractère qui fait une flèche de droite -->

            <!-- pour aligné les images avec les flèches -->
            <div class="succes_client_flex">

                <!-- Création de bouton en forme de flèche-->
                <button id="bouton_succes_client_gauche">&#10094;</button>  <!-- flèche de gauche -->

                <!-- Pour Créer la zone invisible qui cachera les images s'ils se déplacent trop loin -->
                <div class="img_container">

                    <!-- plusieurs images à insérer ici -->
                    <img class="img_succes_client" id="img_succes_client_1" height="150px" src="{{ asset('build/images/accueil/INA.png') }}" alt="image d'entreprise"/>
                    <img class="img_succes_client" id="img_succes_client_2" height="140px" src="{{ asset('build/images/accueil/maisons-du-monde.png') }}" alt="image d'entreprise"/>
                    <img class="img_succes_client" id="img_succes_client_3" height="160px" src="{{ asset('build/images/accueil/ministere-de-l-interieur.png') }}" alt="image d'entreprise"/>
                    <img class="img_succes_client" id="img_succes_client_4" height="70px" src="{{ asset('build/images/accueil/photobox-logo.png') }}" alt="image d'entreprise"/>
                    <img class="img_succes_client" id="img_succes_client_5" height="150px" src="{{ asset('build/images/accueil/logo-WWF.png') }}" alt="image d'entreprise"/>

                </div>

                <button id="bouton_succes_client_droite">&#10095;</button>  <!-- flèche de droite -->

            </div>


            <!-- Pour faire des test (dev) -->
             <!--
            <p id="position_img_1"></p>
            <p id="position_img_2"></p>
            <p id="position_img_3"></p>
            <p id="position_img_4"></p>
            <p id="position_img_5"></p>

            <p id="nb_deplacement_1"></p>

            <p id="deplacement_img_1"></p>
            <p id="deplacement_img_2"></p>
            <p id="deplacement_img_3"></p>
            <p id="deplacement_img_4"></p>
            <p id="deplacement_img_5"></p>

            <p id="compteur_retour_1"></p>
            <p id="compteur_retour_2"></p>
            <p id="compteur_retour_3"></p>
            <p id="compteur_retour_4"></p>
            <p id="compteur_retour_5"></p>

            <p id="nb_images"></p>

            <p id="taille_container"></p>

            <p id="taille_fenetre"></p>
        -->

        </section>


        <section>
            <!-- affichage des services -->

            <!-- décoration à droite (ligne de points) -->
            <div id="service_forme_1"></div>
            <div id="service_forme_2"></div>
            <div id="service_forme_3"></div>
            <div id="service_forme_4"></div>
            <div id="service_forme_5"></div>
            <div id="service_forme_6"></div>
            <div id="service_forme_7"></div>
            <div id="service_forme_8"></div>
            <div id="service_forme_9"></div>
            <div id="service_forme_10"></div>
            <div id="service_forme_11"></div>
            <div id="service_forme_12"></div>
            <div id="service_forme_13"></div>
            <div id="service_forme_14"></div>
            <div id="service_forme_15"></div>
            <div id="service_forme_16"></div>
            <div id="service_forme_17"></div>
            <div id="service_forme_18"></div>
            <div id="service_forme_19"></div>
            <div id="service_forme_20"></div>
            <div id="service_forme_21"></div>
            <div id="service_forme_22"></div>
            <div id="service_forme_23"></div>
            <div id="service_forme_24"></div>
            <div id="service_forme_25"></div>
            <div id="service_forme_26"></div>
            <div id="service_forme_27"></div>
            <div id="service_forme_28"></div>
            <div id="service_forme_29"></div>
            <div id="service_forme_30"></div>
            <div id="service_forme_31"></div>
            <div id="service_forme_32"></div>
            <div id="service_forme_33"></div>
            <div id="service_forme_34"></div>
            <div id="service_forme_35"></div>
            <div id="service_forme_36"></div>
            <div id="service_forme_37"></div>
            <div id="service_forme_38"></div>
            <div id="service_forme_39"></div>
            <div id="service_forme_40"></div>
            <div id="service_forme_41"></div>
            <div id="service_forme_42"></div>
            <div id="service_forme_43"></div>
            <div id="service_forme_44"></div>
            <div id="service_forme_45"></div>
            <div id="service_forme_46"></div>
            <div id="service_forme_47"></div>
            <div id="service_forme_48"></div>
            <div id="service_forme_49"></div>
            <div id="service_forme_50"></div>
            <div id="service_forme_51"></div>
            <div id="service_forme_52"></div>
            <div id="service_forme_53"></div>
            <div id="service_forme_54"></div>
            <div id="service_forme_55"></div>
            <div id="service_forme_56"></div>
            <div id="service_forme_57"></div>
            <div id="service_forme_58"></div>
            <div id="service_forme_59"></div>
            <div id="service_forme_60"></div>
            <div id="service_forme_61"></div>
            <div id="service_forme_62"></div>
            <div id="service_forme_63"></div>
            <div id="service_forme_64"></div>
            <div id="service_forme_65"></div>
            <div id="service_forme_66"></div>
            <div id="service_forme_67"></div>
            <div id="service_forme_68"></div>
            <div id="service_forme_69"></div>
            <div id="service_forme_70"></div>
            <div id="service_forme_71"></div>
            <div id="service_forme_72"></div>
            <div id="service_forme_73"></div>
            <div id="service_forme_74"></div>
            <div id="service_forme_75"></div>
            <div id="service_forme_76"></div>
            <div id="service_forme_77"></div>
            <div id="service_forme_78"></div>
            <div id="service_forme_79"></div>
            <div id="service_forme_80"></div>
            <div id="service_forme_81"></div>
            <div id="service_forme_82"></div>
            <div id="service_forme_83"></div>
            <div id="service_forme_84"></div>
            <div id="service_forme_85"></div>
            <div id="service_forme_86"></div>
            <div id="service_forme_87"></div>
            <div id="service_forme_88"></div>
            <div id="service_forme_89"></div>
            <div id="service_forme_90"></div>
            <div id="service_forme_91"></div>
            <div id="service_forme_92"></div>
            <div id="service_forme_93"></div>
            <div id="service_forme_94"></div>
            <div id="service_forme_95"></div>
            <div id="service_forme_96"></div>
            <div id="service_forme_97"></div>
            <div id="service_forme_98"></div>


            <!-- décoration en forme de cercle dèrrière le titre -->
            <div id="service_forme_99"></div>
            <div id="service_forme_100"></div>
            <!--<div id="service_forme_200"></div>-->

            <!--
            <div id="service_forme_101"></div>
            <div id="service_forme_102"></div>

            <div id="service_forme_103"></div>

            <div id="service_forme_104"></div>

            <div id="service_forme_105"></div>
            <div id="service_forme_106"></div>
            -->


            <div id="service_forme_flex">

                <!-- Pour créer la forme de ligne -->
                <div id="service_forme_partie_1"></div>
                <div id="service_forme_partie_2"></div>

            </div>

            <h2 id="h_service_1">Nos Services</h2>
            <p id="p_service_2">Découvir nos offres conçues pour votre activité</p>

            <!-- Création d'une flèche -->
            <!--
                viewbox = coin supérieur gauche (x y), coin inférieur droite (x y)
                Ca sert à définir un espace visible pour qu'on voit notre dessin
            -->
            <!--
                Rappel :
                - Si une lettre est en minuscule, on indique la longueur de px qu'on dessine à chaque fois en
                fonction de la dernière position.

                - Si une lettre est majuscule, on idique les coordonnées absolue de la destination du traçage.

                - M : position de départ du 1er point = (position x) (position y)
                - H : dessine une ligne horizontal vers la position indiqué =
                        (valeur de distance entre le point précédent et le point final pour la hauteur)
                - V : dessine une ligne vertical vers la position indiqué =
                        (valeur de distance entre le point précédent et le point final pour la hauteur)
                - C : position d'un point pour la tangente de la courbe = (valeur tangente) (valeur tangente)
                - Q : position du point d'inflexion = (position inflexion)
                - Z : relie le point final au point initial
            -->

            <!--
            <svg class="flèche" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100" height="100" fill="black">
                <path d="
                M 12 2
                l 10 10  -10 10  -1.41 -1.41
                L 18.17 12
                H 2
                v -2
                h 16.17
                l -7.58 -7.59
                L 12 2
                z
                "/>
            </svg>

            <br>

            <svg class="flèche" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 6" width="20" height="50">
                <path d="
                M 14 0
                l 2 -2  10 10  -10 10  -2 -2  6.6 -6.6
                h -20
                v -2.8
                h 20
                "/>
            </svg>
        -->

            <!-- Pour aligner les paragraphes 1 et 2 -->
            <div id="service_forme_flex">

                <!-- 1er paragraphe -->
                <div class="service_position_1">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_1" height="120px" src="{{ asset('build/images/accueil/icone Machine virtuelle.png') }}" alt="image d'ordinateur"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_2"><b>Machines virtuelles</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>


                <!-- 2ème paragraphe (si l'écran est de 1179px ou plus) -->
                <div class="service_position_2">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_2" height="120px" src="{{ asset('build/images/accueil/Icone hebergement cloud.png') }}" alt="image de nuage/feuille/loupe"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_3"><b>Hébérgement Cloud</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>

            </div>


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


            <!-- 2ème paragraphe (si l'écran est de 1178px ou moins) -->
            <div id="service_forme_flex">

                <div class="service_position_3">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_2" height="120px" src="{{ asset('build/images/accueil/Icone hebergement cloud.png') }}" alt="image de nuage/feuille/loupe"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_3"><b>Hébérgement Cloud</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>

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

            </div>


            <!-- Pour aligner les paragraphes 3 et 4 -->
            <div id="service_forme_flex">

                <!-- 3ème paragraphe -->
                <div class="service_position_1">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_3" height="120px" src="{{ asset('build/images/accueil/Icone Télécom.png') }}" alt="image de casque"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_4"><b>Télécom</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>


                <!-- 4ème paragraphe (si l'écran est de 1179px ou plus) -->
                <div class="service_position_2">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_4" height="120px" src="{{ asset('build/images/accueil/icone stockage.png') }}" alt="image de fichier"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_5"><b>Stockage</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>

            </div>


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


            <!-- 4ème paragraphe (si l'écran est de 1178px ou moins) -->
            <div id="service_forme_flex">

                <div class="service_position_3">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_2" height="120px" src="{{ asset('build/images/accueil/Icone hebergement cloud.png') }}" alt="image de nuage/feuille/loupe"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_3"><b>Stockage</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>

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

            </div>


            <!-- Pour aligner les paragraphes 5 et 6 -->
            <div id="service_forme_flex">

                <!-- 5ème paragraphe -->
                <div class="service_position_1">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_4" height="120px" src="{{ asset('build/images/accueil/Icone Entreprise.png') }}" alt="image de nuage/machine"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_6"><b>Entreprise</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>


                <!-- 6ème paragraphe (si l'écran est de 1179px ou plus) -->
                <div class="service_position_2">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_4" height="120px" src="{{ asset('build/images/accueil/Icone Wallet.png') }}" alt="image de compteur"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_7"><b>Wallet</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>

            </div>


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


            <!-- 6ème paragraphe (si l'écran est de 1178px ou moins) -->
            <div id="service_forme_flex">

                <div class="service_position_3">

                    <div class="service_cercle"></div>

                    <!-- Pour centrer l'image dans la forme invisible -->
                    <div id="service_forme_center">

                        <img id="service_img_2" height="120px" src="{{ asset('build/images/accueil/Icone hebergement cloud.png') }}" alt="image de nuage/feuille/loupe"/>

                    </div>

                    <br>
                    <br>

                    <h id="service_h_3"><b>Wallet</b></h>

                    <ul class="service_liste">

                        <li>Managed Kubernetes Service</li>
                        <li>Compute solutions</li>
                        <li>Solutions big data et machine learning</li>
                        <li>Pay-as-you-go</li>
                        <li>AI & machine learning</li>

                    </ul>

                    <br>
                    <br>

                    <!-- Bouton "savoir plus" en dessous de chaque liste -->
                    <form action="http://localhost/prosit2v3.html">

                        <input class="service_bouton" type="submit" value="Savoir plus">

                    </form>

                </div>

            </div>

            <div id="service_forme_107"></div>
            <div id="service_forme_108"></div>
            <div id="service_forme_109"></div>
            <div id="service_forme_110"></div>
            <div id="service_forme_111"></div>
            <div id="service_forme_112"></div>
            <div id="service_forme_113"></div>
            <div id="service_forme_114"></div>
            <div id="service_forme_115"></div>
            <div id="service_forme_116"></div>
            <div id="service_forme_117"></div>
            <div id="service_forme_118"></div>

            <div id="service_forme_119"></div>
            <div id="service_forme_120"></div>
            <div id="service_forme_121"></div>
            <div id="service_forme_122"></div>
            <div id="service_forme_123"></div>
            <div id="service_forme_124"></div>
            <div id="service_forme_125"></div>
            <div id="service_forme_126"></div>
            <div id="service_forme_127"></div>
            <div id="service_forme_128"></div>
            <div id="service_forme_129"></div>
            <div id="service_forme_130"></div>

            <div id="service_forme_131"></div>
            <div id="service_forme_132"></div>
            <div id="service_forme_133"></div>
            <div id="service_forme_134"></div>
            <div id="service_forme_135"></div>
            <div id="service_forme_136"></div>
            <div id="service_forme_137"></div>
            <div id="service_forme_138"></div>
            <div id="service_forme_139"></div>
            <div id="service_forme_140"></div>
            <div id="service_forme_141"></div>
            <div id="service_forme_142"></div>

            <div id="service_forme_143"></div>
            <div id="service_forme_144"></div>
            <div id="service_forme_145"></div>
            <div id="service_forme_146"></div>
            <div id="service_forme_147"></div>
            <div id="service_forme_148"></div>
            <div id="service_forme_149"></div>
            <div id="service_forme_150"></div>
            <div id="service_forme_151"></div>
            <div id="service_forme_152"></div>
            <div id="service_forme_153"></div>
            <div id="service_forme_154"></div>

        </section>

        <section>
            <!-- affichage des partenaires de Studiolab -->

            <!--
            <h4 id="h_partenaire">Nos partenaires &#x2192;</h4>

            <div id="partenaire_flex_v1">

                 plusieurs images à insérer ici
                <img id="partenaire_image" height="80px" src="1280px-Cisco_logo_blue_2016.svg.png" alt="image d'entreprise"/>
                <img class="partenaire_image" height="80px" src="Logo_SFRBusiness.png" alt="image d'entreprise"/>
                <img class="partenaire_image" height="80px" src="logo-xl2.png" alt="image d'entreprise"/>
                <img class="partenaire_image" height="80px" src="Hewlett_Packard_Enterprise_logo.svg.png" alt="image d'entreprise"/>
                <img class="partenaire_image" height="80px" src="check_point_vertical.png" alt="image d'entreprise"/>

            </div>

            <br>
            <br>
            <br>
        -->

            <h4 id="h_partenaire">Nos partenaires &#x2192;</h4>

            <div id="partenaire_flex">


                <button id="bouton_partenaire_gauche">&#10094;</button>


                <div class="img_container_partenaire">


                    <img class="partenaire_img" id="img_partenaire_1" height="100px" src="{{ asset('build/images/accueil/1280px-Cisco_logo_blue_2016.svg.png') }}" alt="image d'entreprise"/>
                    <img class="partenaire_img" id="img_partenaire_2" height="100px" src="{{ asset('build/images/accueil/Logo_SFRBusiness.png') }}" alt="image d'entreprise"/>
                    <img class="partenaire_img" id="img_partenaire_3" height="100px" src="{{ asset('build/images/accueil/logo-xl2.png') }}" alt="image d'entreprise"/>
                    <img class="partenaire_img" id="img_partenaire_4" height="100px" src="{{ asset('build/images/accueil/Hewlett_Packard_Enterprise_logo.svg.png') }}" alt="image d'entreprise"/>
                    <img class="partenaire_img" id="img_partenaire_5" height="100px" src="{{ asset('build/images/accueil/check_point_vertical.png') }}" alt="image d'entreprise"/>

                </div>


                <button id="bouton_partenaire_droite">&#10095;</button>

            </div>


            <!-- Pour faire des test (dev) -->
             <!--
            <p id="position_img_1_partenaire"></p>
            <p id="position_img_2_partenaire"></p>
            <p id="position_img_3_partenaire"></p>
            <p id="position_img_4_partenaire"></p>
            <p id="position_img_5_partenaire"></p>

            <p id="nb_deplacement_1_partenaire"></p>

            <p id="deplacement_img_1_partenaire"></p>
            <p id="deplacement_img_2_partenaire"></p>
            <p id="deplacement_img_3_partenaire"></p>
            <p id="deplacement_img_4_partenaire"></p>
            <p id="deplacement_img_5_partenaire"></p>

            <p id="compteur_retour_1_partenaire"></p>
            <p id="compteur_retour_2_partenaire"></p>
            <p id="compteur_retour_3_partenaire"></p>
            <p id="compteur_retour_4_partenaire"></p>
            <p id="compteur_retour_5_partenaire"></p>

            <p id="nb_images_partenaire"></p>

            <p id="taille_container_partenaire"></p>

            <p id="taille_fenetre_partenaire"></p>
        -->

        </section>

        <section>
            <!-- Partie avec une vidéo de présentation -->

            <!--
<svg width="2000" height="100" >

    <path d="M 0 100 L 100 100 L 100 0 Z" />

</svg>

<br>
-->

            <!-- Création de forme pour décorer -->

            <!--
            <svg id="video_forme" width="120" height="240">

                <linearGradient id="Gradient1" x1="0%" x2="0%" y1="0%" y2="100%">
                  <stop offset="0%" style="stop-color:#ff0000" />
                  <stop offset="50%" stop-color="black" stop-opacity="0.4" />
                  <stop offset="100%" style="stop-color:#00ff00" />
                </linearGradient>
            -->

                <!--
                    Pour la première ligne dans la balise "path" :
                    Si une lettre est en minuscule, on indique qu'on dessine à chaque fois en fonction de la dernière position
                    - M : position de départ du 1er point = (position x) (position y)
                    - H : dessine une ligne horizontal vers la position indiqué =
                        (valeur de distance entre le point précédent et le point final pour la hauteur)
                    - V : dessine une ligne vertical vers la position indiqué =
                        (valeur de distance entre le point précédent et le point final pour la hauteur)
                    - C : position d'un point pour la tangente de la courbe = (valeur tangente) (valeur tangente)
                    - Q : position du point d'inflexion = (position inflexion)
                    - Z : relie le point final au point initial
                 -->


                <!--
                <path
                    d="M 30 100 h27 c -20 0 -20 100 0 100 h-27 Z"
                    stroke="black"
                    stroke-width="1"
                    width="100"
                    height="100"
                    fill="url(#Gradient1)"
                />

            </svg>

            -->

            <!-- Création de la forme qui sert de décoration en arrière plan -->
            <svg  xmlns="http://www.w3.org/2000/svg" id="video_forme_1" width="1520" height="600" >

                <path
                d=
                "
                M 1 100
                L 1 520
                Q 300 520  1520 570
                L 1520 100
                Z
                "
                fill="gray" stroke="black" stroke-width="0"/>

            </svg>



            <!--<svg id="video_forme" width="120" height="240">

                <linearGradient id="Gradient1" x1="0%" x2="0%" y1="0%" y2="100%">
                  <stop offset="0%" stop-color="red" />
                  <stop offset="50%" stop-color="black" stop-opacity="0.4" />
                  <stop offset="100%" stop-color="blue" />
                </linearGradient>

                <rect
                    x="10%"
                    y="0%"
                    rx="15"
                    ry="15"
                    width="100"
                    height="100"
                    fill="url(#Gradient1)"
                />

            </svg>-->

                <!--<div id="video_flex">-->

                    <!-- affichage d'une vidéo de présentation -->
                    <video id="video" width="650" height="320" controls poster="Video BFM aperçu.png">

                        <source src="{{ asset('build/images/accueil/test.mp4') }}" type="video/mp4">
                        <source src="{{ asset('build/images/accueil/movie.ogg') }}" type="video/ogg">
                        Votre navigateur ne prend pas en charge le format de la vidéo :/ .

                    </video>

                    <!-- description à mettre à gauche de la vidéo -->
                    <h3 id="video_h_1">Découvrez notre</h3>
                    <h3 id="video_h_2">Vidéo</h3>

                    <!-- forme qui sert de ligne sous les titres -->
                    <div id="video_forme_2"></div>
                    <div id="video_forme_3"></div>

                    <br>

                    <p id="video_p">
                        <b>Studiolab</b> bénéficie d'une équipe à la fois expérimentée et dynamique qui a su évaluer
                        avec les nouvelles technologies. Nous sommes totalement dévouées afin d'obtenir les
                        meilleurs résultats pour nos clients
                    </p>

<!--</div>-->

        </section>

        <section>
            <!-- affichage des avantages comparer aux concurrents -->

            <div id="differenciant_flex_1">

                <!-- forme qui sert de ligne sous les titres -->
                <div id="differenciant_forme_1"></div>
                <div id="differenciant_forme_2"></div>

            </div>

            <div id="differenciant_center_1">

                <span id="differenciant_span_1"><b>Nos </b></span>
                <span id="differenciant_span_2"><b>différenciants</b></span>

            </div>

            <div id="differenciant_center_2">

                <p>
                    Nos méthodes de travail innovantes ainsi que nos partenariats historiques avec les
                    éditeurs
                </p>

                <p id="differenciant_p_1">
                    et constructeurs du marché nous permet de couvrir l'ensemble des attentes
                    de nos clients
                </p>

            </div>

            <div id="differenciant_flex_2">

                <!-- Créer le cercle qui décore l'image -->
                <div id="differenciant_forme_3">

                    <img id="differenciant_image_1" height="157px" src="{{ asset('build/images/accueil/Satisfied.png') }}" alt="image d'icone"/>
                    <h1 id="differenciant_image_h_1">92%</h1>

                </div>

                <!-- Créer le cercle qui décore l'image -->
                <div id="differenciant_forme_4">

                    <img id="differenciant_image_2" height="117px" src="{{ asset('build/images/accueil/Fill Up Form.png') }}" alt="image d'icone"/>
                    <h1 id="differenciant_image_h_2">89%</h1>

                </div>

                <!-- Créer le cercle qui décore l'image -->
                <div id="differenciant_forme_5">

                    <img id="differenciant_image_3" height="157px" src="{{ asset('build/images/accueil/Thumbs Up.png') }}" alt="image d'icone"/>
                    <h1 id="differenciant_image_h_3">100%</h1>

                </div>

                <!-- Créer le cercle qui décore l'image -->
                <div id="differenciant_forme_6">

                    <img id="differenciant_image_4" height="157px" src="{{ asset('build/images/accueil/Positive Feedback.png') }}" alt="image d'icone"/>
                    <h1 id="differenciant_image_h_4">70%</h1>

                </div>

                <!-- Créer le cercle qui décore l'image -->
                <div id="differenciant_forme_7">

                    <img id="differenciant_image_5" height="117px" src="{{ asset('build/images/accueil/Completed Survey.png') }}" alt="image d'icone"/>
                    <h1 id="differenciant_image_h_5">+500</h1>

                </div>

                <!-- Créer le cercle qui décore l'image -->
                <div id="differenciant_forme_8">

                    <img id="differenciant_image_6" height="157px" src="{{ asset('build/images/accueil/Pie Chart.png') }}" alt="image d'icone"/>
                    <h1 id="differenciant_image_h_6">5%</h1>

                </div>

            </div>

            <div id="differenciant_flex_3">

                <p id="differenciant_image_p_1">De satisfaction clients</p>
                <p id="differenciant_image_p_2">De renouvellement</p>
                <p id="differenciant_image_p_4">De tenue de nos</p>
                <p id="differenciant_image_p_6">Partenaires</p>
                <p id="differenciant_image_p_8">Clients embarqués</p>
                <p id="differenciant_image_p_9">De turnover</p>

            </div>

            <div id="differenciant_flex_4">

                <p id="differenciant_image_p_3">de contrat</p>
                <p id="differenciant_image_p_5">engagements</p>
                <p id="differenciant_image_p_7">technologiques</p>

            </div>




            <!-- affichage d'image ici -->
            <!--<table>
                <tr>
                    <td><img height="100px" src="" alt="image d'icone"/></td>
                    <td><img height="100px" src="" alt="image d'icone"/></td>
                    <td><img height="100px" src="" alt="image d'icone"/></td>
                    <td><img height="100px" src="" alt="image d'icone"/></td>
                    <td><img height="100px" src="" alt="image d'icone"/></td>
                    <td><img height="100px" src="" alt="image d'icone"/></td>
                </tr>
                <tr>
                    <td>92%</td>
                    <td>89%</td>
                    <td>100%</td>
                    <td>70%</td>
                    <td>+500</td>
                    <td>5%</td>
                  </tr>
                <tr>
                    <td>De satisfaction clients</td>
                    <td>De renouvellement</td>
                    <td>De tenue de nos</td>
                    <td>Partenaires</td>
                    <td>Clients embarqués</td>
                    <td>De turnover</td>
                </tr>
                <tr>
                  <td>engagements</td>
                  <td>technologies</td>
                </tr>
            </table>-->

        </section>

        <section>
            <!-- Affichage des arguments pour choisir Studiolab -->

            <!-- Pour centrer le titre -->
            <div id="argument_span_center">

                <span id="argument_span_1"><b>Pourquoi </b></span>
                <span id="argument_span_2"><b>Studiolab Cloud ?</b></span>

            </div>


            <!-- décoration avec des cercles vers la gauche -->
            <div id="argument_forme_3"></div>
            <div id="argument_forme_4"></div>
            <div id="argument_forme_5"></div>
            <div id="argument_forme_6"></div>
            <div id="argument_forme_7"></div>
            <div id="argument_forme_8"></div>
            <div id="argument_forme_9"></div>
            <div id="argument_forme_10"></div>

            <div id="argument_forme_11"></div>
            <div id="argument_forme_12"></div>
            <div id="argument_forme_13"></div>
            <div id="argument_forme_14"></div>
            <div id="argument_forme_15"></div>
            <div id="argument_forme_16"></div>
            <div id="argument_forme_17"></div>
            <div id="argument_forme_18"></div>

            <div id="argument_forme_19"></div>
            <div id="argument_forme_20"></div>
            <div id="argument_forme_21"></div>
            <div id="argument_forme_22"></div>
            <div id="argument_forme_23"></div>
            <div id="argument_forme_24"></div>
            <div id="argument_forme_25"></div>
            <div id="argument_forme_26"></div>

            <div id="argument_forme_27"></div>
            <div id="argument_forme_28"></div>
            <div id="argument_forme_29"></div>
            <div id="argument_forme_30"></div>
            <div id="argument_forme_31"></div>
            <div id="argument_forme_32"></div>
            <div id="argument_forme_33"></div>
            <div id="argument_forme_34"></div>

            <div id="argument_forme_35"></div>
            <div id="argument_forme_36"></div>
            <div id="argument_forme_37"></div>
            <div id="argument_forme_38"></div>
            <div id="argument_forme_39"></div>
            <div id="argument_forme_40"></div>
            <div id="argument_forme_41"></div>
            <div id="argument_forme_42"></div>

            <div id="argument_forme_43"></div>
            <div id="argument_forme_44"></div>
            <div id="argument_forme_45"></div>
            <div id="argument_forme_46"></div>
            <div id="argument_forme_47"></div>
            <div id="argument_forme_48"></div>
            <div id="argument_forme_49"></div>
            <div id="argument_forme_50"></div>

            <div id="argument_forme_51"></div>
            <div id="argument_forme_52"></div>
            <div id="argument_forme_53"></div>
            <div id="argument_forme_54"></div>
            <div id="argument_forme_55"></div>
            <div id="argument_forme_56"></div>
            <div id="argument_forme_57"></div>
            <div id="argument_forme_58"></div>

            <div id="argument_forme_59"></div>
            <div id="argument_forme_60"></div>
            <div id="argument_forme_61"></div>
            <div id="argument_forme_62"></div>
            <div id="argument_forme_63"></div>
            <div id="argument_forme_64"></div>
            <div id="argument_forme_65"></div>
            <div id="argument_forme_66"></div>

            <div id="argument_forme_67"></div>
            <div id="argument_forme_68"></div>
            <div id="argument_forme_69"></div>
            <div id="argument_forme_70"></div>
            <div id="argument_forme_71"></div>
            <div id="argument_forme_72"></div>
            <div id="argument_forme_73"></div>
            <div id="argument_forme_74"></div>


            <div id="argument_forme_75"></div>
            <div id="argument_forme_76"></div>
            <div id="argument_forme_77"></div>
            <div id="argument_forme_78"></div>
            <div id="argument_forme_79"></div>
            <div id="argument_forme_80"></div>
            <div id="argument_forme_81"></div>
            <div id="argument_forme_82"></div>

            <div id="argument_forme_83"></div>
            <div id="argument_forme_84"></div>
            <div id="argument_forme_85"></div>
            <div id="argument_forme_86"></div>
            <div id="argument_forme_87"></div>
            <div id="argument_forme_88"></div>
            <div id="argument_forme_89"></div>
            <div id="argument_forme_90"></div>

            <div id="argument_forme_91"></div>
            <div id="argument_forme_92"></div>
            <div id="argument_forme_93"></div>
            <div id="argument_forme_94"></div>
            <div id="argument_forme_95"></div>
            <div id="argument_forme_96"></div>
            <div id="argument_forme_97"></div>
            <div id="argument_forme_98"></div>

            <div id="argument_forme_99"></div>
            <div id="argument_forme_100"></div>
            <div id="argument_forme_101"></div>
            <div id="argument_forme_102"></div>
            <div id="argument_forme_103"></div>
            <div id="argument_forme_104"></div>
            <div id="argument_forme_105"></div>
            <div id="argument_forme_106"></div>

            <div id="argument_forme_107"></div>
            <div id="argument_forme_108"></div>
            <div id="argument_forme_109"></div>
            <div id="argument_forme_110"></div>
            <div id="argument_forme_111"></div>
            <div id="argument_forme_112"></div>
            <div id="argument_forme_113"></div>
            <div id="argument_forme_114"></div>


            <!-- Création de la forme de flèche qui sert de décoration en arrière plan -->
            <svg xmlns="http://www.w3.org/2000/svg" id="argument_fleche" viewBox="0 -700 2000 1300" width="100" height="100">

                <path d=
                "
                M 0 0
                c 250 300   500 500   1000 200
                c 300 -200   200 -740   -190 -600
                c -250 100   -100 550   300 500
                c 100 -20   600 -200   700 -700
                l 80 300
                m -80 -300
                l -250 200
                "
                fill=none stroke="orange" stroke-width="25"/>

            </svg>

            <!-- Pour déplacer le paragraphe vers la droite -->
            <div id="argument_droite_1">

                <div id="argument_flex_1">

                    <!-- Ajouter un rond au début de la phrase ici -->
                    <div id="argument_forme_1"></div><span id="argument_span_3"><b>À propos</b></span>

                </div>

                <!-- Création d'une ligne pour décorer -->
                <div id="argument_forme_2"></div>

                <p id="argument_p_1">
                    Partenaire de croissance par excellence, notre agence est là pour accompagner
                    les entreprises dans la digitalisation de leur métier. Notre équipe est issue
                    de la génération numérique et évolue sans complexes dans ce flux d'informations
                    et de nouvelles technologies. Notre mission est de vous conseiller et vous faire
                    profiter de nos compétences graphiques, ergonomiques et techniques à chaque étape
                    de votre projet.
                </p>

            </div>

            <!-- Ajouter une image sur la droite ici -->
            <img id="argument_image_1" height="350px" src="{{ asset('build/images/accueil/Team page-rafiki.png') }}" alt="image 'pourquoi Studiolab ?'"/>

            <p id="argument_p_2"><b>Notre</b></p>
            <p id="argument_p_3"><b>team</b></p>


            <!-- Création d'un dessin d'une maison
            <svg id="footer_maison" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" width="50" height="50">

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

            </svg>
        -->

            <!--c -30 0   -54 -30   -54 -54-->

        </section>

        <br>

        <section>
            <!-- Affichage de la vision du digital de Studiolab -->

            <!-- Création de l'arrière-plan de la partie "vision digital" -->
            <!--
                Pour la première ligne dans la balise "path" :
                M : position de départ du 1er point = (x,y)
                L : position du point final d'une droite tracer depuis le dernier point = (x,y)
                h : hauteur à partir d'un point = (valeur de distance entre le point précédent
                et le point final pour la hauteur)
                c : position d'un point pour la tangente de la courbe = (valeur tangente) (valeur tangente)
                Q : position du point d'inflexion = position inflexion(x,y) point final (x,y)
                Z : relie le point final au point initial
            -->
            <svg xmlns="http://www.w3.org/2000/svg" id="vision_forme_1" width="1520" height="660" >

                <path
                d=
                "
                M 1 100
                L 1520 160
                L 1520 655
                L 1 655
                Z
                "
                fill="gray" stroke="black" stroke-width="0"/>

            </svg>

            <!--<svg id="video_forme_1" width="1520" height="600" >

                <path
                d=
                "
                M 1 100
                L 1 520
                Q 300 520 1520 570
                L 1520 100
                Z
                "
                fill="gray" stroke="black" stroke-width="3"/>

            </svg>-->

            <!-- Afficher une image à gauche ici -->
            <img id="vision_img" height="410px" src="{{ asset('build/images/accueil/digital-vision.svg') }}" alt="image 'vision du digital'"/>

            <h3 id="vision_h_1">
                Notre vision<br><div id="vision_h_2">sur le digital</div>
            </h3>

            <!-- création de ligne qui seront sous le titre "Notre vision sur le digital" -->
            <div id="vision_forme_2"></div>
            <div id="vision_forme_3"></div>

            <p id="vision_p">
                La digitalisation du parcours client est le phénomène par lequel les médias et
                canaux digitaux sont de plus en plus présents dans le comportement d'achat
                des clients mais également dans la planification et la réalisation des démarches
                administratives. Nous proposons aujourd'hui aux entreprises, administrations,
                points de vente, hôtels, des solutions de digitalisation et d'amélioration de
                l'expérience client. Cela offre divers avantages, un gain de temps, une solution
                accessible 24h/24 7j/7, l'accès à une information fiable et rapide sans faire la
                queue.
            </p>

        </section>

        <br>
        <br>
        <br>

        <section>
            <!-- Affichage de formulaire de contact (numéro de téléphone) -->

            <!-- Afficher une image à gauche ici -->
            <img id="rappel_img" height="280px" src="{{ asset('build/images/accueil/Plan de travail 40@4x-8.png') }}" alt="image de contact Studiolab"/>

            <h3 id="rappel_h_1">

                <span id="rappel_h_2"><b>StudiolabCloud</b></span>
                <br><span id="rappel_h_3">vous rappelle
                <br>sous</span><b id="rappel_b_1"> 24 heures</b>

            </h3>

            <!-- Formulaire de numéro de téléphone -->
            <form action="http://localhost/prosit2v3.html">

                <input id="rappel_formulaire" type="text" name="telephone" value="" maxlength="10" placeholder="Numéro de téléphone">

            </form>

        </section>

        <section>
            <!-- Affichage de formulaire de contact (e-mail) -->

            <!-- Création de l'arrière-plan de la partie "abonnez vous!" -->
            <!--
                Pour la première ligne dans la balise "path" :
                M : position de départ du 1er point = (x,y)
                L : position du point final d'une droite tracer depuis le dernier point = (x,y)
                h : hauteur à partir d'un point = (valeur de distance entre le point précédent
                et le point final pour la hauteur)
                c : position d'un point pour la tangente de la courbe = (valeur tangente) (valeur tangente)
                Q : position du point d'inflexion = position inflexion(x,y) point final (x,y)
                Z : relie le point final au point initial
            -->
            <svg xmlns="http://www.w3.org/2000/svg" id="abonnez_forme_1" width="1520" height="500" >

                <path
                d=
                "
                M 1 100
                L 1520 40
                L 1520 420
                L 1 420
                Z
                "
                fill="gray" stroke="black" stroke-width="0"/>

            </svg>


            <!-- Afficher une image à droite ici -->
            <img id="abonnez_img" height="260px" src="{{ asset('build/images/accueil/newsletter.png') }}" alt="image de contact Studiolab"/>


            <h3 id="abonnez_h_1">

                <span id="abonnez_h_2"><b>Abonnez-vous</b></span>
                <br><span id="abonnez_h_3">à la Newsletter de</span>
                <br><b id="abonnez_b_1">StudiolabCloud</b>

            </h3>

            <!-- Formulaire de numéro d'adresse e-mail -->
            <form action="http://localhost/prosit2v3.html">

                <input id="abonnez_formulaire" type="text" name="telephone" value="" placeholder="E-mail">

            </form>


            <!-- Création de la forme de flèche qui sert de décoration en arrière plan -->
            <svg xmlns="http://www.w3.org/2000/svg" id="abonnez_fleche" viewBox="0 -700 2000 1300" width="150" height="100">

                <path d=
                "
                M 0 0
                c 250 300   500 500   1000 200
                c 300 -200   200 -740   -190 -600
                c -250 100   -100 550   300 500
                c 100 -20   600 -200   700 -700
                l 80 300
                m -80 -300
                l -250 200
                "
                fill=none stroke="#bbbbbb" stroke-width="25"/>

            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" id="abonnez_forme_2" width="1520" height="500" >

                <path
                d=
                "
                M 1 0
                L 1520 0
                L 1520 30
                L 1 30
                Z
                "
                fill="black" stroke="black" stroke-width="0"/>

            </svg>

        </section>

    </main>

    <footer>
        <!-- Le début du pied de page -->

        <section>

            <!-- afficher du logo au centre -->
            <img id="footer_img_1" height="100px" src="{{ asset('build/images/accueil/Logo-Studiolab CLOUD_White.png') }}" alt="image de logo Studiolab"/>

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
                <img id="footer_img_2" height="50x" src="{{ asset('build/images/accueil/Plan de travail 3@4x-8.png') }}" alt="image de maison"/>
                <p id="footer_p_2">+ 33 1 85 11 08 46</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_3" height="38px" src="{{ asset('build/images/accueil/Plan de travail 4@4x-8.png') }}" alt="téléphone"/>
                <p id="footer_p_3">+ 33 6 60 82 35 79</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_4" height="38px" src="{{ asset('build/images/accueil/Plan de travail 5@4x-8.png') }}" alt="image d'enveloppe"/>
                <p id="footer_p_4">contact@Studiolab.fr</p>

                <!-- Ajouter une image ici -->
                <img id="footer_img_5" height="38px" src="{{ asset('build/images/accueil/Plan de travail 6@4x-8.png') }}" alt="image de maison"/>
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

    <!-- Lien Javascript -->
    <!--
    <script src="studiolab_accueil_v3.js"></script>
    -->
</body>

</html>

