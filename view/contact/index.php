<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Laisser Un message</h2>
        </div>
        <?php if(isset($_GET['status']) && $_GET['status'] === 'success'){
            echo '<div class="alert alert-primary" role="alert">
                    Message envoyé!
                  </div>';
        }?>
        <div class="row g-5">
            <div class="col-md-7 col-lg-6">
                <h4 class="mb-3">Contact</h4>
                <form class="needs-validation" novalidate="" action="/myportfolio/contact/newmessage" method="post">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="titre" placeholder="" value="" required="" name="titre">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Message</label>
                            <div class="input-group has-validation">
                                <textarea class="form-control" id="message" placeholder="Message" required="" name="message"></textarea>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </main>

</div>
