<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'blog-desc.php';
    ?>
    <meta
      name="keywords"
      content="adamsochorec, adam sochorec, @adamsochorec, Åland Islands, Finland, Autumn, Turku, Vaasa, Archipelago Sea, Mariehamn, Fasta, Djupviksgrottan cave, hitchhiking, Jomala, rural settlements, camping, bushfraft, wilderness, adventure, hiking, exploration, ferry, cruise, archipelagos, natural beauty, island hopping, cultural heritage, outdoor activities, backpacking, outdoor travel, outdoor living, outdoor adventure, outdoor lifestyle, outdoor recreation, outdoor exploration, natural wonders, outdoor adventure travel, outdoor excursion, outdoor journey, outdoor trip, outdoor vacation, outdoor getaway, outdoor holiday, outdoor escapade, outdoor adventure trip, outdoor adventure vacation, outdoor adventure holiday, outdoor adventure getaway, outdoor adventure escapade, outdoor adventure journey, outdoor adventure trip"
    />
    <title>Åland | Adam Sochorec</title>
    <!-- Leaflet script start -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
      integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
      crossorigin=""
    />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script
      src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
      integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
      crossorigin=""
    ></script>
    <!-- Leaflet script end -->
  </head>

  <body id="aland" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname"><a href="/#blog"></a> / </span>
            <span class="pathname-current"></span
          ></i>
        </div>
        <br />
        <h1></h1>
        <br />
        <p class="pathname">
          <svg
            id="date"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
          >
            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"
            />
          </svg>
          October 2022
        </p>
        <div class="img">
          <img
            src="/img/22101685388877.jpg"
            alt="Dusty red gravel road cutting surrounding autumn colured forest in a half"
          />
        </div>
        <p>
          The
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Åland"
            >Åland Islands</a
          >
          are autonomously demilitarized territories under Finnish jurisdiction.
          They have their government,
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Flag_of_%C3%85land"
            >flag</a
          >, and historical heritage and are exempt from
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Conscription_in_Finland#Military_service"
            >Finnish conscription</a
          >. Although the western shore of the mainland is bilingual (Swedish
          and Finnish), the Åland Islands are entirely Swedish-speaking.
          <br />
          <br />I had been planning an expedition to the <i>land of ål</i> (
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/eel"
            >eel</a
          >) the since my arrival in Finland. In mid-October 2022, during the
          Autumn break, my friend
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.instagram.com/andreas_perjons/"
            >Andreas</a
          >, from Swedish
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Dalarna"
            >Dalarna</a
          >, and I decided to take a ferry from the Finnish coastal town of
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Turku"
            >Turku</a
          >
          (Åbo in Swedish). However, we had to stay overnight in Turku due to
          train connections from our hometown of
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Vaasa"
            >Vaasa</a
          >
          not matching the early ferry departure time.
        </p>
        <div id="map" style="border-radius: 6px">
          <p class="alt-alt">
            Satellite view of Archipelago sea on the left, Åland Islands in the
            middle, and the Åland sea on the right
          </p>
        </div>

        <p>
          For the first few hours of our cruise, we navigated through hundreds
          of
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/skerry"
            >skerries</a
          >
          as we sailed through the densest area of the
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Archipelago_Sea"
            >Archipelago Sea</a
          >. This area, approximately <b>8300 square kilometers</b> in size, is
          home to around <b>50,000 archipelagos</b> and tiny rocky islands
          (skerries). It is considered one of the largest areas by the number of
          archipelagos in the world and is truly an interesting sight to behold.
          <br />
        </p>
        <div class="img">
          <img
            src="/img/IMG_3017.jpg"
            alt="Photo of skerries covered by vegetation, located in the Archipelago sea"
          />
        </div>
        <p><i class="note">Skerries in the Archipelago Sea</i></p>
        <div class="img">
          <img
            src="/img/IMG_3020.jpg"
            alt="Photo of several boulder archipelagos with erected wind turbines, located in the Archipelago sea"
          />
          <br /><br class="hide" />
        </div>
        <p>
          After disembarking from the Baltic princess in
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Mariehamn"
            >Mariehamn</a
          >, the capital of the Åland Islands, we met our third adventure
          seeker,
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.instagram.com/marcelhajik/"
            >Marcel</a
          >
          from Slovakia. We resupplied our groceries and liquids in Åland's
          capital and the largest city before starting our journey of discovery
          from south to north. We followed a rule of thumb to take a short break
          every 45-60 minutes to stretch, eat some sugar or protein, and
          hydrate. This helped us to maintain our performance and motivation
          over the long haul.
        </p>
        <div class="img">
          <img
            src="/img/IMG_3063.jpg"
            alt="Photo of resting Andreas with dark sky in the background. Andreas’s face is highlighted by the screen of the phone he is holding"
          />
        </div>
        <p>
          The following day we woke up in our
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Bushcraft"
            >bushcraft</a
          >
          camp on the banks of Lake Långsjön. Right in the morning we had to
          change our plans when we learned that the local ferry we were supposed
          to take back from the north tip of the islands only operates during
          the summer.<br />Our original plan to walk over 100km in five days,
          from south to north through the eastern hemisphere of the most
          inhabited island,
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Fasta_%C3%85land"
            >Fasta</a
          >, and return through the western hemisphere, was changed to
          hitchhiking and seeing as much as possible. We were able to reach the
          Djupviksgrottan cave by the evening of the second day with the help of
          two hitchhiking rides.
        </p>
        <div class="img">
          <img
            src="/img/22101584778866.jpg"
            alt="Marcel and Andreas are captured walking along the road, hitchhiking with their left thumbs, trying to stop approaching the car."
          />
        </div>
        <p>
          After saying goodbye to our last ferryman, we embarked on a journey
          through the western part of the islands. We walked and hitchhiked
          along the coast, taking in the beautiful scenery and meeting friendly
          locals. One of the highlights of the trip was visiting the lighthouse
          at the north tip of the islands. On the way back, we stopped at the
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/St._Olaf%27s_Church,_Jomala"
            >church in Jomala</a
          >, where we saw the graves of sailors who died at sea.
        </p>
        <div class="img">
          <img
            src="/img/22101685278874.jpg"
            alt="Outside view at
    our Djupviksgrottan cave camp, Marcel is reading a book and Andreas is
    keeping an eye on a campfire."
          />
          <br /><br class="hide" />
          <p><i class="note">The Djupviksgrottan cave</i></p>
        </div>
        <p>
          Before leaving the cave, Marcel and I scouted the surrounding
          countryside and were surprised to discover fancy-looking and
          well-equipped cottages just a few hundred meters above the cave,
          seemingly in the middle of nowhere. Later that day, we were back on
          our feet, walking on the red roads that are common on the Åland
          Islands, passing rural settlements and farms, and seeking rides once
          again.
        </p>
        <div class="img">
          <img
            src="/img/22101685428878.jpg"
            alt="Photo of pilgrims Marcel and Andreas walking over dusty red path up on a hill with Autumn forests in their background."
          />
        </div>
        <p>
          This time, our carriers were two fresh-looking wanderers we had talked
          with earlier that day in the cave (the only males who stopped for us
          during our entire journey!) We exchanged stories and tips with
          strangers in their cars, squeezed into the rear seats. On our way to
          the capital in the south, our paths split in Godby. As before, we
          resupplied with groceries, recharged our lithium batteries, chilled in
          the lobby, and reviewed our strategy.
        </p>
        <div class="img">
          <img
            src="/img/22101685668880.jpg"
            alt="Photo of an old blue Ford tractor with big red wheels, standing on aside of the road. The scene is listed by the morning sun."
          />
        </div>

        <p>
          It was just the second day of our expedition, and we had already
          reached our final destination. We decided to conquer the east of the
          archipelago territory as a plan for our remaining two days. To our
          disappointment, as soon as we finished our planning and got ready to
          continue, a violent storm with intense rain occurred. Despite fate's
          unwillingness, we proceeded further into darkness, far away from the
          city lights, still hoping for a ride.
        </p>
        <div class="img">
          <img
            src="/img/22101585138870.jpg"
            alt="Photo of Andreas and Marcel hiking through the forest in the northern part of Alands."
          />
        </div>
        <p>
          After an hour of struggling to attract passing drivers with smiles and
          hand waves, when it seemed that Ålanders were cold-hearted and without
          mercy for trespassing foreigners, a Nissan unnoticed our presence
          pulled over a few dozen meters away. As soon as we realized what had
          happened, we sprinted towards the car cheering. The lonely driver,
          Karolina, offered us hot tea and a promise of warming up in her nearby
          house.
        </p>
        <div class="img">
          <img
            src="/img/22101785778883.jpg"
            alt="Shot of a garden and family house built in a typical Scandinavian style - pastel green facade made out of wooden planks with white outlined corners and windows."
          />
          <br /><br class="hide" />
          <p><i class="note">Karolina's house</i></p>
        </div>
        <p>
          Later that evening we met most likely her entire family including
          cats, dogs, and chickens. Karolina's tribe made all of us wanderers
          feel as welcome as being back home and still being thousands of
          kilometers far away. The original tea break extended into a deep
          discussion and storytelling over dinner, with stoves heating our
          backs, with Karolina, the head of the tribe, Thomas, and their
          daughter Frida. When Andreas, Marcel, and I agreed that our hosts were
          truly generous to strangers, we were offered a sleepover (and bed!)
          and the keys to their car for the following day. We humbly accepted
          the given offerings and went to sleep like babies. Our third day began
          with the sound of the family's rooster and with both homemade yogurt
          and eggs.
        </p>
        <div class="img">
          <img
            src="/img/22101786368895.jpg"
            alt="Photo of an empty road through the Autumn colored forest, aside from the road stands a traffic sign informing about the name of our surroundings - Prästo."
          />
        </div>
        <p>
          Karolina advised us to scout the island of Prästo, which is among the
          locals prominent due to several
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Pr%C3%A4st%C3%B6,_%C3%85land#History"
            >historical graveyards</a
          >
          - Jewish, Muslim, and Christian ones. When we wandered around this
          truly spiritual archipelago and had a remarkable land view of our
          surroundings from a nearby tower and cuddled with a flock of curious
          sheep, we returned to our temporary basecamp to borrow a car and
          wander further east, over the red roads, which were from time to time
          replaced by car ferries, to the end of the road on
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/V%C3%A5rd%C3%B6"
            >Vårdö</a
          >.
        </p>
        <div class="img">
          <img
            class="noanimation"
            src="/img/2209595.png"
            alt="Photo of two
      really old Jewish gravestones on the former cemetery in the middle of
      Forrest, covered by moss and containing text in Hebrew. There are tiny
      stacks of small boulders on the top of each gravestone, as a symbol of
      respect and remembrance."
          />
        </div>
        <p>
          Our afternoon was spent in the spirit of attempts to fish in the
          crystal-clear water of an empty fishing village on the tip of Vårdö
          and swim in the October-cold
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Sea_of_%C3%85land"
            >Åland Sea</a
          >. Although you could count the days we spent together on the fingers
          of one hand when it came time for goodbye to our hosts in the evening,
          it felt like leaving a good old friend after a long time of not seeing
          each other. Despite not having an opportunity to repay the generosity
          of the family who took us in, I couldn't help but think that they were
          simply repaying a debt to someone else. The idea is that if I provide
          for others, my debt to the universe will be repaid and someone else
          will be treated with kindness.
        </p>
        <div class="img">
          <img
            src="/img/22101786668900.jpg"
            alt="Photo of me carrying posing Marcel upon my shoulders while standing in the cold Archipelago sea."
          />
        </div>
        <p>
          Our final task was to make it back to Mariehamn. We had no luck with
          hitchhiking, so after several hours of hiking through the empty red
          roads, we reached Godby, about 17km away, in the night and set up camp
          using a tarp on the banks of Lake Långsjön, like the first night. The
          final day was spent with the goal of reaching Mariehamn in the evening
          and spending the last night in the forest between the city and the
          seashore.
        </p>
        <div class="img">
          <img
            src="/img/22101484358861.jpg"
            alt="Photo of resting Andreas with dark sky in the background. Andreas’s face is highlighted by the screen of the phone he is holding"
          />
        </div>
        <p>
          Despite feeling like we had overcome all obstacles, the last one was
          the rain that lasted throughout the night. Marcel, who slept under the
          open sky in just a sleeping bag, was especially hard hit and was
          soaked in the morning. My
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://gobagguide.com/bivy-bag/"
            >bivak bag</a
          >
          protected me from most of the rain, but some still got in. Andreas,
          who had wisely set up a modest tent using his tarp, was the driest of
          us in the morning. Unfortunately, the tarp tent did not cover his feet
          and the large open entrance allowed the rain to get in. On the final
          morning, we compared our level of wetness and said goodbye. Marcel
          travelled back to Denmark via
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Stockholm"
            >Stockholm</a
          >, while Andreas and I returned to Turku, Finland.
        </p>
        <hr />
        <h2>Further reading</h2>
        <br />
        <div class="grid-container gallery">
          <a class="hh-stretch" href="/blog/vestkystruten">
            <div class="grid-item" id="vestkystruten">
              <span></span>
            </div>
          </a>
          <a href="/blog/blavand">
            <div class="grid-item" id="blavand">
              <span></span>
            </div>
          </a>
          <a href="/blog/house-hunting">
            <div class="grid-item" id="house-hunting">
              <span></span>
            </div>
          </a>
          <a href="/blog/västerbotten">
            <div class="grid-item" id="västerbotten">
              <span></span>
            </div>
          </a>
          <a class="hh-stretch" href="/blog/cybersecurity">
            <div class="grid-item reveal" id="cybersecurity">
              <span></span>
            </div>
          </a>
        </div>
        <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'global-totop.php';
          ?>
      </article>
    </main>
    <script type="text/javascript">
      const map = L.map("map");
      map.attributionControl.setPrefix("");
      L.tileLayer(
        "https://{s}.tile.thunderforest.com/landscape/{z}/{x}/{y}{r}.png?apikey=7c352c8ff1244dd8b732e349e0b0fe8d",
        {
          attribution:
            'Maps &copy; <a href="https://www.thunderforest.com">Thunderforest</a>, Data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap contributors</a>',
          maxZoom: 22,
        }
      ).addTo(map);

      map.setView([60.22776, 19.88992], 8);
    </script>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>