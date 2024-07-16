<!--
==================================================================================================================
||                       HTML de la page du tableau de bord pour les clients de StudiolabCloud                  ||
==================================================================================================================
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
    <title>Studiolab cloud | tableau de bord | clients</title>

    <!-- Lien CSS et JavaScript -->
    <!--
    <link href="tableau_bord_client.css" rel="stylesheet" type="text/css" media="">
    <script src="prosit2js/prosit2.js"></script>
    -->

    @vite(['resources/css/tableau_bord_client.css'])

</head>


<body>

    <header>

        <!-- image de profil ici -->
        <img id="header_img_1" height="80px" src="{{ asset('build/images/tableau_bord/img_profil.png') }}" alt="image de profil"/>

        <br>
        <br>
        <br>


        <div id="header_flex_1">

            <!-- barre de recherche -->

            <input id="header_bouton_de_recherche" type="image" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de téléphone fixe">

            <input id="header_barre_recherche" type="text" placeholder="Rechercher">

            <!-- bouton langue -->
            <form action="http://localhost/prosit2v3.html">

                <input id="header_bouton_3" type="submit" value="FR">

            </form>

            <!-- bouton de notification -->
            <form action="http://localhost/prosit2v3.html">

                <input id="header_bouton_2" type="submit" value="">

            </form>

            <!-- bouton de profil -->
            <form action="http://localhost/prosit2v3.html">

                <input id="header_bouton_1" type="submit" value="{{auth()->user()->nom}} {{auth()->user()->prenom}}">

            </form>

        </div>

        <br>
        <br>

    </header>


    <main>

        <section>
            <!-- partie recapitulatif -->

            <br>

            <h2 id="bienvenue_h_1">Bienvenue <span><b>{{auth()->user()->prenom}} !</b></span></h2>

            <!-- forme de barre sous le titre -->
            <div id="bienvenue_forme_1"></div>
            <div id="bienvenue_forme_2"></div>

            <br>

            <!-- pour aligner les formes -->
            <div class="recapitulatif_flex_1">

                <div id="recapitulatif_forme_1"></div>
                <div id="recapitulatif_forme_2"></div>
                <div id="recapitulatif_forme_3"></div>

            </div>

            <!-- pour aligner les formes invisibles -->
            <div class="recapitulatif_flex_1">

                <!-- 1er service -->
                <div id="recapitulatif_forme_invisible_1">

                    <div class="center">

                        <br>

                        <h4 id="recapitulatif_h_1">Dernière commande</h4>

                        <div class="center_1">
                            <div id="recapitulatif_forme_4">
                                <div class="center">
                                    <p id="recapitulatif_p_1">N°1698903784</p>
                                </div>
                            </div>
                        </div>

                        <br>

                        <p id="recapitulatif_p_2"><b>04/12/2021</b> Votre facture est disponible &#10003;</p> <!-- &#10003; = symbole de coche -->

                        <div class="center_1">
                            <!-- bouton de commande -->
                            <form class="recapitulatif_bouton_flex" action="http://localhost/prosit2v3.html">

                                <!-- image de flèche sur la gauche du bouton -->
                                <img id="recapitulatif_img_1" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de flèche"/>
                                <input id="recapitulatif_bouton_1" type="submit" value="Voir mes commandes">

                            </form>
                        </div>

                    </div>

                </div>


                <!-- 2ème service -->
                <div id="recapitulatif_forme_invisible_2">

                    <div class="center">

                        <br>

                        <h4 id="recapitulatif_h_2">Dernière commande</h4>

                        <div class="center_1">
                            <!-- bouton de commande -->
                            <form class="recapitulatif_bouton_flex" action="http://localhost/prosit2v3.html">

                                <!-- image de flèche sur la droite du bouton -->
                                <img id="recapitulatif_img_2" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de flèche"/>
                                <input id="recapitulatif_bouton_2" type="submit" value="Le mois dernier">

                            </form>
                        </div>

                        <br>

                        <span id="recapitulatif_p_3"><b>630,78 €</b></span>
                        <img id="recapitulatif_img_3" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de coche"/>
                        <span id="recapitulatif_p_4">Payé</span>

                        <br>
                        <br>

                        <div class="center_1">
                            <!-- bouton de commande -->
                            <form class="recapitulatif_bouton_flex" action="http://localhost/prosit2v3.html">

                                <!-- image de flèche sur la gauche du bouton -->
                                <img id="recapitulatif_img_4" height="25px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de flèche"/>
                                <input id="recapitulatif_bouton_3" type="submit" value="Voir les factures">

                            </form>
                        </div>

                    </div>

                </div>


                <!-- 3ème service -->
                <div id="recapitulatif_forme_invisible_3">

                    <img id="recapitulatif_img_5" height="150px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de décoration"/>

                    <h4 id="recapitulatif_h_3">Besoin d'aide ?</h4>

                    <br>

                    <p id="recapitulatif_p_5">
                        Des difficultés pour utiliser vos produits et services ?
                        Consultez dès maintenant nos guides.
                    </p>

                    <br>

                    <img id="recapitulatif_img_6" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de flèche"/>

                    <p id="recapitulatif_p_6">
                        Comprendre et utiliser vos services StudiolabCloud
                    </p>

                </div>

            </div>

            <br>

        </section>

        <section>
            <!-- Partie "vos services" -->

            <h2 id="v_service_h_1">Vos services</h2>

            <!-- pour aligner les formes -->
            <div class="v_service_flex_1">

                <div id="v_service_forme_1"></div>
                <div id="v_service_forme_2"></div>
                <div id="v_service_forme_3"></div>

            </div>

            <!-- Pour aligner les formes invisibles -->
            <div class="v_service_flex_1">

                <!-- 1er service -->
                <div id="v_service_forme_invisible_1">

                    <br>

                    <div id="v_service_forme_4">
                        <div class="center">
                            <p id="v_service_p_1">VPS vps 760254</p>
                        </div>
                    </div>

                    <br>

                    <h4 id="v_service_h_2">Statut</h4>

                    <div id="v_service_forme_5">
                        <div class="center">
                            <p id="v_service_p_2">En cours d'exécution</p>
                        </div>
                    </div>

                    <br>

                    <h4 id="v_service_h_3">Espace disque</h4>

                    <span id="v_service_forme_6"><span id="v_service_forme_7"></span></span>
                    <p id="v_service_p_3">32.72 %</p>

                    <br>

                    <h4 id="v_service_h_4">IPv4</h4>

                    <div id="v_service_forme_8">

                        <span id="v_service_p_4">53.92.355.47</span>
                        <img id="v_service_img_1" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    </div>


                    <img id="v_service_img_2" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de points de suspension"/>


                    <h4 id="v_service_h_5">IPv6</h4>

                    <div id="v_service_forme_9">

                        <span id="v_service_p_5">2001:41d0:305:2100:0:0:0:0:9544</span>
                        <img id="v_service_img_3" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    </div>

                    <br>

                    <div id="v_service_forme_10">

                        <div class="center">
                            <span id="v_service_p_6">Renouvellement automatique</span>
                        </div>

                    </div>

                    <img id="v_service_img_4" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    <br>

                    <p id="v_service_p_7">1 janvier 2022</p>

                </div>


                <!-- 2ème service -->
                <div id="v_service_forme_invisible_2">

                    <br>

                    <div id="v_service_forme_4">
                        <div class="center">
                            <p id="v_service_p_1">VPS vps 760254</p>
                        </div>
                    </div>

                    <br>

                    <h4 id="v_service_h_2">Statut</h4>

                    <div id="v_service_forme_5">
                        <div class="center">
                            <p id="v_service_p_2">En cours d'exécution</p>
                        </div>
                    </div>

                    <br>

                    <h4 id="v_service_h_3">Espace disque</h4>

                    <span id="v_service_forme_6"><span id="v_service_forme_7"></span></span>
                    <p id="v_service_p_3">32.72 %</p>

                    <br>

                    <h4 id="v_service_h_4">IPv4</h4>

                    <div id="v_service_forme_8">

                        <span id="v_service_p_4">53.92.355.47</span>
                        <img id="v_service_img_1" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    </div>


                    <img id="v_service_img_2" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de points de suspension"/>


                    <h4 id="v_service_h_5">IPv6</h4>

                    <div id="v_service_forme_9">

                        <span id="v_service_p_5">2001:41d0:305:2100:0:0:0:0:9544</span>
                        <img id="v_service_img_3" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    </div>

                    <br>

                    <div id="v_service_forme_10">

                        <div class="center">
                            <span id="v_service_p_6">Renouvellement automatique</span>
                        </div>

                    </div>

                    <img id="v_service_img_4" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    <br>

                    <p id="v_service_p_7">1 janvier 2022</p>

                </div>


                <!-- 3ème service -->
                <div id="v_service_forme_invisible_3">

                    <br>

                    <div id="v_service_forme_4">
                        <div class="center">
                            <p id="v_service_p_1">VPS vps 760254</p>
                        </div>
                    </div>

                    <br>

                    <h4 id="v_service_h_2">Statut</h4>

                    <div id="v_service_forme_5">
                        <div class="center">
                            <p id="v_service_p_2">En cours d'exécution</p>
                        </div>
                    </div>

                    <br>

                    <h4 id="v_service_h_3">Espace disque</h4>

                    <span id="v_service_forme_6"><span id="v_service_forme_7"></span></span>
                    <p id="v_service_p_3">32.72 %</p>

                    <br>

                    <h4 id="v_service_h_4">IPv4</h4>

                    <div id="v_service_forme_8">

                        <span id="v_service_p_4">53.92.355.47</span>
                        <img id="v_service_img_1" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    </div>


                    <img id="v_service_img_2" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de points de suspension"/>


                    <h4 id="v_service_h_5">IPv6</h4>

                    <div id="v_service_forme_9">

                        <span id="v_service_p_5">2001:41d0:305:2100:0:0:0:0:9544</span>
                        <img id="v_service_img_3" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    </div>

                    <br>

                    <div id="v_service_forme_10">

                        <div class="center">
                            <span id="v_service_p_6">Renouvellement automatique</span>
                        </div>

                    </div>

                    <img id="v_service_img_4" height="20px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de copier-coller"/>

                    <br>

                    <p id="v_service_p_7">1 janvier 2022</p>

                </div>

            </div>

            <br>

        </section>



        <section>
            <!-- partie service -->

            <h2 id="service_h_1">Découvrez nos services</h2>
            <p id="service_p_1">Démarrez l'aventure StudiolabCloud et commandez votre premier produit.</p>

            <br>
            <br>

            <!-- pour aligner les formes -->
            <div id="service_flex_1">

                <div id="service_forme_1"></div>
                <div id="service_forme_2"></div>
                <div id="service_forme_3"></div>
                <div id="service_forme_4"></div>

            </div>

            <!-- pour aligner les formes invisibles -->
            <div id="service_flex_2">

                <!-- 1er service -->
                <div id="service_forme_invisible_1">

                    <div class="center">

                        <br>
                        <br>

                        <!-- image -->
                        <img id="service_img_1" height="100px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image_non attribué"/>

                        <h4>Machines</h4>
                        <h4 id="service_h_2">virtuelles</h4>

                        <p id="service_p_2">Projet public Cloud</p>

                        <br>
                        <br>

                        <!-- bouton de commande -->
                        <form action="http://localhost/prosit2v3.html">

                            <input class="service_bouton_1" type="submit" value="Commander">

                        </form>

                    </div>

                </div>


                <!-- 2ème service -->
                <div id="service_forme_invisible_2">

                    <div class="center">

                        <br>
                        <br>

                        <!-- image -->
                        <img id="service_img_2" height="100px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image_non attribué"/>

                        <h5>Hébergement</h5>
                        <h5 id="service_h_3">Cloud</h5>

                        <p id="service_p_3">VMware</p>

                        <br>
                        <br>

                        <!-- bouton de commande -->
                        <form action="http://localhost/prosit2v3.html">

                            <input class="service_bouton_1" type="submit" value="Commander">

                        </form>

                    </div>

                </div>


                <!-- 3ème service -->
                <div id="service_forme_invisible_3">

                    <div class="center">

                        <br>
                        <br>

                        <!-- image -->
                        <img id="service_img_3" height="100px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image_non attribué"/>

                        <h5>Télécom</h5>

                        <br>

                        <p id="service_p_3">NAS</p>

                        <br>
                        <br>

                        <!-- bouton de commande -->
                        <form action="http://localhost/prosit2v3.html">

                            <input id="service_bouton_2" type="submit" value="Commander">

                        </form>

                    </div>

                </div>


                <!-- 4ème service -->
                <div id="service_forme_invisible_4">

                    <div class="center">

                        <br>
                        <br>

                        <!-- image -->
                        <img id="service_img_2" height="100px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image_non attribué"/>

                        <h5>Entreprise</h5>

                        <br>

                        <p id="service_p_4">Noms de domaine</p>
                        <p id="service_p_5">Web hosting</p>

                        <!-- bouton de commande -->
                        <form action="http://localhost/prosit2v3.html">

                            <input id="service_bouton_3" type="submit" value="Commander">

                        </form>

                    </div>

                </div>

            </div>

            <br>
            <br>

        </section>

    </main>


    <footer>

        <br>

        <!-- Partie lien -->
        <h3 id="lien_h_1">Liens utiles</h3>

        <div id="lien_flex_1">

            <!-- bouton de lien -->
            <form action="http://localhost/prosit2v3.html">

                <input id="lien_bouton_1" type="submit" value="Centre d'aide">

            </form>

            <!-- bouton de lien -->
            <form action="http://localhost/prosit2v3.html">

                <input id="lien_bouton_2" type="submit" value="Live Chat">

            </form>

            <!-- bouton de lien -->
            <form action="http://localhost/prosit2v3.html">

                <input id="lien_bouton_3" type="submit" value="État du réseau et incidents">

            </form>

            <!-- bouton de lien -->
            <form action="http://localhost/prosit2v3.html">

                <input id="lien_bouton_4" type="submit" value="Mes demandes d'assistances">

            </form>

            <!-- bouton de lien -->
            <form action="http://localhost/prosit2v3.html">

                <input id="lien_bouton_5" type="submit" value="Créer un ticket">

            </form>

        </div>

        <br>
        <br>
        <br>

    </footer>

</body>
