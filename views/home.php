<div class="mgb">
    <section class="left">
        <div class="featured">
            <div class="title">
                <p>Cool New People</p>
            </div>
            <div class="content imgtable">
                <div>
                    <a href="#">
                        <p>Nikki</p><img src="/img/amogus.jpg" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <p>Haley</p><img src="/img/amogus.jpg" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <p>Leiah</p><img src="/img/amogus.jpg" alt="">
                    </a>
                </div>
                <div>
                    <p><a href="#">Rachel</a></p><img src="/img/amogus.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="featured blue">
            <div class="title">
                <p>MySpace Member Blogs</p>
                <p class="fa-ri" id="whatmemblog"><a href="#">[what's this?]</a></p>
            </div>
            <div class="content txttable">
                <div class="left">
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                </div>
                <div class="right">
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                    <p>02:01a - <a href="#">KadeJoe</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="right">
        <?php require __DIR__ . "../../components/login.php"; ?>
        <div class="ad">
            <img src="/img/advertisement.gif" alt="ADVERTISSEMENT">
        </div>
        </form>
</div>
</section>
<div class="news">
    <div>
        <section>
            <h3>Get Started on JeckSpace!</h3>
            <p>Join for free, and view profiles, connect with others, blog, rank music, and much more!</p>
        </section>
        <p class="mlink"><a href="#">Learn More</a></p>
    </div>
    <div>
        <section>
            <h3>Create Your Profile!</h3>
            <p>Tell us about yourself, upload your pictures, and start adding triends to your network!</p>
        </section>
        <p class="mlink"><a href="/signup">Start Now</a></p>
    </div>
    <div>
        <section>
            <h3>Browse through Profiles!</h3>
            <p>Read through millions of profiles on JeckSpace! See pix, read blogs, and more!</p>
        </section>
        <p class="mlink"><a href="#">Browse Now</a></p>
    </div>
    <div>
        <section>
            <h3>Invite Your Triends!</h3>
            <p>Invite your triends, and as they invite their triends your network will grow even larger!</p>
        </section>
        <p class="mlink"><a href="#">Invite Triends Now</a></p>
    </div>
</div>
</div>

<script>
    document.querySelector("#whatmemblog").onclick = function() {
        window.open("/popup?text=whatisblog", "", "width=300,height=113");
    };
</script>