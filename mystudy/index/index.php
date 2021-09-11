<?php
  require_once("common.php");

  $sql_career = "select date,career from careers;"; //トピック
  $stmt_career = $pdo->query($sql_career);
  $career = $stmt_career ->fetchALL(PDO::FETCH_ASSOC);

  $sql_topic ="select date,topic from topics order by date desc;"; //トピック
  $stmt_topic = $pdo->query($sql_topic);
  $topic = $stmt_topic ->fetchALL(PDO::FETCH_ASSOC);

  /*レジュメリスト（pdf） */
  $sql_01 ="select title,file from histories where time_flag=1 order by id;"; //日本近現代史（戦前）
  $stmt_01 = $pdo->query($sql_01);
  $result_01 = $stmt_01->fetchALL(PDO::FETCH_ASSOC);

  $sql_02 ="select title,file from histories where time_flag=2 order by id;"; //日本近現代史（戦後）
  $stmt_02 = $pdo->query($sql_02);
  $result_02 = $stmt_02 ->fetchALL(PDO::FETCH_ASSOC);

  $sql_note ="select image,title,text,data_update from notes where user_id =1 order by data_update desc;";
  $stmt_note = $pdo->query($sql_note);
  $note = $stmt_note ->fetchALL(PDO::FETCH_ASSOC);
?>

<!--テーマは新聞風-->

 <?php include($_SERVER['DOCUMENT_ROOT'].'/mystudy/common/header.php');?>


  <div class="contents">
    <section id="top-wrapper">
      <h1 class="top-title">An unending dialogue<br> between the present and the past.</h1>
      <div class="top-content">
      <div class="top-img"><img class="img-globe" src="./img/globe.jpg"></div>
        <div class="top-text">
        <div id="langChenge">

          <input type="radio" name="land" id="langJa">
          <input type="radio" name="land" id="langEn" checked>
          <input type="radio" name="land" id="langZh">

          <label for="langJa">
            <span lang="ja">日本語</span>
            <span lang="en">Japanese</span>
            <span lang="zh">日本</span>
          </label>
          <label for="langEn">
            <span lang="ja">英語</span>
            <span lang="en">English</span>
            <span lang="zh">英语</span>
          </label>
          <label for="langZh">
            <span lang="ja">中国語</span>
            <span lang="en">Chinese</span>
            <span lang="zh">中文</span>
          </label>

        <br><br>

        <div lang="en">
          <h2>Introduction</h2><span class="first-character">W</span><span>elcome to the website "TIME in History"! Here you can learn a  Japanese history on politics and diplomacy from the Meiji period to Showa period that I studied as an undergraduate and graduate student! Anyway, why do we study history? Well, I believe that studying history is not only to find models for solving contemporary issues from past successes, but also to learn from the failures of human actions. History can be the best teacher, As there is also the word "sometimes the best gain is to lose."To achieve a peaceful society, we must encourage a vibrant dialogue between present and past, or goals and means for the future. When we consider "reality," it often contradicts the "ideal" we seek. In order to seriously consider how we can move from dilemma to dialogue and find "common ground," I think it is essential to study history. I hope that this site will become a forum to stimulate discussions on peace-building and diplomacy through the study of history and its meaning. Since diplomacy is also communication between countries, it might be an interesting experiment to use this as a material to think about how communication should be on various scales. </span><br>
          <p class="signature">sh.kikuchi</p>
        </div>
        <div lang="zh">
          <h2>引言</h2><span class="first-character">欢</span><span>迎来到TIME in Histtory。在这里，我把我在大学、研究生时期对“日本外交政治史”的相关研究，以报纸的形式总结呈现给大家！首先，我想先请大家思考一个问题：我们为什么需要学习历史？我认为，学习历史不但可以从过去的成功经验里找寻到解决现代课题的模型与方法，而且还能从人类过去的失败里有所领悟。正如俗语所言，“眼前的失败，也许今后会成为宝贵的财富”，历史能帮助我们更好地了解现代，指示方向。为了实现一个和平的社会，我们将必须促进现在与过去、未来的对话，面对未来的目标，活用方法，进行多方式交流。在考虑到“现实”时，我们经常对所追寻的“理想”本身产生矛盾。如何让“现实”与“理想”的对立转化为可对话的形式，“现实”与“理想”两者之间的平衡点在哪里？等等，当认真思考这些问题的时候，我认为学习历史就显得尤为重要。通过这个网站，我坚信我们现在能再一次重新领悟学习历史的重要性；通过学习与回顾历史，我们能建成构筑和平以及外交等议论论题的论坛平台。外交，即国与国之间的交流。各国间的外交，也可以当成是各式各样各种规模的交流，找寻其所存在的意义，我认为是一项很有意思的实验。</span><br>
          <p class="signature">sh.kikuchi</p>
        </div>
        <div lang="ja" class="into-ja">
          <h2>イントロダクション</h2><span class="first-character">T</span><span>IME in Histtoryへようこそ。ここでは、私が大学生・大学院生の時に研究していた日本政治外交史を新聞風にまとめてみました！さて、我々はどうして歴史を学ぶのでしょうか。私は、歴史を学ぶことは過去の成功体験から現代の課題を解決するモデルを見出すだけでなく、人間の所業における失敗を学ぶことでもあると考えています。「損して得をとる」こともあることから、歴史は現代を良く知る上の指標となるものです。平和な社会を実現するためには、私たちは現在と過去、ないしは未来に対する目標と手段の活き活きとした対話を促していかなければならないでしょう。「現実」を考えてみた時、それはしばしば、私たちが求める「理想」と矛盾が生じたりするものです。二項対立からいかにして対話へ向かうか、「共通基盤」を見出せるか、これらを真剣に考えるためにはやはり歴史を学ぶことは欠かせないのではないでしょうか。このサイトを通して、今一度、歴史を学ぶ意味やその学びを通して、平和構築や外交などの議論を活発化するフォーラムになってくれることを信じてやみません。外交も国同士のコミュニケーションなので、これを材料に様々な規模感のコミュニケーションの在り方を考えるのも面白い実験かもしれません。</span><br>
          <p class="signature">sh.kikuchi</p>
        </div>
        </div>
      </div>

    </section>

    <section id="about-wrapper">
      <h2 class="about-title">About me</h2>
      <div class="about-content">
        <div class="about-text">
          <h4 class="my-name">菊地修平 KIKUCHI,Shuhei</h4>
          <?php foreach($career as $career) { ?>
            <table>
              <tr>
                <td><?php echo date("Y-m", htmlspecialchars(strtotime($career["date"])));?></td>
                <td><?php echo htmlspecialchars($career["career"]);?></td>
              </tr>
            </table>
           <?php } ?>
          <div class="article-list">
            <p>論文</p>
            <ol>
              <li>「思想戦の系譜」</li>
              <li>「若泉敬外交論―自主外交の理論と実践」</li>
              <li>若泉敬の超党派外交に関する思索 -日本の「経済大国
                」としての国際的役割</li>
            </ol>
          </div>
          <div class="about-link">
            <a href="https://ci.nii.ac.jp/naid/120006727167">CiNii Articles</a>
          </div>

        </div>
      </div>
    </section>

    <section id="topic-wrapper">
      <h2 class="topic-title">Topics and News</h2>
      <?php foreach($topic as $topic) { ?>
      <div class="topics">
        <?php echo htmlspecialchars($topic["date"]);?><br><?php echo htmlspecialchars($topic["topic"]);?>
      </div>
     <?php } ?>
    </section>

    <section id="theme-wrapper">
      <div class="theme-content">
        <div class="theme01">
          <h2 class="title01">Theme<br>思想戦の系譜</h2>
          <p class="text">第一次世界大戦後、日本は総力戦体制の必要に迫られ、その一端として思想戦という概念が表面化した。それは敵国の戦意喪失や中立国の協力を取り付けるために行う宣伝であると同時に国民統合の手段として思想の統一化をはかるものである。日本の場合は「外国思想」の排除、すなわち民主主義・自由主義といった欧米思想や共産主義といったソ連の思想と日本国民との距離を離間させるために行うものであると同時に、そのような敵国思想に対して、日本独自の思想として「皇道思想」を強調することで国民統合をはかった。思想戦は1930年代にピークを迎え、近衛内閣下での国民精神総動員運動と相俟って、思想戦講座や思想戦展覧会や小冊子の作成など、精力的に対内的な思想戦を実施していたことが明らかとなった。しかしながら、「国防の本義」をきっかけに思想戦という語が世間で流行語化したものの、思想戦の実態は内向的で、自己の思想を掲げた、欧米思想や文化と対立する側面が強く、海外に自己の思想を浸透させる攻勢的な側面が弱かった。天羽英二は大東亜宣言を大東亜諸民族の結集を強調するのに有力な宣伝材料としていたと評価していたが、日本独自の「国体」観念や「皇道」思想を対外的に発信した訳ではなく、あくまで「大東亜共栄圏」構想の日本指導性を表面的に薄めたに過ぎなかった。また、日本のみが「大東亜共栄圏」を対外的に主張することになると指導性が却って疑い深く見られてしまう可能性もあった。そのことと戦争目的が新秩序形成か自存自衛なのかという曖昧性と相俟って、対外的な宣伝としては強い効力を持ちえなかった。日本が第一次世界大戦以降のアメリカやイギリスのデモクラシー思想の世界的普及やソ連の赤化運動が脅威と見えたとすれば、自国思想を対外的に発信するよりも、国民が敵国思想に触れることを第一に防ぎたかったという考え方に至るのも無理もなかったであろう。その意味で、アメリカにおいて戦時プロパガンダ作戦は心理戦争（Psychological War）と呼ばれていたことと日本における思想戦とは意味を異にすると説明ができるかもしれない。
          </p>
        </div>
        <div class="theme02">
          <h2 class="title02">Theme<br>若泉敬の超党派外交に関する思索―日本の「経済大国」としての国際的役割―</h2>
          <p class="text">若泉敬は沖縄返還の「密使」として知られているが、彼は講和問題や安保問題などをめぐって「保守」と「革新」の対立を問題し、安全保障や外交に関する超党派合意に基づいた自主外交の在り方も模索していた。高度経済成長や中国の核実験などを契機に、海外から日本の軍事大国化が懸念されるようになった。それに対応して、若泉は核軍縮を「保守」と「革新」の「共通基盤」として「核軍縮平和外交」（1967年）を提唱した。その骨子は日本を含めた潜在的核保有国を結集させることで核保有国に対するバーゲニングパワーを高めながら、その中で日本がイニシアティブをとるべきだとするものであった。<br>「核軍縮平和外交」が、佐藤栄作首相の目に留まり、沖縄返還交渉の密使として活躍することになるのだが、若泉にとって沖縄返還も「対米一辺倒」のイメージを払拭し、日本が自国の防衛や国際社会における役割の再考を促す点において、自主外交であった。その交渉過程では、日本が日米間の経済摩擦や発展途上国への経済貢献の課題が浮き彫りになり、その解決策として、若泉が新たに提示したのが、「全方位平和外交」（1973年）であった。<br>「全方位平和外交」は、日本が軍事大国化を明確に否定し、経済や文化など様々な面で国際協力をしていくことを主軸とする「偉大な実験」であった。それは、経済大国が軍事大国化するテーゼを覆し、核軍縮や東南アジアへの経済貢献の増大などに積極的な役割を果していくだけでなく、日米同盟を基軸としながらも、共産圏も含めた外交的地平の拡大を狙う意図も含まれていた。これにより、日本国内の超党派合意に基づいた自主外交を展開していくべきだと主張した。この外交論は福田赳夫内閣の外交理念として掲げられることになるが、若泉は「全方位平和外交」が一時の政権のものに留まらず、日本が国際的位置づけを認識し、「指針ある航海」をしていくための外交原則となることを期待していた。
          </p>
        </div>
        <div class="theme03">
          <h2 class="title03">Theme<br>戦後日本の知識人たち―「保守」と「革新」のディレンマ―</h2>
          <p class="text">『三酔人経綸問答』（中江兆民）という書がある。民権運動の挫折や明治憲法の制定などを背景に3人の男が酒を酌み交わしながら、日本近代化の進路について議論を重ねるという構成になっている。その一人である洋学紳士は「陸海の軍備を撤廃して、諸強国の万分の一にも足りぬ腕力をすて、無形の道義に立脚」する。勢力均衡論とは相容れず、自由・平等・博愛の大義による徹底した民主化と非武装平和論を唱えた。それに対して、「豪傑君」は軍備拡張を力説し、西洋諸国との競争にうって出ようと試みることが強国となるために肝要であると主張した。南海先生は両者の間に位置し、国内的には段階的な民主制を確立することを目指し、対外的には、非武装無抵抗や軍事的対外進出という両極端の道を採るのではなく、各国との「和好」を図りつつ、侵略された場合は、戦略的に「防守」を主眼として戦うべきだと考えた。この議論は戦後日本の政治議論を考える上でも重要なトピックである。戦後日本においては1960年代、現実主義者の高坂正堯と理想主義者の坂本義和の議論が知られている。坂本義和が日米安保を廃棄し，中立主義を唱えたのに対し，高坂正堯は坂本の中立論を「理想主義」として批判し，勢力均衡の観点から日米同盟は安全保障において現実的な手段として認めていたことはよく知られている。ただし、高坂は憲法第9 条に規定された絶対平和が日本の追求すべき価値であることは中立論の寄与するものとして捉えており，高坂流の「現実主義」とは「手段と目的との間の生き生きとした会話」を目指すものであった。これらの点を踏まえて、「保守」と「革新」ないし、「現実主義」と「理想主義」の対立構図を整理し、日本の国家目標をいかに設定する。「軍備なき平和」と「力による平和」というディレンマの中で、いかにして「目標の確定と手段の発見」、「対立」を「対話」へ転換する方法論を考察していきたい。
          </p>
        </div>
      </div>
    </section>

    <section id="resume-wrapper">
      <div class="resume-container">
        <div class="resume-text">
          <h2 class="resume-title">Japanese modern history</h2>
          <p>学生時代に作成したレジュメを基に編集しました。随時、内容は更新される予定です。</p>

          <div class="resume-frame">
            <div class="prewar">
              <!--まだ仮だからね！-->
              <ul class="menu">
                <li class="menu-items">
                  <div class="menu-link menu01">
                    <p class="menu-title">戦前篇</p>
                    <p class="menu-about">明治以降の西洋文化の流入が日本社会にいかなる影響を与えたのか。東洋と西洋の狭間の中で形成された日本外交像を浮かび上がらせるとともに軍事の社会面にも焦点を当て、戦争を通じた日本の組織文化について理解を深めることを目的とする。</p>
                    <img class="arrows arrow-01" src="./img/under_red.png">
                  </div>
                  <?php foreach ($result_01 as $prewar) {?>
                    <ul class="header-menu">
                        <li class="menu-item">
                            <a href="/mystudy/pdf/prewar/<?php echo htmlspecialchars($prewar["file"]);?>"> <?php echo htmlspecialchars($prewar["title"]);?> </a>
                        </li>
                    </ul>
                  <?php }?>
                </li>
              </ul>
            </div>

            <div class="postwar">
                <ul class="menu">
                    <li class="menu-items">
                      <div class="menu-link menu02">
                        <p class="menu-title">戦後篇</p>
                        <p class="menu-about">日本が国際復帰を果たし「経済大国」と呼ばれるようになった1950年～1970年に焦点をあて、通史的な理解だけでなく、日本の言論界あるいは政治界における保守と革新の「対立」の構図を整理し、逆に「共通基盤」が存在したのかを考察する。</p>
                        <img class="arrows arrow-02" src="./img/under_red.png">
                      </div>
                      <?php foreach ($result_02 as $postwar) {?>
                        <ul class="header-menu">

                            <li class="menu-item">
                                <a href="/mystudy/pdf/postwar/<?php echo htmlspecialchars($postwar["file"]);?>"> <?php echo htmlspecialchars($postwar["title"]);?> </a>
                            </li>
                        </ul>
                      <?php }?>
                    </li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="book-wrapper">
      <div class="book-container">
        <h2 class="book-title">Books</h2>
        <div class="book-text">
          <h3>『日本の外交』</h3>
          <p class="book-about about-text">近代日本の外交方針には思想的な基盤がなく、政府の現実主義と民間の理想主義が基本的なパターンであった。戦前における現実主義は専ら列国と肩を並べるための欧州協調路線が基調であった。それに対して、理想主義はアジア主義的な色彩を持った。その中には民権派としてアジア諸国に自由と独立を唱える者（中江兆民・小野梓）がいれば、日本の中国保全論（東亜同文会）やアジアの盟主を唱える民間団体（玄洋社・黒龍会）もいた。政府は道徳論や感情論を避け、地道に懸案の処理をはかろうとしたため、このような民間の思想とは相容れず、欧米追随する傾向が強かった。1930年後半から、政府も東亜新秩序のようなアジア主義的な方針はあるにせよ、それは必ずしも明治時代から一貫して形成されたものとは言えなかった。本書は近代日本の外交思潮を中心とするが、そこから教訓を得て、現代におけるパースペクティブある外交のヴィジョンを考えるのにも良書である。</p>
          <p class="book-author about-text">入江昭</p>
          <p class="book-year   about-text">1966年(中公新書）</p>
        </div>
      </div>
    </section>

 <section id="note-wrapper">
      <div class="note-container">
        <div class="note-title">
          <h2>Study Note</h2>
          <h4>論文のレビューや興味深い情報などがあったら、緩めにつぶやきます。</h4>
        </div>
        <div class="note-frame">

         <?php foreach ($note as $note){ ?>
          <div class="note-card">
            <div class="card-header">
              <div>
                <img class="tweet-img" src="./img/<?php echo htmlspecialchars($note["image"]);?>">
              </div>
              <div>
                <p class="tweet-title"><?php echo htmlspecialchars($note["title"]);?></title>
              </div>

            </div>
            <div>
              <textarea readonly maxlength=150 class="note-text"><?php echo htmlspecialchars($note["text"]);?></textarea>
            </div>
            <p class="updated-at"><?php echo htmlspecialchars($note["data_update"]);?></p>

          </div>
         <?php }?>
        </div>


      </div>
    </section>


    <section id="link-wrapper">
      <h2 class="link-title">Links</h2>
      <div class="link-content">
        <table>
          <tr>
            <th></th>
            <th>URL</th>
            <th>概要</th>
          </tr>
          <tr>
            <!--セル結合-->
            <td rowspan=4>検索</td>
            <!------------>
            <td><a href="https://ci.nii.ac.jp/naid/120006727167">論文</a></td>
            <td>若泉敬の超党派外交に関する思索</td>
          </tr>
          <tr>
            <td><a href="https://ci.nii.ac.jp/">CiNii Articles</a></td>
            <td>論文検索</td>
          </tr>
          <tr>
            <td><a href="https://www.ndl.go.jp/">国会図書館</a></td>
            <td>研究書・論文・資料の検索</td>
          </tr>
          <tr>
            <td><a href="https://scholar.google.com/">google-scolar</a></td>
            <td>グーグル先生</td>
          </tr>
          <tr>
          　<!--セル結合-->
            <td rowspan=1>翻訳</td>
            <!------------>
            <td><a href="https://www.deepl.com/en/translator">DeepL Translate</a></td>
            <td>外国語の訳出時の補助的なサポート。比較的、高性能翻訳。</td>
          </tr>
          <tr>
          　<!--セル結合-->
            <td rowspan=3>作業管理</td>
            <!------------>
            <td><a href="https://mega.nz/">MEGA</a></td>
            <td>50GBまで無料で利用できるクラウドストレージ</td>
          </tr>
          <tr>
            <td><a href="https://www.google.co.jp/drive/">Google Drive</a></td>
            <td> 15 GB まで無料で利用できる。共同向き</td>
          </tr>
          <tr>
            <td><a href="https://trello.com/ja">Trello</a></td>
            <td> タスク管理だけでなく、章ごとの資料整理やブレーンストーミングなどに活用できそう。</td>
          </tr>
        </table>
      </div>
    </section>

  </div>

 </body>

 <?php include($_SERVER['DOCUMENT_ROOT'].'/mystudy/common/footer.php');?>


</html>
