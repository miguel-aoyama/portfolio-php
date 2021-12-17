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
          <h2>Analog-Helper</h2>
        </div>
        <div class="url">
          <p>ページURL: <a href="http://analog-helper.herokuapp.com/login">http://analog-helper.herokuapp.com/login</a> </p>
          <p>Github: <a href="https://github.com/miguel-aoyama/AnalogHelper">https://github.com/miguel-aoyama/AnalogHelper</a> </p>
        </div>
        <div class="introductions">
          <div class="PC-main">
            <p>PC メインページ</p>
            <div class="PC-main-image">
              <img src="images/Analog-helper/user-page.jpeg" id="big-img" >
            </div>
            <div class="sub-image">
              <ul>
                <li><img src="" class="thumb aside" data-image="" alt=""></li>
                <li><img src="" class="thumb aside" data-image="" alt=""></li>
                <li><img src="" class="thumb aside" data-image="" alt=""></li>
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
            <p>アナログシンセサイザーという楽器の設定を保存しておくアプリです。ツリー式になっているので、 曲ごとなど、カテゴリを分けておくことができます</p>
          </div>
          <div class="purpose">
            <h3>制作の目的</h3>
            <p><strong>サービス面</strong></p>
            <p>アナログシンセサイザーの設定は基本的に保存できません。なので設定を保存できて尚且つプロジェクトごとに分けて置けるアプリがあったら
            便利だと思い作りました。</p>
            <p><strong>技術面</strong></p>
            <p>Laravelで学んだことでアプリを作りたいと思い、作りました。まだ実装できていませんが、Vueのコンポーネント機能を使って
            データの受け渡しをしようと臨んでいます。</p>
          </div>
          <div class="sticking">
            <h3>こだわりのポイント</h3>
            <p><strong>ツリー型のWebサイト</strong></p>
            <p>プロジェクトごとに設定を保存するためにツリー型のWebサイトにしました。</p>
            <p><strong>スライダーを動かすと数値も変化</strong></p>
            <p>Add Boardのページではスライダーを動かすとその値に応じて上に表示されている数も変化します。</p>
            <p><strong>認証機能</strong></p>
            <p>ログインしているユーザー以外はそのユーザーのページが見れないようになっています。</p>
          </div>
          <div class="langage">
            <h3>使用言語・開発環境</h3>
            <p>HTML, CSS, Vue.js, PHP, Laravel, MySQL, SQLite(ローカル)</p>
          </div>
        </div>
      </div>
    </main>
    <script src="js/master.js"></script>
  </body>
</html>
