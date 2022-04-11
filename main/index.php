<?php
  require_once("../common/common.php");
  $sql  ="select t.id,t.prefecture,date,comment,en_area,title,image from trips as t join prefectures as p on t.id = p.id order by t.id desc;";
  $stmt = $pdo->query($sql); //PDOに備わっているquery機能を使って、1行目で設定した構文を使い、データを取り出す
  $result = $stmt->fetchALL(PDO::FETCH_ASSOC); //PHPの配列,連想配列の形式に変更
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
    <h2 class="title" style="padding-bottom:0;">:Profile</h2>
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
                <div class="prof-content">
                    <a href="" class="modalOpen" data-target="modal-starwars">遠い昔、はるか彼方の赤羽で</a>
                    <small>m@y 7h3 f0rc3 b3 w17h y0u</small>
                </div>
                <div class="prof-content">
                    <a href="http://sh21mysite.com/mystudy/index/index.php">Time in History</a>
                    <small>高等遊民を目指しつつ、歴史の深い手に惹かれる</small>
                </div>
                <div class="prof-content">
                    <a href="https://sh-revue.net/">Re:Vue</a>
                    <small>余生におけるプログラミングのまとめ</small>
              </div>
            </div>
       </div>
    </div>
</section>

<!-- Book -->
<section id="book-wrapper" class="fade-in fade-in-right box">
    <h2 class="title" style="padding-bottom:0;">:Book</h2>
    <div class="contents">
        <div class="grid-divide book">
            <div class="grid-left">
                  <div class="book-box active box-design">
                    <div class="book-text">
                      <div class="book-title">大河の一滴</div>
                      <p class="book-about about-text">「人はみな大河の一滴」である。見様によれば、マイナス思考ともとれる言葉であるが、著者はその極限まで降りていって、絶望の底から見える光を見た時の驚きこそがプラス思考だという。このようにAと非Aは共存できないという西洋型の「対立」の形式ではなく、＜中庸＞だとか＜寛容＞が生きることに必要であるという。人間のこころの光と影―二律背反な感情―が共存していて、まずはその混沌を認めることから始める。そこから如何にして、融通無碍の境地をつくることが出来るか、この過程こそが生命力の強さなのだと教えてくれる。個々のこころの中の葛藤をそのまま受け止め、行動や考え方の自由へと昇華させる。それにはマイナス思考も欠かせぬものになるし、邪魔な存在ではないのだと考えさせられる。1998年に書かれたこの本であるが、現代においても人間の知性を育てる感情とか情念、こころの豊かさを醸成していくことが課題であることを痛感してならない。</p>
                      <p class="book-author about-text">五木寛之</p>
                      <p class="book-year   about-text">1999年(文庫）</p>
                    </div>
                  </div>
                  <div class="book-box">
                    <div class="book-text">
                      <div class="book-title">胸懐</div>
                      <p class="book-about about-text">『胸懐』はTAKUROの自伝であると同時にGLAYが歩んできた軌跡を綴ったもの。「家族」との音楽体験、GLAYを通じた、様々な「仲間」との出会い、「東京」でメジャーデビューを果たし、成功や「幸福」を手にしてきたこと、その裏腹にあったTAKUROと彼女との間の「喪失」などの実話が赤裸々に綴られている。中でも彼の「永遠」に対する想いは私の心を掴んで離さない。TAKUROによれば、どんな幸せも永遠には続かないし、人はそれを願うから不幸なのだと。だが、それが「一瞬の永遠」であるとしたら人生は輝かしいものになるのだと。私は「一瞬の永遠」はひたすら現実を意味しているように思えた。人は幸せを失うまいと恐れてしまい、やがて自分の手で握りつぶしてしまう。ならばいっそ、そのまま受け入れてみるが良いというのだが、それは失うことの残酷さを享受しなければならないということでもある。このように「生」のリアリティを感じさせてくれる点にこの本の魅力がある。</p>
                      <p class="book-author about-text">TAKURO</p>
                      <p class="book-year   about-text">2003年</p>
                    </div>
                  </div>
                  <div class="book-box">
                    <div class="book-text">
                      <div class="book-title">失敗の本質 日本軍の組織論的研究</div>
                      <p class="book-about about-text">大学時代の師である戸部良一先生が編者の著書。太平洋戦争における日本軍の組織的な研究でありながら、ビジネス文書として読まれることも多い。軍事において、作戦目的の多義性や不明確性が戦略目的を曖昧なものにしてしまう。そのため、グランド・ストラテジー(grand strategy)の策定が重要である。それは組織が有するあらゆる資源をある目標に向かって調整し、指向することであり、その都度パフォーマンス・ギャップを把握することで組織学習を促すことが出来る。自己の行動をたえず変化する現実に照らし合わせ修正していくことで自己革新的な組織になることが出来るのだが、それには自己否定的な学習も伴う。学習とは知識の蓄積とは一概に言えず、「学習棄却」(unlearning;既存知識の棄却)を必要とするので、状況に応じた取捨選択が必要である。絶え間なく変化する状況を組織として十分に咀嚼し、それに対して指針を設定することが出来るかが、組織の善し悪しを決める。</p>
                      <p class="book-author about-text">戸部良一、寺本義也、鎌田伸一、杉之尾孝生、村井友秀、野中郁次郎</p>
                      <p class="book-year   about-text">1991(文庫）</p>
                    </div>
                  </div>
                  <div class="book-pagination">
                      <div class="button prev">PREV</div>
                      <div></div>
                      <div class="button next">NEXT</div>
                  </div>
            </div>
            <div class="grid-right">
              <div>
                  <div class='arrow_box'>
                    <h3 class="book-app-title">bookstock</h3>
                    <div class="book-app-detail">
                      感じたことを綴ったり、<br>
                      お気に入りの一節を書き留めたり、<br>
                      自ら考えたことを整理したり、<br>
                      読書を通じた様々な体験を記録できる<br>
                      モノを作りました。<br>
                      お名前は「bookstock」です。
                    </div>
                </div>
              </div>
              <div class="app-link">
                 <a href="http://sk-bookstock.herokuapp.com/login">アプリへ</a>
              </div>
            </div>
       </div>
    </div>
</section>
<!-------------------旅行--------------------->
<section id="trip-wrapper" class="fade-in fade-in-left box">
  <h2  class="title">:Trip</h2>
  <div class="contents">
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
        <?php foreach ($result as $list){?>
            <div class="trip-content" data-category="<?php echo htmlspecialchars($list["en_area"]);?>">
              <a href="" class="modalOpen" data-target="<?php echo htmlspecialchars($list["id"]);?>">
                <img class="trip-image" src="../common/img/main/trip/<?php echo htmlspecialchars($list["image"]);?>" alt="画像">
              </a>
            </div>
            <!--モーダル画面-->
            <div class="modal-main" id="<?php echo htmlspecialchars($list["id"]);?>">
              <div class="modal-inner">
                <div class="modal-content">
                  <p class="modal-title"><?php echo htmlspecialchars($list["title"]);?></p>
                  <img class="modal-image" src="../common/img/main/trip/<?php echo htmlspecialchars($list["image"]);?>" alt="画像">
                  <div class="trip-text">
                    <span class="trip-modal-name"><?php echo htmlspecialchars($list["prefecture"]);?></span>
                    <span class="trip-modal-date"><?php echo htmlspecialchars($list["date"]);?></span>
                  </div>
                  <p class="modal-text"><?php echo htmlspecialchars($list["comment"]);?></p>
                  <a href="" class="modalClose">Close</a>
                </div>
              </div>
            </div>
          <?php }?>
      </div>
  </div>
</section>
<!--------------------Music------------------------>
<section id="music-wrapper" class="fade-in fade-in-right box">
    <h2 class="title">:Music</h2>
    <div class="contents">
        <div class="tab-panel">
    <!--タブ-->
    <ul class="tab-group">
      <li class="tab playlist is-active">playlist</li>
      <li class="tab live">live</li>
    </ul>

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
              <iframe class="live-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12928.479278101731!2d139.6307319!3d35.895081!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x506c1a377454849d!2z44GV44GE44Gf44G-44K544O844OR44O844Ki44Oq44O844OK!5e0!3m2!1sja!2sjp!4v1642305548553!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <div class="live-text">
                <p class="artist">GLAY</p>
                <p class="live-name">GLAY ARENA TOUR 2021-2022 "FREEDOM ONLY" </p>
                <p class="site-name">さいたまスーパーアリーナ</p>
                <p class="live-date"><br>2022年2月5日（土）</p>
                <p class="address">〒330-9111 埼玉県さいたま市中央区新都心８</p>
                <a class=live-list href="../concert/list.php">過去のライブ参戦履歴</a>
              </div>
          </div>
      </div>
    </div>
  </div>

    </div>
</section>
  <!-------------------お問い合わせフォーム--------------------->
<section id="contact-wrapper" style="background-color: #6E6E6E;">
  <h2  class="title">:contact</h2>
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
                <p class="content-header">EPISODE V<br>Vampire Strikes Back</p><br>

                  <p class="content-body">In the year MMXX, the invasion of the COVID-19 army has forced a change in lifestyle. A young man bitten by a vampire at the age of 20 is training hard every day to awaken "The NERD FORCE". However, Impulse of unknown cause flew him into the wilderness. He only weighs the equivalent of three apples. Confronted with his own dark side, he was forced to travel in search of a new base. While the world is surrounded by the horrors of the COVID-19 army, he searches for a place where his own will shows, but he has yet to find that freedom. It seems that it will take some time for the Force to awaken. However, hope was not lost. At a relay station, he found documents leading to Force Awakening.It was difficult to handle, but he made it his skill before facing the COVID-19 army again, and waited for the time to fight back.
                  </p>
                <!-- button or link or whatever
                <p></p>
                <a  class="space-button">profile</a>-->
              </div>
            </div>
          </div>
      　</div> <!-- modal-inner -->
   　 </div><!--modal-main-->
