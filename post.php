<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Post</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    .post-head-image {
        background-image: url('<?php echo $row['head_image']; ?>');
    }
</style>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "travelblog";
$dbTable = "post_table";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
if (isset($_POST["postsend"])) {
    $id = 1;
}
$sql = "SELECT * from post_table where post_id=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<body style="overflow-x: hidden;">

    <!-- Start your project here-->
    <section class="post-head">
        <div class="post-head-image">
            <div class="navbar navbar-light " style="background-color: white;">
                <a href="index.php">
                    <h4 class=" post-heading p-1" style="font-weight:500;color:black;">Home</h4>
                </a>
            </div>
            

        </div>
        <div class="color-shade"><div class="flex-center flex-column">
                <h2 class="post-heading h1-responsive text-center display-2 text-white">
                    <?php
                    echo $row['post_head'];
                    ?> </h2>
            </div></div>
    </section>

    <section id="post-detail">
        <div class="post-highlight m-5 col-sm-6 mx-auto">
            <blockquote class="blockquote bq-warning ">
                <p>
                    <?php echo $row['highlight_content'] ?>
                </p>
            </blockquote>
        </div>
        <div class="container col-sm-6 py-5 mx-auto">
            <p class="m-3">
                Returning back to the hostel, a dull evening. Weekend coming around the corner. I was not yet decided on what to do. Suddenly a name popped into my head. Something that excited my alter ego. The one of a wanderlust. Let’s chase the Kumari and head to the south. This one’s a solo. Been waiting for this for a while. Will I reach there? A big question to be solved. Couldn’t sleep the night. The sea…The waves…The blues. It was all calling me and I was all prepped up for the journey. Woke up even before the sunrise and YES!
                I’m off to KANYAKUMARI.
                Headed to Trivandrum. 65 kilometres achieved. The capital city. The lush full greenery, the infrastructure. Everything had a pleasant appeal. Somehow all this pushed me to go further.
                First up, met an old friend. The Whiz. The Engineer. I told him what I was up to and got him all excited and just like that he became my fellow traveller. Trivandrum was an intermediate stop. It was my first time here. To be very frank, it was more than I ever imagined it to be. I really fell for the place. ‘But I must not stop’. I told myself to comeback another time to take an even closer look at the city.
                ‘Adios Trivandrum’, the roads were calling me.
                I’m sure the bus ride to Nagercoil would have offered a variety of sights. But I wouldn’t know. Because to be frank, I dozed off just fine. And it did me good. As it equipped me for what was coming after. So… Trivandrum to Nagercoil, Nagercoil to Kanyakumari. Both two separate bus rides. That was the route map.
                The journey from Nagercoil was something fascinating. Each curve offered us a new something to remember.
            </p>
            <img src="img/IMG_7002.JPG" class="col-sm-6" style="max-height: 100%;max-width:100%;">
            <p class="m-3">
                The plantation farms, the long stretch of rocky hills, the blue sky with its clouds that followed us through the right path. We saw a lot of coconut trees and it was stretched out into the distance. The roads were really making us curious about what’s ahead. It was beautiful to watch the hills as the crimson lights reflected off its top. Just like it would, off of the head of a bald man. That’s when I realised that the sun was beginning to set and a hint of darkness started coming in and within a moment, the sky purpled up and now the violet linings of the clouds started following us. Nearly 20 kilometres to the destination, and off we went.

            </p>
            <h3>ARRIVAL </h3>
            <p class="m-3">
                Kanyakumari was a 3hr journey, reached there by 7 pm. One other thing I should mention while talking about Kanyakumari is that, the place is located on the southernmost tip of India otherwise called Cape Comorin. This instantly makes the sunrise and sunrise there a spectacle to look out for, or so I was told. We missed the sunset by minutes!!
            </p>
            <img src="img/IMG_7028.JPG" class="col-sm-6" style="max-height: 100%;max-width:100%;">
            <p class="m-3">
                I make my travels as in-expensive as possible. Skipping a meal or two, sleeping in railway station/bus stand to avoid lodging, all these are part of my usual itinerary. Kanyakumari was a small town and a walk down a straight road covers the whole city. From the bus stand, we walked a distance of 2 kilometre to the beach. Missing the sunset was a disappointment for us. So, we made an oath that no matter what happens we would not miss the Sunrise!!
            </p>
            <h3>THE CROWDED BEACH</h3>
            <p class="m-3">Walking down the straight road, we came across a Gandhi statue in the middle of a four-way junction. We headed to the direction of the beach. The time was 8pm and it was crowded. Tired and hungry, but all we cared for, was a moment at the beach. There we saw Triveni Sangamam, the union of Arabian Sea, Bay of Bengal and the Indian Ocean. Hinduism perceives it as a Holy site. Witnessing this beauty was soon proved to be a difficult task by the huge crowd of people taking a dip in the sacred place. We wished for the crowd to disperse, but, well, that did not happen. That made us head towards the east of the beach and we came across a 16 pillared Mandapam. It was an architectural magnificence with a perfect 4x4 geometry. Resting there, it suddenly dawned upon us that we are in fact sitting on the southernmost tip of our country. I felt proud of my impulsive decision to make this trip.
            </p>
            <img src="img/IMG_7203.JPG" class="col-sm-6" style="max-height: 100%;max-width:100%;">
            <p class="m-3">After a while we walked further towards the east through the mainland and on our way, at a distance, we saw Thiruvalluvar statue and Vivekananda rock memorial. Thiruvalluvar was a prominent Tamil scholar who lived in Tamil Nadu around 6th century AD. He was a prolific monk and the statue was constructed for his remembrance. Tourists can actually view these in close vicinity, by availing a ferry service that starts in the morning. On our enquiry we found out that, the cost per person was 50 rupees and 200 rupees for special ferry. With each stride we took the crowd became lesser and lesser, we saw Kanyakumari pier at a distance. Ha! The perfect spot to watch the sunrise if we were to hit the place before the crowd kicks in. Made a mental note of the observation and the walk was continued. Time was 9.30 pm, main beach was still crowded. By this point, we were tired, stomach growling with hunger and to be frank a little disappointed. This crowded Kanyakumari was not to my liking and this was not what I envisioned it to be.
            </p>
            <img src="img/IMG_7180.JPG" class="col-sm-6" style="max-height: 100%;max-width:100%;">
            <h3>AN UNDISCOVERED BEACH</h3>
            <p class="m-3">Disappointed about the turnout of events, I opened Google maps to explore nearby places and that’s when I saw a strange place that caught my attention. ‘HIDDEN TWIN BEACH’. The name made me really curious. Questions arose in my mind about this strange sounding destination and I decided to find answers. Will the beach be really hidden or will it be just another crowded place?
                Fascinated and immensely curious, we did not think twice to start the voyage. To top all the excitement, the path was more or less deserted with crowd decreasing as we moved further and the darkness kept swarming in. As per Google Maps, our one and only guide the hidden twin beach was located 1.5 kilometres west of Gandhi circle. The interlock pavement suddenly got changed to concrete and further became a sandy road. We were the only human beings in the vicinity and we didn’t have a small hint or awareness of where we were heading to. As for the topography, it was a completely different experience. The road was stretched parallel to the sea and I heard turbulent waves hitting the rocks. We were basically walking on top of a mini cliff. Time was around 11pm. It was complete darkness, with only the occasional sound of dogs barking from a far-off distance and the sound of waves keeping us company. And thus walking, almost aimlessly forward, I realised that we had mistakenly walked 300 metres ahead of our quest!! The aura of excitement soon lifted, panic and scare took its place. There was not a single living creature around to ask for directions. The mini cliff was having a steep slope, completely filled with shrubs and green vegetation. And we couldn’t see any indication of a beach nearby…The name of the beach suddenly started making sense to me…
            </p>
            <h3>HIDDEN TWIN BEACH</h3>
            <p class="m-3">It was the moment when the question arose. Is this why people say that this beach is hidden? Is that the reason for the origin of the name? OK!!TWIN BEACH? Does that mean, there is not one, but two beaches to be found?? All these thoughts brought in an adrenaline rush. We decided that no matter what happens, we were not going to retire until we discover the hidden twin beach!
                With dogged determination, I turned on the flash light and started descending the slope. I checked out for any trails in the slope beneath the cliff through the green vegetation. For our delight, there were two or three trails leading to different directions. We both split up and headed on different trails and since these were also visible in google maps, we used it for guiding us through. Some trails had dead end. At the end of a dead trail, another trail emerged out of nowhere and this trail was leading us through the rocks and thorny shrubs. After walking a considerable distance in this track, I heard the sound of waves hitting the beach. Yes! Hidden twin beach was nearby. I couldn’t see it, but I could sense it.
                The time was around 12 am. It was a full moon night with a wonderfully clear starry sky, I couldn’t have asked for a more spectacular night for adventure. After 30 minutes of walking through the trails, and walking through the dangerous natural rock carvings, I saw two beaches at a distance. Yes! It was The Hidden Twin Beach! We discovered it! Just like in a dream, it was there, appearing as if out of nowhere. A beautiful sight for our tiring eyes. I cried admiring its beauty. There were two beaches separated by a small set of rocks in between it. Walking up to the beach, we saw a beautiful arc of thorny shrubs, forming a perfect archway. We dunged our heads and carefully made our way through. The hidden twin beach, we made it. My discovery! That night under the starry sky, I felt like I transformed into an adventurer myself. I was suddenly proud of this feat that I achieved. As I am writing this, I still remember everything. It’s all crystal clear in my head. I just ran to the beach, threw my bag in the sands. Screamed out loud, out of joy. The beach was completely isolated. Not a single human being around and that made us truly happy. Moment of happiness, joy, satisfaction, everything was running through our minds along with another factor, fear. We were just 18-year old then, and the possibility of getting stranded or attacked by stray dogs or being kidnapped got into our heads. We decided to visit our discovery at the early morning to admire the beauty in sunlight. It was a very difficult decision to leave hidden twin beach at that time of excitement but we did it for the sake of our safety. When the excitement faded, hunger started kicking in. We climbed up the cliff and walked the straight road briskly in darkness. It was my first adventurous trip and I didn’t want any unnecessary encounters to occur. We reached the Gandhi circle and decided to eat something, but to our dismay, all the restaurants and hotels were shut.
                I sensed the mood around us suddenly shifting. People were giving out strange stares. Both of us were carrying huge bags and looked like a travelling duo. Maybe they were curious to know what these travellers were doing by the sea at this time of the night. We got scared by those stares and I suggested we should rest in the railway station since the homestays in Kanyakumari were too pricey and it was the only safe and affordable option. Through the dark and ever so creepy streets we headed in the direction of railway station.
            </p>
            <h3>SCARED TO DEATH</h3>
            <p class="m-3">We were just 200 metres away from the station and I could see its majestic architecture from that distance. It looked something like a palace. Suddenly something happened that took our attention away from our destination! A car came screeching out of nowhere, into the scene. It was a Maruti omni, its colour was unrecognizable in the dark.
                The glass was completely tinted and we couldn’t see the people inside it. To add to our horror, someone was thrown out of the car and it vanished, just as quickly as it appeared. We couldn’t believe what was happening in front of us. Utterly confused and scared out of our wits, we instantly sensed the danger. But shit!! We couldn’t move an inch. It was as though we got gripped to the place. We curiously observed the body quickly getting up from the ground. We did not understand who or what it was. All we could gather was that it was wearing black rugged clothes. Suddenly the thing met our gaze. I still remember those cold sharp eyes staring at us from distance. That gaze was signal enough for us to walk away and so we did. But what happened next were things that my sane little mind couldn’t reason out!! It started walking towards us. By this time the flight or fight instinct kicked into our systems, only this time, all we could think of were ways to somehow flee the hell out of the place. We started walking briskly and turned around to have a last look at the thing. We understood that the thing was still following us. Suddenly it screamed in a ghastly noise and we screamed too, in fear, and started running for our lives. To this date, that remains the most agonising run of my life. All the while we turned around to see if it was still behind us, AND YES, IT WAS!! It was more than I could bare and I even thought that was going to be the end of me!
                Somehow, we managed to reach the railway station building and there was a security guard at the footsteps. He asked us what happened. I told him that someone was chasing us and I pointed to a black rugged figure at a distance. He told us to stay inside and guaranteed that we’ll be safe. I kept on watching that figure slowly moving away in the darkness and all of a sudden vanish in front of my eyes. It just vanished! Who was it? Was it a he or a She? Was it really a human being? If not, what was it and why was it chasing us? Why did it produce that ghastly noise? Where did it disappear to? Was it trying to scare us or harm us? A thousand questions arose in my mind. Tired and utterly spent, I dozed off at the railway station. One hell of a journey it was so far. The time was half past one in the morning.
            </p>
            <h3>THE LAST STATION</h3>
            <p class="m-3">Suddenly I woke up at 3 am in the morning. Where am I? Am I dreaming? What was that about the hidden twin beach and the chasing ghostly figure? Totally disoriented, I looked around and saw my fellow traveller near me and my sense of awareness came back. I decided to get up and check out the beautiful railway station. My fellow companion was still sleeping. He was really tired. I started walking through the isolated platform and that’s when I recalled that Kanyakumari railway station was the southernmost end of Indian railway network. There was a board that said ‘STOP’ on the station walls. It was interesting to see a wall across the railway track, marking its end. Time was half past three and I realised that in order to watch the sunrise from the piers, we had to begin walking now. Having had just a
                2-hr sleep, I woke him up for our next expedition.</p>
            <img src="img/IMG_7071.JPG" class="col-sm-6" style="max-height: 100%;max-width:100%;">
            <h3>THE PIER</h3>
            <p class="m-3">And so, we started walking in the direction of the piers. Since I woke up my partner from his deep sleep, he was half asleep while walking. The city was still completely isolated. We walked down the road, reached Gandhi circle. From there, took the road east side and passed the 16-legged Mandapam and we reached the beginning of the pier. It was a beautiful sight. The sky was still starry and moon was shining brightly. The church of ‘Lady of Snow Basilica’ was bright with lights nearby. We decided to walk through the pier to reach its end and occupy the very end of the pier from where we could witness the sunrise in the most surreal way. It was a long way to the end of the pier, almost half a kilometre. It was mind-blowing to think that we were preparing to watch sunrise, 500 metres from the land, in the middle of the violent sea. The turbulent waves making roaring sounds as they hit the piers, kept us company. Marvelling the surroundings, I looked for my buddy, to maybe start a conversation with him, but he had already dozed off, making his backpack the pillow and the stones his bed! I didn’t try disturbing him, after all he might be cursing me inside. He is tired, sleepless and hungry. What more can he bear? I thought of waking him during the time of sunrise. I laid down on the stones, looking up and marvelling the star lit sky.
            </p>
            <img src="img/IMG_7090.JPG" class="col-sm-6" style="max-height: 100%;max-width:100%;">
            <h3>METEORITES!</h3>
            <p class="m-3">The sky was very clear and I was keenly tracing the Orion constellation with my eyes when suddenly I saw a line made in the clear sky, vanishing instantly. Wow! To see a shooting star at the southernmost tip of India, now that was something really special. Legend has it that wishing upon a shooting star makes the wish come true. But just before I could make up my mind on what to wish for, it just vanished. I was not so much disappointed, it was that time of the day when one can always hope to see a meteor shower. So, I began to look out for more and sure enough I saw one more, another one and another one and finally a fourth one as well. But this time I was ready to made the mistake again. I wished for a heap of stuff and among them was a dream to become an adventurer, a traveller.
                After a while, the darkness slowly started to fade away and tourist started to flood into the pier to watch the sunrise. We felt like the most coveted people of the lot, to be occupying the best spot and we waited eagerly for the sun to emerge.
                As my buddy woke us, I told him with all excitement about the meteor shower incident. ‘Who knows for sure if they really were meteors, they could have well been satellite debris’, he said. But I chose to believe them to be real shooting stars with their magic trials.
            </p>
            <h3>SUNRISE</h3>
            <p class="m-3">At half past six in the morning, we witnessed the first ray of sun along with the whole bunch of tourists. We watched the sun rising, ever so beautifully up in the sky, taking away the darkness with each shining ray. We could see the marvellous Thiruvalluvar statue in the reflection of the morning sun. It was really huge. At that moment we realised that the sunrise was every bit worth the wait, it was so beautiful! We captured many pictures at that moment. As the sun rose above us, the place started to get heated up faster and within one hour the whole place was so hot and scorching the sun made it so hard to stand on the pier. First thing after the sunrise was to have a scrumptious breakfast. We found a place where they served dosa. We had a satisfying meal of dosa along with chutney and sambar. Breakfast instantly made us energetic. We were having food after one whole day. We were instantly energized, piled up water bottles and we decided to see whether Triveni Sangamam as crowded as it was yesterday night. Hard luck. A whole new crowd was already assembled there, to take a dip!
            </p>
            <img src="img/IMG_7101.JPG" class="col-sm-6" style="max-height: 100%;max-width:100%;">
            <h3>VIEW TOWER</h3>
            <p class="m-3">We decided to see the view tower, the next tourist attraction of the place. The view tower was a tall spiral building which is about the size of a six-storey building and it was protected by 4 huge pillars and it looked like a container in shape. Entry fee for an adult was 10 rupees, we paid and got in. It was interesting to see long spiralling ramp that led up to the top, instead of stairs. What awaited us at the top was the scenic beauty of the Arabian sea on the left, Bay of Bengal on the right and the mighty Indian ocean behind. I felt like I was standing in the middle of huge blue carpet, making turbulent waves that hit the shores.
                The most satisfying thing was that we could see the hidden twin beach from atop, our small early night discovery, only partially visible though. Being true to its name, it was hidden, even under the scorching daylight.
            </p>
            <h3>HIDDEN TWIN BEACH IN DAYLIGHT
            </h3>
            <p class="m-3">Suddenly every little detail from last night flashed through my mind. The discovery, the excitement, the walk in the dark…. We quickly climbed down the view tower and headed for the straight road which was leading to the hidden twin beach. We reached the road where the trail would initiate in the slope, leading us to the hidden twin beach. We walked through the trail and reached the rock carving which we had to pass carefully. The rock was slippery and as we reached the bottom, crossed the thorny gateway carefully and set foot to the beach which was leading to the hidden twin beach.<img src="" class="col-sm-6" style="max-height: 100%;max-width:100%;">

                The place was beautiful in daylight. The minute rock particles that made up the beach instead of sand, were a visual treat for my eyes. The bits and pieces came in all shades, red, brown, golden and some were even tinted blue. We captured beautiful photographs of hidden twin beach in our mobile and stayed for some time in the beach. As it got really hot in the afternoon, there was no way we could stay at the beach any longer. We took a dip in the waters and changed the clothes.</p>
            <img src="img/IMG_7212.JPG" class="col-sm-6" style="max-height: 100%;max-width:100%;">
            <h3>ONE LAST TIME</h3>
            <p class="m-3">We were all set for the departure. I collected some rock gravel from hidden twin beach as a sovereign of my journey. As I walked away from there, I was really sad. I wished to spend more time, but the circumstance led me to depart at that moment. It was 1 pm in the afternoon when we left the beach. We checked the train schedule and there was a train to Kollam at half past two from Kanyakumari railway station. I was walking rather slowly through the road leading to the Gandhi circle. I looked at the Thiruvalluvar statue for one last time and remembered sitting inside the 16-legged Mandapam. I continued walking, reached the railway station and waited for the train. My whole body got tanned, maybe as one other sovereign of my journey.
                As I boarded the train, I realised that my journey has come to its end. It was more than I could have asked for. It made me feel like a real adventurer. ‘To many more to come’, I thought to myself.
                The compartment was empty. I fell down onto one berth. Tired. Exhausted. Realising that the adventure is over, I slept. One sound sleep it was. I didn’t even realise that my friend bid me goodbye when the train reached Trivandrum. I was that tired. As Kollam junction arrived, I woke up with a thud.
                Adios Kanyakumari, I’ll miss you.
                I’ll miss you my twins.
                I’ll return back to you soon.
            </p>
        </div>

    </section>
    <section id="post-gallery">
    </section>
    <section id="feedback">
        <div class="row mt-5 mb-5 m-1">
            <div class="col-sm-6 border py-3 px-5 rounded-sm mx-auto">
                <div class="row text-md-left mb-3">
                    <h3>Leave a Comment</h3>
                </div>
                <div class="row mb-3">
                    <p>our mail will not be published.Required fields are marked:)</p>
                </div>
                <?php
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $db = "travelblog";
                $dbTable = "comment_table";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
                //  echo $_POST['name'];
                if (isset($_POST['send'])) {
                    $sql = "INSERT INTO comment_table (name, email,comment) VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "')";
                    $result = mysqli_query($conn, $sql);
                }
                $sql = "SELECT comment,name from $dbTable WHERE comment_id = 1";
                $result = $conn->query($sql);
                ?>
                <form id="review" action="post.php" method="post">
                    <div class="form-group">
                        <textarea name="comment" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="6" placeholder="Type here"></textarea>
                    </div>
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text" name="name" class="form-control" placeholder="First name">
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <!-- Grid column -->
                    </div>

                    <button type="submit" name="send" class="my-3 btn btn-amber">Submit</button>
                    <h1>
                        <?php if ($row = $result->fetch_assoc()) {
                            // echo "<h1>" . $row["comment"] . "<br>" . $row["name"] . "</h1>";
                        } ?>
                    </h1>
                </form>
            </div>
        </div>
    </section>
    <!-- <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-3 gallery-item">
                    <img src="img/about.jpg">
                </div>
                <div class="col-3 gallery-item">
                    <img src="img/about.jpg">
                </div>
                <div class="col-3 gallery-item">
                    <img src="img/about.jpg">
                </div>
                <div class="col-3 gallery-item">
                    <img src="img/about.jpg">
                </div>
            </div>
        </div>
    </section> -->
    <section id="footer">
        <!-- Footer -->
        <footer class="page-footer font-small teal pt-4">

            <!-- Footer Text -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-4 mx-auto mt-md-0 mt-3">

                        <!-- Content -->
                        <div class="mb-5 flex-center">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a><br>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->
                </div>
            </div>


        </footer>
        <!-- Footer -->
    </section>

    </script>


    <!-- End your project here-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <!-- <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            var name = $("#userName").val();
            var email = $("#userEmail").val();
            var comment = $("#subject").val();

            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
    </script> -->
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>