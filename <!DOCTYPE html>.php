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
$dbhost = "sql202.epizy.com";
$dbuser = "epiz_25625347";
$dbpass = "36D0QWJxImx";
$db = "epiz_25625347_travelblog";
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
        <div class="post-head-image" style="background-image: url('../img/IMG_7314.JPG');">
            <div class="navbar navbar-light " style="background-color: white;">
                <a href="index.php" class="nav-brand">
                    <h4 href="index.php" class=" post-heading p-1" style="font-weight:500;color:black;">Home</h4>
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
    </section>
    <section id="content" class="container">
        <div class="heading">
            <p>
                If someone were to ask me, what do I consider to be the beginning of everything that ‘Fahim’ is, I would say, it’s the moment I got hooked up on travelling.
                The Kanyakumari journey, literally opened up a new vast world of travel and its possibilities. Fascinated and in need of further motivation, I started exploring
                the internet for travelogue and movies related to travelling. The more I explored, the more I got fascinated about one thing, solo travelling!! People around me
                always used to have these horrid concepts about it. Tales of getting lost, kidnapped or even killed were said synonymously along with solo travelling. But from
                my little research, I gathered that solo travelling is not something just done by experienced travellers, as opposed to popular conception. There has surely got
                to be one or two tricks up the sleeve of these so called ‘experienced’ bunch of travellers that might help a beginner like me, I thought.
                My search for inspiration led me to Paulo Coelho’s ALCHEMIST. It was a book that frequently popped up among suggestions lists.
                “There is only one thing that makes a dream impossible to achiever, the fear of failure”
                “When you want something, all the universe conspires in helping you achieve it”.
                I was this kid who lost his reading habit, by the time he was 18, but this second quote struck me so hard, that I felt the urge to read
                the book somehow. I got hold of it from one of my friends and started enthusiastically reading it. It was the story of a young boy named Santiago
                and his journey to finding out a hidden treasure. The journey describes the conflict between the heart and mind. The shepherd boy succeeds, as he learns to listen
                to his heart more. As I was carried away by the miracles inside the book, I turned myself into Santiago the shepherd from Andalusia. I started firmly believing that
                we just have to dream, work for it and universe will help us achieve it. Sure enough, miracles started to happen. All these days I was searching for tools without any
                clarity in the search. This time I thought of listening to people who have experience in travelling solo and that lead me to the famous TED talks.</p>
            <p class="h3-responsive py-sm-4 py-2">TO COUCHSURFING VIA TED TALK</p>I came across a TED talk presented by Tomislav Perko on the topic “How to travel the world with almost no money”. In this TED talk, I came across the term hitchhiking and his talk was so fascinating and his way of presentation so sharp, that I was completely won over. In this video he mentioned about his visit to a lot of countries. He also mentioned about a platform called Couchsurfing, and THIS was an interesting turn of events. Then and there, I got the tool I was searching for. As I finished watching his talk, I just rushed to Couchsurfing website. As a guy who follows his normal routine of pecking through Facebook, Instagram and WhatsApp, it was a brand new platform for me. For all of those who don’t know about Couchsurfing, it is an internet website, that allows you to host travellers in your house and at the same time, also allows you to stay in other such willing people’s houses while you’re travelling on your own. And Yes! It’s also free. I registered myself into Couchsurfing. I’m not a verified member yet. For verification, we must pay a sum of 60 dollars as a onetime payment for a lifetime. A verified member gets hosts easily but as a non-verified member, I was not sure about my odds of getting a host. But anyways I completed my account and waited for it to come handy. The excitement quickly fades after months.
            One day while entering into the Couchsurfing website, I got a couch request. It was from a guy named Arvinth, who lived in Chennai. He was a software engineer and had been a Couchsurfer for a long time and also so much used to the platform. He was requesting to stay for a couple of days in Calicut since he had to attend his friend’s marriage. I declined his couch request since I was busy in college. He understood my situation and said its fine. We became good friends via couchsurfing that, once he told me to visit Chennai when I get time and said that he would host me. It really excited me, but as I was a little unsure about how this works, I didn’t reply anything back.
            One day the realisation stuck. Chennai! It has forever been in my bucket list to explore this city. I have heard a lot about its fast moving crowd, the famous Marina beach and the mouth watering tales about street food, from my friends who studied there. I thought to myself, Why not? With all these pictures in my head, I decided to make it happen.<p>
                <p class="h3-responsive py-sm-4 py-2">BOOK OF LIES</p>
                <p>From the moment I started planning my Chennai journey, the main issue that has been boggling my mind had been my parents. Since I was on my vacation, back at home, I can’t simply vanish out of sight, as and when I like. Convincing my parents about my solo journey is a task that I was sure to fail. I didn’t even want to think about their reaction to my proposal. Total catastrophe it would be. So, I decided to lie to my parents regarding my travel plans. I told them I am going to visit Chennai with my friend (who accompanied me for the Kanyakumari trip). And also, that we’re heading to his cousin’s home in Chennai to make it sound more believable, when in reality I was heading to my Couchsurfing host Arvinth’s home. It was during the Eid time and I had received 700 rupees as Eid money from my family. As I usually travel cheap, 700 rupees was a big amount for me. The next day I tried convincing my parents that I’m going to Chennai with my friend. With a suspicious face, they agreed. Yes. So the first big step was a success.
                    Next thing on the list was to check the Indian railway online portal and see which all trains were heading to Chennai via Calicut. There were 4 different trains heading to Chennai via Calicut with different timing and out of those, train number 12602, Chennai Mail was best suited for my journey. The reason why I chose Chennai Mail was because it departs from Calicut at evening 5pm and reaches Chennai Central by 6am in the morning. The train starts from Mangalore. I confirmed that this is the train I’ll be choosing for my trip and next day I went to take a general ticket to Chennai from Calicut (In case you are wondering about the 3 hr rule for unreserved ticket, its only applicable for journeys up to 200 kms). Yes, a general ticket. You heard that right. It was part of my policy to travel cheap and I enjoyed the uncomfortable journey which fills with the comfortable conversations of the fellow travellers.
                    The price of the general ticket from Calicut to Chennai was 220 rupees. The moment I paid for the ticket, I realised something. 220 rupees was already paid out of my 700. All I have is less than 500 rupees remaining of my savings. I have to take a ticket to return back and that would cost me same price 220-240 rupees, and that would leave me with 250 rupees for 2 days. Will I ever survive for 250 rupees? I kept on asking myself. I was really nervous. The question kept on circling around my head the whole night. But anyhow, I decided to stick to my venture. I took the ticket to Chennai after all, so there was no turning back. I’ve already informed Arvinth regarding my departure from Kozhikode so that he can adjust his plans for the weekend accordingly. On the day of departure, he messaged me his address, he said “GET DOWN AT CHENNAI CENTRAL - GO TO CHENNAI SUBURBAN – MOORE MARKET COMPLEX – ST THOMAS MOUNT – FROM THERE BUS TO KEELKATTALAI”. This was the message he sent me. And so, I was all set for my first solo adventure.
                </p>
                <p class="h3-responsive py-sm-4 py-2">PACKED UP</p>
                <p>Finally, the day arrived. I was so thrilled thinking of what I am about to do but tried to keep my cool so that my parents won’t suspect anything. I was controlling all my excitement to myself. The time was half past two in the afternoon, I ate my lunch and started packing my bag. I stuffed my small back-pack with two T-shirts, a jean and a pair of shorts. I didn’t pack any shoes, instead I had an additional flip-flop along with me. I took my phone charger and the extension cable and packing was complete. Since it was a hot summer, I had shaved my hair off three weeks back and my hair was just starting to grow a little. As I was about to get off from my home, my mom asked “Your friend would’ve arrived in railway station, right?”, to which I responded “Yes Ummah, he’s already there”. Another lie. One after another, there were these bundles of lies I had to thread, to escape my house and finally I reached the railway station and along with my “invisible friend” I was about to start my journey. </p>
                <p class="h3-responsive py-sm-4 py-2">Waiting in the railway station</p>
                <p>It was 4 pm and the train has not yet arrived. The announcement came that it was running late by 30 minutes. The time was ticking away slowly. My eyes were focused on the nearby shops, the cold drinks and the evening snacks. As a guy who was travelling close to a 0 budget, I controlled myself from purchasing anything. There was nothing interesting to stare at in the railway station. A bunch of rats popping their head from the rail tracks and poop all over the tracks. I purposefully closed my eyes from all these pictures and started talking to myself. I enquired about myself. I wished myself an all the very best for my first ever solo venture and I tried hard to take away the fear of travelling alone by reciting “All­ is well, All is well”. That was when I suddenly noticed the milestones placed in the railway tracks.
                    It was written 664/4. What is this 664 and what is /4? I got really curious. I have seen this on Kollam junction as 155/3 and in Trivandrum central as 221/2.
                    As I had nothing else to do and curiosity was driving me crazy, I googled it. The milestone was set for the loco pilot to get track of the distance and there will be a central station where the number emerges as 0/0. As I scrolled even further down, I saw that Chennai Central, Shoranur junction and Ernakulam junction has 0/0 and from there we can calculate the distance by looking at the milestones. The milestones are painted in white or yellow and placed every 100 meters apart. I stretched my head further to see if there’s a milestone across 100 meters and I could see a milestone where the readings were 664/5. I realised that by decoding the milestone, it is 664 kilometres from Calicut to Chennai and also realised that the time was quarter past five already. It was exciting to learn new things during a travel. It’s true, travelling teaches us many important things and this was my first lesson.</p>
                <p class="h3-responsive py-sm-4 py-2">The weirdest madras mail</p>
                <p>At half past 5, the lady announced that the train will arrive shortly on my platform. By that time, the platform was way too crowded. I could see the train coming from a distance, and I was preparing myself to stand in the forefront. To my dismay, many jumped onto the rail track and waited for the train on the other side of the track so that they can enter in easily. As the train approached the station, the crowd was immense, especially in the general unreserved compartment. My heart was pounding heavily. This was really a bad sight. As the train stopped, I stood still for a moment. I didn’t expect this much of a crowd. “This is suicide!” I thought to myself.
                    I somehow got into the compartment. There was not a breathing space inside, everyone was so jam packed, there was hardly even space for one person to stand. The compartment was hot, humid and filled with the strong scent of sweat. It was very uneasy for me to even think about the fact that I’m going to travel the whole journey till Chennai in this compartment. As the engine blew its shrill whistle, I muttered to myself, “The journey has begun”. The train slowly started to move and my already tired eyes, started subconsciously searching for a seat somewhere. There were 6 to 7 people sitting so tightly in a berth. I decided to play the emotional approach. I started looking into the eyes of passengers sitting in the seat so as to make eye contact. A man, possibly in his 50’s, looked back at me and all of a sudden I muttered loudly, “To Chennai, ah, I’m going to Chennai”. Hearing this, he wiggled a little bit, asked the people sitting near him to move a little to the opposite and managed to make a little space for my big body. I was happy inside because of his kind gesture, and pushed myself through the crowd to claim my priceless possession – the tiny seat. I thanked the person and introduced myself and he told me his name.
                    By that time, the train reached Tirur. Still a long journey ahead, and I felt totally useless inside the train. 13 hours more to reach Chennai. I have to pay a big price for this. I will lose my sleep, I felt uncomfortable. The train was travelling faster but the situation inside the compartment was getting worse. The atmosphere was still hot and humid. I sweat a lot and by this time my T-shirt was soaked with sweat. I could smell my own sweat and scent of other people’s sweat just made the situation even more unbearable. I lost my patience at times and was screaming inside. I was trapped between the destination and reality and there was no turning back.
                    As the train reached Shoranur, a little of the crowd got down. But to my dismay, twice the amount of people bulged into the compartment. I was in a position where I cannot even move from the place I was sitting. It’s been 2 hours since the journey has started and my shoulders started to ache. My neck was hurting. The situation was slowly getting out of hand and I couldn’t do anything about it. I decided to suffer a bit more. The journey continued. From Shoranur, the train takes the Palakkad route towards Chennai and I usually take the Thrissur route to my college in Kollam.
                    As the train reached Palakkad, the situation was still the same. Same crowd and the same mess. From Palakkad it was a 1 hour journey to Coimbatore and more than once the thought of aborting my ‘Solo travel to Chennai’ popped up in my head. My mind was really messed up. “If the crowd is still the same, I’ll end the journey in Coimbatore” I thought to myself. My grandmother lives in Coimbatore, so during this whole 1 hour journey, her welcoming face was the only thing in my mind. To my luck, a little of the crowd got down at Coimbatore and not many entered into the compartment. I felt a little bit of ease. The coach was crowded after all, but there was air circulation and I could rest my head backwards. The journey continued, the next destination was Erode. As the train was crossing the bridge, I could see Kaveri river beneath the train. It was a very beautiful sight after a full 5 hours of toil. The river was calm beneath and there was nearby paper producing company working in full swing in the Kaveri river bank named “Seshasayee Paper”.
                    The journey continued and I reached Salem at 12 am. I saw the Salem coach factory there. There were compartments under maintenance and manufacturing of rail wagons were in full swing even during midnight. I felt so sleepy, but the space was so congested that I could barely move. When I would doze off peacefully, someone might end up giving me a nudge that I instantly wake up with a thud. The family next to me was getting off at Katpadi. They said that, they were visiting their cousin residing there. Katpadi junction was a big railway station, trains travelling to Andhra Pradesh deviate from there. It was half past 3 and I was completely sleepless. I came across Arakonam railway station at half past 4. It’s only half an hour to reach Chennai and I decided to stand near the door step to overcome this exhaustion. I got up from my seat, took my bag and stood near the doorstep. The wind was too cold that I covered my head with a towel which I had and decided to sit there on the door step till Chennai.
                    As the journey continued, I crossed Tiruvallur and Perambur railway station and the train was gaining pace. It was now travelling with a mighty speed. Train crossed Chennai Egmore station and I finally reached Chennai Central.</p>
                <img class="m-sm-5 m-1 mx-auto row" src="img/che1.jpg">
                <p class="h3-responsive py-sm-4 py-2">CHENNAI PATTANAM</p>
                <p>I always carried this doubt as to why Chennai has to railway stations, but I got my answer that day. It was over crowded even by the standards of a railway station. It was 6 am in the morning and the atmosphere was cold and chilly. As I got off the train, people were running to get to places. The station was busy even at that time. As I gathered from my little pre-train journey reading, I saw the 0/0 milestone at Chennai central. Half asleep I started walking along with the crowd to find the nearest exit. I reached the exit of the railway station and witnessed a beautiful artefact.</p>
                <img class="m-sm-5 m-1 mx-auto row" src="img/che2.jpg">The railway station was an architectural brilliance constructed in 1873 using red bricks. It has a gothic style of architecture. The railway station was named Chennai Central railway station during my journey and in 2019 it was renamed as Dr. MG Ramachandran Central railway station. I walked down the lane where lots of rickshawaalas were asking me where I was headed to. Even I didn’t know the exact destination! I walked further down and the scent of roasted coffee struck me. The aroma just pulled me to the shop and I purchased a plate of Vada and a hot cup of coffee to satisfy my hunger. I’ve been travelling with an empty stomach for 13 hours and this was the least I could do to satisfy my hunger. It cost me 30 rupees for 2 vada and a cup of coffee. I felt refreshed and continued my journey further.
                With the little bit of energy that I got from my morning coffee, I started my search for Moore Suburban station. I took Google maps and it showed that Moore Suburban station is across the street, 1.5 kilometres walk. The concept of suburban train fascinated me. I have only witnessed suburban train in movies and haven’t climbed onto one yet. It was my first time. I reached Moore station. There was a ticket counter where the staff asked me where to go. I checked the message again and replied “St. Thomas Mount”. I was praying for the price of the ticket to be less and to my luck it was just 5 rupees. With joy I realised that suburban travel is cheap. The maximum price one has to pay is 15 rupees for the farthest station. Claiming my ticket, I waited for my first ever suburban train. Every 10 minutes a train passes to destination. Moore station had 4 platforms. I was astonished by the fact that a suburban station has equivalent number of platforms my hometown railway station has. I was really amazed by the fact that Chennai central railway station had 24 platforms in total.<p>
                    <p class="h3-responsive py-sm-4 py-2">Suburban frenzy</p>
                    <p>My train finally arrived and it was heavily crowded. Many people were getting off the train and many were entering into the train alongside me. I stood next to the doorstep to witness the breath taking views of Chennai city with this 5 rupee ticket. I crossed a station named Nungambakkam and I could witness river Adyar beneath the train. The river was completely polluted. It was pitch black with all waste and plastic particles. A fellow traveller was curious with my observation that he decided to be my guide during my whole suburban journey. He asked me at the first sight “Are you coming to Chennai for the first time?” I replied yes. He was a man in his 40s, well dressed, a typical Iyer family guy, with glasses and a briefcase. He started his narrative about the river. He said that it was once a clean, free flowing river through the Chennai city centre and when commercialisation happened, people started dumping waste into the Adyar waters and it has transformed into a curse for Chennai these days. I came across station named Kodambakkam and Mambalam. I had this doubt regarding why every station here had a “pakkam” at its end. He said that it’s a name given to a place under a certain region. For example, Nungambakkam is area encircled around the Nungam province and Kodambakkam is area under the Kodam province. He said there are lots of provinces like these here in Chennai. We crossed a station named T-Nagar. He said it is Thyagaraya Nagar famously known as T-Nagar. It is the market capital of Chennai. He added that merchants who start their business in any corner of T-Nagar become successful immediately at a fast rate. From flower sellers to home appliance shops, T-Nagar is best known for the availability of a variety of products, he added. After T-Nagar the next station was Saidapet and the place reminded me of Saidapet Giri, the character played by Manoj K Jayan in the movie Rock and Roll. Suddenly I heard a screeching noise. While trying to figure out what it was, I saw a huge aeroplane taking off, close to my head. The distance was so close that it was not an ordinary sight for me. He noticed my curiosity and said that there is an airport in the middle of the city and he pointed his hands towards the distance. The airport was located in Guindy. He added that there is a forest reserve in the middle of the city and an engineering college is situated inside the reserve. I realised that he was talking about the Indian Institute of Technology Madras. The next stop was St. Thomas Mount. I got off the train, thanked him for his guidance and continued further with my journey.
                    </p>
                    <p class="h3-responsive py-sm-4 py-2">Bus to keelkattalai</p>
                    <p>From St. Thomas Mount, I was directed to catch a bus to Keelkatalai. I tried to find the nearest bus stand and walked 1 kilometre in search of it with the help of Google maps. Finally, I got into a bus which was heading to Keelkattalai. The bus was to start the trip from that place and so it was empty. I made myself comfortable choosing a window seat. By the time the bus was about to leave, it was filled with passengers. The conductor asked me “Enga Ponam?” and I said Keelkattalai. I told the conductor to inform me when the destination arrives in a feeble Tamil and he replied “Okay thambi”. My mom called me to enquire whether I’ve reached Chennai safely and I was responding back to her in Malayalam. I hung up the call afterwards and suddenly heard a female voice uttering “Malayali aano?” I looked back and saw a woman in her late 30s probably, dressed in sari, looking at me. I responded yes and asked her where she was from. She said that she’s from Thrissur and that she got married here and is now settled with her family in Chennai. She enquired about me and I mentioned my name, hometown and told her that I was travelling solo in Chennai. She was astonished. She asked me about my journey and about Kerala. She said that she misses Kerala so much and she’ll visit there soon. Her name was Reshmi and she talked about her family and about places to visit in Chennai and I made a note of these. She told me to visit her family next time I’m travelling to Chennai and to have lunch. I nodded yes and the talk continued on. I forgot to keep track of time. We had beautiful conversation and for the first time I experienced the joy of meeting a fellow Malayali in a far off place. I realised that solo travellers are in fact, not alone. At that moment, I embraced Paulo Coelho’s meaningful words, “When you dream something, the whole universe conspires you to achieve it”. I realised Reshmi was part of the universe too along with the other good human beings I met during my journey. Reshmi got off at Velachery and my journey continued.
                        Keelkattalai was two stops ahead. The road was damaged and bus ride seemed to be like a roller coaster ride. I reached Keelkattalai at half past seven in the morning and the moment I reached, I called Arvinth. I assumed that he might be sleeping in, and did not want to disturb him until I reached keelkattalai as I was directed. He woke up the moment I called him and he told that he’ll come to pick me up within 20 minutes. I decided to wait at the bus stop till he reaches. The road was under construction and there was dust all over the place. After a while I could see Arvinth at a distance in his Honda Dio. He drove towards the bus stop and at the first he couldn’t recognise me with my almost bald head. He saw my couchsurfing profile and was expecting to see a guy with hair. After exchanging pleasantries, I jumped onto his scooter and he drove me to his house.</p>
                    <p class="h3-responsive py-sm-4 py-2">HOME, SWEET HOME!</p>
                    <p>Arvinth lived in an apartment with his brother. He introduced me to his brother and he greeted me and enquired about my hometown and my parents. Arvinth showed me around his place. It was a 2-BHK apartment with a kitchen and a hall. He usually hosts travellers and provides a separate room for them. He had a brilliant record of hosting a lot of travellers, including international one’s from across the globe. I’ve read the references provided by those travellers regarding Arvinth in Couchsurfing. The room which he provided had a bathroom attached to it and I freshened up. I was so tired after the journey that I dozed off in the bed instantly.
                        I woke up at around 10.30 and Arvinth greeted me warmly. We communicated to each other in English. Arvinth enquired about the whole journey and I narrated my journey from scratch. He took me out for breakfast. We went to hotel Annapoorna and he ordered a plate of puri and bhajji for me and masala dosa for himself. While eating we were exchanging our couchsurfing experience. As I was a beginner in couchsurfing, I didn’t have much experience, but Arvinth was a guy who had been using couchsurfing since 2015. He was highly experienced with this platform not just as a host. He has travelled to a lot of European countries as well. Out of all the fascinating experiences he shared, the one that caught my attention was the European couchsurfing experience. While he was on a European tour, he was travelling across 15 countries in European Union and to reduce the cost of accommodation, he was travelling with the help of couchsurfing. He was hosted by many people across different countries and he still has a wonderful friendship with them. He had travelled across Germany, Belgium, France, Netherlands, Switzerland, Italy, Czech Republic, Russia and other countries as well. The stories of European expedition using couchsurfing fascinated me. He paid for the breakfast and we returned back to his apartment. The time was already half past 11 in the morning. He told that we could explore Chennai when the temperature lowers a bit, since it was a hot afternoon.
                        He began preparations for cooking lunch. Since I was highly inexperienced in that arena, I slowly slipped back in to the hall, took the phone and started giving replies to the messages I have received on social media. Wrong move! Arvinth was not pleased with my gesture and got a bit angry. I learned the next most important lesson of my journey. Hosting in couchsurfing is an act of kindness and compassion. It doesn’t mean one must take advantage of it and loose etiquette. I realised the immaturity in my action and accompanied my host to the kitchen. We had a pleasant conversation and I helped him prepare ‘Thairusaadham’ or curd rice. It tasted really good and it was a proud moment for me to think that I was part of the cooking process too.</p>
                    <p class="h3-responsive py-sm-4 py-2">Exploring Chennai</p>
                    <p>Exploring Chennai</p>
                    <img class="m-sm-5 m-1 mx-auto row" src="img/che3.jpg">
                    <p>The journey across Chennai was really hectic and the traffic block creates havoc now and again. Life in Chennai city is really fast and air is highly polluted. We somehow managed to reach Phoenix mall. The interesting fact I noticed in Chennai was that there was no space to park any vehicles in public and to park a vehicle in a mall is too expensive. For 1 hour of 2 wheelers parking they charge 50 Rs on an hourly basis and 4 wheeler costs 100/hr. I wondered who is going to spend an hour at this rate in mall. Imagine the amount one has to pay for 3 to 4 hours.
                        The phoenix mall was located just at the city center and it was enormous. As I entered the mall, I saw a miniature sculpture of the entrance of the Chennai central railway station and it was titled to a 45 degree angle.</p>
                    <img class="m-sm-5 m-1 mx-auto row" src="img/che6.jpg">
                    <p>Walking around, I saw a lot of people roaming around just like us. We went to a supermarket and Arvinth bought some cold drinks. Sipping the drinks, we reached the top floor of the phoenix mall. There I saw a beautiful rectangular pond like thing, only, it was not filled with water, but coloured crystals were embedded at the bottom. It was near the entrance to the PVR cinemas and the dark setting made it stand out even more.
                    </p>
                    <img class="m-sm-5 m-1 mx-auto row" src="img/che7.jpg">
                    <p>From the balcony of the top floor, I could see the entire Chennai city. At a distance I saw Chidambaram stadium. When we left the phoenix mall, time was around 7 pm. He asked me where I wanted to go next. Without thinking too much I blurted out the first thing that came to my mind. Marina Beach!
                    </p>
                    <p class="h3-responsive py-sm-4 py-2">FLAME AND SPICES OF MARINA</p>
                    <p>We headed to the Marina beach. Arvinth took me to the end of the shoreline. We headed to the Marina beach. Arvinth took me to the end point of the Marina beach. He said that this part is no longer called as Marina beach, it is called as Elliot’s beach. The time was around 8 pm. The Elliot’s beach was located in Besant Nagar, one of the posh areas in Chennai where all the movie stars and celebrities resided. We parked the scooter and walked down the lane. Arvinth pointed to a bungalow on the left side of the road and said it belonged to Chiyaan Vikram. It was a huge house with a big gate. We walked further down the pavement and there I saw the opening to the beach. We walked through the beach and as we were walking away from the main road, I witnessed flames across from the vendors who sold corn. Arvinth said that it was a traditional picture of Chennai beach at night. During night the corn vendors used this method to attract customers. They keep the corn on top of the coal burner and blow the flames with a blower and the wind carried those tiny sparks up to the sky. I stood still and captured the picture of the rising sparks from the corn vendor. It was a beautiful sight indeed.</p>
                    <img class="m-sm-5 m-1 mx-auto row" src="img/che4.jpg">
                    <p>We walked further down and witnessed shops selling roasted fish, fresh one’s, caught and made to serve as per demand. There were all types of fishes. There were trout and other fishes ranging from big prawns to salted shark. Arvinth ordered a plate of two roasted fish and I tasted the fish, it was so delicious. It was fresh, juicy with the perfect blend of all the right spices and was served hot. I took a picture of this perfect plate of delicacy, to keep it as a souvenir in my Chennai dairy- the spicy fried fish of the Elliot’s beach, Chennai.</p>
                    <img class="m-sm-5 m-1 mx-auto row" src="img/che5.jpg">
                    <p>We washed our hands and walked back to the pavement. We wanted to stay there and wanted to have conversations about travel experiences, but to our dismay, the rain started to pour. There was no shelter in the beach, so we decided to wait inside the Café Coffee Day till the rain stops. Finally, after 20 minutes, it stopped raining and we quickly got back in the scooter and returned back to Arvinth’s home.</p>

                    <p class="h3-responsive  py-sm-4 py-2">The most awaited trek</p>

                    <p>The journey back to Arvinth’s house was tiring due to the long roadblocks. In the middle of the journey, it started to rain again and we were wet. Arvinth knew most of the pocket roads in Chennai and by crossing block after block, we finally reached home. Drenched in rain, I went to freshen up. After a quick shower I changed my clothes and went to eat some of the leftover curd rice. We talked about the day and Arvinth mentioned about the next day’s plans. It was going to be a Sunday and Arvinth had plans for a jungle trekking was curious by this plan, I didn’t know about any jungle in Chennai. Arvinth said that it was not in fact not in Chennai, but in a place called Arai – Nagalapuram trek in Chittoor district of Andhra Pradesh. I got really fascinated for many reasons. I haven’t ever stepped my foot in Andhra Pradesh, and a jungle trip sounded appealing and adventurous. Arvinth mentioned that it was nearly a 120 kilometre journey from Chennai and what excited me the most about this trekking was that there were 5 waterfalls to be seen during the whole jungle trek. He also said it was his first time visiting the place as well. He connected with two other friends of his and mentioned about the trip and both of them were ready to come. And so, it was all set! I will be heading to the unknown land of five waterfalls – Arai. I ate the last bit of curd rice, bid him goodnight and went to my room to sleep. I felt really sleepy as the day was really tiring. I closed my door and I sat with the phone for some time and was all excited about the Jungle trek. The land of 5 waterfalls, jungle trek, Andhra Pradesh- everything was making me so thrilled.
                        “I’ve got a big day tomorrow”, I told myself before I dozed off peacefully.
                    </p>
                    <h3>(TO BE CONTINUED)...</h3>
        </div>
    </section>
    <div class="row flex-center">
        <div class="col-sm-6 py-3 flex-column">
            <video class="video-fluid z-depth-1" autoplay loop controls muted>
                <source src="img/RPReplay_Final1591438238.mov" type="video/mov">
            </video>
        </div>
    </div>
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
                $dbhost = "sql202.epizy.com";
                $dbuser = "epiz_25625347";
                $dbpass = "36D0QWJxImx";
                $db = "epiz_25625347_travelblog";
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