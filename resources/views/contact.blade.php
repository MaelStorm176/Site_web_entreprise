@extends('layouts.master')
  @section('content')
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 order-2">
            <form action="send_mail" method="get">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nom / Prénom</label>
                    <small class="small">(optionnel)</small>
                  <input type="text" name="nom" id="nom" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Téléphone</label>
                  <input type="text" name="phone" id="phone" class="form-control " maxlength="10">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Votre adresse email</label>
                  <input type="email" name="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Envoyer" class="btn btn-primary px-3 py-3">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 order-2 mb-5">
            <div class="row justify-content-right">
              <div class="col-md-8 mx-auto contact-form-contact-info">
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>31 Grande rue, 08000, Lumes</span>
                </p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.561585571819!2d4.780602815671616!3d49.737876279383414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea13d7146a6b33%3A0xafd009b93d033e23!2sACPM!5e0!3m2!1sfr!2sfr!4v1590938968065!5m2!1sfr!2sfr" width="300" height="300" frameborder="1" style="border-style: solid; border-color: #fd5f00" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> <br />
                  <br/>
                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>09 81 40 24 99</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>info@acpm08.fr</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
