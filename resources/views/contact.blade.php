<!-- Contact area starts -->
<section id="contact" class="contact-area section-big">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-30 ">
                    <h2>CONTACTEZ <span>NOUS</span> </h2>
                </div>
            </div>
        </div>

        <div class="row contact-infos">
            <div class="col-md-8">
                <!-- Contact form starts -->
                <div class="contact-form mt-30">

                    <!-- Submition status -->
                    <div id="form-messages"></div>

                    <form id="ajax-contact" action="assets/mailer.php" method="post">
                      {{ csrf_field() }}
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group in_name">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom et prénom" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group in_email">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Addresse email" required="required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group in_subject">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Sujet" required="required">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group in_message">
                                    <textarea name="message" class="form-control" id="message" placeholder="Votre Message" required="required"></textarea>
                                </div>
                                <div class="actions">
                                    <input type="submit" value="Soumettre" name="submit" id="submitButton" class="btn" title="Submit Your Message!">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact form ends-->

            </div>
            <div class="col-md-4">
                <div class="address mt-30">
                    <div class="address-list">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact area ends -->
