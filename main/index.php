<?php
  require_once("../common/common.php");
  //Trip
  $sql  ="select t.id,t.prefecture,date,comment,en_area,title,image from trips as t join prefectures as p on t.id = p.id order by t.id desc;";
  $stmt = $pdo->query($sql);
  $trips = $stmt->fetchALL(PDO::FETCH_ASSOC); //PHPの配列,連想配列の形式に変更
  //book
  $sql2  ="select author,title,year,press,comment from books order by RAND() LIMIT 3;";
  $stmt2 = $pdo->query($sql2);
  $books = $stmt2->fetchALL(PDO::FETCH_ASSOC); //PHPの配列,連想配列の形式に変更
  $books1 = array_slice($books,0,1);
  $books2 = array_slice($books,1,2);
?>

  <!--------------ヘッダー：グローバルナビゲーション--------------------->
<?php include('../../mysite/common/header.php'); ?>
  <!-------------------トップ画面（画像＋テキスト）--------------------->
<!-- FirstView -->
<section id="firstview">
  <div class="fv-left">
        <div class="fv-left-content">
      <img class="fv-left-logo pc" src="../common/img/s_logo.png">
      <div class="fv-left-sub-title google-font pc">mysite</div>
      <div class="fv-left-title google-font">Into the wild</div>
      <ul class="fv-left-menu google-font pc">
          <li><a href="/mysite/main/index.php#profile-wrapper">01_Profile</a></li>
          <li><a href="/mysite/main/index.php#book-wrapper">02_Books</a></li>
          <li><a href="/mysite/main/index.php#trip-wrapper">03_Trips</a></li>
          <li><a href="/mysite/main/index.php#music-wrapper">04_Music</a></li>
          <li><a href="/mysite/main/index.php#contact-wrapper">05_Contact</a></li>
      </ul>
   </div>
  </div>
  <div class="fv-right">
  </div>
</section>
<!-- Profile -->
<section id ="profile-wrapper" class="fade-in fade-in-left box">
    <div class="title profile">
      Profile
    </div>
    <div class="contents">
        <div class="grid-divide">
            <div class="grid-left">
                <img class="portrait" src="../common/img/main/profile/portrait.png" alt="分身">
                <p class="prof-name">sh-kikuchi</p>
                <ul class="prof-list">
                    <li>平成6年7月26日生</li>
                    <li>獅子座/B型</li>
                </ul>
            </div>
            <div class="grid-right">
                <div class="prof-word pc">
                  <div class="sentence google-font">
                  The pessimist complains about the wind<br>
                  the optimist expects it to change<br>
                  the realist adjusts the sails<br>
                  </div>
                  <small>—William Arthur Ward</small>
               </div>
               <a href="" id="modalOpen" class="prof-link modalOpen" data-target="modal-starwars">
                    <div class="prof-index" style="display:;">
                        <div class="prof-content-number google-font">01</div>
                        <div class="prof-content">
                            <h3>The nerd force awakens</h3>
                            <small>Episode V</small>
                        </div>
                        <div class="prof-triangle"></div>
                    </div>
                </a>
                 <a href="http://sh21mysite.com/mystudy/index/index.php" class="prof-link">
                    <div class="prof-index">
                        <div class="prof-content-number google-font">02</div>
                        <div class="prof-content">
                            <h3>Time in History</h3>
                            <small>An unending dialogue between the present and the past.</small>
                        </div>
                        <div class="prof-triangle"></div>
                    </div>
                </a>
                 <a href="https://sh-revue.net/" class="prof-link">
                    <div class="prof-index">
                        <div class="prof-content-number google-font">03</div>
                        <div class="prof-content">
                          <h3>Re:Vue</h3>
                          <small>my anthology that expresses what I've learned from Information Technology.</small>
                        </div>
                        <div class="prof-triangle"></div>
                    </div>
                </a>
            </div>
       </div>
    </div>
</section>
<section id="trip-wrapper" class="fade-in fade-in-right box">
  <div  class="title trip">Trip</div>
  <div class="contents">
    <div class="trip-image-area pc">
      <div><img src="../common/img/trip.png" class="trip-img"></div>
      <div class='arrow_box_left'>You can’t get away from yourself by moving from one place to another.<br>(Ernest Hemingway)</div>
    </div>
    <div class="trip-lineup">
      <ul class="filter">
        <li class="lineup-tab" active><a class="all active" data-filter="all" href="#">ALL</a></li>
        <li class="lineup-tab"><a class="hokkaido" data-filter="hokkaido" href="#">北海道</a></li>
        <li class="lineup-tab"><a class="tohoku" data-filter="tohoku" href="#"> 東北</a></li>
        <li class="lineup-tab"><a class="kanto" data-filter="kanto" href="#"> 関東</a></li>
        <li class="lineup-tab"><a class="chubu" data-filter="chubu" href="#"> 中部</a></li>
        <li class="lineup-tab"><a class="kinki" data-filter="kinki" href="#"> 近畿</a></li>
        <li class="lineup-tab"><a class="chugoku" data-filter="chugoku" href="#"> 中国</a></li>
        <li class="lineup-tab"><a class="shikoku" data-filter="shikoku" href="#"> 四国</a></li>
        <li class="lineup-tab"><a class="kyushu" data-filter="kyushu" href="#"> 九州・沖縄</a></li>
      </ul>
    </div>
    <div class="modal-area">
        <?php foreach ($trips as $trip){?>
            <div class="trip-content" data-category="<?php echo htmlspecialchars($trip["en_area"]);?>">
              <a href="" id="modalOpen" class="modalOpen" data-target="<?php echo htmlspecialchars($trip["id"]);?>">
                <img class="trip-image" src="../common/img/main/trip/<?php echo htmlspecialchars($trip["image"]);?>" alt="画像">
              </a>
            </div>
        <?php }?>
    </div>
      <div><img src="../common/img/trip.png" class="trip-img sp"></div>
  </div>
</section>
<!--------------------Music------------------------>
<section id="music-wrapper" class="fade-in fade-in-left box">
    <div class="title music">Music</div>
    <div class="contents">
        <div class="tab-panel">
            <!--タブ-->
            <ul class="tab-group">
              <li class="tab playlist is-active">playlist</li>
              <li class="tab live">live</li>
            </ul>
        </div>
        <!--タブを切り替えて表示するコンテンツ-->
        <div class="panel-group">
          <div class="panel playlist is-show">
              <div class="music-container">
                  <iframe class="play-list" allow="autoplay *; encrypted-media *;" frameborder="0" height="380" style="width:100%;max-width:300px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/playlist/my-review-ver-mmxx/pl.u-PDb4085uLpLv7RA"></iframe>
                  <iframe  class="play-list" src="https://open.spotify.com/embed/playlist/03BIDg9G1XlyOqm6PVKii2" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
              </div>
          </div>
          <div class="panel live">
              <div class="live-wrapper">
                  <iframe  class="live-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.1715895363245!2d140.03118156561138!3d35.64814383939263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022821fd52ebfdf%3A0xcec0c09c4bed45e0!2z5bmV5by144Oh44OD44K7!5e0!3m2!1sja!2sjp!4v1654323681063!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <div class="live-text">
                    <p class="artist">GLAY</p>
                    <p class="live-name">We♡Happy Swing Vol.3 </p>
                    <p class="site-name">幕張メッセ</p>
                    <p class="live-date"><br>2022年7月31日（日）</p>
                    <p class="address">〒261-0023 千葉県千葉市美浜区中瀬２丁目１</p>
                    <a class=live-list href="../concert/list.php">過去のライブ参戦履歴</a>
                  </div>
              </div>
          </div>
        </div>
        <div><img src="../common/img/music.png" class="music-img"></div>
    </div>
</section>
<!-- Book -->
<section id="book-wrapper" class="fade-in fade-in-right box">
    <div class="title book">Book</div>
    <div class="contents">
        <div class="grid-divide book">
            <div class="grid-left">
                <?php foreach ($books1 as $book){?>
                    <div class="book-box active box-design">
                      <div class="book-text">
                        <div class="book-title"><?php echo htmlspecialchars($book["title"]);?></div>
                        <div class="book-note">
                            <p class="book-about about-text"><?php echo htmlspecialchars($book["comment"]);?></p>
                        </div>
                        <p class="book-author about-text"><?php echo htmlspecialchars($book["author"]);?></p>
                        <p class="book-year about-text"><?php echo htmlspecialchars($book["year"]);?>年</p>
                        <p class="book-press about-text"><?php echo htmlspecialchars($book["press"]);?></p>
                      </div>
                    </div>
                <?php }?>
                <?php foreach ($books2 as $book){?>
                    <div class="book-box">
                      <div class="book-text">
                        <div class="book-title"><?php echo htmlspecialchars($book["title"]);?></div>
                        <div class="book-note">
                            <p class="book-about about-text"><?php echo htmlspecialchars($book["comment"]);?></p>
                        </div>
                        <p class="book-author about-text"><?php echo htmlspecialchars($book["author"]);?></p>
                        <p class="book-year about-text"><?php echo htmlspecialchars($book["year"]);?>年</p>
                        <p class="book-press about-text"><?php echo htmlspecialchars($book["press"]);?></p>
                      </div>
                    </div>
                <?php }?>
                <div class="book-pagination">
                    <div class="button prev">PREV</div>
                    <div></div>
                    <div class="button next">NEXT</div>
                </div>
            </div>
            <div class="grid-right">
              <div>
                  <div class='arrow_box'>
                    <div class="book-app-detail">
                      感じたことを綴ったり、<br>
                      お気に入りの一節を書き留めたり、<br>
                      自ら考えたことを整理したり、<br>
                      読書を通じた様々な体験を記録してみませんか？<br>
                    </div>
                    <div class="app-link">
                        <a href="http://sk-bookstock.herokuapp.com/login">bookstockへ</a>
                    </div>
                </div>
              </div>
              <div>
                <img src="../common/img/https___www.linustock.com_images_uploads_2017_12_1513228735.png" class="book-app-img">
              </div>
            </div>
       </div>
    </div>
</section>
<!-- contact -->
<section id="contact-wrapper" class="fade-in fade-in-left box">
 <h2 class="title contact">Contact</h2>
  <div class="contents ">
    <form id="contactForm" action="./send_mail.php" method="POST">
      <div class="form-group">
        <!--お名前-->
        <label class="contact-text" for="name">お名前</label>
        <input type="text" id="username" name="username" class="username" placeholder="名前を入力してください">
      </div>
      <div class="form-group">
        <!--メールアドレス-->
        <label class="contact-text" for="emall">メールアドレス</label>
        <input type="text" id="mail" name="mail" class="mail" placeholder="メールアドレスを入力してください">
      </div>
      <div class="form-group">
        <!--セレクトフォーム-->
        <label class="contact-text" for="main">主なご用件</label>
        <div class="form-group-select">
          <select id="option" name="option" class="option">
            <option value="">どのようなご用件ですか</option>
            <option value="ご質問・ご意見">ご質問・ご意見</option>
            <option value="オファー・依頼">オファー・依頼</option>
            <option value="サイトの感想">サイトの感想</option>
            <option value="その他">その他</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <!--お問い合わせフォーム-->
        <label class="contact-text" for="comment">問い合わせ内容</label>
        <textarea id="comment" name="comment" class="comment" cols="60" rows="10" placeholder="ここに記入して下さい"></textarea>
      </div>
      <!--送信ボタン-->
      <input class="send-button" type="submit" value="送信する">
    </form>
  </div>
</section>


<?php include('../../mysite/common/footer.php'); ?>


<!--モーダル画面-->
<?php foreach ($trips as $trip){?>
<div class="modal-main" id="<?php echo htmlspecialchars($trip["id"]);?>">
  <div class="modal-inner">
    <div class="modal-content">
      <p class="modal-title"><?php echo htmlspecialchars($trip["title"]);?></p>
      <img class="modal-image" src="../common/img/main/trip/<?php echo htmlspecialchars($trip["image"]);?>" alt="画像">
      <div class="trip-text">
        <span class="trip-modal-name"><?php echo htmlspecialchars($trip["prefecture"]);?></span>
        <span class="trip-modal-date"><?php echo htmlspecialchars($trip["date"]);?></span>
      </div>
      <p class="modal-text"><?php echo htmlspecialchars($trip["comment"]);?></p>
      <a href="" id="modalClose" class="modal-close" data-target="<?php echo htmlspecialchars($trip["id"]);?>">Close</a>
    </div>
  </div>
</div>
<?php }?>

<!--モーダル画面-->
<div class="modal-main" id="modal-starwars">
  <div class="modal-inner">

    <!-- Place in Body where you'd like intro to appear -->
    <div class="star-wars-intro">

      <!-- Blue Intro Text -->
      <p class="intro-text">
        A long time ago in a galaxy far,<br>far away....
      </p>

      <!-- Logo Image or Text goes in here -->
      <h2 class="main-logo">
        <img src="../common/img/main/starwars/icons8-star-wars-480.png">
      </h2>

      <!-- All Scrolling Content Goes in here -->
      <div class="main-content" style="width:100%; height:1500px;">
        <div class="title-content">
          <p class="content-header">EPISODE V<br>The Nerd Force Awakens</p><br>


            <p class="content-body">It’s dark time. Although we escaped the onslaught of the COVID-19 army, my descent into madness had been begun. I was not as strong as I wanted to be, and one by one, the tiny soldiers who were my comrades disappeared somewhere. And I got a stomach ache from eating bad apple.<br><br>In my lurking place, I was to able to managed to survive, although the situation there has also been difficult to live with due to various alien speculations. But because of this situation, I have been able to deepen my dialogue with the Force. I have come to understand that the Force is a dialogue between light and darkness.<br><br> In order to apply the knowledge I have gained through my training in the right direction, I have decided to make the current situation "null".In other words, it's time to change your environment with the words freedom only helps you say goodbye...
            </p>
          <!-- button or link or whatever
          <p></p>
          <a  class="space-button">profile</a>-->
        </div>
      </div>
    </div>
　</div> <!-- modal-inner -->
　 </div><!--modal-main-->
