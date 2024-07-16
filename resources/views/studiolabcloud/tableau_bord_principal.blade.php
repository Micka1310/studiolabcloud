<!--
======================================================================================================================================================
||                       HTML de la page du tableau de bord pour les nouveaux clients de StudiolabCloud (test de la partie gauche)                  ||
======================================================================================================================================================
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
    <link href="tableau_bord_principal.css" rel="stylesheet" type="text/css" media="">
    <script src="prosit2js/prosit2.js"></script>
    -->

    @vite(['resources/css/tableau_bord_principal.css'])

</head>

<body>

    <main>

        <section>

            <!-- pour que la partie "gauche" soit positionner à gauche de la page -->
            <div id="gauche_forme_1">

                <div class="center">
                    <!-- image de logo ici -->
                    <img id="gauche_img_1" height="70px" src="{{ asset('build/images/tableau_bord/Logo-Studiolab CLOUD_White.png') }}" alt="image de profil"/>
                </div>

                <div id="gauche_droite">

                    <img id="gauche_img_2" height="30px" src="{{ asset('build/images/tableau_bord/rectangle.png') }}" alt="image de profil"/>

                    <!-- lien qui charge la page du client dans l'iframe -->
                    <a id="gauche_a_1" href="{{route('tableau_bord_client')}}" target="iframe">Tableau de bord</a>

                    <br>


                    <img id="gauche_img_3" height="30px" src="{{ asset('build/images/tableau_bord/img_paiement.png') }}" alt="image de profil"/>

                    <!-- lien qui charge la page de paiement dans l'iframe -->
                    <a id="gauche_a_2" href="{{route('tableau_bord_paiement')}}" target="iframe">Moyen de paiement</a>

                    <br>


                    <img id="gauche_img_4" height="30px" src="{{ asset('build/images/tableau_bord/img_gerer_compte.png') }}" alt="image de profil"/>
                    <span>Gérer mon compte</span>

                    <br>
                    <br>


                    <h5 id="gauche_h_1">Raccourcis</h5>

                    <img id="gauche_img_5" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de profil"/>
                    <span>Gestion des services</span>

                    <br>

                    <img id="gauche_img_6" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de profil"/>
                    <span>Factures</span>

                    <br>

                    <img id="gauche_img_7" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de profil"/>
                    <span>Catalogue de produit</span>

                    <br>

                    <!-- lien qui charge la page de la boite mail -->
                    <img id="gauche_img_8" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de profil"/>
                    <a id="gauche_a_8" href="{{route('tableau_bord_mail')}}" target="iframe">E-mail de service</a>

                    <br>

                    <img id="gauche_img_9" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de profil"/>
                    <span>Gestion des contacts</span>

                    <br>
                    <br>
                    <br>
                    <br>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <!-- lien de déconnexion -->
                    <img id="gauche_img_10" height="30px" src="{{ asset('build/images/tableau_bord/test_patate.jpeg') }}" alt="image de profil"/>
                    <a id="gauche_span_9" method="POST" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Me déconnecter</a>

                    <script>
                        document.getElementById('gauche_span_9').addEventListener('click', function(event) {
                            event.preventDefault();
                            document.getElementById('logout-form').submit();
                        });
                    </script>

                </div>

            </div>

        </section>

        <!-- Pour faire apparaître le contenue séléctionner par l'utilisateur sous forme de fenêtre -->
        <iframe id="droite_droite" src="{{ route('tableau_bord_client') }}" name="iframe" height="100%" width="78.7%" title="tableau de bord"></iframe>

    </main>
</body>
