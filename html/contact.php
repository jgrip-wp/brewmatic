<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->

<link rel="stylesheet" type="text/css" href="./css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="./css/animate.css"/>
<link rel="stylesheet" type="text/css" href="./css/contact.css"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/common.js"></script>
<script type="text/javascript" src="./js/wow.min.js"></script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
  <div id="wrapper">
    <input type="hidden" id="pageID" value="">
    <?php include './include/head.php'; ?>


    <article>
      <div id="contents">
        <p id="breadcrumb" class="op"><a href="./" class="home fonten">Top</a> > お問い合わせ</p>
        <div class="contents_main js-showhead">
          <div class="inner">
            <h2 class="page_title"><span class="page_title_en fonten">Contact</span>お問い合わせ</h2>
            <p class="page_title_detail">ブルーマチックジャパン、商品・サービスに対する<br>ご意見、ご質問はお問い合わせフォームに入力ください。</p>
            <div class="contents_main_box">
              <div class="common_brand_list">
                <img src="./images/common/logo_brand01.jpg" alt="BREW MATIC">
                <img src="./images/common/logo_brand02.jpg" alt="Curtis">
                <img src="./images/common/logo_brand03.jpg" alt="Carimali">
                <img src="./images/common/logo_brand04.jpg" alt="juia">
                <img src="./images/common/logo_brand05.jpg" alt="rheavendors group">
                <img src="./images/common/logo_brand06.jpg" alt="SANREMO">
                <img src="./images/common/logo_brand07.jpg" alt="BARATZA">
                <img src="./images/common/logo_brand08.jpg" alt="rockline">
              </div>
              <!-- /common_brand_list -->
              <div class="contact_content">
                <p class="contact_comment op">よくお問い合わせいただく内容をまとめた「<a href="#">よくあるご質問</a>」もご用意しています。<br>お客様の個人情報、お寄せいただいた相談内容は厳重に取扱いお問い合わせに対応させていただくための目的のみに利用いたします。<br>ご注意：※は必須項目です。</p>
                <div class="common_form">
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
                        <th>お問い合わせ分野<span>※</span></th>
                        <td>
                          <div class="checkbox_wrap">
                            <label for="machine_tools01">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_tools01]" id="machine_tools01"><span>業務用</span>
                            </label>
                            <label for="machine_tools02">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_tools02]" id="machine_tools02"><span>家庭用</span>
                            </label>
                            <label for="machine_tools03">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_tools03]" id="machine_tools03"><span>オフィス用</span>
                            </label>
                            <label for="machine_tools04">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_tools04]" id="machine_tools04"><span>その他</span>
                            </label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>ご興味をお持ちのブランド</th>
                        <td>
                          <div class="checkbox_wrap">
                            <label for="machine_brand01">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_brand01]" id="machine_brand01"><span>BREWMATIC</span>
                            </label>
                            <label for="machine_brand02">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_brand02]" id="machine_brand02"><span>Curtis</span>
                            </label>
                            <label for="machine_brand03">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_brand03]" id="machine_brand03"><span>CARIMALI</span>
                            </label>
                            <label for="machine_brand04">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_brand04]" id="machine_brand04"><span>JURA</span>
                            </label>
                            <br class="visiblepc">
                            <label for="machine_brand05">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_brand05]" id="machine_brand05"><span>rheavendors</span>
                            </label>
                            <label for="machine_brand06">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_brand06]" id="machine_brand06"><span>SANREMO</span>
                            </label>
                            <label for="machine_brand07">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_brand07]" id="machine_brand07"><span>BARATZA</span>
                            </label>
                            <label for="machine_brand08">
                              <input type="checkbox" class="form_checkbox" name="parm[machine_brand08]" id="machine_brand08"><span>ROCKLINE</span>
                            </label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>お問い合わせ件名</th>
                        <td>
                          <input type="text" class="form_input" name="parm[inquiry_subject]">
                        </td>
                      </tr>
                      <tr class="textarea_tr">
                        <th>お問い合わせ内容</th>
                        <td>
                          <textarea name="parm[inquiry_contents]" class="form_textarea"></textarea>
                        </td>
                      </tr>
                    </table>
                    <div class="form_privacy op">
                      <label for="privacy">
                        <input type="checkbox" class="form_checkbox" name="parm[privacy]" id="privacy"><span><a href="#" target="_blank">個人情報保護方針</a>に同意します</span>
                      </label>
                    </div>
                    <div class="form_btn">
                      <button type="submit">上記の内容で送信する</button>
                    </div>
                  </form>
                <!-- /common_form -->
              </div>
              <!-- /contact_content -->
            </div>
          </div>
        </div>
        <!-- /contents_main --> 
      </div>
      <!-- /contents --> 

    </article>

    <?php include './include/footer.php'; ?>

  </div>
  <!-- /wrapper -->
</body>
</html>
