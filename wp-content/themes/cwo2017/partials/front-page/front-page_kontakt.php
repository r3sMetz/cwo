<div class="front-page_kontakt bg-fired puffer-both-xxl">
    <div class="container">
        <!-- Headline -->
        <div class="row gap-bottom-sm">
            <div class="col-md-12">
                <h2 class="font-heat fontsize-headline dashed-headline gap-bottom-lg text-center">
                    <span class="dashed_line"></span><span class="dashed_text">Kontakt</span><span class="dashed_line"></span>
                </h2>
            </div>
        </div>

        <!-- Form -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="#" id="cwo_contact">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Name*" required>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email*" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <textarea class="form-control" name="message" id="message" rows="8" placeholder="Nachricht*" required></textarea>
                        </div>
                    </div>
                    <div class="row form-group front-page_contact_send">
                        <div class="col-sm-9 checkbox">
                            <label>
                                <input type="checkbox" name="si_datenschutz" id="datasec">
                                Ich habe die <a target="_blank" href="<?=get_permalink(342);?>">Datenschutzerklärung</a> gelesen bin einverstanden.
                            </label>
                        </div>
                        <div class="col-sm-3">
                            <input type="submit" class="cwo-btn cwo-btn-red" value="Senden" id="sendbtn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>