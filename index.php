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
      <div class="home-content wrapper">
        <h2 class="page-title">RIKIYA AOYAMA</h2>
        <p>簡単な自己紹介</p>
        <div class="works-container">
          <div class="whatab">
            <h3><a href="whatab.php">Whatab</h3>
            <img src="images/Whatab/pc-main.jpeg"></a>
            <p>ギターのコードを調べるアプリです。ラジオボタンで入力するとコードの名前が検索できます。
            ピアノの鍵盤の部分に選択中の音が表示されます。</p>
          </div>
          <div class="re-cipe">
            <h3><a href="re-cipe.php">Re-cipe</h3>
            <img src="images/Re-cipe/PC-main.jpeg"></a>
            <p>レシピを作りたい分量に変換するアプリです。料理サイトのレシピをコピペして、何人分にしたいか選択
            するだけで、分量を知ることができます。</p>
          </div>
          <div class="analog-helper">
            <h3><a href="analog-helper.php">Analog-Helper</h3>
            <img src="images/Analog-helper/user-page.jpeg"></a>
            <p>アナログシンセサイザーという楽器の設定を保存しておくアプリです。ツリー式になっているので、
            曲ごとなど、カテゴリを分けておくことができます。</p>
          </div>
          <div class="portfolio">
            <h3><a href="portfolio.php">Portfolio Site</h3>
            <img src="images/Portfolio/pc-main.jpeg"></a>
            <p>このサイトです。アプリの魅力を伝えられるようにスクロールアニメを使用しています。</p>

          </div>
        </div>
      </div>
    </main>
    <script src="js/master.js"></script>
  </body>
</html>
