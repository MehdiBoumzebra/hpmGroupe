@extends('layouts.frontend', ['title' => 'details article'])
@section('content')
<div class="banner ros magazine">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-9 section-title-wrapper">
                    <h1 class="section-title">ARTICLES</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="site-content ros">
        <div class="layout">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">

                    <div class="cell medium-9">
                        
                        <div class="user-content">
                            <h1 class="article-main-title">Comment choisir les bonnes couleurs en maquillage ?</h1>
                            <h3>Telle une impressionniste, vous allez vous munir de vos pinceaux et de vos couleurs pour égayer et embellir le visage de vos clientes. Mais… comment ? Après avoir appris toutes les techniques, les sortes de produits, comment s’y retrouver parmi toutes les couleurs ? Choisit-on les teintes de maquillage selon la tendance du moment ou la couleur des yeux et des cheveux de la cliente ? 
                            Voici quelques conseils pour vous aider lorsque viendra le temps de choisir les couleurs que vous emploierez sur votre prochaine cliente !
                            par Marilyn Pellerin, artiste maquilleuse et propriétaire de L’abc du maquillage Académie</h3>
                            <div class="article-main-image">
                                <img src="{{ asset('assets_frontend/img/maquillage2.png') }}" alt="">
                            </div>
                            <div class="entry-content">
                                <div class="grid-x">
                                    <div class="cell medium-12">
                        
                                        <p style="text-align: left;">Jadis, nous parlions de saisons, d’une personne plus « hiver » ou plus « été » ou des couleurs complémentaires aux yeux de la cliente. Aujourd’hui, nous parlons plutôt d’harmonie chaude ou froide. Dépassé comme concept ? Oh que non ! Au contraire, cette théorie est très utilisée par les professionnels du relooking et de la beauté, et surtout beaucoup plus simple que les autres concepts.</p>
                                        <p style="text-align: left;">Il est très intéressant de savoir que des couleurs bien spécifiques illumineront le visage alors que d’autres feront paraître fatigué et, voire même, vieilliront la<br>
                                        cliente de quelques années de plus ! Une couleur peut bien faire à une cliente et pas du tout à une autre. C’est ce qui se produit lorsque les couleurs choisies ne sont pas en harmonie avec le teint de la personne.</p>
                                        <p style="text-align: left;">Comme les grands professionnels de la mode, en maquillage on utilise la méthode des harmonies pour trouver la gamme de couleurs de fards parfaite. Celle-ci est déterminée par trois points; le teint, la couleur des yeux, et finalement celle des cheveux. À noter par contre que les teintes choisies au terme de cette équation devront aussi s’harmoniser avec les tons et les nuances des vêtements portés, des accessoires, ainsi que des bijoux.</p>
                                        <p style="text-align: left;">Ainsi, pour les harmonies chaudes, les cheveux seront roux, brun cuivré ou blond doré, le teint sera aussi doré froides, quant à elles, auront les cheveux noir, châtain ou blond cendré, le teint rosé, puis les yeux clairs. Étant un chiffre impair, la cliente peut également être une harmonie mixte, mais sachez qu’elle aura toujours une harmonie dominante. À la lumière de cette équation,<br>
                                        vous saurez alors vers quelle gamme de couleurs (chaudes ou froides) vous diriger.</p>
                                        <p style="text-align: left;">Est-ce que l’harmonie peut être différente si l’on change de couleur de cheveux ou si la couleur de la peau se modifie avec le bronzage ou le temps ? Oui définitivement. Il faut toujours prendre en considération ce qui est là maintenant. Donc, si votre cliente se fait colorer les cheveux en bleu, bien sûr vous devrez adapter sa palette de couleurs à son nouveau look.</p>
                                        <p style="text-align: left;">Voici un exemple de maquillage pour une belle brune au teint basané : fards à paupières couleur terre et doré accompagné d’un fard à joues et un rouge à lèvres rouge brique. Il est aussi permis d’ajouter une couleur contraste à l’iris comme un crayon marine pour accompagner le maquillage chaud. Pour une femme aux cheveux noirs et au teint ivoire, elle saura, quant à elle, être mise en valeur par des fards charcoal ou violacés, mariés à un fard à joues et un rouge à lèvres rosé. Pour ajouter une touche de magie, on peut aussi déposer quelques paillettes dorées pour faire ressortir la couleur des yeux.</p>
                                        <p style="text-align: left;">Le maquillage est définitivement une forme d’art. Ainsi, mélanger les couleurs et improviser est aussi une partie importante de votre activité. Par contre, gardez toujours en tête qu’il vous faut savoir pourquoi vous posez certaines actions et quel est le résultat attendu. Par exemple, si vous souhaitez que le maquillage reste naturel, subtil et qu’il mette en lumière la beauté naturelle de votre cliente, il est préférable de choisir des&nbsp; couleurs de son harmonie naturelle. Par contre, il est aussi possible d’utiliser des couleurs de son harmonie contraire si le but est d’avoir un maquillage plus présent, de faire ressortir la couleur des yeux ou pour donner un look particulier.</p>
                                        <p style="text-align: left;">Cet univers est très passionnant, mais peut aussi être déroutant. Il faut exercer son œil, prendre de l’expérience et aiguiser son sens de l’analyse. De ce fait, les<br>
                                        services d’une experte s’imposent pour les clientes !</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p><img class="alignnone size-medium" src="{{ asset('assets_frontend/img/LOGO-ACADEMIE.png') }}"></p>
                                        <p><a href="#">https://www.labcdumaquillage.com/</a></p>
                                        <p>Article publié dans l’édition de mars | avril du magazine LNE 117</p>
                                    </div>
                                </div>
                                <div class="article-other-articles-wrapper news-wrapper">
                                    <div class="grid-x grid-margin-x">
                                        <div class="ads-cell-twin cell medium-6 news-item-outer">
                                            <div class="news-item-wrapper large-up-right-padding-15">
                                                <div class="news-item-image-outer">
                                                    <div class="news-item-image">
                                                        <img src="{{ asset('assets_frontend/img/paneau-publicitaire.png') }}" alt="Définir ses objectifs publicitaires">
                                                    </div>
                                                    <div class="news-item-title-wrapper">
                                                        <div class="golden-bar"></div>
                                                        <h3><a href="#">Définir ses objectifs publicitaires</a></h3>
                                                    </div>
                                                </div>

                                                <div class="news-item-content">
                                                    <a href="#">
                                                        <p>Lorsque l’on fait une campagne de publicité, le but à atteindre n’est pas toujours le même pour tout le monde. Pour qu’une campagne fonctionne bien, on doit lui définir un objectif primaire bien précis. Je parle donc d’objectifs que vous avez identifiés, qui vous motivent et que vous savez être à la base de vrais changements dans votre entreprise.</p>
                                                    </a>
                                                    <div class="news-item-readmore-link-wrapper">
                                                        <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ads-cell-twin cell medium-6 news-item-outer">
                                            <div class="news-item-wrapper large-up-right-padding-15">
                                                <div class="news-item-image-outer">
                                                    <div class="news-item-image">
                                                        <img src="{{ asset('assets_frontend/img/paneau-publicitaire.png') }}" alt="Définir ses objectifs publicitaires">
                                                    </div>
                                                    <div class="news-item-title-wrapper">
                                                        <div class="golden-bar"></div>
                                                        <h3><a href="#">Définir ses objectifs publicitaires</a></h3>
                                                    </div>
                                                </div>

                                                <div class="news-item-content">
                                                    <a href="#">
                                                        <p>Lorsque l’on fait une campagne de publicité, le but à atteindre n’est pas toujours le même pour tout le monde. Pour qu’une campagne fonctionne bien, on doit lui définir un objectif primaire bien précis. Je parle donc d’objectifs que vous avez identifiés, qui vous motivent et que vous savez être à la base de vrais changements dans votre entreprise.</p>
                                                    </a>
                                                    <div class="news-item-readmore-link-wrapper">
                                                        <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="cell medium-3 right-column">
                        <div class="derniere-edition">
                            <h3>Dernière <span class="gold-text">édition </span></h3>
                            <img src="{{ asset('assets_frontend/img/last-edition.png') }}">
                            <a href="#">Commander ma copie <i class="fas fa-caret-right"></i></a>
                        </div>
                        <div class="bloc golden">
                            <a href="#"><img src="{{ asset('assets_frontend/img/right-column-image-congres.jpg') }}"></a>
                        </div>
                        <div class="bloc golden blogroll">
                            <div class="bloc-title-wrapper">
                                <h3>Ça bouge <span class="gold-text">chez lne</span></h3>
                            </div>
                            <a href="#" class="actualite-row">
                                <div class="grid-x">
                                    <div class="cell medium-12 large-4 xlarge-6">
                                        <img src="{{ asset('assets_frontend/img/Image-pour-médias-sociaux-2.png') }}">
                                    </div>
                                    <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                        <p>Lancement de la gamme de gels…&nbsp;&nbsp;<i class="fas fa-caret-right"></i></p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="actualite-row">
                                <div class="grid-x">
                                    <div class="cell medium-12 large-4 xlarge-6">
                                        <img src="{{ asset('assets_frontend/img/2019-02-18_Image-titre-article-site-web-1.jpg') }}">
                                    </div>
                                    <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                        <p>Séminaire 2019 Davincia&nbsp;&nbsp;<i class="fas fa-caret-right"></i></p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="actualite-row">
                                <div class="grid-x">
                                    <div class="cell medium-12 large-4 xlarge-6">
                                        <img src="{{ asset('assets_frontend/img/EDITH-SEREI-1.jpg') }}">
                                    </div>
                                    <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                        <p>Graduation de l’Académie Édith Serei&nbsp;&nbsp;<i class="fas fa-caret-right"></i></p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="actualite-row">
                                <div class="grid-x">
                                    <div class="cell medium-12 large-4 xlarge-6">
                                        <img src="{{ asset('assets_frontend/img/MASTER-CLASS-VICTOIRES-10.jpg') }}">
                                    </div>
                                    <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                        <p>MASTER CLASS les Victoires du Regard&nbsp;&nbsp;<i class="fas fa-caret-right"></i></p>
                                    </div>
                                </div>
                            </a>
                            <div class="bloc-footer">
                                <a href="#" class="view-all-news">Voir toutes les actualités&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                        <div class="bloc">
                            <a target="_blank" href="#">
                                <img src="{{ asset('assets_frontend/img/Academie-Edith-Serei.jpg') }}">
                            </a>
                        </div>
                        <div class="bloc">
                            <a target="_blank" href="#">
                                <img src="{{ asset('assets_frontend/img/pub-foreo-2.jpg') }}">
                            </a>
                        </div>
                        <div class="bloc">
                            <a target="_blank" href="#">
                                <img src="{{ asset('assets_frontend/img/Pub_esthederm-1.jpg') }}">
                            </a>
                        </div>
                        <div class="devenez-annonceur">
                            <h3>Devenez<span class="gold-text">annonceur!</span></h3>
                            <a href="#" class="btn white">Informez-vous</a>
                            <img class="slanted-border-right" src="https://www.nouvelles-esthetiques.ca/wp-content/themes/theme-lne/images/slanted-title-gold-lines.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
