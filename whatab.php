<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RIKIYA AOYAMA</title>
    <link rel="stylesheet" href="CSS/main.css">
  </head>
  <body>
    <header class="page-header wrapper">
      <nav>
        <ul class="main-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li class="wide-width"><form id="works">
            <div class="select-wrap">
              <select name="select">
                <option value="" hidden>WORKS</option>
                <option value="whatab.php">Whatab</option>
                <option value="re-cipe.php">Re-cipe</option>
                <option value="analog-helper.php">AnalogHelper</option>
                <option value="portfolio.php">Portfolio Site</option>
              </select>
            </div>
          </form></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="works-content wrapper">
        <div class="page-title">
          <h2>Whatab</h2>
        </div>
        <div class="url">
          <p>ページURL: <a href="https://whatab.herokuapp.com/index.php">https://whatab.herokuapp.com/index.php</a></p>
          <p>Github</p>
          <p>JavaScript版のGithub: <a href="https://github.com/miguel-aoyama/whatab-js">https://github.com/miguel-aoyama/whatab-js</a></p>
        </div>
        <div class="introductions">
          <div class="PC-main">
            <div class="PC-main-image">
              <img src="images/Whatab/pc-main.jpeg" id="big-img" >
            </div>
            <div class="sub-image">
              <ul>
                <li><p>PCメインページ</p>
                  <img src="images/Whatab/pc-main.jpeg" class="thumb aside" data-image="images/Whatab/pc-main.jpeg" alt=""> </li>
                <li><p>PC モーダル画面</p>
                  <img src="images/Whatab/pc-modal.jpeg" class="thumb aside" data-image="images/Whatab/pc-modal.jpeg" alt=""> </li>
                <li> <img src="images/Whatab/sp-main.jpeg" class="thumb side" data-image="images/Whatab/sp-main.jpeg" alt=""> </li>
                <li> <img src="images/Whatab/sp-modal.jpeg" class="thumb side" data-image="images/Whatab/sp-modal.jpeg" alt=""> </li>
              </ul>
            </div>
          </div>
          <div class="pages">
            <!--img-->
          </div>
        </div>
        <div class="contents">
          <div class="summry">
            <h3>プログラムの概要</h3>
            <p>ギターのコードを調べるアプリです。ラジオボタンで入力するとコードの名前が検索できます。
            ピアノの鍵盤の部分に選択中の音が表示されます。友人と2人で作りました。</p>
          </div>
          <div class="purpose">
            <h3>制作の目的</h3>
            <p><strong>サービス面</strong></p>
            <p>ギターの弾き方は分かるけど、コードの名前や、構成されている音が分からないという人(私)向けに作りました。
            ギターのメロディをピアノで弾きたいときにこのアプリをよく使っています。</p>
            <p><strong>技術面</strong></p>
            <p>HTML,CSSへの理解を深めるところが大きかったです。
            他にはPHPでのフォームの送受信、配列操作を使って初歩的なものを作るという目的で作りました。コードを割り出すプログラムに関しては友人が担当しています。</p>
          </div>
          <div class="sticking">
            <h3>こだわりのポイント</h3>
            <p><strong>レスポンシブ対応のUIにこだわりました</strong></p>
            <p>PC画面(幅700pxより上)ではギターの画像が横表示になっているのですが、スマートフォン表示(幅700px以下)
            の時にはギターの画像やラジオボタンの並びを縦にし、見やすさと使いやすさを意識しています。</p>
            <p><strong>実際の運用を意識</strong></p>
            <p>実際にWebサイトとして使えるように、セキュリティ対策、SNSへのシェアボタン、ファビコンを設置しました。</p>
            <p><strong>Whatabという名前</strong></p>
            <p>何のタブ(ギターの楽譜のこと)かという意味の造語です。</p>
          </div>
          <div class="langage">
            <h3>使用言語・開発環境</h3>
            <p>HTML, CSS, JavaScript, Vue.js, PHP, Python(友人が担当)</p>
          </div>
        </div>
      </div>
    </main>
    <script src="js/master.js"></script>
  </body>
</html>
