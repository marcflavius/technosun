<!-- Contact area starts -->
<section id="contact" class="contact-area section-big">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-30 ">
                    <h2>CONTACT <span>US</span> </h2>
                </div>
            </div>
        </div>

        <div class="row contact-infos">
            <div class="col-md-8">
                <!-- Contact form starts -->
                <div class="contact-form mt-30">

                    <!-- Submition status -->
                    <div id="form-messages"></div>

                    <form action="{{route('contact')}}" method="post">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group in_name">
                                    <input value="{{old('name')}}" type="text" name="name" class="form-control" id="name" placeholder="Your name and lastname" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group in_email">
                                    <input value="{{old('email')}}" type="email" name="email" class="form-control" id="email" placeholder="Your email" required="required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group in_subject">
                                    <input value="{{old('subject')}}" type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="required">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group in_message">
                                    <textarea name="message" class="form-control" id="message" placeholder="Your message" required="required">{{old('message')}}</textarea>
                                </div>
                                <div class="actions">
                                    <input type="submit" value="Soumettre" name="submit" id="submitButton" class="btn" title="Submit Your Message!">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact form ends-->

                @if($errors->any())
                    <div calss="col-md-12 m-30 ">
                        <div class="form-group">
                            <div class="alert alert-danger mt-30">
                                @foreach($errors->getMessages() as $this_error)
                                    <p style="color: red;">{{$this_error[0]}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                @if(session('success'))
                    <div calss="col-md-12 m-30 ">
                        <div class="form-group">
                            <div class="alert alert-success mt-30">
                                <p>{{session('success')}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-4 mt-30">
                <div class="row">
                    <div class="col-md-12">
                        <div class="prim-color"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phone:</font></font></strong></div>
                    </div>
                    <div class="col-md-12 mt-30">
                        <strong>+590</strong> 048 923
                    </div>
                    <div class="col-md-12 mt-30">
                        <div><span class="prim-color "><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Address</font></font></strong></span></div>
                    </div>
                    <div class="col-md-12 mt-30">
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> rue du Debarcadere</font></font></div>
                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 97129 Lamentin GUADELOUPE</font></font></div>
                    </div>
                </div>
            </div>
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
