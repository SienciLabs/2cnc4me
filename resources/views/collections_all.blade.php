<x-app>
    {{--    Project header --}}
    <div class="heading-page header-text">
        <section class="page-heading" style="padding-bottom: 2px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h3 style="color: black;">
                                Collections
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="card-deck" style="padding: 30px 350px 30px 360px;">
        @include('components.partials.cards.collection-cards')
    </div>

</x-app>

