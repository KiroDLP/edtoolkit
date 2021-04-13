<?php $title = 'Home'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'index'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<body>
<section class="subheader">
        <div class="triangle"></div>
        <div class="image">
            <img src="liens/image.png" width="338px" alt="image design thinking">
        </div>
    </section>
    <main class="grid-container">


        <section class="grid-box header">


            <p class="subtitle">
                Tester sa solution
            </p>
            <H1>
                Tester
            </H1>
        </section>

        <section class="grid-box return">
            <nav class="return">
                <a href="home-page">

                    <img class="arrow" src="_img/Arrow.svg" width="48px" height="" alt="arrow" />
                    Design Thinking
                </a>

            </nav>
        </section>

        <!-- FIN SOUS HEADER -->


        <section class="grid-box tableau">

            <table>
                <tr class="valeur-fixes">
                    <td>
                        Étape du processus
                    </td>
                    <td>
                        Prérequis
                    </td>
                    <td>
                        Taille du groupe
                    </td>
                </tr>

                <tr class="valeur-mobiles">
                    <td>
                        Tester sa solution
                    </td>
                    <td>
                        Les participants auront eu accès au brief
                    </td>
                    <td>
                        Entre 2 et 12 personnes
                    </td>
                </tr>


                <tr class="valeur-fixes">
                    <td>
                        Matériel
                    </td>
                    <td>
                        Temps de préparation
                    </td>
                    <td>
                        Temps de l’exercice
                    </td>
                </tr>

                <tr class="valeur-mobiles">
                    <td>
                        papier + crayon/stylos/feutres
                    </td>
                    <td>
                        2 minutes
                    </td>
                    <td>
                        30 minutes
                    </td>
                </tr>



                <tr class="valeur-fixes">
                    <td>
                        Temps de dépouillement
                    </td>
                    <td>
                        Temps de d’analyse des résultats
                    </td>
                    <td>

                    </td>
                </tr>

                <tr class="valeur-mobiles">
                    <td>
                        20 minutes
                    </td>
                    <td>
                        une demi-journée d’analyse des résultats
                    </td>
                    <td>

                    </td>
                </tr>


            </table>

            <section class="grid-box informations">
                <div class="title">
                    Comment ça se passe ?
                </div>
                <div class="text-informations">
                    En effet, avant d’aller sur le terrain et commencer son test, il faut répondre en amont aux questions suivantes :

                    <ul>

                        <li>Qu’est-ce que je veux tester ?</li>
                        <li>Qui va faire le test ?</li>
                        <li>De quoi ai-je besoin ?</li>
                        <li>Comment vais-je documenter les résultats du test ?</li>
                    </ul>
                    Ensuite il faut préparer ces différentes étapes:
                    <ul>

                        <li>Préparer le scénario du test</li>
                        <li>Recruter les testeurs</li>
                        <li>Préparer les ressources nécessaires</li>
                        <li>Documenter les résultats du test</li>
                    </ul>
                    À la suite des tests, des retours seront fait sur ce qui fonctionne ou non sur le projet, de voir les bonnes choses à garder et les choses à retravailler qui posent problème.
                    <br />Suite à cela le processus de design thinking recommence à l’étape 1 avec comme sujet les problématiques soulevées par les retours des tests.
                </div>

            </section>

    </main>
<?php include('footer.php'); ?>