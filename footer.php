
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    2018 &copy; Democratic Developers & Designers
                </div>
                <div class="col-sm-6 align-self-center">
                    Website donated by the folks at <a target="_blank" href="http://earlybird.co">Earlybird</a>
                </div>
            </div>
        </div>
    </footer>

<!-- Modal -->
<div class="modal fade"
     id="ContactModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="ContactModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="ContactModalLabel">Contact Us</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="<?= get_theme_file_uri("icon-close.svg") ?>" alt="Close">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    If you have questions or are interested in being apart of what we’re building, please send us a
                    message. Our preferred way is to join our Slack channel or you can send us a message in the form
                    below.
                </p>
                <form>
                    <div class="form-group">
                        <label for="subject">Your Message</label>
                        <input
                            type="text"
                            class="form-control"
                            id="subject"
                            aria-describedby="emailHelp"
                            placeholder="Your Subject Line">
                    </div>
                    <div class="form-group">
                        <textarea
                            class="form-control"
                            id="message"
                            rows="5"
                            placeholder="Your Message"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Send Message</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</body>
</html>
