@extends('layouts.app')

@section('content')
<div class="bg-dark text-light py-5">
    <div class="container py-5">
        <section class="mb-5 text-center">
            <h2 class="h4 mb-4 text-uppercase">Notre Mission</h2>
            <p class="lead mx-auto" style="max-width: 800px;">
                Nous avons pour mission de fournir une plateforme permettant aux artisans de partager leurs créations et de se connecter avec des clients passionnés. Nous croyons fermement en l'importance de soutenir les artisans locaux et de promouvoir l'artisanat de qualité.
            </p>
        </section>

        <section class="mb-5 text-center">
            <h2 class="h4 mb-4 text-uppercase">Rencontrez l'Équipe</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/rachel.jpg') }}" alt="DAO Wassa Rachel Samira" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">DAO Wassa Rachel Samira</h5>
                                <p class="card-text text-muted">Responsable de la direction globale et des décisions stratégiques de l'entreprise</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/ciel.jpg') }}" alt="KOUADIO Emiklwa Ciel-Onyx Delarys" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">KOUADIO Emiklwa Ciel-Onyx Delarys</h5>
                                <p class="card-text text-muted">Coordonne les aspects du projet pour assurer son suivi et sa bonne exécution</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/hamed.jpg') }}" alt="KOUASSI Kouadio Ahmed" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">KOUASSI Kouadio Ahmed</h5>
                                <p class="card-text text-muted">Développe des solutions pour répondre aux besoins de l'entreprise ou de ses clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/souleymane.jpg') }}" alt="DOUMBIA Souleymane" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">DOUMBIA Souleymane</h5>
                                <p class="card-text text-muted">Supervise et gère l'équipe de développement logiciel</p>
                                <p class="card-text">Collaborant avec Abou-bakar Sidiki DOUMBIA, Herve KOUAME, Charles-André YAO Pokou et Ismaël Ichola LASINDE</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/adama.jpg') }}" alt="DOSSO Adama" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">DOSSO Adama</h5>
                                <p class="card-text text-muted">Assure la stabilité et la sécurité de l'infrastructure réseau des applications logicielles</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/yasmine.jpg')}}" alt="KANGOUTE Fanta Yasmine" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">KANGOUTE Fanta Yasmine</h5>
                                <p class="card-text text-muted">Gère le marketing et la communication de l'entreprise, y compris la promotion des produits, l'image de marque et les relations publiques</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/soraya.jpg') }}" alt="TOTO Soraya Mouna Axelle" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">TOTO Soraya Mouna Axelle</h5>
                                <p class="card-text text-muted">Supervise l'équipe en charge des communications internes et externes</p>
                                <p class="card-text">Collaborant avec Kablan Sylvestre COBBOLD et Eugenie KOALA Wende Pouire</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/nadia.jpg') }}" alt="NAGOU Finin Nadia" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">NAGOU Finin Nadia</h5>
                                <p class="card-text text-muted">Développe et met en œuvre les stratégies de marketing pour atteindre les objectifs commerciaux de l'entreprise</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/abou.jpg') }}" alt="OUATTARA Abou" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">OUATTARA Abou</h5>
                                <p class="card-text text-muted">Supervise la création de contenu multimédia pour soutenir les initiatives de marketing et de communication de l'entreprise</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100 text-center" style="width: 100%; min-height: 300px;">
                            <img src="{{ asset('image/ciel.jpg') }}" alt="KOUADIO Emiklwa Ciel-Onyx Delarys" class="card-img-top rounded-circle mx-auto mt-3" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">KOUADIO Emiklwa Ciel-Onyx Delarys</h5>
                                <p class="card-text text-muted">Supervise les affaires juridiques de l'entreprise</p>
                                <p class="card-text">Incluant la conformité réglementaire, les contrats, les litiges, la propriété intellectuelle et la protection des données</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5 text-center">
            <h2 class="h4 mb-4 text-uppercase">Notre Histoire</h2>
            <p class="lead mx-auto" style="max-width: 800px;">
                Le projet a commencé avec une vision simple : créer un espace où les artisans peuvent se faire connaître et où les amateurs d'artisanat peuvent découvrir des pièces uniques. Après plusieurs mois de développement, nous avons lancé le site avec l'espoir de soutenir et de promouvoir l'artisanat local.
            </p>
        </section>

        <section class="mb-5 text-center">
            <h2 class="h4 mb-4 text-uppercase">Nos Valeurs</h2>
            <ul class="list-unstyled lead mx-auto" style="max-width: 800px;">
                <li class="mb-2"><i class="bi bi-check-circle-fill"></i> Qualité : Nous nous engageons à offrir une plateforme de haute qualité pour les artisans.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill"></i> Transparence : Nous croyons en une communication claire et honnête avec nos utilisateurs.</li>
                <li><i class="bi bi-check-circle-fill"></i> Soutien : Nous sommes dédiés à soutenir les artisans locaux et à promouvoir leur travail.</li>
            </ul>
        </section>

        <section class="text-center">
            <h2 class="h4 mb-4 text-uppercase">Contactez-nous</h2>
            <p class="lead mx-auto" style="max-width: 800px;">
                Pour toute question ou pour en savoir plus sur notre projet, n'hésitez pas à nous contacter à l'adresse suivante : <a href="mailto:artikaonline@gmail.com" class="text-light">artikaonline@gmail.com</a>.
            </p>
        </section>
    </div>
</div>
@endsection
