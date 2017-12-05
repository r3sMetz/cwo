<div class="fullPageWrapper">
    <div class="front-page_header">
        <div class="front-page_header_top bg-std bg-dude mobile-bg">
            <div class="container">
                <div class="row front-page_header_content_wrapper">
                    <!-- Headline -->
                    <div class="col-sm-4 col-md-5 text-center front-page_header_headline">
                        <h1>
                            <span class="font-lord da_head pos-rel dp-inline-block"><?php the_field('headline');?></span><br/>
                            <span><?php the_field('subline');?></span></h1>
                    </div>
                    <!-- Images -->
                    <div class="col-sm-4 col-md-3 hidden-xs front-page_header_images">
                        <img class="maxImage" src="<?php echo get_field('headervorschau_oben')['sizes']['medium_large'];?>" alt="CWO">
                        <img class="maxImage" src="<?php echo get_field('headervorschau_unten')['sizes']['medium_large'];?>" alt="CWO">
                    </div>
                    <!-- Next Event (Desktop)  -->
                    <div class="col-sm-4 col-md-4 hidden-xs">
                        <div class="front-page_header_next_event desktop bg-pommes text-center puffer-both-xl">
                            <p class="font-demon fontsize-headline gap-bottom-md">Samstag 18.02.2017</p>
                            <h2 class="font-demon fontsize-headline-big color-black gap-bottom-md">Steel Crusade 31</h2>
                            <p class="gap-bottom-md">
                                Die Celtic Warriors Otzenhausen<br/>
                                präsentieren das 31. Steelcursade:
                            </p>

                            <ul class="list-unstyled color-black font-demon text-uppercase list-dashed gap-bottom-md">
                                <li>Revolution 9</li>
                                <li>Desdemonia</li>
                                <li>Fusion Bomb</li>
                            </ul>

                            <ul class="list-unstyled gap-bottom-md">
                                <li>Einlass 19:30</li>
                                <li>Beginn: 20:00Uhr</li>
                                <li>Eintritt: 5Euro</li>
                            </ul>

                            <p>
                                Jugendraum<br/>
                                Ringwalstraße 8<br/>
                                66620 Otzenhausen
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Next Event (Mobile) -->
        <div class="front-page_header_nextEvent mobile visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center bg-pommes puffer-both-lg">
                        <p class="font-demon fontsize-headline gap-bottom-md">Samstag 18.02.2017</p>
                        <h2 class="font-demon fontsize-headline-big color-black gap-bottom-md">Steel Crusade 31</h2>
                        <p class="gap-bottom-md">
                            Die Celtic Warriors Otzenhausen<br/>
                            präsentieren das 31. Steelcursade:
                        </p>

                        <ul class="list-unstyled color-black font-demon text-uppercase list-dashed gap-bottom-md">
                            <li>Revolution 9</li>
                            <li>Desdemonia</li>
                            <li>Fusion Bomb</li>
                        </ul>

                        <ul class="list-unstyled gap-bottom-md">
                            <li>Einlass 19:30</li>
                            <li>Beginn: 20:00Uhr</li>
                            <li>Eintritt: 5Euro</li>
                        </ul>

                        <p>
                            Jugendraum<br/>
                            Ringwalstraße 8<br/>
                            66620 Otzenhausen
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<</div>