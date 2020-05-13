<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->

<link rel="stylesheet" type="text/css" href="/css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/animate.css"/>
<link rel="stylesheet" type="text/css" href="/css/catalog.css"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/common.js"></script>
<script type="text/javascript" src="/js/wow.min.js"></script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
  <div id="wrapper">
    <input type="hidden" id="pageID" value="">
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/head.php'); ?>


    <article>
      <div id="contents">
        <p id="breadcrumb" class="op"><a href="/" class="home fonten">Top</a> > 総合カタログのご請求</p>
        <div class="contents_main">
          <div class="inner">
            <h2 class="page_title wow fadeIn"><span class="page_title_en fonten">Catalog</span>総合カタログのご請求</h2>
            <p class="page_title_detail wow fadeIn">取り扱いマシンを紹介した総合カタログをご用意しています。</p>
            <div class="contents_main_box">
              <div class="catalog_content">
                <p class="catalog_comment op wow fadeIn">総合カタログのPDFは<a href="#">こちらからダウンロード</a>していただけます。<br>印刷したカタログが必要な方は、下記のお問合せフォームよりご連絡ください。<br>※お客様の個人情報は厳重に取扱いお問い合わせに対応させていただくための目的のみに利用致します。</p>
                <div class="common_form wow fadeIn">
                  <form action="">
                    <table>
                      <tr>
                        <th>お名前<span>※</span></th>
                        <td>
                          <input type="text" class="form_input" name="parm[name]">
                        </td>
                      </tr>
                      <tr>
                        <th>貴社名</th>
                        <td>
                          <input type="text" class="form_input" name="parm[company]">
                        </td>
                      </tr>
                      <tr>
                        <th>部署名</th>
                        <td>
                          <input type="text" class="form_input" name="parm[section]">
                        </td>
                      </tr>
                      <tr>
                        <th>お役職</th>
                        <td>
                          <input type="text" class="form_input" name="parm[position]">
                        </td>
                      </tr>
                      <tr class="contact_tr">
                        <th>連絡先<span>※</span></th>
                        <td>
                          <div class="form_telmail_box">
                            <div class="telmail_text">電話番号</div>
                            <input type="text" class="telmail_input" name="parm[tel]">
                          </div>
                          <div class="form_telmail_box">
                            <div class="telmail_text">E-mail</div>
                            <input type="text" class="telmail_input" name="parm[mail]">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>ご住所<span>※</span></th>
                        <td>
                          <input type="text" class="form_input" name="parm[address]">
                        </td>
                      </tr>
                      <tr>
                        <th>興味のあるマシン・ツールの分野<span>※</span></th>
                        <td>
                          <div class="checkbox_wrap">
                            <label for="machine_tools01">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_tools01]" id="machine_tools01">業務用
                            </label>
                            <label for="machine_tools02">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_tools02]" id="machine_tools02">家庭用
                            </label>
                            <label for="machine_tools03">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_tools03]" id="machine_tools03">オフィス用
                            </label>
                            <label for="machine_tools04">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_tools04]" id="machine_tools04">その他
                            </label>
                          </div>
                        </td>
                      </tr>
                      <tr class="textarea_tr">
                        <th>備考</th>
                        <td>
                          <textarea name="parm[remarks]" class="form_textarea"></textarea>
                        </td>
                      </tr>
                    </table>
                    <div class="form_privacy op">
                      <label for="privacy">
                        <input type="checkbox" class="form_checkbox" name="parm[privacy]" id="privacy"><a href="#" target="_blank">個人情報保護方針</a>に同意します
                      </label>
                    </div>
                    <div class="form_btn">
                      <button type="submit">上記の内容で送信する</button>
                    </div>
                  </form>
                </div>
                <!-- /common_form -->
              </div>
              <!-- /catalog_content -->
            </div>
          </div>
        </div>
        <!-- /contents_main --> 
      </div>
      <!-- /contents --> 

    </article>

    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'); ?>

  </div>
  <!-- /wrapper -->
</body>
</html>
