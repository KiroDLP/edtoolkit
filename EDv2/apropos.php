<?php
	$title = 'à propos';
	$metaTags = 'tag1 tag2';
	$currentPage = 'contact';
?>

<?php include('inc/head.php'); ?>
<?php include('inc/navbar.php'); ?>
<body>

    <!-- SOUS HEADER -->

    <section class="subheader">
        <div class="triangle-white"></div>
        <div class="image">
            <img src="liens/image.png" height="816px" alt="image design thinking">
        </div>
    </section>


    <main class="grid-container">


        <section class="grid-box header">

            <H1 class="annexes">
                À propos
            </H1>
        </section>

        <!-- FIN SOUS HEADER -->

        <section class="grid-box informations2">
            <div class="title">
                Greenflex et nous
            </div>
            <div class="text-informations">
                <p>
                    Au lancement du concours GreenFlex : EnergySprong nous a donné pour challenge de concevoir non seulement un toolkit qui aiderait les ingénieurs au cours de leurs recherches, mais également un moyen supplémentaire de communiquer sur le concours.
                </p>
            </div>

            <div class="title">
                L'équipe ED
            </div>
            <div class="text-informations">
                <p>
                    Nous somme 5 étudiants designers en dernière année d’étude. Nous avons la particularité d’avoir effectué un double cursus ingénieur, celui-ci nous a permis de connaître mieux leurs métiers et leurs projets.
                </p>

                <p>
                    Ainsi nous avons concu ce Toolkit de manière à ce qu’il soit le plus efficient.
                </p>
            </div>
            <section class="profils">
                <div class="img-portrait">
                    <p>Alexis</p>
                </div>
                <div class="img-portrait">
                    <p>Nicolas</p>
                </div>
                <div class="img-portrait">
                    <p>Soline</p>
                </div>
                <div class="img-portrait">
                    <p>Vincent</p>
                </div>
                <div class="img-portrait">
                    <p>Virginie</p>
                </div>

            </section>
            <p>
                Vous nous connaissez un peu mieux, si vous souhaitez échanger avec nous sur le projet ou le toolkit voici notre contact ainsi que celui de GreenFlex.
            </p>



        </section>


        <section class="grid-box tableau2">

            <table>
                <tr class="valeur-fixes">
                    <td>
                        <p>Nous contacter</p>
                    </td>
                    <td>
                        <p>Contacter GreenFlex</p>
                    </td>
                    <td>
                        <p>Concours EnergieSprong</p>
                    </td>
                </tr>

                <tr class="valeur-mobiles">
                    <td>
                        <p>En plein concours, ou simplement curieux, vous souhaitez échanger avec nous, n’hésitez plus, envoyez-nous un mail.
                        </p>

                        <a href="ed.toolkit@e-artsup.net">
                            Envoyez un mail à l’équipe Ed.
                        </a>
                    </td>
                    <td>
                        <p>7 boulevard Haussmann
                            75009 Paris FRANCE</p>


                        <a href="hello@greenflex.com">
                            hello@greenflex.com
                        </a>
                        <a href="www.greenflex.com">
                            www.greenflex.com</a>
                    </td>
                    <td>
                        <p>Accéder au site du concours.
                        </p>
                        <a href="https://ed.ette.fr/#">
                            En savoir plus
                        </a>

                    </td>

            </table>

            <section class="eartsup">
                <div class="valeur-fixes">
                    e-artsup
                </div>

                <p>L’école de la passion créative s’est donnée pour objectif de former des professionnels du design et de la direction artistique intégrant les mutations produites par le digital dans leurs pratiques.
                </p>

                <a href="https://www.e-artsup.net/">
                    En savoir plus
                </a>
            </section>


        </section>

    </main>
    <!-- FOOTER -->



    <?php include('inc/footer.php'); ?>
</body>
